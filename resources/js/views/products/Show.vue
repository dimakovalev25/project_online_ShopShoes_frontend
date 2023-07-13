<template>
      <main>
            <section class="shop-details-top three">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 mt-30">
                            <div class="single-product-box">
                                <div class="">
                                    <div>
                                        <img :src="product.image_url" alt="img">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mt-30 ">
                            <div class="shop-details-top-right three">
                                <div class="shop-details-top-right-content-box">
                                    <div class="shop-details-top-title m-0">
                                        <h3>{{product.title}}</h3>
                                    </div>
                                    <div class="shop-details-top-review-box">
                                        <div class="shop-details-top-review">
                                            <ul>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                                <li><i class="flaticon-star-1"></i></li>
                                            </ul>
                                            <p>(2 Reviews)</p>
                                        </div>
                                    </div>

                                    <div
                                            class="shop-details-top-price-box d-flex align-items-center justify-content-between flex-wrap ">
                                        <div>
                                            <h3 class="pe-1">
                                                ${{product.price}}
                                            </h3>
                                        </div>

                                    </div>
                                    <div class="color-size-box">

                                        <div class="size-box">
                                            <h4> Size</h4>
                                            <div class="d-flex align-items-center">
                                                <div class="size-sellect language"><select>
                                                    <option>28</option>
                                                    <option value="1">32</option>
                                                    <option value="4">34</option>
                                                    <option value="4">36</option>
                                                </select></div>
                                                        </div>
                                        </div>
                                    </div>
                                    <div class="product-quantity m-0">
                                    </div>
                                    <div class="shop-details-top-cart-box-btn">
                                        <button class="btn--primary style2 "
                                                type="submit">Add to Cart
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

</template>

<script>
export default {
    name: "Show.vue",

    mounted() {
        $(document).trigger('init')
        this.getProduct(this.$route.params.id)
    },


    data() {
        return {
            product: [],
        }
    },


    methods: {
        getProduct(id) {
            this.axios.get(`/api/products/${id}`)
                .then(res => {
                    this.product = res.data.data;
                    console.log(res)
                })

        }

    },


}
</script>

<style scoped>

</style>