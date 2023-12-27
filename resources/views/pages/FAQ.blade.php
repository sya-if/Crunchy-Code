@extends('layouts.master')

@section('content')

<style>
    h1, h2, h3, h4, h5, h6 {
    color: black;
    }
    section {
        padding: 60px;
    }
    a, a:hover, a:focus, a:active {
        text-decoration: none;
        outline: none;
    }
    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }
    
    .faq {
    padding: 120px 0 90px;
    min-height: 100vh;
    }

    .faq .section-title {
        margin-bottom: 54px;
    }

    .faq .section-title h2 {
        margin-bottom: 22px;
    }

    .faq .accordion .card {
        border: none;
        margin-bottom: 30px;
    }

    .faq .accordion .card:not(:first-of-type) .card-header:first-child {
        border-radius: 10px;
    }

    .faq .accordion .card .card-header {
        border: none;
        border-radius: 10px;
        padding: 0;
    }

    .faq .accordion .card .card-header h5 {
        padding: 0;
    }

    .faq .accordion .card .card-header h5 button {
        color: #1e3056;
        font-size: 18px;
        font-weight: 500;
        text-decoration: none;
        padding: 0 30px 0 70px;
        height: 80px;
        display: block;
        width: 100%;
        color: rgba(30, 48, 86, 0.8);
        text-align: left;
        background: #fff;
        -webkit-box-shadow: 0px -50px 140px 0px rgba(69, 81, 100, 0.1);
        box-shadow: 0px -50px 140px 0px rgba(69, 81, 100, 0.1);
        border-radius: 10px 10px 0 0;
        position: relative;
    }

    .faq .accordion .card .card-header h5 button:after {
        position: absolute;
        left: 30px;
        top: 50%;
        margin-top: -10px;
        width: 20px;
        height: 20px;
        background-color: transparent;
        color: #ff5f74;
        text-align: center;
        border: 1px solid #ff5f74;
        border-radius: 50%;
        line-height: 100%;
        content: '\f067';
        font-size: 10px;
        line-height: 18px;
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
    }

    .faq .accordion .card .card-header h5 button.collapsed {
        background: #fff;
        border-radius: 10px;
        -webkit-box-shadow: none;
        box-shadow: none;
        border: 1px solid rgba(97, 125, 255, 0.2);
    }

    .faq .accordion .card .card-header h5 button[aria-expanded="true"]:after {
        content: '\f068';
        color: #fff;
        background-image: -webkit-linear-gradient(-180deg, #5e7eff 0%, #ff5f74 30%, #a85fff 100%);
    }

    .faq .accordion .card .card-body {
        -webkit-box-shadow: 0px 15px 140px 0px rgba(69, 81, 100, 0.1);
        box-shadow: 0px 15px 140px 0px rgba(69, 81, 100, 0.1);
        border-radius: 0 0 10px 10px;
        padding-top: 0;
        margin-top: -6px;
        padding-left: 72px;
        padding-right: 70px;
        padding-bottom: 23px;
        color: rgba(30, 48, 86, 0.8);
        line-height: 30px;
    }

    
</style>

<div class="main-container">

    @if(session()->has('success'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <b>{{session()->get('success')}}</b>
    </div>
    @endif

    <div class="pd-ltr-20 xs-pd-20-10">
        
        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>FAQs</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="blog-detail card-box overflow-hidden mb-30">    
            <section class="faq">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8 text-center">
                            <div class="section-title">
                                <h3>Apa yang boleh kami bantu?</h3>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="accordion" id="accordionExample">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                        Permulaan
                                                    </button>
                                                </h5>
                                            </div>
            
                                            <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ol>
                                                        <li><b>Adakah saya perlu membuat akaun baharu untuk mengakses sistem ini?</b></li>
                                                        <ul>
                                                            <li>Anda tidak perlu membuat akaun baharu kerana kami telah membuatkan akaun untuk pelajar yang hendak mengakses sistem ini</li>
                                                        </ul>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Modul Navigasi
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ol>
                                                        <li><b>Di manakah saya boleh mencari senarai modul pembelajaran yang tersedia?</b></li>
                                                        <ul>
                                                            <li>Anda boleh pergi ke halaman utama modul dengan mengklik module di bar sisi kiri. Untuk mengakses sub bab, klik tekan sini pada bab yang dikehendaki dan sub bab dipaparkan.</li>
                                                        </ul>
                                                        <li><b>Bolehkah saya menjejaki kemajuan saya dalam modul?</b></li>
                                                        <ul>
                                                            <li>Anda boleh menjejak kemajuan anda dengan menekan butang mark as done untuk menyimpan kemajuan anda. Ia akan dipaparkan pada halaman profil dan utama modul.</li>
                                                        </ul>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Penglibatkan dalam Forum
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ol>
                                                        <li><b>Bagaimanakah saya boleh mengambil bahagian dalam perbincangan di forum?</b></li>
                                                        <ul>
                                                            <li>Anda boleh mengambil bahagian dengan mengklik butang Forum di sisi bar kiri untuk ke halaman forum.</li>
                                                        </ul>
                                                        <li><b>Bolehkah saya membuat utas perbincangan baharu?</b></li>
                                                        <ul>
                                                            <li>Ya. Anda boleh memulakan utas perbincangan baharu.</li>
                                                        </ul>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
            
                                    </div>
            
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                        data-target="#collapse5" aria-expanded="false" aria-controls="collapseOne">
                                                        Pengurusan Profil
                                                    </button>
                                                </h5>
                                            </div>
            
                                            <div id="collapse5" class="collapse" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ol>
                                                        <li><b>Bagaimanakah saya boleh mengemas kini gambar profil dan butiran peribadi saya?</b></li>
                                                        <ul>
                                                            <li>Anda boleh pergi ke halaman profil dan mengisi semua maklumat yang belum diisi dan membuat perubahan jika perlu untuk maklumat seperti email dan kata laluan.</li>
                                                        </ul>
                                                        <li><b>Adakah mustahil untuk menukar kata laluan saya?</b></li>
                                                        <ul>
                                                            <li>Tidak mustahil. Anda boleh menukar kata laluan anda melalui halaman profil dan melalui halaman log masuk.</li>
                                                        </ul>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                        data-target="#collapse6" aria-expanded="false" aria-controls="collapseTwo">
                                                        Mengambil Kuiz
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapse6" class="collapse" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ol>
                                                        <li><b>Bagaimanakah saya boleh mengakses dan menyelesaikan kuiz?</b></li>
                                                        <ul>
                                                            <li>Anda boleh mengaksesnya mengklik kuiz di sisi bar kiri. Halaman kuiz akan dipaparkan. Untuk menyelesaikan kuiz, anda boleh memilih bab yang anda dan tekan jawab untuk mencuba jawab kuiz.</li>
                                                        </ul>
                                                        <li><b>Adakah terdapat had masa untuk kuiz?</b></li>
                                                        <ul>
                                                            <li>Ya. Terdapat had masa pada setiap quiz dan anda hanya boleh mencuba untuk 3 kali sahaja.</li>
                                                        </ul>
                                                        <li><b>Bolehkah saya menyemak keputusan kuiz saya dan jawapan yang betul?</b></li>
                                                        <ul>
                                                            <li>Tidak. Anda hanya boleh melihat markah anda.</li>
                                                        </ul>
                                                    </ol> 
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                        data-target="#collapse7" aria-expanded="false" aria-controls="collapseThree">
                                                        Pengurusan Akaun
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapse7" class="collapse" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ol>
                                                        <li><b>Bolehkah saya menukar alamat e-mel yang dikaitkan dengan akaun saya?</b></li>
                                                            <ul>
                                                                <li>Tidak. Sistem ini tidak membenarkan anda menukar email anda. Ia telah ditetapkan oleh administrator.</li>
                                                            </ul>
                                                        </li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
            
                                    </div>
                                    <div style="display: block; justify-content: center; text-align: center;">
                                        <h6 style="margin-bottom: 10px;">Jika ada pertanyaan lebih lanjut sila hubungi kami</h6>
                                        <button class="btn btn-success" role="button" data-toggle="modal" data-target="#contactModal">Contact Us</button>
                                    </div>

                                    {{-- For popup page --}}
                                    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" style="width: 30%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="myModalLabel">Hubungi Kami</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Add your contact form here -->
                                                    <form id="contactForm" action="{{ route('contact') }}" method="post">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text" class="form-control" id="name" name="name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" id="email" name="email" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message">Message</label>
                                                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-success">Hantar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
            
                            </div>
            
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            Crunchy Code Web Application System developed by Elysium
        </div>
    </div>
</div>

@endsection