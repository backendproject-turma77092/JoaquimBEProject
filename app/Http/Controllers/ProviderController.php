<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProviderController extends Controller
{

    public function AllProvider()
    {

        $provider= $this ->GetProviders();

        return view('provider.all_provider', compact('provider'));
    }



    public function AddProvider()
    {
        return view('provider.add_provider');
    }



    public function getProvider($id){
        $ourProvider = DB::table('provider')->where('id', $id)->first();
        return view('provider.get_provider', compact(
            'ourProvider'
        ));
        }




    protected function getProviders (){
        $provider = DB::table('provider')
        ->get();

        return $provider;
     }

}
