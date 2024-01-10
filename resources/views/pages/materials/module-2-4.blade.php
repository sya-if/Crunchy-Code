@extends('layouts.master')

@php($user = Auth::user())

@section('content')
<style>

/* Dropdown CSS */


/* Dropdown CSS End */

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

.shadow-box
{
    box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
}

.colour-box
{
   background: lightsteelblue;
}

.terminal 
{
    background-color: #2e2e2e;
    color: #00ff00; /* Green text */
    font-family: 'Courier New', monospace;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: auto;
}

.terminal p 
{
    padding: 20px;
    margin: 0;
}

.image-size
{
    width: 55%;
    margin-left: auto;
    margin-right: auto;
    display: block;
}

.text-formatting
{
    text-align: justify;
}
.subheader
{
    color: #711DB0; /* Green text */
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
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('module')}}">Module</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Module 2.4: Pembangunan Sistem Pangkalan Data/li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div>
                <div class="container pd-0">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            
                            <div class="card-box blog-caption mb-20 shadow-box colour-box" style="padding:30px;" align="center">
                                <h3>Module 2.4: Pembangunan Sistem Pangkalan Data</h3>
                            </div>

                            <div class="blog-detail card-box overflow-hidden mb-30">

                                <div class="blog-caption" >

                                    <!-- Add your captions -->

                                    <!-- Pengenalan -->
                                    <h4 class="mb-10"> Pengenalan </h4>
                                    <p class="text-formatting">
                                        Pangkalan data menyimpan rekod-rekod secara tersusun supaya data­data mudah diisih, mudah dicari dan mudah dikemas kini. Pangkalan data menjadi komponen yang penting bagi sesebuah sistem maklumat kerana terdapat banyak data yang perlu diuruskan dalam sistem maklumat. Banyak contoh sistem maklumat yang menggunakan pangkalan data, misalnya sistem perbankan atas talian, sistem penempahan tiket penerbangan, laman sosial, sistem pinjaman buku perpustakaan, sistem maklumat murid sekolah dan sistem markah peperiksaan. 
                                        Pembangun perisian boleh membina perisian sistem atau perisian aplikasi yang boleh berhubung dengan sistem pangkalan data. Sistem pangkalan data seperti Microsoft Access, Microsoft SOL, MySOL, Oracle SOL dan sebagainya membantu penghasilan pangkalan data dan "antara muka" untuk melihat atau menyunting rekod pangkalan data. Jenis-jenis "antara muka" termasuklah borang (form), query, viewdan laporan (reportJ. 
                                        Oleh sebab kepentingan peranan pangkalan data dalam sistem maklumat, pembangunan sistem pangkalan data perlulah dilakukan secara sistematik supaya memenuhi keperluan pengguna. Fasa-fasa utama ialah merancang, menganalisis, mereka bentuk, membina dan menyelenggara sistem pangkalan data.
                                                                                
                                    </p>
                                    
        
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>

        <!-- Add section -->


        <div class="footer-wrap pd-20 mb-20 card-box">
            Crunchy Code Web Application System developed by Elysium
        </div>
    </div>
</div>

@endsection