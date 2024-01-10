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
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('module')}}">Module</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Module 2.2 Reka Bentuk Pangkalan Data Hubungan</li>
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
                                <h3>Module 2.2 : Reka Bentuk Pangkalan Data Hubungan</h3>
								</div>
								<!-- Pengenalan Module -->
									<div class="blog-detail card-box overflow-hidden mb-30">
										<div class="blog-caption">
										    <h4 class="mb-10">Pendahuluan</h4>
                                            <p>
                                                Pangkalan data dengan model hubungan boleh digunakan untuk mengatasi
                                                masalah kelewahan dan ketidaktekalan data secara berkesan.
                                            </p>
                                            <p>
                                                Jadual mengandungi senarai peminjam
                                                buku dan tarikh pulang setiap buku yang dipinjam. Jadual ini lebar
                                                kerana mengandungi banyak lajur atribut. Jadual yang lebar cenderung
                                                mengandungi banyak baris rekod yang mengulang nilai-nilai atribut yang
                                                sama.
                                            </p>
                                            <table class="table table-bordered">
                                                <thead style="background-color: brown; color: white;">
                                                    <tr>
                                                        <th>Kod Buku</th>
                                                        <th>ID Murid</th>
                                                        <th>Nama</th>
                                                        <th>No Telefon</th>
                                                        <th>Tarikh Pinjam</th>
                                                        <th>Tarikh Hantar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Buku1</td>
                                                        <td>Murid1</td>
                                                        <td>ALI BIN AHMAD</td>
                                                        <td>0123456789</td>
                                                        <td>22-Aug-16</td>
                                                        <td>12-Sep-16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Buku2</td>
                                                        <td>Murid1</td>
                                                        <td>ALI BIN AHMAD</td>
                                                        <td>0123456789</td>
                                                        <td>22-Aug-16</td>
                                                        <td>12-Sep-16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Buku3</td>
                                                        <td>Murid1</td>
                                                        <td>ALI BIN AHMAD</td>
                                                        <td>0123456789</td>
                                                        <td>29-Aug-16</td>
                                                        <td>12-Sep-16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Buku4</td>
                                                        <td>Murid2</td>
                                                        <td>FRANCIS JR</td>
                                                        <td>0113456789</td>
                                                        <td>23-Aug-16</td>
                                                        <td>13-Sep-16</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Buku5</td>
                                                        <td>Murid3</td>
                                                        <td>LIM S.W. </td>
                                                        <td>0133456789</td>
                                                        <td>23-Aug-16</td>
                                                        <td>13-Sep-16</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <table class="table table-bordered" style="width: 70%;">
                                                        <thead style="background-color: brown; color: white;">
                                                            <tr>
                                                                <th>ID Murid</th>
                                                                <th>Nama</th>
                                                                <th>No Telefon</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Murid1</td>
                                                                <td>ALI BIN AHMAD</td>
                                                                <td>0123456789</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Murid1</td>
                                                                <td>ALI BIN AHMAD</td>
                                                                <td>0123456789</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Murid1</td>
                                                                <td>ALI BIN AHMAD</td>
                                                                <td>0123456789</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Murid2</td>
                                                                <td>FRANCIS JR</td>
                                                                <td>0113456789</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Murid3</td>
                                                                <td>LIM S.W.</td>
                                                                <td>0133456789</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <table class="table table-bordered" style="width: 90%;">
                                                        <thead style="background-color: brown; color: white;">
                                                            <tr>
                                                                <th>Kod Buku</th>
                                                                <th>ID Murid</th>
                                                                <th>Tarikh Pinjam</th>
                                                                <th>Tarikh Hantar</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Buku1</td>
                                                                <td>Murid1</td>
                                                                <td>22-Aug-16</td>
                                                                <td>12-Sep-16</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Buku2</td>
                                                                <td>Murid1</td>
                                                                <td>22-Aug-16</td>
                                                                <td>12-Sep-16</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Buku3</td>
                                                                <td>Murid1</td>
                                                                <td>29-Aug-16</td>
                                                                <td>12-Sep-16</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Buku4</td>
                                                                <td>Murid2</td>
                                                                <td>23-Aug-16</td>
                                                                <td>13-Sep-16</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Buku5</td>
                                                                <td>Murid3</td>
                                                                <td>23-Aug-16</td>
                                                                <td>13-Sep-16</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <p>
                                                jadual yang lebar boleh dipecahkan kepada beberapa jadual
                                                hubungan yang lebih kecil. Jadual-jadual inilah yang akan disimpan dalam
                                                pangkalan data. Kaedah ini dipanggil <b>penormalan</b> dan digunakan untuk
                                                mencegah kelewahan dan kehilangan ketekalan data.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 2.2.1 -->
            <div class="blog-wrap">
                <div class="container pd-0">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                
                                <div class="blog-caption" >

                                    <!-- Heading -->
                                    <h4 class="mb-10"> Module 2.2.1 Kunci Primer dan Kunci Asing </h4>
                                    <p>
                                        Ingatkah lagi dengan set hubungan? Dalam set hubungan, suatu entiti boleh
                                        dikaitkan dengan suatu entiti yang lain. Entiti-entiti diwakilkan sebagai
                                        jadual-jadual dalam pangkalan data. Kunci hubungan menghubungkan
                                        jadual-jadual yang mewakili entiti-entiti dalam set hubungan.
                                    </p>
                                    
                                    <!-- Definisi Masalah -->
                                    <h5 class="mb-10">Kunci hubungan</h5>
                                    <p>
                                        <b>Kunci hubungan</b> ialah nama atribut khusus dalam jadual yang
                                        digunakan untuk mengekalkan integriti data hubungan. Terdapat dua
                                        kunci hubungan iaitu kunci primer dan kunci asing.
                                    </p>
                                    <hr class="bg-primary" style="height: 4px;">

                                    <!-- Definisi Penyelesaian Masalah -->
                                    <h5 class="mb-10">Kunci Primer</h5>
                                    <p>
                                        <b>Kunci primer</b> ialah atribut (atau gabungan beberapa atribut) dengan
                                        nilai yang unik untuk mewakili setiap baris rekod dalam sesebuah
                                        jadual.


                                        <b>Kunci primer</b> tidak boleh dibiarkan kosong (null ) dan tidak boleh mengandungi nilai yang berulang.

                                        Secara analogi, <b>Kunci primer</b> adalah seperti nombor kad pengenalan yang unik dan sesuai untuk  mengenal pasti identiti setiap murid yang merupakan warganegara Malaysia
                                        Oleh hal yang demikian, penggunaan nama untuk suatu entiti kurang sesuai kerana nama kadang-kadang boleh berulang untuk kejadian entiti yang lain.
                                    </p>
                                    <!-- Gambaran Penyelesaian Masalah -->
                                    <div class="card-deck mb-30">
                                        <!-- Image 1 Container -->
                                        <table class="table table-bordered" style="width: 90%;">
                                             <thead style="background-color: brown; color: white;">
                                                 <tr>
                                                     <th colspan=2>Kunci Primer</th>
                                                 </tr>
                                             </thead>
                                             <tbody>
                                                 <tr>
                                                     <td style="width: 10%">Ciri-Ciri</td>
                                                     <td>
                                                         <ul>
                                                             <li>Mempunyai nilai yang unik iaitu hanya satu-satunya sahaja.</li>
                                                             <li>Tidak boleh dibiarkan kosong (null) iaitu tanpa mengisi data dalam barisnya.</li>
                                                             <li>Tidak boleh mempunyai nilai yang sama secara berulang.</li>
                                                             <li>Nilai yang tetap dan tidak berubah.</li>
                                                         </ul>
                                                     </td>
                                                 </tr>
                                                 <tr>
                                                     <td style="width: 10%">Kepentingan</td>
                                                     <td>
                                                         <ul>
                                                             <li>Memastikan setiap rekod lama yang tersimpan tidak bertindih dengan rekod baharu.</li>
                                                             <li>Memberikan identiti yang unik bagi setiap rekod yang disimpan di dalam pangkalan data.</li>
                                                             <li>Menjadikan data yang disimpan adalah utuh kerana setiap rekodnya mempunyai satu nilai yang unik sebagai pengenalan diri.</li>
                                                             <li>Memudahkan proses carian dan capaian atas rekod. Rekod yang hendak dicari boleh dicapai dengan membuat carian menggunakan kunci primer.</li>
                                                             <li>Mengelakkan berlakunya pertindihan data daripada rekod yang sama berulang-ulang disimpan di dalam pangkalan data. Seterusnya, dapat menjimatkan ruang stor komputer.</li>
                                                         </ul>
                                                     </td>
                                                 </tr>
                                             </tbody>
                                         </table>
                                    </div>
                                    <hr class="bg-primary" style="height: 4px;">
                                    <h5 class="mb-10">Kunci asing</h5>
                                    <p>
                                        <b>Kunci asing</b> ialah atribut yang mengandungi nilai kunci primer
                                        daripada jadual sasaran. Dengan kata lain, untuk menghasilkan hubungan
                                        di antara dua jadual, jadual yang ingin mewujudkan hubungan akan
                                        menambahkan atribut kunci primer daripada jadual sasaran sebagai kunci
                                        asing.
                                    </p>
                                    <div class="card-deck mb-30">
                                        <!-- Image 1 Container -->
                                            <img class="card-img-top" src="../../../vendors/images/module-2-2/kunci-asing.png" style="max-width: 40%; height: auto;" alt="Card image cap">
                                    </div>
                                    <table class="table table-bordered" style="width: 90%;">
                                        <thead style="background-color: brown; color: white;">
                                            <tr>
                                                <th>Jadual PINJAMAN</th>
                                                <th>Jadual PEMINJAM</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <ol>
                                                        <li>Dalam jadual hubungan Pinjaman,terdapat empat atribut iaitu Kod Buku, ID Murid, TarikhPinjam dan TarikhPulang.</li>
                                                        <li>Lajur untuk atribut Kod Buku tidak boleh dibenarkan kosong, dan setiap satu nilai atribut adalah unik (tiada ulangan).Keunikan nilai menjadikan atribut kod buku sebagai kunci primer.</li>
                                                        <li>Selain atribut Kod Buku, satu lagi atribut yang menarik ialah ID Murid. Perhatikan bahawa atribut ID Murid ialah kunci primer dalam Jadual PEMINJAM. Oleh yang demikian, ID_Murid dalam Jadual PINJAMAN menjadi penghubung kepada Jadual PEMINJAM. ID_Murid ialah kunci asing dalam Jadual PINJAMAN.</li>
                                                    </ol>
                                                </td>
                                                <td>
                                                    <ol>
                                                        <li>Dalam Jadual PEMINJAM, kunci primer ialah ID_Murid. Perhatikan bahawa atribut yang sama muncul dalam Jadual PINJAMAN sebagai kunci asing.</li>
                                                        <li>Adakah Jadual PEMINJAM mempunyai kunci asing? Jadual PEMINJAM tidak mempunyai kunci asing kerana tiada sebarang hubungan kepada kunci primer.</li>
                                                    </ol>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- 2.2.2 -->
            <div class="blog-wrap">
                <div class="container pd-0">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                
                                <div class="blog-caption" >

                                    <!-- Heading -->
                                    <h4 class="mb-10"> Module 2.2.2 Gambar Rajah Perhubungan Entiti (ERD) </h4>
                                    <p>
                                        Gambar Rajah Perhubungan Entiti (Entity Relationship Diagram - <b>ERD</b>) ialah
                                        teknik grafik untuk memodelkan data. Model yang dihasilkan adalah pada
                                        tahap konsep dan tidak terikat kepada mana-mana Sistem Pengurusan
                                        Pangkalan Data (Database Management System - <b>DBMS</b>). <b>ERD</b> mewakili
                                        persekitaran dalam struktur entiti, hubungan entiti dan atribut entiti.
                                        Komponen-komponen asas ERD ialah:
                                        <ol>
                                            <li>Entiti</li>
                                            <li>Hubungan</li>
                                            <li>Atribut</li>
                                        </ol>
                                    </p>
                                    <hr class="bg-primary" style="height: 4px;">
                                    <!-- Definisi Masalah -->
                                    <h5 class="mb-10">Entiti</h5>
                                    <p>
                                        <b>Entiti</b> ialah sesuatu yang mempunyai data untuk disimpan. Entiti biasanya
                                        dilabelkan dengan kata nama. Simbol <b>Entiti</b> ialah segi empat dengan
                                        name entiti di tengah-tengahnya.
                                    </p>
                                    <div class="card">
                                        <div class="card-body">
                                            Nama Entiti
                                        </div>
                                    </div>
                                    <p>
                                        <b>Entiti</b> boleh terdiri daripada elemen-elemen persekitaran (orang, objek,
                                        tempat, konsep dan kejadian). <b>Entiti</b> orang, objek dan tempat berbentuk
                                        fizikal. Konsep dan kejadian pula berbentuk abstrak. Contoh setiap satu
                                        diberikan dalam Jadual
                                    </p>
                                    <table class="table table-bordered" style="width: 100%; margin:10;">
                                        <thead style="background-color: brown; color: white;">
                                            <tr>
                                                <th>Bil Jenis Entiti Contoh</th>
                                                <th>Jenis Entiti</th>
                                                <th>Contoh</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    1 
                                                </td>
                                                <td>
                                                    Orang
                                                </td>
                                                <td>
                                                    Guru, murid, doktor
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2 
                                                </td>
                                                <td>
                                                    Tempat 
                                                </td>
                                                <td>
                                                    Negara, negeri, daerah, bandar, desa
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    Objek
                                                </td>
                                                <td>
                                                    Produk, kenderaan, peralatan, bangunan
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4 
                                                </td>
                                                <td>
                                                    Peristiwa 
                                                </td>
                                                <td>
                                                    Pendaftaran, permohonan, rayuan, pertanyaan, transaksi
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    Konsep
                                                </td>
                                                <td>
                                                    Akaun, kursus
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <hr class="bg-primary" style="height: 4px;">
                                    <!-- Definisi Penyelesaian Masalah -->
                                    <h5 class="mb-10">Hubungan</h5>
                                    <p>
                                        <b>Hubungan</b> ialah perkaitan yang wujud antara dua entiti. Hubungan
                                        biasanya dilabelkan menggunakan kata kerja. Simbol hubungan ialah
                                        <b>rombus</b>.
                                    </p>
                                    <div class="w-50" style="height: 10%">
                                        <img class="card-img-top" src="../../../vendors/images/module-2-2/kata-kerja.svg" alt="Card image cap">
                                    </div>
                                    <p>
                                        Contoh: mendaftar, mempunyai, mengisi, meminjam
                                        Rajah berikut menunjukkan hubungan "mendaftar" antara entiti subjek
                                        Murid dan entiti objek Kursus. Rajah berikut boleh dibaca sebagai "Murid
                                        Mendaftar Kursus."
                                        Contoh penggunaan:
                                    </p>
                                    <div class="w-50" style="height: 10%">
                                        <img class="card-img-top" src="../../../vendors/images/module-2-2/contoh-hubungan.png" alt="Card image cap">
                                    </div>
                                    <br>
                                    <hr class="bg-primary" style="height: 4px;">
                                    <h5 class="mb-10">Atribut</h5>
                                    <p>
                                        <b>Atribut</b> ialah ciri atau sifat entiti. Setiap set entiti terdiri daripada
                                        beberapa atribut. <b>Atribut</b> diwakili oleh simbol <b>elips</b>.
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top w-50" src="../../../vendors/images/module-2-2/nama.svg" alt="Card image cap">
                                    </div>
                                    <p>
                                        Contoh atribut untuk entiti murid: ID murid, nama, tingkatan, jantina
                                        Contoh penggunaan:
                                        Rajah 2.30 menunjukkan entiti Murid mempunyai atribut seperti
                                        ID Murid, Nama dan Tingkatan.
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top w-50" src="../../../vendors/images/module-2-2/murid.png" alt="Card image cap">
                                    </div>
                                    <br>
                                    <hr class="bg-primary" style="height: 4px;">
                                    <h5 class="mb-10">Langkah-langkah melukis ERD</h5>
                                    <p>
                                        Langkah-langkah melukis ERD adalah seperti berikut:
                                    </p>
                                    <ol>
                                        <li>Kenal pasti data yang diperlukan oleh sistem dari persekitaran pangkalan data.</li>
                                        <li>Kenal pasti kumpulan untuk data yang berkait secara logikal. Kumpulan ini dinamakan sebagai entiti.</li>
                                        <li>Kenal pasti perkaitan antara dua entiti untuk semua entiti.</li>
                                    </ol>
                                    <h5 class="mb-10">Contoh</h5>
                                    <p>
                                        Berikut ialah langkah-langkah untuk melukis ERD untuk kenyataan "Murid mengambil Peperiksaan".
                                    </p>
                                    <ol>
                                        <li>Kenal pasti entiti: Murid, Peperiksaan</li>
                                        <li>Kenal pasti hubungan: mengambil</li>
                                        <li>Lukiskan simbol entiti dan hubungan yang mengaitkan kedua-dua entiti.</li>
                                    </ol>
                                    <div class="w-50">
                                        <img class="card-img-top w-50" src="../../../vendors/images/module-2-2/contoh-erd.png" alt="Card image cap">
                                    </div>
                                    <p>
                                        Ingatkah lagi konsep kekardinalan dalam pangkalan data hubungan?
                                        Kekardinalan menunjukkan kuantiti entiti-entiti dalam perhubungan.
                                    </p>
                                    <br>
                                    <hr class="bg-primary" style="height: 4px;">
                                    <h5 class="mb-10">Jenis-jenis kekardinalan</h5>
                                    <table class="table table-bordered" style="width: 100%; margin:10;">
                                        <thead style="background-color: brown; color: white;">
                                            <tr>
                                                <th>Kekardinalan</th>
                                                <th>Penerangan</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <b>1:1</b> (satu–ke–satu)
                                                </td>
                                                <td>
                                                    <p>
                                                        Hubungan:"Seorang warganegara mempunyai satu kad pengenalan sahaja."
                                                    </p>
                                                    <img class="card-img-top w-50" src="../../../vendors/images/module-2-2/1-1.png" alt="Card image cap">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>1:M</b> (satu–ke–banyak)
                                                </td>
                                                <td>
                                                    <p>
                                                        Hubungan:"Seorang murid boleh menyertai lebih daripada satu kelab di sekolah."
                                                    </p>
                                                    <img class="card-img-top w-50" src="../../../vendors/images/module-2-2/1-M.png" alt="Card image cap">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>M:M</b> (banyak–ke–banyak)
                                                </td>
                                                <td>
                                                    <p>
                                                        Hubungan:"Banyak pelanggan pasar raya membeli pelbagai jenis barangan."
                                                    </p>
                                                    <img class="card-img-top w-50" src="../../../vendors/images/module-2-2/M-M.png" alt="Card image cap">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>         
                            </div>         
                        </div>         
                       
                    </div>
                </div>
            </div>
            <!-- 2.2.3 -->
            <div class="blog-wrap">
                <div class="container pd-0">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                
                                <div class="blog-caption" >

                                    <!-- Heading -->
                                    <h4 class="mb-10"> 2.2.3 Mereka Bentuk Pangkalan Data Hubungan </h4>
                                    <p>
                                        Bagaimanakah suatu pangkalan data yang sesuai direka bentuk untuk kegunaan sistem maklumat?
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top" src="../../../vendors/images/module-2-2/bentuk1.png" alt="Card image cap">
                                    </div>
                                    <p>
                                        Reka bentuk jadual hubungan perlu memenuhi pertimbangan seperti yang
                                        disenaraikan di atas. Perkara ini dilakukan secara sistematik. Setelah
                                        mengenal pasti entiti-entiti, atribut-atribut, hubungan antara entiti dan
                                        kardinaliti melalui ERD, langkah yang seterusnya adalah menghasilkan
                                        set hubungan. ERD bagi entiti Murid diberikan seperti dalam rajah yang
                                        berikut.
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top" src="../../../vendors/images/module-2-2/bentuk2.png" alt="Card image cap">
                                    </div>
                                    <p>
                                        Set hubungan ialah set atribut dalam jadual hubungan. Set hubungan
                                        disediakan semasa proses merancang dan mereka bentuk pangkalan
                                        data yang menggambarkan entiti-entiti yang hendak disimpan, atribut
                                        yang diperlukan dan hubungan antara entiti tersebut. Set hubungan
                                        dihasilkan daripada ERD dan boleh dinyatakan dalam dua format, iaitu:
                                    </p>
                                    <ol>
                                        <li>Penyataan teks  </li>
                                        <li>Perwakilan grafik</li>
                                    </ol>
                                    <br>
                                    <hr class="bg-primary" style="height: 4px;">
                                    <!-- Definisi Masalah -->
                                    <h5 class="mb-10">Penyataan teks</h5>
                                    <p>
                                        <b>Format:</b>NAMA ENTITI(Atribut 1&lt;KP&gt;, Atribut 2,....Atribut N)
                                    </p>
                                    <p>
                                        <b>Contoh 1:</b> Murid(IDMurid&lt;KP&gt;, Nama, Jantina, Tingkatan)
                                    </p>
                                    <p>
                                        Penyataan teks mudah untuk dihasilkan. Nama entiti ditulis dan kemudian
                                        diikuti oleh kurungan. Dalam kurungan, atribut-atribut entiti tersebut
                                        ditulis. Atribut yang berfungsi sebagai kunci primer ditandakan dengan
                                        menambah <b>"&lt;KP&gt;"</b> selepas nama atribut. Atribut yang berfungsi sebagai
                                        kunci asing pula ditandakan dengan menambah <b>"&lt;KA&gt;"</b>. Contoh yang
                                        diberi menunjukkan entiti MURID mempunyai atribut-atribut IDMurid,
                                        Nama, Jantina dan Tingkatan. IDMurid dipilh sebagai kunci primer kerana
                                        IDMurid mewakili setiap baris rekod secara unik.
                                    </p>
                                    <br>
                                    <hr class="bg-primary" style="height: 4px;">
                                    <!-- Definisi Masalah -->
                                    <h5 class="mb-10">Perwakilan grafik</h5>
                                    <p>
                                        <b>Format:</b>NAMA ENTITI
                                    </p>
                                    <table class="table table-bordered" style="background: #fab892">
                                        <thead>
                                            <tr>
                                                <td>Atribut 1&lt;KP&gt;</td>
                                                <td>Atribut 2 </td>
                                                <td>Atribut...</td>
                                                <td>Atribut-N</td>
                                            </tr>
                                        </thead>
                                    </table>
                                    <p>
                                        <b>Contoh:</b>MURID
                                    </p>
                                    <table class="table table-bordered" style="background: #fab892">
                                        <thead>
                                            <tr>
                                                <td>IDMURID&lt;KP&gt;</td>
                                                <td>NAMA</td>
                                                <td>Jantina</td>
                                                <td>Tingkatan</td>
                                            </tr>
                                        </thead>
                                    </table>
                                    <p>
                                        Perwakilan grafik menggunakan jadual satu-baris. Nama entiti ditulis di
                                        atas baris jadual tersebut. Bilangan lajur yang diperlukan bergantung
                                        kepada bilangan atribut. Kunci primer sama seperti perwakilan teks,
                                        iaitu kunci primer ditanda dengan "<b>&lt;KP&gt;</b>" manakala kunci asing ditanda
                                        dengan "<b>&lt;KA&gt;</b>".
                                        Anda boleh perhatikan bahawa set hubungan mengandungi butiran
                                        yang sama dengan ERD. Rajah yang berikut menunjukkan bagaimana ERD
                                        dapat diterjemahkan kepada set hubungan dengan mudahnya.
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top" src="../../../vendors/images/module-2-2/bentuk3.png" alt="Card image cap">
                                    </div>
                                    <p>
                                        Apakah peranan kedua-dua teknik dalam reka bentuk pangkalan data?
                                        Antara ERD dan set hubungan, yang manakah lebih mudah disunting?
                                    </p>
                                    <p>
                                        ERD sesuai digunakan untuk melakar entiti, atribut dan hubungan. Set
                                        hubungan lebih sesuai digunakan untuk analisis yang melibatkan struktur
                                        entiti yang disunting berulang kali.
                                    </p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- 2.2.4 -->
            <div class="blog-wrap">
                <div class="container pd-0">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                
                                <div class="blog-caption" >

                                    <!-- Heading -->
                                    <h4 class="mb-10"> 2.2.4 Kebergantungan fungsi sepenuh, separa dan transitif </h4>
                                    <p>
                                        Setiap atribut dalam jadual bergantung kepada atribut <b>kunci primer</b>.
                                        Sebagai contoh, dalam jadual murid, atribut-atribut seperti Nama,
                                        Jantina dan Tingkatan bergantung kepada atribut <b>kunci primer</b>, IDMurid.
                                        Menganalisis kebergantungan membolehkan sesebuah jadual dipecahkan
                                        kepada beberapa jadual hubungan yang lebih kecil untuk mengurangkan
                                        kelewahan data tanpa menjejaskan integriti rujukan. Proses ini disebut
                                        penormalan dan memahami konsep kebergantungan amat penting untuk
                                        proses ini.
                                    </p>
                                    <h5 class="mb-10">Jenis-jenis kebergantungan</h5>
                                    <table class="table table-bordered" style="background: #fab892">
                                        <thead>
                                            <tr>
                                                <td>Jenis Kebergantungan</td>
                                                <td>Penerangan</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Kebergantungan fungsi sepenuh</td>
                                                <td>Berlaku apabila atribut-atribut bergantung sepenuhnya kepada kesemua atribut kunci dalam jadual.</td>
                                            </tr>
                                            <tr>
                                                <td>Kebergantungan fungsi separa</td>
                                                <td>Berlaku apabila atribut-atribut bergantung kepada salah satu daripada atribut kunci dalam jadual.</td>
                                            </tr>
                                            <tr>
                                                <td>Kebergantungan fungsi transitif</td>
                                                <td>Berlaku apabila atribut-atribut bergantung kepada atribut biasa yang lain dalam jadual.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <p>
                                    Untuk memahami dengan lebih lanjut, pertimbangkan jadual berikut
                                    Jadual ini adalah jadual buku pinjaman untuk merekod butiran
                                    murid yang meminjam dan tarikh hantar buku tersebut. Dalam jadual ini,
                                    atribut-atribut Kod Buku dan ID Murid sahaja merupakan kunci primer.
                                    </p>
                                    <table class="table table-bordered" style="background: #fab892">
                                        <thead>
                                            <tr>
                                                <td>Kod Buku</td>
                                                <td>Nama Buku</td>
                                                <td>Pengarang</td>
                                                <td>ID Murid</td>
                                                <td>Nama Murid</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>IPB124044</td>
                                                <td>Java Programming</td>
                                                <td>Maruyama et al</td>
                                                <td>125007</td>
                                                <td>Harris bin Aman</td>
                                            </tr>
                                            <tr>
                                                <td>IPB257868</td>
                                                <td>C Programming</td>
                                                <td>M. A. Bakar</td>
                                                <td>125007</td>
                                                <td>Harris bin Aman</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p align="center">Jadual BUKU PINJAMAN</p>
                                    <br>
                                    <hr class="bg-primary" style="height: 4px;">
                                    <!-- Definisi Masalah -->
                                    <h5 class="mb-10">Kebergantungan Fungsi Sepenuh</h5>
                                    <p>
                                        Perhatikan bahawa atribut Tarikh Hantar bergantung kepada dua kunci
                                        primer iaitu Kod Buku dan ID Murid. Sekiranya tiada salah satu kunci primer,
                                        Tarikh Hantar buku tidak dapat ditentukan. Jadi, Tarikh Hantar mempunyai
                                        kebergantungan fungsi sepenuh kepada kedua-dua kunci primer.
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top" src="../../../vendors/images/module-2-2/2-2-4a.png" alt="Card image cap">
                                    </div>
                                    <p>
                                        Satu lagi kebergantungan fungsi sepenuh adalah antara TarikhPinjam
                                        dengan kunci primer NoBuku dan IDPeminjam.
                                    </p>
                                    <br>
                                    <hr class="bg-primary" style="height: 4px;">
                                    <h5 class="mb-10">Kebergantungan Fungsi Separa</h5>
                                    <p>
                                        Perhatikan juga bahawa dalam Rajah di bawah, atribut Nama Buku bergantung
                                        kepada Kod Buku sahaja dan bukan kedua-dua Kod Buku dan ID Murid.
                                        Jadi, Nama Buku mempunyai kebergantungan fungsi separa kepada kod
                                        Buku.
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top" src="../../../vendors/images/module-2-2/2-2-4b.png" alt="Card image cap">
                                    </div>
                                    <br>
                                    <hr class="bg-primary" style="height: 4px;">
                                    <h5 class="mb-10">Kebergantungan Fungsi Transitif</h5>
                                    <p>
                                        Kebergantungan fungsi transitif ialah kebergantungan yang tidak
                                        melibatkan mana-mana atribut kunci primer dalam jadual yang tertera di bawah.
                                        Jadi, kebergantungan di antara atribut Nama Murid dengan atribut No
                                        Telefon Bimbit adalah jenis kebergantungan fungsi transitif. Dalam contoh
                                        yang diberikan, memang diketahui secara umum bahawa No Telefon
                                        Bimbit adalah unik kepada pemiliknya. Oleh itu, adalah munasabah jika
                                        kebergantungan wujud di antara Nama Murid dan No Telefon Bimbit.
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top" src="../../../vendors/images/module-2-2/2-2-4c.png" alt="Card image cap">
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- 2.2.5 -->
            <div class="blog-wrap">
                <div class="container pd-0">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                
                                <div class="blog-caption" >

                                    <!-- Heading -->
                                    <h4 class="mb-10"> 2.2.5 Proses Penormalan Data Sehingga 3NF Terhadap </h4>
                                    <!-- Definisi Masalah -->
                                    <br>
                                    <h5 class="mb-10">Skema Hubungan</h5>
                                    <p>
                                        Jadual baharu biasanya berada dalam bentuk tidak ternormal, ataupun 0NF. Jadual 0NF boleh berfungsi
                                        tetapi akan menyebabkan penyimpanan data lewah yang banyak dan boleh menjejaskan integriti data
                                        apabila kecuaian berlaku sewaktu kemas kini. Oleh itu, jadual 0NF tidak sesuai dilaksanakan dalam
                                        sistem pangkalan data.
                                    </p>
                                    <p>
                                        Contoh jadual 0NF adalah seperti dalam Rajah berikut. Banyak duplikasi nilai atribut seperti ID Murid,
                                        Nama Murid dan No Telefon Bimbit untuk setiap pinjaman buku yang dapat dilihat. Perhatikan juga
                                        bahawa lajur-lajur dalam jadual 0NF adalah tidak atomik kerana terdapat gabungan atribut-atribut
                                        untuk membentuk satu lajur. Lajur Buku mengandungi gabungan lajur-lajur Kod Buku, Nama Buku dan
                                        Pengarang.
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top" src="../../../vendors/images/module-2-2/2-2-5a.png" alt="Card image cap">
                                    </div>
                                    <p>
                                        Oleh sebab itu, sesebuah jadual baharu perlu disemak terlebih dahulu sebelum dilaksanakan
                                        dalam sistem pangkalan data. Semak sama ada jadual tersebut sudah ternormal ataupun tidak. Jika
                                        belum ternormal, ambil langkah-langkah yang sepatutnya untuk mengubah jadual tersebut kepada
                                        bentuk ternormal.
                                    </p>
                                    <p>
                                        <b>Penormalan</b> ialah satu kaedah menganalisis jadual-jadual berasaskan atribut kunci dan
                                        kebergantungan fungsi dengan tujuan mengurangkan duplikasi data dalam pangkalan data.
                                        Penormalan, pada kebiasaannya, akan memecahkan jadual 0NF kepada dua atau lebih <b>jadual-jadual hubungan</b>
                                        yang sudah ternormal.
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top" src="../../../vendors/images/module-2-2/2-2-5b.png" alt="Card image cap">
                                    </div>
                                    <div class="w-50">
                                        <img class="card-img-top" src="../../../vendors/images/module-2-2/2-2-5c.png" alt="Card image cap">
                                    </div>
                                    <p>
                                        Penormalan dilakukan secara sistematik dan berperingkat. Umumnya, terdapat tiga bentuk
                                        penormalan iaitu 1NF, 2NF dan 3NF. Penormalan dibuat sehingga jadual mencapai peringkat 2NF
                                        ataupun 3NF. Ikuti langkah-langkah seperti yang berikut:
                                    </p>
                                    <ol>
                                        <li>Tukarkan skema perhubungan 0NF kepada 1NF</li>
                                        <li>Tukarkan skema-skema hubungan 1NF kepada 2NF</li>
                                        <li>Tukarkan skema-skema perhubungan 2NF kepada 3NF</li>
                                    </ol>
                                    <br>
                                    <hr class="bg-primary" style="height: 4px;">

                                    <h5 class="mb-10">Tukarkan skema perhubungan 0NF kepada 1NF</h5>
                                    <p>
                                        Objektif penukaran adalah untuk memastikan lajur jadual adalah atomik dan mempunyai kunci
                                        primer. Langkah pertama ialah memastikan keatomikan data-data dengan menggunakan satu
                                        lajur untuk setiap satu atribut.Lihat rajah berikut untuk penerangan.
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top" src="../../../vendors/images/module-2-2/2-2-5d.png" alt="Card image cap">
                                    </div>
                                    <p align="center">Jadual PINJAMAN BUKU dalam bentuk 1NF</p>
                                    <br>
                                    <p>
                                        Berdasarkan jadual 1NF, hasilkan skema hubungan. Skema hubungan menunjukkan struktur
                                        jadual dalam pangkalan data. Gunakan nama jadual (entiti) dalam huruf besar diikuti oleh senarai
                                        atribut dalam kurungan. Sintaks skema hubungan adalah seperti yang berikut:
                                    </p>
                                    <div class="alert alert-warning" role="alert">
                                        NAMA ENTITI (atribut 1 kunci primer &lt;KP&gt;, atribut 2 kunci asing &lt;KA&gt;,atribut 3, atribut 4, ...)
                                    </div>
                                    <br>
                                    <p>
                                        Skema hubungan 1NF mengandungi semua atribut dalam jadual asal. Kenal pasti kunci primer
                                        dengan mengkaji hubungan kebergantungan fungsi sepenuh antara atribut-atribut dalam skema
                                        ataupun jadual. Tandakan atribut yang menjadi kunci primer menggunakan akhiran "<b>&lt;KP&gt;</b>". Lihat
                                        contoh berikut.
                                    </p>
                                    <p><b>Contoh:</b></p>
                                    <div class="alert alert-warning" role="alert">
                                    BUKU PINJAMAN (Kod Buku &lt;KP&gt;, Nama Buku, Pengarang, ID Murid &lt;KP&gt;, Nama Murid, No Telefon Bimbit, Tarikh Pinjam, Tarikh Hantar)
                                    </div>
                                    <br>
                                    <hr class="bg-primary" style="height: 4px;">

                                    <h5 class="mb-10">Tukarkan skema-skema hubungan 1NF kepada 2NF</h5>
                                    <p>
                                        Objektif penukaran bentuk 1NF kepada 2NF adalah untuk menghapuskan kebergantungan fungsi
                                        separa. Jadual 1NF mempunyai kebergantungan fungsi separa. Oleh itu, kenal pasti
                                        kumpulan-kumpulan data berulang dan pecahkan kepada jadual-jadual berasingan yang dipanggil jadual hubungan.
                                    </p>
                                    <p>
                                        Kaji skema 1NF dengan mencari kebergantungan antara atribut bukan-kunci dengan atribut kunci
                                        primer. Kebergantungan fungsi separa berlaku apabila atribut biasa bergantung kepada salah satu
                                        atribut kunci primer sahaja. Kenal pasti kumpulan atribut tersebut dan asingkan sebagai skema
                                        hubungan yang baharu.
                                    </p>
                                    <br>
                                    <p><b>Contoh:</b></p>
                                    <div class="alert alert-warning" role="alert">
                                        BUKU PINJAMAN (Kod Buku &lt;KP&gt;, Nama Buku, Pengarang, (ID Murid &lt;KP&gt;, Nama Murid, No Telefon Bimbit), Tarikh Pinjam, Tarikh Hantar)
                                    </div>
                                    <p>
                                        Asingkan atribut-atribut bagi kumpulan data yang berulang dan berikan nama entiti Murid.
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top" src="../../../vendors/images/module-2-2/2-2-5e.png" alt="Card image cap">
                                    </div>
                                    <br>
                                    <p>
                                        Tukar nama jadual BUKU PINJAMAN kepada PINJAMAN. Bagi entiti Murid, jadikan ID Murid sebagai
                                        kunci primer kerana ID Murid membantu pengenalan nilai-nilai atribut lain secara unik. Tambah
                                        akhiran &lt;KP&gt; kepada ID Murid. Atribut ID Murid yang sama dikekalkan dalam jadual PINJAMAN
                                        tetapi dijadikan juga sebagai atribut kunci asing, tambah akhiran &lt;KA&gt;.
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top" src="../../../vendors/images/module-2-2/2-2-5f.png" alt="Card image cap">
                                    </div>
                                    <p><b>Nota:</b></p>
                                    <ul>
                                        <li>
                                            Semak jadual Pinjaman. Pastikan atribut Kod Buku dan ID Murid kekal sebagai kunci primer.
                                            Kekalkan akhiran &lt;KP&gt; bagi kedua-dua atribut tersebut.
                                        </li>
                                        <li>
                                            Pastikan jadual Murid mempunyai atribut ID Murid sebagai kunci primer.
                                        </li>
                                        <li>
                                            Pastikan jadual-jadual dihubungkan melalui pasangan atribut kunci primer dan kunci asing
                                            yang betul, iaitu ID Murid &lt;KA&gt; dalam jadual PINJAMAN kepada ID Murid &lt;KP&gt; dalam jadual
                                            MURID.
                                        </li>
                                    </ul>
                                    <br>
                                    <p>
                                        Kedua-dua jadual PINJAMAN dan MURID yang dihasilkan masih berada dalam 1NF selagi
                                        mengandungi kebergantungan fungsi separa. Marilah menganalisis kedua-dua jadual tersebut
                                        untuk sebarang kemungkinan kewujudan saki-baki kebergantungan fungsi separa.
                                    </p>
                                    <p>
                                        Adakah jadual 1NF PINJAMAN mempunyai kebergantungan fungsi separa?
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top" src="../../../vendors/images/module-2-2/2-2-5g.png" alt="Card image cap">
                                    </div>
                                    <ul>
                                        <li>
                                            Dalam jadual PINJAMAN,Tarikh Pinjam dan Tarikh Hantar bergantung penuh kepada kedua-dua
                                            kunci primer Kod Buku dan ID Murid. Ini adalah kebergantungan fungsi sepenuh.
                                        </li>
                                        <li>
                                            Atribut-atribut Nama Buku dan Pengarang bergantung kepada kunci primer Kod Buku
                                            sahaja walaupun ID Murid juga adalah kunci primer. Oleh itu, jadual PINJAMAN mempunyai
                                            kebergantungan fungsi separa di antara Nama Buku dan Pengarang dengan Kod Buku.
                                        </li>
                                    </ul>
                                    <p>
                                        Oleh itu, kumpulan atribut data dengan kebergantungan fungsi separa diasingkan sebagai skema
                                        hubungan baharu. Berikan nama entiti Buku.
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top" src="../../../vendors/images/module-2-2/2-2-5h.png" alt="Card image cap">
                                    </div>
                                    <p><b>Nota:</b></p>
                                    <ul>
                                        <li>
                                            Semak jadual BUKU. Atribut Kod Buku dijadikan kunci primer.
                                        </li>
                                        <li>
                                            Semak jadual PINJAMAN. Atribut Kod Buku kekal sebagai salah satu kunci primer. Pada masa
                                            yang sama, Kod Buku juga menjadi kunci asing untuk menghubungkan jadual PINJAMAN
                                            kepada jadual BUKU. Tambah akhiran &lt;KA&gt; kepada Kod Buku jadual PINJAMAN.
                                        </li>
                                        <li>
                                            Semak kedua-dua jadual untuk kewujudan lain-lain kebergantungan fungsi separa. Jika tidak
                                            ada, maka jadual PINJAMAN dan jadual BUKU sudah menjadi jadual 2NF.
                                        </li>
                                    </ul>
                                    <br>
                                    <p>
                                        Gunakan analisis yang sama ke atas jadual 1NF MURID. Jadual MURID tiada kebergantungan
                                        fungsi separa. Oleh itu, jadual MURID sudah berada dalam bentuk 2NF.
                                    </p>
                                    <div class="alert alert-warning" role="alert">
                                        MURID (ID Murid &lt;KA&gt;, Nama Murid, No Telefon Bimbit)
                                    </div>
                                    <p>
                                        Hasil pernormalan menghasilkan skema perhubungan jadual-jadual 2NF berikut.
                                    </p>
                                    <div class="alert alert-warning" role="alert">
                                        PINJAMAN (Kod Buku <KP> <KA>, ID Murid <KP> <KA>, Tarikh Pinjam, Tarikh Hantar)
                                        BUKU (Kod Buku <KP>, Nama Buku, Pengarang)
                                        MURID (ID Murid <KP>, Nama Murid, No Telefon Bimbit)
                                    </div>
                                    <br>
                                    <hr class="bg-primary" style="height: 4px;">

                                    <h5 class="mb-10">Tukarkan skema-skema perhubungan 2NF kepada 3NF</h5>
                                    <p>
                                        Objektif penukaran adalah untuk menghapuskan kebergantungan fungsi transitif. Pada
                                        kebiasaannya, penormalan sehingga tahap 2NF sudah memadai. Penormalan ke tahap 3NF cuma
                                        perlu dalam situasi di mana terdapat kebergantungan fungsi transitif di antara atribut dalam
                                        sesetengah jadual. Kebergantungan ini tersembunyi kerana wujud di antara atribut-atribut biasa,
                                        iaitu tidak melibatkan atribut kunci primer. Biasanya, ini dapat dikenal pasti daripada pengalaman
                                        penggunaan data-data.
                                    </p>
                                    <br>
                                    <p><b>Contoh:</b></p>
                                    <p>
                                        Kaji skema hubungan jadual MURID untuk mencari kebergantungan fungsi transitif:
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top" src="../../../vendors/images/module-2-2/2-2-5i.png" alt="Card image cap">
                                    </div>
                                    <p>
                                        Jika dilihat dengan teliti, skema MURID mempunyai tiga atribut ID Murid, Nama Murid dan No
                                        Telefon Bimbit. ID Murid ialah kunci primer dan oleh itu kedua-dua atribut Nama Murid dan No
                                        Telefon Bimbit bergantung kepada ID Murid. Tetapi dalam masa yang sama, atribut Nama Murid
                                        turut bergantung kepada No Telefon Bimbit walaupun No Telefon Bimbit bukan kunci primer. Ini
                                        adalah kebergantungan fungsi transitif.
                                    </p>
                                    <p>
                                        Oleh itu, asingkan fungsi transitif tersebut dengan menghasilkan satu skema baharu, TELEFON.
                                        Skema hubungan TELEFON mengandungi atribut Nama Murid dan No Telefon Bimbit. Jadikan
                                        Nama Murid sebagai kunci primer. Dalam skema jadual MURID, atribut No Telefon Bimbit dijadikan
                                        kunci asing.
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top" src="../../../vendors/images/module-2-2/2-2-5j.png" alt="Card image cap">
                                    </div>
                                    <p>
                                        Bagaimanakah dengan jadual-jadual 2NF yang lain seperti PINJAMAN dan BUKU? Oleh sebab
                                        analisis ke atas kedua-dua skema jadual PINJAMAN dan BUKU tidak meghasilkan kebergantungan
                                        baharu, maka jadual-jadual tersebut tidak mempunyai bentuk 3NF.
                                    </p>
                                    <br>
                                    <p>
                                        Sebagai kesimpulan, bentuk-bentuk normal (normal forms) ialah peringkat-peringkat penukaran
                                        sesuatu skema hubungan tak-ternormal kepada skema-skema hubungan yang memenuhi kriteria
                                        bentuk normal. Kriteria-kriteria bentuk normal (NF) dirumuskan seperti yang berikut:
                                    </p>
                                    <div class="w-50">
                                        <img class="card-img-top" src="../../../vendors/images/module-2-2/2-2-5k.png" alt="Card image cap">
                                    </div>
                                    <p>
                                        Ciri-ciri bentuk penormalan perlu diingat secara teliti kerana boleh membantu analisis jenis bentuk
                                        normal jadual dan menukarkan bentuk normal tersebut kepada peringkat yang lebih tinggi, iaitu 2NF
                                        dan kadang-kadang 3NF.
                                    </p>
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