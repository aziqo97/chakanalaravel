<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class CartController extends Controller
{
    public function delcart($id)
    {
        setcookie( 'tovar['.$id.']', "", time()- 60, "/","", 0);
        return redirect()->back();
    }

    public function cartloadbyajax()
    {
if (isset($_COOKIE['tovar'])){
        foreach ($_COOKIE['tovar'] as $l) {
            $pr = Product::find($l);
            $data[] = [
                'product_id' => $pr->id,
                'product_name' => $pr->name,
                'product_price' => $pr->price,
                'product_photos' => $pr->photos,
            ];
        }
        return view('components.cardlist', compact('data'));
        }else{
    return '<div class="empty__section-block">
                <img src="/images/cart-empty.svg" alt="empty">
                <p class="empty__section-bold">Savatchada xech narsa yoq</p>
            </div>';
}


    }

    public function addtocart(Request $request)
    {
        $minutes = 60;
        $prod_id = $request->input('product_id');
setcookie('tovar['.$prod_id.']', $prod_id);

//        $prod_id = $request->input('product_id');
//        $quantity = $request->input('quantity');
//
//        if(Cookie::get('shopping_cart'))
//        {
//            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
//            $cart_data = json_decode($cookie_data, true);
//        }
//        else
//        {
//            $cart_data = array();
//        }
//
//        $item_id_list = array_column($cart_data, 'item_id');
//        $prod_id_is_there = $prod_id;
//
//        if(in_array($prod_id_is_there, $item_id_list))
//        {
//            foreach($cart_data as $keys => $values)
//            {
//                if($cart_data[$keys]["item_id"] == $prod_id)
//                {
//                    $cart_data[$keys]["item_quantity"] = $request->input('quantity');
//                    $item_data = json_encode($cart_data);
//                    $minutes = 60;
//                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
//                    return response()->json(['status'=>'"'.$cart_data[$keys]["item_name"].'" Already Added to Cart','status2'=>'2']);
//                }
//            }
//        }
//        else
//        {
//            $products = Product::find($prod_id);
//            $prod_name = $products->name;
//            $prod_image = $products->photos;
//            $priceval = $products->price;
//
//            if($products)
//            {
//                $item_array = array(
//                    'item_id' => $prod_id,
//                    'item_name' => $prod_name,
//                    'item_price' => $priceval,
//                    'item_image' => $prod_image
//                );
//                $cart_data[] = $item_array;
//
//                $item_data = json_encode($cart_data);
//                $minutes = 60;
//                Cookie::queue(Cookie::make('product_'.$prod_id.'', $item_data, $minutes));
//                return response()->json(['status'=>'"'.$prod_name.'" Added to Cart']);
//            }
//        }
    }


}
