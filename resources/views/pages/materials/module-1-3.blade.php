@extends('layouts.master')

@php($user = Auth::user())

@section('content')
<style>
.main-title{
    background-color: #0099ff;
    padding: 20px;
    border-radius: 10px;
}
.terminal {
    background-color: #2e2e2e;
    color: #00ff00; /* Green text */
    font-family: 'Courier New', monospace;
    border-radius: 8px;
    overflow: hidden;
    width: 500px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 20px auto;
}

.terminal p {
    padding: 20px;
    margin: 0;
}
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
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('module')}}"></a>Module</li>
                                <li class="breadcrumb-item active" aria-current="page">Module 1.3 Pemboleh Ubah, Pemalar dan Jenis Data</li>
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

                                <div class="main-title">
                                    <h3>Module 1.3: Pemboleh Ubah, Pemalar dan Jenis Data</h3>
                                </div>
                                
                                <div class="blog-caption" >
                                    <p>
                                        Pemboleh ubah atau pemalar dalam Java, perlu diisytiharkan sebelum
                                        digunakan. Konsep dan prosedurnya adalah sama seperti ingin melancong
                                        ke luar negara, iaitu seseorang individu perlu mengisytiharkan barang
                                        yang ada di dalam bagasi di pejabat Kastam.
                                    </p>
                                    <p>
                                        Dalam proses pengaturcaraan, seorang pengatur cara perlu
                                        mengisytiharkan jenis data yang diperlukan dalam sesuatu program yang
                                        hendak dilaksanakan.
                                    </p>

                                    <h5 class="mb-10">Pemboleh Ubah</h5>
                                    <p style=""><b>
                                        Penyelesaian masalah ialah tunjang utama dalam sains komputer. Pengatur cara perlu memahami cara penyelesaian sesuatu masalah 
                                        dan menterjemahkan cara tersebut kepada algoritma yang dapat difahami oleh komputer. Penyelesaian masalah sebagai proses mengkaji butiran sesuatu masalah untuk mendapatkan satu penyelesaian (Businessdictionary.com) 
                                    </b></p>
                                    <p>
                                        Pengatur cara perlu memberikan nama kepada setiap pemboleh ubah
                                        yang digunakan untuk menyelesaikan sesuatu masalah dalam program
                                        yang dibangunkan. Pengatur cara menggunakan nama pemboleh ubah
                                        sebagai nama rujukan untuk nilai spesifik pemboleh ubah tersebut.
                                        Komputer pula akan menggunakan nama pemboleh ubah tersebut sebagai
                                        rujukannya untuk mencari nilai pemboleh ubah itu dalam memorinya.
                                        Pemboleh ubah merupakan elemen dalam pengaturcaraan dan nilainya
                                        boleh berubah pada bila-bila masa sewaktu proses pengaturcaraan
                                        dilaksanakan.
                                    </p>

                                    </div>
                                    <!-- Gambaran Penyelesaian Masalah -->
                                    <div class="card-deck mb-30">
                                         <!-- Image 1 Container -->
                                        <div class="card">
                                            <img class="card-img-top" src="../../../vendors/images/Module/flowchart1.png" alt="Card image cap">
                                        </div>

                                        <!-- Image 2 Container -->
                                        <div class="card">
                                            <div class="terminal">
                                                <p>
                                                    public class kiraLuas <br>
                                                    { <br>
                                                        &nbsp;public static void main(String[] args) <br>
                                                        &nbsp;{ <br>
                                                        &nbsp;&nbsp;<b>float panjang = 10.2, lebar = 10.2, luas;</b><br>
                                                        &nbsp;&nbsp;luas = panjang * lebar;<br>
                                                        &nbsp;&nbsp;System.out.print("Luas = " + luas);<br>
                                                        &nbsp;} <br>
                                                    } <br>
                                                </p>
                                            </div>
                                            
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