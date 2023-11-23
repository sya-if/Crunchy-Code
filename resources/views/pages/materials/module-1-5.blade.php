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

.header-cell {
        color: blue; /* Set the color to blue or any other color you prefer */
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
                                <li class="breadcrumb-item" aria-current="{{route('module')}}">Module</li>
                                <li class="breadcrumb-item active" aria-current="page">Module 1.5 Amalan Terbaik Pengaturcaraan</li>
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
                                <h3>Module 1.5: Amalan Terbaik Pengaturcaraan</h3>
                            </div>

                            <div class="blog-detail card-box overflow-hidden mb-30">

                                <div class="blog-caption" >

                                    <!-- Heading -->
                                    <h4 class="mb-10"> Module 1.5 Pengenalan </h4>
                                    <p>
                                    Amalan terbaik pengaturcaraan ialah apabila pengatur car dapat mempraktikkan amalan-amalan yang biasa diikuti untuk menghasilkan atur cara yang baik. Rajah di bawah menunjukkan perbezaan yang boleh dilihat antara kod aturcara yang dibangunkan menggunakan amalan terbaik pengaturcaraan dan kod aturcara yang dibangunkan dengan tidak menerapkan amalan terbaik pengaturcaraan.
                                    </p>

                                    <div class="card-deck mb-30">

                                    <!-- Coding 1 Container -->
                                    <div class="card">

                                    <!-- Coding Displayed -->
                                    <div class="terminal">
                                                <p>
                                                public class Tol ak_Dua_Nombor {<br>
                                                    { <br>
                                                        &nbsp;public static void main(String| ] args) { <br>
                                                        &nbsp;{ <br>
                                                        &nbsp;&nbsp;int nombor 1 = 20;<br>
                                                        &nbsp;&nbsp;int nombor 2 = 13;<br><br>
                                                        &nbsp;&nbsp;//Pengisytiharan output double hasil;<br>
                                                        &nbsp;&nbsp;<b>hasil = nombor 1</b><br><br>
                                                        &nbsp;&nbsp;nombor2;<br>
                                                        &nbsp;&nbsp;<b>System. out. println(" Hasil tolak ialah” + hasil )</b><br>
                                                        &nbsp;} <br>
                                                    } <br>
                                                </p>
                                    </div>
                                </div>

                                <!-- Button container -->
                                <div class="card">
                                <br>
                                            <p>
                                                Anda boleh menekan butang di bawah untuk melihat output yang akan dihasilkan sekiranya kita menjalankan kod tersebut di sebarang IDE.    
                                            </p>

                                            <div class="card-body">

                                                <div class="col-lg-6 col-sm-12 mb-30">
                                                    <div class="pd-20 card-box height-100-p text-center">

                                                        <a href="#" class="button-85 btn-block" data-toggle="modal" data-target="#small-modal" type="button">
                                                            Run
                                                        </a>

                                                        <div class="modal fade" id="small-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-sm modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myLargeModalLabel">Output</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p> Hasil Tolak ialah 20 </p>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                     </div>
                                                </div>
                                             </div>
                                 </div>
                              </div>

                              <div class="row">
    <div class="col-md-4 col-sm-12">
        <!-- Dropdown Menu Faktor keboleh bacaan kod -->
        <div class="pd-20 card-box">
            <h5 class="h4 text-blue mb-20">Faktor keboleh bacaan kod </h5>
            <div class="tab">
                <div class="row clearfix">
                    <div class="col-md-12 col-sm-12">
                        <ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">
                            <!-- Proses 1-->
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home4" role="tab" aria-selected="true">1.Inden yang konsisten</a>
                            </li>
                            <!-- Proses 2-->
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile4" role="tab" aria-selected="false">2. Jenis data</a>
                            </li>
                            <!-- Proses 3-->
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#contact4" role="tab" aria-selected="false">3.Pemboleh ubah yang bermakna</a>
                            </li>
                            <!-- Proses 4-->
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#contact4" role="tab" aria-selected="false">4.Komen</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-sm-12">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="home4" role="tabpanel">
                <div class="pd-20">
                    <ul>
                        Penggunaan inden yang konsisten membuatkan kod aturcara mudah dibaca dan difahami oleh pengguna lain. Cara menulis inden yang konsisten perlu dilakukan dari awal kod aturcara hingga ke akhir kod.
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade" id="profile4" role="tabpanel">
                <div class="pd-20">
                    Pilih jenis data yang bersesuaian supaya saiz pemboleh ubah tidak terlampau kecil atau besar dan memulihara sumber (conserve resources).
                </div>
            </div>
            <div class="tab-pane fade" id="contact4" role="tabpanel">
                <div class="pd-20">
                    Skop biarlah kecil untuk mengelakkan kekeliran dan mudah diselenggara iaitu:
                </div>
                <ul>
                    <li>Tidak bermula dengan nombor. </li>
                    <li>Tiada ruang kosong antara perkataan. Jika terdapat lebih daripada satu perkataan, gunakan underscore ( _ ) atau rapatkan perkataan tersebut menjadi satu perkataan.  </li>
                    <li>Tidak sama dengan kata kekunci dalam Java. Contohnya, penggunaan integer atau double sebagai pembolehubah. </li>
                    <li>Penggunaan huruf kecil dengan huruf besar seperti kata laluan, pemboleh ubah bersifat sensitif kes/huruf. </li>
                    <li>Nama yang bermakna dan mudah difahami. Penggunaan perkataan singkatan yang tidak jelas maksudnya atau penggunaan huruf seperti × dan y tidak digalakkan. </li>
                    <li>Tidak boleh terdiri daripada rang kosong dan perkataaan rizab/khas seperti print* dan value'.  </li>
                </ul>
            </div>
            <div class="tab-pane fade" id="contact4" role="tabpanel">
                <div class="pd-20">
                    Komen perlu ditulis dengan jelas dalam dua hingga tiga baris pendek untuk menerangkan fungsi kod dan memenuhi rang lajur pengekodan.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Module 1.5.1 -->
<div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">

                <div class="blog-wrap" style="padding-bottom:0px !important">
                    <div class="container pd-0">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="blog-detail card-box overflow-hidden mb-30">
                                    
                                    <div class="blog-caption" >
                                         <!-- Pengenalan -->
                                         <h4 class="mb-10"> Module 1.5.1 Jenis Ralat dalam aturcara </h4>
                                        <p class="text-formatting">
                                        Ralat mungkin ditemui apabila and menjalankan atur cara bagi projek pertama anda. Ralat yang sering berlaku semasa proses pengaturcaraan terbahagi kepada tiga jenis iaitu sintaks, masa larian dan logik.
                                        <ul>
                                            <li>Sintaks </li>
                                            <li>Logik </li>
                                            <li>Masa </li>
                                        </ul>
                                        </p>

                                        <div class= card>
                                        <h5 class="mb-10"> Ralat Sintaks </h5>   
                                        <ul>
                                            <li> Kesalahan tatabahasa seperti salah ejaan dan tatatanda</li>
                                            <li>Penggunaan objek atau aksara yang tidak dikenali. </li>
                                            <B>Contoh 1</B>
                                        </ul>
                                        
                                        <div class="blog-detail card-box overflow-hidden mb-30">

                                        <div class="blog-caption" >
                                            <div class="card image-size" align="center">
                                                <img class="card-img-top" src="../../../vendors/images/Module/errorcontoh1.png" alt="Card image cap">
                                                <img class="card-img-top" src="../../../vendors/images/Module/errorcontoh2.png" alt="Card image cap">
                                            </div>
                                        </div>
                                        </div>

                                        <B>Contoh 2</B>
                                        Semasa pengisytiharan pembolehubah atau pemalar dilakukan, jenis data juga perlu diisytiharkan bersama-
                                        sama nama pemboleh ubah tersebut. Cuba anda perhatikan atur cara di
                                        bawah. Pemboleh ubah “Tinggi” tidak dinyatakan bersama jenis datanya.
                                        Sepatutnya pemboleh ubah tinggi diisytiharkan sebagai
                                        “int Tinggi;”.

                                        <div class="blog-caption" >
                                            <div class="card image-size" align="center">
                                                <img class="card-img-top" src="../../../vendors/images/Module/errorcontoh3.png" alt="Card image cap">
                                                <img class="card-img-top" src="../../../vendors/images/Module/errorcontoh4.png" alt="Card image cap">
                                            </div>
                                        </div>
                                        
                                        
                                        <!--Ralat Masa larian-->
                                        <div class= card>
                                        <h5 class="mb-10"> Ralat Masa Larian</h5>   
                                        Ralat yang ditemui ketika atur cara yang sedang
                                        berjalan terganggu akibat beberapa faktor. Ralat ini berlaku sekiranya
                                        pengatur cara cuba untuk melaksanakan operasi aritmetik yang mustahil.
                                        Contohnya seperti yang berikut:
                                        <ul>
                                            <li>Pengiraan data bukan berangka (non-numerical)</li>
                                            <li>Pembahagian dengan digit 0 </li>
                                            <li>Mencari punca kuasa dua bagi nombor negatif </li>

                                            <B>Contoh 1</B>
                                            <B><br>Pengiraan data bukan berangka (non-numerical)</B>

                                            <br><p>Ah Chong sedang menulis atur cara untuk mengira luas sebuah segitiga.
                                            Semasa membuat pengisytiharan pemboleh ubah, dia secara tidak sengaja
                                            telah mengumpulkan pembolehubah "Tinggi" dengan char x. Semasa
                                            atur cara dijalankan, pengkompil telah mengeluarkan ralat masa larian.
                                            Ah Chong memeriksa atur caranya dan mendapati pembolehubah “Tinggi”
                                            telah diumpukkan dengan “x” dan bukannya nombor.</p>



                                        </ul>
                    
                                        <div class="blog-detail card-box overflow-hidden mb-30">

                                        <div class="blog-caption" >
                                            <div class="card image-size" align="center">
                                                <img class="card-img-top" src="../../../vendors/images/Module/error5contoh.png" alt="Card image cap">
                                                <br>
                                                <img class="card-img-top" src="../../../vendors/images/Module/error6contoh.png" alt="Card image cap">
                                            </div>
                                        </div>
                                        </div>

                                        <B>Contoh 2
                                        <br>kod aturcara bukan bebas ralat untuk mengira purata tiga nombor.</B>


                                        <div class="blog-caption" >
                                            <div class="card image-size" align="center">
                                                <img class="card-img-top" src="../../../vendors/images/Module/errorcontoh5.png" alt="Card image cap">
                                                <img class="card-img-top" src="../../../vendors/images/Module/errorcontoh6.png" alt="Card image cap">
                                            </div>

                                            Pembahagian tiga nombor tersebut adalah dengan
                                            digit 0, iaitu merupakan salah satu faktor kepada berlakunya ralat masa larian
                                        </div>

                                        
                                        <B>Contoh 3
                                        <br>mencari punca kuasa dua untuk nombor negatif.nombor negatif tidak mempunyai punca kuasa.</B>


                                        <div class="blog-caption" >
                                            <div class="card image-size" align="center">
                                                <img class="card-img-top" src="../../../vendors/images/Module/errorcontoh7.png" alt="Card image cap">
                                            </div>
                                        </div>
                                </div>

                                        <!--Ralat Logik-->
                                        <div class= card>
                                        <h5 class="mb-10"> Ralat Logik</h5>   
                                        Atur cara tidak berfungsi seperti yang diingini.
                                        Ralat logik tidak dapat dikesan atau jarang dikesan oleh pengkompil.
                                        Pengatur cara sahaja yang boleh mengesan ralat logik melalui output
                                        yang dihasilkan.

                                            <B>Contoh 1</B>
                                            <B><br>Formula Matematik yang salah digunakan</B>

                                            <div class="blog-caption" >
                                            <div class="card image-size" align="center">
                                                <img class="card-img-top" src="../../../vendors/images/Module/errorcontoh8.png" alt="Card image cap">
                                                <br><p>Output</p>
                                                <img class="card-img-top" src="../../../vendors/images/Module/errorcontoh9.png" alt="Card image cap">
                                            </div>
                                        </div>
                                     </div>

                                     <!-- Module 1.5.2 -->
                                    <div class="pd-ltr-20 xs-pd-20-10">
                                                <div class="min-height-200px">

                                                    <div class="blog-wrap" style="padding-bottom:0px !important">
                                                        <div class="container pd-0">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <div class="blog-detail card-box overflow-hidden mb-30">
                                                                        
                                                                        <div class="blog-caption" >
                                                                            <!-- Pengenalan -->
                                                                            <h4 class="mb-10"> Module 1.5.2   Pengesanan,Pengenalpastian dan Penterjemahan Mesej Ralat serta Pembaikan Ralat</h4>
                                                                            <p class="text-formatting">
                                                                            Setelah memahami perbezaan yang diterangkan bagi ketiga-tiga ralat
                                                                            atur cara dalam pengaturcaraan, anda akan boleh mengesan, mengenal
                                                                            pasti dan menterjemahkan mesej ralat serta membaiki ralat. Rajah 1.43(a)
                                                                            menunjukkan atur cara mengira luas bulatan bukan bebas ralat. Mari kita
                                                                            kesan ralat yang berlaku dan buat pembaikan!
                                                                            </p>

                                                                            <div class= card>
                                                
                                                                                <div class="blog-detail card-box overflow-hidden mb-30">

                                                                                <div class="blog-caption" >
                                                                                    
                                                                                        <img class="card-img-top" src="../../../vendors/images/Module/errorcontoh10.png" alt="Card image cap">
                                                                                        Output
                                                                                        <img class="card-img-top" src="../../../vendors/images/Module/errorcontoh11.png" alt="Card image cap">
                                                                                    
                                                                                </div>
                                                                                </div>

                                                                                Apabila aturcara pada Rajah pertama dijalankan, kotak dialog ralat pada Rajah kedua dipaparkan.
                                                                                 <ul>
                                                                                    <li> Semak semula atur cara pada bahagian pengisytiharan.</li>
                                                                                    <li>Pastikan semua tatatanda ditaip dengan lengkap.</li>
                                                                                    <li>Pastikan nama pemboleh ubah yang diisytiharkan adalah sama
                                                                                        dengan nama pemboleh ubah yang akan dipanggil balik dalam
                                                                                        atur cara. Yang dimaksudkan adalah sama dari segi ejaan dan
                                                                                        penggunaan huruf kecil dan huruf besar. (INGAT! Dalam pengaturcaraan
                                                                                        Java, penggunaan huruf kecil dan huruf besar adalah kes sensitif.)

                                                                                    </li>
                                                                                

                                                                                <!-- Inserted Table -->
                                                                                <br><br><table class="table" border=2px>
                                                                                    <thead>
                                                                                        <tr>
                                                                                        <th class="header-cell">Jenis Ralat</th>
                                                                                        <th class="header-cell">Pembaikan Ralat</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td>1 Ralat Sintaks

                                                                                                <br>int jejari = 5

                                                                                                <br>double luasBulatan;
                                                                                                <br>System.out.println("Luas bulatan ialah "  + luasbulatan );
                                                                                            </td>
                                                                                                <td>
                                                                                                <p>int jejari = 5;<br>System.out.println("Luas bulatan ialah "+ luasBulatan );</p>
                                                                                            </td>
                                                                                        </tr>

                                                                                        <td>
                                                                                                <p>Penerangan</p>
                                                                                        </td>
                                                </tr>
                                                                                        <tr>
                                                                                            <td>
                                                                                            <br>•Setiap baris atur cara yang lengkap akan diakhiri dengan simbol “;”.Pengisytiharan pemboleh ubah int jejari = 5 tidak diakhiri dengan simbol “;”.
                                                                                            <br><br>• Luas bulatan diisytihar sebagai double luasBulatan; iaitu ejaan Bulatan berhuruf besar, tetapi di dalam baris atur cara output, System.out.println("Luas bulatan ialah " +luasbulatan), Bulatan dieja menggunakan huruf kecil.</td>
                                                </tr>


                                                                                       
                                                                                  </tbody>
                                                                                </table>
                                                                                <ul>
                                                                                    <li> Setelah ralat dikenal pasti, ralat sintaks boleh dibaiki.</li>
                                                                                    <li>Setelah mengesan dan membaiki ralat sintaks, atur cara dapat dijalankan tetapi jawapan pada paparan output tidak tepat.</li>
                                                                                 </ul>   

                                                                                 <div class="blog-caption" >
                                                                                    <div class="card image-size" align="center">
                                                                                        <img class="card-img-top" src="../../../vendors/images/Module/errorcontoh12.png" alt="Card image cap">
                                                                                    </div>

                                                                                    Jawapan tepat bagi luas bulatan dalam Rajah di atas ialah 78.55 tetapi sistem memberikan jawapan 15.709 (Rajah di atas). Apakah yang berlaku?

                                                                                </div>
                                                                                <ol>
                                                                                    <li>Semak semula atur cara pada bahagian penggunaan formula.</li>
                                                                                    <li>Daripada Rajah di atas, kita dapat mengesan kesalahan dalam formula mengira luas bulatan.</li>
                                                                                 

                                                                                 <div class="blog-caption" >
                                                                                    <div class="card image-size" align="center">
                                                                                        <img class="card-img-top" src="../../../vendors/images/Module/errorcontoh13.png" alt="Card image cap">
                                                                                    </div>
                                                                                </div>

                                                                                    <li> Ralat logik sukar dikesan pada peringkat awal. Ralat ini selalunya dapat dikesan apabila paparan hasil yang dikehendaki tidak menepati apa yang diingini</li>
                                                                                    <li>Setelah ralat dikenal pasti, ralat logik boleh dibaiki.</li>

                                                                                    <div class="card image-size" align="center">
                                                                                        <img class="card-img-top" src="../../../vendors/images/Module/error1.png" alt="Card image cap">
                                                                                    </div>

                                                                                </ol>
                                                </div>

                                                 <!-- Module 1.5.3 -->
                                                <div class="pd-ltr-20 xs-pd-20-10">
                                                <div class="min-height-200px">

                                                    <div class="blog-wrap" style="padding-bottom:0px !important">
                                                        <div class="container pd-0">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <div class="blog-detail card-box overflow-hidden mb-30">
                                                                        
                                                                        <div class="blog-caption" >
                                                                            <!-- Pengenalan -->
                                                                            <h4 class="mb-10"> Module 1.5.2   Mengenal Pasti Nilai bagi Pemboleh Ubah pada Bahagian Tertentu Atur Cara</h4>
                                                                            <p class="text-formatting">
                                                                            Pemboleh ubah digunakan untuk menyimpan data input dan data output.
                                                                            Dalam pengaturcaraan, pemboleh ubah digunakan sebagai pemudah
                                                                            cara bagi komputer untuk menerima, menghantar, memproses dan
                                                                            menyebabkan operasi terhadap sesuatu input.

                                                                            Sekiranya pengguna memasukkan nilai pemboleh ubah yang diingini,
                                                                            pemproses akan memproses nilai data input itu dan mengeluarkan
                                                                            suatu nilai baharu iaitu output. Untuk mengira luas bulatan, murid boleh
                                                                            memasukkan sebarang nilai sebagai pemboleh ubah input ke dalam
                                                                            formula πj2. Sekiranya murid memasukkan nilai input 5 sebagai nilai jejari,
                                                                            pemproses akan melaksanakan pengiraan iaitu πj2 atau 3.142 * 5 * 5 dan
                                                                            output yang terhasil ialah 78.55. Oleh itu, nilai bagi pemboleh ubah input
                                                                            ialah 5 dan nilai bagi pemboleh ubah output ialah 78.55.

                                                                            </p>

                                                                            <div class="blog-detail card-box overflow-hidden mb-30">

                                <div class="blog-caption" >

                                    <!-- Heading -->
                                    <h4 class="mb-10"> Module 1.5.2 Pengenalan </h4>
                                    <p>
                                    Amalan terbaik pengaturcaraan ialah apabila pengatur car dapat mempraktikkan amalan-amalan yang biasa diikuti untuk menghasilkan atur cara yang baik. Rajah di bawah menunjukkan perbezaan yang boleh dilihat antara kod aturcara yang dibangunkan menggunakan amalan terbaik pengaturcaraan dan kod aturcara yang dibangunkan dengan tidak menerapkan amalan terbaik pengaturcaraan.
                                    </p>

                                    <div class="card-deck mb-30">

                                    <!-- Coding 1 Container -->
                                    <div class="card">

                                    <!-- Coding Displayed -->
                                    <div class="terminal">
                                                <p>
                                                        &nbsp;public class LuasBulatan { <br>
                                                        &nbsp;public static void main(String[]args){ <br>
                                                        &nbsp;&nbsp;int jejari = 5;<br>
                                                        &nbsp;&nbsp;double luasBulatan;<br><br>
                                                        &nbsp;&nbsp;final double pi= 3.142;<br>
                                                        &nbsp;&nbsp;<b>luasBulatan = pi * jejari * jejari;</b><br><br>
                                                        &nbsp;&nbsp;System.out.println("Luas bulatan ialah " + luasBulatan);}<br>
                                                        &nbsp;&nbsp;}<br>
                                                        &nbsp;} <br>
                                                    } <br>
                                                </p>
                                    </div>
                                </div>

                                <div class="pd-20 card-box height-100-p text-center">
                                                        <a href="#" class="button-85 btn-block" data-toggle="modal" data-target="#small-modal" type="button">
                                                            Run
                                                        </a>

                                                        <div class="modal fade" id="small-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabels" aria-hidden="true">
                                                            <div class="modal-dialog modal-sm modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myLargeModalLabels">Output</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Luas bulatan ialah 78.55</p>
                                                                      
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <table class="table" border=2px>
                                            <thead>
                                                 <tr>
                                                    <th class="header-cell"><B>Pemboleh ubah</B></th>
                                                    <th class="header-cell"><B>Input</B></th>
                                                    <th class="header-cell"><B>Ouput</B></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th>Item pemboleh ubah</th>
                                                    <th>jejari</th>
                                                    <th>luas</th>
                                                </tr>

                                                <tr>
                                                    <th>Nilai (Data pemboleh ubah)</th>
                                                    <th>5</th>
                                                    <th>78.55</th>
                                                </tr>
                                            </tbody>
                                        </table>

                                 <br><br><B>Contoh 2 </B>
                                    
                                 <!-- Coding Displayed -->
                                 <div class="terminal">
                                                <p>
                                                import java.text.DecimalFormat;<br>
                                                    { <br>
                                                        &nbsp;public class HargaTiket {<br>
                                                        &nbsp;{ <br>
                                                        &nbsp;&nbsp;public static void main(String[] args) {<br>
                                                        &nbsp;&nbsp;int bilangan_tiket = 3;<br>
                                                        &nbsp;&nbsp;double harga_tiket = 45.00;<br>
                                                        &nbsp;&nbsp;double jumlah_harga;<br><br>
                                                        &nbsp;&nbsp;DecimalFormat df = new DecimalFormat("#.00");<br>
                                                        &nbsp;&nbsp;<b>System.out.println("\n" + "Harga tiket untuk " +"seorang penumpang = " + "RM" + df.format(harga_tiket));}</b><br>
                                                        &nbsp;} <br>
                                                    } <br>
                                                </p>
                                    </div>
                                </div>

                                <p> Penyelesaian </p>
                                <!--table penyelesaian-->

                                <table class="table" border=2px>
                                            <thead>
                                                 <tr>
                                                    <th class="header-cell"><B>Pemboleh ubah</B></th>
                                                    <th class="header-cell"><B>Input</B></th>
                                                    <th class="header-cell"><B>Ouput</B></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th>Item pemboleh ubah</th>
                                                    <th><li>bilangan_tiket</li>
                                                        <li>harga_tiket </li>
                                                    </th>
                                                    <th>Jumlah_harga</th>
                                                </tr>

                                                <tr>
                                                    <th>Nilai (Data pemboleh ubah)</th>
                                                    <th><li>3</li>
                                                        <li>45.00 </li>
                                                    </th>
                                                    <th>135.00</th>
                                                </tr>
                                            </tbody>
                                        </table>


    <!-- Module 1.5.4 -->
    <div class="pd-ltr-20 xs-pd-20-10">
                <div class="min-height-200px">

                    <div class="blog-wrap" style="padding-bottom:0px !important">
                        <div class="container pd-0">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="blog-detail card-box overflow-hidden mb-30">
                                        
                                        <div class="blog-caption" >
                                            <!-- Pengenalan -->
                                            <h4 class="mb-10"> Module 1.5.4 Penghasilan Atur Cara yang Mudah Dibaca dengan Menggunakan Gaya yang Baik (Komen,Nama Pemboleh Ubah yang Bermakna dan Inden)</h4>
                                            <p class="text-formatting">
                                            Untuk menghasilkan atur cara yang baik dan mudah difahami, pengaturcara perlu menggunakan gaya yang baik seperti yang berikut:

                                            <ul>
                                                <li>Meletakkan komen pada setiap fungsi yang dibuat. </li>
                                                <li>Menggunakan nama pemboleh ubah yang bermakna. </li>
                                                <li>Menggunakan inden yang selesa untuk dibaca. </li>
                                            </ul>
                                            </p>

                                            <div class= card>
                                            <h5 class="mb-10"> Komen </h5>   
                                           
                                            <p>Komen merujuk penanda yang dibuat oleh pengatur cara untuk setiap
                                            atur cara yang dibina. Setiap bahasa pengaturcaraan mempunyai kod
                                            yang khusus untuk komen. Dalam pengaturcaraan Java, kod komen perlu
                                            menggunakan sintaks yang telah ditetapkan. Sekiranya sintaks tersebut
                                            tidak dimasukkan pada baris komen dalam atur cara tersebut, sistem
                                            akan mengeluarkan ralat sintaks/kompil. </p>


                                            <!--table jenis komen-->
                                            <table class="table" border=2px>
                                            <thead>
                                                 <tr>
                                                    <th class="header-cell"><B>Jenis Komen</B></th>
                                                    <th class="header-cell"><B>Huraian</B></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th> // Pengisytiharan pemboleh ubah</th>
                                                    <th>Pengkompil mengabaikan semua teks bermula dengan tatatanda // hingga ke teks terakhir dalam baris yang sama.</th>
                                                </tr>

                                                <tr>
                                                    <th> /* Pengisytiharan pemboleh ubah*/</th>
                                                    <th>Pengkompil mengabaikan semua teks yang berada dalam /* hingga ke /* walaupun dalam baris yang berlainan.</th>
                                                </tr>

                                                <tr>
                                                    <th> /** Pengisytiharan pemboleh ubah*/</th>
                                                    <th> Komen ini ialah komen dokumentasi. Pengkompil mengabaikan komen jenis ini sama seperti komen yang menggunakan /* dan */.
</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        <br><br><B>Contoh 1 </B>
                                        <p> Penggunaan tatatanda “//” , “/* */” dan “/** */ sebagai sintaks komen. Penyataan yang berwarna hijau merujuk komen.</p>
                                        
                                    
                                             <img class="card-img-top" src="../../../vendors/images/Module/error3.png" alt="Card image cap">
                                       

                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Module 1.5.5 -->
    <div class="pd-ltr-20 xs-pd-20-10">
                <div class="min-height-200px">

                    <div class="blog-wrap" style="padding-bottom:0px !important">
                        <div class="container pd-0">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="blog-detail card-box overflow-hidden mb-30">
                                        
                                        <div class="blog-caption" >
                                            <!-- Pengenalan -->
                                            <h4 class="mb-10"> Pemboleh Ubah yang Bermakna</h4>
                                            <p class="text-formatting">
                                            Semasa menulis atur cara, pengatur cara perlu memikirkan nama pemboleh ubah yang mempunyai ejaan yang ringkas dan bermakna dalam atur cara yang sedang dilaksanakan.
                                    
                                            </p>

                                            <div class= card>
                                            <h5 class="mb-10"> Inden </h5>   
                                           
                                            <p> Inden merujuk cara penulisan atur cara yang memudahkan pembacaan.Pembacaan atur cara akan dimulakan dengan inden iaitu barisan teks berada di beberapa kedudukan aksara ke dalam, dari jidar kiri atau kanan halaman. </p>

                                            <B>Contoh 1</B>
                                            <p>Untuk menghitung luas segi tiga, formula yang digunakan ialah “1/2 * p *q”. Sekiranya pengatur cara hanya mengisytiharkan pemboleh ubah yang perlu digunakan sebagai p dan q sahaja, nama pemboleh ubah tersebut tidak bermakna. Tetapi sekiranya pengatur cara menggunakan nama pemboleh ubah tapak dan tinggi, maka pengatur cara lain senang untuk memahaminya.</p>
                                            <img class="card-img-top" src="../../../vendors/images/Module/error4.png" alt="Card image cap">



                                 
                                        


                                        

                                               
