@extends('layouts.master')

@php($user = Auth::user())

@section('content')
<style>
.card img {
        width: 50%; /* Adjust the percentage as needed */
        display: block;
        margin: 0 auto; /* Center the image horizontally */
    }

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
									<li class="breadcrumb-item"><a href="home.blade.php">Home</a></li>
									<li class="breadcrumb-item"><a href="mainpage-module.blade.php">Module</a></li>
									<li class="breadcrumb-item active" aria-current="page">Module 1.2 Algoritma</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="blog-wrap">
					<div class="container pd-0">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<<div class="card-box blog-caption mb-20 shadow-box colour-box" style="padding:30px;" align="center">
                                	<h3>Module 1.2 : Algoritma</h3>
								</div>
								<!-- Pengenalan Module -->
									<div class="blog-detail card-box overflow-hidden mb-30">
										<div class="blog-caption">
											
											<h5 class="mb-10">Definisi Algoritma</h5>
											<p>Satu set arahan untuk menyelesaikan masalah. arahan -arahan terpinci yang dapat diikuti oleh pembaca sehingga tugasan terlaksana dengan jayanya adalah suatu bentuk algoritma dalam kehidupan harian. Contohnya, seorang ibu boleh dirujuk arahan arahan untuk persedian memasak dalam buku resepi.
												Algoritma dapat dihaluskan dengan menambahkan butiran.
											</p>
											<p><b>Contoh 1 : Menjerang air</b>
												<ol>
													<li>Mula</li>
													<li>Isi air ke dalam cerek</li>
													<li>Letakkan cerek di atas dapur gas</li>
													<li>Hidupkan api </li>
													<li>Tunggu sehingga air mendidih</li>
													<li>Matikan api </li>
												</ol>
											</p>
											<p><b>Contoh 2 : Membeli air minuman tin darioada mesin layan diri</b>
												<ol>
													<li>Mula</li>
													<li>Masukkan wang yangs ecukupnya</li></li> 
													<li>Tekan butang air minuman tin yang dipilih</li>
													<li>Ambil air minuman tin</li>
													<li>Tamat</li>
												</ol>
											</p>


											<p>Perhatikan contoh 2, adakah butiran algoritma cukup jelas ? Jika tidak, anda perlu memperhalus algoritma tersebut dengan idea untuk menyelesaikan masalah tersebut. Misalnya, arahan (2) dan (4) memerlukan butiran tambahan.</p>
											<p>
												Penghalusan arahan(2):
												<ol>
													<li>Masukkan wang syiling atau wang kertas di slot wang yang disediakan</li>
													<li>Perhatikan baki wang yang diperlukan</li>
													<li>Jika baki masih belum mencapai sifar, masukkan baki wang yang dikehendaki. </li>
												</ol>
											<br>
												Penghalusan arahan (4):
												<ol>
													<li>Tunggu air minuman tin keluar di ruangan yang disediakan</li>
													<li>Ambil air minuman tin tersebut </li>
													<li>Tunggu baki wang (jika ada) di ruangan yang disediakan</li>
												</ol>
											</p>

											<h5 class="mb-10">Ciri-Ciri Wajib Algoritma</h5z>
											<!-- Image Ciri-ciri wajib algoritma Container -->
											<div class="card-deck mb-30">
												<div class="card mx-auto">
													<img class="card-img-top" src="../../../vendors/images/Module/ciri-wajib-algoritma.png" alt="mind map ciri ciri algoritma">
												</div>
											</div>
											<p></p>
											<h5 class="mb-10">Arahan untuk hasilkan algoritma</h5>
											<ol>
												<li>Analisis masalah yang perlu diselesaikan. Kenal pasti input, matlamat proses dan output.</li>
												<li>Tulis arahan arahan umum untuk memproses input kepada output</li>
												<li>Analisis setiap arhan umum untuk menilai kejelasan arahan itu sehingga boleh dilaksanakan</li>
												<ul>
													<li>Jika kurang jelas, halusi arahan umum dengan menulis arahan terperinci</li>
													<li>Untuk setiap arahan terperinci, buat penilaian sama ada arahan terperinci masih perlu dihaluskan atau tidak</li>
												</ul>
												<li>Buat penghalusan bagi setiap arahan umum yang masih kurang jelas</li>
												<li>Arahan terakhir ,mestilah menghasilkan output yang dikehendaki oleh proses dan perkara ini ialah batasan algoritma yang direka cipta</li>
											</ol>
										</div>
									</div>

									<!-- 1.2.1 Penggunaan Algoritma untuk Menyelesaikan Masalah -->
									<div class="blog-detail card-box overflow-hidden mb-30">
										<div class="blog-caption">
											<h4 class="mb-10">1.2.1 Penggunaan Algoritma untuk Menyelesaikan Masalah</h4>
											<h5 class="mb-10">Definisi Komputer</h5>
											<p>
												Komputer ialah alat elektronik yang berupaya menerima dan memproses data input untuk menghasilkan maklumat sebagai output serta menyimpan kedua-dua data dan maklumat. Salah satu ciri komputer ialah kebolehan menyimpan dan menggunakan pelbagai aturcara untuk melaksanakan proses komputer. Semua aturcara komputer ialah perisina yang “menghidupkan” perkakasan komputer dengan memproses semua input kepada output.
											</p>
											<!-- Image 2(Input-proses-output) Container -->
											<div class="card-deck mb-30">
												<div class="card mx-auto">
													<img class="card-img-top" src="../../../vendors/images/Module/121-picture.png" alt="mind map ciri ciri algoritma">
												</div>
											</div>
											<p></p>
											
											<!-- Definisi Aturcara komputer -->
											<h5 class="mb-10">Definisi Aturcara Komputer</h5>
											<p>
											Aturcara komputer ialah algoritma komputer yang ditulis dalam bahasa pengaturcaraan yang dilaksanakan oleh komputer. Sistem komputer menerima input daripada pengguna. Input ialah nombor, aksara, perkataan, suara atau gambar yang dimasukkan oleh pengguna melalui papan kekunci. Proses mengubah input menggunakan formula matematik atau logik menghasilkan output. Output ialah nilai yang dipaparkan pada skrin.										</p>
											</p>
											
											<p><b>Contoh 1</b></p>
											<p>
											Adam mengambil gambar keluarganya dan menghantar gambar tersebut kepada datuk dan nenek di kampung dengan menggunakan telefon pintar.
											</p>
											<p>
												Penyelesaian:

												<table class="table table-bordered">
														<tr>
															<th scope="col">Input</th>
															<th scope="row">Gambar keluarga yang diambil oleh Adam</th>
														</tr>

														<tr>
															<th scope="col">Proses</th>
															<th scope="col">Proses menghantar gambar menggunakan perkakasan(hardware) dan perisian</th>
														</tr>

														<tr>
															<th scope="row">Output</th>
															<th scope="row">Gambar yang diterima oleh datuk dan nenek.</th>
														</tr>
												</table>
											</p>

											<!-- Analisis IPO -->
											<h5 class="mb-10">Analisis IPO</h5>
											<p>
											Sebelum menulis algoritma untuk suatu masalah, analisa IPO perlu dibuat. Analisis IPO adalah untuk mengenal pasti data input, proses untuk mengubah nilai data kepada maklumat dan paparan output maklumat setelah proses.
											</p>

											<p>
											Langkah-langkah membuat analisis IPO adalah:

												<ol>
													<li>Input: Harus mengenal pasti data yang perlu dibaca daripada pengguna atau persekitaran.</li>
													<li>Proses: Langkah-langkah ataupun rumusan untuk memproses data input kepada output.</li>
													<li>Output: Harus mengenal pasti output yang dikehendaki, yakni apa yang perlu dipaparkan pada skrin di akhir atur cara.</li>
												</ol>
												
											</p>

											<p><b>Contoh 2</b></p>
											<p>
												Sebuah perisian ringkas meminta pengguna memasukkan tahun kelahiran.
												Perisian kemudiannya menentukan dan memaparkan umur di skrin.
											</p>
											<p>
												<table class="table table-bordered">
														<tr>
															<th scope="col">Input</th>
															<th scope="row">Tahun_kelahiran</th>
														</tr>

														<tr>
															<th scope="col">Proses</th>
															<th scope="col">
																<ol>
																	<li>Baca input, tahun_kelahiran</li>
																	<li>Dapatkan tahun semasa daripada sistem komputer, tahun_semasa</li>
																	<li>Umur = tahun_semasa - tahun_kelahiran</li>
																</ol>
															</th>
														</tr>

														<tr>
															<th scope="row">Output</th>
															<th scope="row">Umur</th>
														</tr>
												</table>
											</p>

											<p>
											Langkah-langkah terperinci dalam proses komputer diberikan oleh algoritma. Algoritma ialah idea atau cara penyelesaian masalah dalam bentuk abstrak berasaskan arahan-arahan asas. Arahan-arahan asas ini merujuk ciri-ciri dan struktur kawalan yang sedia ada dalam bahasa pengaturcaraan.
											Jika suatu proses itu tidak dapat dihuraikan dengan arahan-arahan asas komputer, proses tersebut berkemungkinan tidak sesuai untuk dilaksanakan oleh komputer.
											</p>

											<!-- Perwakilan Algoritma -->
											<h5 class="mb-10">Perwakilan Algoritma</h5>
											<p>Terdapat dua format perwakilan algoritma, iaitu pseudokod dan carta alir.

												• Pseudokod ialah senarai struktur kawalan komputer yang ditulis dalam bahasa pertuturan manusia
												dan mempunyai nombor turutan.

												• Carta alir adalah alternatif kepada pseudokod menggunakan simbol grafik untuk mewakili arahan-
												arahan penyelesaian.
											</p>

											<!-- Pseudokod -->
											<h5 class="mb-10">Pseudokod</h5>
											<p>
											Pseudokod bukanlah bahasa pengaturcaraan komputer. Arahan ditulis dalam bahasa pertuturan harian. Setiap arahan ialah ungkapan matematik, ungkapan logik, penggunaan struktur kawalan ataupun penggunaan fungsi komputer (contohnya membaca input). Setiap arahan diletakkan dalam baris baharu yang diberikan nombor siri.
											</p>
											
											<p>
											Langkah-langkah menulis pseudokod:
												<ol>
													<li>Tulis kenyataan MULA.</li>
													<li>Baca INPUT.</li>
													<li>Proses data menggunakan ungkapan logik atau matematik.</li>
													<li>Papar OUTPUT.</li>
													<li>Tulis kenyataan TAMAT.</li>
												</ol>
											</p>
											<p><b>Contoh 3</b></p>
											<p>
												Tuliskan pseudokod untuk program ringkas yang meminta nama pengguna dan memaparkan "Hello" diikuti nama pengguna.
											</p>
												
											<p>Penyelesaian :</p> 
											<p><ol>
												<li>MULA</li>
												<li>INPUT NAMA</li>
												<li>OUTPUT "HELLO" DAN NAMA</li>
												<li>TAMAT</li>
												</ol>
											</p>

											<p><b>Contoh 4</b></p>
											<p>
												Tuliskan pseudokod untuk program ringkas yang meminta tahun kelahiran pengguna, menghitung umur dan memaparkan umur pengguna.
											</p>
												
											<p>Penyelesaian :</p> 
											<p><ol>
												<li>MULA</li>
												<li>INPUT TAHUN_LAHIR</li>
												<li>UMUR = TAHUN_SEMASA - TAHUN_LAHIR</li>
												<li>OUTPUT UMUR</li>
												<li>TAMAT</li>
												</ol>
											</p>

											<div class="card-deck mb-30">
												<div class="card mx-auto">
													<img class="card-img-top" src="../../../vendors/images/Module/121-carta-alir.png" alt="carta alir">
												</div>
											</div>
											<p>Pembinaan carta alir tidak jauh berbeza daripada pseudokod. Melalui carta alir, IPO, simbol nod untuk
												semua formula, hubungan antara data dan fakta berkaitan dengan masalah dapat dikenal pasti.
											</p>
											<p>Langkah-langkah membina carta alir.</p>
											<p><ol>
													<li>Lukis nod terminal Mula.</li>
													<li>Lukis garis penghubung.</li>
													<li>Lukis nod input. Masukkan butiran seperti umpukan data.</li>
													<li>Lukis garis penghubung.</li>
													<li>Lukis nod proses. Masukkan butiran seperti ungkapan matematik.</li>
													<li>Lukis garis penghubung.</li>
													<li>Sekiranya perlu, lukis nod proses atau nod input lain-lain yang diperlukan.</li>
													<li>Sekiranya tiada, lukis nod terminal Tamat.</li>
												</ol>
											</p>
											<p><b>Contoh 5</b></p>
											<p>Lukis carta alir untuk program ringkas yang meminta nama pengguna dan memaparkan "Hello" diikuti nama pengguna.</p>
											<div class="card-deck mb-30">
												<div class="card mb-30">
													<img class="card-img-top" src="../../../vendors/images/Module/123-picture2.png" alt="contoh 5">
												</div>
											</div>
											<br>
											<p><b>Contoh 6</b></p>
											<p>
												Lukis carta alir untuk program ringkas yang meminta tahun kelahiran pengguna, menghitung umur dan memaparkan umur pengguna.
											</p>
											<div class="card-deck mb-30">
												<div class="card">
													<img class="card-img-top" src="../../../vendors/images/Module/121-picture3.png" alt="carta alir">
												</div>
											</div>
											<p></p>
										</div>
									</div>

									<!-- 1.2.2 Struktur Kawalan dalam Pengaturcaraan -->
									<div class="blog-detail card-box overflow-hidden mb-30">
										<div class="blog-caption">
											<h4 class="mb-10">1.2.2 Struktur Kawalan dalam Pengaturcaraan</h4>
											<h5 class="mb-10">Struktur Kawalan Komputer</h5>
											<p>
												<ol>
													<li>Struktur kawalan urutan</li>
													<li>Struktur kawalan pilihan</li>
													<li>Struktur kawalan pengulangan</li>
												</ol>
											</p>
											<h5 class="mb-10">Struktur Kawalan Urutan</h5>
											<p>
												Struktur kawalan urutan melaksanakan arahan- arahan komputer satu per satu. Urutan arahan yang betul adalah penting kerana urutan yang berlainan boleh memberikan output yang berlainan. Setiap arahan adalah satu pernyataan algoritma seperti yang berikut:
												<ol>
													<li>INPUT data.</li>
													<li>Memproses data.</li>
													<li>OUTPUT hasil.</li>
												</ol>
											</p>
											<p>
												Urutan linear algoritma dipersembahkan sebagai susunan penyataan- penyataan secara linear. Sintaks bagi urutan linear adalah seperti yang berikut:
											</p>
											<div class="card-deck mb-30">
												<div class="card mx-auto">
													<img class="card-img-top" src="../../../vendors/images/Module/122-picture1.png" alt="carta alir">
												</div>
											</div>
											<br>
											<p>Contoh-contoh urutan linear menggunakan pseudokod dan carta alir adalah seperti yang berikut:</p>
											<div class="card-deck mb-30">
												<div class="card mx-auto">
													<img class="card-img-top" src="../../../vendors/images/Module/122-picture2.png" alt="carta alir">
												</div>
											</div>
											<br>
											<!-- Input interaktif -->
											<h5 class="mb-10">Input Interaktif</h5>
											<p>Perhatikan penyataan-penyataan INPUT adalah untuk menerima data daripada pengguna. Pengguna memasukkan data melalui papan kekunci dan akan disimpan dalam pemboleh ubah. Algoritma sedemikian dikatakan interaktif kerana melibatkan input pengguna.
												Pemboleh ubah ialah ruang memori yang dikhususkan untuk menerima dan menyimpan data. Dalam subjek Matematik terutamanya dalam bab Algebra, pemboleh ubah biasanya diberikan nama abjad seperti x ataupun y.
											</p>
											<br>

											<!-- Umpukan -->
											<h5 class="mb-10">Umpukan</h5>

											<p>
												Selain input interaktif daripada pengguna, kaedah umpukan boleh digunakan untuk memasukkan data ke dalam pemboleh ubah. Akan tetapi, nilai pemboleh ubah yang diumpuk adalah sama setiap kali aturcara daripada algoritma sedemikian dijalankan. Umpukan menggunakan simbol matematik, iaitu (=). Merujuk Contoh 1 di bawah, di sebelah kiri operator ialah pemboleh ubah seperti tahun_lahir. Di sebelah kanan operator ialah nilai. Umpukan bermakna nilai di sebelah kanan disimpan di dalam pemboleh ubah di sebelah kiri simbol umpukan (=).
											</p>
											<p>Contoh 1:</p>
											<p>tahun_lahir = 1963 (Umpukan nilai 1963 kepada pemboleh ubah tarikh_lahir)</p>
											<br>

											<p>Contoh 2:</p>
											<p>Umur = 21 (Umpukan nilai 21 kepada pemboleh ubah umur)</p>
											<p>
												Di samping itu, operator-operator aritmetik juga digunakan dalam ungkapan yang melibatkan pengiraan nombor. Kebanyakan operator ini sama dengan operator matematik (lihat Jadual 1.2). Pengecualian ialah penggunaan simbol asterik (*) untuk pendaraban dan simbol garis sendeng untuk pembahagian nombor. Hal ini demikian kerana, tiada simbol darab dan pembahagian untuk papan kunci piawai.
											</p>
											<div class="card-deck mb-30">
												<div class="card mx-auto">
													<img class="card-img-top" src="../../../vendors/images/Module/122-picture3.png" alt="carta alir">
												</div>
											</div>

											<p><b>Contoh 7</b></p>
											<p>
												Lukiskan carta alir untuk atur cara yang menerima dua nombor dan memaparkan jumlah sebagai output.
											</p>
											<div class="card-deck mb-30">
												<div class="card mx-auto">
													<img class="card-img-top" src="../../../vendors/images/Module/122-picture4.png" alt="carta alir">
												</div>
											</div>
											<p>
												Perhatikan! Dalam nod input, perkataan-perkataan yang biasa digunakan ialah baca, input atau dapatkan. Dalam nod output pula, perkataan-perkataan yang biasa digunakan ialah papar, cetak, tulis, output atau laporkan. Perhatikan dalam nod proses, operasi aritmetik seperti tambah, tolak, darab dan bahagi digunakan dalam ungkapan. Hasil aritmetik diumpukkan kepada pemboleh ubah melalui simbol ‘=’. Analisa penggunaan perkataan-perkataan untuk nod input, output dan proses di atas ditunjukkan dalam contoh yang berikut.
											</p>

											<p><b>Contoh 8</b></p>
											<p>Lukis carta alir untuk atur cara yang menerima saiz jejari bulatan dan menentukan ukur lilit keluasan bulatan tersebut.</p>
											<div class="card-deck mb-30">
												<div class="card mx-auto">
													<img class="card-img-top" src="../../../vendors/images/Module/122-picture5.png" alt="carta alir">
												</div>
											</div>
											<br>

											<!-- Struktur Kawalan Pilihan -->
											<h5 class="mb-10">Struktur Kawalan Pilihan</h5>
											<p>Sesetengah masalah memerlukan keputusan. Keputusan perlu dibuat setelah menilai syarat. Keputusan yang berbeza memerlukan tindakan susulan yang berbeza. Sebagai contoh, jika hari sudah gelap, ambil baju dari ampaian. Jika hari masih cerah, sidai baju di ampaian.</p>
											<p>
												Struktur kawalan pilihan memberikan perisian komputer keupayaan untuk membuat keputusan berasaskan syarat yang telah ditentukan pengatur cara. Struktur ini membolehkan arahan-arahan lain komputer dilaksanakan dalam situasi masalah yang berbeza. Ciri umum adalah satu syarat yang menentukan satu daripada dua cabang dipilih. Setiap cabang mengandungi urutan arahan komputer yang berbeza. Sekiranya satu urutan sudah terpilih, urutan satu lagi akan diabaikan.
											</p>
											<div class="card-deck mb-30">
												<div class="card mx-auto">
													<img class="card-img-top" src="../../../vendors/images/Module/122-picture6.png" alt="carta alir">
												</div>
											</div>
											<p><b>Menghasilkan syarat</b></p>
											<p>
												Syarat yang digunakan dalam struktur kawalan pilihan ialah ungkapan logik. Ungkapan logik akan menilai data untuk menghasilkan keputusan "Benar" (True) atau "Palsu" (False).
											</p>
											<br>
											<p><b>Contoh 9</b></p>
											<p>Pengguna memasukkan input bagi harga barang.
												<ul type="a">
													<li>Cadangkan nama pemboleh ubah.</li>
													<li>Tuliskan ungkapan logik untuk menguji sama ada input melebihi RM100</li>
												</ul>
											</p>											
											<p>Penyelesaian:
												<ul type="a">
													<li>harga</li>
													<li>harga > 100</li>
												</ul>
											</p>	
											<p>Untuk menghasilkan ungkapan logik, operator hubungan boleh digunakan. Dalam contoh sebelumnya, operator ‘>’ digunakan untuk menguji jika nilai dalam pemboleh ubah harga lebih tinggi daripada nilai yang diuji, iaitu 100. Operator hubungan membandingkan nilai dalam pemboleh ubah dengan nilai diuji. Hasil ujian ialah nilai
												"Benar" atau "Palsu". Jadual 1.3 menunjukkan operator hubungan yang kerap digunakan.
											</p>
											<div class="card-deck mb-30">
												<div class="card mx-auto">
													<img class="card-img-top" src="../../../vendors/images/Module/122-picture7.png" alt="carta alir">
												</div>
											</div>
											<br>
											<p><b>Contoh 10</b></p>
											<p>Pengguna memasukkan umur ke dalam aplikasi komputer. Uji sama ada umur sudah mencapai usia minimum 17 tahun.
												<ul type="a">
													<li>Kenal pasti pemboleh ubah</li>
													<li>Kenal pasti nilai yang diuji.</li>
													<li> Tuliskan ungkapan logik untuk menguji nilai dalam pemboleh ubah..</li>
												</ul>
											</p>
											<p>Penyelesaian:
												<ul type="a">
													<li>umur</li>
													<li>17</li>
													<li>umur > = 17 atau umur > 16</li>
												</ul>
											</p>

											<p></p>
											<p></p>
											<p></p>
											<p></p>
											<p></p>
											<p></p>
											<p></p>
											<p></p>

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