<?php include('inc/header.php'); ?>
<main class="banner">
    <div class="custom-container-sm">
        <div class="categories-wrapper">
            <ul class="px-0 m-0 d-flex align-items-center justify-content-center">
                <li class="active">
                    <a href="#">Discover</a>
                </li>
                <li>
                    <a href="#">Animation</a>
                </li>
                <li>
                    <a href="#">Branding</a>
                </li>
                <li>
                    <a href="#">Illustration</a>
                </li>
                <li>
                    <a href="#">Mobile</a>
                </li>
                <li>
                    <a href="#">Print</a>
                </li>
                <li>
                    <a href="#">Product Design</a>
                </li>
                <li>
                    <a href="#">Typography</a>
                </li>
                <li>
                    <a href="#">Web Design</a>
                </li>
            </ul>
        </div>
        <div class="banner-text text-center d-flex flex-column">
            <h1>Explore the world’s leading<br> design portfolios</h1>
            <p>Millions of designers and agencies around the world showcase their portfolio work on<br> Dribbble - the
                home to the world’s best design and creative professionals.</p>
        </div>
        <div class="search-input d-flex">
            <form class="m-auto d-flex align-items-center"  action="search">
                <a href="#" class="d-flex gap-2 align-items-center">
                <i class="bi bi-search"></i>
                <input type="text" placeholder="Search...">
                </a>
            </form>
        </div>
        <div class="search-tags-wrapper d-flex flex-column flex-lg-row align-items-center justify-content-center">
            <span>Trending searches</span>
            <ul
                class="px-0 m-0 d-flex search-tags-list align-items-center justify-content-center justify-content-lg-start">
                <li>
                    <a href="#">landing page</a>
                </li>
                <li>
                    <a href="#">ios</a>
                </li>
                <li>
                    <a href="#">food</a>
                </li>
                <li>
                    <a href="#">landing page</a>
                </li>
                <li>
                    <a href="#">ux deisgn</a>
                </li>
                <li>
                    <a href="#">app design</a>
                </li>
            </ul>
        </div>
    </div>
</main>
<section class="product-wrapper">
    <div class="custom-container-md">
        <div class="filter-wrapper d-flex align-items-center justify-content-between">
            <div class="popular-btn d-flex align-items-center">
            <form action="/action_page.php">
            <select name="category" id="category">
                <option value="popular">Popular <i class="bi bi-chevron-down"></i></option>
                <option value="trending">trending <i class="bi bi-chevron-down"></i></option>
                <option value="top-rated">top rated <i class="bi bi-chevron-down"></i></option>
                <option value="best-seller">best seller <i class="bi bi-chevron-down"></i></option>
            </select>
            </form>
                
            </div>
            <div class="filter-btn d-flex align-items-center">
                <i class="bi bi-filter"></i>
                <span>Filter</span>
            </div>
        </div>
        <div class="product-list-wrapper">
            <div class="product-list row">
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-1">
                        <figure class="w-100 product-thumb">
                            <img src="images/product-1.png" alt="product-1">
                        </figure>
                        <div class="author-views-wrapper d-flex justify-content-between align-items-center">
                            <div class="author d-flex align-items-center">
                                <figure class="author-img">
                                    <img src="images/author-1.png" alt="author-1">
                                </figure>
                                <h6 class="m-0 author-name">Zouri Miminoshvili</h6>
                                <a href="#" class="author-batch">PRO</a>
                            </div>
                            <div class="views-likes d-flex align-items-center">
                                <div class="likes d-flex align-items-center">
                                    <a href="#"><i class="bi bi-heart-fill"></i></a>
                                    <span>70</span>
                                </div>
                                <div class="views d-flex align-items-center">
                                    <i class="bi bi-eye"></i>
                                    <span>8.5k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-1">
                        <figure class="w-100 product-thumb">
                            <img src="images/product-2.png" alt="product-2">
                        </figure>
                        <div class="author-views-wrapper d-flex justify-content-between align-items-center">
                            <div class="author d-flex align-items-center">
                                <figure class="author-img">
                                    <img src="images/author-1.png" alt="author-1">
                                </figure>
                                <h6 class="m-0 author-name">Zouri Miminoshvili</h6>
                                <a href="#" class="author-batch">PRO</a>
                            </div>
                            <div class="views-likes d-flex align-items-center">
                                <div class="likes d-flex align-items-center">
                                    <a href="#"><i class="bi bi-heart-fill"></i></a>
                                    <span>70</span>
                                </div>
                                <div class="views d-flex align-items-center">
                                    <i class="bi bi-eye"></i>
                                    <span>8.5k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-1">
                        <figure class="w-100 product-thumb">
                            <img src="images/product-1.png" alt="product-1">
                        </figure>
                        <div class="author-views-wrapper d-flex justify-content-between align-items-center">
                            <div class="author d-flex align-items-center">
                                <figure class="author-img">
                                    <img src="images/author-1.png" alt="author-1">
                                </figure>
                                <h6 class="m-0 author-name">Zouri Miminoshvili</h6>
                                <a href="#" class="author-batch">PRO</a>
                            </div>
                            <div class="views-likes d-flex align-items-center">
                                <div class="likes d-flex align-items-center">
                                    <a href="#"><i class="bi bi-heart-fill"></i></a>
                                    <span>70</span>
                                </div>
                                <div class="views d-flex align-items-center">
                                    <i class="bi bi-eye"></i>
                                    <span>8.5k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-1">
                        <figure class="w-100 product-thumb">
                            <img src="images/product-2.png" alt="product-2">
                        </figure>
                        <div class="author-views-wrapper d-flex justify-content-between align-items-center">
                            <div class="author d-flex align-items-center">
                                <figure class="author-img">
                                    <img src="images/author-1.png" alt="author-1">
                                </figure>
                                <h6 class="m-0 author-name">Zouri Miminoshvili</h6>
                                <a href="#" class="author-batch">PRO</a>
                            </div>
                            <div class="views-likes d-flex align-items-center">
                                <div class="likes d-flex align-items-center">
                                    <a href="#"><i class="bi bi-heart-fill"></i></a>
                                    <span>70</span>
                                </div>
                                <div class="views d-flex align-items-center">
                                    <i class="bi bi-eye"></i>
                                    <span>8.5k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-1">
                        <figure class="w-100 product-thumb">
                            <img src="images/product-1.png" alt="product-2">
                        </figure>
                        <div class="author-views-wrapper d-flex justify-content-between align-items-center">
                            <div class="author d-flex align-items-center">
                                <figure class="author-img">
                                    <img src="images/author-1.png" alt="author-1">
                                </figure>
                                <h6 class="m-0 author-name">Zouri Miminoshvili</h6>
                                <a href="#" class="author-batch">PRO</a>
                            </div>
                            <div class="views-likes d-flex align-items-center">
                                <div class="likes d-flex align-items-center">
                                    <a href="#"><i class="bi bi-heart-fill"></i></a>
                                    <span>70</span>
                                </div>
                                <div class="views d-flex align-items-center">
                                    <i class="bi bi-eye"></i>
                                    <span>8.5k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-1">
                        <figure class="w-100 product-thumb">
                            <img src="images/product-2.png" alt="product-2">
                        </figure>
                        <div class="author-views-wrapper d-flex justify-content-between align-items-center">
                            <div class="author d-flex align-items-center">
                                <figure class="author-img">
                                    <img src="images/author-1.png" alt="author-1">
                                </figure>
                                <h6 class="m-0 author-name">Zouri Miminoshvili</h6>
                                <a href="#" class="author-batch">PRO</a>
                            </div>
                            <div class="views-likes d-flex align-items-center">
                                <div class="likes d-flex align-items-center">
                                    <a href="#"><i class="bi bi-heart-fill"></i></a>
                                    <span>70</span>
                                </div>
                                <div class="views d-flex align-items-center">
                                    <i class="bi bi-eye"></i>
                                    <span>8.5k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-1">
                        <figure class="w-100 product-thumb">
                            <img src="images/product-1.png" alt="product-2">
                        </figure>
                        <div class="author-views-wrapper d-flex justify-content-between align-items-center">
                            <div class="author d-flex align-items-center">
                                <figure class="author-img">
                                    <img src="images/author-1.png" alt="author-1">
                                </figure>
                                <h6 class="m-0 author-name">Zouri Miminoshvili</h6>
                                <a href="#" class="author-batch">PRO</a>
                            </div>
                            <div class="views-likes d-flex align-items-center">
                                <div class="likes d-flex align-items-center">
                                    <a href="#"><i class="bi bi-heart-fill"></i></a>
                                    <span>70</span>
                                </div>
                                <div class="views d-flex align-items-center">
                                    <i class="bi bi-eye"></i>
                                    <span>8.5k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-1">
                        <figure class="w-100 product-thumb">
                            <img src="images/product-2.png" alt="product-2">
                        </figure>
                        <div class="author-views-wrapper d-flex justify-content-between align-items-center">
                            <div class="author d-flex align-items-center">
                                <figure class="author-img">
                                    <img src="images/author-1.png" alt="author-1">
                                </figure>
                                <h6 class="m-0 author-name">Zouri Miminoshvili</h6>
                                <a href="#" class="author-batch">PRO</a>
                            </div>
                            <div class="views-likes d-flex align-items-center">
                                <div class="likes d-flex align-items-center">
                                    <a href="#"><i class="bi bi-heart-fill"></i></a>
                                    <span>70</span>
                                </div>
                                <div class="views d-flex align-items-center">
                                    <i class="bi bi-eye"></i>
                                    <span>8.5k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-1">
                        <figure class="w-100 product-thumb">
                            <img src="images/product-1.png" alt="product-2">
                        </figure>
                        <div class="author-views-wrapper d-flex justify-content-between align-items-center">
                            <div class="author d-flex align-items-center">
                                <figure class="author-img">
                                    <img src="images/author-1.png" alt="author-1">
                                </figure>
                                <h6 class="m-0 author-name">Zouri Miminoshvili</h6>
                                <a href="#" class="author-batch">PRO</a>
                            </div>
                            <div class="views-likes d-flex align-items-center">
                                <div class="likes d-flex align-items-center">
                                    <a href="#"><i class="bi bi-heart-fill"></i></a>
                                    <span>70</span>
                                </div>
                                <div class="views d-flex align-items-center">
                                    <i class="bi bi-eye"></i>
                                    <span>8.5k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-1">
                        <figure class="w-100 product-thumb">
                            <img src="images/product-2.png" alt="product-2">
                        </figure>
                        <div class="author-views-wrapper d-flex justify-content-between align-items-center">
                            <div class="author d-flex align-items-center">
                                <figure class="author-img">
                                    <img src="images/author-1.png" alt="author-1">
                                </figure>
                                <h6 class="m-0 author-name">Zouri Miminoshvili</h6>
                                <a href="#" class="author-batch">PRO</a>
                            </div>
                            <div class="views-likes d-flex align-items-center">
                                <div class="likes d-flex align-items-center">
                                    <a href="#"><i class="bi bi-heart-fill"></i></a>
                                    <span>70</span>
                                </div>
                                <div class="views d-flex align-items-center">
                                    <i class="bi bi-eye"></i>
                                    <span>8.5k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-1">
                        <figure class="w-100 product-thumb">
                            <img src="images/product-1.png" alt="product-2">
                        </figure>
                        <div class="author-views-wrapper d-flex justify-content-between align-items-center">
                            <div class="author d-flex align-items-center">
                                <figure class="author-img">
                                    <img src="images/author-1.png" alt="author-1">
                                </figure>
                                <h6 class="m-0 author-name">Zouri Miminoshvili</h6>
                                <a href="#" class="author-batch">PRO</a>
                            </div>
                            <div class="views-likes d-flex align-items-center">
                                <div class="likes d-flex align-items-center">
                                    <a href="#"><i class="bi bi-heart-fill"></i></a>
                                    <span>70</span>
                                </div>
                                <div class="views d-flex align-items-center">
                                    <i class="bi bi-eye"></i>
                                    <span>8.5k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-1">
                        <figure class="w-100 product-thumb">
                            <img src="images/product-2.png" alt="product-2">
                        </figure>
                        <div class="author-views-wrapper d-flex justify-content-between align-items-center">
                            <div class="author d-flex align-items-center">
                                <figure class="author-img">
                                    <img src="images/author-1.png" alt="author-1">
                                </figure>
                                <h6 class="m-0 author-name">Zouri Miminoshvili</h6>
                                <a href="#" class="author-batch">PRO</a>
                            </div>
                            <div class="views-likes d-flex align-items-center">
                                <div class="likes d-flex align-items-center">
                                    <a href="#"><i class="bi bi-heart-fill"></i></a>
                                    <span>70</span>
                                </div>
                                <div class="views d-flex align-items-center">
                                    <i class="bi bi-eye"></i>
                                    <span>8.5k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-1">
                        <figure class="w-100 product-thumb">
                            <img src="images/product-1.png" alt="product-2">
                        </figure>
                        <div class="author-views-wrapper d-flex justify-content-between align-items-center">
                            <div class="author d-flex align-items-center">
                                <figure class="author-img">
                                    <img src="images/author-1.png" alt="author-1">
                                </figure>
                                <h6 class="m-0 author-name">Zouri Miminoshvili</h6>
                                <a href="#" class="author-batch">PRO</a>
                            </div>
                            <div class="views-likes d-flex align-items-center">
                                <div class="likes d-flex align-items-center">
                                    <a href="#"><i class="bi bi-heart-fill"></i></a>
                                    <span>70</span>
                                </div>
                                <div class="views d-flex align-items-center">
                                    <i class="bi bi-eye"></i>
                                    <span>8.5k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-1">
                        <figure class="w-100 product-thumb">
                            <img src="images/product-2.png" alt="product-2">
                        </figure>
                        <div class="author-views-wrapper d-flex justify-content-between align-items-center">
                            <div class="author d-flex align-items-center">
                                <figure class="author-img">
                                    <img src="images/author-1.png" alt="author-1">
                                </figure>
                                <h6 class="m-0 author-name">Zouri Miminoshvili</h6>
                                <a href="#" class="author-batch">PRO</a>
                            </div>
                            <div class="views-likes d-flex align-items-center">
                                <div class="likes d-flex align-items-center">
                                    <a href="#"><i class="bi bi-heart-fill"></i></a>
                                    <span>70</span>
                                </div>
                                <div class="views d-flex align-items-center">
                                    <i class="bi bi-eye"></i>
                                    <span>8.5k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-1">
                        <figure class="w-100 product-thumb">
                            <img src="images/product-1.png" alt="product-2">
                        </figure>
                        <div class="author-views-wrapper d-flex justify-content-between align-items-center">
                            <div class="author d-flex align-items-center">
                                <figure class="author-img">
                                    <img src="images/author-1.png" alt="author-1">
                                </figure>
                                <h6 class="m-0 author-name">Zouri Miminoshvili</h6>
                                <a href="#" class="author-batch">PRO</a>
                            </div>
                            <div class="views-likes d-flex align-items-center">
                                <div class="likes d-flex align-items-center">
                                    <a href="#"><i class="bi bi-heart-fill"></i></a>
                                    <span>70</span>
                                </div>
                                <div class="views d-flex align-items-center">
                                    <i class="bi bi-eye"></i>
                                    <span>8.5k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-1">
                        <figure class="w-100 product-thumb">
                            <img src="images/product-2.png" alt="product-2">
                        </figure>
                        <div class="author-views-wrapper d-flex justify-content-between align-items-center">
                            <div class="author d-flex align-items-center">
                                <figure class="author-img">
                                    <img src="images/author-1.png" alt="author-1">
                                </figure>
                                <h6 class="m-0 author-name">Zouri Miminoshvili</h6>
                                <a href="#" class="author-batch">PRO</a>
                            </div>
                            <div class="views-likes d-flex align-items-center">
                                <div class="likes d-flex align-items-center">
                                    <a href="#"><i class="bi bi-heart-fill"></i></a>
                                    <span>70</span>
                                </div>
                                <div class="views d-flex align-items-center">
                                    <i class="bi bi-eye"></i>
                                    <span>8.5k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="product-1">
                        <figure class="w-100 product-thumb">
                            <img src="images/product-1.png" alt="product-2">
                        </figure>
                        <div class="author-views-wrapper d-flex justify-content-between align-items-center">
                            <div class="author d-flex align-items-center">
                                <figure class="author-img">
                                    <img src="images/author-1.png" alt="author-1">
                                </figure>
                                <h6 class="m-0 author-name">Zouri Miminoshvili</h6>
                                <a href="#" class="author-batch">PRO</a>
                            </div>
                            <div class="views-likes d-flex align-items-center">
                                <div class="likes d-flex align-items-center">
                                    <a href="#"><i class="bi bi-heart-fill"></i></a>
                                    <span>70</span>
                                </div>
                                <div class="views d-flex align-items-center">
                                    <i class="bi bi-eye"></i>
                                    <span>8.5k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="show-more-wrapper d-flex justify-content-center align-items-center flex-column flex-sm-row">
            <a href="#" class="btn-primary">Sign up to continue</a>
            <a href="#" class="btn-secondary">or sign in</a>
        </div>
    </div>
</section>
<!-- top-banner -->
<?php include('inc/footer.php'); ?>