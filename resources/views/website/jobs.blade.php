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
                <a class="nav-link active" href="jobs.html">كل الوظائف</a>
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
    
   

    <!-- start available jobs-->
    <section class="available-jobs container">
        <div class="row section-header text-center p-4">
            <div class="col-12">
                <h2>الوضائف المتاحة</h2>
                <nav aria-label="breadcrumb ">
                  <ol class="breadcrumb text-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">الرئيسية</a></li>
                    <li class="breadcrumb-item " aria-current="page"><a href="# " class="active">كل الوضائف</a></li>
                  </ol>
                </nav>
            </div>
        </div>
        <div class="row text-center justify-content-around">
          <div class="col-sm-12 col-md-6">
            <div class="row">
              <form class="d-flex mb-4 justify-content-between">
              <form class="d-flex mb-4 justify-content-between">
                <input class="form-control me-2 w-50" type="search" placeholder="عنوان الوظيفة" aria-label="Search" id="searchKey">
                <button class="btn btn-outline-success w-40" type="submit">ابحث عن وظيفة</button>
              </form>
            </div>
           <div class="row" id="jobsAvailable">
            <div class="col-sm-12" id="job-item">
              <div class="card mb-3 p-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <img src="assets/images/portfolio-5.jpg" class="img-fluid rounded-start job-img" alt="...">
                    <div class="col-md-8">
                          <div class="card-body">
                              <h3 class="card-title" id="jobTitle">مهندس مدني </h3>
                              <div class="company d-flex">
                                  <i class="ri-bank-fill"></i>
                                  <h5 class="company-name">اسم الشركة هنا</h5>
                              </div>
                              <div class="company d-flex">
                                      <i class="ri-map-pin-fill"></i>
                                      <span class="company-location"> عدن الشيخ عثمان</span>
                              </div>
                              <div class="company d-flex align-items-center mb-3 mt-3">
                                  <i class="ri-building-3-line"></i>
                                  <span class="text-primary">دوام كامل</span>
                              </div>
                          </div>
                    </div>
                    <button class="btn btn-outline-success col-md-3 w-100">تقديم</button>
                  </div>
              </div>
            </div>
            <div class="col-sm-12" id="job-item">
              <div class="card mb-3 p-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <img src="assets/images/portfolio-5.jpg" class="img-fluid rounded-start job-img" alt="...">
                    <div class="col-md-8">
                          <div class="card-body">
                              <h3 class="card-title" id="jobTitle">مختص قواعد بيانات </h3>
                              <div class="company d-flex">
                                  <i class="ri-bank-fill"></i>
                                  <h5 class="company-name">اسم الشركة هنا</h5>
                              </div>
                              <div class="company d-flex">
                                      <i class="ri-map-pin-fill"></i>
                                      <span class="company-location"> عدن الشيخ عثمان</span>
                              </div>
                              <div class="company d-flex align-items-center mb-3 mt-3">
                                <i class="ri-building-3-line"></i>
                                <span class="text-warning">دوام كامل</span>
                            </div>
                          </div>
                    </div>
                    <button class="btn btn-outline-success col-md-3 w-100">تقديم</button>
                  </div>
              </div>
            </div>
            <div class="col-sm-12" id="job-item">
              <div class="card mb-3 p-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <img src="assets/images/portfolio-5.jpg" class="img-fluid rounded-start job-img" alt="...">
                    <div class="col-md-8">
                          <div class="card-body">
                              <h3 class="card-title" id="jobTitle">مهندس ميكانيك </h3>
                              <div class="company d-flex">
                                  <i class="ri-bank-fill"></i>
                                  <h5 class="company-name">اسم الشركة هنا</h5>
                              </div>
                              <div class="company d-flex">
                                      <i class="ri-map-pin-fill"></i>
                                      <span class="company-location"> عدن الشيخ عثمان</span>
                              </div>
                              <div class="company d-flex align-items-center mb-3 mt-3">
                                <i class="ri-building-3-line"></i>
                                <span class="text-primary text-danger">دوام كامل</span>
                            </div>
                          </div>
                    </div>
                    <button class="btn btn-outline-success col-md-3 w-100">تقديم</button>
                  </div>
              </div>
            </div>
            <div class="col-sm-12" id="job-item">
              <div class="card mb-3 p-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <img src="assets/images/portfolio-5.jpg" class="img-fluid rounded-start job-img" alt="...">
                    <div class="col-md-8">
                          <div class="card-body">
                              <h3 class="card-title" id="jobTitle"> فني تحكم صناعي </h3>
                              <div class="company d-flex">
                                  <i class="ri-bank-fill"></i>
                                  <h5 class="company-name">اسم الشركة هنا</h5>
                              </div>
                              <div class="company d-flex">
                                      <i class="ri-map-pin-fill"></i>
                                      <span class="company-location"> عدن الشيخ عثمان</span>
                              </div>
                              <div class="company d-flex align-items-center mb-3 mt-3">
                                <i class="ri-building-3-line"></i>
                                <span class="text-success">عمل حر </span>
                            </div>
                          </div>
                    </div>
                    <button class="btn btn-outline-success col-md-3 w-100">تقديم</button>
                  </div>
              </div>
            </div>
            <div class="col-sm-12" id="job-item">
              <div class="card mb-3 p-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <img src="assets/images/portfolio-5.jpg" class="img-fluid rounded-start job-img" alt="...">
                    <div class="col-md-8">
                          <div class="card-body">
                              <h3 class="card-title" id="jobTitle">مهندس معماري </h3>
                              <div class="company d-flex">
                                  <i class="ri-bank-fill"></i>
                                  <h5 class="company-name">اسم الشركة هنا</h5>
                              </div>
                              <div class="company d-flex">
                                      <i class="ri-map-pin-fill"></i>
                                      <span class="company-location"> عدن الشيخ عثمان</span>
                              </div>
                              <div class="company d-flex align-items-center mb-3 mt-3">
                                <i class="ri-building-3-line"></i>
                                <span class="text-info">دوام جزئي</span>
                            </div>
                          </div>
                    </div>
                    <button class="btn btn-outline-success col-md-3 w-100">تقديم</button>
                  </div>
              </div>
            </div>
           </div>
           <!-- <div class="row">
              <nav aria-label="...">
                <ul class="pagination">
                  <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
           </div> -->
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingone">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#filterbycompany" aria-expanded="false" aria-controls="collapseThree">
                    الشركات 
                  </button>
                </h2>
                <div id="filterbycompany" class="accordion-collapse collapse" aria-labelledby="headingone" data-bs-parent="#filterbycompany">
                  <div class="accordion-body">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        شركات مالية
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        شركات برمجية
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        شركات محاسبية
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        شركات امن وحماية
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        شركات نظافة
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        شركات مقاولات
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        شركات اتصالات
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        شركات دعم فني
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingone">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#filterbytimework" aria-expanded="false" aria-controls="collapseThree">
                    نوع الدوام 
                  </button>
                </h2>
                <div id="filterbytimework" class="accordion-collapse collapse" aria-labelledby="headingone" data-bs-parent="#filterbytimework">
                  <div class="accordion-body">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                         دوام كامل
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                         دوام جزئي
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                         موظف حر
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                          عمل مؤقت
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                         تدريب
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    المحافظات
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        صنعاء
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        عدن
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        حضرموت
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        حجة
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        المحويت
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        ذمار
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        إب
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                      <label class="form-check-label" for="flexRadioDefault2">
                        مأرب
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

    </section>
    
    <!--end available jobs -->
    

    
    <x-footer/>