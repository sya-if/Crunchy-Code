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
                                <li class="breadcrumb-item" aria-current="{{route('module')}}">Module</li>
                                <li class="breadcrumb-item active" aria-current="page">Module 1.1 Strategi Penyelesaian Masalah</li>
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
                                <h3>Module 1.1: Strategi Penyelesaian Masalah</h3>
                            </div>

                            <div class="blog-detail card-box overflow-hidden mb-30">

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
                                            
                                            <!-- Coding Displayed -->
                                            <div class="terminal">
                                                <p>
                                                    public class HelloMalaysia <br>
                                                    { <br>
                                                        &nbsp;public static void main(String[] args) <br>
                                                        &nbsp;{ <br>
                                                        &nbsp;&nbsp;//Declare the data type<br>
                                                        &nbsp;&nbsp;<b>String x</b><br><br>
                                                        &nbsp;&nbsp;//Berikan variable data untuk disimpan<br>
                                                        &nbsp;&nbsp;<b>String x</b><br><br>
                                                        &nbsp;&nbsp;//Paparkan data<br>
                                                        &nbsp;&nbsp;<b>System.out.println(x);</b><br>
                                                        &nbsp;} <br>
                                                    } <br>
                                                </p>
                                            </div>

                                            <br>
                                            <p>
                                                Anda boleh menekan butang di bawah untuk melihat output yang akan dihasilkan sekiranya kita menjalankan kod tersebut di sebarang IDE.    
                                            </p>

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


        <!-- Module 1.1.2 -->
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">

                <div class="blog-wrap">
                    <div class="container pd-0">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="blog-detail card-box overflow-hidden mb-30">
                                    
                                    <div class="blog-caption" >
    
                                        <!-- Pengenalan -->
                                        <h4 class="mb-10"> Module 1.1.2 Keperluan Penyelesaian Masalah Berstrategi </h4>
                                        <p class="text-formatting">
                                            Pelbagai masalah dalam kehidupan harian merupakan cabaran yang perlu diatasi. Masalah menghalang kita daripada mencapai apa yang diingini, di samping mengganggu kelancaran dan keselesaan hidup. Sesuatu masalah yang rumit memerlukan strategi penyelesaian masalah yang berkesan. Apakah faedah penggunaan strategi dalam penyelesaian masalah? 
                                        </p>

                                        <div class="card image-size" align="center">
                                            <img class="card-img-top" src="../../../vendors/images/Module/keperluan-1-2.jpg" alt="Card image cap">
                                        </div>

                                        <p class="text-center" style="color:#ff0000;"> Rajah: Keperluan Penyelesaian Masalah </p>
                                        
                                        <p class="text-formatting">
                                            Pembangunan aplikasi komputer berkait rapatdengan strategi penyelesaian masalah dalam pengaturcaraan komputer. Seseorang perlu menguasai strategi penyelesaian masalah supaya dapat memahami masalah dengan mudah bagi mendapatkan strategi penyelesaian yang terbaik. 
                                        </p>

                                        <p class="text-formatting" style="border: 2px solid #B4BDFF; padding: 10px; border-radius:8px;">
                                            <b>Penyelesaian masalah</b> sebagai proses mengkaji butiran sesuatu masalah untuk mendapatkan satu penyelesaian (Businessdictionary.com)
                                        </p>
                                        
                                        <p class="text-formatting">
                                            Komputer boleh digunakan untuk menyelesaikan masalah. Waiau bagaimanapun, cara penyelesaian terhadap masalah yang dihadapi haruslah jelas sebelum mengatasinya. Pemikiran komputasional (computational) membolehkan kita memahami masalah yang dihadapi dan membangunkan penyelesaian yang munasabah apabila kita menghadapi masalah yang kompleks. 
                                        </p>
                                        
                                        <!-- Teknik Pemikiran Komputasional -->
                                        <h4 class="mb-10"> Teknik Pemikiran Komputasional </h4>

                                        <!-- Teknik Leraian -->
                                        <h5>1. Teknik Leraian </h5><br>

                                        <p class="text-formatting">
                                            Memecahkan masalah kepada bahagian yang lebih kecil dan terkawal. Sebelum komputer menyelesaikan masalah, masalah dan cara untuk menyelesaikannya mestilah difahami. 
                                            Penguraian masalah membantu memecahkan masalah kompleks kepada bahagian yang mudah diuruskan. Begitu juga, kita cuba memahami bagaimana sistem yang kompleks berfungsi menggunakan teknik leraian.
                                            Contoh: Memahami cara sebuah basikal berfungsi akan jadi lebih mudah jika seluruh basikal itu dipecahkan kepada bahagian yang kecil. Rujuk rajah di bawah dan labelkan bahagian basikal yang dilukiskan.
                                        </p>

                                        <div class="card image-size" align="center">
                                            <img class="card-img-top" src="../../../vendors/images/Module/teknik-pemecahan.jpg" alt="Card image cap">
                                        </div>

                                        <p class="text-center" style="color:#ff0000;"> Rajah: Teknik leraian memecahkan basikal kepada bahagian-bahagian basikal </p>
                                    
                                        <!-- Teknik Leraian -->
                                        <h5>2. Pengecaman Corak (Pattern Recognition) </h5><br>

                                        <p class="text-formatting">
                                            Mencari persamaan similaritieSJ antara masalah dan dalam masalah. Apabila kita telah meleraikan masalah yang kompleks kepada bahagian yang mudah urus dengan teknik leraian, ini membantu dalam mengenal pasti persamaan atau corak yang ada pada setiap bahagian masalah yang kecil. Corak-corak ini dapat membantu menyelesaikan masalah kompleks dengan lebih efisien.
                                            Bayangkan kita hendak mengetahui cara sesebuah basikal berfungsi. Ciri-ciri basikal ialah mempunyai dua buah roda yang berputar, 
                                            hendal untuk menguasai hala tuju, pedal untuk menggerakkan basikal dan rantai yang menjadi penyambung supaya basikal dapat berfungsi. 
                                            Jadi, kita boleh melukis gambar basikal berdasarkan ciri-ciri di atas. Oalam pemikiran komputasional, ciri-ciri ini dikenal sebagai corak. Cuma yang berbeza secara spesifik ialah warna basikal, bunyi loceng atau saiz roda.
                                        </p>

                                        <div class="card image-size" align="center">
                                            <img class="card-img-top" src="../../../vendors/images/Module/pengecaman-corak.png" alt="Card image cap">
                                        </div>

                                        <p class="text-center" style="color:#ff0000;"> Rajah: Teknik pengecaman corak di basikal </p>

                                        <!-- Teknik Leraian -->
                                        <h5>3. Peniskalaan (Abstraction) </h5><br>

                                        <p class="text-formatting">
                                            Peniskalaan adalah penting supaya dapat menjana penyelesaian yang tepat kepada masalah yang dihadapi. 
                                            Contohnya, untuk menghasilkan sebuah basikal, jika tidak meniskalakan ciri-ciri umum dan spesifik, kita berkemungkinan akan menghasilkan basikal yang beroda kecil dan berbakul di hendalnya,
                                            iaitu merupakan satu penyelesaian yang tidak tepat. Satu model basikal ialah basikal yang mempunyai dua roda, hendal dan pedal. Ciri spesifik seperti saiz roda, berbakul atau berloceng dan warna rangka hendaklah diabaikan.
                                        </p>

                                        <div class="card image-size" align="center">
                                            <img class="card-img-top" src="../../../vendors/images/Module/teknik-peniskalaan.png" alt="Card image cap">
                                        </div>

                                        <p class="text-center" style="color:#ff0000;"> Rajah: Teknik peniskalaan di basikal </p>
                                        

                                        <!-- Teknik Algoritma -->
                                        <h5>4. Algoritma (Algorithms) </h5><br>

                                        <p class="text-formatting">
                                            Membangunkan penyelesaian langkah demi langkah terhadap masalah yang dihadapi atau mematuhi peraturan untuk menyelesaikan masalah. Algoritma merupakan suatu pelan, iaitu satu set langkah arahan untuk menyelesaikan masalah. Jika anda boleh mengikat tali kasut, membuat secawan kopi, atau menyediakan makanan, anda telah tahu mengikut sesuatu algoritma.
                                            Dalam algoritma, setiap arahan dikenal pasti dan susunan pelaksanaannya dijalankan seperti yang dirancang. Algoritma juga digunakan sebagai titik mula untuk rekaan program komputer dalam bentuk carta alir dan pseudokod.
                                        </p>

                                        <!-- Coding Displayed -->
                                        <div class="terminal" style="width:70%;">
                                            <p>

                                                &nbsp;Mula<br>
                                                &nbsp;&nbsp;OUPUT "Mempunyai 2 roda yang berputar?" <br>
                                                &nbsp;&nbsp;INPUT "Ya" <br>
                                                &nbsp;&nbsp;OUTPUT "Hendal untuk menguasai hala tuju?"<br>
                                                &nbsp;&nbsp;INPUT "Ya" <br>
                                                &nbsp;&nbsp;OUTPUT "Pedal dan rantai untuk menggerakkan basikal? <br>
                                                &nbsp;&nbsp;INPUT "Ya" <br>
                                                &nbsp;&nbsp;OUTPUT "Ini ialah sebuah basikal." <br>
                                                &nbsp;Tamat<br>               
                                            </p>
                                        </div>

                                        <p class="text-center" style="color:#ff0000;"> Rajah: Teknik algoritma untuk menentukan aspek basikal </p>
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