<x-header/>
<body>
    <!--start header-->
    <!--start top breadcrumb header-->
    <div class="top-header container">
        <div class="regesteration">
            <div class="login">
                <i class=""></i>
                <a href="login.html" class="active">تسجيل الدخول</a>
            </div>
            <div class="seperator">|</div>
            <div class="sign-in">
                <a href="signIn.html">حساب جديد</a>

            </div>
        </div>
        <div class="profile">
          <a href="dashboard-personal-info.html" class="ri-user-3-fill"></a>
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
    <!--start login form-->
    <section class="login-form container justify-content-center pt-4 pb-4">
      <div class="row section-header text-center p-4">
        <div class="col-12">
            <h2>تسجيل الدخول</h2>
            <nav aria-label="breadcrumb ">
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                <li class="breadcrumb-item " aria-current="page"><a class="active" href="jobs.html">تسجيل الدخول</a></li>
              </ol>
            </nav>
        </div>
      </div>
      <form class="login-form row container g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">الاسم او البريد الالكتروني</label>
          <input placeholder="الاسم او البريد الالكتروني" type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">كلمة المرور</label>
          <input placeholder="كلمة المرور" type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12 d-flex justify-content-between">
          <div class="form-check">
            <input class="" type="checkbox" id="gridCheck">
            <label class="" for="gridCheck">
              ابقني متصلا
            </label>
          </div>
          <a class="active" href="#">نسيت كلمة المرور؟</a>
        </div>
        <div class="col-12">
          <button type="submit" class="btn login-btn">تسجيل الدخول</button>
        </div><hr>
        <div class="col-12">
          <h5>او عبر حسابات التواصل الاجتماعي</h5>
          <div class="social-media-links mt-3 mb-3">
            <div class="facebookbt">
              <button type="submit" class="btn text-light">فيسبوك</button>
              <i class="ri-facebook-box-fill"></i>
            </div>
            <div class="twitterbt">
              <button type="submit" class="btn text-light">تويتر</button>
              <i class="ri-twitter-fill"></i>
            </div>
            <div class="googlebt">
              <button type="submit" class="btn text-light">جوجل</button>
              <i class="ri-google-fill"></i>
            </div>
            
            
          </div>
        </div>
      </form>

    </section>
    <!--end login form-->
    

    <x-footer/>