<?php

namespace App\Http\Controllers;
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




    protected function getProducts (){
        $product = DB::table('product')
        ->join('provider', 'provider.id', '=', 'product.provider_id')
        ->select('product.*', 'provider.name as usname')
        ->get();

        file_put_contents("providers.txt", print_r($product, true));
        return $product;
     }

}
