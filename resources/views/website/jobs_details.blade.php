@extends('components.master')
@section('content')
<body>
    <!--start header-->
    <!--start top breadcrumb header-->
    <div class="top-header container">
        <div class="regesteration">
            <div class="login">
                <i class=""></i>
                <a href="/login">تسجيل الدخول</a>
            </div>
            <div class="seperator">|</div>
            <div class="sign-in">
                <a href="/signin">حساب جديد</a>

            </div>
        </div>
        <div class="profile">
          <a href="/dashboard" class="ri-user-3-fill"></a>
        </div>
        <!-- <div class="top-links">
            <a href="#">المقالات</a>
            <span class="seperator">|</span>
            <a href="#">المرتبات</a>
            <span class="seperator">|</span>
            <a href="#">الاعضاء</a>
            <span class="seperator">|</span>
            <a href="#">دليل الشركات</a>
            
        </div> -->
        
    </div>
    <!--end top breadcrumb header-->

    <nav class="navbar sticky-top  navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid container">
          <a class="navbar-brand" href="#">توظيف</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">الرئيسة</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="jobs.html">كل الوظائف</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.html">خدماتنا</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.html">من نحن</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.html">اتصل بنا</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="personalCv.html">الملف الشخصي</a>
              </li>
            </ul>
            <form class="navbar-btn">
                <button class="btn work-search-btn">تبحث عن عمل ؟</button>
                <button class="company-btn">صاحب شركة ؟</button>
              </form>
          </div>
        </div>
      </nav>
    <!--end header-->
    
   

    <!-- start job details-->
    <section class="job-details container">
        <div class="row">
          <div class="col-12">
            <div class="card mb-3 mt-5 p-3" style="max-width: 100%;">
              <div class="row g-0">
                <div class="col-md-2">
                  <img src="assets/images/portfolio-4.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-7">
                  <div class="card-body">
                      <h3 class="card-title">مندس مدني</h3>
                      <div class="company d-flex">
                          <i class="ri-bank-fill"></i>
                          <h5 class="company-name">اسم الشركة هنا</h5>
                      </div>
                      <div class="company d-flex">
                              <i class="ri-map-pin-fill"></i>
                              <span class="company-location"> عدن الشيخ عثمان</span>
                      </div>
                  </div>
                </div>
                <div class="col-md-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-outline w-45 download-btn-pdf job-applay-btn ">تقديم</button>
                    <button class="btn btn-outline-danger w-45 download-btn-doc"> إبلاغ</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row section-header text-center p-4">
            <div class="col-12">
                <h2> تفاصيل الوظيفة</h2>
                <nav aria-label="breadcrumb ">
                  <ol class="breadcrumb text-center justify-content-center">
                    <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="jobs.html">كل الوظائف</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a class="active" href="#">تفاصيل الوظيفة</a></li>
                  </ol>
                </nav>
            </div>
        </div>
        <div class="row text-center justify-content-around">
          <div class="col-sm-12 col-md-6 w-80">
           <div class="row">
              <div class="card text-end" style="width: 80%;">
                <div class="card-body">
                  <h5 class="card-title">الوصف</h5>
                  <p class="card-text">الاشراف على العمل الميداني و المساحي والقيام بجميع الاعمال المساحية والمهام الوكلة بواسطة الشركة</p>
                  <a href="#" class="btn btn-primary job-applay-btn">التقديم للوظيفة</a>
                </div>
              </div>
           </div>
           <div class="row">
            <div class="card text-end" style="width: 80%;">
              <div class="card-body">
                <h5 class="card-title">متطلبات الوظيفة</h5>
                <ol>
                  <li>بكالوريوس هندسة مدنية</li>
                  <li> خبرة لاتقل عن سنه في الاعمال المساحية </li>
                  <li>اجادة استخدام البرامج الهندسية </li>
                  <li> مستولى جيد في اللغة الانجليزية </li>
                </ol>
                <a href="#" class="btn btn-primary job-applay-btn">التقديم للوظيفة</a>
              </div>
            </div>
         </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="row mb-4 mt-4">
              <div class="card pb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <h4 class="card-title">تفاصيل الوظيفة</h4>
                    </div>
                  </div>
                  <div class="row d-flex justify-content-between pb-2 align-items-center">
                    <div class="col-6">
                      <h5 class="card-text">شركة التاج</h5>
                    </div>
                    <div class="col-6">
                      <img src="assets/images/slide-1.jpg" class="card-text compant-img"></img>
                    </div>
                  </div>
                  <div class="row pb-2">
                    <div class="col-6">
                      <h5 class="card-text">المسمى الوظيفي</h5>
                    </div>
                    <div class="col-6">
                      <p class="card-text">مهندس مدني </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <h5 class="card-text">الدوام</h5>
                    </div>
                    <div class="col-6">
                      <p class="card-title">دوام كامل</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <h5 class="card-text">القسم</h5>
                    </div>
                    <div class="col-6">
                      <p class="card-title">قسم المساحة</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <h5 class="card-text">الموقع</h5>
                    </div>
                    <div class="col-6">
                      <p class="card-text">صنعاء</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="card" style="">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <h4 class="card-title">مشاركة الوظيفة</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-4">
                      <button class="card-title btn btn-light ri-facebook-circle-fill"></button>
                    </div>
                    <div class="col-4">
                      <button class="card-title btn btn-light ri-twitter-fill"> </button>
                    </div>
                    <div class="col-4">
                      <button class="card-title btn btn-light ri-facebook-circle-fill"> </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-3 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <h4 class="card-title">تحميل تفاصيل الوظيفة</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <button class="card-title btn text-light btn-warning download-btn-doc ri-facebook-circle-fill">تحميل ك (pdf)</button>
                    </div>
                    <div class="col-6">
                      <button class="card-title btn text-light btn-success download-btn-pdf ri-twitter-fill"> تحميل ك (doc)</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

    </section>
    
    <!--end job details -->
    

@endsection