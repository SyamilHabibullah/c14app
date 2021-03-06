<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }
    public function index()
    {
        // $komik = $this->komikModel->findAll(); //cara 1
        $data = [
            'title' => 'Daftar Komik',
            // 'komik' => $komik  //cara 1
            'komik' => $this->komikModel->getKomik()  //cara 2 pakai function getKomik di model->komikModel

        ];
        //cara konect db tanpa model
        /*       $db = \Config\Database::connect();
        $komik = $db->query("SELECT * FROM komik");
        foreach ($komik->getResultArray() as $row)
            d($row); */
        // cara connect dengan model
        // $komikModel = new \app\Models\KomikModel();



        return view('Komik/index', $data);
    }

    public function detail($slug)
    {
        // $komik = $this->komikModel->where(['slug' => $slug])->first();

        $data = [
            'title' => 'Detail Komik',
            'komik' => $this->komikModel->getKomik($slug)
        ];
        return view('Komik/detail', $data);
    }
}
