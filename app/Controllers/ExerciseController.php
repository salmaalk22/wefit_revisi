<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ExerciseModel;

class ExerciseController extends BaseController
{
    public function __construct()
    {
    }

    /**
     * nampilin video2 exercises yg udh ada (home)
     *
     * @return mixed
     */
    public function index()
    {
        $model = new ExerciseModel();

        $data['data'] = $model->findAll();

        echo view('view_exercise', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        echo view('tambah_exercise');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     * buat nampilin form exercises admin
     */
    public function create()
    {
        $model = new ExerciseModel();

        $payload = [
            "name" => $this->request->getPost('name'),
            "video" => $this->request->getPost('video'),
            "type" => $this->request->getPost('type'),
        ];


        $model->insert($payload);
        return redirect()->to('/admin/exercise');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $model = new ExerciseModel();

        $data['data'] = $model->find($id);

        echo view('edit_exercise', $data);
    }


    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $model = new ExerciseModel();


        $payload = [
            "name" => $this->request->getPost('name'),
            "video" => $this->request->getPost('video'),
            "type" => $this->request->getPost('type'),
        ];

        $model->update($id, $payload);
        return redirect()->to('/admin/exercise');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new ExerciseModel();

        $model->delete($id);
        return redirect()->to('/admin/exercise');
    }
}
