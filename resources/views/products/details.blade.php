@extends ('layout')

@push('css')
<link rel="stylesheet" href="{{asset('css/product-details.css')}}">
@endpush

@section('content')

<h1 class="page__heading">The Minimalist Entrepreneur</h1>

<section class="product-overview">
  <div class="product-overview__average-score-section">
    <span class="product-overview__average-score">3.8</span>
    <object class="star" data="/svg/full-star.svg" type="image/svg+xml"></object>
    <object class="star" data="/svg/full-star.svg" type="image/svg+xml"></object>
    <object class="star" data="/svg/full-star.svg" type="image/svg+xml"></object>
    <object class="star" data="/svg/full-star.svg" type="image/svg+xml"></object>
    <object class="star" data="/svg/empty-star.svg" type="image/svg+xml"></object>
  </div>

  <button class="btn" type="button">Add review</button>
</section>

<hr class="hr">

<h2 class="page__reviews-heading">Reviews</h2>

<section class="reviews-section">
  <div class="review">
    <div class="review__stars">
      <object class="star" data="/svg/full-star.svg" type="image/svg+xml"></object>
      <object class="star" data="/svg/full-star.svg" type="image/svg+xml"></object>
      <object class="star" data="/svg/full-star.svg" type="image/svg+xml"></object>
      <object class="star" data="/svg/full-star.svg" type="image/svg+xml"></object>
      <object class="star" data="/svg/empty-star.svg" type="image/svg+xml"></object>
    </div>

    <div class="review__score-text">
      <span class="review__score-number">4</span><span>, book was full of fluff</span>
    </div>
  </div>
  <div class="review">
    <div class="review__stars">
      <object class="star" data="/svg/full-star.svg" type="image/svg+xml"></object>
      <object class="star" data="/svg/full-star.svg" type="image/svg+xml"></object>
      <object class="star" data="/svg/full-star.svg" type="image/svg+xml"></object>
      <object class="star" data="/svg/full-star.svg" type="image/svg+xml"></object>
      <object class="star" data="/svg/empty-star.svg" type="image/svg+xml"></object>
    </div>

    <div class="review__score-text">
      <span class="review__score-number">4</span><span>, book was full of fluff</span>
    </div>
  </div>
</section>

@endsection

@section('footer-scripts')
<script src="{{ asset('js/product-details.js')}}"></script>
@endsection