@extends('layouts.master')

@php($user = Auth::user())

@section('content')
<style>

body p{
    text-align: justify
}

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
    width: 480px;
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

.blog-caption .mb-10{
    color: #111;
}

#imgincard{
    margin-top: 80px;
}

#img-small{
    display: block;
    margin: 0 auto;
    width: 200px;
    height: 200px;
}

.module-img{
    display: flex;
    flex-direction: column;
    align-items: center;
}

.module-img img{
    width: 70%;
    height: auto;
}

.module-img p{
    color: #ff0000;
    margin-top: 10px;
    text-align: center;
}

.shadow-box
{
    box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
}

.colour-box
{
   background: lightsteelblue;
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

.table-bordered, td {
    border: 2px solid black; /* Adjust the width and color as needed */
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
                                <li class="breadcrumb-item active" aria-current="page">Module 3.2 Paparan dan Reka Bentuk Skrin</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="blog-wrap">
                <div class="container pd-0">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            
                            <div class="card-box blog-caption mb-20 shadow-box colour-box" style="padding:30px;" align="center">
                                <h3>Module 3.2: Paparan dan Reka Bentuk Skrin</h3>
                            </div>
                            
                            {{-- Section intro --}}
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                <div class="blog-caption">
                                    <h4 class="mb-10">Pendahuluan</h4>
                                    <p>
                                        Kehidupan manusia kini bergantung lebih kepada penggunaan <b>produk interaktif</b>.
                                        Untuk tujuan itu, pembangun bagi <b>produk interaktif</b> perlu mereka bentuk
                                        “<b>antara muka</b>” pengguna yang mesra pengguna, mudah, menyeronokkan dan
                                        fleksibel. Contoh <b>produk interaktif</b> yang biasa digunakan ialah seperti telefon
                                        bimbit, mesin pengeluaran wang automatik (Automated Teller Machine ), mesin
                                        pembelian tiket tren dan sebagainya.
                                    </p>
                                    <img class="card-img-top" src="../../../vendors/images/module3-2/hp.png" alt="" style="display: block; margin: 0 auto; width: 30%; height: auto;">
                                    <p style="text-align: center; margin-top: 10px; color: #ff0000">
                                        Rajah: Contoh paparan dan reka bentuk
                                        skrin telefon bimbit berasaskan
                                        sistem pengoperasian Android
                                    </p>
                                    <img class="card-img-top" src="../../../vendors/images/module3-2/desktop.jpg" alt="" style="display: block; margin: 0 auto; width: 30%; height: auto;">
                                    <p style="text-align: center; margin-top: 10px; color: #ff0000">
                                        Rajah: Contoh paparan dan reka bentuk
                                        skrin komputer
                                    </p>
                                    <p>
                                        <b>Paparan dan reka bentuk skrin</b> memainkan peranan yang penting dalam
                                        membangunkan sesebuah program atau perisian. Reka bentuk yang <b>mudah</b>
                                        dan <b>lengkap</b> serta mesra pengguna perlu dititikberatkan oleh seorang
                                        pereka bentuk skrin. Walau bagaimanapun, seorang pereka bentuk <b>tidak
                                        akan mendapat penyelesaian yang tepat untuk pertama kalinya</b>. Proses
                                        mereka bentuk paparan skrin akan melalui <b>proses yang sama berulang kali</b>
                                        sehingga benar-benar menjadi produk yang baik dan menepati keperluan
                                        pengguna.
                                    </p>
                                    <p>
                                        Proses reka bentuk interaksi terdiri daripada empat aktiviti
                                        asas iaitu mewujudkan keperluan (establishing requirements), mereka
                                        bentuk kaedah atau alternatif yang dapat memenuhi keperluan tersebut,
                                        menghasilkan prototaip reka bentuk supaya prototaip tersebut boleh
                                        disampaikan selari dengan keperluan produk dan membuat penilaian ke
                                        atas reka bentuk produk tersebut.
                                    </p>
                                    <img class="card-img-top" src="../../../vendors/images/module3-2/process.png" alt="" style="display: block; margin: 0 auto; width: 50%; height: auto;">
                                    <p style="text-align: center; margin-top: 10px; color: #ff0000">
                                        Rajah: Proses reka bentuk interaksi
                                    </p>

                                    <div style="background-color:#e0dcf4; border-radius:10px; margin:20px 0px 20px 0px; padding:20px;">
                                        <p><b>1. Mengenal pasti Keperluan Interaksi</b></p>
                                        <p>
                                            <b>Keperluan produk</b> perlu diberikan penekanan supaya dapat mencapai
                                            matlamat produk yang dibina, dan dapat menyelesaikan masalah yang
                                            telah dikenal pasti. Pereka bentuk perlu <b>mengetahui pengguna yang
                                            disasarkan</b> untuk menggunakan produk yang akan dihasilkan dan
                                            matlamat atau tujuan pengguna menggunakan produk tersebut. Pereka
                                            bentuk juga perlu <b>membuat pemerhatian kepada produk sedia ada</b> dan
                                            <b>mengkaji penyelesaian masalah yang sedia ada dalam produk yang
                                            lain</b>. Dalam membangunkan sesuatu produk yang interaktif, keperluan,
                                            aspirasi dan <b>jangkaan pengguna perlu dibincangkan, dihalusi, dijelaskan
                                            dan mungkin perlu diskopkan semula</b>.
                                        </p>
                                        <p>
                                            Maklumat mengenai <b>keperluan pengguna terhadap sesuatu produk</b>
                                            boleh dikenal pasti melalui beberapa kaedah. Antara kaedah yang
                                            sering digunakan ialah melalui <b>borang soal selidik</b>, <b>temu ramah</b>, <b>ajian
                                            tindakan</b>, <b>maklum balas</b>, <b>tinjauan dan pemerhatian kumpulan sasaran</b>,
                                            <b> borang tinjauan secara atas talian</b> dan banyak lagi kaedah yang boleh
                                            diguna pakai. Hasil tinjauan daripada mana-mana kaedah ini akan
                                            dianalisis untuk <b>mengetahui keperluan daripada pengguna terhadap
                                            apakah aktiviti interaksi yang diperlukan bagi produk yang akan
                                            dibangunkan</b>. Jadual di bawah menunjukkan contoh paparan dan kandungan
                                            yang dicadangkan untuk borang tinjauan.
                                        </p>
                                        <table class="table table-bordered">
                                            <thead style="background-color: brown; color: white;">
                                                <tr>
                                                    <th colspan=2 style="background-color: orange; border: 1px solid #fff;">Maklumat Umum Analisis Keperluan Produk</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="background-color: #ffe6e6; border: 1px solid #000; width:50%;">Tajuk produk</td>
                                                    <td style="background-color: #ffe6e6; border: 1px solid #000;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color: #ffe6e6; border: 1px solid #000;">Kumpulan sasaran</td>
                                                    <td style="background-color: #ffe6e6; border: 1px solid #000;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color: #ffe6e6; border: 1px solid #000;">Isu / masalah / keperluan yang dikenal pasti (daripada pengguna)</td>
                                                    <td style="background-color: #ffe6e6; border: 1px solid #000;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color: #ffe6e6; border: 1px solid #000;">Cadangan penyelesaian</td>
                                                    <td style="background-color: #ffe6e6; border: 1px solid #000;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color: #ffe6e6; border: 1px solid #000;">Cadangan penyelesaian sedia ada daripada produk yang lain</td>
                                                    <td style="background-color: #ffe6e6; border: 1px solid #000;"></td>
                                                </tr>
                                            </tbody>
                                            <thead style="background-color: brown; color: white;">
                                                <tr>
                                                    <th colspan=2 style="background-color: orange; border: 1px solid #fff;">Maklumat Penetapan Keperluan Interaksi Pada Reka Bentuk yang akan dibina</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="background-color: #ffe6e6; border: 1px solid #000; width:50%;">Aktiviti fungsi utama</td>
                                                    <td style="background-color: #ffe6e6; border: 1px solid #000;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="background-color: #ffe6e6; border: 1px solid #000;">Aktiviti fungsi yang dimasukkan pada produk (senaraikan)</td>
                                                    <td style="background-color: #ffe6e6; border: 1px solid #000;"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div style="background-color:#ffe4cc; border-radius:10px; margin:20px 0px 20px 0px; padding:20px;">
                                        <p><b>2. Membangunkan Reka Bentuk Alternatif</b></p>
                                        <p>
                                            Setelah <b>memperoleh hasil dapatan daripada kaedah yang digunakan
                                            semasa mewujudkan keperluan</b>, pereka bentuk perlu <b>memikirkan
                                            beberapa alternatif yang dirasakan sesuai</b> digunakan untuk <b>mengatasi
                                            masalah yang dihadapi</b>. <b>Reka bentuk alternatif</b> ialah cadangan beberapa
                                            idea reka bentuk yang berbeza namun masih dapat menterjemahkan
                                            dengan tepat akan <b>keperluan yang telah dikenal pasti pada proses
                                            yang pertama.</b>
                                        </p>
                                        <p>
                                            Bagaimanakah kita dapat <b>menjana reka bentuk alternatif</b>? Penjanaan
                                            reka bentuk alternatif boleh datang daripada pemerhatian ke atas reka
                                            bentuk produk yang lain, reka bentuk yang sama, dan daripada proses
                                            <b>inspirasi</b> dan <b>kreativiti</b> hasil daripada pengalaman pereka sendiri.
                                            Sumber-sumber ini boleh menjadi sangat dekat dengan produk baharu
                                            yang dimaksudkan, seperti <b>produk pesaing</b>, atau <b>versi terdahulu sistem
                                            yang serupa</b>, atau <b>sesuatu yang sama sekali berbeza</b>.
                                        </p>
                                        <p>
                                            Pada fasa ini, penggunaan <b>papan cerita</b> amat diperlukan untuk
                                            <b>memahami aliran kerja produk yang akan dibangunkan</b>. Selain itu
                                            juga, <b>lakaran beberapa produk alternatif</b> juga perlu dihasilkan dengan
                                            tujuan pengguna dapat membuat pilihan yang terbaik. Fasa ini boleh
                                            dibahagikan kepada dua sub komponen iaitu reka bentuk konsep dan
                                            reka bentuk fizikal. Reka bentuk konsep <b>melibatkan penghasilan model
                                            konsep</b> untuk produk serta menerangkan apa yang boleh dilakukan oleh
                                            produk, ciri serta gambaran produk tersebut. Reka bentuk fizikal pula
                                            menitikberatkan butir-butir terperinci mengenai produk termasuklah
                                            warna, audio, imej, reka bentuk menu dan ikon yang akan digunakan.
                                            Setiap aspek yang ada dalam “antara muka” akan diambil kira.
                                        </p>
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