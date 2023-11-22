@extends('layouts.master')

@php($user = Auth::user())

@section('content')
<style>
.list-unstyled li {
    text-decoration: none;
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
.terminal {
    background-color: #2e2e2e;
    color: #00ff00; /* Green text */
    font-family: 'Courier New', monospace;
    border-radius: 8px;
    overflow: hidden;
    width:200%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 20px auto;
}

.terminal p {
    padding: 20px;
    margin: 0;
}

b {
    color: black;
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
                                <li class="breadcrumb-item active" aria-current="page">Module 1.4 Struktur Kawalan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- 1.4.1 -->
            <div class="blog-wrap">
                <div class="container pd-0">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                
                                <div class="blog-caption" >

                                    <!-- Heading -->
                                    <h4 class="mb-10"> Module 1.4.1 Struktur Kawalan Pilihan </h4>
                                    <p>
                                        Berdasarkan input tertentu, atur cara komputer boleh membuat keputusan.
                                        Keputusan atau pilihan itu telah direkodkan dalam atur cara tersebut.
                                        Kawalan pilihan ialah mekanisme yang membolehkan keputusan atau
                                        pemilihan dibuat secara automatik.
                                    </p>
                                    
                                    <!-- Definisi Masalah -->
                                    <h5 class="mb-10">Aplikasi dalam dunia sebenar</h5>
                                    <p>
                                        Sebagai contoh, mesin pengeluaran wang automatik (ATM) kini,
                                        mempunyai banyak fungsi seperti untuk melihat baki, mengeluarkan
                                        wang, memindahkan wang dan membayar bil. Berdasarkan pilihan yang
                                        dimasukkan, perisian di dalam ATM akan membuat keputusan apakah
                                        paparan yang akan ditunjukkan kepada pengguna dan bagaimana untuk
                                        memproses input yang dimasukkan.
                                    </p>

                                    <!-- Definisi Penyelesaian Masalah -->
                                    <h5 class="mb-10">Boolean</h5>
                                    <p>
                                        Penyataan tentang komputer membuat keputusan disebut sebagai
                                        penyataan bersyarat boolean. Syarat boolean tersebut membolehkan
                                        perbandingan pemboleh ubah, sifat objek atau nilai yang dilakukan melalui
                                        operator hubungan atau operator logikal. Perbandingan ini memberikan
                                        keputusan dalam bentuk data jenis boolean.
                                    </p>
                                    <h5 class="mb-10">Nilai Boolean</h5>
                                    <p>
                                        Selain daripada jenis-jenis data seperti integer, double atau String, terdapat
                                        satu lagi jenis data lain yang lazim digunakan terutamanya dalam struktur
                                        kawalan, iaitu jenis data boolean. Data jenis boolean hanya mempunyai
                                        dua nilai yang mungkin, iaitu Ya/Benar (<b>True</b>) atau Tidak/Palsu (<b>False</b>).
                                    </p>
                                    <h5 class="mb-10">Kawalan Pilihan If</h5>
                                    <p>
                                        Struktur kawalan if hanya akan melaksanakan penyataan-penyataan tertentu seperti
                                        memprosesdata melalui ungkapan sekiranya syarat adalah benar.
                                    </p>
                                    <!-- Gambaran Penyelesaian Masalah -->
                                    <div class="card-deck mb-30">
                                         <!-- Image 1 Container -->
                                        <div class="card">
                                            <img class="card-img-top" src="../../../vendors/images/Module/flowchart-1-4-a.png" alt="Card image cap">
                                        </div>

                                        <!-- Image 2 Container -->
                                        <div class="card">
                                            <img class="card-img-top" src="../../../vendors/images/Module/flowchart-1-4-a1.png" alt="Card image cap">
                                        </div>
                                    </div>
                                    <h5 class="mb-10">Kawalan Pilihan If-Else</h5>
                                    <p>
                                        Penyataan if-else digunakan untuk membuat keputusan dalam sesuatu
                                        atur cara. Hasil perbandingan itu menunjukkan hasil boolean, iaitu Ya
                                        ( <b>Benar</b> ) atau Tidak ( <b>Palsu</b> ). Penyataan susulan bergantung kepada hasil
                                        Boolean tersebut.
                                    </p>
                                    <!-- Gambaran Penyelesaian Masalah -->
                                    <div class="card-deck mb-30">
                                         <!-- Image 1 Container -->
                                         <div class="card">
                                            <img class="card-img-top" src="../../../vendors/images/Module/flowchart-1-4-b.png" alt="Card image cap">
                                        </div>

                                        <!-- Image 2 Container -->
                                        <div class="card">
                                            <img class="card-img-top" src="../../../vendors/images/Module/flowchart-1-4-b1.png" alt="Card image cap">
                                        </div>
                                    </div>
                                    <h5 class="mb-10">Kawalan Pilihan If-Else-If</h5>
                                    <p>
                                        Komputer juga boleh diprogramkan untuk membuat keputusan yang lebih kompleks, iaitu dengan
                                        menggunakan struktur kawalan <b>if-else-if</b>. Oleh hal yang demikian, komputer boleh mencuba syarat
                                        boolean yang baharu sekiranya syarat terdahulu menghasilkan keputusan <b>palsu</b>.
                                    </p>
                                    <p>
                                        Sekiranya syarat boolean menghasilkan keputusan <b>benar</b>, penyataan yang dipaut
                                        kepada syarat boolean tersebut sahaja
                                        akan dilaksanakan. Syarat-syarat boolean yang <b>lain</b> tidak akan <b>diuji</b>.
                                    </p>
                                    <!-- Gambaran Penyelesaian Masalah -->
                                    <div class="card-deck mb-30">
                                         <!-- Image 1 Container -->
                                         <div class="card">
                                            <img class="card-img-top" src="../../../vendors/images/Module/flowchart-1-4-c.png" alt="Card image cap">
                                        </div>

                                        <!-- Image 2 Container -->
                                        <div class="card">
                                            <img class="card-img-top" src="../../../vendors/images/Module/flowchart-1-4-c1.png" alt="Card image cap">
                                        </div>
                                    </div>
                                    <h5 class="mb-10">Kawalan Pilihan Switch-Case</h5>
                                    <p>
                                        Penggunaan <b>if-else-if</b> untuk membuat sebilangan keputusan
                                        adalah rumit kerana penyataan <b>if-else-if</b> perlu diulang
                                        banyak kali dan pengulangan tersebut boleh menimbulkan
                                        kekeliruan kepada pengguna.
                                    </p>
                                    <p>
                                        Untuk mengatasi kekurangan penggunaan <b>if-else-if</b>
                                        tersebut, struktur kawalan switch-case boleh digunakan.
                                        Struktur ini lebih mudah difahami kerana nilai ujian dalam
                                        <b>Select Case</b> dipadankan dengan beberapa calon <b>Case</b>.
                                    </p>
                                    <!-- Gambaran Penyelesaian Masalah -->
                                    <div class="card-deck mb-30">
                                         <!-- Image 1 Container -->
                                        <div class="card">
                                            <img class="card-img-top" src="../../../vendors/images/Module/flowchart-1-4-d.png" alt="Card image cap">
                                        </div>

                                        <!-- Image 2 Container -->
                                        <div class="card">
                                            <img class="card-img-top" src="../../../vendors/images/Module/flowchart-1-4-c1.png" alt="Card image cap">
                                        </div>
                                    </div>
                                    <h5 class="mb-10">Contoh pengaturcaraan Struktur Kawalan</h5>
                                    <div class="card-deck mb-30">
                                         <!-- Image 1 Container -->
                                        <div class="card">
                                            <img class="card-img-top" src="../../../vendors/images/Module/flowchart-1-4-1.png" alt="Card image cap">
                                        </div>

                                        <!-- Image 2 Container -->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="col-lg-6 col-sm-12 mb-30">
                                                    <div class="terminal">
                                                    <p>
                                                    int baki = 1000;
                                                    <br>
                                                    String pengeluaran = "";
                                                    <br>
                                                    System.out.print("Papar Baki:");
                                                    <br>
                                                    String papar = sc.nextLine();
                                                    <br>
                                                    if(papar.equals("ya")){
                                                    &nbsp;&nbsp;System.out.println("RM" + baki);
                                                    <br>
                                                    } else {
                                                    <br>
                                                    &nbsp;&nbsp;System.out.print("Jumlah Pengeluaran = RM");
                                                    <br>
                                                    &nbsp;&nbsp;pengeluaran = sc.nextLine();
                                                    <br>
                                                    &nbsp;&nbsp;if(pengeluaran.equals("ya")){
                                                    <br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;pengeluaranWang();
                                                    <br>
                                                    &nbsp;&nbsp;}else{
                                                    <br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;tamat();
                                                    <br>
                                                    &nbsp;&nbsp;}
                                                    <br>
                                                    }
                                                    </p>
                                                    <p>//Sekiranya input untuk papar dan pengeluaran sama dengan "ya"</p>
                                                    </div>
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
                                                                        <p>Papar Baki : Ya</p>
                                                                        <p>Baki = RM1000</p>
                                                                        <p>Pengeluaran: Ya</p>
                                                                        <p>Jumlah Pengeluaran: RM100</p>
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
            <!-- 1.4.2 -->
            <div class="blog-wrap">
                <div class="container pd-0">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                
                                <div class="blog-caption" >

                                    <!-- Heading -->
                                    <h4 class="mb-10"> Module 1.4.2 Operator Hubungan dan Operator Logikal dalam Struktur Kawalan Pilihan </h4>
                                    <p>
                                        <b>Dua</b> kategori operator yang sering digunakan dalam ungkapan syarat ialah
                                        operator <b>hubungan</b> dan operator <b>logikal</b>.
                                        Operator <b>hubungan</b> digunakan untuk membandingkan dua
                                        nilai bagi menghasilkan keputusan boolean.
                                        Operator <b>logikal</b> pula digunakan untuk menghasilkan beberapa ungkapan
                                        boolean bagi menghasilkan syarat yang lebih kompleks.
                                    </p>
                                    
                                    <!-- Definisi Masalah -->
                                    <h5 class="mb-10">Operator Hubungan</h5>
                                    <p>
                                        Penyataan bersyarat Boolean menggunakan ungkapan yang bertujuan
                                        untuk membuat perbandingan. Input pengguna akan disimpan dalam
                                        pemboleh ubah. Pemboleh ubah tersebut akan dibandingkan menerusi
                                        nilai-nilai dalam syarat Boolean. Operator-operator perbandingan
                                        membuatkan perbandingan seperti dalam contoh-contoh sebelumnya.
                                    </p>
                                    <div class="card-deck mb-30">
                                        <div class="card">
                                            <img class="card-img-top" src="../../../vendors/images/Module/operator_bandingan.png" alt="Card image cap">
                                        </div>
                                        <div class="card">
                                            <img class="card-img-top" src="../../../vendors/images/Module/table.png" alt="Card image cap">
                                        </div>
                                    </div>
                                    <div class="w-50">
                                        <p>Contoh:</p>
                                        <img class="card-img-top" src="../../../vendors/images/Module/contoh-1-4-2.png" alt="Card image cap">
                                    </div>
                                    <br>
                                    <!-- Definisi Penyelesaian Masalah -->
                                    <h5 class="mb-10">Operator Logikal</h5>
                                    <p>
                                        Dalam suatu kenyataan if-else, dua atau lebih syarat boolean boleh diuji
                                        serentak dengan menggabungkan syarat boolean melalui operator logikal.
                                        Operator-operator logikal yang lazim digunakan ialah <b>AND</b>, <b>OR</b> dan <b>NOT</b>.
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top" src="../../../vendors/images/Module/operator_logical.png" alt="Card image cap">
                                    </div>
                                    </p>
                                    <h5 class="mb-10">Logical AND</h5>
                                    <p>
                                        Operator logik AND digunakan apabila dua atau lebih <b>syarat boolean</b> perlu
                                        digabungkan dan <b>kesemua</b> syarat perlu <b>benar</b>.
                                        Sebagai contohnya,pernyataan <b>A && B</b>,dimana <b>T</b> adalah betul dan <b>F</b> adalah salah.
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top w-50" src="../../../vendors/images/Module/truthAND.svg" alt="Card image cap">
                                    </div>
                                    <div class="w-55">
                                        <p>Contoh Penggunaan operator AND</p>
                                        <img class="card-img-top w-50" src="../../../vendors/images/Module/truthANDexample.svg" alt="Card image cap">
                                    </div>
                                    <br>
                                    <h5 class="mb-10">Logical OR</h5>
                                    <p>
                                        Operator logik OR digunakan apabila dua atau lebih syarat boolean perlu
                                        digabungkan dan hanya salah satu syarat boolean perlu benar. Operator
                                        logikal OR ditulis menggunakan simbol ' <b>||</b> '. Mari kita bandingkan operator
                                        ini dengan operator logikal AND.
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top w-50" src="../../../vendors/images/Module/truthOR.svg" alt="Card image cap">
                                    </div>
                                    <br>
                                    <div class="w-55">
                                        <p>Contoh Penggunaan operator OR</p>
                                        <img class="card-img-top w-50" src="../../../vendors/images/Module/truthORexample.svg" alt="Card image cap">
                                    </div>
                                    <br>
                                    <h5 class="mb-10">Logical NOT</h5>
                                    <p>
                                        Operator logikal NOT menukarkan nilai boolean kepada lawannya.
                                        Katakan pemboleh ubah x ialah jenis boolean. Nilai x adalah False.\
                                        Oleh itu, NOT x adalah True.
                                        Operator logikal OR ditulis menggunakan simbol ' <b>!</b> '.
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top w-50" src="../../../vendors/images/Module/truthNOT.svg" alt="Card image cap">
                                    </div>
                                    <br>
                                    <h5 class="mb-10">Contoh pengaturcaraan Operator Hubungan dan logical</h5>
                                    <div class="card-deck mb-30">
                                        <!-- Image 1 Container -->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="col-lg-6 col-sm-12 mb-30">
                                                    <div class="terminal">
                                                    <p>
                                                    //Contoh Program Operator Hubungan
                                                    int baki = 1000;
                                                    <br>
                                                    if(baki > 0){
                                                    &nbsp;&nbsp;System.out.println("RM" + baki);
                                                    <br>
                                                    } else {
                                                    <br>
                                                    &nbsp;&nbsp;System.out.print("Simpanan Anda Kosong");
                                                    <br>
                                                    }
                                                    </p>
                                                    </div>
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
                                                                        <p>Baki = RM1000</p>
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
                                    <div class="card-deck mb-30">
                                        <!-- Image 2 Container -->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="col-lg-6 col-sm-12 mb-30">
                                                    <div class="terminal">
                                                    <p>
                                                    //Contoh Program Operator Logical
                                                    <br>
                                                    //Program untuk mencari median
                                                    <br>
                                                    int num1 = 1;
                                                    <br>
                                                    int num2 = 2;
                                                    <br>
                                                    int num3 = 3;
                                                    <br>
                                                    if ((num1 >= num2 && num1 <= num3) || (num1 <= num2 && num1 >= num3)) {
                                                    &nbsp;&nbsp;System.out.println("Median: " + num1);
                                                    <br>
                                                    } else if ((num2 >= num1 && num2 <= num3) || (num2 <= num1 && num2 >= num3)) {
                                                    <br>
                                                    &nbsp;&nbsp;System.out.println("Median: " + num2);
                                                    <br>
                                                    } else {
                                                    <br>
                                                    &nbsp;&nbsp;System.out.println("Median: " + num3);
                                                    <br>
                                                    }
                                                    </p>
                                                    </div>
                                                    <div class="pd-20 card-box height-100-p text-center">
                                                        <a href="#" class="button-85 btn-block" data-toggle="modal" data-target="#small-modal2" type="button">
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
                                                                        <p>Median: 2</p>
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
            <!-- 1.4.3 -->
            <div class="blog-wrap">
                <div class="container pd-0">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                
                                <div class="blog-caption" >

                                    <!-- Heading -->
                                    <h4 class="mb-10"> 1.4.3 Struktur Kawalan Ulangan </h4>
                                    <p>
                                        Sesetengah penyataan diletakkan dalam blok yang perlu diulang. Hal ini
                                        berlaku kerana ulangan dibuat untuk bilangan kali tertentu atau sehingga
                                        syarat boolean tertentu tidak lagi benar.
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top" src="../../../vendors/images/Module/kawalan_ulangan.png" alt="Card image cap">
                                    </div>
                                    <br>
                                    <!-- Definisi Masalah -->
                                    <h5 class="mb-10">Aplikasi Dalam Kehidupan Harian</h5>
                                    <p>
                                        Dalam kehidupan harian, anda boleh memerhatikan tindakan alat-alat
                                        elektronik yang berulang. Contoh struktur kawalan ulangan ialah alat
                                        penyaman udara. Penyaman udara akan beroperasi apabila suhu bilik
                                        naik dan berhenti apabila suhu bilik sejuk. Suhu bilik merupakan penentu,
                                        sama ada proses penyejukan perlu berulang ataupun tidak.
                                    </p>
                                    <!-- Definisi Penyelesaian Masalah -->
                                    <h5 class="mb-10">Kawalan Ulangan For</h5>
                                    <p>
                                        Dalam pengaturcaraan, penggunaan kawalan berulang untuk bilangan
                                        kali tertentu sering melibatkan loop. Biasanya, loop ini
                                        ditetapkan dengan pemboleh ubah pembilang yang bertanggungjawab
                                        untuk mengawal bilangan iterasi atau ulangan.
                                        Nombor indeks akan ditambah secara automatik pada akhir blok penyataan.
                                        Penambahan biasanya bernilai 1 tetapi boleh ditetapkan di bahagian penambahan.
                                    </p>
                                    <div class="card-deck mb-30">
                                        <div class="card">
                                            <img class="card-img-top" src="../../../vendors/images/Module/flowchart-1-4-3a.png" alt="Card image cap">
                                        </div>
                                        <div class="card">
                                            <img class="card-img-top" src="../../../vendors/images/Module/flowchart-1-4-3a1.png" alt="Card image cap">
                                        </div>
                                    </div>
                                    <h5 class="mb-10">Kawalan Ulangan While</h5>
                                    <p>
                                        Kawalan ulangan while membuat ujian terlebih dahulu ke atas input. Jika input memenuhi syarat
                                        boolean, blok arahan dalam gelung akan dilaksanakan. Jika syarat tidak dipenuhi, kawalan ulangan
                                        akan berhenti dan kawalan akan bergerak ke baris arahan selepas kawalan ulangan. Rajah 1.36
                                        menunjukkan kawalan ulangan while.
                                    </p>
                                    <div class="card-deck mb-30">
                                        <div class="card">
                                            <img class="card-img-top" src="../../../vendors/images/Module/flowchart-1-4-3b.png" alt="Card image cap">
                                        </div>
                                        <div class="card">
                                            <img class="card-img-top" src="../../../vendors/images/Module/flowchart-1-4-3b1.png" alt="Card image cap">
                                        </div>
                                    </div>
                                    
                                    <h5 class="mb-10">Kawalan Ulangan Do-While</h5>
                                    <p>
                                        Kawalan ulangan do-while menyerupai kawalan ulangan while. Keadaan
                                        yang membezakan kawalan ulangan do-while ialah kawalan ini membuat
                                        ujian selepas blok arahan dalam gelung dilaksanakan. Oleh itu, kawalan
                                        ulangan do-while memberikan jaminan bahawa blok arahan akan
                                        dilaksanakan walaupun sekali.
                                    </p>
                                    <div class="card-deck mb-30">
                                        <div class="card">
                                            <img class="card-img-top" src="../../../vendors/images/Module/flowchart-1-4-3c.png" alt="Card image cap">
                                        </div>
                                        <div class="card">
                                            <img class="card-img-top" src="../../../vendors/images/Module/flowchart-1-4-3c1.png" alt="Card image cap">
                                        </div>
                                    </div>
                                    <br>
                                    <h5 class="mb-10">Contoh pengaturcaraan Kawalan Ulangan</h5>
                                    <div class="card-deck mb-30">
                                        <!-- Image 1 Container -->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="col-lg-6 col-sm-12 mb-30">
                                                    <div class="terminal">
                                                    <p>
                                                    //Contoh Program For Loop dan While loop
                                                    <br>
                                                    //program print number 1 to 5
                                                    <br>
                                                    for(int i=1;i<=5;i = i + 1){
                                                    <br>
                                                    &nbsp;&nbsp;System.out.println(i);
                                                    <br>
                                                    }
                                                    <br>
                                                    int k = 1;
                                                    <br>
                                                    while(k <= 5){
                                                    <br>
                                                    &nbsp;&nbsp;System.out.println(i);
                                                    <br>
                                                    &nbsp;&nbsp;i = i + 1;
                                                    <br>
                                                    }
                                                    </p>
                                                    </div>
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
                                                                        <ul class="list-unstyled">
                                                                            <li>1</li>
                                                                            <li>2</li>
                                                                            <li>3</li>
                                                                            <li>4</li>
                                                                            <li>5</li>
                                                                        </ul>
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
                                    <div class="card-deck mb-30">
                                        <!-- Image 2 Container -->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="col-lg-6 col-sm-12 mb-30">
                                                    <div class="terminal">
                                                    <p>
                                                        int i = 1;
                                                        <br>
                                                        do{
                                                            <br>
                                                            &nbsp;&nbsp;System.out.println(i);
                                                            <br>
                                                            &nbsp;&nbsp;i = i + 1;
                                                            <br>
                                                        }while(i<=5);
                                                    </p>
                                                    </div>
                                                    <div class="pd-20 card-box height-100-p text-center">
                                                        <a href="#" class="button-85 btn-block" data-toggle="modal" data-target="#small-modal4" type="button">
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
                                                                        <ul class="list-unstyled">
                                                                            <li>1</li>
                                                                            <li>2</li>
                                                                            <li>3</li>
                                                                            <li>4</li>
                                                                            <li>5</li>
                                                                        </ul>
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
            <!-- 1.4.4 -->
            <div class="blog-wrap">
                <div class="container pd-0">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                
                                <div class="blog-caption" >

                                    <!-- Heading -->
                                    <h4 class="mb-10"> 1.4.4 Struktur Kawalan Ulangan yang Melibatkan Operator Increment dan Decrement,Class Math dan Boolean </h4>
                                    <p>
                                        Operator increment (++) dan operator decrement (––) lazimnya digunakan
                                        dalam kawalan ulangan sebagai pembilang. Operator increment (++)
                                        ialah penambahan nilai pemboleh ubah bagi bilangan nombor tertentu.
                                        Sebaliknya, operator decrement (−−) mengurangkan nilai pemboleh ubah
                                        bagi bilangan nombor tertentu.
                                    </p>
                                    <p>
                                        Contoh:
                                        <div class="container">
                                            <table class="table table-bordered">
                                            <thead style="background-color: brown; color: white;">
                                                <tr>
                                                <th>ungkapan</th>
                                                <th>Makna</th>
                                                <th>Contoh</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>i += 1</td>
                                                <td>i = i + 1</td>
                                                <td><p>
                                                    katakan i = 2
                                                    i += 1 menambahkan 1 kepada 2,
                                                    nilai baru adalah 3
                                                </p></td>
                                                </tr>
                                                <tr>
                                                <td>i += 2</td>
                                                <td>i = i + 2</td>
                                                <td><p>
                                                    katakan i = 2
                                                    i += 1 menambahkan 2 kepada 2,
                                                    nilai baru adalah 4
                                                </p></td>
                                                </tr>
                                                <tr>
                                                <td>i += 3</td>
                                                <td>i = i + 3</td>
                                                <td><p>
                                                    katakan i = 2
                                                    i += 1 menambahkan 3 kepada 2,
                                                    nilai baru adalah 5
                                                </p></td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                        <div class="container">
                                            <table class="table table-bordered">
                                            <thead style="background-color: brown; color: white;">
                                                <tr>
                                                <th>ungkapan</th>
                                                <th>Makna</th>
                                                <th>Contoh</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>i -= 1</td>
                                                <td>i = i - 1</td>
                                                <td><p>
                                                    katakan i = 2
                                                    i -= 1 menolak 1 dari 2,
                                                    nilai baru adalah 1
                                                </p></td>
                                                </tr>
                                                <tr>
                                                <td>i -= 2</td>
                                                <td>i = i - 2</td>
                                                <td><p>
                                                    katakan i = 2
                                                    i -= 1 menolak 2 dari 2,
                                                    nilai baru adalah 0
                                                </p></td>
                                                </tr>
                                                <tr>
                                                <td>i -= 3</td>
                                                <td>i = i - 3</td>
                                                <td><p>
                                                    katakan i = 2
                                                    i -= 1 menolak 3 dari 2,
                                                    nilai baru adalah -1
                                                </p></td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                    </p>
                                    <br>
                                    <!-- Definisi Masalah -->
                                    <h5 class="mb-10">Math.Random()</h5>
                                    <p>
                                        Math.random() ialah subatur cara Java untuk menjana nombor secara
                                        rambang. Math.random() menggunakan waktu sistem sebagai nilai benih
                                        untuk memulakan penjanaan nombor rambang. Subatur cara ini digunakan
                                        setiap kali diperlukan untuk menjana suatu nombor rambang antara 0
                                        dan 1.
                                    </p>
                                    <p>
                                        Sekiranya nombor rambang diperlukan adalah di antara 1 hingga 10,
                                        gunakan ungkapan (int)(Math.random()*10) + 1. Sekiranya nombor rambang
                                        diperlukan adalah di antara 1 hingga 100, maka ungkapan (int)(Math.
                                        random()*100) + 1 digunakan.
                                    </p>
                                    <div class="container">
                                            <table class="table table-bordered">
                                            <thead style="background-color: brown; color: white;">
                                                <tr>
                                                <th>Objektif</th>
                                                <th>Contoh</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>Nombor Rawak dari 1 ke 10</td>
                                                <td>(int)(MATH.random()*10+1)</td>
                                                </tr>
                                                <tr>
                                                <td>Nombor Rawak dari 1 ke 100</td>
                                                <td>(int)(MATH.random()*100+1)</td>
                                                </tr>
                                            </tbody>
                                            </table>
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