<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function session(Request $request)
    {
        //$user = auth()->user();
        $productItems =[];

        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        foreach (session('cart') as $id => $items){
            
            $product_name = $items['product_name'];
           $total = $items['price'];
          $quantity = $items['quantity'];

          $two0 = "00";
          $unit_amount = "$total$two0";

          $productItems[]=[
            'price_data' =>[

                'product_data' =>[
                    'name' => $product_name
                ],
                'currency' => 'ETB',
                'unit_amount' => $unit_amount,
            ],
            'quantity' => $quantity
        ];

        }
        $chechoutSession = \Stripe\Checkout\Session::create([
            'line_items'    =>[$productItems],
            'mode'        =>'payment',
            'allow_promotion_codes' => true,
            'metadata'  =>[
                'user_id' => "0001"
            ],
            'customer_email' =>"regatugenemo@gmail.com",
            'success_url' => route('success'),
            'cancel_url' => route('cancel'),
        ]);

        return redirect()->away($chechoutSession->url);
    }
    public function success(){
        return "Thanks for your order you  have just completed your payment";
    }

    public function cancel(){
        return "cancel";
    }
}

