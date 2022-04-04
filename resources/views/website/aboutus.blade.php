@extends('components.master')
@section('content')
<body>
    <!--start header-->
    <!--start top breadcrumb header-->
    <div class="top-header container">
        <div class="regesteration">
            <div class="login">
                <i class=""></i>
                <a href="login.html">تسجيل الدخول</a>
            </div>
            <div class="seperator">|</div>
            <div class="sign-in">
                <a href="signIn.html">حساب جديد</a>

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
                <a class="nav-link active" aria-current="page" href="/">الرئيسة</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/jobs">كل الوظائف</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/services">خدماتنا</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">من نحن</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">اتصل بنا</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/personalCv">الملف الشخصي</a>
              </li>
            </ul>
            <form class="navbar-btn">
                <button class="btn work-search-btn">تبحث عن عمل ؟</button>
                <button class="company-btn">صاحب شركة ؟</button>
              </form>
          </div>
        </div>
      </nav>
   

    <!-- start job details-->
    <section class="job-details container">
        <div class="row section-header text-center p-4">
            <div class="col-12">
                <h2>من نحن</h2>
                <nav aria-label="breadcrumb ">
                  <ol class="breadcrumb text-center justify-content-center">
                    <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a class="active" href="#">من نحن </a></li>
                  </ol>
                </nav>
            </div>
        </div>
        <div class="row  justify-content-around">
          <div class="col-sm-12 col-md-6 w-80">
           <div class="row">
             <div class="image-box">
               <img src="assets/images/slide-4.jpg" class="img-thumbnail img-fluid">
             </div>
           </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="row">
              <div class="login-form row container g-3 pb-4">
                <h2 class="text-center">عن الموقع</h2>
                <p>اكبر موقع للتوضيف في اليمن يجمع بين اصحاب العمل وطالبي العمل حيث يمثل حلقة الوصل التي تربط بين اصحاب الباحثين عن العمل و ارباب العمل كل يوم يتم إظافة الاف الوظائف</p>
                <h2 class="text-center">تابعنا عبر</h2>
                <div class="social-media d-flex justify-content-around">
                  <div class="facebook">
                    <i class="ri-facebook-box-fill"></i>
                  </div>
                  <div class="twitter">
                    <i class="ri-twitter-fill"></i>
                  </div>
                  <div class="linkedIn">
                    <i class="ri-linkedin-box-fill"></i>
                  </div>
                  <div class="instagram">
                    <i class="ri-instagram-fill"></i>
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