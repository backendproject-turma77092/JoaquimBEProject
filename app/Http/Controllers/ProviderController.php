<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;
use Illuminate\Support\Facades\DB;


class ProviderController extends Controller
{
    public function AllProvider()
    {
        $provider = $this->GetAllProvider();
        return view('provider.all_provider', compact('provider'));
    }

    public function AddProduct()
    {
        $providers = Provider::all();
        return view('product.add_product', compact('providers'));
    }

    public function AddProvider()
    {
        return view('provider.add_provider');
    }

    public function getProvider($id)
    {
        $ourProvider = Provider::find($id);
        return view('provider.get_provider', compact('ourProvider'));
    }

    public function createProvider(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'string',
            'description' => 'nullable|string',
        ]);

        if ($request->has('id')) {
            Provider::where('id', $request->id)->update($request->only(['name', 'phone', 'description']));
            return redirect()->route('provider.all')->with('message', 'Fornecedor atualizado');
        } else {
            Provider::create($request->only(['name', 'phone', 'description']));
            return redirect()->route('provider.all')->with('message', 'Fornecedor criado!');
        }
    }

    protected function GetAllProvider()
    {
        $providers = Provider::all();
        return $providers;
    }


    public function deleteProvider($id){

        $ourUser = Provider::findOrFail($id);


        if($ourUser){
            Provider::where('id', $id)
            ->Delete();
            }
            return redirect()->route('provider.all')->with('message', 'Fornecedor apagado!');
        }

}
