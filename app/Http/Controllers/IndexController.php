<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class IndexController extends Controller
{
    public function index(){

        $info = $this->getFlagInfo();


        return view('home', compact(
            'info'
        ));
    }


    protected function getFlagInfo(){

            $flagInfo = [
                'name' => 'Pombos e filhos LDA',
                'address' => 'Porto',
                'email' => 'PPLDA@flag.pt',
            ];

            return $flagInfo;

    }

}
