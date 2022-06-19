<?php

namespace App\Models;

use CodeIgniter\Model;

class MPendaftaran extends Model
{
    public function allData()
    {
        return $this->db->table('pendaftaran')
            ->join('event', 'event.id_event = pendaftaran.event_id', 'left')
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('pendaftaran')
            ->insert($data);
    }

    public function deleteData($data)
    {
        $this->db->table('pendaftaran')
            ->where('id_pendaftaran', $data['id_pendaftaran'])
            ->delete($data);
    }

    public function edit($data)
    {
        $this->db->table('pendaftaran')
            ->where('id_pendaftaran', $data['id_pendaftaran'])
            ->update($data);
    }
}
