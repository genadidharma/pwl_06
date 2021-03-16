<?php

namespace App\Http\Controllers;

use App\Models\Goods;

class GoodsController extends Controller
{
    public function index(){
        $goods = Goods::goods();
        return view('goods', compact('goods'));
    }
}
