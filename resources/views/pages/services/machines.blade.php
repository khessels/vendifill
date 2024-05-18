@extends('layouts.guest')
@section('content')
    <!-- start hero -->
    <div
        id="hero"
        class="hero jarallax"
        data-speed="0.6"
        data-img-position="50% 50%"
        style="background-image: url(/img/hero_img/2.jpg);background-color: #f18226">

        <div class="hero__inner">
            <div class="container">
                <div class="row">
                    <div class="col-11 col-sm-12">
                        <h4 class="hero__subtitle">VendiFill</h4>
                        <h1 class="hero__title">Shop Catalog</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero -->

    <!-- start main -->
    <main role="main">
        <!-- Common styles
        ================================================== -->
        <link rel="stylesheet" href="/css/style.min.css" type="text/css">

        <!-- start section -->
        <section class="section section--gray-bg">
            <div class="container">
                <!-- start goods catalog -->
                <div class="goods-catalog">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-3">

                            <div class="__bg"></div>

                            <!-- start sidebar -->
                            <aside class="sidebar goods-filter">
                                <span class="goods-filter-btn-close js-toggle-filter"><i class="fontello-cancel"></i></span>

                                <div class="goods-filter__inner">
                                    <form action="#">
                                        <!-- start widget -->
                                        <div class="widget widget--categories">
                                            <h4 class="widget-title">Category</h4>

                                            <ul class="list">
                                                <li class="list__item">
                                                    <a class="list__item__link" href="javascript:void(0)">Combo Machine</a>
                                                    <i class="list__item__arrow js-toggle-submenu"></i>

                                                    <ul class="list__submenu">
                                                        <li class="list__item">
                                                            <a class="list__item__link active" href="javascript:void(0)">Vending Machine</a>
                                                        </li>

                                                        <li class="list__item">
                                                            <a class="list__item__link" href="javascript:void(0)">Ingredients</a>
                                                        </li>

                                                        <li class="list__item">
                                                            <a class="list__item__link" href="javascript:void(0)">Parts for Machine</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="list__item">
                                                    <a class="list__item__link" href="javascript:void(0)">Coffe Machine</a>
                                                    <i class="list__item__arrow js-toggle-submenu"></i>

                                                    <ul class="list__submenu">
                                                        <li class="list__item">
                                                            <a class="list__item__link" href="javascript:void(0)">Vending Machine</a>
                                                        </li>

                                                        <li class="list__item">
                                                            <a class="list__item__link" href="javascript:void(0)">Ingredients</a>
                                                        </li>

                                                        <li class="list__item">
                                                            <a class="list__item__link" href="javascript:void(0)">Parts for Machine</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="list__item">
                                                    <a class="list__item__link" href="javascript:void(0)">Snack Machine</a>
                                                    <i class="list__item__arrow js-toggle-submenu"></i>

                                                    <ul class="list__submenu">
                                                        <li class="list__item">
                                                            <a class="list__item__link" href="javascript:void(0)">Vending Machine</a>
                                                        </li>

                                                        <li class="list__item">
                                                            <a class="list__item__link" href="javascript:void(0)">Ingredients</a>
                                                        </li>

                                                        <li class="list__item">
                                                            <a class="list__item__link" href="javascript:void(0)">Parts for Machine</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="list__item">
                                                    <a class="list__item__link" href="javascript:void(0)">Healthy Snacks</a>
                                                    <i class="list__item__arrow js-toggle-submenu"></i>

                                                    <ul class="list__submenu">
                                                        <li class="list__item">
                                                            <a class="list__item__link" href="javascript:void(0)">Vending Machine</a>
                                                        </li>

                                                        <li class="list__item">
                                                            <a class="list__item__link" href="javascript:void(0)">Ingredients</a>
                                                        </li>

                                                        <li class="list__item">
                                                            <a class="list__item__link" href="javascript:void(0)">Parts for Machine</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="list__item">
                                                    <a class="list__item__link" href="javascript:void(0)">Eco Vending</a>
                                                    <i class="list__item__arrow js-toggle-submenu"></i>

                                                    <ul class="list__submenu">
                                                        <li class="list__item">
                                                            <a class="list__item__link" href="javascript:void(0)">Vending Machine</a>
                                                        </li>

                                                        <li class="list__item">
                                                            <a class="list__item__link" href="javascript:void(0)">Ingredients</a>
                                                        </li>

                                                        <li class="list__item">
                                                            <a class="list__item__link" href="javascript:void(0)">Parts for Machine</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="list__item">
                                                    <a class="list__item__link" href="javascript:void(0)">Ingredients</a>
                                                    <i class="list__item__arrow js-toggle-submenu"></i>

                                                    <ul class="list__submenu">
                                                        <li class="list__item">
                                                            <a class="list__item__link" href="javascript:void(0)">Vending Machine</a>
                                                        </li>

                                                        <li class="list__item">
                                                            <a class="list__item__link" href="javascript:void(0)">Ingredients</a>
                                                        </li>

                                                        <li class="list__item">
                                                            <a class="list__item__link" href="javascript:void(0)">Parts for Machine</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end widget -->

                                        <!-- start widget -->
                                        <div class="widget widget--price">
                                            <h4 class="widget-title">Price</h4>

                                            <div>
                                                <input type="text" class="js-range-slider" name="my_range" value=""
                                                       data-type="double"
                                                       data-min="0"
                                                       data-max="1000"
                                                       data-from="200"
                                                       data-to="600"
                                                       data-grid="true"
                                                       data-skin="round"
                                                       data-prefix="$"
                                                       data-hide-min-max="true"
                                                />

                                                <input class="range-slider-min-value" type="hidden" name="min-value">
                                                <input class="range-slider-max-value" type="hidden" name="max-value">
                                            </div>
                                        </div>
                                        <!-- end widget -->

                                        <!-- start widget -->
                                        <div class="widget widget--brands">
                                            <h4 class="widget-title">Brands</h4>

                                            <ul>
                                                <li>
                                                    <label class="checkfield">
                                                        <input type="checkbox" />
                                                        <i></i>
                                                        Combo Max
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="checkfield">
                                                        <input type="checkbox" />
                                                        <i></i>
                                                        VendiFill
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="checkfield">
                                                        <input type="checkbox" />
                                                        <i></i>
                                                        Siesla Ven
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="checkfield">
                                                        <input type="checkbox" />
                                                        <i></i>
                                                        Venselta
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="checkfield">
                                                        <input type="checkbox" />
                                                        <i></i>
                                                        Cooffedan
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end widget -->

                                        <!-- start widget -->
                                        <div class="widget widget--colors">
                                            <h4 class="widget-title">Colors</h4>

                                            <ul>
                                                <li>
                                                    <label class="color-label">
                                                        <input type="checkbox" value="color 1" checked/>

                                                        <span style="background-color: #f95a3f"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="color-label">
                                                        <input type="checkbox" value="color 2" />

                                                        <span style="background-color: #3f9ff9"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="color-label">
                                                        <input type="checkbox" value="color 3" />

                                                        <span style="background-color: #21e280"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="color-label">
                                                        <input type="checkbox" value="color 4" />

                                                        <span style="background-color: #ffa619"></span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end widget -->

                                        <!-- start widget -->
                                        <div class="widget widget--characteristics">
                                            <h4 class="widget-title">Other Characteristics</h4>

                                            <ul>
                                                <li>
                                                    <label class="radiofield">
                                                        <input type="radio" name="group1" checked/>
                                                        <i></i>
                                                        15 Kw
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radiofield">
                                                        <input type="radio" name="group1" />
                                                        <i></i>
                                                        25 Kw
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radiofield">
                                                        <input type="radio" name="group1" />
                                                        <i></i>
                                                        30 Kw
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end widget -->

                                        <!-- start widget -->
                                        <div class="widget widget--tags">
                                            <h4 class="widget-title">Tags</h4>

                                            <div class="tags-list">
                                                <ul class="tags-list__list">
                                                    <li class="tags-list__item"><a class="tags-list__link" href="javascript:void(0)">Vending</a></li>
                                                    <li class="tags-list__item"><a class="tags-list__link" href="javascript:void(0)">Snack Machine</a></li>
                                                    <li class="tags-list__item"><a class="tags-list__link active" href="javascript:void(0)">Ingredients</a></li>
                                                    <li class="tags-list__item"><a class="tags-list__link" href="javascript:void(0)">Coffe Rent</a></li>
                                                    <li class="tags-list__item"><a class="tags-list__link" href="javascript:void(0)">Vending Shop</a></li>
                                                    <li class="tags-list__item"><a class="tags-list__link" href="javascript:void(0)">Business</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end widget -->

                                        <div class="spacer py-5 py-lg-6"></div>

                                        <button class="custom-btn custom-btn--big custom-btn--s3 wide" type="submit" role="button">Sort</button>
                                    </form>
                                </div>
                            </aside>
                            <!-- end sidebar -->

                        </div>

                        <div class="col-12 col-md-8 col-lg-9">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto">
                                    <span class="goods-filter-btn-open js-toggle-filter"><i class="fontello-filter"></i>Filter</span>
                                </div>

                                <div class="col-auto">
                                    <!-- start ordering -->
                                    <form class="ordering" action="">
                                        <div class="d-table">
                                            <div class="d-table-cell align-middle">
                                                <span>Sort by:</span>
                                            </div>

                                            <div class="d-table-cell align-middle">
                                                <select class="js-select">
                                                    <option value="1">New</option>
                                                    <option value="2">Sale</option>
                                                    <option value="3">Hot</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- end ordering -->
                                </div>
                            </div>

                            <div class="spacer py-3"></div>

                            <!-- start goods -->
                            <div class="goods">
                                <div class="__inner">
                                    <div class="row">
                                        <!-- start item -->
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="__item">
                                                <figure class="__image __image--shadow __image--bg-white">
                                                    <img class="lazy" src="/img/blank.gif" data-src="/img/goods_img/1.jpg" alt="demo" />

                                                    <div class="__btn">
                                                        <a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="javascript:void(0)">Add to Cart</a>
                                                    </div>
                                                </figure>

                                                <div class="__content">
                                                    <div class="product-price">
                                                        <span class="product-price__item product-price__item--new">1 500$</span>
                                                        <span class="product-price__item product-price__item--old">2200$</span>
                                                    </div>

                                                    <h4 class="__title"><a href="javascript:void(0)">Combo Machine TB 100</a></h4>
                                                </div>

                                                <span class="product-label product-label--discount">Sale</span>
                                            </div>
                                        </div>
                                        <!-- end item -->

                                        <!-- start item -->
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="__item">
                                                <figure class="__image __image--shadow __image--bg-white">
                                                    <img class="lazy" src="/img/blank.gif" data-src="/img/goods_img/2.jpg" alt="demo" />

                                                    <div class="__btn">
                                                        <a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="javascript:void(0)">Add to Cart</a>
                                                    </div>
                                                </figure>

                                                <div class="__content">
                                                    <div class="product-price">
                                                        <span class="product-price__item product-price__item--new">2 250$</span>
                                                    </div>

                                                    <h4 class="__title"><a href="javascript:void(0)">Snack Machine Claus 1</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end item -->

                                        <!-- start item -->
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="__item">
                                                <figure class="__image __image--shadow __image--bg-white">
                                                    <img class="lazy" src="/img/blank.gif" data-src="/img/goods_img/3.jpg" alt="demo" />

                                                    <div class="__btn">
                                                        <a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="javascript:void(0)">Add to Cart</a>
                                                    </div>
                                                </figure>

                                                <div class="__content">
                                                    <div class="product-price">
                                                        <span class="product-price__item product-price__item--new">1 150$</span>
                                                    </div>

                                                    <h4 class="__title"><a href="javascript:void(0)">Coffe Machine CF96</a></h4>
                                                </div>

                                                <span class="product-label product-label--new">New</span>
                                            </div>
                                        </div>
                                        <!-- end item -->

                                        <!-- start item -->
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="__item">
                                                <figure class="__image __image--shadow __image--bg-white">
                                                    <img class="lazy" src="/img/blank.gif" data-src="/img/goods_img/4.jpg" alt="demo" />

                                                    <div class="__btn">
                                                        <a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="javascript:void(0)">Add to Cart</a>
                                                    </div>
                                                </figure>

                                                <div class="__content">
                                                    <div class="product-price">
                                                        <span class="product-price__item product-price__item--new">3 500$</span>
                                                        <span class="product-price__item product-price__item--old">4200$</span>
                                                    </div>

                                                    <h4 class="__title"><a href="javascript:void(0)">Water Machine WM 2500</a></h4>
                                                </div>

                                                <span class="product-label product-label--discount">Sale</span>
                                            </div>
                                        </div>
                                        <!-- end item -->

                                        <!-- start item -->
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="__item">
                                                <figure class="__image __image--shadow __image--bg-white">
                                                    <img class="lazy" src="/img/blank.gif" data-src="/img/goods_img/2.jpg" alt="demo" />

                                                    <div class="__btn">
                                                        <a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="javascript:void(0)">Add to Cart</a>
                                                    </div>
                                                </figure>

                                                <div class="__content">
                                                    <div class="product-price">
                                                        <span class="product-price__item product-price__item--new">2 250$</span>
                                                    </div>

                                                    <h4 class="__title"><a href="javascript:void(0)">Snack Machine Claus 1</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end item -->

                                        <!-- start item -->
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="__item">
                                                <figure class="__image __image--shadow __image--bg-white">
                                                    <img class="lazy" src="/img/blank.gif" data-src="/img/goods_img/3.jpg" alt="demo" />

                                                    <div class="__btn">
                                                        <a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="javascript:void(0)">Add to Cart</a>
                                                    </div>
                                                </figure>

                                                <div class="__content">
                                                    <div class="product-price">
                                                        <span class="product-price__item product-price__item--new">1 150$</span>
                                                    </div>

                                                    <h4 class="__title"><a href="javascript:void(0)">Coffe Machine CF96</a></h4>
                                                </div>

                                                <span class="product-label product-label--new">New</span>
                                            </div>
                                        </div>
                                        <!-- end item -->

                                        <!-- start item -->
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="__item">
                                                <figure class="__image __image--shadow __image--bg-white">
                                                    <img class="lazy" src="/img/blank.gif" data-src="/img/goods_img/4.jpg" alt="demo" />

                                                    <div class="__btn">
                                                        <a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="javascript:void(0)">Add to Cart</a>
                                                    </div>
                                                </figure>

                                                <div class="__content">
                                                    <div class="product-price">
                                                        <span class="product-price__item product-price__item--new">3 500$</span>
                                                        <span class="product-price__item product-price__item--old">4200$</span>
                                                    </div>

                                                    <h4 class="__title"><a href="javascript:void(0)">Water Machine WM 2500</a></h4>
                                                </div>

                                                <span class="product-label product-label--discount">Sale</span>
                                            </div>
                                        </div>
                                        <!-- end item -->

                                        <!-- start item -->
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="__item">
                                                <figure class="__image __image--shadow __image--bg-white">
                                                    <img class="lazy" src="/img/blank.gif" data-src="/img/goods_img/2.jpg" alt="demo" />

                                                    <div class="__btn">
                                                        <a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="javascript:void(0)">Add to Cart</a>
                                                    </div>
                                                </figure>

                                                <div class="__content">
                                                    <div class="product-price">
                                                        <span class="product-price__item product-price__item--new">2 250$</span>
                                                    </div>

                                                    <h4 class="__title"><a href="javascript:void(0)">Snack Machine Claus 1</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end item -->

                                        <!-- start item -->
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="__item">
                                                <figure class="__image __image--shadow __image--bg-white">
                                                    <img class="lazy" src="/img/blank.gif" data-src="/img/goods_img/3.jpg" alt="demo" />

                                                    <div class="__btn">
                                                        <a class="custom-btn custom-btn--medium custom-btn--s3 wide" href="javascript:void(0)">Add to Cart</a>
                                                    </div>
                                                </figure>

                                                <div class="__content">
                                                    <div class="product-price">
                                                        <span class="product-price__item product-price__item--new">1 150$</span>
                                                    </div>

                                                    <h4 class="__title"><a href="javascript:void(0)">Coffe Machine CF96</a></h4>
                                                </div>

                                                <span class="product-label product-label--new">New</span>
                                            </div>
                                        </div>
                                        <!-- end item -->
                                    </div>
                                </div>
                            </div>
                            <!-- end goods -->

                            <div class="spacer py-5 py-lg-7"></div>

                            <!-- start pagination -->
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center justify-content-sm-end">
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0)">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                </ul>
                            </nav>
                            <!-- end pagination -->

                        </div>
                    </div>
                </div>
                <!-- end goods catalog -->
            </div>
        </section>
        <!-- end section -->
    </main>
    <!-- end main -->

@stop
