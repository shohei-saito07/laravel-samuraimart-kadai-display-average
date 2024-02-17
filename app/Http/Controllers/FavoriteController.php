<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; 

class FavoriteController extends Controller
{
    public function store($product_id)
    {
        // exit();
        // Log::info($product_id);
        Auth::user()->favorite_products()->attach($product_id);
        
        return back();
    }

    public function destroy($product_id)
    {
        Auth::user()->favorite_products()->detach($product_id);

        return back();
    }
}
