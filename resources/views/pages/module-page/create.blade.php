@extends('layouts.master')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Enroll New Module</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Enroll New Module</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                January 2018
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Export List</a>
                                <a class="dropdown-item" href="#">Policies</a>
                                <a class="dropdown-item" href="#">View Assets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <h4 class="text-blue h4">Enroll New Module</h4>
                </div>
                <div class="wizard-content">
                    <form method="POST" action="{{route('modules.store')}}">
                        @csrf
                        <div class="form-group">
                            <label>Please Choose What Module You Want To Add</label>
                            <select class="form-control" name="title">
                                <option value="1.1 Strategi Penyelesaian Masalah">1.1 Strategi Penyelesaian Masalah</option>
                                <option value="1.2 Algoritma">1.2 Algoritma</option>
                                <option value="1.3 Pemboleh Ubah, Pemalar dan Jenis Data">1.3 Pemboleh Ubah, Pemalar dan Jenis Data</option>
                                <option value="1.4 Struktur Kawalan">1.4 Struktur Kawalan</option>
                                <option value="1.5 Amalan Terbaik Pengaturcaraan">1.5 Amalan Terbaik Pengaturcaraan</option>
                                <option value="1.6 Struktur Data dan Modular">1.6 Struktur Data dan Modular</option>
                                <option value="1.7 Pembangunan Aplikasi">1.7 Pembangunan Aplikasi</option>
                                <option value="2.1 Pangkalan Data Hubungan">2.1 Pangkalan Data Hubungan</option>
                                <option value="2.2 Reka Bentuk Pangkalan Data Hubungan">2.2 Reka Bentuk Pangkalan Data Hubungan</option>
                                <option value="2.3 Pembangunan Pangkalan Data Hubungan">2.3 Pembangunan Pangkalan Data Hubungan</option>
                                <option value="2.4 Pembangunan Sistem Pangkalan Data">2.4 Pembangunan Sistem Pangkalan Data</option>
                                <option value="3.1 Reka Bentuk Interaksi">3.1 Reka Bentuk Interaksi</option>
                                <option value="3.2 Paparan dan Reka Bentuk Skrin">3.2 Paparan dan Reka Bentuk Skrin</option>
                            </select>
                            <label>Module Color</label>
                            <!-- <select class="form-control" id="color" name="color">
                                <option value="color1">red</option>
                                <option value="color2">green</option>
                                <option value="color3">blue</option>
                            </select> -->
                            <input type="text" class="form-control" name="color" placeholder="Module Link">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Module</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .editable-dropdown {
        position: relative;
    }

    #moduleList {
        list-style: none;
        padding: 0;
        margin: 0;
        position: absolute;
        z-index: 1;
        background-color: #fff;
        border: 1px solid #ccc;
        width: 100%;
    }

    #moduleList li {
        padding: 5px 10px;
        cursor: pointer;
    }

    #moduleList li:hover {
        background-color: #f0f0f0;
    }
</style>
<script>
    function showDropdown() {
        document.getElementById('moduleList').style.display = 'block';
    }

    function selectModule(module) {
        document.getElementById('moduleTitleInput').value = module;
        document.getElementById('moduleList').style.display = 'none';
    }
</script>
@endsection