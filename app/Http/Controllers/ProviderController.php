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
            'description' => 'string',
        ]);

        if ($request->has('id')) {

            Provider::where('id', $request->id)->update($request->only(['name', 'phone', 'description']));
            return redirect()->route('provider.all')->with('atualizacao_message', 'Utilizador atualizado');
        } else {

            Provider::create($request->only(['name', 'phone', 'description']));
            return redirect()->route('provider.all')->with('message', 'User created!');
        }
    }

    protected function GetAllProvider()
    {
        $provider = Provider::all();
        return $provider;
    }
}
