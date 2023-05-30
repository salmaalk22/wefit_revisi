<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index() /*login adanya di home controller*/
    {
        return view('login');
    }

    public function logout()
    {
        $session = \Config\Services::session();
        $session->remove('loggedIn');
        $session->remove('id');
        $session->remove('name');
        $session->remove('username');
        $session->remove('role');
        $session->setFlashdata('success', 'Successfully logout!');

        return redirect()->to('/'); /*balik ke login page*/
    }

    public function login()
    {
        $session = \Config\Services::session(); /*nampilin per sesi per acc beda data (histori kalori, fitur2 lain)*/
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = (string) $this->request->getPost('password');

        $user = $model
            ->where('username', $username)
            ->first();

        if (!$user) {
            $data = [
                'error' => 'username salah'
            ];
            return view('login', $data);
            // throw new \Exception("User not found!");
        }

        if (md5($password) != $user['password']) {
            $data = [
                'error' => 'password salah'
            ];
            return view('login', $data);
            // throw new \Exception("Credentials is invalid!");
        }

        $session->set('id', $user['id']);
        $session->set('name', $user['name']);
        $session->set('username', $user['username']);
        $session->set('role', $user['role']);
        $session->set('loggedIn', true);

        /*nge cek role admin/user*/
        if ($user['role'] === 'ADMIN') {
            return redirect()->to('/admin/users');
            // throw new \Exception("User not found!");
        }
        if ($user['role'] === 'USER') {
            return redirect()->to('/user/home?q=all');
            // throw new \Exception("User not found!");
        }
    }

    public function register()
    {

        return view('register');
    }

    public function form()
    {
        $model = new UserModel();
        $pw = (string) $this->request->getPost('password');

        $payload = [
            "name" => $this->request->getPost('name'),
            "username" => $this->request->getPost('username'),
            "password" =>  md5($pw),
            "role" => 'USER',
        ];


        $model->insert($payload);
        return redirect()->to('/');
    }
}
