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

#img-small{
    display: block;
    margin: 0 auto;
    width: 200px;
    height: 200px;
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
                                <li class="breadcrumb-item active" aria-current="page">Module 3.1 Reka Bentuk Interaksi</li>
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
                                <h3>Module 3.1: Reka Bentuk Interaksi</h3>
                            </div>
                            
                            {{-- Section intro --}}
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                <div class="blog-caption">
                                    <h4 class="mb-10">Pendahuluan</h4>
                                    <p>
                                        Reka bentuk interaksi merupakan satu aspek yang penting dan perlu dititikberatkan semasa membangunkan sesuatu produk atau aplikasi kerana <b>reka bentuk yang menarik dan mudah digunakan akan membuatkan pengguna menjadi selesa dan seronok untuk menggunakan produk atau sistem tersebut</b>. <b>Reka bentuk</b> ialah susun atur teks, gambar, butang dan menu dalam sesuatu produk. Manakala <b>interaksi</b> pula ialah tindakan manusia semasa menggunakan produk tersebut.
                                    </p>
                                    <p>
                                        Reka bentuk interaksi membenarkan pengguna untuk berkomunikasi dan berinteraksi dengan produk atau aplikasi. Reka bentuk <b>perlu mengambil kira penerimaan pengguna yang terdiri daripada pelbagai umur dan persekitaran</b>. Reka bentuk dan paparan yang mudah dan menarik akan <b>membuatkan ramai pengguna ingin menggunakannya dalam kehidupan seharian</b>. Sebagai contoh, penggunaan WhatsApp, Facebook, Instagram, Telegram, sistem penempahan tiket kapal terbang dan sebagainya. Paparan dan menu yang disediakan sangat ringkas dan mudah untuk digunakan oleh pelbagai lapisan masyarakat.
                                    </p>
                                    <p>
                                        Bagi menghasilkan reka bentuk interaksi yang baik, terdapat beberapa prinsip yang perlu dipatuhi. Setiap produk atau aplikasi perlu memenuhi kepentingan prinsip ini supaya produk yang dihasilkan dapat memenuhi matlamat kebolehgunaan iaitu pengguna merasa mudah untuk belajar, memberi kesan yang baik apabila menggunakannya dan memberikan satu kepuasan dan pengalaman yang menyeronokkan. Salah satu contoh aplikasi yang mencapai tahap kebolehgunaan ini ialah Instagram di mana pengguna mudah untuk menggunakan menu-menu yang disediakan, membolehkan pengguna berkomunikasi dan mengikuti perkembangan sesuatu isu dan berasa gembira dan puas apabila selesai menggunakannya.
                                    </p>

                                    <img class="card-img-top" src="../../../vendors/images/module3-1/1.jpg" alt="" style="display: block; margin: 0 auto; width: 500px; height: 500px;">
                                    <p style="text-align: center; margin-top: 10px; color: #ff0000">
                                        Rajah: Contoh Reka Bentuk Interaksi
                                    </p>

                                    <p>
                                        Oleh itu, prinsip reka bentuk interaksi sangat penting dan perlu diberi perhatian kerana aplikasi yang dibangunkan sangat kompleks. Lima prinsip reka bentuk yang perlu dititikberatkan ialah:
                                    </p>
                                    <div style="background-color:#e0dcf4; border-radius:10px; margin:20px 0px 20px 0px; padding:20px;">
                                        <p><b>1. Konsistensi <i>(consistency)</i></b></p>
                                        <p>
                                            Sebarang perubahan yang berlaku pada paparan akan menarik perhatian pengguna atau mengganggu pengalaman pengguna. Semua elemen perlu kekal pada kedudukan yang sama supaya pengguna akan berasa selesa semasa menggunakan aplikasi. Jika elemen-elemen tersebut dialihkan tanpa sebab dan tujuan, fokus pengguna akan terganggu. Reka bentuk perlu konsisten dari segi persembahan dan fungsi pada semua antara muka. Sebagai contoh, kedudukan butang Close pada antara muka Microsoft Windows adalah di penjuru kanan atas. Pengguna Microsoft Windows yang baharu menggunakan Apple MacBook pasti berasa kekok kerana kedudukan butang Close pada antara muka MacBook adalah di penjuru kiri atas.
                                        </p>
                                        <img class="card-img-top" src="../../../vendors/images/module3-1/2.jpg" alt="" style="display:block; margin:0 auto; width:800px; height:500px">
                                    </div>
                                    <div style="background-color:#ffe4cc; border-radius:10px; margin:20px 0px 20px 0px; padding:20px;">
                                        <p><b>2. Kebolehan Membuat Pemerhatian <i>(perceivability)</i></b></p>
                                        <p>
                                            Pengguna yang menggunakan aplikasi buat kali pertama akan memerhatikan segala aspek antara muka. Penunjuk atau butang interaksi perlulah mudah dikenal pasti. Jika penunjuk/butang interaksi sukar dikesan, pengguna akan berasa tidak selesa. Pengalaman pengguna yang terbaik adalah apabila pengguna boleh menggunakan aplikasi dengan selesa dan tanpa ragu-ragu. Sebagai contoh, antara muka Facebook telah dikemas kini beberapa kali sejak dilancarkan. Pengguna pasti memerlukan masa untuk mengenal pasti kedudukan butang interaksi yang baharu setiap kali antara muka ini dikemas kini.
                                        </p>
                                    </div>
                                    <div style="background-color:#d8ecf4; border-radius:10px; margin:20px 0px 20px 0px; padding:20px;">
                                        <p><b>3. Boleh Dipelajari <i>(learnability)</i></b></p>
                                        <p>
                                            Secara amnya, reka bentuk interaksi sepatutnya mudah untuk dipelajari, dan mudah untuk diingati. Logiknya, pengguna hanya menggunakan antara muka tersebut sekali, tetapi pada masa yang sama, mereka mempelajarinya dan mengingati apa-apa yang dipelajari untuk selama- lamanya. Contohnya aplikasi WhatsApp. Pengguna hanya perlu menggunakan aplikasi tersebut sekali  untuk belajar cara aplikasi tersebut beroperasi. Pengguna akan mengingati cara untuk menggunakan sesuatu aplikasi dengan hanya sekali menggunakan aplikasi tersebut.
                                        </p>
                                        <img class="card-img-top" src="../../../vendors/images/module3-1/3.jpg" alt=""style="display:block; margin:0 auto; width:300px; height:550px;">
                                    </div>
                                    <div style="background-color:#e8f4d4; border-radius:10px; margin:20px 0px 20px 0px; padding:20px;">
                                        <p><b>4. Kebolehan Untuk Menjangka <i>(predictability)</i></b></p>
                                        <p>
                                            Reka bentuk interaksi yang baik dan berkesan dapat membuatkan pengguna membuat jangkaan perkara yang akan berlaku dalam aliran proses aplikasi tersebut sebelum pengguna menggunakan aplikasi tersebut. Sebagai contoh, pengguna dapat meneka apa yang akan terpapar apabila menekan ikon emosi pada aplikasi WhatsApp.
                                        </p>
                                        <img class="card-img-top" src="../../../vendors/images/module3-1/4.jpg" alt=""style="display:block; margin:0 auto; width:300px; height:550px;">
                                    </div>
                                    <div style="background-color:#ffdcec; border-radius:10px; margin:20px 0px 20px 0px; padding:20px;">
                                        <p><b>5. Maklum balas <i>(feedback)</i></b></p>
                                        <p>
                                            Maklum balas boleh memberikan gambaran sebenar mengenai reka bentuk interaksi dan maklumat mengenai hasil reka bentuk interaksi tersebut. Pereka bentuk menggunakan maklum balas untuk melakukan penambahbaikan pada reka bentuk interaksi yang telah dihasilkan. Sediakan maklum balas sekiranya pengguna memerlukannya. Maklum balas yang diberikan sepatutnya bermakna. Kegagalan untuk memberikan maklum balas yang dikehendaki, boleh menyebabkan proses pengulangan yang tidak sepatutnya terhadap sebarang tindakan, kesalahan dan ralat. Sebagai contoh, apabila pengguna menekan butang public dalam program Facebook, program akan memberikan maklum balas dengan memaparkan beberapa pilihan seperti di bawah. Cuba bayangkan kalau pengguna menekan butang public tetapi program tidak memaparkan apa-apa? Contoh maklum balas yang lain seperti <b>‘loading’</b>. Program menunjukkannya sedang melaksanakan arahan yang diperlukan oleh pengguna.
                                        </p>
                                        <img class="card-img-top" src="../../../vendors/images/module3-1/5.jpg" alt=""style="width:600px; height:350px;">
                                        <img class="card-img-top" src="../../../vendors/images/module3-1/6.jpg" alt=""style="width:300px; height:550px; margin-left:80px;">
                                    </div>
                                    <p>
                                        Kelima-lima prinsip ini bertindak bersama-sama dalam sesebuah sistem. Prinsip reka bentuk telah dipenuhi dengan jayanya apabila pengguna berupaya untuk terus memahami dan menggunakan antara muka dengan mudah, efisien dan selesa serta kandungan aplikasi dapat disampaikan dengan berkesan.
                                    </p>
                                </div>
                            </div>

                            {{-- Section 3.1.1 --}}
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                <div class="blog-caption">
                                    <h4 class="mb-10">
                                        Module 3.1.1: Keperluan Interaksi antara Manusia dengan Komputer
                                    </h4>
                                    <p>
                                        Semasa komputer mula-mula dibangunkan, pakar terlatih sahaja yang berupaya menggunakan komputer. Pada masa itu, komputer bersaiz besar dan mahal. Komputer tersebut hanya boleh diperoleh dalam bidang industri dan penyelidikan. Kini, komputer bersaiz kecil dan mudah didapati serta menjadi peranti penting yang digunakan dalam pelbagai bidang. Majoriti pengguna komputer pada masa kini tidak menerima latihan intensif, tidak seperti 30 tahun yang lalu.
                                    </p>
                                    <p>
                                        Hal ini menunjukkan bahawa interaksi antara manusia dengan komputer semakin mudah berlaku. Interaksi antara manusia dengan komputer merupakan proses, dialog atau kegiatan yang dilakukan oleh manusia untuk berinteraksi dengan komputer. Interaksi antara manusia dengan komputer perlu bersifat jelas, intuitif dan semula jadi supaya sesuai digunakan oleh pengguna daripada pelbagai lapisan masyarakat. Interaksi antara manusia dengan komputer mengambil aspek kehidupan seharian dan menggunakan aspek tersebut dalam perancangan membangunkan perisian serta peranti. Sebagai contoh, ikon folder pada "antara muka" komputer membolehkan pengguna terus memahami bahawa kita boleh menyimpan dokumen digital di dalam folder, sama seperti folder di pejabat yang menjadi tempat kita menyimpan dokumen kertas.
                                    </p>
                                    <p>
                                        Terdapat beberapa sebab interaksi antara manusia dengan komputer diperlukan, iaitu:
                                    </p>
                                    <ol>
                                        <li>
                                            <p><b>Mendapat permintaan dalam pasaran</b></p>
                                            <p>
                                               Pengguna mahu membeli atau menggunakan produk yang mempunyai kebolehgunaan yang tinggi, selamat, berguna, berfungsi dan dalam jangka masa yang panjang, lebih membantu dan menyeronokkan pengguna dalam kehidupan seharian.
                                            </p>
                                        </li>
                                        <li>
                                            <p><b>Meningkatkan produktiviti</b></p>
                                            <p>
                                               Berkeupayaan untuk menghasilkan output dari satu set input yang diberikan lebih cepat dengan menggunakan sumber pekerja, teknologi dan sistem secara optimum dan menukar input kepada output yang berguna.
                                            </p>
                                        </li>
                                        <li>
                                            <p><b>Mengurangkan kos selepas jualan</b></p>
                                            <p>
                                               Jika produk tidak berfungsi dengan sempurna, pengguna akan menghantar produk untuk dibaiki. Hal ini akan meningkatkan kos selepas jualan.
                                            </p>
                                        </li>
                                        <li>
                                            <p><b>Mengurangkan kos pembangunan</b></p>
                                            <p>
                                               Elakkan daripada melaksanakan ciri-ciri yang tidak disukai pengguna dan produk yang tidak cekap. Jika kedua-dua perkara ini dielakkan, kos pembangunan dapat dijimatkan.
                                            </p>
                                        </li>
                                        <li>
                                            <p><b>Mengembangkan aktiviti dan menambahkan pengalaman manusia</b></p>
                                            <p>
                                               Infrastruktur teknologi bagi satu kawasan yang baharu akan dibangunkan untuk memberikan peluang kepada manusia yang ingin mengembangkan aktiviti dan menambahkan pengalaman dalam kehidupan mereka.
                                            </p>
                                        </li>
                                        <li>
                                            <p><b>Pengkomputeran sosial</b></p>
                                            <p>
                                               Arus perkembangan laman sesawang menjana persekitaran interaktif sosial untuk mewujudkan peluang berkomunikasi atau perhubungan sosial antara manusia. Manusia tidak akan berinteraksi dengan mesin atau komputer sahaja, malahan manusia akan berinteraksi dengan manusia yang lain melalui penggunaan komputer.
                                            </p>
                                        </li>
                                    </ol>
                                </div>
                            </div>

                            {{-- Section 3.1.2 --}}
                            <div class="blog-detail card-box overflow-hidden mb-30">
                                <div class="blog-caption">
                                    <h4 class="mb-10">
                                        Module 3.1.2: Menilai Produk Interaktif Berdasarkan Tujuan dan Prinsip Asas Reka Bentuk Interaktif
                                    </h4>
                                    <p>
                                        Setiap produk yang dibangunkan perlu dinilai supaya produk itu dapat memberi kepuasan kepada pengguna. Sebagai pengguna yang bijaksana pula, pengguna haruslah mengetahui bagaimana untuk menilai sesuatu produk interaktif. Banyak kaedah yang boleh digunakan untuk menilai sesuatu produk interaktif seperti kaedah temu bual, pemerhatian, soal selidik, perbincangan ahli kumpulan, refleksi dan sebagainya.
                                    </p>
                                    <p>
                                        Antara produk interaktif yang boleh diambil untuk dinilai ialah Facebook. Sebelum menilai produk ini, pengguna perlu tahu apakah tujuan dan keperluan bagi menggunakan laman Facebook ini. Antara tujuan utama menggunakan laman ini adalah untuk berkomunikasi dengan rakan yang baharu dan rakan yang lama dari seluruh dunia serta berkongsi pelbagai perkara dan isu. Di samping itu, ada juga pengguna yang suka untuk menggunakan laman Facebook bagi mendapatkan populariti, menyebarkan pengaruh positif atau negatif, memberikan tip dan ilmu pengetahuan dan sebagainya yang bergantung kepada niat pengguna itu sendiri.
                                    </p>
                                    <p>
                                        Berdasarkan pada laman Facebook, salah satu kaedah penilaian yang boleh digunakan ialah dengan kaedah soal selidik di mana pengguna boleh menilai kebolehgunaan produk tersebut berdasarkan prinsip asas reka bentuk seperti Jadual dibawah.
                                    </p>
                                    <img class="card-img-top" src="../../../vendors/images/module3-1/7.jpg" alt="" style="display: block; margin: 0 auto; width: 600px; height: 800px;">
                                    <p style="text-align: center; margin-top: 10px; color: #ff0000">
                                        Jadual: Contoh Borang Soal Selidik untuk Menilai Kebolehgunaan Produk
                                    </p>

                                    <p>
                                        Selepas pengguna mengisi borang soal selidik ini, satu analisis perlu dibuat bagi mengkaji prinsip manakah yang paling dipersetujui <b>(ditandakan “YA”)</b> dan prinsip manakah yang kurang berkesan <b>(ditandakan dengan “TIDAK”)</b>. Kemudian, buat penyataan rumusan daripada analisis tersebut.
                                    </p>
                                    <p>
                                        Sebagai seorang penilai yang bagus, penilai seharusnya mengetahui bagaimana ingin membina sebuah instrumen penilaian terutamanya soal selidik. Sebelum membina soal selidik, penilai perlulah mengetahui dahulu mengenai konsep dan bentuk instrumen yang ingin dihasilkan. Untuk menghasilkan satu soal selidik, beberapa perkara perlu diambil kira iaitu cara membina soalan dan membentuk pilihan jawapan.
                                    </p>
                                    <p>
                                        Pilihan jawapan terbahagi kepada dua jenis pilihan iaitu:
                                    </p>
                                    <ol>
                                        <li>
                                            <p>
                                                Bentuk <b>Skala Likert</b> (1932). Bentuk ini digunakan bertujuan untuk melihat sejauh mana persetujuan pengguna terhadap produk yang dibangunkan.
                                            </p>
                                            <p>
                                                Bulatkan pilihan jawapan anda berdasarkan skala yang berikut: <br>
                                                5 = Amat Setuju <br>
                                                4 = Setuju <br>
                                                3 = Tidak Setuju <br>
                                                2 = Sangat Tidak Setuju <br>
                                                1 = Tidak Pasti
                                            </p>
                                            <img class="card-img-top" src="../../../vendors/images/module3-1/8.jpg" alt="" style="display: block; margin: 0 auto; width: 900px; height: 350px;">
                                        </li>
                                        <li>
                                            <p>
                                                Bentuk <b>Skala Guttman</b> (1944). Bentuk soal selidik ini bertujuan untuk mendapatkan data yang jelas, tegas, dan konsisten.
                                            </p>
                                            <img class="card-img-top" src="../../../vendors/images/module3-1/9.jpg" alt="" style="display: block; margin: 0 auto; width: 900px; height: 350px;">
                                        </li>
                                    </ol>
                                    <br>
                                    <p>
                                        Selepas menentukan skala yang ingin digunakan, penilai bolehlah membangunkan soalan di dalam soal selidik itu. Bina sekurang-kurangnya lima soalan untuk satu kriteria yang diukur. Soalan yang dibina haruslah meliputi nilai positif dan negatif sesuatu produk yang dibangunkan bagi mendapatkan data pengguna yang mempunyai pelbagai penerimaan terhadap produk yang dibangunkan.
                                    </p>
                                    <p>
                                        Soal selidik pula mestilah mempunyai ciri-ciri yang baik seperti ruang pilihan jawapan yang jelas dan mudah untuk pengguna menanda, soalan yang sesuai dengan responden dan item yang jelas dan tidak berat sebelah. Selain itu, cuba elakkan soalan yang panjang lebar dan soalan yang boleh menampakkan keburukan produk itu sendiri. Setelah selesai soal selidik, jangan lupa untuk menyatakan soalan telah tamat dan memberikan ucapan terima kasih sebagai penghargaan di atas kesudian responden untuk menjawab soal selidik.
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