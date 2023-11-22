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
                                <li class="breadcrumb-item"><a href="{{url('/module')}}">Module</a></li>
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
                            
                            <div class="card-box blog-caption mb-20 shadow-box colour-box" style="padding:30px;" align="center">
                                <h3>Module 1.3: Pemboleh Ubah, Pemalar dan Jenis Data</h3>
                            </div>
                            
                            {{-- Section intro --}}
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                <div class="blog-caption">
                                    <h4 class="mb-10">Pendahuluan</h4>
                                    <p>
                                        Pemboleh ubah atau pemalar dalam Java, perlu diisytiharkan sebelum digunakan. Konsep dan prosedurnya adalah sama seperti ingin melancong ke luar negara, iaitu seseorang individu perlu mengisytiharkan barang yang ada di dalam bagasi di pejabat Kastam. Dalam proses pengaturcaraan, seorang pengatur cara perlu mengisytiharkan jenis data yang diperlukan dalam sesuatu program yang hendak dilaksanakan.
                                    </p>

                                    <br>
                                    <h5 class="mb-10">Pemboleh Ubah</h5>
                                    <p>
                                        Pemboleh ubah ialah <b>ruang simpanan sementara untuk nombor, teks dan objek.</b> Nilai pemboleh ubah sentiasa berubah semasa berlakunya pemprosesan dan tidak akan memegang sebarang nilai selepas program tamat.
                                    </p>
                                    <p>
                                        Pengatur cara perlu memberikan nama kepada setiap pemboleh ubah yang digunakan untuk menyelesaikan sesuatu masalah dalam program yang dibangunkan. Pengatur cara menggunakan nama pemboleh ubah sebagai nama rujukan untuk nilai spesifik pemboleh ubah tersebut. Komputer pula akan menggunakan nama pemboleh ubah tersebut sebagai rujukannya untuk mencari nilai pemboleh ubah itu dalam memorinya. Pemboleh ubah merupakan elemen dalam pengaturcaraan dan nilainya boleh berubah pada bila-bila masa sewaktu proses pengaturcaraan dilaksanakan.
                                    </p>
                                    
                                    <!-- Gambaran Penyelesaian Masalah -->
                                    <div class="card-deck mb-30">
                                         <!-- Container 1 -->
                                        <div class="card">
                                            <img class="card-img-top" id="imgincard" src="../../../vendors/images/module1-3/pembolehubah.jpg" alt="">
                                            <p style="text-align: center; margin-top: 10px; color: #ff0000">Rajah: Contoh penggunaan pemboleh ubah</p>
                                            <p align="justify" style="margin-top: 130px;">
                                                Contoh diatas adalah dalam situasi kos sepasang kasut. Item input ini perlu diberikan satu nama pemboleh ubah kerana kos sepasang kasut mungkin berubah mengikut jenis kasut. Nama pemboleh ubah sepatutnya konsisten dengan nilai pemboleh ubah. Dalam kes ini, nama pemboleh ubah ialah kosKasut kerana nama ini merujuk kos sepasang kasut. Sekiranya kos sepasang kasut berubah, nilai pemboleh ubah akan berubah tetapi nama pemboleh ubah tidak akan berubah.
                                            </p>
                                        </div>

                                        <!-- Container 2 -->
                                        <div class="card">
                                            <div class="terminal">
                                                <p>
                                                    public class kiraLuas <br>
                                                    { <br>
                                                        &nbsp;public static void main(String[] args) <br>
                                                        &nbsp;{ <br>
                                                        &nbsp;&nbsp;<b>float panjang = 10.2, lebar = 10.2, luas;</b><br>
                                                        &nbsp;&nbsp;luas = panjang * lebar;<br>
                                                        &nbsp;&nbsp;System.out.print("Luas = " + luas + "m^2");<br>
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
                                                                        <p> Luas = 104.04m^2</p>
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
                                    <br>
                                    <h5 class="mb-10">Pemalar</h5>
                                    <p>
                                        Sewaktu proses pengaturcaraan dilaksanakan, nilai pemalar adalah tetap dan tidak akan berubah. Pemalar biasanya digunakan semasa pengatur cara ingin mengisytiharkan nilai yang tidak berubah. Contohnya, nilai Pi (π), bilangan hari dalam seminggu, bilangan jam dalam sehari, kadar pertukaran nilai mata wang Malaysia dan sebagainya.
                                    </p>
                                    <div class="terminal">
                                        <p style="text-align: initial">
                                            //Pengisytiharan pemalar <br>
                                            <b>final double pi = 3.142;</b><br><br>
                                            //Pengisytiharan pemalar <br>
                                            <b>final int BILANGAN_JAM_DALAM_SEHARI = 24;</b><br><br>
                                            //Pengisytiharan pemboleh ubah <br>
                                            <b>final int BILANGAN_HARI_DALAM_SEMINGGU = 7;</b><br><br>
                                            //Pengisytiharan pemalar <br>
                                            <b>final double Dolar_Singapura_kepada_Ringgit_Malaysia = 3.03;</b>
                                        </p>
                                    </div>
                                    <br>
                                    <h5 class="mb-10" id="jenisdata1">Jenis Data</h5>
                                    <p>
                                        Jenis data dalam bahasa pengaturcaraan merujuk satu set data yang mempunyai nilai dan ciri-ciri yang telah ditetapkan.
                                    </p>
                                    <div class="module-img">
                                        <img src="../../../vendors/images/module1-3/jenisdata1.jpg" alt="">
                                        <p> Jadual: Jenis data dan contoh penggunaan nilai yang dibenarkan</p>
                                    </div>
                                    <p>
                                        Data merupakan satu elemen yang memainkan peranan yang penting dalam sesebuah pengaturcaraan. Data yang dimasukkan dalam pengaturcaraan akan diproses untuk menghasilkan output bagi sesuatu permasalahan yang wujud. Jenis data boleh dikategorikan kepada dua kelas, iaitu data primitif dan data bukan primitif.
                                    </p>
                                    <div class="module-img">
                                        <img src="../../../vendors/images/module1-3/jenisdata2.jpg" alt="">
                                        <p>Rajah: Jenis data dalam bahasa pengaturcaraan</p>
                                    </div>
                                </div>
                            </div>

                            {{-- Section 1.3.1 --}}
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                <div class="blog-caption">
                                    <h4 class="mb-10">Module 1.3.1: Hubungan antara Jenis Data, Saiz Data dan Kapasiti Ingatan Komputer</h4>
                                    <p>
                                        Setiap jenis data dan saiz data akan disimpan dalam ingatan komputer. Nama pemboleh ubah memainkan peranan yang penting dalam menentukan saiz data dalam ingatan. Berdasarkan jenis data yang digunakan pada pemboleh ubah, sistem operasi akan menentukan apa-apa yang boleh disimpan dalam ingatan komputer. Kepelbagaian penggunaan jenis data pada pemboleh ubah dapat menjimatkan ruang pada ingatan komputer. Oleh itu, penggunaan jenis data yang sesuai diperlukan untuk nilai yang panjang supaya menjimatkan ruang ingatan komputer. (Boleh rujuk <a href="#jenisdata1"><b>Jadual Jenis Data</b></a>).
                                    </p>
                                </div>
                            </div>

                            {{-- Section 1.3.2 --}}
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                <div class="blog-caption">
                                    <h4 class="mb-10">Module 1.3.2: Pemilihan dan Penggunaan Jenis Data yang Bersesuaian</h4>
                                    <p>
                                        Pemilihan dan penggunaan data yang sesuai amat penting dalam sesebuah atur cara supaya atur cara dapat dibangunkan tanpa ralat sintaks. Jenis data bagi pemboleh ubah dan pemalar yang menentukan jenis maklumat akan disimpan dalam ruang ingatan yang diperuntukkan. Penggunaan jenis data yang sesuai juga berfungsi sebagai penanda aras kepada sesuatu pemboleh ubah itu sama ada pemboleh ubah tersebut menyimpan data yang tetap, data yang boleh dikira, huruf, nombor perpuluhan atau data yang mempunyai pilihan benar atau palsu.
                                    </p>
                                    <div class="card-deck mb-30">
                                        <!-- Container Jenis Data -->
                                       <div class="card">
                                            <h5 class="mb-10" style="text-align: center;">Integer (int)</h5>
                                            <h6 class="mb-10">Apakah Integer?</h6>
                                            <p>
                                                Integer merangkumi semua nombor yang tidak mempunyai pecahan atau perpuluhan. Integer ialah nombor asal yang lebih besar daripada bait. Integer boleh bernilai antara –2147483648 hingga 2147483648.
                                            </p>
                                            <h6 class="mb-10" style="margin-top: 70px;">Apakah yang perlu dilakukan untuk mengisytiharkan pemboleh ubah?</h6>
                                            <p>
                                                Pengatur cara perlu menggunakan kata kunci integer.
                                            </p>
                                            <div class="terminal" style="margin-top: 35px;">
                                                <p style="text-align: initial">
                                                    <b>int nombor_pertama, nombor_kedua, jawapan;</b><br>
                                                    nombor_pertama = 10;<br>
                                                    nombor_kedua = 20;<br>
                                                    jawapan = nombor_pertama + nombor_kedua;
                                                </p>
                                            </div>
                                       </div>
                                       <div class="card">
                                            <h5 class="mb-10" style="text-align: center;">Nombor Nyata (float, double)</h5>
                                            <h6 class="mb-10">Apakah Nombor Nyata?</h6>
                                            <p>
                                                Nombor nyata ialah nombor yang terdiri daripada semua nombor yang mempunyai titik perpuluhan atau bahagian pecahan. Nombor nyata bernilai antara: 1.79769313486231e308 hingga 4.94065645841247e-324, jika nombor adalah negatif, dan 1.79769313486231E308 hingga 4.94065645841247E-324, jika nombor adalah positif.
                                            </p>
                                            <h6 class="mb-10">
                                                Apakah yang perlu dilakukan untuk mengisytiharkan pemboleh ubah yang boleh menyimpan nombor perpuluhan yang besar?
                                            </h6>
                                            <p>
                                                Pengatur cara perlu menggunakan kata kunci Double.
                                            </p>
                                            <div class="terminal">
                                                <p style="text-align: initial">
                                                    <b>float tinggi1, tapak1;</b>  //Pengisytiharan pemboleh ubah <br>
                                                    <b>double luas;</b>    //Pengisytiharan pemboleh ubah <br>
                                                    “//” digunakan apabila ingin menerangkan kod arahan <br>
                                                    yang berada dalam satu baris.
                                                </p>
                                            </div>
                                       </div>
                                    </div>
                                    <div class="card-deck mb-30">
                                        <!-- Container Jenis Data -->
                                       <div class="card">
                                            <h5 class="mb-10" style="text-align: center;">Aksara/Rentetan (char/string)</h5>
                                            <h6 class="mb-10">Apakah aksara/rentetan?</h6>
                                            <p>
                                                Aksara dan rentetan merupakan data dalam bentuk ruang kosong (space), teks, perkataan atau nilai yang mengandungi susunan aksara atau simbol.
                                            </p>
                                            <h6 class="mb-10" style="margin-top: 50px;">
                                                Apakah yang perlu dilakukan untuk mengisytiharkan pemboleh ubah rentetan (string)?
                                            </h6>
                                            <p>
                                                Pengatur cara perlu menggunakan data jenis String.
                                            </p>
                                            <div class="terminal" style="margin-top: 55px;">
                                                <p style="text-align: initial">
                                                    <b>char ampersand = '@';
                                                    String email_address = "meme@me.com";</b>
                                                </p>
                                            </div>
                                       </div>
                                       <div class="card">
                                            <h5 class="mb-10" style="text-align: center;">Boolean</h5>
                                            <h6 class="mb-10">Apakah Boolean?</h6>
                                            <p>
                                                Boolean ialah data dalam bentuk pilihan, iaitu memilih salah satu daripada sesuatu yang "benar" (True) atau "palsu" (False).
                                            </p>
                                            <h6 class="mb-10" style="margin-top: 70px;">
                                                Apakah yang perlu dilakukan untuk mengisytiharkan pemboleh ubah?
                                            </h6>
                                            <p>
                                                Pengatur cara perlu menggunakan kata kunci "benar" atau "palsu".
                                            </p>
                                            <div class="terminal" style="margin-top: 35px;">
                                                <p style="text-align: initial">
                                                    <b>boolean forLeft = false;
                                                    boolean forStraight = true;
                                                    boolean forRight = false;</b>
                                                </p>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- Section 1.3.3 --}}
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                <div class="blog-caption">
                                    <h4 class="mb-10">Module 1.3.3: Perbezaan Pemboleh Ubah Sejagat dan Setempat</h4>
                                    <p>
                                        Setiap pemboleh ubah dan pemalar mungkin wujud dan akan digunakan untuk keseluruhan atur cara atau hanya bagi satu fungsi. Kewujudan pemboleh ubah atau pemalar dikenal sebagai kawasan yang kedua- duanya boleh digunakan secara sah. Pemboleh ubah dan pemalar bagi pengatur cara terdiri daripada dua skop iaitu:
                                    </p>
                                    <ol>
                                        <li>
                                            <p><b>Pemboleh ubah sejagat (Global)</b></p>
                                            <ul>
                                                <li>Pemboleh ubah sejagat hanya berfungsi dalam atur cara sahaja.</li>
                                                <li>
                                                    Penggunaan pemboleh ubah sejagat adalah semasa dalam fungsi atur cara sahaja. Apabila tatacara itu telah tamat, ruang memori yang diperuntukkan kepada pemboleh ubah dan pemalar juga akan tamat.
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <p><b>Pemboleh ubah setempat (Local)</b></p>
                                            <ul>
                                                <li>Pemboleh ubah setempat hanya berfungsi dalam subatur cara yang diisytiharkan.</li>
                                                <li>
                                                    Digunakan dalam fungsi 'di mana' pemboleh ubah diisytiharkan, bermula 'dari mana' pemboleh ubah diisytiharkan dan bila penamat akhir tatacara tersebut.
                                                </li>
                                            </ul>
                                        </li>
                                    </ol>
                                    <p style="margin-top: 20px;">Lihat ciri-ciri pemboleh ubah sejagat dan pemboleh ubah setempat dibawah.</p>
                                    <div class="module-img">
                                        <img src="../../../vendors/images/module1-3/globallocalvar.jpg" alt="">
                                        <p>Jadual: Perbezaan ciri-ciri antara pemboleh ubah sejagat dengan pemboleh ubah setempat</p>
                                    </div>
                                    <div class="terminal">
                                        <p style="text-align: initial">
                                            public class A<br>
                                            {<br>
                                            &nbsp;int data = 50;<br>
                                            <b>&nbsp;static int m = 100;//pemboleh ubah sejagat<br></b>
                                            &nbsp;public static void main(String[] args)<br>
                                            &nbsp;{<br>
                                            <b>&nbsp;&nbsp;int n = 90;//pemboleh ubah setempat<br></b>
                                            &nbsp;}<br>
                                            }//end of class
                                        </p>
                                    </div>
                                    <p style="text-align: center; color: #ff0000">
                                        Kod: Contoh atur cara yang menggunakan pemboleh ubah sejagat dan pemboleh ubah setempat
                                    </p>
                                </div>
                            </div>
                            
                            {{-- Section 1.3.4 --}}
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                <div class="blog-caption">
                                    <h4 class="mb-10">Module 1.3.4: Pengisytiharan, Permulaan dan Penetapan Nilai pada Pemboleh Ubah dan Pemalar</h4>
                                    <p>
                                        Sebelum membangunkan sesuatu atur cara, pemboleh ubah dan pemalarperlu melalui proses pengisytiharan, permulaan dan penetapan nilai.
                                    </p>
                                    <h5 class="mb-10">Pengisytiharan Nilai Pemboleh Ubah</h5>
                                    <p>
                                        Pemboleh ubah dikenal sebagai tempat untuk menyimpan data. Setiap pemboleh ubah di dalam Java mempunyai jenis yang tertentu, yang menentukan saiz dan susun atur memori dan set operasi yang boleh digunakan untuk pemboleh ubah. Anda mestilah mengisytiharkan semua pemboleh ubah sebelum boleh digunakan. Pengisytiharan pemboleh ubah perlu dilaksanakan dengan memberikan jenis data dan nama pemboleh ubah.
                                    </p>
                                    <p>Contoh pengisytiharan pemboleh ubah adalah seperti yang berikut:</p>
                                    
                                    <!-- Container Declaration-->
                                    <div class="card-deck mb-30">
                                        
                                       <div class="card">
                                            <h5 class="mb-10" style="text-align: center;">Pengisytiharan Integer</h5>
                                            <div class="terminal">
                                                <p style="text-align: initial">
                                                    public class pembolehUbah <br>
                                                    { <br>
                                                    &nbsp;public static void main(String[] args) <br>
                                                    &nbsp;{ <br>
                                                    &nbsp;&nbsp;<b>int x;</b> <br>
                                                    &nbsp;} <br>
                                                    } 
                                                </p>
                                            </div>
                                            <h5 class="mb-10" style="text-align: center;">Pengisytiharan String</h5>
                                            <div class="terminal">
                                                <p style="text-align: initial">
                                                    public class pembolehUbah <br>
                                                    { <br>
                                                    &nbsp;public static void main(String[] args) <br>
                                                    &nbsp;{ <br>
                                                    &nbsp;&nbsp;<b>String nama;</b> <br>
                                                    &nbsp;} <br>
                                                    } 
                                                </p>
                                            </div>
                                            <h5 class="mb-10" style="text-align: center;">Pengisytiharan Double</h5>
                                            <div class="terminal">
                                                <p style="text-align: initial">
                                                    public class pembolehUbah <br>
                                                    { <br>
                                                    &nbsp;public static void main(String[] args) <br>
                                                    &nbsp;{ <br>
                                                    &nbsp;&nbsp;<b>double s, t, u;</b> <br>
                                                    &nbsp;} <br>
                                                    } 
                                                </p>
                                            </div>
                                       </div>
                                       <div class="card">
                                            <h5 class="mb-10" style="text-align: center;">Pengisytiharan Boolean</h5>
                                            <div class="terminal">
                                                <p style="text-align: initial">
                                                    public class pembolehUbah <br>
                                                    { <br>
                                                    &nbsp;public static void main(String[] args) <br>
                                                    &nbsp;{ <br>
                                                    &nbsp;&nbsp;<b>boolean v;</b> <br>
                                                    &nbsp;} <br>
                                                    } 
                                                </p>
                                            </div>
                                            <h5 class="mb-10" style="text-align: center;">Pengisytiharan Char</h5>
                                            <div class="terminal">
                                                <p style="text-alig n: initial">
                                                    public class pembolehUbah <br>
                                                    { <br>
                                                    &nbsp;public static void main(String[] args) <br>
                                                    &nbsp;{ <br>
                                                    &nbsp;&nbsp;<b>Char w;</b> <br>
                                                    &nbsp;} <br>
                                                    } 
                                                </p>
                                            </div>
                                            <h5 class="mb-10" style="text-align: center;">Pengisytiharan Float</h5>
                                            <div class="terminal">
                                                <p style="text-align: initial">
                                                    public class pembolehUbah <br>
                                                    { <br>
                                                    &nbsp;public static void main(String[] args) <br>
                                                    &nbsp;{ <br>
                                                    &nbsp;&nbsp;<b>float y;</b> <br>
                                                    &nbsp;} <br>
                                                    } 
                                                </p>
                                            </div>
                                       </div>
                                    </div>
                                    <h5 class="mb-10">Permulaan dan Penetapan Nilai untuk Pemboleh Ubah</h5>
                                    <p>
                                        Selepas mengisytiharkan jenis data dan nama pemboleh ubah, nilai kepada pemboleh ubah boleh ditetapkan atau diumpukkan. Sintaks untuk menetapkan nilai pemboleh ubah adalah seperti yang berikut.
                                    </p>
                                    <p>
                                        Format untuk Pengisytiharan & Penetapan nilai: <b>JenisData NamaPembolehUbah = nilai;</b><br>
                                        Format untuk Penetapan Nilai: <b>JenisData NamaPembolehUbah;</b>
                                    </p>
                                    <p style="margin-top: -15px; margin-left: 235px;">
                                        <b>NamaPembolehUbah = nilai;</b>
                                    </p>
                                    <h4 style="text-align: center; margin-bottom: 15px;">Perbezaan</h4>
                                    <!-- Container Declaration Integer-->
                                    <div class="card-deck mb-30">
                                        
                                        <div class="card">
                                            <h5 class="mb-10" style="text-align: center;">Penetapan Nilai untuk Integer</h5>
                                            <div class="terminal">
                                                <p style="text-align: initial">
                                                    public class pembolehUbah <br>
                                                    { <br>
                                                    &nbsp;public static void main(String[] args) <br>
                                                    &nbsp;{ <br>
                                                    &nbsp;&nbsp;<b>int x;</b> <br>
                                                    &nbsp;&nbsp;<b>x = 10;</b> <br>
                                                    &nbsp;} <br>
                                                    } 
                                                </p>
                                            </div>
                                       </div>
                                       <div class="card">
                                            <h5 class="mb-10" style="text-align: center;">Pengisytiharan & Penetapan nilai untuk Integer</h5>
                                            <div class="terminal">
                                                <p style="text-align: initial">
                                                    public class pembolehUbah <br>
                                                    { <br>
                                                    &nbsp;public static void main(String[] args) <br>
                                                    &nbsp;{ <br>
                                                    &nbsp;&nbsp;<b>int x = 10;</b> <br>
                                                    &nbsp;} <br>
                                                    } 
                                                </p>
                                            </div>
                                       </div>
                                    </div>
                                    
                                    <!-- Container Declaration String-->
                                    <div class="card-deck mb-30">
                                        
                                        <div class="card">
                                            <h5 class="mb-10" style="text-align: center;">Penetapan Nilai untuk String</h5>
                                            <div class="terminal">
                                                <p style="text-align: initial">
                                                    public class pembolehUbah <br>
                                                    { <br>
                                                    &nbsp;public static void main(String[] args) <br>
                                                    &nbsp;{ <br>
                                                    &nbsp;&nbsp;<b>String nama;</b> <br>
                                                    &nbsp;&nbsp;<b>nama = "hardeep";</b> <br>
                                                    &nbsp;} <br>
                                                    } 
                                                </p>
                                            </div>
                                       </div>
                                       <div class="card">
                                            <h5 class="mb-10" style="text-align: center;">Pengisytiharan & Penetapan nilai untuk String</h5>
                                            <div class="terminal">
                                                <p style="text-align: initial">
                                                    public class pembolehUbah <br>
                                                    { <br>
                                                    &nbsp;public static void main(String[] args) <br>
                                                    &nbsp;{ <br>
                                                    &nbsp;&nbsp;<b>String nama = "hardeep";</b> <br>
                                                    &nbsp;} <br>
                                                    } 
                                                </p>
                                            </div>
                                       </div>
                                    </div>
                                    
                                    <!-- Container Declaration Double-->
                                    <div class="card-deck mb-30">
                                        
                                        <div class="card">
                                            <h5 class="mb-10" style="text-align: center;">Penetapan Nilai untuk Double</h5>
                                            <div class="terminal">
                                                <p style="text-align: initial">
                                                    public class pembolehUbah <br>
                                                    { <br>
                                                    &nbsp;public static void main(String[] args) <br>
                                                    &nbsp;{ <br>
                                                    &nbsp;&nbsp;<b>double s, t, u;</b> <br>
                                                    &nbsp;&nbsp;<b>s = 0.123;</b> <br>
                                                    &nbsp;&nbsp;<b>t = 1.1;</b> <br>
                                                    &nbsp;&nbsp;<b>u = s + t;</b> <br>
                                                    &nbsp;} <br>
                                                    } 
                                                </p>
                                            </div>
                                       </div>
                                       <div class="card">
                                            <h5 class="mb-10" style="text-align: center;">Pengisytiharan & Penetapan nilai untuk Double</h5>
                                            <div class="terminal">
                                                <p style="text-align: initial">
                                                    public class pembolehUbah <br>
                                                    { <br>
                                                    &nbsp;public static void main(String[] args) <br>
                                                    &nbsp;{ <br>
                                                    &nbsp;&nbsp;<b>double s = 0.123, t = 1.1, u = s + t;</b> <br>
                                                    &nbsp;} <br>
                                                    } 
                                                </p>
                                            </div>
                                       </div>
                                    </div>

                                    <!-- Container Declaration Boolean-->
                                    <div class="card-deck mb-30">
                                        
                                        <div class="card">
                                            <h5 class="mb-10" style="text-align: center;">Penetapan Nilai untuk Boolean</h5>
                                            <div class="terminal">
                                                <p style="text-align: initial">
                                                    public class pembolehUbah <br>
                                                    { <br>
                                                    &nbsp;public static void main(String[] args) <br>
                                                    &nbsp;{ <br>
                                                    &nbsp;&nbsp;<b>boolean v;</b> <br>
                                                    &nbsp;&nbsp;<b>v = true;</b> <br>
                                                    &nbsp;} <br>
                                                    } 
                                                </p>
                                            </div>
                                       </div>
                                       <div class="card">
                                            <h5 class="mb-10" style="text-align: center;">Pengisytiharan & Penetapan nilai untuk Boolean</h5>
                                            <div class="terminal">
                                                <p style="text-align: initial">
                                                    public class pembolehUbah <br>
                                                    { <br>
                                                    &nbsp;public static void main(String[] args) <br>
                                                    &nbsp;{ <br>
                                                    &nbsp;&nbsp;<b>boolean v = true;</b> <br>
                                                    &nbsp;} <br>
                                                    } 
                                                </p>
                                            </div>
                                       </div>
                                    </div>

                                    <!-- Container Declaration Char-->
                                    <div class="card-deck mb-30">
                                        
                                        <div class="card">
                                            <h5 class="mb-10" style="text-align: center;">Penetapan Nilai untuk Char</h5>
                                            <div class="terminal">
                                                <p style="text-align: initial">
                                                    public class pembolehUbah <br>
                                                    { <br>
                                                    &nbsp;public static void main(String[] args) <br>
                                                    &nbsp;{ <br>
                                                    &nbsp;&nbsp;<b>char w;</b> <br>
                                                    &nbsp;&nbsp;<b>w = 'y';</b> <br>
                                                    &nbsp;} <br>
                                                    } 
                                                </p>
                                            </div>
                                       </div>
                                       <div class="card">
                                            <h5 class="mb-10" style="text-align: center;">Pengisytiharan & Penetapan nilai untuk Char</h5>
                                            <div class="terminal">
                                                <p style="text-align: initial">
                                                    public class pembolehUbah <br>
                                                    { <br>
                                                    &nbsp;public static void main(String[] args) <br>
                                                    &nbsp;{ <br>
                                                    &nbsp;&nbsp;<b>char w = 'y';</b> <br>
                                                    &nbsp;} <br>
                                                    } 
                                                </p>
                                            </div>
                                       </div>
                                    </div>

                                    <!-- Container Declaration Float-->
                                    <div class="card-deck mb-30">
                                        
                                        <div class="card">
                                            <h5 class="mb-10" style="text-align: center;">Penetapan Nilai untuk Float</h5>
                                            <div class="terminal">
                                                <p style="text-align: initial">
                                                    public class pembolehUbah <br>
                                                    { <br>
                                                    &nbsp;public static void main(String[] args) <br>
                                                    &nbsp;{ <br>
                                                    &nbsp;&nbsp;<b>float y;</b> <br>
                                                    &nbsp;&nbsp;<b>y = 342.234f; //f dibelakang perlu diletakkan untuk menunjukkan float</b> <br>
                                                    &nbsp;} <br>
                                                    } 
                                                </p>
                                            </div>
                                       </div>
                                       <div class="card">
                                            <h5 class="mb-10" style="text-align: center;">Pengisytiharan & Penetapan nilai untuk Float</h5>
                                            <div class="terminal">
                                                <p style="text-align: initial">
                                                    public class pembolehUbah <br>
                                                    { <br>
                                                    &nbsp;public static void main(String[] args) <br>
                                                    &nbsp;{ <br>
                                                    &nbsp;&nbsp;<b>float y = 342.234f;</b> <br>
                                                    &nbsp;} <br>
                                                    } 
                                                </p>
                                            </div>
                                       </div>
                                    </div>
                                    <h5 class="mb-10">Pengisytiharan dan Penetapan Nilai Pemalar</h5>
                                    <p>
                                        Dalam dunia sebenar, terdapat beberapa nilai yang tidak akan berubah seperti segi empat mempunyai 4 sisi, satu hari mempunyai 24 jam dan nilai Pi mempunyai tiga tempat perpuluhan iaitu 3.142. serta nilai mata wang bagi Malaysia. Nilai-nilai ini akan kekal dan tidak akan berubah. Dalam pengaturcaraan Java, nilai-nilai ini masih sama apabila dijadikan sebagai pemboleh ubah. Pemboleh ubah ini dikenal sebagai pemalar. Nilai pemalar tidak akan berubah semasa menjalankan atur cara.
                                    </p>
                                    <p>Sintaks untuk  mengisytiharkan pemalar dalam Java adalah seperti yang berikut:</p>
                                    <div class="terminal">
                                        <p style="text-align: initial">
                                            public class pembolehUbah <br>
                                            { <br>
                                            &nbsp;public static void main(String[] args) <br>
                                            &nbsp;{ <br>
                                            &nbsp;&nbsp;<b>final int BILANGAN_HARI_DALAM_SEMINGGU = 7;</b> <br>
                                            &nbsp;&nbsp;<b>final double Pi = 3.14;</b> <br>
                                            &nbsp;&nbsp;<b>static final double = 4.14;</b> <br>
                                            &nbsp;} <br>
                                            } 
                                        </p>
                                    </div>
                                    <p style="text-align: center; color: #ff0000;">Kod: Contoh Pengisytiharan Pemalar</p>
                                </div>
                            </div>

                            {{-- Section 1.3.5 --}}
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                <div class="blog-caption">
                                    <h4 class="mb-10">
                                        Module 1.3.5: Penggunaan Penyataan Umpukan dan Penyataan Aritmetik
                                    </h4>
                                    <p>
                                        Semasa menulis atur cara, terdapat beberapa jenis penyataan yang boleh digunakan. Antaranya ialah Penyataan Umpukan dan Penyataan Aritmetik. <b>Penyataan Umpukan</b> boleh terdiri daripada satu atau lebih ungkapan yang lain. Penyataan umpukan merujuk “sama dengan” atau simbol “=”. Penyataan umpukan akan memberikan nilai kepada pemboleh ubah. Contohnya int x = y. y adalah nilai yang diumpukkan kepada pemboleh ubah x.
                                    </p>
                                    <p>Contoh penyataan umpukan ialah: </p>
                                    <div class="card-deck mb-30">
                                        <div class="card">
                                            <div class="module-img">
                                                <img style="height: 190px; width: 100%;" src="../../../vendors/images/module1-3/umpukanone.jpg" alt="">
                                                <p>Rajah: Umpukan untuk satu ungkapan</p>
                                            </div>
                                       </div>
                                       <div class="card">
                                            <div class="module-img">
                                                <img src="../../../vendors/images/module1-3/umpukanmany.jpg" alt="">
                                                <p>Rajah: Umpukan untuk ungkapan yang lebih dari satu</p>
                                            </div>  
                                       </div>
                                    </div>
                                    <p>
                                        <b>Penyataan aritmetik</b> boleh terdiri daripada satu atau lebih operasi aritmetik. Penyataan ini merujuk operasi aritmetik iaitu operasi penambahan, penolakan, pendaraban dan pembahagian. Unit pemproses utama boleh membaca operasi aritmetik dari kiri ke kanan sahaja. Sekiranya pengatur cara ingin menjalankan operasi darab terlebih dahulu, penggunaan simbol kurungan perlu diutamakan.
                                    </p>
                                    <div class="module-img" style="margin-top: 20px; margin-bottom: 20px;">
                                        <img src="../../../vendors/images/module1-3/aritmetik.jpg" alt="">
                                        <p>Rajah: Contoh penyataan aritmetik</p>
                                    </div>
                                    <div class="module-img" style="margin-top: 20px; margin-bottom: 20px;">
                                        <img src="../../../vendors/images/module1-3/jadualaritmetik.jpg" alt="">
                                        <p>Rajah: Penyataan aritmetik dan contoh atur cara</p>
                                    </div>
                                </div>
                            </div>

                            {{-- Section 1.3.6 --}}
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                <div class="blog-caption">
                                    <h4 class="mb-10">
                                        Module 1.3.6: Penulisan Atur Cara untuk Memasukkan Input daripada Papan Kekunci dan Memaparkan Output
                                    </h4>
                                    <p>
                                        Sesetengah atur cara telah diumpukkan nilai atau input bagi operasi pengiraan atau penyataan dalam atur cara tersebut. Ada pula atur cara yang membenarkan nilai atau input dimasukkan selepas atur cara sudah siap dibina iaitu semasa atur cara dilaksanakan dengan menggunakan papan kekunci. Atur cara perlu ditambah dengan pengekodan seperti di sebelah.
                                    </p>
                                    <div class="terminal" style="width: 530px;">
                                        <p style="text-align: initial">
                                            <b>import java.util.Scanner;<br>
                                                Scanner input = new Scanner(System.in);<br>
                                                System.out.println("Sila masukkan nilai tapak : ");<br>
                                                int tapak = input.nextInt();</b>
                                        </p>
                                    </div>
                                    <p style="text-align: center; color: #ff0000;">Rajah: Contoh Penulisan Atur Cara</p>
                                    <p>Lihat dua contoh atur cara dibawah:</p>
                                    
                                    
                                    <h5 class="mb-10" style="text-align: initial">Contoh 1:</h5>
                                    <div class="card-deck mb-30">
                                        <!-- Container 1 -->
                                        <div class="card">
                                            <p>Atur cara yang membenarkan input dimasukkan menggunakan papan kekunci:</p>
                                            <div class="terminal" style="text-align: initial">
                                                <p>
                                                    import java.util.Scanner;<br>
                                                    public class luasSegiTiga<br>
                                                    {<br>
                                                        &nbsp;public static void main(String[] args)<br>
                                                        &nbsp;{<br>
                                                            &nbsp;&nbsp;Scanner input = new Scanner(System.in);<br>
                                                            &nbsp;&nbsp;System.out.println("Sila masukkan nilai tapak ");<br>
                                                            &nbsp;&nbsp;<b>int tapak = input.nextInt();</b><br>
                                                            &nbsp;&nbsp;System.out.println("Sila masukkan nilai tinggi ");<br>
                                                            &nbsp;&nbsp;<b>int tinggi = input.nextInt();</b><br>
                                                            &nbsp;&nbsp;double luas = (1.0/2)* tapak * tinggi;<br>
                                                            &nbsp;&nbsp;System.out.println("Luas segi tiga ialah : " + luas);<br>
                                                        &nbsp;}<br>
                                                    }
                                                </p>
                                            </div>
                                            
                                            <div class="card-body">
                                                <div class="col-lg-6 col-sm-12 mb-30">
                                                    <div class="pd-20 card-box height-100-p text-center">
 
                                                        <a href="#" class="button-85 btn-block" data-toggle="modal" data-target="#small-modal1" type="button">
                                                            Run
                                                        </a>
 
                                                        <div class="modal fade" id="small-modal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-sm modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myLargeModalLabel">Output</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Sila masukkan nilai tapak :<br>
                                                                            6<br>
                                                                            Sila masukkan nilai tinggi :<br>
                                                                            4<br>
                                                                            Luas segi tiga ialah : 12.0
                                                                        </p>
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
                                                    Anda boleh menekan butang di atas untuk melihat output yang akan dihasilkan.    
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Container 2 -->
                                        <div class="card">
                                            <p>Atur cara yang telah diumpukkan nilai atau input:</p>
                                            <div class="terminal" style="text-align: initial; margin-top: 45px;">
                                                <p>
                                                    import java.util.Scanner;<br>
                                                    public class luasSegiTiga2<br>
                                                    {<br>
                                                        &nbsp;public static void main(String[] args)<br>
                                                        &nbsp;{<br>
                                                            &nbsp;&nbsp;<b>int tapak = 6;<br>
                                                            &nbsp;&nbsp;int tinggi = 4;</b><br>
                                                            &nbsp;&nbsp;double luas = (1.0/2)* tapak * tinggi;<br>
                                                            &nbsp;&nbsp;System.out.println("Luas segi tiga ialah : " + luas);<br>
                                                        &nbsp;}<br>
                                                    }
                                                </p>
                                            </div>
                                            
                                            <div class="card-body">
                                                <div class="col-lg-6 col-sm-12 mb-30">
                                                    <div class="pd-20 card-box height-100-p text-center" style="margin-top: 115px">

                                                        <a href="#" class="button-85 btn-block" data-toggle="modal" data-target="#small-modal2" type="button" >
                                                            Run
                                                        </a>

                                                        <div class="modal fade" id="small-modal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-sm modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myLargeModalLabel">Output</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Luas segi tiga ialah : 12.0
                                                                        </p>
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
                                                    Anda boleh menekan butang di atas untuk melihat output yang akan dihasilkan.    
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <h5 class="mb-10" style="text-align: initial">Contoh 2:</h5>
                                    <div class="card-deck mb-30">
                                        <!-- Container 3 -->
                                        <div class="card">
                                            <p>Atur cara yang membenarkan input dimasukkan menggunakan papan kekunci:</p>
                                            <div class="terminal" style="text-align: initial">
                                                <p>
                                                    import java.util.Scanner;<br>
                                                    public class infoAnda<br>
                                                    {<br>
                                                        &nbsp;public static void main(String[] args)<br>
                                                        &nbsp;{<br>
                                                            &nbsp;&nbsp;Scanner input = new Scanner(System.in);<br>
                                                            &nbsp;&nbsp;System.out.println("Siapakah nama anda? : ");<br>
                                                            &nbsp;&nbsp;<b>String nama = input.next();</b><br>
                                                            &nbsp;&nbsp;System.out.println("Berapakah umur anda? : ");<br>
                                                            &nbsp;&nbsp;<b>int umur = input.nextInt();</b><br>
                                                            &nbsp;&nbsp;System.out.println("Apakah hobi anda? : ");<br>
                                                            &nbsp;&nbsp;<b>String hobi = input.next();</b><br>
                                                            &nbsp;&nbsp;nama = nama;<br>
                                                            &nbsp;&nbsp;umur = umur;<br>
                                                            &nbsp;&nbsp;hobi = hobi;<br>
                                                            &nbsp;&nbsp;System.out.println("Nama : " + nama);<br>
                                                            &nbsp;&nbsp;System.out.println("Umur : " + umur);<br>
                                                            &nbsp;&nbsp;System.out.println("Hobi : " + hobi);<br>
                                                        &nbsp;}<br>
                                                    }
                                                </p>
                                            </div>
                                            
                                            <div class="card-body">
                                                <div class="col-lg-6 col-sm-12 mb-30">
                                                    <div class="pd-20 card-box height-100-p text-center">
 
                                                        <a href="#" class="button-85 btn-block" data-toggle="modal" data-target="#small-modal3" type="button">
                                                            Run
                                                        </a>
 
                                                        <div class="modal fade" id="small-modal3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-sm modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myLargeModalLabel">Output</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>
                                                                            Siapakah nama anda? :<br>
                                                                            <b>Haziq</b><br>
                                                                            Berapakah umur anda? :<br>
                                                                            <b>7</b><br>
                                                                            Apakah hobi anda? :<br>
                                                                            <b>Bermain</b><br>
                                                                            Nama : Haziq<br>
                                                                            Umur : 7<br>
                                                                            Hobi : Bermain
                                                                        </p>
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
                                                    Anda boleh menekan butang di atas untuk melihat output yang akan dihasilkan.    
                                                </p>
                                            </div>
                                        </div>

                                       <!-- Container 4 -->
                                       <div class="card">
                                        <p>Atur cara yang telah diumpukkan nilai atau input:</p>
                                        <div class="terminal" style="text-align: initial; margin-top: 45px;">
                                            <p>
                                                import java.util.Scanner;<br>
                                                public class infoAnda2<br>
                                                {<br>
                                                    &nbsp;public static void main(String[] args)<br>
                                                    &nbsp;{<br>
                                                        &nbsp;&nbsp;String nama;<br>
                                                        &nbsp;&nbsp;int umur;<br>
                                                        &nbsp;&nbsp;String hobi;<br>
                                                        &nbsp;&nbsp;<b>nama = "Haziq";<br>
                                                        &nbsp;&nbsp;umur = 7;<br>
                                                        &nbsp;&nbsp;hobi = "Bermain";</b><br>
                                                        &nbsp;&nbsp;System.out.println("Nama : " + nama);<br>
                                                        &nbsp;&nbsp;System.out.println("Umur : " + umur);<br>
                                                        &nbsp;&nbsp;System.out.println("Hobi : " + hobi);<br>
                                                    &nbsp;}<br>
                                                }<br>
                                            </p>
                                        </div>
                                        
                                        <div class="card-body">
                                            <div class="col-lg-6 col-sm-12 mb-30">
                                                <div class="pd-20 card-box height-100-p text-center" style="margin-top: 140px">

                                                    <a href="#" class="button-85 btn-block" data-toggle="modal" data-target="#small-modal4" type="button" >
                                                        Run
                                                    </a>

                                                    <div class="modal fade" id="small-modal4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myLargeModalLabel">Output</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>
                                                                        Nama : Haziq<br>
                                                                        Umur : 7<br>
                                                                        Hobi : Bermain
                                                                    </p>
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
                                                Anda boleh menekan butang di atas untuk melihat output yang akan dihasilkan.    
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
        <div class="footer-wrap pd-20 mb-20 card-box">
            Crunchy Code Web Application System developed by Elysium
        </div>
    </div>
</div>

@endsection