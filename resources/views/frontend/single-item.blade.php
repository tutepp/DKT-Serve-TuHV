<!doctype html>
<html lang="en">
<head>
    @include('frontend.layout-frontend.meta.meta-head')
</head>
<body>
@include('frontend.layout-frontend.nav-header')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li>Blog Single</li>
            </ol>
            <h2>Blog Single</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                        <article class="entry">
                            <h2 class="entry-title">
                               {{$item->title}}
                            </h2>
                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i>{{$item->user->name}}</li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="2020-01-01">{{$item->created_at}}</time></li>

                                </ul>
                            </div>
                            <p>
                                {!! $item->content !!}
                            </p>
                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i>{{$item->user->name}}</li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="2020-01-01">{{$item->created_at}}</time></li>

                                </ul>
                            </div>
                            <div class="entry-content">
                                <p> {!! $item->description !!}</p>
                            </div>

                        </article><!-- End blog entry -->
                </div><!-- End blog entries list -->

                <!-- End blog sidebar -->
                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">T??m ki???m</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Tin t???c v??? c??ng ty</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <li><a href="#">Du l???ch </a></li>
                                <li><a href="#">Li??n hoan </a></li>
                                <li><a href="#">S??? ki???n </a></li>
                                <li><a href="#">T??? thi???n </a></li>
                                <li><a href="#">D??? ??n ????o t???o </a></li>
                                <li><a href="#">D??? ??n kinh doanh </a></li>
                            </ul>
                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Nh???ng b??i vi???t kh??c</h3>
                        <div class="sidebar-item recent-posts">
                            @foreach($myItems as $myItem)
                                <div class="post-item clearfix">
                                    <img src="{{$myItem->image}}" alt="" style="width:50px;height: 30px ">
                                    <h4><a href=""></a>{{$myItem->title}}</h4>
                                    <time datetime="2020-01-01">{{$myItem->created_at}}</time>
                                </div>
                            @endforeach
                        </div><!-- End sidebar recent posts-->

                        <h3 class="sidebar-title">Tags</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                <li><a href="#">App</a></li>
                                <li><a href="#">IT</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Mac</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Office</a></li>
                                <li><a href="#">TikTok</a></li>
                                <li><a href="#">Studio</a></li>
                                <li><a href="#">B2C</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div><!-- End sidebar tags-->

                    </div><!-- End sidebar -->

                </div>

            </div>

        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->
@include('frontend.layout-frontend.nav-footer')
@include('frontend.layout-frontend.meta.meta-footer')
</body>
</html>
