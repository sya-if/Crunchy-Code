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
    max-width: 70%;
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
                                <li class="breadcrumb-item"><a href="{{route('module')}}">Module</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Module 2.2 Struktur Kawalan</li>
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
                                <h3>Module 2.1 : Pangkalan Data dan Hubungan</h3>
								</div>
                                    <!-- Pengenalan Module -->
									<div class="blog-detail card-box overflow-hidden mb-30">
										<div class="blog-caption">
										    <h4 class="mb-10">Pendahuluan</h4>
                                            <p>
                                            Data ialah sumber komputer untuk membuat perancangan dan keputusan. 
                                            Jumlah data yang perlu diproses oleh komputer adalah besar. Tambahan 
                                            pula, data ini perlu dikongsi dengan efisien dan selamat. Pengendalian 
                                            data dalam jumlah yang besar amat mencabar kerana data yang disimpan 
                                            mungkin mengandungi ralat, berulang ataupun tidak dikemas kini dengan 
                                            lengkap.
                                            </p>
                                            <p>
                                            Data yang diproses ini akan menjadi maklumat yang berguna kepada 
                                            pengguna. Jadual 2.1 menerangkan definisi data dan maklumat manakala 
                                            Rajah 2.1 menunjukkan konsep hubungan data dan maklumat.
                                            </p>
                                            <table class="table table-bordered">
                                                <thead style="background-color: brown; color: white;">
                                                    <tr>
                                                        <th></th>
                                                        <th>Definisi</th>
                                                        <th>Contoh</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Data</td>
                                                        <td>
                                                            <ul>
                                                                <li>Data merupakan himpunan fakta mentah 
                                                                    mengenai sesuatu benda, kejadian, orang 
                                                                    atau entiti yang boleh terdiri daripada 
                                                                    perkataan, angka atau gambar.
                                                                </li>
                                                                <li>
                                                                    Data boleh menjadi sesuatu fakta yang
                                                                    bermakna atau tidak bermakna sehingga
                                                                    fakta-fakta tersebut diproses.
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>Markah ujian bulanan bagi
                                                            mata pelajaran Sejarah 
                                                            untuk setiap murid di dalam 
                                                            kelas 4 Dinamik.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Maklumat</td>
                                                        <td>
                                                            <ul>
                                                                <li>Maklumat merupakan hasil daripada 
                                                                    pengumpulan, pemprosesan dan 
                                                                    penganalisisan data yang boleh digunakan 
                                                                    untuk membuat sesuatu keputusan.
                                                                </li>
                                                                <li>
                                                                    Maklumat yang dihasilkan ini akan 
                                                                    menjadi lebih bermakna dan mudah untuk 
                                                                    difahami oleh seseorang.
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            Purata markah ujian bulanan 
                                                            bagi mata pelajaran Sejarah 
                                                            untuk kelas 4 Dinamik.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="module-img">
                                                <img src="../../../vendors/images/Module/module-2-1/211-picture1.png" alt="">
                                                <p>Rajah 2.1 : Hubungan antara data dan maklumat</p>
                                            </div>
                                            <p>Untuk memastikan integriti data yang disimpan, data perlu disimpan 
                                                dalam komputer secara sistematik supaya mudah dicapai apabila 
                                                diperlukan. Cuba bayangkan, tanpa simpanan digital, jumlah kertas 
                                                dokumen yang diperlukan untuk menyimpan rekod mungkin memenuhi 
                                                kabinet sehingga satu ruang bilik menjadi penuh.
                                            </p>
                                            <p>
                                                Sebelum konsep pangkalan data diperkenalkan, data dalam sistem 
                                                berkomputer disimpan dengan menggunakan sistem fail biasa. Sistem 
                                                fail biasa mempunyai banyak kelemahan untuk menguruskan data dalam 
                                                jumlah yang banyak dan kompleks. Untuk menjadikan pengurusan data 
                                                lebih cekap dan efisien, teknologi komputer digunakan untuk memudahkan 
                                                proses penyimpanan, pengeluaran dan pengemaskinian data. Hal ini 
                                                mencetuskan evolusi sistem pemprosesan data, lihat Rajah 2.2.
                                            </p>
                                            <div class="module-img">
                                                <img src="../../../vendors/images/Module/module-2-1/211-picture2.png" alt="">
                                                <p>Rajah 2.2 : Evolusi pengurusan data</p>
                                            </div>
                                            <ol>
                                                <li><b>Pemprosesan Manual<b> tidak melibatkan penggunaan komputer. 
                                                    Pada peringkat ini, tenaga manusia diperlukan untuk mengendalikan 
                                                    data. Data yang telah diproses dimasukkan ke dalam fail dan kabinet 
                                                    mengikut aturan tertentu. Kelemahan pemprosesan manual adalah 
                                                    banyak tenaga buruh diperlukan, ruang yang besar untuk pemprosesan 
                                                    dan simpanan dan pencarian yang agak lambat apabila data semakin 
                                                    bertambah.
                                                </li>
                                                <li>
                                                    <b>Sistem Pemprosesan Fail<b> menggunakan teknologi komputer yang 
                                                    menyimpan dokumen-dokumen dalam bentuk fail digital. Hal ini 
                                                    membolehkan aktiviti-aktiviti manual sebelum ini diproses secara 
                                                    automatik menggunakan sistem pengoperasian dan aplikasi komputer.
                                                    Kelemahan utama Sistem Pemprosesan Fail adalah kesukaranmengesan salinan data yang sama dalam fail berlainan dan data lambat 
                                                    untuk dikemas kini.
                                                </li>
                                                <li>
                                                    <b>Sistem Pangkalan Data<b> adalah lebih canggih daripada sistem 
                                                        pemprosesan fail kerana boleh menyimpan jumlah data yang banyak 
                                                        dalam ruang simpanan yang jauh lebih kecil. Sistem pangkalan data 
                                                        ialah sistem perisian yang menguruskan pangkalan data. Pangkalan 
                                                        data ialah koleksi data logikal yang berkaitan dan strukturnya 
                                                        membolehkan kandungannya dikeluarkan, diuruskan dan dikemas 
                                                        kini dengan mudah. Terdapat beberapa jenis model pangkalan data 
                                                        yang biasa digunakan. Model pangkalan data ialah penyusunan secara 
                                                        konseptual suatu pangkalan data dan merupakan satu cara mentakrif 
                                                        dan menggunakan data dalam satu pangkalan data. Lihat Rajah 2.5.
                                                </li>
                                            </ol>
                                            <p>Pangkalan Data (PD) menyimpan data dengan strukturnya sekali. 
                                                Ruang memori komputer dapat digunakan secara minimum meskipun 
                                                data yang disimpan amat besar dan banyak.
                                            </p>
                                            <div class="module-img">
                                                <img src="../../../vendors/images/Module/module-2-1/211-2.png" alt="">
                                                <p>Rajah 2.5 : Gambar rajah blok sistem komputer</p>
                                            </div>
                                            <p>
                                            Oleh sebab itu, kebanyakan organisasi, sama ada kecil atau besar, 
                                            menggunakan pangkalan data untuk menyimpan, memanipulasi dan 
                                            mencapai data di kebanyakan organisasi. Sedar ataupun tidak, banyak 
                                            maklumat individu dan aktiviti yang dilakukan disimpan dalam pangkalan 
                                            data di syarikat-syarikat mahupun organisasi kerajaan.
                                            </p>
                                            <p>
                                                Contoh aspek kehidupan yang melibatkan simpanan pangkalan data:
                                                <ul>
                                                    <li>Maklumat setiap rakyat disimpan dalam pangkalan data kerajaan.</li>
                                                    <li>Universiti mempunyai pangkalan data untuk menyimpan data 
                                                        pensyarah, kursus dan pelajar.</li>
                                                    <li>Apabila membeli tiket penerbangan, maklumat penumpang dan 
                                                        penerbangan disimpan dalam PD.</li>
                                                    <li>Pekerja di pasar raya mengimbas setiap barang yang dijual untuk 
                                                        mencapai harga barang daripada pangkalan data.</li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                
                                <!-- 2.1.1 Kepentingan Integririti -->
                                <div class="blog-detail card-box overflow-hidden mb-30">
                                    <div class="blog-caption">
                                        <h4 class="mb-10">Kepentingan Integriti Data, Ketekalan Data dan Kelewahan Data</h4>
                                        <p>
                                            Pangkalan data bukan koleksi data semata-mata. Pangkalan data 
                                            merupakan satu koleksi data yang disimpan dalam format piawaian 
                                            (standard) dan direka khusus supaya mampu untuk berkongsi data 
                                            dengan banyak pengguna secara efisien.
                                            <ul>
                                                <li>Format piawai membolehkan data disimpan dan dicapai kembali daripada mana-mana perkakasan dan sistem maklumat.</li>
                                                <li>Data yang disimpan dalam pangkalan data boleh digunakan kembali 
                                                    oleh pengguna yang berbeza melalui sistem yang berbeza bagi 
                                                    tujuan yang berlainan. Sebagai contoh, data warganegara dalam 
                                                    pangkalan data Jabatan Pendaftaran boleh digunakan semula 
                                                    apabila warganegara memohon pasport ataupun memperbaharui 
                                                    lesen memandu.</li>
                                                <li>Simpanan data dalam pangakalan data adalah efisien kerana 
                                                    format dan struktur data hubungan dikhususkan untuk simpanan 
                                                    sistematik dan capaian pantas serta fleksibel. Faktor lain ialah 
                                                    perkakasan komputer pelayan yang menyokong operasi pangkalan 
                                                    data, mempunyai spesifikasi tinggi bagi capaian kepada pangkalan 
                                                    data tersebut.</li>
                                            </ul>
                                        </p>
                                        <p>
                                            Umumnya, pangkalan data dikhususkan untuk menyimpan data 
                                            manakala tafsiran data sebagai maklumat yang disempurnakan oleh 
                                            sistem-sistem komputer yang dihubungkan kepada pangkalan tersebut. 
                                            Data yang baik diperlukan untuk menghasilkan maklumat yang tepat 
                                            dan bermakna. Ciri- ciri data yang disimpan dalam pangkalan data mesti 
                                            mencapai kualiti yang berikut:
                                            <ul>
                                                <li>Integriti data</li>
                                                <li>Ketekalan data</li>
                                                <li>Kelewahan data</li>
                                            </ul>
                                        </p><br>
                                        <h5 class="mb-10">Integriti Data (Data integrity)</h5>
                                        <ul>
                                            <li>
                                                Integriti data bermaksud kesempurnaan, ketepatan dan kesahan data 
                                                (validation) serta merujuk ketepatan data yang sah melalui keseluruhan 
                                                kitaran hayat data.
                                            </li>
                                            <li>
                                                Untuk memastikan integriti data, input bukan sahaja mesti tepat tetapi 
                                                mematuhi peraturan yang telah ditetapkan.
                                                <ol>
                                                    <li>
                                                        Integriti entiti: Jadual mempunyai sekurang-kurangnya satu atribut 
                                                        data yang unik bagi setiap rekod. Contoh: Nombor murid mesti unik.
                                                    </li>
                                                    <li>Integriti rujukan: Rekod-rekod dalam dua jadual yang berbeza boleh 
                                                        dihubungkan melalui perkongsian atribut data yang sama. Sekiranya 
                                                        tiada hubungan antara rekod, atribut tersebut dibiarkan kosong. 
                                                        Sekiranya terdapat hubungan antara dua rekod tersebut, atribut 
                                                        dalam kedua-dua jadual berkongsi nilai data yang sama.
                                                    </li>
                                                    <li>
                                                        Integriti domain: Atribut-atribut data dalam jadual mestilah betul 
                                                        dengan berasaskan suatu domain masalah.
                                                    </li>
                                                </ol>
                                            </li>
                                            <li>
                                                Kenapa perlunya integriti data?
                                                <ol>
                                                    <li>Data yang lemah integriti mungkin korup atau hilang. Data yang 
                                                        korup ialah data yang terubah (secara tidak sengaja) daripada nilai 
                                                        asalnya.
                                                    </li>
                                                    <li>
                                                        Integriti data bertujuan untuk mengelakkan perubahan yang tidak 
                                                        sengaja kepada maklumat. Oleh itu, integriti data adalah penting 
                                                        untuk memastikan tiada ralat dalam kemasukan data
                                                    </li>
                                                </ol>
                                            </li>
                                        </ul><br>
                                        <p><b>Contoh 1</b></p>
                                        <p>Jika seorang murid didaftarkan dengan nombor pendaftaran murid, 123/16, 
                                            pangkalan data sepatutnya tidak membenarkan pendaftaran murid lain 
                                            dengan nombor pendaftaran yang sama (123/16). Ini menjamin bahawa 
                                            setiap rekod adalah unik dengan dengan mematuhi peraturan integriti.
                                        </p>
                                        <div class="module-img">
                                            <img src="../../../vendors/images/Module/module-2-1/211-picture3.png" alt="">
                                            <p>Contoh situasi integriti data yang tidak dipatuhi</p>
                                        </div><br>

                                        <h5 class="mb-10">Ketekalan Data (Data Consistency)</h5>
                                        <ul>
                                                <li>
                                                    Ketekalan merujuk konsistensi ataupun keseragaman data yang akan 
                                                    mempengaruhi kebolehpercayaan data.
                                                </li>
                                                <li>Untuk memastikan ketekalan data, proses kemas kini salinan data di 
                                                    semua lokasi simpanan perlu dilakukan dengan rapi.
                                                </li>
                                                <li>Kepentingan ketekalan data:
                                                    <ol>
                                                        <li>
                                                            Untuk memastikan data yang diperoleh boleh dipercayai dan tidak 
                                                            dipersoalkan.
                                                        </li>
                                                        <li>
                                                            Untuk memastikan tiada isu ketekalan data timbul seandainya data 
                                                            yang sama berulang di beberapa lokasi simpanan.
                                                        </li>
                                                    </ol>
                                                </li>
                                            </ul><br>
                                        <p><b>Contoh 2</b></p>
                                        <p>Tan mencatat nombor-nombor telefon pelanggannya di dalam dua buah 
                                            buku iaitu diari dan buku nota secara berasingan. Sekiranya nombor telefon 
                                            pelanggannya bertukar, Tan perlu mengemaskinikan nombor tersebut pada 
                                            kedua-dua buah buku yang digunakannya. Apakah yang terjadi sekiranya 
                                            Tan hanya mengemaskinikan nombor telefon pelanggan yang berubah hanya 
                                            pada sebuah buku sahaja?
                                        </p>
                                        <p><b>Penyelesaian</b></p>
                                        <p>Disebabkan Tan hanya mengemaskinikan nombor telefon pelanggannya pada 
                                            sebuah buku sahaja, maka data nombor telefon tersebut hilang ketekalannya.
                                        </p>
                                        <br>

                                        <h5 class="mb-10">Kelewahan Data (Data Redundancy)</h5>
                                        <ul>
                                            <li>Kelewahan data merujuk pertindihan data yang berpunca daripada 
                                                salinan data yang berulang tetapi di lokasi yang berlainan.
                                            </li>
                                        </ul>
                                        <p><b>Contoh :<b>
                                            <p>Rajah 2.6 menunjukkan rekod murid dalam Sistem Maklumat Murid. Cuba 
                                                lihat pada baris yang berwarna merah jambu. Kad pengenalan murid dan 
                                                Nama murid adalah sama tetapi No. telefon yang berbeza wujud sebanyak 
                                                tiga kali di dalam sistem fail. Keadaan inilah yang dipanggil kelewahan 
                                                data.
                                            </p>
                                            <div class="module-img">
                                                <img src="../../../vendors/images/Module/module-2-1/21-6.png" alt="">
                                                <p>Rajah 2.6 Kelewahan data dalam sistem fail</p>
                                            </div>
                                        </p>
                                        <p>Apakah yang terjadi sekiranya kelewahan data ini tidak diatasi?
                                            <ul>
                                                <li>Kelewahan menggunakan lebihan sumber simpanan komputer dan 
                                                    oleh itu kelewahan data perlu diminimumkan</li>
                                                <li>Kemas kini data yang lewah memakan banyak masa dan mungkin tidak 
                                                    menyeluruh.</li>
                                                <li>Menyebabkan data menjadi korup.</li>
                                                <li>Menjadikan pangkalan data tersebut kurang efisien</li>                                                    
                                            </ul>
                                        </p><br>
                                        <p>Antara tujuan mengelakkan kelewahan data adalah untuk,
                                            <ul>
                                                <li>mengelakkan pertambahan saiz pangkalan data yang tidak perlu.
                                                    (Pertindihan data yang sama berulang-ulang).</li>
                                                <li>mengelakkan data yang tidak konsisten.</li>
                                                <li>mengelakkan data menjadi tidak efisien.</li>
                                                <li>mengelakkan data menjadi korup iaitu tidak boleh digunakan lagi.</li>                                                    
                                            </ul>
                                        </p>
                                    </div>
                                </div>

                                <!-- 2.1.2 : Model-model Pangkalan Data -->
                                <div class="blog-detail card-box overflow-hidden mb-30">
                                    <div class="blog-caption">
                                        <h4 class="mb-10">2.1.2 : Model-model Pangkalan Data</h4>
                                        <p>
                                            Sistem pangkalan data menggunakan model pangkalan data tertentu 
                                            sebagai strukturnya. Terdapat beberapa jenis model pangkalan data 
                                            yang biasa digunakan. Model pangkalan data ialah penyusunan secara 
                                            konseptual suatu pangkalan data dan merupakan satu cara mentakrif dan 
                                            menggunakan data dalam satu pangkalan data. Lihat Rajah 2.7 di bawah.
                                        </p>
                                        <div class="module-img">
                                            <img src="../../../vendors/images/Module/module-2-1/21-7.png" alt="">
                                            <p>Rajah 2.7 Model-model Pangkalan Data</p>
                                        </div>
                                        <p>
                                            Terdapat empat model pangkalan data dengan kelebihan masing-masing 
                                            iaitu hierarki, rangkaian, hubungan dan berorientasikan objek. Model 
                                            pangkalan data hubungan adalah model yang paling popular untuk dirujuk 
                                            sebagai contoh pangkalan data.
                                        </p><br>

                                        <h5 class="mb-10">Model Pangkalan Data Hierarki</h5>
                                        <div class="module-img">
                                            <img src="../../../vendors/images/Module/module-2-1/21-8.png" alt="">
                                            <p>Rajah 2.8 Contoh model pangkalan data hierarki</p>
                                        </div>
                                        <p>
                                            Model pangkalan data hierarki ialah model terawal semenjak tahun 1950 
                                            dan sering digunakan dalam sistem pengurusan maklumat keluaran 
                                            syarikat IBM. Dalam model pangkalan data hierarki, data disusun dalam 
                                            struktur pokok seperti dalam Rajah 2.8. Model ini sesuai digunakan 
                                            sekiranya suatu entiti mempunyai hubungan satu <b>induk (parent)</b> dengan 
                                            satu atau lebih entiti <b>anak (child)</b>. Model ini tidak menyokong hubungan 
                                            banyak entiti induk kepada banyak entiti anak. Mungkin disebabkan itu, 
                                            model ini tidak banyak digunakan.
                                        </p>
                                        <p><b>Contoh :<b>
                                            <p>Katakan sebuah pangkalan data berasaskan model pangkalan data hierarki 
                                                diperlukan untuk menyimpan rekod data entiti-entiti seperti Sekolah, 
                                                Kelas, Murid, Guru dan Subjek. Pertama sekali, takrifkan hubungan antara 
                                                entiti-entiti tersebut melalui model hierarki, lihat Rajah 2.9.
                                            </p>
                                            <p>
                                                Model hierarki memberikan struktur untuk mengekod rekod data untuk 
                                                setiap entiti. Perhatikan bahawa entiti sekolah ialah <b>induk</b> kepada entiti 
                                                kelas manakala entiti kelas ialah <b>anak</b> kepada entiti sekolah. Sebaliknya, 
                                                entiti kelas ialah <b>induk</b> kepada entiti guru dan entiti murid masing-masing. 
                                                Entiti murid ialah <b>induk</b> kepada entiti subjek. Entiti subjek ialah <b>anak</b>
                                                kepada entiti murid dan tidak menjadi induk kepada mana-mana entiti.
                                            </p>
                                            <div class="module-img">
                                                <img src="../../../vendors/images/Module/module-2-1/21-9.png" alt="">
                                                <p>Rajah 2.9 Model Pangkalan Data Hierarki</p>
                                            </div>
                                            <p>
                                                Rekod data untuk setiap entiti (Sekolah, Kelas, Murid, Guru dan Subjek) 
                                                dikodkan dalam organisasi hierarki, lihat Rajah 2.10. Setiap entiti diwakili 
                                                oleh grid dengan dua bahagian di baris atas dan di baris bawah. Bahagian 
                                                atas menunjukkan nama atribut manakala bahagian bawah menunjukkan 
                                                data untuk atribut tersebut.
                                            </p>
                                            <div class="module-img">
                                                <img src="../../../vendors/images/Module/module-2-1/21-10.png" alt="">
                                                <p>Rajah 2.10 Entiti sebuah model pangkalan data hierarki</p>
                                            </div>
                                            <p>
                                                Sebuah entiti boleh mempunyai satu atau lebih atribut. Dalam contoh yang 
                                                diberikan, entiti sekolah cuma mempunyai satu atribut, nama sekolah. 
                                                Bagi entiti lain seperti murid, terdapat beberapa atribut lain seperti ID 
                                                murid, nama, tarikh lahir dan alamat.
                                            </p>
                                            <div class="module-img">
                                                <img src="../../../vendors/images/Module/module-2-1/21-11.png" alt="">
                                                <p>Rajah 2.11 Entiti dengan beberapa atribut</p>
                                            </div>
                                            <p>
                                                Dalam entiti dengan beberapa atribut, pilih atribut unik sebagai rujukan 
                                                (dipanggil kekunci primer). Sebagai contoh, ID murid dipilih sebagai kunci 
                                                primer untuk entiti murid. Gunakan simbol hash # sebagai penanda kunci 
                                                primer.
                                            </p>
                                            <p>
                                                Gunakan anak panah untuk menghubungkan rekod data mengikut 
                                                susunan entiti seperti struktur dalam Rajah 2.11. Anak panah dilukis 
                                                daripada satu rekod data kepada satu rekod data yang lain. Anak panah 
                                                ditujukan kepada atribut kunci primer dalam setiap rekod data (atribut 
                                                kunci primer ditandakan #). Lihat Rajah 2.12.
                                            </p>
                                            <div class="module-img">
                                                <img src="../../../vendors/images/Module/module-2-1/21-12.png" alt="">
                                                <p>Rajah 2.12 Rekod data dalam model hierarki</p>
                                            </div>
                                            <p>
                                                Dalam rajah 2.12, entiti sekolah SMK Adela mempunyai tiga rekod entiti 
                                                kelas iaitu 4 Amanah, 4 Bakti dan 4 Cerdas. Kelas 4 Amanah mempunyai 
                                                rekod data murid dengan ID 123/16 dan juga rekod guru dengan ID 1144. 
                                                Murid 123/16 mengambil entiti subjek dengan kod subjek FZ1.
                                            </p>
                                        </p><br>
                                        
                                        <h5 class="mb-10">Model Pangkalan Data Rangkaian</h5>
                                        <p>
                                            Model pangkalan data rangkaian terdiri daripada beberapa jenis rekod 
                                            dan dihubungkan melalui penunjuk. Model ini dapat mengatasi beberapa 
                                            ketidakbolehtentuan dalam model hierarki. Kembali kepada contoh 
                                            daripada model hierarki. Bolehkah suatu subjek seperti Fizik diambil 
                                            oleh murid-murid yang lain selain daripada Izati? Sudah tentu ya. Akan 
                                            tetapi, bolehkah hubungan tersebut ditunjukkan dalam model hierarki? 
                                            Kelemahan ini diatasi melalui model rangkaian.
                                        </p>
                                        <div class="module-img">
                                            <img src="../../../vendors/images/Module/module-2-1/21-13.png" alt="">
                                            <p>Rajah 2.13 Model pangkalan data rangkaian</p>
                                        </div>
                                        <p><b>Contoh :<b>
                                            <p>
                                                Entiti Subjek boleh mempunyai dua ‘induk’ iaitu entiti Kelas dan Murid. 
                                                Pencarian semua Subjek dalam Kelas tertentu boleh dibuat secara terus 
                                                berbanding dengan model hierarki. Hubungan Murid dan Subjek adalah 
                                                hubungan <b>banyak-ke-banyak</b>, iaitu setiap murid mungkin mendaftar 
                                                untuk banyak Subjek dan setiap Subjek mempunyai banyak Murid.
                                            </p>
                                            <div class="module-img">
                                                <img src="../../../vendors/images/Module/module-2-1/21-14.png" alt="">
                                                <p>Rajah 2.14 Rekod data model pangkalan data rangkaian</p>
                                            </div>
                                        </p><br>

                                        <h5 class="mb-10">Model Pangkalan Data Rangkaian</h5>
                                        <p>
                                            Model ini sering digunakan kerana mudah dibina, digunakan dan diuruskan 
                                            dalam dunia yang sebenar. Datanya disusun dalam jadual yang terdiri 
                                            daripada lajur dan baris. Kelebihan model pangkalan data hubungan ialah 
                                            struktur pangkalan data tidak perlu dinyatakan terlebih dahulu. Perhatikan 
                                            Rajah 2.15 untuk gambaran yang lebih jelas.
                                        </p>
                                        <p><b>Contoh :<b>
                                            <p>
                                                Model ini digambarkan dengan menggunakan tiga entiti (jadual) iaitu 
                                                MURID, PENDAFTARAN dan SUBJEK. Atribut ID murid dari entiti MURID
                                                dan Kod subjek dari entiti SUBJEK dijadikan kunci primer. Kunci primer ini 
                                                akan dihubungkan kepada kunci asing atribut ID murid dan Kod Subjek di 
                                                dalam entiti PENDAFTARAN. Selepas dihubungkan melalui kunci primer 
                                                dan kunci asing ini, data berkenaan akan digabungkan.
                                            </p>
                                            <div class="module-img">
                                                <img src="../../../vendors/images/Module/module-2-1/21-15.png" alt="">
                                                <p>Rajah 2.15 Contoh model pangkalan data hubungan</p>
                                            </div>
                                        </p><br>

                                        <h5 class="mb-10">Model Pangkalan Data Berorientasikan Objek (Object-oriented)</h5>
                                        <p>
                                            Model berorietasikan objek merupakan kaedah yang baharu dalam 
                                            pengurusan data. Model ini menyimpan takrifan objek-objek yang boleh 
                                            digunakan semula oleh perisian. Model ini menyimpan objek-objek dan 
                                            hubungan. Model ini mempunyai ciri yang sama dengan model rangkaian 
                                            iaitu dapat mewakilkan data untuk hubungan banyak-ke-banyak.
                                        </p>
                                        <p><b>Contoh :<b>
                                            <p>
                                                Rajah 2.16 menggambarkan konsep orientasi objek bagi kelas Pensyarah 
                                                yang mempunyai atribut dan kaedah (method) tersendiri.
                                                <ol type="a">
                                                    <li>Kelas (class) – mengambarkan keadaan entiti objek sebenar</li>
                                                    <li>Atribut (attributes) – data yang mewakili sifat-sifat objek tersebut</li>
                                                    <li>Kaedah (method) – menjelaskan kelakuan bagi objek dan juga dikenal sebagai prosedur atau fungsi.</li>
                                                </ol>
                                            </p>
                                            <div class="module-img">
                                                <img src="../../../vendors/images/Module/module-2-1/21-16.png" alt="">
                                                <p>Rajah 2.16 Perwakilan kelas model pangkalan data berorientasikan objek</p>
                                            </div>
                                            <p>
                                                Objek di dalam kelas dikenal sebagai kejadian kelas (class instances). 
                                                Setiap kejadian kelas mempunyai nilai data yang tersendiri bagi setiap 
                                                atribut tetapi masih boleh berkongsi nama atribut dan kaedah yang sama 
                                                dengan kejadian kelas yang lain.
                                            </p>
                                        </p>
                                        <table class="table table-bordered">
                                            <thead style="background-color: brown; color: white;">
                                                <tr>
                                                    <th>Model</th>
                                                    <th>Deskripsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Hierarki</td>
                                                    <td>
                                                        <ul>
                                                            <li>Model terawal.</li>
                                                            <li>Konsep mudah menggunakan struktur pepohon untuk menyusun rekod.</li>
                                                            <li>Untuk hubungan satu induk ke banyak anak.</li>
                                                            <li>Tidak sesuai untuk hubungan banyak induk ke banyak anak.</li>
                                                        </ul>
                                                        <div class="module-img">
                                                            <img src="../../../vendors/images/Module/module-2-1/jadual-22-1.png" alt="">
                                                        </div>      
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pangkalan Data Rangkaian</td>
                                                    <td>
                                                        <ul>
                                                            <li>Untuk mengatasi kelemahan model pangkalan data hierarki.</li>
                                                            <li>Untuk hubungan banyak induk ke banyak anak.</li>
                                                            <li>Sukar untuk menambahkan hubungan baharu.</li>
                                                        </ul>
                                                        <div class="module-img">
                                                            <img src="../../../vendors/images/Module/module-2-1/jadual-22-2.png" alt="">
                                                        </div> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pangkalan Data Hubungan (Relational)</td>
                                                    <td>
                                                        <ul>
                                                            <li>Data disusun di dalam jadual terdiri daripada lajur dan baris.</li>
                                                            <li>Mudah dibina, digunakan dan diuruskan.</li>
                                                            <li>Model ini adalah paling selalu digunakan antara model-model yang lain.</li>
                                                        </ul>
                                                        <div class="module-img">
                                                            <img src="../../../vendors/images/Module/module-2-1/jadual-22-3.png" alt="">
                                                        </div> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pangkalan Data Berorientasikan Objek (Object-oriented)</td>
                                                    <td>
                                                        <ul>
                                                            <li>Kaedah baharu dalam pengurusan data.</li>
                                                            <li>Model ini menyimpan takrifan kelas objek dan hubungan.</li>
                                                            <li>Untuk pangkalan data yang memerlukan hubungan kompleks di antara objek-objek.</li>
                                                            <li>Mempunyai prestasi pencarian yang terbaik antara model-model yang lain.</li>
                                                        </ul>
                                                        <div class="module-img">
                                                            <img src="../../../vendors/images/Module/module-2-1/jadual-22-4.png" alt="">
                                                        </div> 
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                                <!-- 2.1.3 : Entiti, Atribut, Set Hubungan dan Kekardinalan dalam Pangkalan Data -->
                                <div class="blog-detail card-box overflow-hidden mb-30">
                                    <div class="blog-caption">
                                        <h4 class="mb-10">2.1.3 : Entiti, Atribut, Set Hubungan dan Kekardinalan dalam Pangkalan Data</h4>
                                        <p>
                                            Pangkalan data dibangunkan untuk sistem maklumat yang berada dalam 
                                            pelbagai persekitaran. Lihat Jadual 2.3. <b>Persekitaran</b> ialah organisasi 
                                            di mana pangkalan data direka bentuk, dibangunkan dan digunakan. 
                                            Pangkalan data diperlukan untuk menyimpan data-data dari persekitaran 
                                            untuk memproses sistem maklumat. Untuk mewakili persekitaran tersebut, 
                                            pangkalan data mengandungi komponen-komponen yang terdiri daripada 
                                            entiti, atribut, set hubungan dan kekardinalan dalam reka bentuknya.
                                        </p>
                                        <table class="table table-bordered">
                                            <thead style="background-color: brown; color: white;">
                                                <tr>
                                                    <th>Persekitaran</th>
                                                    <th>Sistem pangkalan data</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Universiti dan kolej</td>
                                                    <td>
                                                        <ul>
                                                            <li>Sistem pangkalan data maklumat pelajar</li>
                                                            <li>Sistem pangkalan pendaftaran kursus oleh pelajar</li>
                                                        </ul>    
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Perpustakaan awam</td>
                                                    <td>
                                                        <ul>
                                                            <li>Sistem pangkalan data buku dan koleksi bacaan</li>
                                                            <li>Sistem pangkalan data pinjaman</li>
                                                        </ul> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pasar raya</td>
                                                    <td>
                                                        <ul>
                                                            <li>Sistem pangkalan data jualan</li>
                                                            <li>Sistem pangkalan data produk</li>
                                                        </ul> 
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table><br>
                                                
                                        <div class="module-img">
                                            <img src="../../../vendors/images/Module/module-2-1/213-17.png" alt="">
                                            <p>Rajah 2.17 Komponen dalam pangkalan data.</p>
                                        </div>
                                        <p>
                                            Reka bentuk pangkalan data diperlukan untuk menghasilkan satu 
                                            atau lebih banyak jadual hubungan. Setiap jadual hubungan mewakili satu 
                                            jenis entiti. Setiap jadual hubungan mengandungi satu atau lebih rekod. 
                                            Setiap rekod ialah satu kejadian entiti dan mengandungi sekumpulan 
                                            nilai atribut. Perhatikan bahawa setiap rekod dalam jadual yang sama 
                                            mempunyai jenis-jenis atribut yang sama. Kandungan yang seterusnya 
                                            akan menerangkan dengan lebih lanjut mengenai komponen-komponen 
                                            pangkalan data ini.
                                        </p><br>

                                        <h5 class="mb-10">Entiti</h5>
                                        <p>
                                            Entiti merujuk suatu objek unik dan boleh dikenal pasti dalam sesuatu 
                                            persekitaran seperti orang, tempat atau benda. Entiti mempunyai data-data deskriptif yang boleh dikutip dan disimpan. Bukan semua objek 
                                            sesuai dijadikan entiti. Jika tiada data dapat dikaitkan atau tiada keperluan 
                                            untuk menyimpan data berkenaan sesuatu objek, maka objek tersebut 
                                            tidak sesuai dijadikan sebagai entiti. Dalam pangkalan data, setiap jadual 
                                            mewakili satu entiti manakala setiap rekod mewakili kejadian satu entiti.
                                        </p>
                                        <p>
                                            Reka bentuk pangkalan data menggunakan gambar rajah terhubung. 
                                            Apabila mereka bentuk entiti di atas kertas, gunakan simbol segi empat 
                                            tepat dan tulis nama entiti. Nama entiti seharusnya kata nama umum yang 
                                            bersesuaian. Kata nama khusus tidak sepatutnya digunakan.
                                        </p>
                                        <div class="module-img">
                                            <img src="../../../vendors/images/Module/module-2-1/213-18.png" alt="">
                                            <p>Rajah 2.18 Simbol entiti</p>
                                        </div>
                                        <p>Simbol ini akan dipelajari secara mendalam dalam subtopik 2.2</p>
                                        <br>

                                        <p><b>Contoh 3</b></p>
                                        <p>Senaraikan entiti untuk pangkalan data dalam persekitaran sekolah.</p>
                                        <p><b>Penyelesaian</b></p>
                                        <p>Entiti-entiti yang boleh digunakan termasuk guru, murid dan mata pelajaran.</P>

                                        <p><b>Contoh 4</b></p>
                                        <p>Diberikan nama murid seperti Arumugam, Boh Leng, Che Siti dan Iking. Lukiskan simbol entiti yang bersesuaian.</p>
                                        <p><b>Penyelesaian</b></p>
                                        <p>Entiti-entiti yang boleh digunakan termasuk guru, murid dan mata pelajaran.</P>
                                        <div class="module-img">
                                            <img src="../../../vendors/images/Module/module-2-1/213-murid.png" alt=""> 
                                        </div>
                                        <br>

                                        <h5 class="mb-10">Atribut</h5>
                                        <p>
                                            Entiti mempunyai data-data deskriptif. Data-data deskriptif ini dipanggil 
                                            atribut dalam pangkalan data. Atribut penting kerana menerangkan ciri-ciri sesuatu entiti. Dalam pangkalan data, atribut ialah lajur-lajur dalam 
                                            jadual dengan nama lajur sebagai nama atribut. Bagi setiap rekod, nilai 
                                            atribut boleh diisi di bawah setiap lajur.
                                        </p>
                                        <p>
                                            Apabila mereka bentuk atribut di atas kertas, tulis nama atribut dalam 
                                            simbol bulatan bujur. Kemudian, lukis garis lurus menghubungkan simbol 
                                            atribut dengan simbol entiti berkaitan.
                                        </p>
                                        <div class="module-img">
                                            <img src="../../../vendors/images/Module/module-2-1/213-19.png" alt="">
                                            <p>Rajah 2.19 Simbol atribut</p>
                                        </div>
                                        <div class="module-img">
                                            <img src="../../../vendors/images/Module/module-2-1/213-20.png" alt="">
                                            <p>Rajah 2.20 Hubungan antara entiti dan atribut</p>
                                        </div>

                                        <h5 class="mb-10">Set Hubungan</h5>
                                        <p>
                                            Hubungan ialah perkaitan antara entiti. Hubungan merujuk perbuatan dan 
                                            diwakili oleh kata kerja. Bandingkan pengertian hubungan dengan entiti. 
                                            Entiti merujuk objek dan diwakili oleh kata nama umum.
                                        </p>
                                        <p>
                                            Hubungan pula melibatkan dua entiti. Entiti pertama ialah entiti 
                                            subjek, iaitu pelaku yang melaksanakan hubungan tersebut ke atas entiti 
                                            kedua. Entiti kedua menerima kesan daripada hubungan itu, dan oleh itu 
                                            dipanggil entiti objek.
                                        </p>
                                        <p>
                                            Set hubungan ialah koleksi sepasang entiti subjek-objek yang 
                                            mempunyai hubungan yang sama. Set hubungan menggunakan sintaks 
                                            yang berikut.
                                        </p>

                                        <p>&lt;entiti subjek&gt; &lt;hubungan&gt; &lt;entiti objek&gt;</p>
                                    
                                        <p>Sintaks gambar rajah terhubung adalah seperti berikut:</p>
                                        <div class="module-img">
                                            <img src="../../../vendors/images/Module/module-2-1/213-21.png" alt="">
                                            <p>Rajah 2.21 Set hubungan yang menunjukkan hubungan di antara dua entiti</p>
                                        </div>
                                        <p>Untuk memahami konsep ini dengan lebih mendalam, kaji contoh-contoh 
                                            yang berikut.</p><br>

                                        <p><b>Contoh 5</b></p>
                                        <p>Diberikan hubungan-hubungan berikut.
                                            <ul>
                                                <li>Adam belajar Sains Komputer.</li>
                                                <li>Ai Ling belajar Geografi.</li>
                                                <li>Anastasia belajar Sejarah.</li>
                                            </ul>
                                            <ol type="a">
                                                <li>Kenal pasti entiti dalam hubungan-hubungan di atas.</li>
                                                <li>Nyatakan nama hubungan yang sesuai.</li>
                                                <li>Lukis gambar rajah hubungan yang bersesuaian.</li>
                                            </ol>                           
                                        </p>
                                        <p>Penyelesaian:
                                            <ol type ="a">
                                                <li>
                                                    Adam, Ai Ling dan Anastasia ialah kejadian ataupun objek bagi entiti 
                                                    Murid. Sains Komputer, Geografi dan Sejarah ialah kejadian ataupun objek 
                                                    bagi entiti Mata pelajaran.
                                                </li>
                                                <li>Belajar</li>
                                                <li>
                                                    <div class="module-img">
                                                        <img src="../../../vendors/images/Module/module-2-1/213-contoh8.png" alt="">
                                                    </div>
                                                </li>
                                            </ol>
                                        </p><br>

                                        <p>Contoh di atas menggunakan gambar rajah terhubung yang ringkas. 
                                            Gambar rajah yang lengkap seharusnya menunjukkan atribut-atribut bagi 
                                            entiti. Lihat Rajah 2.22.</p>
                                
                                        <div class="module-img">
                                            <img src="../../../vendors/images/Module/module-2-1/213-22.png" alt="">
                                            <p>Rajah 2.22 Gambar rajah lengkap yang menunjukkan atribut-atribut bagi entiti</p>
                                        </div><br>

                                        <h5 class="mb-10">Kekardinalan (Cardinality)</h5>
                                        <p>Kekardinalan merujuk perhubungan antara entiti. Kekardinalan menyatakan 
                                            bilangan entiti yang boleh dihubungkan dengan entiti yang lain melalui set 
                                            hubungan.
                                        </p>
                                        <p>Dalam reka bentuk set hubungan, beberapa jenis kekardinalan akan 
                                            digunakan. Antaranya ialah kekardinalan satu-ke-satu (1:1), satu-ke-banyak (1:M) atau banyak-ke-banyak (M:N). Kekardinalan ialah berasaskan 
                                            keperluan pengguna. Dalam gambar rajah terhubung, kekardinalan ditulis 
                                            di atas kedua-dua garis yang menghubungkan entiti kepada hubungan 
                                            dan hubungan kepada entiti. Lihat Jadual 2.4.
                                        </p>
                                        <table class="table table-bordered">
                                            <thead style="background-color: brown; color: white;">
                                                <tr>
                                                    <th>Kekardinalan</th>
                                                    <th>Gambar rajah terhubung</th>
                                                    <th>Penerangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p>1:1</P>
                                                        <p>(satu-ke-satu)</p>
                                                    </td>
                                                    <td>
                                                        <div class="module-img">
                                                            <img src="../../../vendors/images/Module/module-2-1/jadual2-4-1.png" alt="">
                                                        </div>   
                                                    </td>
                                                    <td>
                                                        <p>Hubungan satu entiti dengan satu entiti yang lain.</P>
                                                        <p><b>Contoh :</b></p>
                                                        <p>Seorang warganegara mempunyai satu kad pengenalan sahaja.</P>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>1:M</P>
                                                        <p>(satu-ke- banyak)</p>
                                                    </td>
                                                    <td>
                                                        <div class="module-img">
                                                            <img src="../../../vendors/images/Module/module-2-1/jadual2-4-2.png" alt="">
                                                        </div>   
                                                    </td>
                                                    <td>
                                                        <p>Hubungan satu entiti dengan lebih daripada satu entiti yang lain.</P>
                                                        <p><b>Contoh :</b></p>
                                                        <p>Seorang murid boleh menyertai lebih daripada satu kelab di sekolah.</P>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>M:N</P>
                                                        <p>(banyak-ke- banyak)</p>
                                                    </td>
                                                    <td>
                                                        <div class="module-img">
                                                            <img src="../../../vendors/images/Module/module-2-1/jadual2-4-3.png" alt="">
                                                        </div>   
                                                    </td>
                                                    <td>
                                                        <p>Hubungan antara banyak entiti dengan banyak entiti yang lain..</P>
                                                        <p><b>Contoh :</b></p>
                                                        <p>Ramai pelanggan bagi sebuah pasar raya membeli pelbagai jenis barangan.</P>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table><br>
                                        <p>Dalam pangkalan data, kekardinalan merujuk hubungan di antara 
                                            rekod-rekod dalam satu jadual (katakan jadual A) kepada rekod-rekod 
                                            dalam jadual lain (katakan jadual B). Untuk kekardinalan 1:1, satu baris 
                                            rekod dalam jadual A cuma boleh dihubungkan kepada satu baris rekod 
                                            dalam jadual B. Sekiranya kekardinalan adalah 1:M, satu baris rekod 
                                            dalam jadual A boleh dihubungkan kepada satu atau lebih baris rekod 
                                            dalam jadual B; tetapi setiap rekod dalam jadual B cuma boleh mempunyai 
                                            hubungan dengan satu baris rekod dalam jadual A. Bagaimanakah 
                                            pula hubungan rekod-rekod antara jadual A dengan jadual B sekiranya 
                                            kekardinalan adalah M:N?
                                        </p>
                                        <div class="module-img">
                                            <img src="../../../vendors/images/Module/module-2-1/213-23.png" alt="">
                                            <p>Rajah 2.23 Bilangan hubungan antara rekod-rekod dalam jadual A dan jadual B mengikut kekardinalan M:N</p>
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