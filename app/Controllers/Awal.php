<?php

namespace App\Controllers;

use App\Models\Calculation;
use App\Models\HasilModel;

class Awal extends BaseController
{
    public function index()
    {
        return view('/awal/nama');
    }
    public function process()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|alpha',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'alpha' => 'tanpa menggunakan spasi'
                ]
            ],
            'lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
            'luas' => [
                'rules' => 'required|integer',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'integer' => '{field} harus berupa angka semua'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $hasil = new HasilModel();
        $hasil->insert([
            'luas'    => $this->request->getVar('luas'),
            'lokasi'    => $this->request->getVar('lokasi'),
            'nama' => $this->request->getVar('nama')
        ]);
        return redirect()->to('/home/manual');
    }
}
