<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function hpage()
    {
        return view('Home');
    }
    public function med()
    {
        $f1 = array(
            'Name' => 'rk',
            'price' => '20 tk',
        );
        $f2=array(
            'Name'=>'ck',
            'Price'=>'50 tk'

        );
        $f3=array(
            'Name'=>'dk',
            'Price'=>'35 tk'

        );
        $f4=array(
            'Name'=>'gk',
            'Price'=>'90 tk'
        );
        $f5=array(
            'Name'=>'sk',
            'Price'=>'80 tk'

        );
        $f6=array(
            'Name'=>'mk',
            'Price'=>'150 tk'
        );
        return view('medicines')->with('med1', $f1)->with('med2', $f2)->with('med3', $f3)->with('med4', $f4)->with('med5', $f5)->with('med6', $f6);
    }
    public function teams()
        {
            return view('team');
        }
        public function about()
        {
            return view('aboutus');
        }
        public function cont()
        {
            return view('contact');
        }
}
