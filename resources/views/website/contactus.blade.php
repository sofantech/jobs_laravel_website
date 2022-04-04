<x-header/>
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
    
   

    <!-- start job details-->
    <section class="job-details container">
        <div class="row section-header text-center p-4">
            <div class="col-12">
                <h2> اتصل بنا</h2>
                <nav aria-label="breadcrumb ">
                  <ol class="breadcrumb text-center justify-content-center">
                    <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a class="active" href="#">اتصل بنا </a></li>
                  </ol>
                </nav>
            </div>
        </div>
        <div class="row  justify-content-around">
          <div class="col-sm-12 col-md-6 w-80">
           <div class="row">
            <form class="login-form row container g-3 pb-4">
              <h2 class="text-center">ارسل لنا رسالة</h2>
              <div class="col-md-12">
                <label for="userName" class="form-label"> اسم المستخدم  </label>
                <input placeholder="اسم المستخدم" type="text" class="form-control" id="userName">
              </div>
              <div class="col-md-12">
                <label for="userEmail" class="form-label">البريد الالكتروني</label>
                <input placeholder="البريد الالكتروني" type="email" class="form-control" id="userEmail">
              </div>
              <div class="col-md-12">
                <label for="messagetitle" class="form-label">موضوع الرسالة</label>
                <input placeholder="موضوع الرسالة" type="text" class="form-control" id="messagetitle">
              </div>
              <div class="col-md-12">
                <label for="messageContent" class="form-label">الرسالة</label>
                <textarea placeholder=" موضوع الرسالة" class="form-control" id="messageContent"></textarea>
              </div>
              <div class="col-md-4">
                <button class="btn w-100  download-btn-pdf">ارسال</button>
              </div>

            </form>
           </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="row">
              <form class="login-form row container g-3 pb-4">
                <h2 class="text-center">معلومات التواصل</h2>
                <div class="row align-items-center mt-4">
                  <div class="col-4">
                    <div class="icon text-center">
                      <i class="ri-cellphone-fill fs-4"></i>
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="phone-num">
                      <h5>رقم الهاتف</h5>
                      <span>967-777-604-785</span>
                    </div>
                  </div>
                </div>
                <div class="row align-items-center mt-4">
                  <div class="col-4">
                    <div class="icon text-center">
                      <i class="ri-mail-fill fs-4"></i>
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="phone-num">
                      <h5>البريد الالكتروني</h5>
                      <span>2354sofanTec@gmail.com</span>
                    </div>
                  </div>
                </div>
                <div class="row align-items-center mt-4">
                  <div class="col-4">
                    <div class="icon text-center">
                      <i class="ri-map-pin-5-fill fs-4"></i>
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="phone-num">
                      <h5>الموقع</h5>
                      <span>اليمن - صنعاء - الحصبة</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7693.245496179234!2d44.18431689347331!3d15.396904231639816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1643813148443!5m2!1sar!2s" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
  
              </form>
             </div>
          </div>
        </div>
      </div>

    </section>
    
    <!--end job details -->
    

  <x-footer/>