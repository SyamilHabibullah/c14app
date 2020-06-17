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
        $komik = $this->komikModel->findAll();
        $data = [
            'title' => 'Daftar Komik',
            'komik' => $komik

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
}
