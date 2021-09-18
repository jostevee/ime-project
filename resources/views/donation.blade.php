<!DOCTYPE html>
<html lang="en">

<head>
  @include('default_header')
  <title>Indonesia Marine Exhibition - Donation Room</title>
  <link href="{{ asset ('assets/css/donation.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    @include('menu')
    @php
      $userwriter = -1;
      $userid = 0;
      $useremail = -1;
      $submittedstatus = -1;
      if (Auth::guard('web')->user() != null){
        $userwriter = Auth::guard('web')->user()->paid_status;
        $submittedstatus = Auth::guard('web')->user()->trx_image_submit;
        $userid = Auth::guard('web')->user()->id;
        $useremail = Auth::guard('web')->user()->email;
      } else {
        $userwriter = -1;
      }
      /* $useradmin = Auth::guard('writer')->user(); */
    @endphp

    <section class="donation-room-page">
      <!-- ======= Talkshow Details Section ======= -->
      <section id="donation-room-page" class="general d-flex">
        <div class="container mt-4">

          <div class="row d-flex justify-content-center mt-4">
            <div class="col-12">
              <h1 class="blue-title">Donation Room</h1>
            </div>

            <div class="col-lg-9 content-transparent mt-4">
              <p class="blue-strong" style="text-align: justify; padding: 10px;">
              Kelompok Smiling Coral Indonesia (SCI) adalah Kelompok Masyarakat peduli lingkungan 
              yang didirikan pada Tanggal 10 Agustus Tahun 2010 bertepatan dengan Hari Konservasi 
              Alam Nasional sesuai dengan Berita Acara Pembentukan Smiling Coral Indonesia di 
              Kelurahan Pulau Panggang, Nomor : BA.01/SCI/VIII/2010, Tanggal 10 Agustus 2010. Pembentukan Kelompok Smiling Coral Indonesia melalui surat Keputusan Lurah Kelurahan Pulau Panggang Nomor : SK. 28 Tahun 2010 Tanggal 13 Juli 2020. 
              </p>
            </div>

            <div class="col-9 mt-4">
              <div class="content">
                <!-- <h3>IME</h3> -->
                <div class="row d-flex justify-content-stretch">

                  <div class="row col-12 col-lg-3 col-md-3 d-flex justify-content-center">
                    <div class="col-12 d-flex justify-content-center">
                      <div class="donation-room-people-box">
                        <img src="{{ asset('assets/img/donation/logo_smiling_trans.png') }}" class="donation-room-pic-box">
                      </div>
                    </div>
                  </div>

                  <div class="row col-12 col-lg-9 col-md-9 d-flex justify-content-center">
                    <div class="col-lg-12 my-2">
                      <h5 class="yellow-title">OUR DONATION TEAM</h5>
                    </div>
                    <div class="col-lg-12">
                      <p class="yellow-regular" style="text-align: justify; font-size: 16px; padding: 10px 0px 10px 0px;">
                      Smiling Coral Indonesia adalah sebuah kelompok masyarakat peduli lingkungan yang bergerak 
                      dibidang sains kelautan, konservasi alam, peduli lingkungan laut dan ekosistemnya serta 
                      pengembangan pariwisata berkelanjutan dan ramah lingkungan khususnya di Kawasan Kabupaten 
                      Administrasi Kepulauan Seribu Provinsi DKI Jakarta. Kelompok Masyarakat ini didirikan 
                      dengan maksud sebagai wadah dalam mencapai kemandirian dan kesejahteraan masyarakat melalui 
                      pendekatan sains kelautan, aktivitas konservasi alam, riset kelautan, pengembangan budidaya 
                      hasil laut, pengembangan pariwisata dan perikanan berkelanjutan yang ramah lingkungan serta 
                      mendorong masyarakat untuk memanfaatan sumber daya laut secara berkelajutan.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 row d-flex justify-content-center mt-4">
              <div class="content col-6">
                <!-- <h3>IME</h3> -->
                <div class="row d-flex justify-content-center align-items-center">

                  <div class="row col-12 col-lg-3 col-md-3 d-flex justify-content-center">
                    <div class="col-12 d-flex justify-content-center">
                      <div class="donation-room-logo-box d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/donation/donation_icon.png') }}">
                      </div>
                    </div>
                  </div>

                  <div class="row col-12 col-lg-9 col-md-9 d-flex justify-content-center">
                    <div class="col-lg-12 my-2">
                      <p class="yellow-title" style="font-size: 16px;">1262855961 a.n. Sylvie Siskawati (BNI)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 row d-flex justify-content-center mt-4">
              <div class="content col-6">
                <!-- <h3>IME</h3> -->
                <div class="row d-flex justify-content-center align-items-center">

                  <div class="row col-12 col-lg-3 col-md-3 d-flex justify-content-center">
                    <div class="col-12 d-flex justify-content-center">
                      <div class="donation-room-logo-box d-flex justify-content-center align-items-center">
                        <img src="{{ asset('assets/img/donation/whatsapp_icon.png') }}">
                      </div>
                    </div>
                  </div>

                  <div class="row col-12 col-lg-9 col-md-9 d-flex justify-content-center">
                    <div class="col-lg-12 my-2">
                      <p class="yellow-title" style="font-size: 16px;">085939231789 (Sylvie Siskawati)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>

      @include('footer')

      <!-- <img src="{{ asset ('assets/img/about.png') }}"/> -->
    </section><!-- End About Section -->

    @include('modals')
</body>

@include('default_footer_paid_page')

</html>
