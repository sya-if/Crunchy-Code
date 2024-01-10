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
									<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
									<li class="breadcrumb-item"><a href="{{route('module')}}">Module</a></li>
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
								<div class="card-box blog-caption mb-20 shadow-box colour-box" style="padding:30px;" align="center">
                                	<h3>Module 1.2 : Algoritma</h3>
								</div>
								<!-- Pengenalan Module -->
									<div class="blog-detail card-box overflow-hidden mb-30">
										<div class="blog-caption">
										<h4 class="mb-10">Pendahuluan</h4>
											<p>Algoritma ialah satu set arahan untuk menyelesaikan masalah. Arahan-
												arahan terperinci yang dapat diikuti oleh pembaca sehingga tugasan

												terlaksana dengan jayanya ialah suatu bentuk algoritma dalam kehidupan
												harian. Dalam kehidupan harian, terdapat banyak contoh yang boleh
												dikaitkan dengan algoritma. Contohnya, seorang ibu boleh merujuk
												arahan-arahan untuk persediaan memasak dalam buku resepi.

												Algoritma dapat dihalusi dengan menambahkan butiran. Contoh-
												contoh algoritma yang lain dalam kehidupan harian seperti berikut:
											</p>
											<div class="card-deck mb-10">
												<div class="card mb-30">
													<img class="card-img-top" src="../../../vendors/images/Module/contoh1.png" alt="mind map ciri ciri algoritma">
												</div>
											</div>
											<div class="card-deck mb-10">
												<div class="card mb-30">
													<img class="card-img-top" src="../../../vendors/images/Module/contoh2.png" alt="mind map ciri ciri algoritma">
												</div>
											</div>
											<div class="card-deck mb-10">
												<div class="card mb-30">
													<img class="card-img-top" src="../../../vendors/images/Module/contoh3.png" alt="mind map ciri ciri algoritma">
												</div>
											</div>


											<p>Perhatikan contoh 3, adakah butiran algoritma cukup jelas ? Jika tidak, anda perlu memperhalus algoritma tersebut dengan idea untuk menyelesaikan masalah tersebut. Misalnya, arahan (2) dan (4) memerlukan butiran tambahan.</p>
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
											<br>
											<h5 class="mb-10">Ciri-Ciri Wajib Algoritma</h5z>
											<!-- Image Ciri-ciri wajib algoritma Container -->
											<div class="card-deck mb-30">
												<div class="card mb-30">
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

									<!-- Module 1.2.1 Penggunaan Algoritma untuk Menyelesaikan Masalah -->
									<div class="blog-detail card-box overflow-hidden mb-30">
										<div class="blog-caption">
											<h4 class="mb-10">Module 1.2.1 Penggunaan Algoritma untuk Menyelesaikan Masalah</h4><br>
											<h5 class="mb-10">Definisi Komputer</h5>
											<p>
												Komputer ialah alat elektronik yang berupaya menerima dan memproses data input untuk menghasilkan maklumat sebagai output serta menyimpan kedua-dua data dan maklumat. Salah satu ciri komputer ialah kebolehan menyimpan dan menggunakan pelbagai aturcara untuk melaksanakan proses komputer. Semua aturcara komputer ialah perisina yang “menghidupkan” perkakasan komputer dengan memproses semua input kepada output.
											</p>
											<!-- Image 2(Input-proses-output) Container -->
											<div class="card-deck mb-30">
												<div class="card mb-30">
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
											<p><b>Penyelesaian</b></p>
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
											<br>
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
											<br>
											<h5 class="mb-10">Perwakilan Algoritma</h5>
											<p>Terdapat dua format perwakilan algoritma, iaitu pseudokod dan carta alir.

												• Pseudokod ialah senarai struktur kawalan komputer yang ditulis dalam bahasa pertuturan manusia
												dan mempunyai nombor turutan.

												• Carta alir adalah alternatif kepada pseudokod menggunakan simbol grafik untuk mewakili arahan-
												arahan penyelesaian.
											</p>

											<!-- Pseudokod -->
											<br>
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
											<br>
											<p><b>Contoh 3</b></p>
											<p>
												Tuliskan pseudokod untuk program ringkas yang meminta nama pengguna dan memaparkan "Hello" diikuti nama pengguna.
											</p>
												
											<p><b>Penyelesaian :</b></p> 
											<p><ol>
												<li>MULA</li>
												<li>INPUT NAMA</li>
												<li>OUTPUT "HELLO" DAN NAMA</li>
												<li>TAMAT</li>
												</ol>
											</p>
											<br>
											<p><b>Contoh 4</b></p>
											<p>
												Tuliskan pseudokod untuk program ringkas yang meminta tahun kelahiran pengguna, menghitung umur dan memaparkan umur pengguna.
											</p>
												
											<p><b>Penyelesaian :</b></p> 
											<p><ol>
												<li>MULA</li>
												<li>INPUT TAHUN_LAHIR</li>
												<li>UMUR = TAHUN_SEMASA - TAHUN_LAHIR</li>
												<li>OUTPUT UMUR</li>
												<li>TAMAT</li>
												</ol>
											</p>

											<div class="card-deck mb-30">
												<div class="card mb-30">
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
											<br>
											<p><b>Contoh 5</b></p>
											<p>Lukis carta alir untuk program ringkas yang meminta nama pengguna dan memaparkan "Hello" diikuti nama pengguna.</p>
											<div class="card-deck mb-30">
												<div class="card mb-30">
													<img class="card-img-top" src="../../../vendors/images/Module/121-contoh5.png" alt="contoh 5">
												</div>
											</div>
											<br>
											<p><b>Contoh 6</b></p>
											<p>
												Lukis carta alir untuk program ringkas yang meminta tahun kelahiran pengguna, menghitung umur dan memaparkan umur pengguna.
											</p>
											<div class="card-deck mb-30">
												<div class="card">
													<img class="card-img-top" src="../../../vendors/images/Module/121-contoh6.png" alt="contoh 6">
												</div>
											</div>
											<p></p>
										</div>
									</div>

									<!-- 1.2.2 Struktur Kawalan dalam Pengaturcaraan -->
									<div class="blog-detail card-box overflow-hidden mb-30">
										<div class="blog-caption">
											<h4 class="mb-10">Module 1.2.2 Struktur Kawalan dalam Pengaturcaraan</h4>
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
												<div class="card">
													<img class="card-img-top" src="../../../vendors/images/Module/122-picture1.png" alt="carta alir">
												</div>
											</div>
											<br>
											<p>Contoh-contoh urutan linear menggunakan pseudokod dan carta alir adalah seperti yang berikut:</p>
											<div class="card-deck mb-30">
												<div class="card">
													<img class="card-img-top" src="../../../vendors/images/Module/122-picture2.png" alt="carta alir">
												</div>
											</div>
											<br>
											<!-- Input interaktif -->
											<h6 class="mb-10">Input Interaktif</h6>
											<p>Perhatikan penyataan-penyataan INPUT adalah untuk menerima data daripada pengguna. Pengguna memasukkan data melalui papan kekunci dan akan disimpan dalam pemboleh ubah. Algoritma sedemikian dikatakan interaktif kerana melibatkan input pengguna.
												Pemboleh ubah ialah ruang memori yang dikhususkan untuk menerima dan menyimpan data. Dalam subjek Matematik terutamanya dalam bab Algebra, pemboleh ubah biasanya diberikan nama abjad seperti x ataupun y.
											</p>
											<br>

											<!-- Umpukan -->
											<h6 class="mb-10">Umpukan</h6>

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
												<div class="card">
													<img class="card-img-top" src="../../../vendors/images/Module/122-picture3.png" alt="carta alir">
												</div>
											</div>

											<p><b>Contoh 7</b></p>
											<p>
												Lukiskan carta alir untuk atur cara yang menerima dua nombor dan memaparkan jumlah sebagai output.
											</p>
											<div class="card-deck mb-30">
												<div class="card">
													<img class="card-img-top" src="../../../vendors/images/Module/122-picture4.png" alt="carta alir">
												</div>
											</div>
											<p>
												Perhatikan! Dalam nod input, perkataan-perkataan yang biasa digunakan ialah baca, input atau dapatkan. Dalam nod output pula, perkataan-perkataan yang biasa digunakan ialah papar, cetak, tulis, output atau laporkan. Perhatikan dalam nod proses, operasi aritmetik seperti tambah, tolak, darab dan bahagi digunakan dalam ungkapan. Hasil aritmetik diumpukkan kepada pemboleh ubah melalui simbol ‘=’. Analisa penggunaan perkataan-perkataan untuk nod input, output dan proses di atas ditunjukkan dalam contoh yang berikut.
											</p>

											<p><b>Contoh 8</b></p>
											<p>Lukis carta alir untuk atur cara yang menerima saiz jejari bulatan dan menentukan ukur lilit keluasan bulatan tersebut.</p>
											<div class="card-deck mb-30">
												<div class="card">
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
												<div class="card">
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
												<div class="card">
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

											<!-- Pseudokod untuk Struktur Kawalan Pilihan -->
											<h6 class="mb-10">Pseudokod untuk Struktur Kawalan Pilihan</h6>
											<p>Perhatikan bahawa terdapat dua blok dalam pseudokod struktur kawalan pilihan. Blok pertama mengandungi blok penyataan yang akan dilaksanakan sekiranya syarat memberikan nilai "Benar". Perkataan JIKA oleh syarat diuji. Blok penyataan mesti berada di antara MULA_
												JIKA dan TAMAT_JIKA.
											</p>
											<div class="card-deck mb-30">
												<div class="card">
													<img class="card-img-top" src="../../../vendors/images/Module/122-picture8.png" alt="carta alir">
												</div>
											</div>
											<br>
											<p>
												Blok selainnya mengandungi blok penyataan yang akan dilaksanakan sekiranya syarat dari blok pertama gagal memberikan nilai "Benar", yakni "Palsu". Blok penyataan "Palsu" mesti berada di antara MULA_JIKA_ TIDAK dan TAMAT_JIKA_TIDAK.
											</p>
											<div class="card-deck mb-30">
												<div class="card">
													<img class="card-img-top" src="../../../vendors/images/Module/122-picture9.png" alt="carta alir">
												</div>
											</div>
											<br>
											<p><b>Contoh 11</b></p>
											<p>
												Tulis pseudokod untuk menilai hari sama ada hari sudah gelap atau sebaliknya. Pengguna dikehendaki menjawab sama ada "Benar" atau "Palsu" apabila ditanya jika hari sudah gelap. Jika "Benar" untuk hari sudah gelap, papar "Ambil baju dari ampaian." dan "Simpan dalam bakul.". Jika sebaliknya, papar "Sidai baju di ampaian".
											</p>
											<p>Penyelesaian:
												<ol>
													<li>MULA</li>
													<li>Papar "Hari sudah gelap: Benar atau Palsu?"</li>
													<li> INPUT jawapan dengan nilai "Benar" atau "Palsu"</li>
													<li>JIKA Hari_sudah_gelap? MULA_JIKA
														<ul>
															<li>OUTPUT "Ambil semua baju dari ampaian."</li>
															<li>OUTPUT "Simpan semua baju dalam bakul."</li>
														</ul>
														TAMAT_JIKA
														JIKA_TIDAK MULA_JIKA_TIDAK
														<ul>
															<li>OUTPUT "Sidai baju di ampaian."</li>
														</ul>
														TAMAT_JIKA_TIDAK
													</li>
													<li>TAMAT</li>

												</ol>
											</p>
											<p><b>Contoh 12</b></p>
											<p>
												Tulis pseudokod bagi blok struktur kawalan pilihan untuk menguji sama
												ada umur pengguna sudah mencapai usia minimum 17 tahun. Jika umur
												pengguna adalah 17 tahun atau ke atas, paparkan bahawa pemohon boleh
												memohon menduduki ujian lesen memandu . Paparkan bahawa pemohon
												belum cukup umur sekiranya ujian syarat gagal.
											</p>
											<p>Penyelesaian:
												<ol>
													<li>MULA</li>
													<li>Papar "Masukkan umur pemohon:"</li>
													<li>INPUT umur</li>
													<li>JIKA umur > 16 MULA_JIKA
														<ul>
															<li>OUTPUT "Anda boleh pohon lesen."</li>														</ul>
														TAMAT_JIKA
														JIKA_TIDAK MULA_JIKA_TIDAK
														<ul>
															<li>OUTPUT "Anda belum cukup umur."</li>
														</ul>
														TAMAT_JIKA_TIDAK
													</li>
													<li>TAMAT</li>
												</ol>
											</p>
											<br>

											<!-- Carta alir untuk Struktur Kawalan Pilihan -->
											<h6 class="mb-10">Carta alir untuk Struktur Kawalan Pilihan</h6>
											<p>Dalam carta alir, nod syarat, diwakili oleh bentuk
												geometri rombus. Terdapat satu anak panah
												masuk dan dua anak panah keluar. Anak panah
												masuk membawa data untuk dinilai oleh syarat
												dalam nod syarat. Hasil penilaian adalah sama
												ada "Benar" (True) atau "Palsu" (False).

												Dua anak panah keluar ialah keputusan untuk
												"Benar" dan "Palsu". Anak panah "Benar" dipilih
												apabila syarat dalam nod menghasilkan keputusan
												"Benar" dan "Palsu". Setiap anak panah menuju
												kepada blok penyataan-penyataan yang berbeza.
												Hal ini bererti tindakan susulan adalah berbeza
												dan bergantung kepada hasil ujian syarat.
											</p>
											<div class="card-deck mb-30">
												<div class="card">
													<img class="card-img-top" src="../../../vendors/images/Module/122-picture10.png" alt="carta alir">
												</div>
											</div><br>

											<p><b>Contoh 13</b></p>
											<p>
												Lukis carta alir untuk menilai hari sama ada sudah gelap atau sebaliknya. Pengguna dikehendaki menjawab
												sama ada "Benar" atau "Palsu" apabila ditanya jika hari sudah gelap. Jika "Benar" untuk hari sudah gelap,
												papar "Ambil baju dari ampaian." dan "Simpan dalam bakul.". Jika sebaliknya, papar "Sidai baju di ampaian".
											</p>
											<p>Penyelesaian:
											<div class="card-deck mb-30">
												<div class="card">
													<img class="card-img-top" src="../../../vendors/images/Module/122-picture11.png" alt="carta alir">
												</div>
											</div>
											</p>
											<br>

											<p><b>Contoh 14</b></p>
											<p>
											Lukis carta alir untuk atur cara yang menentukan umur pemohon dan tentukan sama ada pemohon boleh
											memohon lesen memandu ataupun tidak. Umur minimum ialah 17 tahun.
											</p>
											<p>Penyelesaian:
											<div class="card-deck mb-30">
												<div class="card">
													<img class="card-img-top" src="../../../vendors/images/Module/122-picture12.png" alt="carta alir">
												</div>
											</div>
											</p>
											<br>

											<!-- Struktur Kawalan Pengulangan -->
											<h5 class="mb-10">Struktur Kawalan Pengulangan</h5>
											<p>Struktur kawalan pengulangan mengulang arahanarahan komputer dalam blok. Ulangan boleh
												berlangsung sehingga menerima syarat
												berhenti ataupun mencapai bilangan yang
												sudah ditetapkan.
												Cuba bayangkan seorang murid
												berlari mengelilingi bulatan dan terusmenerus membuat pusingan.
												Sintaks struktur kawalan ulangan
												adalah seperti yang berikut:
											</p>
											<div class="card-deck mb-30">
												<div class="card">
													<img class="card-img-top" src="../../../vendors/images/Module/122-picture13.png" alt="carta alir">
												</div>
											</div>

											<p>Dalam pseudokod, perhatikan bahawa syarat juga digunakan
												seperti dalam kawalan pilihan untuk menentukan tindakan seterusnya.
												Syarat diletakkan selepas kata kunci SELAGI. Tidak seperti kawalan
												pilihan, kawalan pengulangan menggunakan keputusan syarat "Benar"
												untuk mengulang arahan-arahan dalam blok penyataan. Jika keputusan
												syarat adalah "Palsu", maka blok penyataan tidak akan diendahkan.
												Blok penyataan ialah penyataan-penyataan di antara kata kunci MULA_
												SELAGI dan TAMAT_SELAGI.
												Demikian halnya dalam carta alir, lihat rajah 1.15. Nod syarat dalam
												struktur kawalan pengulangan menentukan sama ada blok penyataan
												perlu diulang. Jika keputusan adalah "Benar", anak panah menuju kepada blok penyataan dan seterusnya balik kepada nod syarat untuk
												diuji sekali lagi. Sekiranya keputusan adalah "Palsu", anak panah keluar
												akan meninggalkan kesemua blok penyataan dan nod syarat.
											</p>
											<div class="card-deck mb-30">
												<div class="card">
													<img class="card-img-top" src="../../../vendors/images/Module/122-picture14.png" alt="carta alir">
												</div>
											</div>
											<p>Dalam rajah di atas, perhatikan perbezaan reka bentuk carta alir
												di antara struktur kawalan ulangan dengan struktur kawalan pilihan.
												Perbezaan ketara adalah hala tuju anak panah bagi keputusan "Benar"
												yang berpatah balik supaya pengulangan boleh dilaksanakan jika perlu.
												Oleh sebab itulah struktur ini disebut sebagai struktur kawalan ulangan.
											</p>

											<p><b>Contoh 15</b></p>
											<p>Tulis pseudokod untuk aplikasi yang akan mencetak teks "Saya gembira
												hadir ke sekolah hari ini." sebanyak 5 kali.
											</p>
											<p>Penyelesaian:
												<ol>
													<li>Mula</li>
													<li>pembilang = 0</li>
													<li>SELAGI pembilang < 5 MULA_SELAGI
														<ul>
															<li>OUTPUT "Anda boleh pohon lesen."</li>
															<li>pembilang = pembilang + 1</li>
														<ul>
														TAMAT_SELAGI
													</li>
													<li>Tamat</li>
												</ol>
											</p><br>

											<p><b>Contoh 16</b></p>
											<p>Lukis carta alir untuk aplikasi yang akan mencetak teks "Saya gembira hadir
												ke sekolah hari ini," sebanyak 5 kali.
											</p>
											<p>Penyelesaian:
											<div class="card-deck mb-30">
												<div class="card">
													<img class="card-img-top" src="../../../vendors/images/Module/122-contoh-16.png" alt="carta alir">
												</div>
											</div>
										</div>
									</div>

									<!-- Module 1.2.3 Menguji dan Membaiki Ralat dalam Algoritma -->
									<div class="blog-detail card-box overflow-hidden mb-30"> 
										<div class="blog-caption">
											<h4 class="mb-10">Module 1.2.3 Menguji dan Membaiki Ralat dalam Algoritma</h4>
											<p>Algoritma diuji setelah ditulis untuk tujuan pembaikan. Pengujian
												algoritma dibuat sebelum algoritma ditulis sebagai kod komputer. Lihat
												Rajah 1.18. Hal ini demikian kerana, pembetulan di peringkat kod
												mengambil masa yang lebih lama dan lebih mahal daripada pembetulan
												di peringkat algoritma.
											</p>
											<div class="card-deck mb-30">
												<div class="card">
													<img class="card-img-top" src="../../../vendors/images/Module/123-picture1.png" alt="carta alir">
												</div>
											</div>
											<p>Matlamat pengujian algoritma adalah untuk memastikan logik algoritma 
												adalah betul dan memikirkan pembaikan algoritma supaya lebih efisien. 
												Algoritma yang telah diuji mempunyai ciri-ciri yang berikut:
												<ul>
													<li><b>Mudah difahami</b>, maka mudah ditulis sebagai atur cara komputer.</li>
													<li><b>Lengkap</b>, yakni memenuhi semua keperluan penyelesaian masalah.</li>
													<li><b>Efisien</b>, yakni algoritma berfungsi dengan pantas dan tidak memakan banyak ruang memori.</li>
													<li><b>Memenuhi kriteria reka bentuk</b> perisian yang ingin dibangunkan</li>
												</ul>
											</p><br>

											<h5 class="mb-10">Ralat dalam Algoritma</h5>											
											<p>Algoritma yang tidak memenuhi kriteria akan sukar difahami, tidak lengkap, 
												kurang efisien dan tidak memenuhi kriteria reka bentuk perisian. Perkara 
												ini akan mengakibatkan perisian yang dihasilkan mengandungi ralat. Hal ini 
												kerana pengatur cara bergantung kepada algoritma untuk menghasilkan 
												atur cara. Algoritma yang mengandungi ralat akan menyebabkan pengatur 
												cara menghasilkan atur cara yang juga mengandungi ralat. Rajah di bawah 
												menunjukkan hubungan ralat algoritma dan ralat atur cara.
											</p>
											<div class="card-deck mb-30">
												<div class="card">
													<img class="card-img-top" src="../../../vendors/images/Module/123-picture2.png" alt="carta alir">
												</div>
											</div><br>
											<p>Ujian algoritma boleh mencegah ralat algoritma. Ralat algoritma boleh 
												menyebabkan dua jenis ralat dalam atur cara yang bakal dihasilkan 
												daripada algoritma tersebut, lihat Jadual 1.4.
												<ol type="a">
													<li><b>Ralat sintaks</b> - tidak wujud dalam algoritma. Ralat sintaks berlaku 
														kerana menggunakan bahasa pengaturcaraan seperti Java dengan 
														cuai. Ralat sintaks biasanya ditemui secara automatik oleh perisian 
														kompiler bahasa pengaturcaraan. Ralat algoritma tidak menyebabkan 
														ralat sintaks..
													</li>
													<li><b>Ralat logik</b> - ralat logik berlaku kerana perisian yang dihasilkan tidak 
														menjalankan fungsi-fungsi yang sepatutnya, tidak lengkap ataupun 
														fungsi menghasilkan output yang tidak tepat.
														<div class="card-deck mb-30">
															<div class="card">
																<img class="card-img-top" src="../../../vendors/images/Module/123-picture3.png" alt="carta alir">
															</div>
														</div>
														<p>Untuk mencegah ralat ini daripada berlaku dalam atur cara, algoritma 
															mestilah dipastikan mudah difahami pengatur cara, lengkap dan 
															memenuhi kriteria reka bentuk.
														</p>
													</li>
													<li>
														<b>Ralat masa larian</b> - ralat yang timbul apabila atur cara dijalankan. 
														Ralat masa larian termasuklah atur cara yang tidak dapat dimulakan, 
														menjadi sangat perlahan ataupun tidak responsif. Ralat ini boleh 
														dikenal pasti daripada kegagalan output dan paparan amaran dalam 
														atur cara.
														<div class="card-deck mb-30">
															<div class="card">
																<img class="card-img-top" src="../../../vendors/images/Module/123-contoh.png" alt="carta alir">
															</div>
														</div>
														<p>Ralat masa larian boleh dikesan melalui reka bentuk algoritma yang tidak efisien atau salah. Misalnya:
														<ul>
															<li>Struktur kawalan urutan yang tidak betul.</li>
															<li>Pemboleh ubah tidak mengandungi nilai atau objek.</li>
															<li>Pembahagian dengan sifar.</li>
															<li>Struktur kawalan pengulangan yang tidak boleh berhenti kerana logik syarat yang salah.</li>
														</ul>
														</p>
													</li>
												</ol>
											</p>
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

