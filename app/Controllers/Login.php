<?php

namespace App\Controllers;

use App\Models\MLogin;

class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->MLogin = new MLogin();
    }

    function hash()
    {
        echo password_hash('undip123', PASSWORD_BCRYPT);
    }

    public function index()
    {
        $data = [
            'validation' =>  \Config\Services::validation(),
        ];
        return view('login', $data);
    }

    public function AuthLogin()
    {
        if ($this->validate([
            'email-username' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!!'
                ]
            ],
        ])) {
            $email = $this->request->getPost('email-username');
            $hashedpassword = $this->request->getPost('password');
            $password = password_verify($this->request->getPost('password'), $hashedpassword);
            $level = $this->request->getPost('level');
            if ($level == 1) {
                $cek = $this->MLogin->login($email, $password);
                if ($cek) {
                    session()->set('email', $cek['email']);
                    session()->set('nama', $cek['nama']);
                    session()->setFlashdata('sukses', 'Login Berhasil!');
                    return redirect()->to(base_url('dashboard'));
                } else {
                    session()->setFlashdata('error', '<b>Login TIdak Berhasil!</b> Email Atau Password Salah !');
                    return redirect()->to(base_url('login'));
                }
            }
        } else {
            $validation =  \Config\Services::validation();
            return redirect()->to(base_url('login'))->withInput()->with('validation', $validation);
        }
    }

    public function Logout()
    {
        session()->remove('email');
        session()->remove('nama');
        session()->setFlashdata('sukses', 'Logout Berhasil !!!');
        return redirect()->to(base_url('login'));
    }
}