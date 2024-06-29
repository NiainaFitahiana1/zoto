<?php

namespace App\Http\Controllers\Visiteur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view("base.home");
    }
    public function article(){
        return view("base.articles");
    }
}
