@extends('layouts.master')

@php($user = Auth::user())

@section('content')
<style>
.card {
    display: inline-block;
    margin: 10px; /* Adjust margin as needed */
    padding: 20px;
}

.image-container {
    overflow: hidden;
}
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

.card-img-top {
    /* You can adjust the padding value as needed */
    padding: 10px !important;
}

</style>


<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Module</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Module</li>
                                <li class="breadcrumb-item active" aria-current="page">Module 1.1 Strategi Penyelesaian Masalah</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="blog-wrap">
                <div class="container pd-0">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="blog-detail card-box overflow-hidden mb-30">

                                <div class="blog-img" style="margin-bottom:20px">
                                    <img src="../../../vendors/images/Module/module1-1-landing-banner.png" alt="" style="width: 100%; height: auto;">
                                </div>
                                
                                <div class="blog-caption" >

                                    <!-- Heading -->
                                    <h4 class="mb-10"> Module 1.1.1 Pengenalan </h4>
                                    <p>
                                        Pengenalan membawa kita ke dalam dunia yang menggembirakan dan penting dalam pengaturcaraan - strategi penyelesaian masalah. 
                                        Dalam bab ini, kita akan memahami betapa pentingnya kemampuan untuk merumuskan dan menyelesaikan masalah dalam konteks pengaturcaraan. 
                                        Strategi penyelesaian masalah membentuk landasan utama bagi setiap pengaturcara yang berjaya.
                                    </p>
                                    
                                    <!-- Definisi Masalah -->
                                    <h5 class="mb-10">Definisi Masalah </h5>
                                    <p>
                                        Masalah adalah keraguan, situasi yang tidak diingini, cabaran dan peluang yang dihadapi dalam kehidupan seseorang. 
                                        Kemahiran membuat keputusan amat diperlukan untuk melahirkan generasi yang berkebolehan merancang strategi penyelesaian masalah. 
                                        Contohnya, kita perlu membuat keputusan tentang jenis makanan yang hendak dibeli di kantin dengan jumlah wang yang ada. 
                                    </p>

                                    <!-- Definisi Penyelesaian Masalah -->
                                    <h5 class="mb-10">Definisi Penyelesaian Masalah </h5>
                                    <p>
                                        Penyelesaian masalah ialah tunjang utama dalam sains komputer. Pengatur cara perlu memahami cara penyelesaian sesuatu masalah 
                                        dan menterjemahkan cara tersebut kepada algoritma yang dapat difahami oleh komputer. Penyelesaian masalah sebagai proses mengkaji butiran sesuatu masalah untuk mendapatkan satu penyelesaian (Businessdictionary.com) 
                                    </p>


                                    <!-- Gambaran Penyelesaian Masalah -->
                                    <div class="card-deck mb-30">
                                         <!-- Image 1 Container -->
                                        <div class="card">
                                            <img class="card-img-top" src="../../../vendors/images/Module/flowchart1.png" alt="Card image cap">
                                        </div>

                                        <!-- Image 2 Container -->
                                        <div class="card">
                                            <img class="card-img-top" src="../../../vendors/images/Module/code1.png" alt="Card image cap">
                                            <div class="card-body">

                                                <div class="col-lg-6 col-sm-12 mb-30">
                                                    <div class="pd-20 card-box height-100-p text-center">

                                                        <a href="#" class="button-85 btn-block" data-toggle="modal" data-target="#small-modal" type="button">
                                                            Run
                                                        </a>

                                                        <div class="modal fade" id="small-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-sm modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myLargeModalLabel">Output</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p> Hello Malaysia</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <p align="justify">
                                                    Anda boleh menekan butang di atas untuk melihat output yang akan dihasilkan sekiranya kita menjalankan kod tersebut di sebarang IDE.    
                                                </p>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            Crunchy Code Web Application System developed by Elysium
        </div>
    </div>
</div>

@endsection