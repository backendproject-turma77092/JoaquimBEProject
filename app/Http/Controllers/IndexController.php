<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// public function pode ser usada no web.php route, private não pode

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
                'address' => 'Port',
                'email' => 'PPLDA@flag.pt',
            ];

            return $flagInfo;

    }

}
