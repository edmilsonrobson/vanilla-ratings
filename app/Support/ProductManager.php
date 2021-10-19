<?php

namespace App\Support;

use App\Models\Product;

class ProductManager
{
  public function getProductWithReviews(int $id)
  {
    $product = Product::with('productReviews')->find($id);

    return $product;
  }
}
