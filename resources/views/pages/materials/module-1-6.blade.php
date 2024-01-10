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
.subheader
{
    color: #711DB0; /* Green text */
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
                                <li class="breadcrumb-item active" aria-current="page">Module 1.6 Struktur Data dan Modular</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div>
                <div class="container pd-0">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            
                            <div class="card-box blog-caption mb-20 shadow-box colour-box" style="padding:30px;" align="center">
                                <h3>Module 1.6: Struktur Data dan Modular</h3>
                            </div>

                            <div class="blog-detail card-box overflow-hidden mb-30">

                                <div class="blog-caption" >

                                    <!-- Add your captions -->

                                    <!-- Pengenalan -->
                                    <h4 class="mb-10"> Pengenalan </h4>
                                    <p class="text-formatting">
                                        Atur cara mengandungi kod komputer untuk memproses data kepada maklumat. Data perlu disimpan dalam pemboleh ubah supaya boleh diproses. Arahan kod komputer dan pemboleh ubah disimpan dalam fail kod sumber <i>(source code)</i>. <br><br>
                                        Atur cara yang ringkas mungkin mengandungi beberapa baris arahan dan pemboleh ubah sahaja. Untuk atur cara yang kompleks seperti sistem pinjaman buku sekolah dan sistem-sistem lain pengurusan maklumat, mungkin ratusan ribu baris arahan dan ratusan pemboleh ubah diperlukan. Dapatkah anda bayangkan kesukaran untuk menulis kod komputer untuk sistem yang kompleks? 
                                        Kod komputer seharusnya mudah ditulis, mudah dibaca dan mudah dikemas kini. Bagaimana? <br><br>
                                        Gunakan struktur yang lebih sistematik untuk pemboleh ubah dan arahan. Pemboleh ubah boleh dipecahkan kepada "kumpulan-kumpulan kecil" yang dipanggil <b>tatasusunan</b>. Arahan-arahan komputer juga boleh dipecahkan kepada beberapa "kumpulan kecil" yang dipanggil fungsi. Apabila diperlukan sahaja, kumpulan yang berkait akan dipanggil. 
                                        Sebagai analogi, bayangkan terdapat sebuah buku berjudul "Semua Mata Pelajaran Tingkatan 4" dan hanya seorang guru yang akan mengajarkan semua mata pelajaran tersebut. Dalam buku tersebut, tiada bab-bab berasingan mahupun subtopik. Semuanya ditulis dalam satu perenggan sahaja dari muka surat satu hingga muka surat akhir. Adakah ini satu kaedah yang baik dalam pengajaran dan pembelajaran.
                                    </p>
                                    
                                    <!-- Image -->
                                    <div class="card image-size" align="center">
                                        <img class="card-img-top" src="../../../vendors/images/module1-6/pengenalan.png" alt="Card image cap">
                                    </div>

                                    <!-- Caption -->
                                    <p class="text-center" style="color:#ff0000;"> Rajah: Pecah dan Urus adalah lebih berkesan </p>
                                    
                                    <p class="text-formatting">
                                        Lihat Rajah di atas. Apa kata sekiranya kandungan sebuah buku dibahagikan kepada bab-bab berasingan dan dijilidkan menjadi beberapa buah buku berlainan? Bukankah pengetahuan-pengetahuan dalam buku tebal menjadi lebih mudah diurus dan dibaca? Adakah anda perlu membawa semua buku tersebut sekiranya subjek tersebut tidak diajar pada hari-hari tertentu? <br><br>
                                        Demikian halnya dengan guru-guru yang mengajar pengetahuan tersebut. Guru-guru yang ada pengkhususan dalam subjek-subjek tertentu adalah lebih arif dalam subjek tersebut sahaja. Sekiranya murid ingin bertanyakan permasalahan Matematik, murid boleh mencari guru matematik untuk mendapat penjelasan lanjut. <br><br>
                                        Oemikian halnya dengan atur cara komputer. Buku-buku dalam analogi yang ditunjukkan pada Rajah 1.45 adalah ibarat pemboleh ubah manakala guru-guru yang ada pengkhususan dalam subjek tersebut adalah ibarat arahan-arahan atur cara dalam fail kod sumber.<br><br>
                                    </p>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>

        <!-- Sub Module 1.6.1 -->
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">

                <div class="blog-wrap">
                    <div class="container pd-0">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="blog-detail card-box overflow-hidden mb-30">
                                    
                                    <div class="blog-caption" >

                                        <!-- Pengenalan -->
                                        <h4 class="mb-10"> Module 1.6.1 Struktur Tatasusunan <i>(array)</i> Satu Dimensi</h4>
                                        <p class="text-formatting">
                                            Sistem pengurusan maklumat melibatkan pemprosesan suatu jumlah data yang banyak. Bagi menguruskan data agar lebih tersusun dan senang dicapai, maka diperkenalkan konsep struktur data. Sebaik manapun algoritma, jika data tidak tersusun, capaian dan pemprosesan data menjadi kurang efisien. Malah, penulisan kod komputer menjadi amat sukar. <br><br>
                                            Salah satu struktur data yang penting ialah <b>tatasusunan</b> <i>(array)</i>. Tatasusunan ialah pemboleh ubah yang membolehkan koleksi beberapa nilai data (elemen) dalam satu-satu masa dengan menyimpan setiap elemen dalam ruang memori berindeks. <br><br>
                                            Dalam subtopik ini, anda akan mengkaji pemboleh ubah mudah ataupun biasa semula sebagai sel memori dan perbezaannya dengan tatasusunan. Anda akan melihat kelebihan-kelebihan tatasusunan sebagai senarai data berbanding dengan pemboleh ubah mudah. <br><br>
                                            Pemboleh ubah ialah slot memori yang telah dikhaskan untuk menyimpan data. Kebiasaannya, pemboleh ubah mudah cuma menyimpan satu nilai data dalam satu-satu masa. Lihat ruang memori untuk pemboleh ubah mudah di bawah. 
                                        </p>

                                        <!-- Image -->
                                        <div class="card image-size" style="width:20%;" align="center">
                                            <img class="card-img-top"  src="../../../vendors/images/module1-6/array.png" alt="Card image cap">
                                        </div>

                                        <!-- Caption -->
                                        <p class="text-center" style="color:#ff0000;"> Rajah: Pemboleh ubah mudah menggunakan hanya satu kotak </p>
                                        
                                        <p class="text-formatting">
                                            Dalam kod Java, nilai pemboleh ubah diisytihar seperti sintaks seperti yang berikut: 
                                        </p>

                                        <!-- Coding Displayed -->
                                        <div class="terminal" style="width:50%;">
                                            <p>
                                                &nbsp;jenisData namaPembolehUbah;<br>           
                                            </p>
                                        </div>
                                        
                                        <h6>Contoh 1</h6>

                                        <!-- Coding Displayed -->
                                        <div class="terminal" style="width:50%;">
                                            <p>
                                                &nbsp;int markah;<br>           
                                            </p>
                                        </div>

                                        <p class="text-formatting">
                                            Jika Java perlu menyimpan data bernilai 34, umpukkan sahaja nilai 34 ke dalam pemboleh ubah markah. Kod Javaboleh ditulis seperti yang berikut.
                                        </p>

                                        <h6>Contoh 2</h6>

                                        <!-- Coding Displayed -->
                                        <div class="terminal" style="width:50%;">
                                            <p>
                                                &nbsp;markah = 34;<br>           
                                            </p>
                                        </div>

                                        <p class="text-formatting">
                                            Kedua-dua langkah di atas boleh dibuat sekali gus dalam satu arahan.
                                        </p>

                                        <h6>Contoh 3</h6>
                                        <!-- Coding Displayed -->
                                        <div class="terminal" style="width:50%;">
                                            <p>
                                                &nbsp;int markah = 34;<br>           
                                            </p>
                                        </div>

                                        <p class="text-formatting">
                                            <br>Dalam analogi yang berikut, pemboleh ubah yang telah diisytiharkan diibaratkan sebuah bilik kosong yang boleh diduduki oleh satu penghuni sahaja pada satu-satu masa. Hal ini bermaksud, sekiranya jenis data pemboleh ubah ialah integer, maka nilai yang boleh disimpan ialah integer sahaja. Dalam analogi rumah kosong yang berikut, nama rumah tersebut ialah markah dan rumah ini hanya membenarkan tetamu jenis integer sahaja untuk datang menginap. 
                                        </p>

                                        <h6>Anologi pemboleh ubah mudah:</h6>

                                        <!-- Image -->
                                        <div class="card image-size" style="width:40%;" align="center">
                                            <img class="card-img-top"  src="../../../vendors/images/module1-6/anologi-pemboleh.jpg" alt="Card image cap">
                                        </div>

                                        <!-- Caption -->
                                        <p class="text-center" style="color:#ff0000;"> Rajah: Pemboleh ubah mudah diibaratkan sebagai rumah dengan satu bilik untuk tetamu khusus  </p>
                                        

                                        <p class="text-formatting">
                                            <br>Rajah di atas menunjukkan analogi bagi sebuah rumah yang kosong. Rumah ini dinamakan "Bilik Bujang". Ru mah ini hanya mempunyai satu bilik untuk seorang penghuni sahaja. Penghuni tersebut mestilah khusus, misalnya untuk kakitangan sekolah yang berjawatan guru dan bujang. 
                                            
                                            <br>Sekarang, cuba anda bayangkan rumah tersebut ialah pemboleh ubah mudah yang bernama markah dan hanya membenarkan satu nilai disimpan serta nilai tersebut mestilah berjenis 
                                            int sahaja. 
                                            
                                            <br><br>Bagaimana sekiranya terdapat banyak data jenis integer yang perlu disimpan? Sebagai contoh, data-data jenis integer 34, 56, 78, 89, 56 dan 95 perlu disimpan dalam pemboleh ubah. Kita hanya perlu isytihar lebih banyak pemboleh ubah sahaja, bukan? 
                                        </P>

                                        <h6>Contoh 4</h6>
                                        <br>
                                        <!-- Coding Displayed -->
                                        <div class="terminal" style="width:40%;">
                                            <p>
                                                &nbsp;int markah = 34;<br>   
                                                &nbsp;int markah = 56;<br>    
                                                &nbsp;int markah = 78;<br>    
                                                &nbsp;int markah = 89;<br>    
                                                &nbsp;int markah = 56;<br>
                                                &nbsp;int markah = 95;<br>                
                                            </p>
                                        </div>

                                        <p class="text-formatting">
                                            <br>Bagaimana pula jika terdapat 100 markah yang perlu disimpan? Penggunaan pemboleh ubah nampaknya kurang ekonomik jika bilangan data yang disimpan adalah besar. Cuba fikirkan. Adakah wajar mengisytiharkan 100 pemboleh ubah? 
                                            
                                            <br><br>Contoh-contoh di atas melibatkan penggunaan jenis data mudah. Jenis data mudah menggunakan satu sel ingatan sebagai pemboleh ubah untuk menyimpan suatu data. 
                                        </p>

                                        <h4 class="mb-10">Pengisytiharan Tatasusunan</h4>
                                         <p class="text-formatting">
                                            Dalam kehidupan harian, biasanya data yang sama akan disimpan dalam senarai. Dalam konteks atur cara komputer, senarai data dirujuk sebagai tatasusunan.
                                            <br><br>
                                            
                                            <b>Apakah yang dimaksudkan dengan tatasusunan ?</b>

                                            <br><br><b>Tatasusunan</b> ialah koleksi satu atau lebih data yang dipanggil elemen. Setiap tatasusunan mempunyai jenis data tertentu. Tatasusunan int menyimpan elemen jenis integer sahaja. Demikian juga halnya dengan double, String dan jenis-jenis data yang lain. 
                                            
                                            Dalam kod Java, sintaks pengisytiharan struktur tatasusunan adalah seperti yang berikut:
                                         </p>

                                         <!-- Coding Displayed -->
                                        <div class="terminal" style="width:60%;">
                                            <p>
                                                &nbsp;jenisData [] namaTatasusunan;<br>   
                                                &nbsp;namaTatasusunan = new jenisData [saizTatasusunan];<br>                
                                            </p>
                                        </div>

                                        <p class="text-formatting">
                                            <br>Sintaks yang ditunjukkan di atas terdiri daripada dua baris. Baris pertama mengisytiharkan nama tatasusunan. Baris kedua pula mengisytiharkan saiz tatasusunan. 
                                        </p>

                                        <!-- Mengisytiharkan nama tatasusunan -->
                                        <h5 class="subheader">A. Mengisytiharkan nama tatasusunan:</h5>
                                        <br>
                                        <div class="terminal" style="width:40%;">
                                            <p>
                                                &nbsp;jenisData [] namaTatasusunan;<br>                   
                                            </p>
                                        </div>

                                        <p class="text-formatting">
                                            <br>jenisData merujuk jenis data tatasusunan. Simbol "tanda kurung siku" [ ] , ialah simbol khas untuk menunjukkan bahawa pemboleh ubah ialah jenis tatasusunan dan bukannya pemboleh ubah mudah, misalnya i nt [ ] untuk tatasusunan integer, doubl e [ ] untuk tatasusunan double ataupun String [ ] untuk tatasusunan String. namaTatasusunan ialah nama yang sesuai diberikan oleh pengatur cara. 
                                        </p>
                                        
                                        <h6>Contoh:</h6>

                                        <div class="terminal" style="width:40%;">
                                            <p>
                                                &nbsp;int [] senaraiMarkah;<br>                   
                                            </p>
                                        </div>

                                        <p class="text-formatting">
                                            <br>Dalam contoh ini, jenis tatasusunan int ialah integer. Simbol [ l merujuk jenis pemboleh ubah iaitu tatasusunan. Nama tatasusunan ialah senaraiMarkah.
                                        </p>

                                        <!-- Saiz Tatasusunan -->
                                        <h5 class="subheader">B. Saiz tatasusunan:</h5>
                                        <br><br>

                                        <div class="terminal" style="width:40%;">
                                            <p>
                                                &nbsp;namaTatasusunan [] new jenisData [saizTatasusunan];<br>                   
                                            </p>
                                        </div>
                                        
                                        <p class="text-formatting">
                                            <br>Dalam baris kedua, bilangan elemen dalam tatasusunan diisytiharkan. Kata kunci new digunakan untuk set saiz tatasusunan. lni diikuti oleh jenis data jenisData dan saiz tatasusunan dalam tanda kurung []. 
                                        </p>

                                        <h6>Contoh: </h6>

                                        <div class="terminal" style="width:40%;">
                                            <p>
                                                &nbsp;senaraiMarkah = new int[6];<br>                   
                                            </p>
                                        </div>

                                        <p class="text-formatting">
                                            <br>Dalam contoh ini, pemboleh ubah tatasusunan boleh mengandungi enam elemen pemboleh ubah jenis integer, seperti yang dinyatakan dalam new int [6]. Enam ruang memori yang kosong diperuntukkan untuk menyimpan data jenis integer dan semuanya adalah untuk tatasusunan bernama 
                                            senaraiMarkah.

                                            <br><br>Baris pertama mesti ditulis dahulu sebelum baris kedua. Pengisytiharan tatasusunan bernama senaraiMarkah dibuat seperti susunan yang berikut: 
                                     
                                        </p>

                                        <div class="terminal" style="width:40%;">
                                            <p>
                                                &nbsp;int [] = senaraiMarkah;<br>
                                                &nbsp;senaraiMarkah = new int[6];<br>               
                                            </p>
                                        </div>  

                                        <p class="text-formatting">
                                            <br><br>Lihat ruang memori untuk tatasusunan dalam jadual berikut dan bandingkan dengan ruang memori pemboleh ubah mudah. 
                                        </p>

                                        <!-- Image -->
                                        <div class="card image-size" style="width:40%;" align="center">
                                            <img class="card-img-top"  src="../../../vendors/images/module1-6/array.png" alt="Card image cap">
                                        </div>

                                        <!-- Caption -->
                                        <p class="text-center" style="color:#ff0000;"> Rajah: Ruang memori untuk tatasusunan</p>
                                        
                                        <p class="text-formatting">
                                            <br><br>Perhatikan bahawa tatasusunan ialah koleksi-koleksi sel memori dengan satu nama dan indeks.
                                            lndeks tatasusunan bermula daripada sifar. Jadi, dalam contoh enam elemen, indeks ialah 0, 1, 2,
                                            3, 4 dan 5. Perhatikan bahawa nilai-nilai elemen ialah O dalam setiap sel. Hal ini demikian kerana
                                            tatasusunan ini masih belum diberikan sebarang nilai.
                                        </p>

                                        <!-- Caption -->
                                        <p class="text-center" style="color:#ff0000;"> Jadual: Ruang memori pemboleh ubah mudah berbanding ruang memori tatasusunan</p>

                                        <!-- Image -->
                                        <div class="card image-size" style="width:60%;" align="center">
                                            <img class="card-img-top"  src="../../../vendors/images/module1-6/jadual-array.png" alt="Card image cap">
                                        </div>

                                        <p class="text-formatting">
                                            <br><br>Lihat analogi dalam Rajah 1.50. Bayangkan sebuah bangunan yang panjang dengan nama Asrama Bujang. Terdapat enam bilik untuk seorang guru yang berstatus bujang bagi setiap satunya. Perhatikan bahawa setiap bilik mempunyai nama bilik yang menggunakan indeks. lndeks ialah senarai nombor yang bermula daripada sifar. lndeks memudahkan pemilik bangunan "AsramaBujang" untuk mengesan bilik mana yang kosong dan mengemaskinikan status bilik. Sebagai contoh, nombor-nombor bilik ialah no[O], no[1], no[2], no[3], no[4] dan no[5]. 
                                        </p>

                                        <!-- Image -->
                                        <div class="card image-size" style="width:60%;" align="center">
                                            <img class="card-img-top"  src="../../../vendors/images/module1-6/anologi-tatasusunan.jpg" alt="Card image cap">
                                        </div>

                                         <!-- Caption -->
                                         <p class="text-center" style="color:#ff0000;"> Rajah: Analogi pemboleh ubah jenis tatasusunan ialah sebuah bangunan dengan banyak bilik</p>


                                        <!-- Pengumpukan Tatasusunan -->
                                        <h5 class="subheader">C. Pengumpukan tatasusunan:</h5>
                                        <br><br>
                                        
                                        <p class="text-formatting">
                                            Pengisytiharan tatasusunan menyediakan ruang memori yang masih
                                            kosong. Oleh sebab itu, nilai perlu diberikan melalui proses pengumpukan.
                                            Selepas diisytihar, nilai diumpuk dengan memanggil elemen-elemen
                                            tatasusunan satu-persatu:
                                        </p>

                                        <div class="terminal" style="width:40%;">
                                            <p>
                                                &nbsp;senaraiMarkah[O] = 34;<br>
                                                &nbsp;senaraiMarkah[l] = 56;<br>   
                                                &nbsp;senaraiMarkah[l] = 78;<br>
                                                &nbsp;senaraiMarkah[l] = 89;<br> 
                                                &nbsp;senaraiMarkah[l] = 56;<br> 
                                                &nbsp;senaraiMarkah[l] = 95;<br> 
                                            </p>
                                        </div>  

                                        <p class="text-formatting">
                                            <br><br>Dalam memori komputer, elemen-elemen dalam tatasusunan sentiasa
                                            diletakkan sebelah-menyebelah dalam satu blok memori.
                                        </p>
                                        
                                        <!-- Image -->
                                        <div class="card image-size" style="width:60%;" align="center">
                                            <img class="card-img-top"  src="../../../vendors/images/module1-6/pembahagian-array.png" alt="Card image cap">
                                        </div>

                                        <!-- Caption -->
                                        <p class="text-center" style="color:#ff0000;"> Rajah: Sel memori menunjukkan elemen-elemen dalam tatasusunan</p>

                                        <!-- Pengumpukan Tatasusunan -->
                                        <h5 class="subheader">D. Pengumpukan nilai awal tatasusunan:</h5>
                                        <br><br>
                                        
                                        <p class="text-formatting">
                                            Dalam pengumpukan nilai awal, umpukan dibuat ketika melakukan pengisytiharan. Sebagai contoh: 
                                        </p>
                                        
                                        <!-- Image -->
                                        <div class="card image-size" style="width:60%;" align="center">
                                            <img class="card-img-top"  src="../../../vendors/images/module1-6/mapping.png" alt="Card image cap">
                                        </div>

                                        <p class="text-formatting">
                                            <br><br>Kombinasi jenis data dan tanda kurung int [] adalah untuk mengisytiharkan namasenaraiMarkah sebagai pemboleh ubah tatasusunan integer. Oleh sebab umpukan awal digunakan, saiz tatasusunan tidak perlu dimasukkan dalam tanda kurungan [] pengisytiharan. 
                                            
                                            <br><br>Saiz tatasusunan ditentukan secara automatik oleh pengumpukan nilai-nilai berdasarkan bilangan data dalam tanda kurung dakap "{" dan "}". Semua data yang hendak disimpan ialah satu jenis yang sama.
                                        </p>

                                        <!-- Caption -->
                                        <p class="text-center" style="color:#ff0000;"> Jadual: Lukisan blok memori pemboleh ubah mudah berbanding lukisan blok memori tatasusunan</p>

                                        <!-- Image -->
                                        <div class="card image-size" style="width:60%;" align="center">
                                            <img class="card-img-top"  src="../../../vendors/images/module1-6/jadual-array1.png" alt="Card image cap">
                                        </div>

                                        <!-- Perbezaan Struktur Memori -->
                                        <h5 class="subheader">E. Perbezaan Struktur Memori antara Pemboleh
                                            Ubah Mudah dengan Memori Tatasusunan:
                                        </h5>
                                        <br><br>

                                        <p class="text-formatting">
                                            Katakan seorang guru ingin merekodkan markah bagi subjek Teknologi Maklumat (fM) yang diajarinya. Dalam segmen atur cara di bawah menunjukkan contoh perbezaan pengisytiharan pemboleh ubah mudah dengan pengisytiharan tatasusunan: 
                                        </p>

                                        <div class="terminal" style="width:50%;">
                                            <p>
                                                &nbsp;public static void main(String [] args)<br>
                                                &nbsp;{<br>
                                                &nbsp;&nbsp; int [] markah = {56,78,34}; // tatasusunan <br>   
                                                &nbsp;}<br>
                                            </p>
                                        </div>  

                                        <p class="text-formatting">
                                            <br><br>Dalam memori komputer, maklumat ini disimpan seperti yang berikut: 
                                        </p>

                                         <!-- Image -->
                                         <div class="card image-size" style="width:60%;" align="center">
                                            <img class="card-img-top"  src="../../../vendors/images/module1-6/array-1.png" alt="Card image cap">
                                        </div>
                                        
                                        <p class="text-formatting">
                                            Semua data markah disimpan dalam satu nama pemboleh ubah sahaja, iaitu pemboleh ubah markah. Jika berlaku penambahan data markah, guru hanya perlu menambah nilai data tanpa mengisytiharkan nama pemboleh ubah yang baharu. Data disimpan berjujukan di dalam ruang memori. 
                                            Hal ini berbeza dengan pengisytiharan tanpa menggunakan tatasusunan. Setiap data akan disimpan dalam pemboleh ubah yang berbeza dan ditempatkan di dalam ruang memori pada lokasi yang berbeza seperti yang ditunjukan dalam rajah di bawah:
                                        </p>

                                        <div class="terminal" style="width:50%;">
                                            <p>
                                                &nbsp;public static void main(String [] args)<br>
                                                &nbsp;{<br>
                                                &nbsp;&nbsp; int markah1 = 56, markah2 = 78, markah3 = 34 <br>   
                                                &nbsp;}<br>
                                            </p>
                                        </div>  

                                        <p class="text-formatting">
                                            <br><br>Di dalam memori komputer, maklumat ini disimpan seperti yang berikut:
                                        </p>

                                        <!-- Image -->
                                        <div class="card image-size" style="width:60%;" align="center">
                                            <img class="card-img-top"  src="../../../vendors/images/module1-6/array-2.png" alt="Card image cap">
                                        </div>

                                        <p class="text-formatting">
                                            Data disimpan dalam alamat yang berbeza di dalam memori. Apakah yang berlaku jika guru ingin menambahkan data markah? Adakah guru perlu mengisytiharkan pemboleh ubah tambahan yang berbeza bagi memegang nilai-nilai markah tersebut? Bayangkan jika data yang hendak ditambah itu banyak dan data akan disimpan secara rawak di mana-mana lokasi dan tidak tersusun. Hal ini akan menyebabkan proses mencapai data dari memori untuk diproses bagi menghasilkan maklumat akan menjadi lambat kerana data ditempatkan pada ruang alamat yang berbeza di dalam ingatan. 
                                        </p>



                                        


                                    </div> 
                                </div>
                            </div>                         
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- Add section -->


        <div class="footer-wrap pd-20 mb-20 card-box">
            Crunchy Code Web Application System developed by Elysium
        </div>
    </div>
</div>

@endsection