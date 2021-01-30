<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>NEC</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <!-- href = {{URL::asset('/images/favicon.png')}} -->
    <link rel="shortcut icon" href="{{ asset('/assets/images/logo-new.svg')}}" type="image/png">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active"><a class="page-scroll" href="#home">Домашняя страница</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#services">Курсы</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#pricing">Специальные предложения</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#team">Команда</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#contact">Контакты</a></li>
                            </ul>
                        </div>
                        
                        <div class="navbar-btn d-none d-sm-inline-block">
                            <ul>
                                <li><a class="solid" href="{{ route('login') }}">ВХОД</a></li>
                            </ul>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->
    
    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider_area"  style="padding-bottom: 20px;">
        <div id="carouselThree" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselThree" data-slide-to="0" class="active"></li>
                <li data-target="#carouselThree" data-slide-to="1"></li>
                <li data-target="#carouselThree" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title text-center">Про нас</h1>
                                    <p class="text">Мы помогаем бесчисленным студентам приобрести базовые навыки, разработать новые методы и уверенно двигаться вперед в своем учебном путешествии. Мы предлагаем широкий спектр курсов английского языка для поддержки студентов из всех слоев общества и уровней.</p>
                                    <!-- <ul class="slider-btn rounded-buttons">
                                        <li><a class="main-btn rounded-one" href="#">GET STARTED</a></li>
                                        <li><a class="main-btn rounded-two" href="#">DOWNLOAD</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="assets/images/slider/2.png" alt="Hero"> 
                        </div> <!-- slider-imgae 1.png was upper -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title text-center">Почему мы?</h1>
                                    <p class="text">We blend insights and strategy to create digital products for forward-thinking organisations.</p>
                                    <!-- <ul class="slider-btn rounded-buttons">
                                        <li><a class="main-btn rounded-one" href="#">GET STARTED</a></li>
                                        <li><a class="main-btn rounded-two" href="#">DOWNLOAD</a></li>
                                    </ul> -->
                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="assets/images/slider/3.png" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                <div class="carousel-item">
                    <div>
                        <div class="slider-image mt-50 ml-40 mb-50 pt-20 pb-20 pl-40">
                            <img src="assets/images/slider/ttt.png" alt="Hero"  height="500" width="500">
                        </div> <!-- slider-imgae -->
                    </div>
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="assets/images/slider/1.png" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->
            </div>

            <a class="carousel-control-prev" href="#carouselThree" role="button" data-slide="prev">
                <i class="lni lni-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#carouselThree" role="button" data-slide="next">
                <i class="lni lni-arrow-right"></i>
            </a>
        </div>
    </section>

    <!--====== SLIDER PART ENDS ======-->
    <section id="contact" class="contact-area" style="padding-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper form-style-two pt-115">
                        <h4 class="contact-title pb-10"><i class="lni lni-envelope"></i> Перывй шаг -<span>пробное занятие</span></h4>
                        
                        <form action="{{route('application.save-request')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-input mt-25">
                                        <label>Имя</label>
                                        <div class="input-items default">
                                            <input name="name" type="text" placeholder="Имя">
                                            <i class="lni lni-user"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-input mt-25">
                                        <label>Почтовый адрес</label>
                                        <div class="input-items default">
                                            <input type="email" name="email" placeholder="Почтовый адрес">
                                            <i class="lni lni-envelope"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-input mt-25">
                                        <label>Номер телефона</label>
                                        <div class="input-items default">
                                            <input type="phone" name="phone" placeholder="Номер телефона">
                                            <i class="lni lni-phone"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="form-input light-rounded-buttons mt-30">
                                        <button type="submit" class="main-btn light-rounded-two">Отправить запрос</button>
                                    </div> <!-- form input -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== FEATRES TWO PART START ======-->

    <section id="services" class="features-area" style="padding-bottom: 20px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Наши Курсы</h3>
                        <p class="text">Study anytime anywhere</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">

                @foreach($courses as $course)
                <div style="display:none;">
                    {{$it = $loop->iteration}}
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40 border border-secondary">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title">{{$course->name}}</h4>
                        </div>
                        <div class="features-content">
                            <p class="text">Необходимый уровень: <b>{{ $course->level->name}}</b></p>
                            <span id="more{{$it}}" style="display: none;">
                            <div class="px-2">
                                <h6 class="text py-2">Чему вы научитесь?</h6>
                                <ul style="list-style-type: disc">
                                    @foreach($course->advantages as $advantage)
                                    <li class="text">{{$advantage->name}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            
                                <div class="px-2">
                                    <h6 class="text py-2">Что получит студент после завершения курса?</h6>
                                    <span id="dots{{$it}}">...</span>
                                    <ul style="list-style-type: disc">
                                        @foreach($course->graduationStaffs as $staff)
                                        <li class="text">{{$staff->name}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="px-2">
                                    <h6 class="text py-2">Курсы проводятся индивидуально или в группе?</h6>
                                    <ul style="list-style-type: disc">
                                        @foreach($course->courseTypes as $type)
                                        <li class="text">{{$type->name}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="px-2">
                                    <h6 class="text py-2">Какие цены?</h6>
                                    <ul style="list-style-type: disc">
                                        @foreach($course->prices as $price)
                                        <li class="text">{{$price->name}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="px-2">
                                    <h6 class="py-2">Сколько часов в месяц?</h6>
                                    <ul style="list-style-type: disc">
                                        @foreach($course->classRates as $rate)
                                        <li class="text">{{$rate->name}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </span>
                            <div class="text-center">
                                <button class="btn btn-primary my-2" onclick="showCourseDescription({{$it}})" id="courseBtn{{$it}}">Подробнее</button>
                            </div>
                        </div>
                    </div> <!-- single features -->
                </div>
                @endforeach
                
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATRES TWO PART ENDS ======-->
    
    <!--====== PRINICNG START ======-->

    <section id="pricing" class="pricing-area"  style="padding-bottom: 20px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10">
                    <div class="section-title text-center pb-25">
                        <h3 class="title">Специальные предложения</h3>
                        <p class="text">Study anytime anywhere</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style mt-30">
                        <div class="pricing-icon text-center">
                            <img src="assets/images/basic.svg" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Основной</h5>
                            <p class="month"><span class="price">48 000 тг</span>/12 часов</p>
                        </div>
                        <div class="pricing-list">
                            <div style="display:none;">
                                {{$it = 1}}
                            </div>  
                            <ul>
                                <li class="text-center"><i class="lni lni-check-mark-circle"></i>Расширенный словарный запас</li>
                                <li class="text-center"><i class="lni lni-check-mark-circle"></i>Навыки разговорного английского</li>
                                <span id="specialOffer{{$it}}" style="display: none;">
                                    <span id="offerDots{{$it}}">...</span>
                                    <li class="text-center"><i class="lni lni-check-mark-circle"></i>Грамматика</li>
                                    <li class="text-center"><i class="lni lni-check-mark-circle"></i>Навыки чтения</li>
                                    <li class="text-center"><i class="lni lni-check-mark-circle"></i>Навыки восприятия на слух</li>
                                    <li class="text-center"><i class="lni lni-check-mark-circle"></i>Сертификат о завершении курса</li>
                                    </span>
                                <div class="text-center">
                                    <button class="specical-offer-btn my-2" onclick="showSpecialOffer({{$it}})" id="specialOfferBtn{{$it}}">Подробнее</button>
                                </div>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <button button type="button" class="main-btn rounded-one" data-toggle="modal" data-target="#exampleModal" data-whatever="basic">ЗАПИСАТЬСЯ</button>
                        </div>    
                    </div> <!-- pricing style one -->
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style mt-30">
                        <div class="pricing-icon text-center">
                            <img src="assets/images/pro.svg" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Продвинутый</h5>
                            <p class="month"><span class="price">72 000 тг</span>/24 часов</p>
                        </div>
                        <!-- <li class="text-center"><i class="lni lni-check-mark-circle"></i>Сертификат о завершении</li>
                                <li class="text-center"><i class="lni lni-check-mark-circle"></i>Подарок для лучших учеников</li> -->
                        <div class="pricing-list">
                            <div style="display:none;">
                                {{$it = 2}}
                            </div>  
                            <ul>
                                <li class="text-center"><i class="lni lni-check-mark-circle"></i>Сертификат о завершении</li>
                                <li class="text-center"><i class="lni lni-check-mark-circle"></i>Подарок для лучших учеников</li>
                                <span id="specialOffer{{$it}}" style="display: none;">
                                    <span id="offerDots{{$it}}">...</span>
                                    <li class="text-center"><i class="lni lni-check-mark-circle"></i>Расширенный словарный запас</li>
                                    <li class="text-center"><i class="lni lni-check-mark-circle"></i>Навыки разговорного английского</li>
                                    <li class="text-center"><i class="lni lni-check-mark-circle"></i>Навыки чтения</li>
                                    <li class="text-center"><i class="lni lni-check-mark-circle"></i>Грамматика</li>
                                    <li class="text-center"><i class="lni lni-check-mark-circle"></i>Навыки восприятия на слух</li>
                                </span>
                                <div class="text-center">
                                    <button class="specical-offer-btn my-2" onclick="showSpecialOffer({{$it}})" id="specialOfferBtn{{$it}}">Подробнее</button>
                                </div>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <button button type="button" class="main-btn rounded-one" data-toggle="modal" data-target="#exampleModal" data-whatever="basic">ЗАПИСАТЬСЯ</button>
                        </div>
                    </div> <!-- pricing style one -->
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style mt-30">
                        <div class="pricing-icon text-center">
                            <img src="assets/images/enterprise.svg" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Про</h5>
                            <p class="month"><span class="price">96 000 тг</span>/48 часов</p>
                        </div>
                    
                        <div class="pricing-list">
                            <div style="display:none;">
                                {{$it = 3}}
                            </div>  
                            <ul>
                                <li class="text-center"><i class="lni lni-check-mark-circle"></i>Методики обучения</li>
                                <li class="text-center"><i class="lni lni-check-mark-circle"></i>Деловой английский</li>
                                <span id="specialOffer{{$it}}" style="display: none;">
                                    <span id="offerDots{{$it}}">...</span>
                                    <li class="text-center"><i class="lni lni-check-mark-circle"></i>В конце первого месяца студенты узнают, как управлять своей речью, говоря на английском языке.</li>
                                    <li class="text-center"><i class="lni lni-check-mark-circle"></i>Студент улучшит навыки чтения</li>
                                    <li class="text-center"><i class="lni lni-check-mark-circle"></i>Расширенный словарный запас</li>
                                    <li class="text-center"><i class="lni lni-check-mark-circle"></i>Грамматика</li>
                                    <li class="text-center"><i class="lni lni-check-mark-circle"></i>Навыки восприятия на слух</li>
                                    <li class="text-center"><i class="lni lni-check-mark-circle"></i>50 наиболее часто используемых идиом на рабочем месте</li>
                                    <li class="text-center"><i class="lni lni-check-mark-circle"></i>Навыки написания писем</li>
                                    <li class="text-center"><i class="lni lni-check-mark-circle"></i>Эффективные разговорные навыки</li>
                                    <li class="text-center"><i class="lni lni-check-mark-circle"></i>Сертификат о завершении</li>
                                    <li class="text-center"><i class="lni lni-check-mark-circle"></i>Бонус</li>
                                </span>
                                <div class="text-center">
                                    <button class="specical-offer-btn mt-2" onclick="showSpecialOffer({{$it}})" id="specialOfferBtn{{$it}}">Подробнее</button>
                                </div>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <button button type="button" class="main-btn rounded-one" data-toggle="modal" data-target="#exampleModal" data-whatever="basic">ЗАПИСАТЬСЯ</button>
                        </div>
                    </div> <!-- pricing style one -->
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Новое сообщение</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Имя*</label>
                                    <input type="text" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-email" class="col-form-label">Почтовый адрес*</label>
                                    <input type="email" class="form-control" id="recipient-email" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-phone" class="col-form-label">Номер телефона*</label>
                                    <input type="text" class="form-control" id="recipient-phone" required>
                                </div>
                            
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="button" id="submitBtn" class="btn btn-primary">Отправить сообщение</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PRINICNG ENDS ======-->
    
    <!--====== TESTIMONIAL PART START ======-->
    <section id="team" class="team-area pt-120 pb-30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Встречайте команду</h3>
                        <p class="text">Study anytime anywhere</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                @foreach($teachers as $teacher)
                <div style="display:none;">
                    {{$l = $loop->iteration}}
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="m-2 border">
                        <div class="text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                            <div class="team-image">
                                <img class="rounded-circle" src="{{asset('storage/' . $teacher->avatar_path)}}" alt="avatar" height="250" width="200">
                            </div>
                        </div> <!-- single team -->
                        <div class="team-content text-center pt-4">
                            <h4 class="team-name"><a href="#">{{$teacher->name . ' ' . $teacher->surname}}</a></h4>
                            <span class="sub-title">Страна: {{$teacher->country}}</span>
                            <span id="moreP{{$l}}" style="display: none;">
                                <span id="pDots{{$l}}">...</span>
                                <p class="py-2 px-4">{{$teacher->experience}}</p>
                            </span>
                            <div class="text-center">
                                <button class="btn btn-primary my-2" onclick="showTeacherDescription({{$l}})" id="pBtn{{$l}}">Подробнее</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
                @endforeach

            </div> <!-- row -->
            <div class="text-center">
            {{ $teachers->links() }}
            </div>
            
        </div> <!-- container -->
    </section>
    <section id="testimonial" class="testimonial-area" style="padding-bottom: 20px;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="testimonial-left-content mt-45">
                        <h4 class="title">Отзывы наших студентов</h4>
                        <div class="px-auto">
                            <video width="450" height="300" controls>
                                <source src="/assets/images/videos/1F.mp4" type=video/mp4>
                            </video>
                        </div>
                    </div> <!-- testimonial left content -->
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-right-content mt-50">
                        <div class="quota">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <div class="testimonial-content-wrapper testimonial-active">
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Nice content, everything is explained in a simple way, looking forward for next lesson!”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <!-- <div class="author-image">
                                            <img src="assets/images/author-1.jpg" alt="author">
                                        </div> -->
                                        <div class="author-name media-body">
                                            <h5 class="name">Дарья Ворончихина</h5>
                                        </div>
                                    </div>
                                    <div class="author-review">
                                        <ul class="star">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                        </ul>
                                        <!-- <span class="review">( 7 Reviews )</span> -->
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Понравилось качество записи, доступная информация, много узнала для себя!”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        
                                        <div class="author-name media-body">
                                            <h5 class="name">Айман Айсина</h5>
                                        </div>
                                    </div>
                                    <div class="author-review">
                                        <ul class="star">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-text">
                                    <p class="text">“Всем привет! Курс, в общем-то, понравился. Грамотно построена и структуирована программа. Преподаватель хорошо говорит на английском.”</p>
                                </div>
                                <div class="testimonial-author d-sm-flex justify-content-between">
                                    <div class="author-info d-flex align-items-center">
                                        <div class="author-name media-body">
                                            <h5 class="name">Виктория</h5>
                                            <!-- <span class="sub-title">CEO Mbuild Firm</span> -->
                                        </div>
                                    </div>
                                    <div class="author-review">
                                        <ul class="star">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- single testimonial -->
                        </div> <!-- testimonial content wrapper -->
                    </div> <!-- testimonial right content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->
    
    <!--====== TEAM START ======-->



    <!--====== TEAM  ENDS ======-->
    
    <!--====== CONTACT PART START ======-->

 

    <!--====== CONTACT PART ENDS ======-->
    
    <!--====== FOOTER PART START ======-->
    <section id="contact" class="contact-area" style="padding-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper form-style-two pt-115">
                        <h4 class="contact-title pb-10"><i class="lni lni-envelope"></i> Перывй шаг -<span>пробное занятие</span></h4>
                        
                        <form action="{{route('application.save-request')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-input mt-25">
                                        <label>Имя</label>
                                        <div class="input-items default">
                                            <input name="name" type="text" placeholder="Имя">
                                            <i class="lni lni-user"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-input mt-25">
                                        <label>Почтовый адрес</label>
                                        <div class="input-items default">
                                            <input type="email" name="email" placeholder="Почтовый адрес">
                                            <i class="lni lni-envelope"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-input mt-25">
                                        <label>Номер телефона</label>
                                        <div class="input-items default">
                                            <input type="phone" name="phone" placeholder="Номер телефона">
                                            <i class="lni lni-phone"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="form-input light-rounded-buttons mt-30">
                                        <button type="submit" class="main-btn light-rounded-two">Отправить запрос</button>
                                    </div> <!-- form input -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="footer-logo text-center">
                        <a class="mt-30" href="{{ route('home')}}"><img src="assets/images/logo.svg" height="120" width="120" alt="Logo"></a>
                    </div> <!-- footer logo -->
                    <ul class="social text-center">
                        <li><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="https://www.instagram.com/nec_edu/?igshid=1luvh6bx04a5p"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/nec-edu"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul> <!-- social -->
                    <div class="footer-support text-center">
                        <span class="number">+7 707 542 7522</span>
                        <span class="mail">kuatbek.kazhytai@nu.edu.kz</span>
                    </div>
                    <div class="copyright text-center mt-35">
                        <p class="text">Designed by <a href="https://www.linkedin.com/in/kuatbek-kazhytai-527b86151/" rel="nofollow">Kuatbek</a>Наши курс</p>
                    </div> <!--  copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
{{csrf_field()}}
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->    

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->
    <style>
        #more {display: none;}
    </style>



    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="assets/js/ajax-contact.js"></script>
    
    <!--====== Isotope js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
    <script>


    function showCourseDescription(it) {
        
        var dots = document.getElementById("dots".concat(it));
        var moreText = document.getElementById("more".concat(it));
        var btnText = document.getElementById("courseBtn".concat(it));
        console.log(dots);
        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Подробнее";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Вернуть";
            moreText.style.display = "inline";
        }
    }

    function showTeacherDescription(it) {
        
        var dots = document.getElementById("pDots".concat(it));
        var moreText = document.getElementById("moreP".concat(it));
        var btnText = document.getElementById("pBtn".concat(it));
        console.log(dots);
        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Подробнее";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Вернуть";
            moreText.style.display = "inline";
        }
    }

    function showSpecialOffer(it) {
        
        var dots = document.getElementById("offerDots".concat(it));
        var moreText = document.getElementById("specialOffer".concat(it));
        var btnText = document.getElementById("specialOfferBtn".concat(it));
        console.log(dots);
        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Подробнее";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Вернуть";
            moreText.style.display = "inline";
        }
    }
    $(document).ready(function() {
        $('#submitButton').click(function(event) {
            console.log('done');
            let name = $('#name').val();
            let email = $('#email').val();
            let description = $('#description').val();
            let responseText = $('#responseText');
            
            $.post('application/store', {'name':name,'email':email,'description':description, '_token':$('input[name=_token]').val()}, function(data){
                // $('#items').load(location.href + ' #items');
                $('#name').val("")
                $('#email').val("");
                $('#description').val("");
                responseText.text('You message was successfully sent')
                // $('#responseText').append('<span id="add_here">new-dynamic-text</span>');
            });
        });
        $('#submitBtn').click(function(event) {
            let name = $('#recipient-name').val();
            let email = $('#recipient-email').val();
            let phone = $('#recipient-phone').val();
            let responseText = $('#responseText');
            console.log(name,email,phone);
            $.post('application/save-request', {'name':name,'email':email,'phone':phone,'_token':$('input[name=_token]').val()}, function(data){
                // $('#items').load(location.href + ' #items');
                $('#recipient-name').val("")
                $('#recipient-email').val("");
                $('#recipient-phone').val("");
                $('#exampleModal').modal('hide');
            });
        });

        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var type = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Пожалуйста, заполните форму, и мы Вам перезвоним')
            modal.find('.modal-body input').val()
        });
        
    });
    </script>
    
</body>

</html>
