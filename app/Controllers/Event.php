<?php

namespace App\Controllers;

use App\Models\MEvent;

class Event extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->MEvent = new MEvent();
    }

    public function index()
    {
        $data = [
            'title' => 'Event',
            'allData' => $this->MEvent->allData(),
            'content'    => 'admin/event.php'
        ];
        return view('admin/layout/wrapper', $data);
    }

    public function add()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'tanggal' => $this->request->getPost('tanggal'),
            'informasi' => $this->request->getPost('informasi'),
        ];
        $this->MEvent->add($data);
        session()->setFlashdata('notifikasi', 'Tambah Event Berhasil dilakukan !!');
        return redirect()->to(base_url('event'));
    }

    public function delete($id_event)
    {
        $data = [
            'id_event' => $id_event,
        ];
        $this->MEvent->deleteData($data);
        session()->setFlashdata('notifikasi', 'Hapus Data Berhasil dilakukan !!');
        return redirect()->to(base_url('event'));
    }

    public function edit($id_event)
    {
        $data = [
            'id_event' => $id_event,
            'nama' => $this->request->getPost('nama'),
            'tanggal' => $this->request->getPost('tanggal'),
            'informasi' => $this->request->getPost('informasi'),
        ];
        $this->MEvent->edit($data);
        session()->setFlashdata('notifikasi', 'Edit Data Berhasil dilakukan !!');
        return redirect()->to(base_url('event'));
    }
}
