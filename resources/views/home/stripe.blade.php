<?php

namespace App\Http\Controllers;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function session(Request $request)
    {
        //$user = auth()->user();
        $productItems =[];
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        foreach (session('cart') as $id => $item){
            
            $product_name = $item['product_name'];
           $total = $item['price'];
          $quantity = $item['quantity'];

          $two0 = "00";
          $unit_amount = "$total$two0";

          $productItems[]=[
            'price_data' =>[
                'product_data' =>[
                    'name' =>$product_name,
                ],
                'currency' => 'USD',
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
        return "Thanks for you have just completed payment";
    }

    public function cancel(){
        return "cancel";
    }
}
