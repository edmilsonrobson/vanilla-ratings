import axios from "axios";

const fetchProduct = async () => {
    const { data: product } = await axios.get("/products/1");

    console.log({ product });
};

fetchProduct();
