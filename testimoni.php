    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('images/index_bg.png');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
            
            <h2 class="text-white h1">TESTIMONI RADIO MBI</h2>
            <p>Testimoni dari pendengar setia Radio MBI</p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light block-13">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
            <h2 class="mb-5">PENDENGAR SETIA</h2>
            <p>Testimoni dari pendengar setia Radio MBI</p>
          </div>
        </div>
        <div class="nonloop-block-13 owl-carousel">
          
          <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">            
              <img src="images/woman_icon.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="">
              <h3 class="font-weight-light h5">Haspalela Abdullah</h3>
              <p class="font-italic">&ldquo;Radio Majlis Badaraya Ipoh Terbaik Penyampaian DJ-DJ yang berbakat, mahir berkomuniksi, strategic & lancar dalam penyampaian maklumat, Selamat Maju Jaya..&rdquo;<br/><br/></p>
            </div>
          </div>

          <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">            
              <img src="images/man_icon.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="">
              <h3 class="font-weight-light h5">Chong Wen Yao</h3>
              <p class="font-italic">&ldquo;Good service and quick response&rdquo;<br/><br/><br/><br/><br/></p>
            </div>
          </div>

          <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">            
              <img src="images/woman_icon.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="">
              <h3 class="font-weight-light h5">Tyha Sharon</h3>
              <p class="font-italic">&ldquo;Thanks Dj Elly & Dj Riz. Ate kome terbaikkkk&rdquo;<br/><br/><br/><br/><br/></p>
            </div>
          </div>

          <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">            
              <img src="images/man_icon.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="">
              <h3 class="font-weight-light h5">Kamal Mohd</h3>
              <p class="font-italic">&ldquo;Dj-dj yang berbakat menyampaikan informasi,maklumat terkini.selamat maju jaya Radio Majlis Bandaraya ipoh.&rdquo;<br/><br/><br/></p>
            </div>
          </div>

          <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">            
              <img src="images/man_icon.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="">
              <h3 class="font-weight-light h5">Izmir Rahman</h3>
              <p class="font-italic">&ldquo;Syabas Radio MBI,Tahniah&rdquo;<br/><br/><br/><br/><br/></p>
            </div>
          </div>

          <div class="text-center p-3 p-md-5 bg-white">
            <div class="mb-4">            
              <img src="images/man_icon.jpg" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="">
              <h3 class="font-weight-light h5">Hafiz Hafizuddin</h3>
              <p class="font-italic">&ldquo;Kerana infomer penting,berita hujung kampung timbul. Bergulai....&rdquo;<br/><br/><br/><br/></p>
            </div>
          </div>

        </div>
      </div>
    </div>  
    

    <div class="site-blocks-cover overlay inner-page-cover subscribe" style="background-image: url(images/slide01.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <h2>Maklumbalas Anda</h2>
            <p class="mb-5">Hantarkan cadangan dan komen anda kepada kami</p>
            {!! Form::open(['action' => 'MailsController@postMail','method' =>'POST','enctype' =>'multipart/form-data']) !!}
              <div class="form-group">
                  {{Form::text('nama','',['class'=>'form-control','placeholder' => 'Nama'])}}
              </div>
              <div class="form-group">
                  {{Form::email('emel','',['class'=>'form-control','placeholder' => 'Emel'])}}
              </div>
              <div class="form-group">
                  {{Form::text('mesej','',['class'=>'form-control','placeholder' => 'Maklumbalas'])}}
              </div>
              {{Form::submit('Send Message',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>