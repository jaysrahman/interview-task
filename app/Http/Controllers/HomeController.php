<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Stock;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            'products' => Product::get(),
            'warehouses' => Warehouse::get(),
            'stocks' => Stock::with('product')->with('warehouse')->get(),
            'outOfStocks' => Stock::where('stock', '===', 0)->with('product')->with('warehouse')->get()
        ]);
    }
}
