<?php

namespace App\Controllers;

use App\Models\MPendaftaran;
use App\Models\MEvent;

class Pendaftaran extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->MPendaftaran = new MPendaftaran();
        $this->MEvent = new MEvent();
    }

    public function index()
    {
        $data = [
            'title' => 'Pendaftaran',
            'allData' => $this->MPendaftaran->allData(),
            'allDataEvent' => $this->MEvent->allData(),
            'content'    => 'admin/pendaftaran.php'
        ];
        return view('admin/layout/wrapper', $data);
    }

    public function add()
    {
        $data = [
            'nama_pendaftar' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'tanggal_lahir' => $this->request->getPost('tanggallahir'),
            'alamat' => $this->request->getPost('alamat'),
        ];
        $this->MPendaftaran->add($data);
        session()->setFlashdata('notifikasi', 'Tambah Pendaftaran Berhasil dilakukan !!');
        return redirect()->to(base_url('pendaftaran'));
    }

    public function delete($id_pendaftaran)
    {
        $data = [
            'id_pendaftaran' => $id_pendaftaran,
        ];
        $this->MPendaftaran->deleteData($data);
        session()->setFlashdata('notifikasi', 'Hapus Data Berhasil dilakukan !!');
        return redirect()->to(base_url('pendaftaran'));
    }

    public function edit($id_pendaftaran)
    {
        $data = [
            'id_pendaftaran' => $id_pendaftaran,
            'nama_pendaftar' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'tanggal_lahir' => $this->request->getPost('tanggallahir'),
            'alamat' => $this->request->getPost('alamat'),
        ];
        $this->MPendaftaran->edit($data);
        session()->setFlashdata('notifikasi', 'Edit Data Berhasil dilakukan !!');
        return redirect()->to(base_url('pendaftaran'));
    }

    public function formulir($id_event)
    {
        $data = [
            'IDEvent' => $id_event,
            'title' => 'Formulir',
            'content'    => 'user/formulir.php'
        ];
        return view('user/layout/wrapper', $data);
    }

    public function daftarpeserta()
    {
        $data = [
            'event_id' => $this->request->getPost('IDEvent'),
            'nama_pendaftar' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'tanggal_lahir' => $this->request->getPost('tanggal'),
            'alamat' => $this->request->getPost('alamat'),
        ];
        $this->MPendaftaran->add($data);
        session()->setFlashdata('notifikasi', 'Daftar Berhasil !');
        return redirect()->to(base_url('home'));
    }
}
