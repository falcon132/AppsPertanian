<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Calculation as ModelsCalculation;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Calculation extends BaseController
{
    public function __construct()
    {
        $this->model = new ModelsCalculation();
    }

    public function index()
    {
        $jenisTanaman = ['Cabe', 'Kwaci', 'Semangka'];
        return view('home', compact('jenisTanaman'));
        $anorganikNama = ['Cabe', 'Kwaci', 'Semangka'];
        compact('anorganikNama');
    }

    public function save()
    {
        $jenis_tanaman = $this->request->getPost('jenis_tanaman');
        $jenis_bibit = $this->request->getPost('jenis_bibit');
        $luas_lahan = $this->request->getPost('luas_lahan');

        $tenaga_nama = $this->request->getPost('tenaga_nama');
        $tenaga_jumlah = $this->request->getPost('tenaga_jumlah');
        $tenaga_harga = $this->request->getPost('tenaga_harga');

        $anorganik_nama = $this->request->getPost('anorganik_nama');
        $anorganik_jumlah = $this->request->getPost('anorganik_jumlah');
        $anorganik_harga = $this->request->getPost('anorganik_harga');

        $organik_nama = $this->request->getPost('organik_nama');
        $organik_jumlah = $this->request->getPost('organik_jumlah');
        $organik_harga = $this->request->getPost('organik_harga');

        $pestisida_nama = $this->request->getPost('pestisida_nama');
        $pestisida_jumlah = $this->request->getPost('pestisida_jumlah');
        $pestisida_harga = $this->request->getPost('pestisida_harga');

        $hasil_panen_jumlah = $this->request->getPost('hasil_panen_jumlah');
        $hasil_panen_harga = $this->request->getPost('hasil_panen_harga');

        $total_harga_tenaga = [];
        for ($i = 0; $i < count($tenaga_jumlah); $i++) {
            array_push($total_harga_tenaga, $tenaga_jumlah[$i] * $tenaga_harga[$i]);
        }

        $total_harga_anorganik = [];
        for ($i = 0; $i < count($anorganik_jumlah); $i++) {
            array_push($total_harga_anorganik, $anorganik_jumlah[$i] * $anorganik_harga[$i]);
        }

        $total_harga_organik = [];
        for ($i = 0; $i < count($organik_jumlah); $i++) {
            array_push($total_harga_organik, $organik_jumlah[$i] * $organik_harga[$i]);
        }

        $total_harga_pestisida = [];
        for ($i = 0; $i < count($pestisida_jumlah); $i++) {
            array_push($total_harga_pestisida, $pestisida_jumlah[$i] * $pestisida_harga[$i]);
        }

        $subtotal = array_merge($total_harga_tenaga, $total_harga_anorganik, $total_harga_organik, $total_harga_pestisida);
        $subtotal = array_sum($subtotal);

        $hasil_panen = $hasil_panen_jumlah * $hasil_panen_harga;
        $laba_bersih = $hasil_panen - $subtotal;

        $identifier = compact(
            'jenis_tanaman',
            'jenis_bibit',
            'luas_lahan',
            'hasil_panen_jumlah',
            'hasil_panen_harga',
        );

        // Tenaga 
        for ($i = 0; $i < count($tenaga_nama); $i++) {
            $data = $identifier;
            $this->model->save(
                array_merge($identifier, [
                    'tenaga_nama' => $tenaga_nama[$i],
                    'tenaga_jumlah' => $tenaga_jumlah[$i],
                    'tenaga_harga' => $tenaga_harga[$i],
                ])
            );
        }

        // Anorganik 
        for ($i = 0; $i < count($anorganik_nama); $i++) {
            $data = $identifier;
            $this->model->save(
                array_merge($identifier, [
                    'anorganik_nama' => $anorganik_nama[$i],
                    'anorganik_jumlah' => $anorganik_jumlah[$i],
                    'anorganik_harga' => $anorganik_harga[$i],
                ])
            );
        }

        // Organik 
        for ($i = 0; $i < count($organik_nama); $i++) {
            $data = $identifier;
            $this->model->save(
                array_merge($identifier, [
                    'organik_nama' => $organik_nama[$i],
                    'organik_jumlah' => $organik_jumlah[$i],
                    'organik_harga' => $organik_harga[$i],
                ])
            );
        }

        // Pestisida 
        for ($i = 0; $i < count($pestisida_nama); $i++) {
            $data = $identifier;
            $this->model->save(
                array_merge($identifier, [
                    'pestisida_nama' => $pestisida_nama[$i],
                    'pestisida_jumlah' => $pestisida_jumlah[$i],
                    'pestisida_harga' => $pestisida_harga[$i],
                ])
            );
        }

        session()->setFlashData('data', compact(
            'total_harga_tenaga',
            'total_harga_anorganik',
            'total_harga_organik',
            'total_harga_pestisida',
            'subtotal',
            'hasil_panen',
            'laba_bersih',
        ));

        if ($this->request->getPost('action') == 'download') {
            // Export excel
            $fileName = "hasil-$jenis_tanaman-$jenis_bibit";
            $spreadsheet = new Spreadsheet();
            // tulis header/nama kolom 
            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A1', $jenis_tanaman)
                ->setCellValue('A2', 'Jenis Bibit')
                ->setCellValue('B2', $jenis_bibit)
                ->setCellValue('C2', 'Luas Lahan')
                ->setCellValue('D2', $luas_lahan)
                ->setCellValue('A3', 'Nama')
                ->setCellValue('B3', 'Jumlah')
                ->setCellValue('C3', 'Harga')
                ->setCellValue('D3', 'Total Harga')
                ->setCellValue('A4', 'Tenaga');

            $spreadsheet->getActiveSheet()->getStyle('A3:D3')->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()->setARGB('FF46cf8f');

            $spreadsheet->getActiveSheet()->getStyle('A4')
                ->getFill()->getStartColor()->setARGB('FFe0e0e0');

            $row = 5;
            for ($i = 0; $i < count($tenaga_nama); $i++) {
                $spreadsheet->setActiveSheetIndex(0)
                    ->setCellValue("A$row", $tenaga_nama[$i])
                    ->setCellValue("B$row", $tenaga_jumlah[$i])
                    ->setCellValue("C$row", $tenaga_harga[$i])
                    ->setCellValue("D$row", $total_harga_tenaga[$i]);
                $row++;
            }

            $spreadsheet->setActiveSheetIndex(0)->setCellValue("A$row", 'Anorganik');
            $spreadsheet->getActiveSheet()->getStyle("A$row")
                ->getFill()->getStartColor()->setARGB('FFe0e0e0');
            $row++;

            for ($i = 0; $i < count($anorganik_nama); $i++) {
                $spreadsheet->setActiveSheetIndex(0)
                    ->setCellValue("A$row", $anorganik_nama[$i])
                    ->setCellValue("B$row", $anorganik_jumlah[$i])
                    ->setCellValue("C$row", $anorganik_harga[$i])
                    ->setCellValue("D$row", $total_harga_anorganik[$i]);
                $row++;
            }

            $spreadsheet->setActiveSheetIndex(0)->setCellValue("A$row", 'Organik');
            $spreadsheet->getActiveSheet()->getStyle("A$row")
                ->getFill()->getStartColor()->setARGB('FFe0e0e0');
            $row++;

            for ($i = 0; $i < count($organik_nama); $i++) {
                $spreadsheet->setActiveSheetIndex(0)
                    ->setCellValue("A$row", $organik_nama[$i])
                    ->setCellValue("B$row", $organik_jumlah[$i])
                    ->setCellValue("C$row", $organik_harga[$i])
                    ->setCellValue("D$row", $total_harga_organik[$i]);
                $row++;
            }

            $spreadsheet->setActiveSheetIndex(0)->setCellValue("A$row", 'Pestisida');
            $spreadsheet->getActiveSheet()->getStyle("A$row")
                ->getFill()->getStartColor()->setARGB('FFe0e0e0');
            $row++;

            for ($i = 0; $i < count($pestisida_nama); $i++) {
                $spreadsheet->setActiveSheetIndex(0)
                    ->setCellValue("A$row", $pestisida_nama[$i])
                    ->setCellValue("B$row", $pestisida_jumlah[$i])
                    ->setCellValue("C$row", $pestisida_harga[$i])
                    ->setCellValue("D$row", $total_harga_pestisida[$i]);
                $row++;
            }

            $spreadsheet->setActiveSheetIndex(0)->setCellValue("B$row", 'Subtotal');
            $spreadsheet->setActiveSheetIndex(0)->setCellValue("D$row", $subtotal);
            $spreadsheet->getActiveSheet()->getStyle("A$row:D$row")->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()->setARGB('FFe0e0e0');
            $row++;

            $spreadsheet->setActiveSheetIndex(0)->setCellValue("A$row", "OUTPUT");
            $row++;

            $spreadsheet->setActiveSheetIndex(0)->setCellValue("A$row", "Hasil Panen");
            $spreadsheet->setActiveSheetIndex(0)->setCellValue("B$row", $hasil_panen_jumlah);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue("C$row", $hasil_panen_harga);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue("D$row", $hasil_panen);
            $spreadsheet->getActiveSheet()->getStyle("A$row:D$row")->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()->setARGB('FFe0e0e0');
            $row++;

            $spreadsheet->setActiveSheetIndex(0)->setCellValue("A$row", "Laba Bersih");
            $spreadsheet->setActiveSheetIndex(0)->setCellValue("D$row", $laba_bersih);
            $spreadsheet->getActiveSheet()->getStyle("A$row:D$row")->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()->setARGB('FFe0e0e0');

            $spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
            $spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
            $spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
            $spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
            $spreadsheet->getActiveSheet()->getStyle("A1:Z100")->getFont()->setSize(14);

            $writer = new Xlsx($spreadsheet);

            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename=' . $fileName . '.xlsx');
            header('Cache-Control: max-age=0');

            $writer->save('php://output');
            die;
        }

        return redirect()->back()->withInput();
    }
}
