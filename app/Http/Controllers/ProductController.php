<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }
  
    public function movieCart()
    {
        return view('cart');
    }

    public function addMovieToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);
        $cartItemId = $request->input('cart_item_id');

        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            // Update quantity if product is already in the cart
            $cart[$productId]['quantity'] += $quantity;
        } else {
            // Add new item to the cart
            $cart[$productId] = [
                'id' => $product->id,
                'product_name' => $product->product_name,
                'price' => $product->price,
                'quantity' => $quantity,
                "photo" => $product->photo
            ];
        }

        session()->put('cart', $cart);

        // Calculate the total quantity
        $totalQuantity = 0;
        foreach ($cart as $item) {
            $totalQuantity += $item['quantity'];
        }
        return response()->json(['message' => 'Cart updated', 'cartCount' => $totalQuantity], 200);
    }

    
    public function deleteItem(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully deleted.');
        }
    }
}