<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller{
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'Muhammad Kemal Syahru Ramadhan <br>
        2341760196';
    }
    public function articles($id){
        return 'Halaman Artikel dengan ID ' . $id;
    }

    public function greeting(){
        return view('blog.hello')
            ->with('name','Kemal')
            ->with('occupation','Astronaut');
    }

}
