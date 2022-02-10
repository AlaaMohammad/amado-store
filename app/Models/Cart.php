<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Cart extends Model
{
    use HasFactory;


    public function addToCart($product_id, $quantity)
    {
        $product = Product::findOrFail($product_id);
        $cart = Session::get('cart', []);

        if (isset($cart[$product_id])) {
            $cart[$product_id]['quantity'] = +$quantity;
        } else {
            $cart[$product_id] = [
                "name" => $product->name,
                "quantity" => $quantity,
                "price" => $product->price,
                "image_url" => $product->img_src
            ];
        }
        Session::put('cart', $cart);
    }

    public function removeItem($item_id)
    {
        $cart = Session::get('cart');

        unset($cart[$item_id]);
        Session::put('cart', $cart);
    }


    public function checkout($request)
    {
        $cart = Session::get('cart');
        $total = Cart::calculateTotalAmount($cart);

        $user = Auth::user();
        //dd($user->name);
        $order = Order::create([
            'name' => $user->name,
            'email' => $user->email,
            'town' => $request->town,
            'address' => $request->address,
            'zip' => $request->address,
            'phone' => $request->address,
            'user_id' => $user->id,
            'comments' => $request->comments,
            'order_status' => 'Placed',
            'cart' => serialize($cart),
            'total' => $total
        ]);
        foreach ($cart as $key => $item):
            $product = Product::find($key);
            $new_quantity = $product->quantity - $item['quantity'];
        $product->update([
            'quantity' => $new_quantity
        ]);
        endforeach;
        Session::forget('cart');
    }

    /**
     * calculate the amount for current cart
     *
     * @param $cart
     * @return float|int
     */
    public function calculateTotalAmount($cart)
    {
        $total = 0;
        foreach ($cart as $item):
            $total += $item['quantity'] * $item['price'];
        endforeach;

        return $total;
    }
}

