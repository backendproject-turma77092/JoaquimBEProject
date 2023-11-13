<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\User;
use App\Models\Product;

class PurchasesController extends Controller
{
    public function viewPurchases()
    {
        $purchases = Purchase::with(['user', 'product'])->get();
        return view('purchase.view_purchases', compact('purchases'));
    }

    public function addPurchaseForm()
    {
        $users = User::all();
        $products = Product::all();

        return view('purchase.add_purchase_form', compact('users', 'products'));
    }

    public function createPurchase(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'status' => 'required|in:pending,close',
            'quantity' => 'numeric',
        ]);

        Purchase::create($request->all());

        return redirect()->route('purchases.view')->with('message', 'Compra adicionada com sucesso!');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $purchases = Purchase::whereHas('user', function ($query) use ($searchTerm) {
            $query->where('name', 'like', '%' . $searchTerm . '%');
        })->get();

        return view('purchase.view_purchases', ['purchases' => $purchases]);
    }

    public function deletePurchase($id)
    {
        $purchase = Purchase::findOrFail($id);
        $purchase->delete();

        return Redirect::back()->with('message', 'Compra excluída com sucesso!');
    }

    public function editPurchaseForm($id)
    {
        $purchase = Purchase::findOrFail($id);
        $users = User::all();
        $products = Product::all();

        return view('purchase.edit_purchase_form', compact('purchase', 'users', 'products'));
    }

    public function updatePurchase(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'status' => 'required|in:pending,close',
            'quantity' => 'numeric',
        ]);

        $purchase = Purchase::findOrFail($id);
        $purchase->update($request->all());

        return Redirect::route('purchases.view')->with('message', 'Compra atualizada com sucesso!');
    }
}
