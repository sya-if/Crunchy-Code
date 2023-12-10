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
                                <li class="breadcrumb-item"><a href="{{url('/module')}}">Module</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Module 1.7 Pembangunan Aplikasi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

                                <div class="blog-caption" >

                                    <!-- Heading -->
                                    <h4 class="mb-10"> Module 1.7 Pengenalan </h4>
                                    <p>
                                        Kitaran Hayat Pembangunan Sistem (Software development Life Cycle-SDLC) juga dikenali sebagai kitaran hayat pembangunan aplikasi.
                                        <br><br>Kitaran hayat pembangunan aplikasi ialah istilah yang digunakan dalam kejuruteraan sistem dan perisian, sistem maklumat, dan pembangunan aplikasi yang menjelaskan proses merancang, mereka bentuk, menguji dan mengimplementasi sesuatu aplikasi atau perisian. SDLC terdiri daripada satu kitaran fasa yang berjujukan dan menjadikannya sebagai pelan tindakan yang berkesan kepada pasukan projek. 
                                        <br><br>Selain itu, SDLC bantu mengesan status bagi penyempurnaan projek tersebut. Metodologi umum yang terdapat bagi SDLC ialah model air terjun (Waterfall model ), model RAD (Rapid Application Development model ), model lelaran (Iterative model ), model lingkaran (Spiral model ) dan model tangkas(Agile model ). Model hibrid pula ialah kombinasi yang terdiri daripada beberapa model. Dokumentasi adalah penting tanpa mengira model yang digunakan dan selalunya seiring dengan proses pembangunan.
                                        <br><br>Misalnya,ada kaedah yang sesuai dengan jenis projek yang spesifik tetapi dalam analisis terakhir, faktor terpenting ialah kejayaan projek yang dibangunkan.
                                        <br><br>Model air terjun digunakan sebagai model pembangunan aplikasi memandangkan model ini mirip kepada proses-proses dalam SDLC. Model ini merupakan model terawal, mudah difahami dan mudah diuruskan.Model air terjun mengandungi lima fasa secara umumnya, di mana setiap fasa dalam model air terjun distrukturkan iaitu satu fasa perlu diselesaikan sebelum ke fasa berikutnya. Maklumat bagi setiap fasa diperlukan untuk fasa yang berikutnya dan tidak boleh berpatah balik.
                                    </p>

                                    <div class="card image-size" align="center">
                                        <img class="card-img-top" src="../../../vendors/images/Module/7a.png" alt="Card image cap">
                                     </div>
                                </div>

                                 <!-- Module 1.7.1 -->
                                <div class="pd-ltr-20 xs-pd-20-10">
                                    <div class="min-height-200px">

                                        <div class="blog-wrap" style="padding-bottom:0px !important">
                                            <div class="container pd-0">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="blog-detail card-box overflow-hidden mb-30">
                                                            
                                                            <div class="blog-caption" >
                            
                                                                <!-- Pengenalan -->
                                                                <h4 class="mb-10"> Module 1.7.1 Kitaran Hayat Pembangunan Sistem </h4>
                                                                <h5>1.7.1.1 Fasa Analisis Masalah </h5>
                                                                <p class="text-formatting">
                                                                    Fasa analisis masalah ialah proses mengenal pasti keperluan program dan mencari sebab sesuatu program dibina. 
                                                                    Langkah-langkah sistematik harus dipatuhi untuk menyelesaikan masalah dan penting untuk kita memahami penyataan masalah dengan jelas.
                                                                    Permulaannya, analisis masalah yang dihadapi dengan menggunakan analisis IPO iaitu analisis input, proses dan output.
                                                                    <br><br> Contoh 1
                                                                    <br>Katakan anda dikehendaki menyelesaikan masalah kiraan gaji staf mengikut jam bekerja.
                                                                    <br>Penyelesaian:<br><br>
                                                                    <ul>
                                                                        <li> Cara mengisi carta IPO adalah dengan menentukan penyelesaian yang dikehendaki iaitu gaji staf sebagai output.</li>
                                                                        <li> Formula untuk hasilkan output ‘gaji staf’; iaitu kadar sejam bekerja didarabkan dengan bilangan jam bekerja.</li>
                                                                        <li> Input untuk formula iaitu kadar sejam bekerja dan bilangan jam bekerja.</li>
                                                                    </ul>
                                                                    <br><br>Analisis IPO bagi masalah di atas adalah seperti yang berikut:
                                                                </p>

                                                                <!-- Inserted Table -->
                                                                <br><br><table class="table" border=2px>
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="header-cell">Input</th>
                                                                            <th class="header-cell">Proses</th>
                                                                            <th class="header-cell">Output</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Kadar sejam Bilangan jam bekerja</td>
                                                                            <td>
                                                                                <ol>
                                                                                    <li>Dapatkan kadar sejam.</li>
                                                                                    <li>Dapatkan bilangan jam bekerja.</li>
                                                                                    <li>Kirakan gaji staf= kadar x bilangan sejam bekerja</li>
                                                                                </ol>
                                                                            </td>
                                                                            <td>Gaji staf</td>
                                                                        </tr> 
                                                                    <tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="blog-caption" >
                            
                                                        <h5>1.7.1.2 Fasa Reka bentuk Penyelesaian</h5>
                                                        <p class="text-formatting">
                                                             Fasa reka bentuk penyelesaian masalah dibuat setelah analisis IPO yang merupakan set keperluan untuk memulakan fasa mereka bentuk dilakukan. Walaupun projek yang kecil dan keperluan yang mudah, 
                                                             satu reka bentuk mental untuk pemahaman keperluan dengan penyelesaian perlu wujud. Fasa ini melihat kepada potensi
                                                             penyelesaian yang wujud dan menentukan penyelesaian yang efektif dan efisien. Hal ini menjawab “bagaimana” membina penyelesaian terbaik.

                                                             <br><br>Penggunaan algoritma ialah langkah awal bagi penyelesaian masalah dalam fasa reka bentuk penyelesaian. Pseudokod ialah aturan langkah yang ditulis dalam bahasa pertuturan manakala carta alir adalah satu
                                                              perwakilan grafik yang menunjukkan langkah penyelesaian sesuatu masalah dan mempunyai hubung kait antara satu sama lain. Misalnya,

                                                            <br><br><b>Algoritma untuk mengira gaji staf:</b>
                                                            <br>Dapatkan kadar sejam bekerja bagi staf.
                                                            Kemudian, darabkan bilangan jam staf tersebut
                                                            bekerja. Hasilnya ialah gaji staf tersebut.
                                                            <div class="card image-size" align="center">

                                                            <img class="card-img-top" src="../../../vendors/images/Module/7b.png" alt="Card image cap"></div>

                                                            Selepas membina algoritma, kita akhiri dengan menulis pseudokod dan carta alir. Hasilnya ialah seperti yang ditunjukkan di bawah.

                                                        </p>
                                                        <br><br><table class="table" border=2px>
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="header-cell">Pseudokod</th>
                                                                            <th class="header-cell">Carta alir</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <ol>
                                                                                    <li> Baca kadar sejam, kadarsj.</li>
                                                                                    <li>Baca bilangan jam bekerja, bil Jam</li>
                                                                                    <li> Hitung gaji staf= kadarsj * bilJam</li>
                                                                                    <li> Paparkan gaji staf</li>

                                                                                </ol>
                                                                            </td>
                                                                            <td> <img class="card-img-top" src="../../../vendors/images/Module/7c.png" alt="Card image cap"></td>
                                                                        </tr> 
                                                                    </tbody>
                                                                </table>
                                                        </div>

                                                        <div class="blog-caption" >
                            
                                                            <h5>1.7.1.3 Fasa Pelaksanaan Penyelesaian</h5>
                                                            <p class="text-formatting">
                                                                Tujuan utama fasa perlaksanaan penyelesaian adalah untuk mengubah reka bentuk kepada 
                                                                program yang akan dipasang pada perkakasan dan bersedia untuk melaksanakan penyelesaian. 
                                                                Selain itu, fasa ini bertujuan untuk membina dan menghasilkan sistem yang dapat menyelesaikan masalah 
                                                                yang dihadapi.

                                                                <br><br>Aktiviti pembangunan aplikasi melibatkan pengekodan. Pengekodan memerlukan bahasa pengaturcaraan seperti Java,
                                                                Javascript dan sebagainya.Pengekodan juga mengubah spesifikasi program kepada kod sumber.Pengkompilan ialah proses
                                                                menukar kod pengaturcaraan kepada kod boleh laksana (executable).
                                                                <div class="card image-size" align="center">

                                                                <br><br><img class="card-img-top" src="../../../vendors/images/Module/7d.png" alt="Card image cap"></td></div>

                                                                <br><br>Setelah menyediakan pseudokod dan carta alir, kita boleh ke langkah seterusnya iaitu pelaksanaan penyelesaian 
                                                                untuk mencari gaji staf dengan menulis kod atur cara. Jenis data yang digunakan ialah integer untuk pemboleh ubah bilangan 
                                                                jam bekerja iaitu ‘bilJam’, manakala double digunakan untuk pemboleh ubah kadar sejam seseorang itu bekerja dan gaji staf.
                                                                Nama pemboleh ubah yang digunakan ialah ‘gajistaf’ dan ‘kadarsj’. Penyelesaian aritmetik yang dilakukan ialah mendarab kadar sejam 
                                                                bekerja dengan bilangan jam bekerja. Hasil daripada aplikasi ini akan memaparkan gaji staf.
                                                                <div class="card image-size" align="center">

                                                                <br><br><img class="card-img-top" src="../../../vendors/images/Module/7e.png" alt="Card image cap"></td></div>

                                                            </p>
                                                        </div>

                                                        <div class="blog-caption" >
                            
                                                            <h5>1.7.1.4 Fasa Uji dan Nyah ralat</h5>
                                                            <p class="text-formatting">
                                                            Dalam fasa ini, kod atur cara yang siap dibina akan diuji. Fasa pengujian memainkan peranan penting dalam SDLC. 
                                                            Fasa ini mempunyai beberapa tujuan seperti yang berikut:
                                                            <br>
                                                            <ol>
                                                                <li> Memastikan semua keperluan dipenuhi.</li>
                                                                <li> Memastikan semua pengekodan berfungsi seperti yang dikehendaki.</li>
                                                                <li> Memastikan semua modul boleh berfungsi bila digabungkan.</li>
                                                                <li> Mendapatkan maklum balas daripada pengguna sistem untuk tujuan pembetulan dan penambahbaikan.</li>
                                                                <li> Melibatkan pengguna sepenuhnya di peringkat pembangunan.</li>
                                                                <li> Mengesan ralat yang tercicir.</li>
                                                                <li> Membantu pasukan projek membuat dokumentasi dengan mengesan kesilapan oleh pengguna.</li>
                                                                <li> Menyimpan keputusan ujian sebagai bukti penyempurnaan
                                                                     pembangunan sistem.</li>
                                                                <li>Semakan kod (code review) dilakukan untuk mengesan ralat. Pengatur cara akan merujuk log yang dipaparkan 
                                                                    untuk membetulkan dan membuang ralat yang dikesan. Semakan boleh dibuat dalam tiga peringkat.</li>
                                                                </ol>

                                                                    <br>
                                                                    <!-- Inserted Table -->
                                                                <br><br><table class="table" border=2px>
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="header-cell">Jenis Semakan</th>
                                                                            <th class="header-cell">Siapa?</th>
                                                                            <th class="header-cell">Bila?</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Sendiri</td>
                                                                            <td>Pengarang</td>
                                                                            <td>Semasa pengekodan</td>
                                                                        </tr> 
                                                                        <tr>
                                                                            <td>Rakan Sebaya</td>
                                                                            <td>Rakan Sebaya</td>
                                                                            <td>Selepas tamat modul</td>
                                                                        </tr> 
                                                                        <tr>
                                                                            <td>Selepas tamat modul</td>
                                                                            <td>Pasukan projek yang diketuai oleh pakar bahasa pengaturcaraan</td>
                                                                            <td>Selepas kedua-kedua peringkat di atas</td>
                                                                        </tr> 
                                                                    </tbody>
                                                                </table>

                                                                <br><br>Jenis-jenis ralat seperti ralat sintaks, ralat logik dan ralat masa larian 
                                                                dilakukan sehingga kod atur cara itu bebas dari semua ralat. Semua ralat yang ditemui, 
                                                                dibetulkan dan diuji semula.

                                                                <!-- Inserted Table -->
                                                                <br><br><table class="table" border=2px>
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="header-cell">Jenis Pengujian</th>
                                                                            <th class="header-cell">Perincian</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Sendiri</td>
                                                                            <td>Memastikan setiap unit dalam sistem yang dibina berfungsi.</td>
                                                                            
                                                                        </tr> 
                                                                        <tr>
                                                                            <td>Sistem</td>
                                                                            <td>Menguji sistem secara keseluruhan selepas ujian atas unit individu.</td>
                                                                            
                                                                        </tr> 
                                                                        <tr>
                                                                            <td>Integrasi</td>
                                                                            <td>Memastikan sistem dapat berfungsi dengan sistem sedia ada.</td>
                                                                            
                                                                        </tr> 
                                                                        <tr>
                                                                            <td>Penerimaan</td>
                                                                            <td>Ujian ini dijalankan semasa ujian integrasi oleh pengguna sistem untuk memastikannya memenuhi kehendak pengguna.</td>
                                                                            
                                                                        </tr> 

                                                                    <tbody>
                                                                </table>

                                                                <br><br>Skrip ujian perlu ditulis untuk mengautomasikan proses pengujian modul sistem kerana terdapat ujian-ujian yang perlu 
                                                                dilakukan berulang kali. Tandakan dalam senarai semak di bawah untuk menguji dan menyah ralat pengiraan gaji staf.

                                                                <br>
                                                                    <!-- Inserted Table -->
                                                                <br><br><table class="table" border=2px>
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="header-cell">Item</th>
                                                                            <th class="header-cell">Aktiviti</th>
                                                                            <th class="header-cell">Tandakan(✓)atau (x)</th>

                                                                        </tr>
                                                                    </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>Sendiri</td>
                                                                            <td>
                                                                                <ol>
                                                                                    <li> Ejaan teks nama pemboleh ubah</li>
                                                                                    <li> Ejaan teks komen</li>
                                                                                    <li> Penggunaan objek atau aksara yang tidak dikenali</li>
                                                                                    <li> Mendapatkan maklum balas daripada pengguna sistem untuk tujuan pembetulan dan penambahbaikan.</li>
                                                                                    <li> Pengisytiharan jenis data untuk bilangan jam bekerja</li>
                                                                                    <li> Pengisytiharan jenis data untuk gaji staf</li>
                                                                                    <li> Pengisytiharan jenis data kadar sejam</li> 
                                                                                </ol>
                                                                            </td>
                                                                            <td></td>
                                                                        </tr> 
                                                                        <tr>
                                                                            <td>Ralat masa larian</td>
                                                                            <td>Input pengiraan untuk bilangan jam Input pengiraan untuk kadar sejam</td>
                                                                            <td></td>
                                                                        </tr> 
                                                                        <tr>
                                                                            <td>Ralat logik</td>
                                                                            <td>Semak output gaji staf</td>
                                                                            <td></td>
                                                                        </tr> 

                                                                    <tbody>
                                                                </table>

                                                                <br><br>Dalam pembangunan aplikasi, dokumentasi ialah ekosistem isi kandungan dengan tujuan mengajar pengguna berinteraksi 
                                                                dengan Application Programming Interface (API). API ialah satu set rutin, protokol dan alat untuk membina aplikasi. 
                                                                Sesuatu API menentukan bagaimana komponen aplikasi harus berinteraksi. API yang baik memudahkan pembangunan aplikasi dengan 
                                                                menyediakan blok pembangunan, di mana pengatur cara komputer akan mencantumkan blok-blok tersebut.

                                                                <br><br>Bayangkan dalam situasi ketika memesan makanan di kedai makan di mana pelayan itu ialah API. Dapur dan menu adalah
                                                                sebagai sebahagian daripada sistem. Pelayan sebagai API akan mengambil pesanan anda dan memberitahu dapur iaitu sistem apa
                                                                yang perlu dilaksanakan. Kemudian, pelayan akan membawa makanan kepada anda, iaitu respons balik kepada anda. Contoh API
                                                                ialah seperti API Google maps dan API Twitter.
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="blog-caption" >
                            
                                                            <h5>1.7.1.5 Fasa Dokumentasi</h5>
                                                            <p class="text-formatting">
                                                                Dokumentasi merupakan suatu proses mengutip dan mengumpulkan data, mengumpulkan maklumat dan ringkasan
                                                                seperti laporan pengujian yang dijalankan, carta alir, kod atur cara dan juga carta IPO. Dokumen-dokumen ini 
                                                                adalah sangat penting untuk rujukan pengguna sistem, pegawai IT dan juga kakitangan baharu di setiap fasa.
                                                                Sebagai contoh, carta Gantt ialahdokumen penting kerana carta Gantt menetapkan tarikh akhir untuk setiap peringkat pembangunan.
                                                                
                                                                <br><br>Setiap fasa perlu disiapkan sebelum ke fasa seterusnya. Hasil bagi satu-satu fasa berfungsi sebagai input untuk urutan fasa 
                                                                yang seterusnya. Oleh itu, dokumentasi yang sepenuhnya bagi fasa projek dari awal pada setiap fasa akan dijadikan sebagai rujukan 
                                                                untuk fasa seterusnya.Contoh dokumentasi dalam aplikasi mengira gaji staf adalah seperti yang ditunjukkan di bawah.

                                                                <br><br><b>a)komen untuk kod atur cara mengira gaji staf</b>
                                                                <img class="card-img-top" src="../../../vendors/images/Module/7f.png" alt="Card image cap">

                                                                <br><br><b>b) Carta Gantt untuk pembangunan aplikasi bagi mengira gaji staf</b>
                                                                <div class="card image-size" align="center">

                                                                    <img class="card-img-top" src="../../../vendors/images/Module/7g.png" alt="Card image cap"></div>

                                                                <br><br><b>c)Pengujian dan nyah ralat</b>
                                                                <div class="card image-size" align="center">

                                                                <img class="card-img-top" src="../../../vendors/images/Module/7h.png" alt="Card image cap"></div>

                                                                <br><br><b>d) API</b>
                                                                <div class="card image-size" align="center">

                                                                <img class="card-img-top" src="../../../vendors/images/Module/7i.png" alt="Card image cap"></div>
                                                            </p>
                                                        </div>

                                                        <!-- Module 1.7.2 -->
                                                        <div class="pd-ltr-20 xs-pd-20-10">
                                                            <div class="min-height-200px">

                                                                <div class="blog-wrap" style="padding-bottom:0px !important">
                                                                    <div class="container pd-0">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-sm-12">
                                                                                <div class="blog-detail card-box overflow-hidden mb-30">
                                                                                    
                                                                                    <div class="blog-caption" >
                                                    
                                                                                        <!-- Pengenalan -->
                                                                                        <h4 class="mb-10"> Module 1.7.2 Penciptaan Aplikasi atau Aplet </h4>
                                                                                        <p class="text-formatting">
                                                                                        Dengan merujuk fasa-fasa dalam Model Air Terjun, kita dapat membina dan menghasilkan aplikasi
                                                                                        penyelesaian masalah yang mengandungi subatur cara atau tatasusunan dengan menggunakan penyataan 
                                                                                        umpukan dan struktur kawalan dalam menghasilkan output berdasarkan input yang diberikan seperti dalam 
                                                                                        rajah yang ditunjukkan di bawah.
                                                                                        <div class="card image-size" align="center">

                                                                                        <br><img class="card-img-top" src="../../../vendors/images/Module/7j.png" alt="Card image cap"></div>

                                                                                        <br><br>
                                                                                        Antara muka bergrafik pengguna (Graphical user interface, GUI) adalah antara muka pengguna yang membolehkan 
                                                                                        pengguna berinteraksi dengan sistem seperti komputer dan telefon pintar. Ciri utama dalam GUI ialah penunjuk dan
                                                                                         ikon bersifat visual. Pengguna boleh melakukan tindakan dengan memanipulasikan atau mengolah ikon grafik tersebut.
                                                                                         <div class="card image-size" align="center">

                                                                                         <br><img class="card-img-top" src="../../../vendors/images/Module/7k.png" alt="Card image cap"></div>

                                                                                         <br><br>Dalam kehidupan seharian, kita sering menghadapi situasi yang 
                                                                                         memerlukan penyelesaian. Namun begitu, banyak masalah dapat diselesaikan dengan pembangunan 
                                                                                         aplikasi yang mudah. Mari kita lihat masalah mencari luas objek yang selalunya diselesaikan 
                                                                                         dalam mata pelajaran Matematik. Kaedah alternatif penyelesaian boleh dibuat dengan membina aplikasi yang mudah.

                                                                                        <br><br><b>Langkah 1: Fasa Analisis Masalah</B>

                                                                                        <br>Masalah yang dikenal pasti merupakan satu atur cara untuk mencari luas objek iaitu sama ada bulatan, segi tiga 
                                                                                        atau segi empat. Atur cara ini perlu menyelesaikan masalah tersebut dengan murid memilih jenis objek,memasukkan input
                                                                                         dan output akan dihasilkan berdasarkan objek dan input yang dimasukkan.Data yang perlu diketahui oleh murid ialah 
                                                                                         bentuk objek dan juga formula untuk mencari luas objek tersebut. Maklumat lain yang perlu diketahui ialah maksud 
                                                                                         istilah seperti jejari, tinggi, tapak dan lebar.
                                                                                         <div class="card image-size" align="center">

                                                                                         <br><img class="card-img-top" src="../../../vendors/images/Module/7l.png" alt="Card image cap"></div>


                                                                                         <br><br><b>Langkah 2: Mereka Bentuk Penyelesaian</B>
                                                                                         Fasa ini boleh dimulakan dengan menulis pseudokod, diikuti dengan melakar carta alir untuk mereka bentuk penyelesaian 
                                                                                         untuk aplikasi mencari luas objek.
                                                                                         <br><br>a )Menulis pseudokod untuk aplikasi mencari luas objek

                                                                                         <br><br>b )Membina antara muka bergrafik untuk membuat pilihan untuk mencari luas objek, 
                                                                                         selepas itu taipkan kod atur cara untuk setiap pilihan

                                                                                         <ol>
                                                                                             <li>Mula</li>
                                                                                             <li>Paparkan “Sila buat pilihan anda” dan nama 3 objek</li>
                                                                                             <li>Input pilihan</li>
                                                                                             <li>Jika pilih segi tiga, borang mengira luas segi tiga akan dipaparkan</li>
                                                                                             <li>Input lebar dan tinggi</li>
                                                                                             <li>Luas = 1/2 x lebar x tinggi</li>
                                                                                             <li>Papar luas</li>
                                                                                             <li>Tamat</li>
                                                                                        </ol>

                                                                                        <br><br>Lengkapkan carta alir di bawah untuk mencari luas objek yang dipilih, contoh untuk luas segi tiga yang diberikan.
                                                                                         Selepas itu, uji algoritma mencari luas objek yang dipilih dan catatkan hasil ujian.
                                                                                         <div class="card image-size" align="center">
                                                                                             <img class="card-img-top" src="../../../vendors/images/Module/7m.png" alt="Card image cap">
                                                                                            </div>

                                                                                            <br><br>c) Sediakan antara muka bergrafik untuk aplikasi.
                                                                                            <br><br>Dengan menggunakan tools dari Swing Controls yang disediakan,bina antara muka untuk paparan mengira luas objek. 
                                                                                            Tools yang anda perlu gunakan ialah Label, Button dan TextField. Fungsi jButton adalah untuk menyediakan tiga pilihan iaitu 
                                                                                            “Kira’, “Reset” dan “Keluar”. Jlabel digunakan untuk melabel dan memaparkan output dan jTextField untuk menginput data

                                                                                            <br><br>Setelah mengetahui cara melakar carta alir untuk mereka bentuk penyelesaian yang diperlukan bagi aplikasi 
                                                                                            menghitung luas objek, maka antara muka bergrafik bolehlah disediakan untuk aplikasi tersebut. Contoh yang ditunjukkan
                                                                                             dalam Rajah 1.75(a) merupakan cadangan antara muka bergrafik bagi menghitung luas bulatan. Dengan menggunakan tools 
                                                                                             dari Swing Controls yang  disediakan, bina antara muka untuk paparan menghitung luas objek. Tools yang perlu digunakan ialah 
                                                                                             Label, Button dan TextField. Fungsi jButton adalah untuk menyediakan tiga pilihan, iaitu Kira, Reset dan Keluar. Jlabel
                                                                                              digunakan untuk melabel dan memaparkan output; dan jTextField untuk menginput data 
                                                                                              <div class="card image-size" align="center">
  
                                                                                            <img class="card-img-top" src="../../../vendors/images/Module/7n.png" alt="Card image cap"></div>

                                                                                            Rajah di atas menunjukkan ‘tools’ yang digunakan untuk membina antara muka bergrafik seperti yang ditunjukkan dalam Rajah di bawah.
                                                                                            <div class="card image-size" align="center">

                                                                                            <img class="card-img-top" src="../../../vendors/images/Module/7o.png" alt="Card image cap"></div>

                                                                                            Rajah di bawah menunjukkan cara untuk menukar ‘border’ bagi “antara muka bergrafik”
                                                                                        
                                                                                            <br><br><b>Langkah 3: Pelaksanaan Penyelesaian</B>

                                                                                            <br>Setelah membina reka bentuk yang dikehendaki, proses seterusnya ialah melaksanakan penyelesaian. Murid boleh membina ‘jframe’ di
                                                                                            perisian Java Netbeans dan menulis kod atur cara yang betul. Berikut ialah cara membina antara muka mencari luas bulatan dan kod 
                                                                                            atur cara. Cuba uji atur cara yang telah anda bina.

                                                                                            <br><br>a) Bina “antara muka bergrafik” untuk membuat pilihan untuk mencari luas objek, selepas itu taipkan kod atur cara untuk setiap pilihan.
                                                                                            <div class="card image-size" align="center">
                                                                                                <img class="card-img-top" src="../../../vendors/images/Module/7p.png" alt="Card image cap">
                                                                                                <br><img class="card-img-top" src="../../../vendors/images/Module/7q.png" alt="Card image cap"></diV>

                                                                                            <br><br><b>Langkah 4: Menguji dan Menyah ralat </B>

                                                                                            <br>Setelah berjaya membina antara muka dan kod atur cara untuk ketiga-tiga objek, uji setiap program yang telah dibangunkan. Untuk 
                                                                                            menguji dan menyah ralat yang wujud dalam suatu atur cara yang dibangunkan,langkah-langkah seperti yang berikut perlu dilakukan.

                                                                                            <br><br>a) Masukkan input yang diperlukan, kemudian semak output yang dihasilkan. Jika wujud ralat, kita perlu menghapus/menyah ralat 
                                                                                            dan membaikinya. Seterusnya, sistem perlu diuji semula untukmemastikan atur cara adalah bebas ralat.
                                                                                            <div class="card image-size" align="center">

                                                                                            <img class="card-img-top" src="../../../vendors/images/Module/7r.png" alt="Card image cap">
                                                                                            <br><img class="card-img-top" src="../../../vendors/images/Module/7s.png" alt="Card image cap"></div>


                                                                                            <br><br><b>Langkah 5: Dokumentasi </B>

                                                                                            <br>Dokumentasikan setiap fasa proses mencipta aplikasi mencari luas objek yang dipilih. Pamerkan hasil kerja anda dalam bentuk 
                                                                                            persembahan dan bincang secara berkumpulan.
                                                                                            <div class="card image-size" align="center">

                                                                                            <img class="card-img-top" src="../../../vendors/images/Module/7t.png" alt="Card image cap"></div>
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
                                                                                        








                                                                                             











                                                                                                        








                                                            








                                                  











                                                        




                                                            
                                                                
                            








                            