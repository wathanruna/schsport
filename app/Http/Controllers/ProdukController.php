<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
class ProdukController extends Controller
{
    public function index(){

    	$a = Produk::All();

    	return view('home',['keview'=>$a]);
    }

 public  function read (){
    	return Produk::all();
    }

    public function insert(request $req){
    	$u = new Produk;
    	$u->name = $req->name;
    	$u->gambar = $req->gambar;
    	$u->deskripsi = $req->deskripsi;
    	$u->tempat = $req->tempat;
    	$u->jadwal = $req->jadwal;
    	$u->save();
    	return "Data Success Added";
    } 

    public function update (request $req , $id){
    	$u = Produk::find($id);
    	$u->name = $req->name;
    	$u->gambar = $req->gambar;
    	$u->deskripsi = $req->deskripsi;
    	$u->tempat = $req->tempat;
    	$u->jadwal = $req->jadwal;
    	$u->save();
    	return "Update Success";
    }

    public function delete($id){
    	$u = Produk::find($id);
    	$u->delete();
    	return("delete Success id = $id ");
    }

}
