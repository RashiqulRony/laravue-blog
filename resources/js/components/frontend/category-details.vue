<template>
    <div>
        <section class="banner-area relative">
            <div class="overlay overlay-bg"></div>
            <div class="banner-content text-center">
                <h1>Blog Details</h1>
                <p>Elementum libero hac leo integer. Risus hac parturient feugiat litora <br /> cursus hendrerit bibendum per </p>
            </div>
        </section>

        <section class="blog_area section-gap single-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="main_blog_details">
                            <img class="img-fluid" :src="'/images/blog/'+ blog.image" alt="">
                            <a href="#"><h4>{{ blog.title }}</h4></a>
                            <div class="user_details">
                                <div class="float-left">
                                    <a href="#">Lifestyle</a>
                                    <a href="#">Gadget</a>
                                </div>
                                <div class="float-right mt-sm-0 mt-3">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5>Rashiqul Rony</h5>
                                            <p>{{ blog.created_date }}</p>
                                        </div>
                                        <div class="d-flex">
                                            <img :src="'/frontend/img/blog/user-img.jpg'" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>{{ blog.description }}</p>
                            <div class="news_d_footer flex-column flex-sm-row">
                                <a href="#"><i class="lnr lnr lnr-heart"></i>Lily and 4 people like this</a>
                                <a class="justify-content-sm-center ml-sm-auto mt-sm-0 mt-2" href="#"><i class="lnr lnr lnr-bubble"></i>06 Comments</a>
                                <div class="news_socail ml-sm-auto mt-sm-0 mt-2">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#"><img class="img-fluid" :src="'/frontend/img/blog/prev.jpg'" alt=""></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                                    </div>
                                    <div class="detials">
                                        <p>Prev Post</p>
                                        <a href="#"><h4>A Discount Toner</h4></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <p>Next Post</p>
                                        <a href="#"><h4>Cartridge Is Better</h4></a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#"><img class="img-fluid" :src="'/frontend/img/blog/next.jpg'" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comments-area">
                            <h4>05 Comments</h4>
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img :src="'/frontend/img/blog/c1.jpg'" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Emilly Blunt</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="" class="btn-reply text-uppercase">reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-list left-padding">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img :src="'/frontend/img/blog/c2.jpg'" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Elsie Cunningham</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="" class="btn-reply text-uppercase">reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-list left-padding">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="frontend/img/blog/c3.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Annie Stephens</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="" class="btn-reply text-uppercase">reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="frontend/img/blog/c4.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Maria Luna</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="" class="btn-reply text-uppercase">reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="frontend/img/blog/c5.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Ina Hayes</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                            <p class="comment">
                                                Never say goodbye till the end comes!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="" class="btn-reply text-uppercase">reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-form">
                            <h4>Leave a Reply</h4>
                            <form>
                                <div class="form-group form-inline">
                                    <div class="form-group col-lg-6 col-md-6 name">
                                        <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 email">
                                        <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                </div>
                                <a href="#" class="primary-btn submit_btn">Post Comment</a>
                            </form>
                        </div>
                    </div>

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
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Fashion</p>
                                            <p>59</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Travel</p>
                                            <p>09</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Lifestyle</p>
                                            <p>24</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Shopping</p>
                                            <p>44</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Food</p>
                                            <p>15</p>
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
            </div>
        </section>
    </div>

</template>

<script>
    export default {
        mounted() {
            let app = this;
            let slug = app.$route.params.slug;
            app.blogSlug = slug;
            axios.get('/api/blog-details/' + slug)
                .then(function (resp) {
                    console.log(resp.data)
                    app.blog = resp.data;
                })
                .catch(function () {
                    alert("Could not load your data")
                });
        },
        data: function () {
            return {
                blogSlug: null,
                blog: {
                    slug: '',
                    title: '',
                    description: '',
                    category_title: '',
                    image: '',
                    created_date: ''
                }
            }
        },
        methods: {

        }
    }
</script>
