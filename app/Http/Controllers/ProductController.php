<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\provider;
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
        public function createProduct(Request $request){
            if(isset($request->id)){
                $request->validate([
                    'name' => 'required|string',
                ]);
                product::where('id', $request->id)
                ->update([
                'name' => $request->name,
                'price' => $request->price,
                'type' => $request->type,
                'quantity' => $request->quantity,
                'note' => $request->note,

            ]);

                return redirect()->route('product.all')->with('atualizacao_message','Utilizador atualizado');

            }else{
                $request->validate([
                    'name' => 'string|required',
                    'type' => 'string',
                    'price' => 'string|required',
                    'quantity' => 'string',
                    'note' => 'string',

                ]);
                Product::insert([
                    'name' => $request->name,
                    'type' => $request->type,
                    'price' => $request->price,
                    'quantity' => $request->quantity,
                    'note' => $request->note,

                ]);
                return redirect()->route('product.all')->with('message','User updated!');
            }
        }
        public function deleteProduct($id){

            $ourProduct = product::findOrFail($id);


            if($ourProduct){
                product::where('id', $id)
                ->Delete();
                }
                return redirect()->route('product.all');
            }

    protected function getProducts (){
        $product = Product::all();
        return $product;
     }



}

