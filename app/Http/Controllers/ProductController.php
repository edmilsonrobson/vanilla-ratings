<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Support\ProductManager;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

class ProductController extends Controller
{

    public function show()
    {
        return view('products/details');
    }

    public function getProduct(Request $request, int $productId)
    {
        $productManager = new ProductManager();
        $product = $productManager->getProductWithReviews($productId);
        Log::info($product);
        return response()->json($product, Response::HTTP_OK);
    }
}
