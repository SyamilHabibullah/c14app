<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "ini controller coba method index";
    }
    public function about($nama = '', $umur = '0')
    {
        echo "halo, nama saya $nama, ", "saya berumur $umur tahun";
    }

    //--------------------------------------------------------------------

}
