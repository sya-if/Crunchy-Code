@extends('layouts.master')

@php($user = Auth::user())

@section('content')


<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Modul 1.2 Algoritma</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Algoritma</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="blog-wrap">
					<div class="container pd-0">
						<div class="row">

							<!-- First Row -->
							<div class="col-md-8 col-sm-12 mx-auto">
								<div class="pd-20 card-box height-50-p mb-30">
									<h4 class="mb-20 h4">Standard Kandungan Modul 1.2</h4>
									<div class="list-group">
										<a href="#" class="list-group-item list-group-item-action active">1.2.1 Penggunaan Algoritma untuk Menyelesaikan Masalah</a>
										<a href="#" class="list-group-item list-group-item-action">1.2.2 Struktur Kawalan dalam Pengaturcaraan</a>
										<a href="#" class="list-group-item list-group-item-action">1.2.3 Menguji dan Membaiki Ralat dalam Algoritma</a>
										<a href="#" class="list-group-item list-group-item-action">1.2.4 Pengesanan Nilai Pemboleh Ubah pada Setiap Tahap dalam Algoritma</a>
										<a href="#" class="list-group-item list-group-item-action">1.2.5 Mengenal Pasti Output yang Betul Berdasarkan Input yang Diberi</a>
										<a href="#" class="list-group-item list-group-item-action">1.2.6 Terjemahan Algoritma ke dalam Bahasa Pengaturcaraan</a>
									</div>
								</div>
							</div>

							<!-- Second Row -->
							<div class="col-md-12 col-sm-12 mx-auto">
								<div class="blog-detail card-box overflow-hidden mb-30">
									<div class="blog-img">
										<img src="vendors/images/img2.jpg" alt="">
									</div>
									<div class="blog-caption">
										<h4 class="mb-10">Pengenalan  Module 1.2</h4>
										<h5 class="mb-10">Definisi Algoritma</h5>
										<a>Satu set arahan untuk menyelesaikan masalah. arahan -arahan terpinci yang dapat diikuti oleh pembaca sehingga tugasan terlaksana dengan jayanya adalah suatu bentuk algoritma dalam kehidupan harian. Contohnya, seorang ibu boleh dirujuk arahan arahan untuk persedian memasak dalam buku resepi.
											Algoritma dapat dihaluskan dengan menambahkan butiran.
										</a>
										<a>Contoh 1 : Menjerang air
											<ol>
												<li>Mula</li>
												<li>Isi air ke dalam cerek</li>
												<li>Letakkan cerek di atas dapur gas</li>
												<li>Hidupkan api </li>
												<li>Tunggu sehingga air mendidih</li>
												<li>Matikan api </li>
											</ol>
										</a>
										<a>Contoh 2 : Membeli air minuman tin darioada mesin layan diri
											<ol>
												<li>Mula</li>
												<li>Masukkan wang yangs ecukupnya</li></li> 
												<li>Tekan butang air minuman tin yang dipilih</li>
												<li>Ambil air minuman tin</li>
												<li>Tamat</li>
											</ol>
										</a>


										<a>Perhatikan contoh 2, adakah butiran algoritma cukup jelas ? Jika tidak, anda perlu memperhalus algoritma tersebut dengan idea untuk menyelesaikan masalah tersebut. Misalnya, arahan (2) dan (4) memerlukan butiran tambahan.</a>
										<a>
										Penghalusan arahan(2):
										<ol>
											<li>Masukkan wang syiling atau wang kertas di slot wang yang disediakan</li>
											<li>Perhatikan baki wang yang diperlukan</li>
											<li>Jika baki masih belum mencapai sifar, masukkan baki wang yang dikehendaki. </li>
										</ol>
										Penghalusan arahan (4):
										<ol>
											<li>Tunggu air minuman tin keluar di ruangan yang disediakan</li>
											<li>Ambil air minuman tin tersebut </li>
											<li>Tunggu baki wang (jika ada) di ruangan yang disediakan</li>
										</ol>
										</a>
										<h5 class="mb-10">Unordered List</h5>
										<ul>
											<li>Duis aute irure dolor in reprehenderit in voluptate.</li>
											<li>Sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
											<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
											<li>Duis aute irure dolor in reprehenderit in voluptate.</li>
											<li>Sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
											<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
										</ul>
										<h5 class="mb-10">Ordered List</h5>
										<ol>
											<li>Duis aute irure dolor in reprehenderit in voluptate.</li>
											<li>Sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
											<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
											<li>Duis aute irure dolor in reprehenderit in voluptate.</li>
											<li>Sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
											<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
										</ol>
									</div>
								</div>
							</div>

							<!-- <div class="col-md-4 col-sm-12">
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
							</div> -->
						</div>
					</div>
				</div>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
	</div>

@endsection