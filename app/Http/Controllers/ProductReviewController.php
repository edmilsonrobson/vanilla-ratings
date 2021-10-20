<?php

namespace App\Http\Controllers;

use App\Models\ProductReview;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductReviewController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'productId' => 'required|exists:products,id',
            'rating' => 'required|numeric|between:0,5',
            'reviewText' => 'required|max:1024',
        ]);

        $productReview = new ProductReview();
        $productReview->product_id = $request['productId'];
        $productReview->rating = round($request['rating'], 0);
        $productReview->review_text = $request['reviewText'];
        $productReview->save();

        return response()->json([], Response::HTTP_OK);
    }
}
