<!--start footer-->
<section class="footer pt-5 pb-5">
      <div class="row container justify-content-between">
        <div class="col-lg-4 mb-2">
          <div class="brand">
            <h2> توظيف</h2>
          </div>
          <p> توظيف موقع متخصص في تجميع وحصر الوظائف المتوفرة و ملفات الموضفين والباحثين عن عمل </p>

        </div>
        <div class="col-lg-4 mb-2">
          <div class="row">
            <h2>روابط مهمة</h2>
          </div>
          <div class="row">
            <div class="col-6">
              <a class="link">من نحن</a>

            </div>
            <div class="col-6">
              <a class="link">حسابي</a>
              
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <a class="link"> كل الوظائف</a>

            </div>
            <div class="col-6">
              <a class="link">دليل الشركات </a>
              
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <a class="link">المقالات </a>

            </div>
            <div class="col-6">
              <a class="link"> الشروط والاحكام</a>
              
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <a class="link">اتصل بنا </a>

            </div>
            <div class="col-6">
              <a class="link">سياسة الخصوصية </a>
              
            </div>
          </div>

          
        </div>
        <div class="col-lg-4 mb-2">
          <div class="row">
            <h2>اشترك في النشرة الأخبارية</h2>
          </div>
          <div class="row">
            <form class="d-flex">
              <input class="form-control me-2" type="email" placeholder="اشترك" aria-label="اشترك">
              <button class="btn btn-outline-success" type="submit">اشترك</button>
            </form>
          </div>
          <div class="row footer-social-media">
            <div class="col-1 facebook">
              <a class="ri-facebook-circle-fill"></a>

            </div>
            <div class="col-1 twitter">
              <a class="ri-twitter-fill "></a>
              
            </div>
            <div class="col-1 linkedin">
              <a class="ri-linkedin-box-fill "></a>
              
            </div>
            <div class="col-1 whatsapp">
              <a class="ri-whatsapp-fill "></a>
              
            </div>
            
          </div>
          
        </div>
      </div>
    </section>
    <!--end footer-->
    <script src="{{url('assets/js/bootstrap.js')}}"></script>
    <script src="{{url('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('assets/js/popper.min.js')}}"></script>
    <script src="{{url('assets/js/jquery.min.js')}}"></script>
    <script>
      $(document).ready(function () {
        $('#tar-job').on("click",function () {
          console.log(this);
          location.href="jobs_details.html";
          
        });
        
      });
    </script>
</body>
</html>