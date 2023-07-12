<template>
    <div>
        <main class="overflow-hidden ">
            <!--Start Breadcrumb Style2-->
            <div class="breadcrumb-area" style="background-image: url(src/assets/images/inner-pages/breadcum-bg1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-content pb-60 text-center wow fadeInUp animated">
                                <h2>Shop Grid</h2>
                                <div class="breadcrumb-menu">
                                    <ul>
                                        <li><a href="/"><i class="flaticon-home pe-2"></i>Home</a></li>
                                        <li><i class="flaticon-next"></i></li>
                                        <li class="active">Shop Grid</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-grid pt-60 pb-120">
                <div class="container">
                    <div class="row gx-4">
                        <div class="col-xl-3 col-lg-4">
                            <div class="shop-grid-sidebar">
                                <button class="remove-sidebar d-lg-none d-block"><i
                                        class="flaticon-cross"> </i></button>
                                <div class="sidebar-holder">
                                    <form action="#0"
                                          class="footer-default__subscrib-form m-0 p-0 wow fadeInUp animated">
                                        <div class="footer-input-box p-0 "><input type="email"
                                                                                  placeholder="Email address"
                                                                                  name="email">
                                            <button type="submit" class="subscribe_btn"><i
                                                    class="flaticon-magnifying-glass"></i></button>
                                        </div>
                                    </form>


                                    <div class="single-sidebar-box mt-30 wow fadeInUp animated ">
                                        <h4>Select Brands</h4>
                                        <div class="checkbox-item">

                                            <form v-for="brand in filtersList.brands">
                                                <div class="form-group">
                                                    <input v-model="brands" type="checkbox" :id="brand.id"
                                                           :value="brand.id">
                                                    <label :for="brand.id">{{ brand.title }}</label>
                                                </div>
                                            </form>

                                        </div>
                                    </div>


                                    <div class="single-sidebar-box mt-30 wow fadeInUp animated ">
                                        <h4>Select Categories</h4>
                                        <div class="checkbox-item">

                                            <form v-for="category in filtersList.categories">
                                                <div class="form-group">
                                                    <input v-model="categories" type="checkbox" :id="category.title"
                                                           :value="category.id">
                                                    <label :for="category.title">{{ category.title }}</label>
                                                </div>
                                            </form>


                                        </div>
                                    </div>

                                    <div class="single-sidebar-box mt-30 wow fadeInUp animated">
                                        <h4>Filter By Price</h4>
                                        <div class="slider-box">
                                            <form action="">
                                                <input v-model="min_price" type="number" placeholder="min price">
                                                <input v-model="max_price" type="number" placeholder="max price">
                                                <button @click.prevent="getProductFilterList()" class="filterbtn mt-3"
                                                        type="submit"> Filter
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div
                                            class="shop-grid-page-top-info p-0 justify-content-md-between justify-content-center">
                                        <div class="left-box wow fadeInUp animated">
                                            <p>Showing 1–12 of 50 Results</p>
                                        </div>
                                        <div
                                                class="right-box justify-content-md-between justify-content-center wow fadeInUp animated">
                                            <div class="short-by">
                                                <div class="select-box">
                                                    <select class="wide">
                                                        <option data-display="Short by latest">Featured</option>
                                                        <option value="1">Best selling</option>
                                                        <option value="2">Alphabetically, A-Z</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="product-view-style d-flex justify-content-md-between justify-content-center">
                                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="pills-grid-tab"
                                                                data-bs-toggle="pill" data-bs-target="#pills-grid"
                                                                type="button"
                                                                role="tab" aria-selected="true">
                                                            <i class="flaticon-grid"></i>
                                                        </button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="pills-list-tab"
                                                                data-bs-toggle="pill"
                                                                data-bs-target="#pills-list" type="button" role="tab"
                                                                aria-selected="false">
                                                            <i class="flaticon-list"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                                <button class="slidebarfilter d-lg-none d-flex"><i
                                                        class="flaticon-edit"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-grid" role="tabpanel"
                                             aria-labelledby="pills-grid-tab">
                                            <div class="row">


                                                <div v-for="product in products" class="col-xl-4 col-lg-6 col-6 ">
                                                    <div class="products-three-single w-100  mt-30">
                                                        <div class="products-three-single-img">
                                                            <router-link :to="{name: 'products.show', params: {id: product.id}}"
                                                                    class="d-block">
                                                                <img
                                                                    :src="product.image_url"
                                                                    class="first-img" alt=""/>
                                                                <img
                                                                    :src="product.image_url"
                                                                    alt="" class="hover-img"/>
                                                            </router-link>
                                                            <div class="products-grid-one__badge-box">
                                                            </div>
                                                            <a  @click.prevent="addToCart(product.id)"  href="cart.html" class="addcart btn--primary style2">
                                                                Add To Cart </a>
                                                            <div class="products-grid__usefull-links">
                                                            </div>
                                                        </div>

                                                        <div class="products-three-single-content text-center">
                                                            <span>{{ product.category.title }}</span>
                                                            <h5>
                                                                <router-link :to="{name: 'products.show', params: {id: product.id}}" > {{ product.title }} </router-link>
                                                            </h5>
                                                            <p>
                                                                <!--                                                                <del>{{ product.price }}$</del>-->
                                                                {{ (product.price).toFixed(2) }}$
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-list" role="tabpanel"
                                             aria-labelledby="pills-list-tab">
                                            <div class="row ">
                                                <div v-for="product in products" class="col-12">
                                                    <div class="product-grid-two list mt-30 ">
                                                        <div class="product-grid-two__img">
                                                            <a href="shop-details-2.html" class="d-block"> <img
                                                                    :src="product.image_url"
                                                                    class="first-img" alt=""/> <img
                                                                    :src="product.image_url"
                                                                    alt="" class="hover-img"/> </a>
                                                            <div class="products-grid-one__badge-box"> <span
                                                                    class="badge discount">Best</span></div>
                                                        </div>
                                                        <div id="popupb"
                                                             class="product-gird__quick-view-popup mfp-hide">
                                                            <div class="container">
                                                                <div class="row justify-content-between align-items-center">
                                                                    <div class="col-lg-6">
                                                                        <div class="quick-view__left-content">
                                                                            <div class="tabs">
                                                                                <div class="popup-product-thumb-box">
                                                                                    <ul>
                                                                                        <li
                                                                                                class="tab-nav popup-product-thumb">
                                                                                            <a href="#tab7111111b"> <img
                                                                                                    src="src/assets/images/shop/shop-grid-page-img1.jpg"
                                                                                                    alt=""/> </a></li>
                                                                                        <li
                                                                                                class="tab-nav popup-product-thumb ">
                                                                                            <a href="#tab8111111b"> <img
                                                                                                    src="src/assets/images/shop/shop-grid-page-img2.jpg"
                                                                                                    alt=""/> </a></li>
                                                                                        <li
                                                                                                class="tab-nav popup-product-thumb ">
                                                                                            <a href="#tab9111111b"> <img
                                                                                                    src="src/assets/images/shop/shop-grid-page-img3.jpg"
                                                                                                    alt=""/> </a></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="popup-product-main-image-box">
                                                                                    <div id="tab7111111b"
                                                                                         class="tab-item popup-product-image">
                                                                                        <div
                                                                                                class="popup-product-single-image">
                                                                                            <img src="src/assets/images/shop/shop-grid-page-img1.jpg"
                                                                                                 alt=""/></div>
                                                                                    </div>
                                                                                    <div id="tab8111111b"
                                                                                         class="tab-item popup-product-image">
                                                                                        <div
                                                                                                class="popup-product-single-image">
                                                                                            <img src="src/assets/images/shop/shop-grid-page-img2.jpg"
                                                                                                 alt=""/></div>
                                                                                    </div>
                                                                                    <div id="tab9111111b"
                                                                                         class="tab-item popup-product-image">
                                                                                        <div
                                                                                                class="popup-product-single-image">
                                                                                            <img src="src/assets/images/shop/shop-grid-page-img3.jpg"
                                                                                                 alt=""/></div>
                                                                                    </div>
                                                                                    <button class="prev"><i
                                                                                            class="flaticon-back"></i>
                                                                                    </button>
                                                                                    <button class="next"><i
                                                                                            class="flaticon-next"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="popup-right-content">
                                                                            <h3>Round Small Table </h3>
                                                                            <div class="ratting"><i
                                                                                    class="flaticon-star"></i> <i
                                                                                    class="flaticon-star"></i> <i
                                                                                    class="flaticon-star"></i> <i
                                                                                    class="flaticon-star"></i> <i
                                                                                    class="flaticon-star"></i>
                                                                                <span>(123)</span></div>
                                                                            <p class="text"> Wooden Tables to Brighten
                                                                                Your
                                                                                Dining Room </p>
                                                                            <div class="price">
                                                                                <h2> $50 USD
                                                                                    <del> $105 USD</del>
                                                                                </h2>
                                                                                <h6> In stuck</h6>
                                                                            </div>
                                                                            <div class="color-varient"><a href="#0"
                                                                                                          class="color-name pink">
                                                                                <span>Pink</span> </a> <a href="#0"
                                                                                                          class="color-name red">
                                                                                <span>Red</span>
                                                                            </a> <a href="#0"
                                                                                    class="color-name yellow"><span>Yellow</span>
                                                                            </a> <a href="#0" class="color-name blue">
                                                                                <span>Blue</span> </a> <a href="#0"
                                                                                                          class="color-name black">
                                                                                <span>Black</span> </a></div>
                                                                            <div class="add-product">
                                                                                <h6>Qty:</h6>
                                                                                <div class="button-group">
                                                                                    <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i
                                                                                            class="flaticon-minus"></i>
                                                                                    </span> <input type="number"
                                                                                                   class="qtyValue"
                                                                                                   value="1"/>
                                                                                        <span class="increaseQty"> <i
                                                                                                class="flaticon-plus"></i>
                                                                                    </span></div>
                                                                                    <button
                                                                                            class="btn--primary "> Add
                                                                                        to Cart
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="payment-method"><a href="#0">
                                                                                <img
                                                                                        src="src/assets/images/payment_method/method_1.png"
                                                                                        alt=""> </a> <a href="#0"> <img
                                                                                    src="src/assets/images/payment_method/method_2.png"
                                                                                    alt=""> </a> <a href="#0"> <img
                                                                                    src="src/assets/images/payment_method/method_3.png"
                                                                                    alt=""> </a> <a href="#0"> <img
                                                                                    src="src/assets/images/payment_method/method_4.png"
                                                                                    alt=""> </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-grid-two-content text-center">
                                                            <span>{{ product.category.title }}</span>
                                                            <h5><a href="shop-details-2.html">{{ product.title }} </a>
                                                            </h5>
                                                            <p>
                                                                <!--                                                                <del>{{ product.price }}$</del>-->
                                                                {{ (product.price).toFixed(2) }}$
                                                            </p>
                                                            <p class="text"> {{ product.description }} </p>
                                                            <div class="product-grid-two__overlay-box">
                                                                <div class="title">
                                                                    <h6><a @click.prevent="addToCart(product.id)" href="cart.html">Add To Cart</a></h6>
                                                                </div>
                                                                <div class="icon">
                                                                    <ul>
                                                                        <li><a href="#popupb" class="popup_link"><i
                                                                                class="flaticon-eye"></i></a></li>
                                                                        <li><a href="wishlist.html"><i
                                                                                class="flaticon-heart"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div v-if="pagination.last_page > 1" class="row">
                                <div class="col-12 d-flex justify-content-center wow fadeInUp animated">
                                    <ul class="pagination text-center">


                                        <li v-if="pagination.current_page !== 1" class="next"><a
                                                @click.prevent="getProductFilterList(pagination.current_page -1)"
                                                href="#0"><i
                                                class="flaticon-left-arrows"
                                                aria-hidden="true"></i> </a></li>

                                        <li v-for="link in pagination.links">
                                            <template v-if="Number(link.label)
                                                && (pagination.current_page - link.label < 2
                                                && pagination.current_page - link.label > -2) ||
                                                Number(link.label) === 1 || Number(link.label) === pagination.last_page
                                                                                    ">
                                                <a @click.prevent="getProductFilterList(link.label)"
                                                   :class="link.active ? 'active' : '' " href="#0">{{ link.label }}</a>
                                            </template>
                                        </li>

                                        <li v-if="pagination.current_page !== pagination.last_page" class="next"><a
                                                @click.prevent="getProductFilterList(pagination.current_page +1)"
                                                href="#0"><i class="flaticon-next-1"
                                                             aria-hidden="true"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End product-grid-->
        </main>

    </div>
</template>

<script>
export default {
    name: "Index.vue",

    mounted() {
        $(document).trigger('init')
        this.getProductFilterList()
        this.getFiltersList()

    },


    data() {
        return {
            products: [],
            brands: [],
            filtersList: [],
            categories: [],
            min_price: null,
            max_price: null,
            pagination: [],
        }
    },


    methods: {

        addToCart(id){
            let cart = localStorage.getItem('cart')
            let newProduct =  [{
                'id': id,
                'quantity': 1
            }]
            if(!cart){
                localStorage.setItem('cart', JSON.stringify(newProduct))
            } else {
                cart = JSON.parse(cart)
                cart.forEach(item => {
                    if (item.id === id){
                        item.quantity = Number(item.quantity) + 1
                        newProduct = null
                    }
                })

                Array.prototype.push.apply(cart, newProduct)
                localStorage.setItem('cart', JSON.stringify(cart))
                console.log(cart)



            }



        },

        getFiltersList() {
            this.axios.get('http://localhost:8876/api/products/filters')
                .then(res => {
                    this.filtersList = res.data
                })
        },

        addTag(id) {
            if (!this.tags.includes(id)) {
                this.tags.push(id)
            } else {
                this.tags = this.tags.filter(elem => {
                    return elem !== id
                })

            }

        },
        getProducts() {
            this.axios.get('http://localhost:8876/api/products')
                .then(res => {
                    this.products = res.data.data;
                    this.pagination = res.data.meta;
                    // console.log(res)
                })
        },


        getProductFilterList(page = 1) {
            this.axios.post('http://localhost:8876/api/products/filterproducts', {
                'categories': this.categories,
                'brands': this.brands,
                'page': page,
                'prices': [this.min_price ? this.min_price : 0, this.max_price ? this.max_price : 99999]

            })
                .then(res => {
                    // console.log(this.products);
                    this.products = res.data.data;
                    this.pagination = res.data.meta;
                })
        },
    },


}
</script>

<style scoped>

</style>