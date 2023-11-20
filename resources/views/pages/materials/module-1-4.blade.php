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
        width: 400px;
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

    .blog-img img {
        width: 100%;
        height: auto;
    }
    .blog-img p {
        margin-top:20px;
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
                            <h4>Module 1.4: Struktur Kawalan</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('module')}}">Module</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Module 1.4: Struktur Kawalan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="blog-wrap">
                <div class="blog-detail card-box overflow-hidden mb-30">
                    <div class="main-title">
                        <h3>Module 1.4: Struktur Kawalan</h3>
                    </div>

                    <div class="main-module">
                        
                        <p>
                            Arahan-arahan dalam susunan linear biasanya digunakan untuk
                            mendapatkan input pengguna, memaparkan hasil atau output atau
                            mengisytiharkan dan mengumpukkan nilai-nilai bagi pemboleh ubah.
                            Seperti yang telah dipelajari dalam subtopik algoritma, langkah-langkah
                            yang terdapat dalam algoritma komputer bukan sahaja linear tetapi
                            bercabang dan juga berulang.
                        </p>
                        <p>
                            Dalam struktur yang bercabang, langkah-langkahnya membolehkan keputusan
                            dibuat dengan serta-merta. Strukturberulang pula membenarkan langkah
                            yang sama diulang berkali-kali.
                        </p>
                        <p>
                            Dalam bahasa pengaturcaraan, terdapat persamaan unsur bagi struktur kawalan
                            dan struktur algoritma, iaitu kawalan pilihan dan kawalan ulangan.
                        </p>
                        <div class="blog-img pic">
                            <img src="../../../vendors/images/struktur_kawalan.png" alt="" width="20px">
                            <p><b>Jenis-jenis struktur kawalan dalam pengaturcaraan</b></p>
                        </div>
                    </div>
                    <div class="blog-caption">
                        <div>
                            <div>
                                <h7 style="color: white;">
                                    1.3.1 Hubungan antara Jenis Data, Saiz Data dan Kapasiti Ingatan Komputer
                                </h7>
                            </div>
                            <div id="dropdown-1-3-1" class="dropdown-content">
                                <p>Setiap jenis data dan saiz data akan disimpan dalam ingatan komputer.
                                    Nama pemboleh ubah memainkan peranan yang penting dalam
                                    menentukan saiz data dalam ingatan. Berdasarkan jenis data yang
                                    digunakan pada pemboleh ubah, sistem operasi akan menentukan
                                    apa-apa yang boleh disimpan dalam ingatan komputer. Kepelbagaian
                                    penggunaan jenis data pada pemboleh ubah dapat menjimatkan ruang
                                    pada ingatan komputer. Oleh itu, penggunaan jenis data yang sesuai</p>
                            </div>
                        </div>
                        <button class="dropdown-btn" onclick="toggleDropdown('dropdown-1-3-1')">v</button>
                    </div>
                    <div class="blog-caption">
                        <div>
                            <div>
                                <h7 style="color: white;">
                                    1.3.2 Pemilihan dan Penggunaan Jenis Data yang Bersesuaian
                                </h7>
                            </div>
                            <div id="dropdown-1-3-2" class="dropdown-content">
                                <p>Setiap jenis data dan saiz data akan disimpan dalam ingatan komputer.
                                    Nama pemboleh ubah memainkan peranan yang penting dalam
                                    menentukan saiz data dalam ingatan. Berdasarkan jenis data yang
                                    digunakan pada pemboleh ubah, sistem operasi akan menentukan
                                    apa-apa yang boleh disimpan dalam ingatan komputer. Kepelbagaian
                                    penggunaan jenis data pada pemboleh ubah dapat menjimatkan ruang
                                    pada ingatan komputer. Oleh itu, penggunaan jenis data yang sesuai</p>
                            </div>
                        </div>
                        <button class="dropdown-btn" onclick="toggleDropdown('dropdown-1-3-2')">v</button>
                    </div>
                    <div class="blog-caption">
                        <div>
                            <div>
                                <h7 style="color: white;">
                                    1.3.3 Hubungan antara Jenis Data, Saiz Data dan Kapasiti Ingatan Komputer
                                </h7>
                            </div>
                            <div id="dropdown-1-3-3" class="dropdown-content">
                                <p>Setiap jenis data dan saiz data akan disimpan dalam ingatan komputer.
                                    Nama pemboleh ubah memainkan peranan yang penting dalam
                                    menentukan saiz data dalam ingatan. Berdasarkan jenis data yang
                                    digunakan pada pemboleh ubah, sistem operasi akan menentukan
                                    apa-apa yang boleh disimpan dalam ingatan komputer. Kepelbagaian
                                    penggunaan jenis data pada pemboleh ubah dapat menjimatkan ruang
                                    pada ingatan komputer. Oleh itu, penggunaan jenis data yang sesuai</p>
                            </div>
                        </div>
                        <button class="dropdown-btn" onclick="toggleDropdown('dropdown-1-3-3')">v</button>
                    </div>
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
