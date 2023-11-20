@extends('layouts.master')

@php($user = Auth::user())

@section('content')
<style>
    .main-title{
        background-color: #0099ff;
        padding: 20px;
        border-radius: 10px;
    }
    .main-module{
        padding: 20px;
        
    }
    .main-module h4{
        padding-top: 10px;
        color: #0070bb;
    }
    .main-module p{
        padding-top: 10px;
        font-size: 15px;
        font: sans-serif;
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
    .blog-wrap {
        display: flex;
        justify-content: space-between;
    }

    .blog-detail {
        width: 70%; /* Adjust the width as needed */
    }

    .blog-caption {
        position: relative; /* Add position relative to make absolute positioning work */
        margin-bottom: 10px;
        border: 1px solid #ddd;
        background-color: #48494B;
        padding: 15px;
        border-radius: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .blog-caption h7{
        color: white;
    }

    .dropdown-btn {
        background-color: transparent;
        color: white;
        border: none;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        font-size: 14px;
        cursor: pointer;
    }

    .dropdown-content {
        display: none;
        padding: 15px;
        background-color: #aaaaaa;
        color: white;
        border: 1px solid #ddd;
        border-radius: 10px;
        position: absolute;
        top: 100%; /* Position below the button */
        left: 0;
        width: 100%;
        z-index: 1;
    }

    .blog-img{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px 10px 20px 10px;

    }

    .blog-img img {
        width: 70%;
        height: auto;
    }

    .blog-img p {
        margin-top: 10px;
        text-align: center;
    }

    .sidebar {
        width: 28%; /* Adjust the width as needed */
    }

    /* Add more styles for the sidebar as needed */

</style>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Module 1.3: Pemboleh Ubah, Pemalar dan Jenis Data</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('module')}}">Module</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Module 1.3: Pemboleh Ubah, Pemalar dan Jenis Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="blog-wrap">
                <div class="blog-detail card-box overflow-hidden mb-30">
                    <div class="main-title">
                        <h3>Module 1.3: Pemboleh Ubah, Pemalar dan Jenis Data</h3>
                    </div>
                    <div class="main-module">
                        
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
                        <h4>Pemboleh Ubah</h4>
                        <p><b>
                            Pemboleh ubah ialah ruang simpanan sementara untuk nombor, teks dan objek.
                            Nilai pemboleh ubah sentiasa berubah semasa berlakunya pemprosesan dan
                            tidak akan memegang sebarang nilai selepas program tamat.
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
                        <div class="terminal">
                            <p>
                                public class kiraLuas <br>
                                { <br>
                                    &nbsp;public static void main(String[] args) <br>
                                    &nbsp;{ <br>
                                    &nbsp;&nbsp;<b>float panjang, lebar, luas;</b><br>
                                    &nbsp;} <br>
                                } <br>
                            </p>
                        </div>
                        <div class="blog-img">
                            <img src="../../../vendors/images/pembolehubah.jpg" alt="">
                            <p><b>Contoh penggunaan pemboleh ubah</b></p>
                        </div>
                        <h4>Pemalar</h4>
                        <p>
                            Sewaktu proses pengaturcaraan dilaksanakan, nilai pemalar adalah tetap
                            dan tidak akan berubah. Pemalar biasanya digunakan semasa pengatur
                            cara ingin mengisytiharkan nilai yang tidak berubah. Contohnya, nilai
                            Pi (π), bilangan hari dalam seminggu, bilangan jam dalam sehari,
                            kadar pertukaran nilai mata wang Malaysia dan sebagainya.
                        </p>
                        <div class="terminal">
                            <p>
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
                        <h4>Jenis Data</h4>
                        <p>
                            Jenis data dalam bahasa pengaturcaraan merujuk satu set data yang
                            mempunyai nilai dan ciri-ciri yang telah ditetapkan.
                        </p>
                        <div class="blog-img">
                            <img src="../../../vendors/images/jenisdata1.jpg" alt="">
                            <p><b>Jenis data dan contoh penggunaan nilai yang dibenarkan</b></p>
                        </div>
                        <p>
                            Data merupakan satu elemen yang memainkan peranan yang penting
                            dalam sesebuah pengaturcaraan. Data yang dimasukkan dalam pengaturcaraan
                            akan diproses untuk menghasilkan output bagi sesuatu permasalahan
                            yang wujud. Jenis data boleh dikategorikan kepada dua kelas, iaitu data
                            primitif dan data bukan primitif.
                        </p>
                        <div class="blog-img">
                            <img src="../../../vendors/images/jenisdata2.jpg" alt="">
                            <p><b>Jenis data dalam bahasa pengaturcaraan</b></p>
                        </div>
                    </div>
                    
                    {{-- Block for section 1.3.1 - 1.3.6 --}}
                    {{-- Section 1.3.1 --}}
                    <div class="blog-caption">
                        <div>
                            <div>
                                <h7>
                                    1.3.1 Hubungan antara Jenis Data, Saiz Data dan Kapasiti Ingatan Komputer
                                </h7>
                            </div>
                            <div id="dropdown-1-3-1" class="dropdown-content">
                                <p>
                                    Setiap jenis data dan saiz data akan disimpan dalam ingatan komputer.
                                    Nama pemboleh ubah memainkan peranan yang penting dalam
                                    menentukan saiz data dalam ingatan. Berdasarkan jenis data yang
                                    digunakan pada pemboleh ubah, sistem operasi akan menentukan
                                    apa-apa yang boleh disimpan dalam ingatan komputer. Kepelbagaian
                                    penggunaan jenis data pada pemboleh ubah dapat menjimatkan ruang
                                    pada ingatan komputer. Oleh itu, penggunaan jenis data yang sesuai
                                    diperlukan untuk nilai yang panjang supaya menjimatkan ruang ingatan
                                    komputer. Simpanan memori ini disimpan dalam unit bait (bytes).
                                </p>
                            </div>
                        </div>
                        <button class="dropdown-btn" onclick="toggleDropdown('dropdown-1-3-1')">v</button>
                    </div>
                    
                    {{-- Section 1.3.2 --}}
                    <div class="blog-caption">
                        <div>
                            <div>
                                <h7 style="color: white;">
                                    1.3.2 Pemilihan dan Penggunaan Jenis Data yang Bersesuaian
                                </h7>
                            </div>
                            <div id="dropdown-1-3-2" class="dropdown-content">
                                <p>
                                    Pemilihan dan penggunaan data yang sesuai amat penting dalam sesebuah
                                    atur cara supaya atur cara dapat dibangunkan tanpa ralat sintaks. Jenis
                                    data bagi pemboleh ubah dan pemalar yang menentukan jenis maklumat
                                    akan disimpan dalam ruang ingatan yang diperuntukkan.
                                    Penggunaan jenis data yang sesuai juga berfungsi sebagai penanda
                                    aras kepada sesuatu pemboleh ubah itu sama ada pemboleh ubah
                                    tersebut menyimpan data yang tetap, data yang boleh dikira, huruf,
                                    nombor perpuluhan atau data yang mempunyai pilihan benar atau palsu.
                                </p>
                            </div>
                        </div>
                        <button class="dropdown-btn" onclick="toggleDropdown('dropdown-1-3-2')">v</button>
                    </div>
                    
                    {{-- Section 1.3.3 --}}
                    <div class="blog-caption">
                        <div>
                            <div>
                                <h7 style="color: white;">
                                    1.3.3 Hubungan antara Jenis Data, Saiz Data dan Kapasiti Ingatan Komputer
                                </h7>
                            </div>
                            <div id="dropdown-1-3-3" class="dropdown-content">
                                <p>
                                    Setiap pemboleh ubah dan pemalar mungkin wujud dan akan digunakan
                                    untuk keseluruhan atur cara atau hanya bagi satu fungsi. Kewujudan
                                    pemboleh ubah atau pemalar dikenal sebagai kawasan yang kedua-
                                    duanya boleh digunakan secara sah.
                                </p>
                            </div>
                        </div>
                        <button class="dropdown-btn" onclick="toggleDropdown('dropdown-1-3-3')">v</button>
                    </div>
                    
                    {{-- Section 1.3.4 --}}
                    <div class="blog-caption">
                        <div>
                            <div>
                                <h7 style="color: white;">
                                    1.3.4 Pemilihan dan Penggunaan Jenis Data yang Bersesuaian
                                </h7>
                            </div>
                            <div id="dropdown-1-3-4" class="dropdown-content">
                                <p>Setiap jenis data dan saiz data akan disimpan dalam ingatan komputer.
                                    Nama pemboleh ubah memainkan peranan yang penting dalam
                                    menentukan saiz data dalam ingatan. Berdasarkan jenis data yang
                                    digunakan pada pemboleh ubah, sistem operasi akan menentukan
                                    apa-apa yang boleh disimpan dalam ingatan komputer. Kepelbagaian
                                    penggunaan jenis data pada pemboleh ubah dapat menjimatkan ruang
                                    pada ingatan komputer. Oleh itu, penggunaan jenis data yang sesuai</p>
                            </div>
                        </div>
                        <button class="dropdown-btn" onclick="toggleDropdown('dropdown-1-3-4')">v</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card-box mb-30">
                        <h5 class="pd-20 h5 mb-0">Categories</h5>
                        <div class="list-group">
                            <a href="#" class="list-group-item d-flex align-items-center justify-content-between">HTML <span class="badge badge-primary badge-pill">7</span></a>
                            <a href="#" class="list-group-item d-flex align-items-center justify-content-between">Css <span class="badge badge-primary badge-pill">10</span></a>
                            <a href="#" class="list-group-item d-flex align-items-center justify-content-between active">Bootstrap <span class="badge badge-primary badge-pill">8</span></a>
                            <a href="#" class="list-group-item d-flex align-items-center justify-content-between">jQuery <span class="badge badge-primary badge-pill">15</span></a>
                            <a href="#" class="list-group-item d-flex align-items-center justify-content-between">Design <span class="badge badge-primary badge-pill">5</span></a>
                        </div>
                    </div>
                    <div class="card-box mb-30">
                        <h5 class="pd-20 h5 mb-0">Latest Post</h5>
                        <div class="latest-post">
                            <ul>
                                <li>
                                    <h4><a href="#">Ut enim ad minim veniam, quis nostrud exercitation ullamco</a></h4>
                                    <span>HTML</span>
                                </li>
                                <li>
                                    <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                    <span>Css</span>
                                </li>
                                <li>
                                    <h4><a href="#">Ut enim ad minim veniam, quis nostrud exercitation ullamco</a></h4>
                                    <span>jQuery</span>
                                </li>
                                <li>
                                    <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                    <span>Bootstrap</span>
                                </li>
                                <li>
                                    <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                    <span>Design</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-box overflow-hidden">
                        <h5 class="pd-20 h5 mb-0">Archives</h5>
                        <div class="list-group">
                            <a href="#" class="list-group-item d-flex align-items-center justify-content-between">January 2020</a>
                            <a href="#" class="list-group-item d-flex align-items-center justify-content-between">February 2020</a>
                            <a href="#" class="list-group-item d-flex align-items-center justify-content-between">March 2020</a>
                            <a href="#" class="list-group-item d-flex align-items-center justify-content-between">April 2020</a>
                            <a href="#" class="list-group-item d-flex align-items-center justify-content-between">May 2020</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-wrap pd-20 mb-20 card-box">
    DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
</div>
</div>
<script>
    function toggleDropdown(dropdownId) {
        var dropdownContent = document.getElementById(dropdownId);
        dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
    }
</script>
@endsection
