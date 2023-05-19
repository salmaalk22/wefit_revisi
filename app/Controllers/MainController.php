<?php


namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ExerciseModel;
use App\Models\KaloriModel;

class MainController extends BaseController /*halaman home user*/
{
    public function index()
    {
        $request = \Config\Services::request();
        $params = $request->getGet();
        $video = $params['video'] ?? 'all';


        $model = new ExerciseModel();
        $data = [];
        if ($video == 'all') {
            $res = $model->findAll();
            $data['data'] = $res;
        } else {
            $res = $model->where('type =', $video)->findAll();
            $data['data'] = $res;
        }

        echo view('user_home', $data);
    }

    public function hitung()
    {
        $model = new KaloriModel();
        $session = \Config\Services::session();
        $user = $session->get('id');
        $currentDate = date('Y-m-d', time());


        $payload = [
            "user_id" => $user,
            "name" => $this->request->getPost('name'),
            "kalori" => $this->request->getPost('kalori'),
            "jam" => $this->request->getPost('jam'),
            "date" => $currentDate,
        ];


        $model->insert($payload);
        return redirect()->to('/user/histori-kalori');
    }
    public function kalori()
    {
        echo view('user_kalori');
    }

    public function histori()
    {
        $session = \Config\Services::session();
        $user = $session->get('id');

        $date = $this->request->getGet('date') ?? date('Y-m-d', time());;
        $model = new KaloriModel();
        $res = $model->where('user_id =', $user)->where('date =', $date)->findAll();
        $total = 0;
        foreach ($res as $item) {
            $total += $item['kalori'];
        }

        $data['data'] =  $res;
        $data['date'] =  $date;
        $data['total'] =  $total;
        echo view('user_histori', $data);
    }
}
