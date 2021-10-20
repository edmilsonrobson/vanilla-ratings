import axios from "axios";

export const fetchProduct = async (id) => {
    const { data } = await axios.get(`/products/${id}`);

    return data;
};

export const createProductReview = async (reviewData) => {
    await axios.post("/product-reviews", {
        productId: reviewData.productId,
        rating: reviewData.rating,
        reviewText: reviewData.reviewText,
    });
};
