<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function home(){
        echo '123';
        return view('Home.home');
    }

    public function homes(){
        return view('Home.homes');
    }

}