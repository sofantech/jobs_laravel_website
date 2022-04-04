<x-header/>
<body>
    <!--start header-->
    <!--start top breadcrumb header-->
    <div class="top-header container">
        <div class="regesteration">
            <div class="login">
                <i class=""></i>
                <a href="login.html" >تسجيل الدخول</a>
            </div>
            <div class="seperator">|</div>
            <div class="sign-in">
                <a href="signIn.html" class="active">حساب جديد</a>
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

    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
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
    <!--start signIn form-->
    <div class="signIn-nav">
      <ul class="nav nav-pills text-center justify-content-center">
        <li class="nav-item">
          <a class="regester active" aria-current="page" href="#">التسجيل كعضو</a>
        </li>
        <li class="nav-item">
          <a class="regester " href="#">التسجيل كشركة</a>
        </li>
      </ul>
    </div>
    <section class="login-form container justify-content-center pt-4 pb-4">
      <div class="row section-header text-center p-4">
        <div class="col-12">
            <h2>إنشاء حساب جديد</h2>
            <nav aria-label="breadcrumb ">
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                <li class="breadcrumb-item " aria-current="page"><a class="active" href="jobs.html">إنشاء حساب</a></li>
              </ol>
            </nav>
        </div>
      </div>
      <form class="login-form row container g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">الاسم الاول</label>
          <input placeholder="الاسم الاول" type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">الأسم الاخير </label>
          <input placeholder="الاسم الاخير" type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">الاسم المستخدم</label>
          <input placeholder="الاسم المستخدم" type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label"> البريد الالكتروني</label>
          <input placeholder="البريد الالكتروني" type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">الوظيفة</label>
          <input placeholder="الوظيفة " type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">عدد سنوات الخبرة</label>
          <input placeholder="عدد سنوات الخبرة" type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">المحافظة</label>
          <input placeholder="اختر المحافظة" type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">المدينة</label>
          <input placeholder="المدينة" type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">تاريخ الميلاد</label>
          <input placeholder="تاريخ الميلاد" type="date" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">الجنس</label>
          <div class="d-flex justify-content-around">
            <div class="male-input d-flex align-items-center">
              <input type="radio" class="" id="inputmale4">
              <label for="inputmale4">ذكر</label>
            </div>
            <div class="fmail-input d-flex align-items-center">
              <input type="radio" class="" id="inputfmale4">
              <label for="inputfmale4">انثى</label>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">كلمة المرور</label>
          <input placeholder="كلمة المرور " type="password" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">تاكيد كلمة المرور</label>
          <input placeholder="تاكيد كلمة المرور" type="password" class="form-control" id="inputEmail4">
        </div>
        <div class="col-12">
          <button type="submit" class="btn login-btn">إنشاء حساب جديد</button>
        </div><hr>
      </form>

    </section>
    <!--end login form-->
    

    <x-footer/>