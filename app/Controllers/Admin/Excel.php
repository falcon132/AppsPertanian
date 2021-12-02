<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\Excel_model;

class excel extends BaseController
{
    public function index()
    {
        checklogin();
        $m_excel         = new Excel_model();
        $excel         = $m_excel->findAll();

        $data = [
            'title'            => 'Tabel Excel',
            'excel'        => $excel,
            'content'        => 'admin/file/index'

        ];
        echo view('admin/layout/wrapper', $data);
    }
}
