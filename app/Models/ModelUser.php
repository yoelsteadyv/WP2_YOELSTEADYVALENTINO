<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table = 'user';

    public function simpanData($data = null)
    {
        $this->insert($data);
    }

    public function cekData($where = null)
    {
        return $this->db->getWhere('user', $where);
    }

    public function getUserWhere($where = null)
    {
        return $this->getWhere($where);
    }

    public function cekUserAccess($where = null)
    {
        return $this->table('access_menu')->where($where)->get();
    }

    public function getUserLimit()
    {
        return $this->limit(10, 0)->get();
    }
}
