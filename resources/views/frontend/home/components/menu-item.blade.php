<section class="fp__menu mt_95 xs_mt_65">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-duration="1s">
            <div class="col-md-8 col-lg-7 col-xl-6 m-auto text-center">
                <div class="fp__section_heading mb_45">
                    <h4>Menu Pilihan</h4>
                    <h2>Hidangan Lezat Favorit Kami</h2>
                    <span>
                        <img src="images/heading_shapes.png" alt="shapes" class="img-fluid w-100">
                    </span>
                    <p>Jelajahi berbagai pilihan menu terbaik yang disiapkan dengan penuh cinta dan bahan berkualitas
                        tinggi.</p>
                </div>
            </div>
        </div>

        <div class="row wow fadeInUp" data-wow-duration="1s">
            <div class="col-12">
                <div class="menu_filter d-flex flex-wrap justify-content-center">
                    <button class=" active" data-filter="*">semua menu</button>
                    <button data-filter=".burger">makanan</button>
                    <button data-filter=".chicken">minuman</button>
                    <button data-filter=".pizza">snack</button>
                    <button data-filter=".dresserts">dessert</button>
                </div>
            </div>
        </div>

        <div class="row grid">
            <div class="col-xl-3 col-sm-6 col-lg-4 burger pizza wow fadeInUp" data-wow-duration="1s">
                <div class="fp__menu_item">
                    <div class="fp__menu_item_img">
                        <img src="{{ asset('frontend/images/cheesey mushroom chicken.png') }}" alt="menu" class="img-fluid w-100">
                        <a class="category" href="#">Chicken</a>
                    </div>
                    <div class="fp__menu_item_text">
                        <p class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span>2</span>
                        </p>
                        <a class="title" href="menu_details.html">Cheesey Mushroom Chicken</a>
                        <h5 class="price">Rp. 40k</h5>
                        <ul class="d-flex flex-wrap justify-content-center">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                        class="fas fa-shopping-basket"></i></a></li>
                            <li><a href="#"><i class="fal fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-eye"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-lg-4  chicken dresserts wow fadeInUp" data-wow-duration="1s">
                <div class="fp__menu_item">
                    <div class="fp__menu_item_img">
                        <img src="{{ asset('frontend/images/lamb.satay.png') }}" alt="menu" class="img-fluid w-100">
                        <a class="category" href="#">Satay</a>
                    </div>
                    <div class="fp__menu_item_text">
                        <p class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span>14</span>
                        </p>
                        <a class="title" href="menu_details.html">lamb satay</a>
                        <h5 class="price">Rp. 35k <del>50k</del></h5>
                        <ul class="d-flex flex-wrap justify-content-center">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                        class="fas fa-shopping-basket"></i></a></li>
                            <li><a href="#"><i class="fal fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-eye"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-lg-4  chicken dresserts wow fadeInUp" data-wow-duration="1s">
                <div class="fp__menu_item">
                    <div class="fp__menu_item_img">
                        <img src="{{ asset('frontend/images/fettuccine mushroom sauce.png') }}" alt="menu" class="img-fluid w-100">
                        <a class="category" href="#">Fettuccine</a>
                    </div>
                    <div class="fp__menu_item_text">
                        <p class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span>12</span>
                        </p>
                        <a class="title" href="menu_details.html">Fettuccine Mushroom Sauce</a>
                        <h5 class="price">Rp.35k</h5>
                        <ul class="d-flex flex-wrap justify-content-center">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                        class="fas fa-shopping-basket"></i></a></li>
                            <li><a href="#"><i class="fal fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-eye"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-lg-4  burger pizza wow fadeInUp" data-wow-duration="1s">
                <div class="fp__menu_item">
                    <div class="fp__menu_item_img">
                        <img src="{{ asset('frontend/images/bone marrow.png') }}" alt="menu" class="img-fluid w-100">
                        <a class="category" href="#">Tulang Sumsum</a>
                    </div>
                    <div class="fp__menu_item_text">
                        <p class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span>15</span>
                        </p>
                        <a class="title" href="menu_details.html">Bone Marrow</a>
                        <h5 class="price">Rp. 40k<del>Rp. 45k</del></h5>
                        <ul class="d-flex flex-wrap justify-content-center">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                        class="fas fa-shopping-basket"></i></a></li>
                            <li><a href="#"><i class="fal fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-eye"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-lg-4  chicken dresserts wow fadeInUp" data-wow-duration="1s">
                <div class="fp__menu_item">
                    <div class="fp__menu_item_img">
                        <img src="{{ asset('frontend/images/chilli.cheese.hotdog.png') }}" alt="menu" class="img-fluid w-100">
                        <a class="category" href="#">Hotdog</a>
                    </div>
                    <div class="fp__menu_item_text">
                        <p class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span>9</span>
                        </p>
                        <a class="title" href="menu_details.html">Chilli Cheese Hotdog</a>
                        <h5 class="price">Rp. 30k<del>Rp. 50K</del></h5>
                        <ul class="d-flex flex-wrap justify-content-center">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                        class="fas fa-shopping-basket"></i></a></li>
                            <li><a href="#"><i class="fal fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-eye"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-lg-4  burger pizza wow fadeInUp" data-wow-duration="1s">
                <div class="fp__menu_item">
                    <div class="fp__menu_item_img">
                        <img src="{{ asset('frontend/images/red gum striploin steak.png') }}" alt="menu" class="img-fluid w-100">
                        <a class="category" href="#">Striploin</a>
                    </div>
                    <div class="fp__menu_item_text">
                        <p class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span>11</span>
                        </p>
                        <a class="title" href="menu_details.html">Red Gum Striploin Steak</a>
                        <h5 class="price">Rp. 220k</h5>
                        <ul class="d-flex flex-wrap justify-content-center">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                        class="fas fa-shopping-basket"></i></a></li>
                            <li><a href="#"><i class="fal fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-eye"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-lg-4  chicken dresserts wow fadeInUp" data-wow-duration="1s">
                <div class="fp__menu_item">
                    <div class="fp__menu_item_img">
                        <img src="{{ asset('frontend/images/braga steak.png') }}" alt="menu" class="img-fluid w-100">
                        <a class="category" href="#">Steak</a>
                    </div>
                    <div class="fp__menu_item_text">
                        <p class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span>18</span>
                        </p>
                        <a class="title" href="menu_details.html">Braga Steak</a>
                        <h5 class="price">Rp. 100k</h5>
                        <ul class="d-flex flex-wrap justify-content-center">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                        class="fas fa-shopping-basket"></i></a></li>
                            <li><a href="#"><i class="fal fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-eye"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-lg-4  burger pizza wow fadeInUp" data-wow-duration="1s">
                <div class="fp__menu_item">
                    <div class="fp__menu_item_img">
                        <img src="{{ asset('frontend/images/cheese.burger.png') }}" alt="menu" class="img-fluid w-100">
                        <a class="category" href="#">Burger</a>
                    </div>
                    <div class="fp__menu_item_text">
                        <p class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span>20</span>
                        </p>
                        <a class="title" href="menu_details.html">Cheese Burger</a>
                        <h5 class="price">Rp. 25k<del>Rp. 45k</del></h5>
                        <ul class="d-flex flex-wrap justify-content-center">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal"><i
                                        class="fas fa-shopping-basket"></i></a></li>
                            <li><a href="#"><i class="fal fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-eye"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
