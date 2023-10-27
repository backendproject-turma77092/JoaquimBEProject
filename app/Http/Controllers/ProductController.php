<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{

    public function AllProduct()
    {

        $product= $this ->GetProducts();

        return view('product.all_product', compact('product'));
    }



    public function AddProduct()
    {
        return view('product.add_product');
    }



    public function getProduct($id){
        $ourProduct = DB::table('product')->where('id', $id)->first();
        return view('product.get_product', compact(
            'ourProduct'
        ));
        }


            public function createUser(Request $request){

                if(isset($request->id)){
                    $request->validate([
                        'name' => 'required|string',
                    ]);

                    Product::where('id', $request->id)
                        ->update([
                        'name' => $request->name,
                    ]);


                    return redirect()->route('product.all')->with('atualizacao_message','Utilizador atualizado');

                }else{
                    $request->validate([
                        'name' => 'string',
                        'description' => 'required|email|unique:users',
                        'phone' => 'required|string',

                    ]);



                    product::insert([
                        'name' => $request->name,
                        'descroption' => $request->description,
                        'phone' => $request->phone,

                    ]);




                    return redirect()->route('product.all')->with('message','User updated!');
                }


            }


    protected function getProducts (){
        $product = DB::table('product')
        ->join('provider', 'provider.id', '=', 'product.provider_id')
        ->select('product.*', 'provider.name as usname')
        ->get();

        return $product;
     }

}

