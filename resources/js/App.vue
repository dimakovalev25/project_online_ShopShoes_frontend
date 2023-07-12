<template>
    <div>
        <header class="header-style-3">
            <!-- Start Desktop Menu -->
            <div class="menubox">
                <div class="container-fluid">
                    <div class="row d-lg-none d-block">
                        <div class="mobile-menu ">
                            <div class="mobile-menu__menu-top border-bottom-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="menu-info d-flex justify-content-between align-items-center">
                                            <div class="menubar"><span></span> <span></span> <span></span></div>
                                            <a
                                                    href="/" class="logo"> <img
                                                    src="src/assets/images/logo/logo1.png"
                                                    alt=""> </a>
                                            <div class="cart-holder">
<!--                                                <router-link :to="{name: 'products.cart'}"-->
<!--                                                             class="cart cart-icon position-relative">-->
<!--                                                    <i class="flaticon-shopping-cart"></i>-->
<!--                                                </router-link>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-closer"></div>
                            <div class="mobile-menu__sidebar-menu">
                                <div class="menu-closer two"><span> Close Menu</span> <span class="cross"><i
                                        class="flaticon-cross"></i></span></div>
                                <div class="search-box-holder">
                                    <form action="#0">
                                        <div class="form-group search-box menu"><input type="text" class="form-control"
                                                                                       placeholder="Search for products">
                                            <span
                                                    class="search-icon"> <i
                                                    class="flaticon-magnifying-glass"></i> </span></div>
                                    </form>
                                </div>
                                <ul class="page-dropdown-menu">
                                    <li class="dropdown-list"><a href="#0"> <span>Home </span> <span class="menuarrow"> <i
                                            class="flaticon-next-1"></i> </span> </a>
                                        <ul class="dropdown">
                                            <li><a href="/">Home Page 01</a></li>
                                            <li><a href="index-2.html">Home Page 02</a></li>

                                        </ul>
                                    </li>

                                    <li class="dropdown-list"><a href="/products"> <span>Sneackers</span> <span
                                            class="menuarrow"> <i
                                            class="flaticon-next-1"></i> </span> </a>
                                        <ul class="dropdown">
                                            <li><a href="/">Sneackers</a></li>
                                            <li><a href="/">Adidas</a></li>
                                            <li><a href="/">Nike</a></li>
                                            <li><a href="/">Puma</a></li>

                                        </ul>
                                    </li>

                                    <li class="dropdown-list"><a href="#0"> <span>Shop </span> <span class="menuarrow"> <i
                                            class="flaticon-next-1"></i> </span> </a>
                                        <ul class="dropdown">
                                            <li class="subhed position-relative"><a href="#0"> <span>Shop Details Style
                                                </span> <span class="menuarrowtwo"> <i class="flaticon-next-1"></i>
                                                </span> </a>
                                                <ul class="subdropdown">
                                                    <li><a href="shop-details-1.html">Shop Details 01</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop-grid.html"> Shop Grid</a></li>
                                            <li><a href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a></li>

                                        </ul>
                                    </li>

                                    <li class="dropdown-list"><a href="#0"> <span>Pages</span> <span class="menuarrow"> <i
                                            class="flaticon-next-1"></i> </span> </a>
                                        <ul class=" dropdown ">
                                            <li><a href="about-us.html"> About Us </a></li>
                                            <li><a href="cart.html"> Cart </a></li>
                                            <li><a href="compare.html"> Compare </a></li>
                                            <li><a href="wishlist.html"> Wishlist </a></li>
                                            <li><a href="order-track.html"> Order Track </a></li>
                                            <li><a href="my-account.html"> My Account </a></li>
                                            <li><a href="faq.html"> FAQ </a></li>
                                            <li><a href="error.html"> 404 </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-list"><a href="#0"> <span>Blogs </span> <span class="menuarrow"> <i
                                            class="flaticon-next-1"></i> </span> </a>
                                        <ul class=" dropdown ">
                                            <li><a href="blog.html">Blog Single </a></li>
                                            <li><a href="blog-single.html">Blog Details </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact </a></li>
                                    <li><a href="login.html">Login </a></li>
                                    <li><a href="register.html">Register </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-block d-none">
                        <div class="row g-0 position-relative">
                            <div class="col-lg-3 d-flex align-items-center justify-content-center border-rit ">
                                <div class="logo"><a href="/"> <img src="src/assets/images/logo/logo1.png"
                                                                    alt=""> </a>
                                </div>
                            </div>
                            <div class="col-lg-9 g-0 p-0">
                                <div class="row g-0 holder">
                                    <div class="col-12">
                                        <div class="some-info">
                                            <p class="d-flex align-items-center"> <span class="icon"> <i
                                                    class="flaticon-power"></i> </span> Welcome to Online Shop</p>
                                            <div class="right d-flex align-items-center ">
                                                <div class="language currency"><select>
                                                    <option>USD</option>
                                                    <option value="1">INR</option>
                                                    <option value="2">BDT</option>
                                                </select></div>
                                                <div class="language two"><select>
                                                    <option>ENGLISH</option>
                                                    <option value="1">GERMAN</option>
                                                    <option value="4">FRENCH</option>
                                                </select></div>
                                                <a href="login.html"> Sign In / Register </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-one"></div>
                                <div class="row g-0 holder">
                                    <div class="col-12">
                                        <div class="mega-menu-default mega-menu d-lg-block d-none">
                                            <div class=" d-flex align-items-center justify-content-between ">
                                                <nav>
                                                    <ul
                                                            class="page-dropdown-menu d-flex align-items-center justify-content-center">
                                                        <li class="dropdown-list"><a href="#0"> <span>Home</span> <span
                                                                class="menuarrow"> <i class="flaticon-down-arrow"></i>
                                                            </span> </a>
                                                            <ul class="dropdown">
                                                                <li><a href="/">Home Page 01 <sup
                                                                        class="info three">Popular</sup></a></li>
                                                                <li><a href="index-2.html">Home Page 02 <sup
                                                                        class="info one">Hot</sup></a>
                                                                </li>
                                                            </ul>
                                                        </li>


                                                        <li class="dropdown-list"><a href="/products">
                                                            <span>Sneackers</span> <span class="menuarrow"> <i
                                                                class="flaticon-next-1"></i> </span> </a>
                                                            <ul class="dropdown">
                                                                <li><a href="/">Sneackers</a></li>
                                                                <li><a href="/">Adidas</a></li>
                                                                <li><a href="/">Nike</a></li>
                                                                <li><a href="/">Puma</a></li>

                                                            </ul>
                                                        </li>


                                                        <li class="dropdown-list"><a href="#0"> <span>Shop </span> <span
                                                                class="menuarrow"> <i class="flaticon-down-arrow"></i>
                                                            </span> </a>
                                                            <ul class="dropdown">
                                                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                                                <li><a href="shop-grid-left-sidebar.html">Shop Grid Left
                                                                    Sidebar </a>
                                                                </li>
                                                                <li><a href="shop-grid-right-sidebar.html">Shop List
                                                                    Left
                                                                    Sidebar</a>
                                                                </li>
                                                                <li><a href="shop-grid-right-sidebar.html">Shop Grid
                                                                    Right
                                                                    Sidebar </a>
                                                                </li>
                                                                <li><a href="shop-list-right-sidebar.html">Shop List
                                                                    Right
                                                                    Sidebar</a>
                                                                </li>
                                                                <li class="submenu-parent"><a href="#0"> <span>Shop Details
                                                                        Style
                                                                    </span> <span class="menuarrow"> <i
                                                                        class="flaticon-next-1"></i>
                                                                    </span> </a>
                                                                    <ul class="submenu">
                                                                        <li><a href="shop-details-1.html">Shop Details
                                                                            Style
                                                                            01</a></li>
                                                                        <li><a href="shop-details-2.html">Shop Details
                                                                            Style
                                                                            02</a></li>
                                                                        <li><a href="shop-details-3.html">Shop Details
                                                                            Style
                                                                            03</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>


                                                        <li class="dropdown-list"><a href="#0"> <span>Pages </span>
                                                            <span
                                                                    class="menuarrow"> <i
                                                                    class="flaticon-down-arrow"></i>
                                                            </span> </a>
                                                            <ul class="dropdown">
                                                                <li><a href="about-us.html">About Us </a></li>
                                                                <li><a href="contact.html">Contact</a></li>
                                                                <li><a href="faq.html">FAQ</a></li>
                                                                <li><a href="order-track.html">Order_Track</a></li>
                                                                <li><a href="my-account.html">My_Account</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-list"><a href="contact.html">Contact</a>
                                                        </li>
                                                    </ul>
                                                </nav>


                                                <div class="right d-flex align-items-center justify-content-end">
                                                    <ul class="main-menu__widge-box d-flex align-items-center ">
                                                        <li class="d-lg-block d-none"><a href="my-account.html"><i
                                                                class="flaticon-user"></i> </a></li>
                                                        <li class="d-lg-block d-none"><a href="wishlist.html"
                                                                                         class="number"><i
                                                                class="flaticon-heart"></i> <span
                                                                class="count">(2)</span> </a></li>

                                                        <li class="cartm">
                                                            <router-link :to="{name: 'products.cart'}" class="number cart-icon">
                                                                <i class="flaticon-shopping-cart"></i>
                                                                <span class="count">(5)</span>
                                                            </router-link>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="shop-grid.html" class="offer-link"> Offer </a>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <router-view></router-view>

        <footer class="footer-default footer-3 ">
            <div class="footer-default__shap_1 position-absolute "><img src="src/assets/images/shape/footer-shape-1.png"
                                                                        alt=""></div>
            <!--Start Footer-->
            <div class="footer-default__main-footer position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                            <div class="footer-default__single-box">
                                <div class="company-info">
                                    <div class="footer-title">
                                        <h4> Office</h4>
                                    </div>
                                    <div class="text1">
                                        <p>29 Holles Place, Dublin 2 D02 YY46</p>
                                    </div>
                                    <div class="text2">
                                        <p>68 Jay Street, Suite 902 New Side <br> Brooklyn, NY 11201</p>
                                    </div>
                                    <div class="text3">
                                        <p>New York, United States</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                            <div class="footer-default__single-box">
                                <div class="footer-title">
                                    <h4> Useful Links </h4>
                                </div>
                                <ul class="footer-links">
                                    <li><a href="my-account.html">Account</a></li>
                                    <li><a href="login.html">Sign In</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                            <div class="footer-default__single-box">
                                <div class="footer-title">
                                    <h4> Information </h4>
                                </div>
                                <ul class="footer-links">
                                    <li><a href="about-us.html">About us</a></li>
                                    <li><a href="contact.html">Contact Us </a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                            <div class="footer-default__single-box">
                                <div class="footer-title">
                                    <h4> Newsletter </h4>
                                </div>
                                <div class="footer-newsletter">
                                    <p class="text">Enter your email to receive our latest updates about our products &
                                        promotions. </p>
                                    <form action="#0" class="footer-default__subscrib-form">
                                        <div class="footer-input-box"><input type="email" placeholder="Email address"
                                                                             name="email">
                                            <button type="submit" class="subscribe_btn"> Subscribe
                                            </button>
                                        </div>
                                    </form>
                                    <div class="newsletter-bottom d-flex align-items-center">
                                        <div class="footer-title-box">
                                            <p>Follow Us:</p>
                                        </div>
                                        <div class="footer__medio-boxx  medio-boxx  d-flex align-items-center">
                                            <ul>
                                                <li><a href="https://www.facebook.com/" target="_blank"
                                                       class="active"><i
                                                        class="flaticon-facebook-app-symbol"></i></a></li>
                                                <li><a href="https://www.youtube.com/" target="_blank"><i
                                                        class="flaticon-youtube"></i></a></li>
                                                <li><a href="https://twitter.com/"><i class="flaticon-twitter"
                                                                                      target="_blank"></i></a></li>
                                                <li><a href="https://www.instagram.com/"><i class="flaticon-instagram"
                                                                                            target="_blank"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- footer-bottom Footer-->
            <div class="footer_bottom position-relative">
                <div class="container">
                    <div class="footer_bottom_content">
                        <div class="copyright wow fadeInUp animated">
                            <p>© 2022 <a href="/">Karte.</a> All Rights Reserved.</p>
                        </div>
                        <div class="footer-payment wow fadeInUp animated">
                            <a href="#0"> <img src="src/assets/images/home-four/method-1.jpg" alt="payment"> </a>

                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
export default {

    name: 'App',

    mounted() {
        $(document).trigger('init')
    }

}

</script>


<style>

</style>
