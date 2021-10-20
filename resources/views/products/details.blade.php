@extends ('layout')

@push('css')
<link rel="stylesheet" href="{{asset('css/product-details.css')}}">
@endpush

@section('content')

<h1 id="product-name" class="page__heading">Sample Title</h1>

<section class="product-overview">
  <div id="average-score-stars-section" class="product-overview__average-score-section">
    <span id="product-average-score" class="product-overview__average-score">3.8</span>
    <!-- <img src="/svg/full-star.svg" alt="">
    <img src="/svg/full-star.svg" alt="">
    <img src="/svg/full-star.svg" alt="">
    <img src="/svg/full-star.svg" alt="">
    <img src="/svg/empty-star.svg" alt=""> -->
  </div>

  <button id="add-review-button" class="btn" type="button">Add review</button>
</section>

<hr class="hr">

<h2 class="page__reviews-heading">Reviews</h2>

<section id="reviews-section" class="reviews-section">
  <!-- This is what a review will look like filled from javascript. -->
  <!-- <div class="review">
    <div class="review__stars">
      <img src="/svg/full-star.svg" alt="">
      <img src="/svg/full-star.svg" alt="">
      <img src="/svg/full-star.svg" alt="">
      <img src="/svg/full-star.svg" alt="">
      <img src="/svg/empty-star.svg" alt="">
    </div>

    <div class="review__score-text">
      <span class="review__score-number">4</span><span>, book was full of fluff</span>
    </div>
  </div> -->
</section>

<div id="add-review-modal" class="modal hidden">
  <div class="modal-content">
    <h2 class="rating__heading">What's your rating?</h2>

    <div id="rating-input" class="input-group">
      <labe class="label">Rating</labe>
      <div class="rating__input">
        <input type="radio" name="rating" value="1" id="1star">
        <label for="1star">
          <img id="1star-img" src="/svg/full-star.svg" alt="">
        </label>

        <input type="radio" name="rating" value="2" id="2star">
        <label for="2star">
          <img id="2star-img" src="/svg/full-star.svg" alt="">
        </label>

        <input type="radio" name="rating" value="3" id="3star">
        <label for="3star">
          <img id="3star-img" src="/svg/full-star.svg" alt="">
        </label>

        <input type="radio" name="rating" value="4" id="4star">
        <label for="4star">
          <img id="4star-img" src="/svg/full-star.svg" alt="">
        </label>

        <input type="radio" name="rating" value="5" id="5star" checked>
        <label for="5star">
          <img id="5star-img" src="/svg/full-star.svg" alt="">
        </label>
      </div>
    </div>

    <div class="input-group">
      <label class="label" for="review-text">Review</label>
      <textarea id="review-text-area" rows="4" maxlength="1024" id="review-text" name="review-text" class="text-area rating__review-text-area" type="text" placeholder="Start typing..."></textarea>
    </div>

    <button id="submit-review-button" class="btn" type="button">Submit Review</button>
  </div>
</div>

@endsection

@section('footer-scripts')
<script src="{{ asset('js/product-details.js')}}"></script>
@endsection