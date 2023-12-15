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
                                <li class="breadcrumb-item active" aria-current="page">Module 1.6 Struktur Data dan Modular</li>
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
                                <h3>Module 1.6: Struktur Data dan Modular</h3>
                            </div>

                            <div class="blog-detail card-box overflow-hidden mb-30">

                                <div class="blog-caption" >

                                    <!-- Add your captions -->

                                    <!-- Pengenalan -->
                                    <h4 class="mb-10"> Pengenalan </h4>
                                    <p class="text-formatting">
                                        Atur cara mengandungi kod komputer untuk memproses data kepada maklumat. Data perlu disimpan dalam pemboleh ubah supaya boleh diproses. Arahan kod komputer dan pemboleh ubah disimpan dalam fail kod sumber <i>(source code)</i>. <br><br>
                                        Atur cara yang ringkas mungkin mengandungi beberapa baris arahan dan pemboleh ubah sahaja. Untuk atur cara yang kompleks seperti sistem pinjaman buku sekolah dan sistem-sistem lain pengurusan maklumat, mungkin ratusan ribu baris arahan dan ratusan pemboleh ubah diperlukan. Dapatkah anda bayangkan kesukaran untuk menulis kod komputer untuk sistem yang kompleks? 
                                        Kod komputer seharusnya mudah ditulis, mudah dibaca dan mudah dikemas kini. Bagaimana? <br><br>
                                        Gunakan struktur yang lebih sistematik untuk pemboleh ubah dan arahan. Pemboleh ubah boleh dipecahkan kepada "kumpulan-kumpulan kecil" yang dipanggil <b>tatasusunan</b>. Arahan-arahan komputer juga boleh dipecahkan kepada beberapa "kumpulan kecil" yang dipanggil fungsi. Apabila diperlukan sahaja, kumpulan yang berkait akan dipanggil. 
                                        Sebagai analogi, bayangkan terdapat sebuah buku berjudul "Semua Mata Pelajaran Tingkatan 4" dan hanya seorang guru yang akan mengajarkan semua mata pelajaran tersebut. Dalam buku tersebut, tiada bab-bab berasingan mahupun subtopik. Semuanya ditulis dalam satu perenggan sahaja dari muka surat satu hingga muka surat akhir. Adakah ini satu kaedah yang baik dalam pengajaran dan pembelajaran.
                                    </p>
                                    
                                    <!-- Image -->
                                    <div class="card image-size" align="center">
                                        <img class="card-img-top" src="../../../vendors/images/module1-6/pengenalan.png" alt="Card image cap">
                                    </div>

                                    <!-- Caption -->
                                    <p class="text-center" style="color:#ff0000;"> Rajah: Pecah dan Urus adalah lebih berkesan </p>
                                    
                                    <p class="text-formatting">
                                        Lihat Rajah di atas. Apa kata sekiranya kandungan sebuah buku dibahagikan kepada bab-bab berasingan dan dijilidkan menjadi beberapa buah buku berlainan? Bukankah pengetahuan-pengetahuan dalam buku tebal menjadi lebih mudah diurus dan dibaca? Adakah anda perlu membawa semua buku tersebut sekiranya subjek tersebut tidak diajar pada hari-hari tertentu? <br><br>
                                        Demikian halnya dengan guru-guru yang mengajar pengetahuan tersebut. Guru-guru yang ada pengkhususan dalam subjek-subjek tertentu adalah lebih arif dalam subjek tersebut sahaja. Sekiranya murid ingin bertanyakan permasalahan Matematik, murid boleh mencari guru matematik untuk mendapat penjelasan lanjut. <br><br>
                                        Oemikian halnya dengan atur cara komputer. Buku-buku dalam analogi yang ditunjukkan pada Rajah 1.45 adalah ibarat pemboleh ubah manakala guru-guru yang ada pengkhususan dalam subjek tersebut adalah ibarat arahan-arahan atur cara dalam fail kod sumber.<br><br>
                                    </p>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>

        <!-- Sub Module 1.6.1 -->
         <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">

                <div class="blog-wrap">
                    <div class="container pd-0">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="blog-detail card-box overflow-hidden mb-30">
                                    
                                    <div class="blog-caption" >

                                        <!-- Pengenalan -->
                                        <h4 class="mb-10"> Module 1.6.1 Struktur Tatasusunan <i>(array)</i> Satu Dimensi</h4>
                                        <p class="text-formatting">
                                            Sistem pengurusan maklumat melibatkan pemprosesan suatu jumlah data yang banyak. Bagi menguruskan data agar lebih tersusun dan senang dicapai, maka diperkenalkan konsep struktur data. Sebaik manapun algoritma, jika data tidak tersusun, capaian dan pemprosesan data menjadi kurang efisien. Malah, penulisan kod komputer menjadi amat sukar. <br><br>
                                            Salah satu struktur data yang penting ialah <b>tatasusunan</b> <i>(array)</i>. Tatasusunan ialah pemboleh ubah yang membolehkan koleksi beberapa nilai data (elemen) dalam satu-satu masa dengan menyimpan setiap elemen dalam ruang memori berindeks. <br><br>
                                            Dalam subtopik ini, anda akan mengkaji pemboleh ubah mudah ataupun biasa semula sebagai sel memori dan perbezaannya dengan tatasusunan. Anda akan melihat kelebihan-kelebihan tatasusunan sebagai senarai data berbanding dengan pemboleh ubah mudah. <br><br>
                                            Pemboleh ubah ialah slot memori yang telah dikhaskan untuk menyimpan data. Kebiasaannya, pemboleh ubah mudah cuma menyimpan satu nilai data dalam satu-satu masa. Lihat ruang memori untuk pemboleh ubah mudah di bawah. 
                                        </p>

                                        <!-- Image -->
                                        <div class="card image-size" style="width:20%;" align="center">
                                            <img class="card-img-top"  src="../../../vendors/images/module1-6/array.png" alt="Card image cap">
                                        </div>

                                        <!-- Caption -->
                                        <p class="text-center" style="color:#ff0000;"> Rajah: Pemboleh ubah mudah menggunakan hanya satu kotak </p>
                                        
                                        <p class="text-formatting">
                                            Dalam kod Java, nilai pemboleh ubah diisytihar seperti sintaks seperti yang berikut: 
                                        </p>

                                        <!-- Coding Displayed -->
                                        <div class="terminal" style="width:50%;">
                                            <p>
                                                &nbsp;jenisData namaPembolehUbah;<br>           
                                            </p>
                                        </div>
                                        
                                        <h6>Contoh 1</h6>

                                        <!-- Coding Displayed -->
                                        <div class="terminal" style="width:50%;">
                                            <p>
                                                &nbsp;int markah;<br>           
                                            </p>
                                        </div>

                                        <p class="text-formatting">
                                            Jika Java perlu menyimpan data bernilai 34, umpukkan sahaja nilai 34 ke dalam pemboleh ubah markah. Kod Javaboleh ditulis seperti yang berikut.
                                        </p>

                                        <h6>Contoh 2</h6>

                                        <!-- Coding Displayed -->
                                        <div class="terminal" style="width:50%;">
                                            <p>
                                                &nbsp;markah = 34;<br>           
                                            </p>
                                        </div>

                                        <p class="text-formatting">
                                            Kedua-dua langkah di atas boleh dibuat sekali gus dalam satu arahan.
                                        </p>

                                        <h6>Contoh 3</h6>
                                        <!-- Coding Displayed -->
                                        <div class="terminal" style="width:50%;">
                                            <p>
                                                &nbsp;int markah = 34;<br>           
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

        <!-- Add section -->


        <div class="footer-wrap pd-20 mb-20 card-box">
            Crunchy Code Web Application System developed by Elysium
        </div>
    </div>
</div>

@endsection