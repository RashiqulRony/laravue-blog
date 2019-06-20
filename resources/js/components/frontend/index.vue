<template>

<div>
    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-gap relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">

                        <div class="col-lg-6 col-md-6" v-for="blog, index in blogs">
                            <div class="single-amenities">
                                <div class="amenities-thumb">
                                    <img class="img-fluid w-100" :src="'/images/blog/'+blog.image">
                                </div>
                                <div class="amenities-details">
                                    <h5>
                                        <router-link :to="{name: 'blogDetails', params: {slug: blog.slug}}">{{ blog.title }}</router-link>
                                    </h5>
                                    <div class="amenities-meta mb-10">
                                        <a href="#" class=""><span class="ti-calendar"></span>{{ blog.created_date }}</a>
                                        <a href="#" class="ml-20"><span class="ti-comment"></span>05</a>
                                    </div>
                                    <p>{{ blog.description.substring(0,100)+"..." }}</p>

                                    <div class="d-flex justify-content-between mt-20">
                                        <div>
                                            <a href="#" class="blog-post-btn">
                                                Read More <span class="ti-arrow-right"></span>
                                            </a>
                                        </div>
                                        <div class="category">
                                            <a href="#">
                                                <span class="ti-folder mr-1"> {{ blog.category_title }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

<!--                    <div class="row">-->
<!--                        <div class="col-lg-12">-->
<!--                            <nav class="blog-pagination justify-content-center d-flex">-->
<!--                                <ul class="pagination">-->
<!--                                    <li class="page-item">-->
<!--                                        <a href="#" class="page-link" aria-label="Previous">-->
<!--                                  <span aria-hidden="true">-->
<!--                                      <span class="ti-arrow-left"></span>-->
<!--                                  </span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="page-item"><a href="#" class="page-link">01</a></li>-->
<!--                                    <li class="page-item active"><a href="#" class="page-link">02</a></li>-->
<!--                                    <li class="page-item"><a href="#" class="page-link">03</a></li>-->
<!--                                    <li class="page-item"><a href="#" class="page-link">04</a></li>-->
<!--                                    <li class="page-item"><a href="#" class="page-link">09</a></li>-->
<!--                                    <li class="page-item">-->
<!--                                        <a href="#" class="page-link" aria-label="Next">-->
<!--                                  <span aria-hidden="true">-->
<!--                                      <span class="ti-arrow-right"></span>-->
<!--                                  </span>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </nav>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>

                <!-- Start Blog Post Siddebar -->
                <div class="col-lg-4 sidebar-widgets">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget search-widget">
                            <form class="search-form" action="#">
                                <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                        <div class="single-sidebar-widget instafeed-widget">
                            <h4 class="instafeed-title">Instagram</h4>
                            <ul class="instafeed d-flex flex-wrap">
                                <li><img src="frontend/img/blog/instagram/i1.jpg" alt=""></li>
                                <li><img src="frontend/img/blog/instagram/i2.jpg" alt=""></li>
                                <li><img src="frontend/img/blog/instagram/i3.jpg" alt=""></li>
                                <li><img src="frontend/img/blog/instagram/i4.jpg" alt=""></li>
                                <li><img src="frontend/img/blog/instagram/i5.jpg" alt=""></li>
                                <li><img src="frontend/img/blog/instagram/i6.jpg" alt=""></li>
                            </ul>
                        </div>

                        <div class="single-sidebar-widget post-category-widget">
                            <h4 class="category-title">Catgories</h4>
                            <ul class="cat-list mt-20">
                                <li v-for="category, index in categories">
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>{{ category.title }}</p>
                                        <p>59</p>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="single-sidebar-widget popular-post-widget">
                            <h4 class="popular-title">Popular Posts</h4>
                            <div class="popular-post-list">
                                <div class="single-post-list">
                                    <div class="thumb">
                                        <img class="img-fluid" src="frontend/img/blog/pp1.jpg" alt="">
                                    </div>
                                    <div class="details mt-20">
                                        <a href="blog-single.html">
                                            <h6>Retro-electric 1967 Ford Mustang
                                                revealed in Russia</h6>
                                        </a>
                                        <p>Mate Winston | Dec 15</p>
                                    </div>
                                </div>
                                <div class="single-post-list">
                                    <div class="thumb">
                                        <img class="img-fluid" src="frontend/img/blog/pp2.jpg" alt="">
                                    </div>
                                    <div class="details mt-20">
                                        <a href="blog-single.html">
                                            <h6>Unsettling trend of food safety at
                                                sports stadiums uncovered</h6>
                                        </a>
                                        <p>Mate Winston | Dec 15</p>
                                    </div>
                                </div>
                                <div class="single-post-list">
                                    <div class="thumb">
                                        <img class="img-fluid" src="frontend/img/blog/pp3.jpg" alt="">
                                    </div>
                                    <div class="details mt-20">
                                        <a href="blog-single.html">
                                            <h6>Christmas cottage from the Holiday
                                                flick selling for people</h6>
                                        </a>
                                        <p>Mate Winston | Dec 15</p>
                                    </div>
                                </div>
                                <div class="single-post-list">
                                    <div class="thumb">
                                        <img class="img-fluid" src="frontend/img/blog/pp4.jpg" alt="">
                                    </div>
                                    <div class="details mt-20">
                                        <a href="blog-single.html">
                                            <h6>Home improvement advice every
                                                homeowner needs to know</h6>
                                        </a>
                                        <p>Mate Winston | Dec 15</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-sidebar-widget newsletter-widget">
                            <h4 class="newsletter-title">Newsletter</h4>
                            <div class="form-group mt-30">
                                <div class="col-autos">
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = 'Enter email'">
                                </div>
                            </div>
                            <button class="bbtns d-block mt-20 w-100">Subcribe</button>
                        </div>

                        <div class="single-sidebar-widget share-widget">
                            <h4 class="share-title">Share this post</h4>
                            <div class="social-icons mt-20">
                                <a href="#">
                                    <span class="ti-facebook"></span>
                                </a>
                                <a href="#">
                                    <span class="ti-twitter"></span>
                                </a>
                                <a href="#">
                                    <span class="ti-pinterest"></span>
                                </a>
                                <a href="#">
                                    <span class="ti-instagram"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Post Siddebar -->
        </div>
    </section>
    <!--================ End Blog Post Area =================-->
</div>


</template>

<script>
    export default {
        data: function () {
            return {
                categories: [],
                blogs: []
            }
        },
        mounted() {
            var _this = this;
            axios.get('/api/blogs')
                .then(function (resp) {
                    _this.blogs = resp.data
                })

            axios.get('/api/categories')
                .then(function (resp) {
                    _this.categories = resp.data;
                })

        },
        methods: {

        }
    }
</script>
