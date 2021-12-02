<?php

namespace App\Models;

use CodeIgniter\Model;

class HasilModel extends Model
{
    protected $table = "hasil";
    protected $primaryKey = "nama";
    protected $returnType = "array";
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'lokasi', 'luas'];
}
