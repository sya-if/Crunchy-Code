@extends('layouts.master')

@php($user = Auth::user())

@section('content')


<style>

/* CSS */
.button-85 {
  padding: 0.6em 2em;
  border: none;
  outline: none;
  color: rgb(255, 255, 255);
  background: #111;
  cursor: pointer;
  position: relative;
  z-index: 0;
  border-radius: 10px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-85:before {
  content: "";
  background: linear-gradient(
    45deg,
    #00ffd5,
    #002bff,
    #7a00ff,
    #ff00c8,
    #ff0000
  );
  position: absolute;
  top: -2px;
  left: -2px;
  background-size: 400%;
  z-index: -1;
  filter: blur(5px);
  -webkit-filter: blur(5px);
  width: calc(100% + 4px);
  height: calc(100% + 4px);
  animation: glowing-button-85 20s linear infinite;
  transition: opacity 0.3s ease-in-out;
  border-radius: 10px;
}

@keyframes glowing-button-85 {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 400% 0;
  }
  100% {
    background-position: 0 0;
  }
}

.button-85:after {
  z-index: -1;
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: #222;
  left: 0;
  top: 0;
  border-radius: 10px;
}
</style>

    <div class="main-container">
        <div class="pd-ltr-20 height-100-p xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="title">
                                <h4>Modul Pembelajaran Sains Komputer Tingkatan 4</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Module</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="blog-wrap">
                    <div class="container pd-0">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="blog-list">
                                    <ul>
                                        <!-- Bab 1 Pengaturcaraan -->
                                        <li>
                                            <div class="row no-gutters">
                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                    <div class="blog-img">
                                                        <img src="vendors/images/bab-1.png" alt="" class="bg_img">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-12 col-sm-12">
                                                    <div class="blog-caption">
                                                        <h4><a href="#"> BAB 1 PENGATURCARAAN </a></h4>
                                                        <div class="blog-by">
                                                            <p align="justify">
                                                                Penggunaan komputer, telefon pintar dan tablet telah menjadi satu keperluan dalam kehidupan masa kini. 
                                                                lnteraksi antara manusia dengan peralatan komunikasi telah mewujudkan satu bentuk bahasa yang dikenal sebagai bahasa pengaturcaraan. 
                                                                Pelbagai aplikasi telah direka menggunakan bahasa pengaturcaraan untuk membantu manusia dalam kehidupan harian. Adakah pengaturcaraan untuk membantu
                                                                anda menyelesaikan masalah ?
                                                            </p>
                                                            <div class="pt-10">
                                                                <!-- Modal Button -->
                                                                <button class="button-85" role="button" data-toggle="modal" data-target="#myModal-1">Tekan sini</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal that will display when clicked -->
                                            <div class="modal fade" id="myModal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Sub Bab 1 Pengaturcaraan</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body justify-content">
                                                            <!-- Replace the content below with your specific modal content -->
                                                            <button class="button-85 btn-block mb-4" role="button" href="#" >Module 1.1 Strategi Penyelesaian Masalah</button>
                                                            <button class="button-85 btn-block mb-4" role="button" href="#">Module 1.2 Algoritma</button>
                                                            <button class="button-85 btn-block mb-4" role="button" href="#">Module 1.3 Pemboleh Ubah, Pemalar dan Jenis Data</button>
                                                            <button class="button-85 btn-block mb-4" role="button" href="#">Module 1.4 Struktur Kawalan</button>
                                                            <button class="button-85 btn-block mb-4" role="button" href="#">Module 1.5 Amalan Terbaik Pengaturcaraan</button>
                                                            <button class="button-85 btn-block mb-4" role="button" href="#">Module 1.6 Struktur Data dan Modular</button>
                                                            <button class="button-85 btn-block mb-4" role="button" href="#">Module 1.6 Pembangunan Aplikasi</button>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>


                                        </li>

                                        <!-- Bab 2 Pangkalan Data -->
                                        <li>
                                            <div class="row no-gutters">
                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                    <div class="blog-img">
                                                        <img src="vendors/images/bab-2.png" alt="" class="bg_img">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-12 col-sm-12">
                                                    <div class="blog-caption">
                                                        <h4><a href="#"> BAB 2 PANGKALAN DATA  </a></h4>
                                                        <div class="blog-by">
                                                            <p align="justify">
                                                                Salah satu faktor kejayaan syarikat gergasi IT seperti Google, Amazon dan Facebook ialah kemampuan platform teknologi untuk menampung jumlah data yang sangat besar dan sentiasa bertambah. 
                                                                Cabaran utama bagi syarikat ini adalah untuk menampung kesemua data tersebut dan mengekalkan prestasi pencarian serta pengurusan data. 
                                                                Jika data diumpamakan sebagai satu perkataan, proses menyimpan dan mencari sesuatu perkataan dalam sebuah buku nota kecil tidaklah sukar. 
                                                                Sekarang, cuba anda bayangkan apabila buku tersebut disimpan di dalam perpustakaan sekolah anda. 
                                                                Bolehkah anda mencari perkataan tersebut dalam masa yang singkat? 
                                                            </p>
                                                            <div class="pt-10">
                                                                <!-- Modal Button -->
                                                                <button class="button-85" role="button" data-toggle="modal" data-target="#myModal-2">Tekan sini</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal that will display when clicked -->
                                            <div class="modal fade" id="myModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Sub Bab 2 Pangkalan Data</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body justify-content">
                                                            <!-- Replace the content below with your specific modal content -->
                                                            <button class="button-85 btn-block mb-4" role="button" href="#">Module 2.1 Pangkalan Data Hubungan</button>
                                                            <button class="button-85 btn-block mb-4" role="button" href="#">Module 2.2 Reka Bentuk Pangkalan Data Hubungan</button>
                                                            <button class="button-85 btn-block mb-4" role="button" href="#">Module 2.3 Pembangunan Pangkalan Data Hubungan</button>
                                                            <button class="button-85 btn-block mb-4" role="button" href="#">Module 2.4 Pembangunan Sistem Pangkalan Data</button>
                              
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                           
                                        </li>

                                        <!-- Bab 3 Interaksi Manusia dengan Komputer -->
                                        <li>
                                            <div class="row no-gutters">
                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                    <div class="blog-img">
                                                        <img src="vendors/images/bab-3.png" alt="" class="bg_img">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-12 col-sm-12">
                                                    <div class="blog-caption">
                                                        <h4><a href="#"> BAB 3 INTERAKSI MANUSIA DENGAN KOMPUTER  </a></h4>
                                                        <div class="blog-by">
                                                            <p align="justify">
                                                                lnteraksi ialah tindakan atau perhubungan aktif antara satu dengan yang lain. 
                                                                Pada era globalisasi ini, manusia dan komputer saling memerlukan di samping menjadi medium utama dalam pembangunan 
                                                                dan perkembangan pelbagai bidang. lnteraksi manusia-komputer adalah bidang kajian yang memfokuskan tentang bagaimana 
                                                                manusia berinteraksi dengan sistem komputer, termasuk reka bentuk antara muka pengguna dan proses penyampaian maklumat.
                                                            </p>
                                                            <div class="pt-10">
                                                                <!-- Modal Button -->
                                                                <button class="button-85" role="button" data-toggle="modal" data-target="#myModal-3">Tekan sini</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                             <!-- Modal that will display when clicked -->
                                             <div class="modal fade" id="myModal-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Sub Bab 2 Pangkalan Data</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body justify-content">
                                                            <!-- Replace the content below with your specific modal content -->
                                                            <button class="button-85 btn-block mb-4" role="button" href="#">Module 3.1 Reka Bentuk Interaksi</button>
                                                            <button class="button-85 btn-block mb-4" role="button" href="#">Module 3.2 Paparan dan Reka Bentuk Skrin</button>
           
                              
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            
                                        </li>
                                        
                                    </ul>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>

@endsection