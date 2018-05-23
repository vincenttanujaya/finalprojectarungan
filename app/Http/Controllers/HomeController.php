<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(){
    $univ = DB::table('universitas')->get();
    return view('welcome', ['univ'=>$univ]);
   }

   public function store(Request $request)
     {
       $nama_depan = $_POST['namadepanmhs'];
       $nama_belakang = $_POST['namabelakangmhs'];
       $email = $_POST['emailmahasiswa'];
       $hp = $_POST['hpmahasiswa'];
       $username = $_POST['usernamemahasiswa'];
       $password = $_POST['namadepanmhs'];
       $tgl = $_POST['tanggallahirmahasiswa'];
       $iduniv = $_POST['iduniv'];
       $idrank=1;
       DB::table('mahasiswa')->insert(
         ['nama_depan' => $nama_depan,
          'nama_belakang' =>$nama_belakang,
          'username' => $username,
          'password' => $password,
          'email' => $email,
          'no_hp' => $hp,
          'tanggal_lahir' => $tgl,
          'id_univ' => $iduniv,
          'ID_rank' => $idrank
        ]
       );

       echo "1";
     }

}
