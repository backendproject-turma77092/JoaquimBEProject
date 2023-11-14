<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class IndexController extends Controller
{
    public function index(){

        $info = $this->CompanyInfo();


        return view('home', compact(
            'info'
        ));
    }


    protected function CompanyInfo(){

            $InfoCompany = [
                'name' => 'Pombos e filhos LDA',
                'address' => 'Porto',
                'email' => 'PPLDA@flag.pt',
            ];

            return $InfoCompany;

    }

}
