<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\StudentModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function registration(): string
    {
        return view('registration');
    }

    public function login(): string
    {
        return view('login');
    }

    private $student;

    public function __construct() {
        $this->student = new StudentModel();       
    }

    public function registerdata()
    {

        $rules = [
            "first_name" => 'required|min_length[3]|max_length[50]',
            "last_name" => 'required|min_length[3]|max_length[50]',
            "email" => 'required|valid_email|is_unique[auth.email]',
            "semester" => 'required',
            "gender" => 'required',
            "phone" => 'required|min_length[10]|max_length[10]',
            "password" => 'required',
        ];

        if ($this->validate($rules)) {
            $data = [
                "first_name" => $this->request->getVar('first_name'),
                "last_name" => $this->request->getVar('last_name'),
                "email" => $this->request->getVar('email'),
                "semester" => $this->request->getVar('semester'),
                "gender" => $this->request->getVar('gender'),
                "phone" => $this->request->getVar('phone'),
                "password" => $this->request->getVar('password')
            ];

            $model = new AuthModel();
            $result = $model->save($data);

            if ($result) {
                return view('login');
            } else {
                echo 'error';
            }
        } else {
            echo "error is not match password";
        }
    }

    public function logindata()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $model = new AuthModel();
        $result = $model->where('email', $email)->first(); 

        $data['students'] = $model->orderBy('id', 'DESC')->findAll();  

        if ($result && $result['password'] === $password) {
            return view('homepage', $data);
        }

        // return view('homepage', $data);
    }
}


