<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function page1(){
        return view('pages.surveyPg1');
    }
    public function page2(){
        return view('pages.surveyPg2');
    }
    public function summary(){
        return view('pages.summary');
    }
}