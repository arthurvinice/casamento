<!-- Real customers reviews: Start -->
<section id="landingReviews" class="section-py landing-reviews pb-0" data-aos="fade-up"
    style="background-color: #fcd5ce; border-radius: 0 !important">
    <!-- What people say slider: Start -->
    <div class="container">
        <div class="row align-items-center gx-0 gy-4 g-lg-5 mb-5 pb-md-5">
            <div class="col-md-6 col-lg-5 col-xl-3">
                <div class="mb-4">
                    <!-- <span class="badge bg-label-primary">Comentários</span> -->
                </div>
                <h4 class="mb-1">
                    <span class="position-relative fw-extrabold z-1"">Mural de recados
                        <img src="../../assets/img/front-pages/icons/section-title-icon.png" alt="laptop charging"
                            class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
                    </span>
                </h4>
                <p class="mb-5 mb-md-12">
                    Comentários de amigos e<br class="d-none d-xl-block" />
                    familiares para os noivos.
                </p>
                <div class="landing-reviews-btns">
                    <button id="reviews-previous-btn" class="btn btn-icon btn-label-primary reviews-btn me-3"
                        type="button">
                        <i class="icon-base ti tabler-chevron-left icon-md scaleX-n1-rtl"></i>
                    </button>
                    <button id="reviews-next-btn" class="btn btn-icon btn-label-primary reviews-btn" type="button">
                        <i class="icon-base ti tabler-chevron-right icon-md scaleX-n1-rtl"></i>
                    </button>
                </div>
            </div>
            <div class="col-md-6 col-lg-7 col-xl-9">
                <div class="swiper-reviews-carousel overflow-hidden">
                    <div class="swiper" id="swiper-reviews">
                        <div class="swiper-wrapper">
                            @foreach ($peoples as $people)
                                <div class="swiper-slide">
                                    <div class="card h-100">
                                        <div
                                            class="card-body text-body d-flex flex-column justify-content-between h-100">
                                            <p>{{ $people->message }}</p>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <h6 class="mb-0">{{ $people->name }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- What people say slider: End -->
    <hr class="m-0 mt-6 mt-md-12" />
</section>
<!-- Real customers reviews: End -->
