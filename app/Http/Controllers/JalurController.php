<?php

namespace App\Http\Controllers;
use App\Models\Jalur;
use App\Models\Biodata;

use Illuminate\Http\Request;

class JalurController extends Controller
{
    public function index ()
    {
        return view ('controllerjalur');
    }
    public function menampilkanDataModel()
    {
        $dataSekolah = Jalur::$sekolah;
        $dataKelas = Jalur::$kelas;
        return view ('modeljalur', compact('dataSekolah', 'dataKelas'));
    }
    public function menampilkanBiodata()
    {
        $dataNama = Biodata::$nama;
        $dataKelas = Biodata::$kelas;
        $dataSekolah = Biodata::$sekolah;
        $dataAlamat = Biodata::$alamat;
        $dataHobi = Biodata::$hobi;
        $dataEmail = Biodata::$email;
        $dataBestie = Biodata::$bestie;

        return view('biodata', compact ('dataNama', 'dataKelas', 'dataSekolah' , 'dataAlamat', 'dataHobi', 'dataEmail', 'dataBestie'));
    }
}
