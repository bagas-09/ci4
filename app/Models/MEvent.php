<?php

namespace App\Models;

use CodeIgniter\Model;

class MEvent extends Model
{
    public function allData()
    {
        return $this->db->table('event')
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('event')
            ->insert($data);
    }

    public function deleteData($data)
    {
        $this->db->table('event')
            ->where('id_event', $data['id_event'])
            ->delete($data);
    }

    public function edit($data)
    {
        $this->db->table('event')
            ->where('id_event', $data['id_event'])
            ->update($data);
    }
}
