<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="hadi ahmed">
    <meta name="description" content="jobs-site">
    <meta name="keywoard" content="html , css , js,bootstrap,jquery">
    <title>dashboard</title>
    <link rel="stylesheet" href="assets/fonts/remixicon.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
   <!--start dashboard-->
   <div class="row sidbare">
     <aside class="col-md-4">
        <div class="logo-details text-center">
          <i class='bx bxl-c-plus-plus'></i>
          <span class="logo_name"> توظيف</span>
        </div>
        <ul class="nav-links">
          <li>
            <a href="dashboard-personal-info.html" >
              <i class='bx bx-grid-alt' ></i>
              <span class="links_name">البيانات الشخصية</span>
            </a>
          </li>
          <li>
            <a href="/add_user"  class="active">
              <i class='bx bx-box' ></i>
              <span class="links_name">المستخدمين</span>
            </a>
          </li>
          <li>
            <a href="/add_job"  >
              <i class='bx bx-list-ul' ></i>
              <span class="links_name">الوظائف</span>
            </a>
          </li>
          <li>
            <a href="/add_category">
              <i class='bx bx-pie-chart-alt-2' ></i>
              <span class="links_name">الاقسام</span>
            </a>
          </li>
          <li>
            <a href="dashboard-person-courses.html">
              <i class='bx bx-coin-stack' ></i>
              <span class="links_name">الطلبات</span>
            </a>
          </li>
          <li class="log_out">
            <a href="index.html">
              <i class='bx bx-log-out'></i>
              <span class="links_name">تسجيل الخروج</span>
            </a>
          </li>
        </ul>
     </aside>
     <div class="dashboard-section col-md-8">
       <div class="row">
          <nav>
            <div class="sidebar-button">
              <i class='bx bx-menu sidebarBtn'></i>
              <span class="dashboard">لوحة التحكم</span>
            </div>
            <div class="profile-details">
              <img src="assets/images/profile.jpg" alt="">
              <span class="admin_name">احمد صلاح</span>
              <i class='bx bx-chevron-down' ></i>
            </div>
          </nav>
       </div>
       <div class="row container person-skills">
          <h2 class="text-center fs-4">الوظائف</h2>
          <a type="button"  data-bs-toggle="modal" data-bs-target="#addModal">اضافة مستخدم</a>
          <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title flex-grow-1" id="exampleModalLabel">إضافة مستخدم</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <input class="w-100" type="text" placeholder="الاسم">
                </div>
                <div class="modal-body">
                  <textarea class="w-100" type="email" placeholder=" البريد الالكتروني"></textarea>
                </div>
                <div class="modal-body">
                  <input class="w-100" type="password" placeholder="كلمة المرور">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                  <button type="button" class="btn btn-primary">إضافة</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <ol class="list-group personal-info-list">
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="content w-100 d-flex justify-content-between">
                  <div class="info-content-txt">
                    <div class="name d-inline-flex">
                      <span class="ri-map-pin-user-fill "></span>
                      <span>الاسم</span>
                    </div>
                    <div class="fw-bold">الاسم هنا</div>
                    <div class="fw-small">محتوى اضافي هنا</div>
                  </div>
                  <div class="op-btn d-flex flex-column align-items-center justify-content-around">
                    <span class="ri-pencil-fill update-btn" type="button"  data-bs-toggle="modal" data-bs-target="#udateModal"></span>
                    <span class="ri-delete-bin-5-line delete-btn " type="button"  data-bs-toggle="modal" data-bs-target="#deleteModal"></span>
                  </div>
                </div>
                <div class="modal fade" id="udateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title flex-grow-1" id="exampleModalLabel">تعديل</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <input class="w-100" type="text">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                        <button type="button" class="btn btn-primary">حفظ التعديل</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title flex-grow-1" id="exampleModalLabel">حذف العنصر</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p>هل تريد حقا حذف هذا  العنصر </p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">تراجع</button>
                        <button type="button" class="btn btn-primary"> حذف</button>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              
              
            </ol>
          </div>
        </div>
     </div>
   </div>
    
    <!--end dashboard-->

    
    <script src="{{url('assets/js/bootstrap.js')}}"></script>
    <script src="{{url('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('assets/js/popper.min.js')}}"></script>
    <script src="{{url('assets/js/script.js')}}"></script>
    <script src="{{url('assets/js/datatables-demo.js')}}"></script>
</body>
</html>