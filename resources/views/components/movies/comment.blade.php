<section class="content">
    <div class="content__head">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- content title -->
                    <h2 class="content__title">Discover</h2>
                    <!-- end content title -->

                    <!-- content tabs nav -->
                    <ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2"
                                aria-selected="false">Reviews</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3"
                                aria-selected="false">Photos</a>
                        </li>
                    </ul>
                    <!-- end content tabs nav -->

                    <!-- content mobile tabs nav -->
                    <div class="content__mobile-tabs" id="content__mobile-tabs">
                        <div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <input type="button" value="Comments">
                            <span></span>
                        </div>

                        <div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2"
                                        role="tab" aria-controls="tab-2" aria-selected="false">Reviews</a></li>
                                <li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3"
                                        role="tab" aria-controls="tab-3" aria-selected="false">Photos</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end content mobile tabs nav -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 col-xl-8">
                <!-- content tabs -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
                        <div class="row">
                            <!-- reviews -->
                            <div class="col-12">
                                <div class="reviews">
                                    <ul class="reviews__list">
                                        <li class="reviews__item">
                                            <div class="reviews__autor">
                                                <img class="reviews__avatar" src="/assets/img/user.png" alt="">
                                                <span class="reviews__name">John Doe</span>
                                                <span class="reviews__time">24.08.2018, 10:53</span>

                                                <span class="reviews__rating"><i
                                                        class="icon ion-ios-star"></i>8.4</span>
                                            </div>
                                            <p class="reviews__text">There are many variations of passages of Lorem
                                                Ipsum available, but the majority have suffered alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                        </li>

                                        <li class="reviews__item">
                                            <div class="reviews__autor">
                                                <img class="reviews__avatar" src="/assets/img/user.png" alt="">
                                                <span class="reviews__name">John Doe</span>
                                                <span class="reviews__time">24.08.2018, 10:53</span>

                                                <span class="reviews__rating"><i
                                                        class="icon ion-ios-star"></i>9.0</span>
                                            </div>
                                            <p class="reviews__text">There are many variations of passages of Lorem
                                                Ipsum available, but the majority have suffered alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                        </li>

                                        <li class="reviews__item">
                                            <div class="reviews__autor">
                                                <img class="reviews__avatar" src="/assets/img/user.png" alt="">
                                                <span class="reviews__name">John Doe</span>
                                                <span class="reviews__time">24.08.2018, 10:53</span>

                                                <span class="reviews__rating"><i
                                                        class="icon ion-ios-star"></i>7.5</span>
                                            </div>
                                            <p class="reviews__text">There are many variations of passages of Lorem
                                                Ipsum available, but the majority have suffered alteration in some form,
                                                by injected humour, or randomised words which don't look even slightly
                                                believable. If you are going to use a passage of Lorem Ipsum, you need
                                                to be sure there isn't anything embarrassing hidden in the middle of
                                                text.</p>
                                        </li>
                                    </ul>

                                    @if (1)
                                    <form action="#" class="form">
                                        <textarea class="form__textarea" placeholder="Review"></textarea>
                                        <div class="form__slider">
                                            <div class="form__slider-rating" id="slider__rating"></div>
                                            <div class="form__slider-value" id="form__slider-value"></div>
                                        </div>
                                        <button type="button" class="form__btn">Send</button>
                                    </form>
                                    @else
                                    <h3 style="color:white;margin:4rem 0;text-align:center">
                                        Please &nbsp; <a href="/signin">Sign in</a>&nbsp; to review
                                    </h3>
                                    @endif
                                </div>
                            </div>
                            <!-- end reviews -->
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
                        <!-- project gallery -->
                        <div class="gallery" itemscope>
                            <div class="row">
                                <!-- gallery item -->
                                <figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
                                    <a href="/assets/img/gallery/project-1.jpg" itemprop="contentUrl"
                                        data-size="1920x1280">
                                        <img src="/assets/img/gallery/project-1.jpg" itemprop="thumbnail"
                                            alt="Image description" />
                                    </a>
                                    <figcaption itemprop="caption description">Some image caption 1</figcaption>
                                </figure>
                                <!-- end gallery item -->

                                <!-- gallery item -->
                                <figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
                                    <a href="/assets/img/gallery/project-2.jpg" itemprop="contentUrl"
                                        data-size="1920x1280">
                                        <img src="/assets/img/gallery/project-2.jpg" itemprop="thumbnail"
                                            alt="Image description" />
                                    </a>
                                    <figcaption itemprop="caption description">Some image caption 2</figcaption>
                                </figure>
                                <!-- end gallery item -->

                                <!-- gallery item -->
                                <figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
                                    <a href="/assets/img/gallery/project-3.jpg" itemprop="contentUrl"
                                        data-size="1920x1280">
                                        <img src="/assets/img/gallery/project-3.jpg" itemprop="thumbnail"
                                            alt="Image description" />
                                    </a>
                                    <figcaption itemprop="caption description">Some image caption 3</figcaption>
                                </figure>
                                <!-- end gallery item -->

                                <!-- gallery item -->
                                <figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
                                    <a href="/assets/img/gallery/project-4.jpg" itemprop="contentUrl"
                                        data-size="1920x1280">
                                        <img src="/assets/img/gallery/project-4.jpg" itemprop="thumbnail"
                                            alt="Image description" />
                                    </a>
                                    <figcaption itemprop="caption description">Some image caption 4</figcaption>
                                </figure>
                                <!-- end gallery item -->

                                <!-- gallery item -->
                                <figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
                                    <a href="/assets/img/gallery/project-5.jpg" itemprop="contentUrl"
                                        data-size="1920x1280">
                                        <img src="/assets/img/gallery/project-5.jpg" itemprop="thumbnail"
                                            alt="Image description" />
                                    </a>
                                    <figcaption itemprop="caption description">Some image caption 5</figcaption>
                                </figure>
                                <!-- end gallery item -->

                                <!-- gallery item -->
                                <figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
                                    <a href="/assets/img/gallery/project-6.jpg" itemprop="contentUrl"
                                        data-size="1920x1280">
                                        <img src="/assets/img/gallery/project-6.jpg" itemprop="thumbnail"
                                            alt="Image description" />
                                    </a>
                                    <figcaption itemprop="caption description">Some image caption 6</figcaption>
                                </figure>
                                <!-- end gallery item -->
                            </div>
                        </div>
                        <!-- end project gallery -->
                    </div>
                </div>
                <!-- end content tabs -->
            </div>

            <!-- sidebar -->
            <x-movies.you-may-also-like />
            <!-- end sidebar -->
        </div>
    </div>
</section>
