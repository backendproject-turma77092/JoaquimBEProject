<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\provider;
use Illuminate\Support\Facades\Log;


class ProductController extends Controller
{

    public function AllProduct()
    {
        $products = Product::with('providers')->get();
        return view('product.all_product', compact('products'));
    }

    public function AddProduct()
    {
        $providers = Provider::all();

        return view('product.add_product', compact('providers'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $products = Product::where('name', 'like', '%' . $searchTerm . '%')->get();

        return view('product.all_product', ['products' => $products]);
    }


    public function getProduct($id)
    {
        $ourProduct = Product::find($id);
        $providers = Provider::all();

        if ($ourProduct) {
            return view('product.edit_product', compact('ourProduct', 'providers'));
        } else {
            return redirect()->route('product.all')->with('error', 'Product not found.');
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'type' => 'string',
            'price' => 'required|numeric',
            'quantity' => 'numeric',
            'note' => 'string',
            'provider_id' => 'required|exists:providers,id',
        ]);

        $product = Product::find($id);

        if ($product) {
            $product->update([
                'name' => $request->input('name'),
                'type' => $request->input('type'),
                'price' => $request->input('price'),
                'quantity' => $request->input('quantity'),
                'note' => $request->input('note'),
                'provider_id' => $request->input('provider_id'),
            ]);

            $provider = Provider::find($request->input('provider_id'));
            if ($provider) {
                $product->providers()->sync([$provider->id]);
            } else {
                Log::error("Provider with ID {$request->input('provider_id')} not found.");
            }

            return redirect()->route('product.all')->with('message', 'Producto atualizado!');
        } else {
            return redirect()->route('product.all')->with('error', 'Product not found.');
        }
    }

        public function createProduct(Request $request)
        {
            $request->validate([
                'name' => 'required|string',
                'type' => 'string',
                'price' => 'required|numeric',
                'quantity' => 'numeric',
                'note' => 'string',
                'provider_id' => 'required|exists:providers,id',
            ]);

            $product = new Product([
                'name' => $request->input('name'),
                'type' => $request->input('type'),
                'price' => $request->input('price'),
                'quantity' => $request->input('quantity'),
                'note' => $request->input('note'),
            ]);
            $product->save();
            $provider = Provider::find($request->input('provider_id'));

            if ($provider) {
                $product->providers()->attach($provider->id);
            } else {

                Log::error("Provider with ID {$request->input('provider_id')} not found.");
            }

            return redirect()->route('product.all')->with('message', 'Producto adicionado!');;
        }
        public function deleteProduct($id)
        {
            DB::beginTransaction();

            try {
                $ourProduct = Product::findOrFail($id);

                if ($ourProduct) {

                    $ourProduct->purchases()->delete();


                    $ourProduct->delete();

                    DB::commit();

                    return redirect()->route('product.all')->with('message', 'Produto apagado!');
                }
            } catch (\Exception $e) {

                DB::rollBack();

                return redirect()->route('product.all')->with('error', 'Erro ao excluir o produto.');
            }

            return redirect()->route('product.all')->with('error', 'Produto não encontrado.');
        }

    protected function getProducts (){
        $product = Product::all();
        return $product;
     }

     public function store(Request $request)
     {

         $request->validate([
            'name' => 'required|string',
            'type' => 'string',
            'price' => 'required|numeric',
            'quantity' => 'numeric',
            'note' => 'string',
            'provider_id' => 'required|exists:providers,id',
        ]);

        $product = new Product([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'note' => $request->input('note'),
        ]);

        $product->save();

        $provider = Provider::find($request->input('provider_id'));

        $product->providers()->attach($provider->id);

        return redirect()->route('product.add')->with('message', 'Produto adicionado!');;
     }

     public function addPurchase(Request $request)
{
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'product_id' => 'required|exists:products,id',
        'status' => 'required|in:pending,close',
    ]);

    Purchase::create($request->all());

    return redirect()->route('product.all')->with('message', 'Producto adicionado!');
}


}

