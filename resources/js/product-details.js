import { createProductReview, fetchProduct } from "./api";

let product = undefined;

const addReviewButton = document.getElementById("add-review-button");
const addReviewModal = document.getElementById("add-review-modal");
const averageScore = document.getElementById("product-average-score");
const productName = document.getElementById("product-name");
const averageScoreStarsSection = document.getElementById(
    "average-score-stars-section"
);

const reviewTextArea = document.getElementById("review-text-area");
const submitReviewButton = document.getElementById("submit-review-button");
const reviewsSection = document.getElementById("reviews-section");

const ratingFormRadioStars = [
    document.getElementById("1star"),
    document.getElementById("2star"),
    document.getElementById("3star"),
    document.getElementById("4star"),
    document.getElementById("5star"),
];
const ratingFormRadioStarImgs = [
    document.getElementById("1star-img"),
    document.getElementById("2star-img"),
    document.getElementById("3star-img"),
    document.getElementById("4star-img"),
    document.getElementById("5star-img"),
];

const fillStars = (rating, root) => {
    for (let i = 0; i < Math.floor(rating); i++) {
        const starImg = document.createElement("img");
        starImg.src = "/svg/full-star.svg";

        root.appendChild(starImg);
    }

    for (let i = Math.floor(rating); i < 5; i++) {
        const starImg = document.createElement("img");
        starImg.src = "/svg/empty-star.svg";

        root.appendChild(starImg);
    }
};

const addReview = (review) => {
    const reviewDiv = document.createElement("div");
    reviewDiv.className = "review";

    const reviewStarsDiv = document.createElement("div");
    reviewStarsDiv.className = "review__stars";

    reviewDiv.appendChild(reviewStarsDiv);

    fillStars(review.rating, reviewStarsDiv);

    const reviewScoreText = document.createElement("div");
    reviewScoreText.className = "review__score-text";

    const reviewScoreNumber = document.createElement("span");
    reviewScoreNumber.innerHTML = review.rating;
    reviewScoreNumber.className = "review__score-number";

    const reviewText = document.createElement("span");
    reviewText.innerHTML = ", " + review.review_text;

    reviewScoreText.appendChild(reviewScoreNumber);
    reviewScoreText.appendChild(reviewText);

    reviewDiv.appendChild(reviewScoreText);

    reviewsSection.appendChild(reviewDiv);
};

const fillReviewsState = () => {
    const { product_reviews: productReviews } = product;

    reviewsSection.innerHTML = "";
    productReviews.forEach((review) => addReview(review));
};

const updateProductState = () => {
    productName.innerText = product.name;
    const averageScoreValue =
        product.product_reviews_avg_rating.toFixed(1) || 0;
    averageScore.innerText = averageScoreValue;

    fillStars(averageScoreValue, averageScoreStarsSection);
    fillReviewsState();
};

const openReviewModal = () => {
    addReviewModal.classList.remove("hidden");
};

const closeReviewModal = () => {
    addReviewModal.classList.add("hidden");
};

const handleAddReviewButtonClick = () => {
    openReviewModal();
};

const setSubmitReviewButtonLoading = (value) => {
    submitReviewButton.disabled = value;
};

const handleSubmitReviewButtonClick = async () => {
    const rating = document.querySelector('input[name="rating"]:checked').value;
    const reviewText = reviewTextArea.value;

    setSubmitReviewButtonLoading(true);
    await createProductReview({
        productId: 1,
        rating,
        reviewText,
    });
    await getRemoteProduct();
    closeReviewModal();
    setSubmitReviewButtonLoading(false);
};

const handleRadioStarChange = (value) => () => {
    const fullStarPath = "/svg/full-star.svg";
    const emptyStarPath = "/svg/empty-star.svg";

    for (let i = 0; i < value; i++) {
        ratingFormRadioStarImgs[i].src = fullStarPath;
    }
    for (let i = value; i < 5; i++) {
        ratingFormRadioStarImgs[i].src = emptyStarPath;
    }
};

const setupEventHandlers = () => {
    addReviewButton.addEventListener("click", handleAddReviewButtonClick);
    submitReviewButton.addEventListener("click", handleSubmitReviewButtonClick);

    ratingFormRadioStars.forEach((radioStar) =>
        radioStar.addEventListener(
            "change",
            handleRadioStarChange(radioStar.value)
        )
    );
};

const getRemoteProduct = async () => {
    const productId = 1;
    product = await fetchProduct(productId);
    updateProductState();
};

setupEventHandlers();
getRemoteProduct();

window.onclick = function (event) {
    if (event.target === addReviewModal) {
        closeReviewModal();
    }
};
