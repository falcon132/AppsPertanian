<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table = "pengguna";
    protected $primaryKey = "username";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'name', 'nohp', 'komoditas', 'lokasi', 'usia'];

    // detail
    public function listing()
    {
        $builder = $this->db->table('pengguna');
        $builder->orderBy('pengguna.username', 'DESC');
        $query = $builder->get();
        return $query->getResultArray();
    }
}
