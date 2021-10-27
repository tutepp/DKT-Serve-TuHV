<!DOCTYPE html>
<html lang="en">
<head>
 @include('frontend.layout-frontend.meta.meta-head')
</head>
<body>
<!-- ======= Header ======= -->
@include('frontend.layout-frontend.nav-header')

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            @foreach($headBanners as $headBanner)
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h2 data-aos="fade-up" style="font-size: 24px;font-weight: 700;color: #012970;">{{$headBanner->title}}</h2>
                <h2 data-aos="fade-up" data-aos-delay="400" style="font-size: 18px">{!! $headBanner->description !!}</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>{{__('Tìm hiểu thêm')}}</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{$headBanner->image}}" class="img-fluid" alt="">
            </div>
            @endforeach
        </div>
    </div>

</section>
<!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>{{__('Chúng tôi là ai')}}</h3>
                        <h2>
                            {{$introBanner[0]->title}}
                        </h2>
                        <p>
                           {!! $introBanner[0]->description !!}
                        </p>
                        <div class="text-center text-lg-start">
                            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>{{__('Tìm hiểu thêm')}}</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{$introBanner[0]->image}}" class="img-fluid" alt="">
                </div>

            </div>
        </div>

    </section><!-- End About Section -->
    <!-- ======= Values Section ======= -->
    <section id="values" class="values">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p>{{__('Các mảng kinh doanh nổi bật')}}</p>
            </header>
            <div class="row">
                @foreach($bussinessBanners as $bussinessBanner)
                <div class="col-lg-3" >
                    <div class="box" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{$bussinessBanner->image}}" style="max-height: 180px" alt=""  >
                        <h3>{{$bussinessBanner->title}}</h3>
                        <p>{!! $bussinessBanner->content !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Values Section -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Nhân sự</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                        <div>
                            <span>2019</span>
                            <p>Thành lập từ 3/2019</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-headset" style="color: #15be56;"></i>
                        <div>
                            <span>4.0</span>
                            <p>Khoa học công nghệ</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people" style="color: #bb0852;"></i>
                        <div>
                            <span>1</span>
                            <p>Đối tác số 1 của Tiktok SEA</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>{{__('Môi trường làm việc của DKT E-COMMERCE ,.JSC')}}</p>
            </header>

            <div class="row">

                <div class="col-lg-6">
                    <img src="https://kenh14cdn.com/thumb_w/640/pr/2021/1620211202341-157-63-576-735-crop-1620211209784-63755835081735.jpg" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                    <div class="row align-self-center gy-4">
                    @foreach($enviromentBanners as $enviromentBanner)
                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>{{$enviromentBanner->title}}</h3>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div> <!-- / row -->
            <!-- Feature Tabs -->
            <div class="row feture-tabs" data-aos="fade-up">
                <div class="col-lg-6">
                    <h3>{{__('Sứ mệnh của chúng tôi')}}</h3>
                    <!-- Tabs -->
                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check2"></i>
                                <h4>{{__('Sứ mệnh của chúng tôi')}}</h4>
                            </div>
                            <p>Không ngừng nâng cao mọi chất lượng dịch vụ và sản phẩm để phục vụ khách hàng và đối tác, luôn luôn đặt ra những tiêu chuẩn mới hơn, cao hơn để hoàn thiện mọi hoạt động kinh doanh và các sản phẩm, dịch vụ đưa ra thị trường.</p>
                        </div><!-- End Tab 1 Content -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="" class="img-fluid" alt="">
                </div>
            </div><!-- End Feature Tabs -->
            <!-- Feature Icons -->
            <div class="row feature-icons" data-aos="fade-up">
                <h3>{{__('Tầm nhìn của DKT')}}</h3>

                <div class="row">

                    <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{asset('FlexStart/assets/img/LogoDKT-G-Black.png')}}" style="max-height: 200px" class="img-fluid p-4" alt="">
                    </div>

                    <div class="col-xl-8 d-flex content">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="ri-line-chart-line"></i>
                                <div>
                                    <h4>Dẫn đầu về Thương mại điện </h4>
                                    <p>Chúng tôi đang nỗ lực không ngừng từng ngày để trở thành công ty hàng đầu trong lĩnh vực Thương mại điện tử tại thị trường Đông Nam Á</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="ri-stack-line"></i>
                                <div>
                                    <h4>Khẳng định vị thế của bản thân trên thị trường quốc tế</h4>
                                    <p>Hướng tới mục tiêu thúc đẩy sự phát triển của lĩnh vực thương mại điện tử tại Việt Nam nói chung, và lĩnh vực thương mại điện tử xuyên biên giới nói riêng.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="ri-brush-4-line"></i>
                                <div>
                                    <h4>Doanh nghiệp Fulfillment hàng đầu</h4>
                                    <p>Với tiềm lực về dịch vụ thuê kho và nhân sự , DKT đang phấn đấu trở thành doanh nghiệp Fulfillment hàng đầu tại khu vực Châu Á</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="ri-magic-line"></i>
                                <div>
                                    <h4>Cầu nối vươn ra thế giới</h4>
                                    <p>Là cầu nối giữa nhà bán hàng và khách hàng trong và ngoài nước</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="ri-command-line"></i>
                                <div>
                                    <h4>Đơn giản hoá mở rộng kinh doanh</h4>
                                    <p>Đơn giản hóa các điều kiện đầu tư kinh doanh giảm chi phí, thủ tục cho doanh nghiệp</p>
                                </div>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                <i class="ri-radar-line"></i>
                                <div>
                                    <h4>Tối ưu hoá lợi nhuận cho doanh nghiệp</h4>
                                    <p>Lợi nhuận tăng cho doanh nghiệp</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Feature Icons -->
        </div>
    </section>
    <!-- End Features Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p>{{__('Dịch vụ của chúng tôi')}}</p>
            </header>
            <div class="row service swiper">
                <div class="swiper-wrapper">
{{--                    <div class="row gy-4">--}}
                @foreach($serviceBanners as $serviceBanner)
                <div class="col-lg-3 col-md-6 swiper-slide" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue ">
                        <i class="ri-discuss-line icon"></i>
                        <h3>{{$serviceBanner->title}}</h3>
                        <p>{!! $serviceBanner->content !!}</p>
                        <a href="#" class="read-more"><span>{{__('Xem thêm')}}</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                @endforeach
{{--            </div>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

{{--    <!-- ======= Services Section ======= -->--}}

<!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

        <div class="container" data-aos="fade-up">

            <header class="section-header">

                <p>{{__('Ban Lãnh Đạo')}}</p>
            </header>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">
                @foreach($managerBanners as $managerBanner)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>

                            <div class="profile mt-auto">
                                <img src="{{$managerBanner->image}}" class="testimonial-img" alt="">
                                <h3>{{$managerBanner->title}}</h3>
                                <h4>{!! $managerBanner->content !!}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

        <div class="container aos-init aos-animate" data-aos="fade-up">

            <header class="section-header">
                <p>{{__('Đối tác của chúng tôi')}}</p>
            </header>
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                </div>
                @foreach($partnerBanners as $partnerBanner)
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{$partnerBanner->image}}" style="max-height: 225px;max-width: 300px;" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>{{$partnerBanner->title}}</h4>

                            <p>{!! $partnerBanner->content !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>{{__('Tin tức')}}</h2>
                <p>{{__('Bài đăng gần đây')}}</p>
            </header>
            <div class="row recent-blog-posts-in swiper">
                <div class="swiper-wrapper">
                    @foreach($recentPosts as $recentPost)
                        <div class="col-lg-4 swiper-slide">
                            <div class="post-box">
                                <div class="post-img"><img src="{{$recentPost->image}}" class="img-fluid" alt="" style="width: 400px;height: 200px"></div>
                                <span class="post-date">{{$recentPost->created_at}}</span>
                                <h3 class="post-title">{{$recentPost->title}}</h3>
                                <a href="" class="readmore stretched-link mt-auto"><span>{{__('Tìm hiểu thêm')}}</span><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>{{__('Liên hệ')}}</h2>
                <p>{{__('Liên hệ với chúng tôi')}}</p>
            </header>
            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>{{__('Địa chỉ')}}</h3>
                                <p>A108 Adam Street,<br>New York, NY 535022</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>{{__('Số điện thoại')}}</h3>
                                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email</h3>
                                <p>info@example.com<br>contact@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>{{__('Giờ mở cửa')}}</h3>
                                <p>{{__('Thứ 2 - Thứ 6')}}<br>9:00AM - 05:00PM</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="" method="post" class="php-email-form">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="{{__('Tên của bạn')}}" required>
                            </div>
                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="{{__('Tiêu đề')}}" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="{{__('Nội dung')}}" required></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">{{__('Lời nhắn của bạn đã được gửi. Xin cảm ơn!')}}</div>
                                <button type="submit">{{__('Gửi tin nhắn')}}</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('frontend.layout-frontend.nav-footer')
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
@include('frontend.layout-frontend.meta.meta-footer')
</body>
</html>
