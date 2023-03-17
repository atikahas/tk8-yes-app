@extends('layouts.app')

@section('scriptheader')
<link rel="stylesheet" href="{{url('')}}/adminlte3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<style>
    input, textarea { 
        text-transform: uppercase; 
    }
</style>
@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><small>BORANG YES</small></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Borang</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-center">
                <div class="col-sm-9">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{url('borang/store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="step" id="step1">
                                    <p class="bg-yes text-center mb-0"><b>MAKLUMAT KAWASAN</b></p>
                                    <div class="progress progress-sm active mb-3">
                                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 12.5%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>NEGERI</label>
                                                <select name="negeri" class="form-control" required></select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>DAERAH / JAJAHAN</label>
                                                <select name="daerah" class="form-control" ></select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>MUKIM</label>
                                                <select name="mukim" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>PARLIMEN</label>
                                                <select name="parlimen" class="form-control" required></select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>DUN</label>
                                                <select name="dun" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group clearfix mt-4">
                                                <label>JENIS KAWASAN</label><br>
                                                <div class="icheck-primary d-inline">
                                                    <input type="radio" id="Bandar" value="BANDAR" name="jenis_kawasan">
                                                    <label for="Bandar">
                                                        BANDAR
                                                    </label>
                                                </div>
                                                <div class="icheck-primary d-inline">
                                                    <input type="radio" id="LuarBandar" value="LUAR BANDAR" name="jenis_kawasan">
                                                    <label for="LuarBandar">
                                                        LUAR BANDAR
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <button type="button" class="next-btn btn btn-primary float-right">Next</button>
                                </div>

                                <div class="step" id="step2">
                                    <p class="bg-yes text-center mb-0"><b>I. MAKLUMAT ASAS</b></p>
                                    <div class="progress progress-sm active mb-3">
                                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>NAMA</label>
                                                <input type="text" class="form-control" name="asas_nama" value="{{ $borang->asas_nama }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>NO. KAD PENGENALAN</label>
                                                <input type="text" class="form-control" name="asas_ic">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group clearfix">
                                                <label>JANTINA</label><br>
                                                <div class="icheck-primary d-inline">
                                                    <input type="radio" id="LELAKI" name="asas_jantina" value="Lelaki">
                                                    <label for="LELAKI">
                                                        LELAKI
                                                    </label>
                                                </div>
                                                <div class="icheck-primary d-inline">
                                                    <input type="radio" id="PEREMPUAN" name="asas_jantina" value="Perempuan">
                                                    <label for="PEREMPUAN">
                                                        PEREMPUAN
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>ALAMAT</label>
                                                <textarea class="form-control" name="asas_alamat" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>POSKOD</label>
                                                <input type="text" class="form-control" name="asas_poskod">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>NO. TELEFON</label>
                                                <input type="text" class="form-control" name="asas_telefon">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>ALAMAT e-MEL</label>
                                                <input type="text" class="form-control" name="asas_email">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>KUMPULAN ETNIK</label>
                                                <input type="text" class="form-control" name="asas_bangsa" placeholder="Melayu/Cina/India/Lain-lain ...">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>STATUS PERKAHWINAN</label>
                                                <select name="asas_statusperkahwinan" class="form-control" > 
                                                    <option value="">-- Pilih Status --</option>
                                                    @foreach($statusperkahwinan as $key => $value)
                                                    <option value="{{ $value }}">{{ $value }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>TAHAP PENDIDIKAN</label>
                                                <select name="asas_tahappendidikan" class="form-control" > 
                                                    <option value="">-- Pilih Tahap --</option>
                                                    @foreach($statuspendidikan as $key => $value)
                                                    <option value="{{ $value }}">{{ $value }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <button type="button" class="next-btn btn btn-primary float-right">Next</button>
                                    <button type="button" class="prev-btn btn btn-secondary float-right mr-1">Previous</button>
                                </div>

                                <div class="step" id="step3">
                                    <p class="bg-yes text-center mb-0"><b>II. MAKLUMAT KEDIAMAN</b></p>
                                    <div class="progress progress-sm active mb-3">
                                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 37.5%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>STATUS KEDIAMAN</label>
                                                <select name="kediaman_status" class="form-control" > 
                                                    <option value="">-- Pilih Status --</option>
                                                    @foreach($statuskediaman as $key => $value)
                                                    <option value="{{ $value }}">{{ $value }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="button" class="next-btn btn btn-primary float-right">Next</button>
                                    <button type="button" class="prev-btn btn btn-secondary float-right mr-1">Previous</button>
                                </div>

                                <div class="step" id="step4">
                                    <p class="bg-yes text-center mb-0"><b>III. MAKLUMAT PEKERJAAN</b></p>
                                    <div class="progress progress-sm active mb-3">
                                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>PEKERJAAN</label>
                                                <select name="pekerjaan_status" class="form-control" > 
                                                    <option value="">-- Pilih Status Pekerjaan --</option>
                                                    @foreach($statuspekerjaan as $key => $value)
                                                    <option value="{{ $value }}">{{ $value }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>JENIS PEKERJAAN</label>
                                                <input type="text" class="form-control" name="pekerjaan_jenis">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>NAMA MAJIKAN/SYARIKAT</label>
                                                <input type="text" class="form-control" name="pekerjaan_namasyarikat">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>ALAMAT MAJIKAN/SYARIKAT</label>
                                                <textarea class="form-control" name="pekerjaan_alamatsyarikat" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>NO. TEL MAJIKAN/SYARIKAT</label>
                                                <input type="text" class="form-control" name="pekerjaan_telefonsyarikat">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="button" class="next-btn btn btn-primary float-right">Next</button>
                                    <button type="button" class="prev-btn btn btn-secondary float-right mr-1">Previous</button>
                                </div>

                                <div class="step" id="step5">
                                    <p class="bg-yes text-center mb-0"><b>IV. MAKLUMAT AHLI KELUARGA</b></p>
                                    <div class="progress progress-sm active mb-3">
                                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 62.5%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>NAMA PENUH</label>
                                                <input type="text" class="form-control keluarga-nama" name="namakeluarga">
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>NO. KAD PENGENALAN</label>
                                                <input type="text" class="form-control keluarga-ic" name="ickeeluarga">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label>HUBUNGAN / PERTALIAN</label>
                                                <input type="text" class="form-control keluarga-hubungan" name="hubungankeluarga">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>PEKERJAAN / PERSEKOLAHAN</label>
                                                <input type="text" class="form-control keluarga-pekerjaan" name="pekerjaankeluarga">
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>PENDAPATAN SEBULAN (RM)</label>
                                                <input type="text" class="form-control keluarga-pendapatan" name="pendapatankeluarga">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label>TINGGAL BERSAMA PEMOHON</label>
                                                <select class="form-control keluarga-kedudukan" name="kedudukankeluarga">
                                                    <option value="">-- Pilih Status --</option>
                                                    <option value="Ya">Ya</option>
                                                    <option value="Tidak">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="text-align:center">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-primary col-md-4" onclick="addKeluarga();"><i class="nav-icon fa fa-plus"></i> TAMBAH MAKLUMAT</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <table class="table table-bordered table-responsive table-keluarga">
                                                        <tr>
                                                            <td>NAMA PENUH</td>
                                                            <td>NO. KAD PENGENALAN</td>
                                                            <td>HUBUNGAN / PERTALIAN</td>
                                                            <td>PEKERJAAN / PERSEKOLAHAN</td>
                                                            <td>PENDAPATAN SEBULAN (RM)</td>
                                                            <td>TINGGAL BERSAMA PEMOHON</td>
                                                            <td></td>
                                                        </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="button" class="next-btn btn btn-primary float-right">Next</button>
                                    <button type="button" class="prev-btn btn btn-secondary float-right mr-1">Previous</button>
                                </div>

                                <div class="step" id="step6">
                                    <p class="bg-yes text-center mb-0"><b>V. MAKLUMAT KESIHATAN DAN KETIDAKUPAYAAN (SEKIRANYA BERKAITAN)</b></p>
                                    <div class="progress progress-sm active mb-3">
                                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>

                                    
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>PENYAKIT YANG DIHIDAPI PEMOHON</label>
                                                <input type="text" class="form-control" name="kesihatan_penyakit">
                                            </div>
                                        </div>
                                    </div>

                                    MAKLUMAT PESAKIT/OKU TERLANTAR YANG DIJAGA
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>NAMA</label>
                                                <input type="text" class="form-control" name="kesihatan_namawarisoku">
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>NO. KAD PENGENALAN</label>
                                                <input type="text" class="form-control" name="kesihatan_icwarisoku">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label>HUBUNGAN</label>
                                                <input type="text" class="form-control" name="kesihatan_hubunganwarisoku">
                                            </div>
                                        </div>
                                    </div>

                                    MAKLUMAT MENGENAI KETIDAKUPAYAAN PEMOHON
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label>NO. PENDAFTARAN </label>
                                                <input type="text" class="form-control" name="kesihatan_nooku">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label>JENIS KEUPAYAAN</label>
                                                <select class="form-control" name="kesihatan_jenisoku">
                                                    <option value="">-- Pilih Jenis --</option>
                                                    <option value="PENDENGARAN">Pendengaran</option>
                                                    <option value="PENGLIHATAN">Penglihatan</option>
                                                    <option value="MASALAH PEMBELAJARAN">Masalah Pembelajaran</option>
                                                    <option value="MENTAL">Mental</option>
                                                    <option value="FIZIKAL">Fizikal</option>
                                                    <option value="PERTUTURAN">Pertuturan</option>
                                                    <option value="PELBAGAI">Pelbagai</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <button type="button" class="next-btn btn btn-primary float-right">Next</button>
                                    <button type="button" class="prev-btn btn btn-secondary float-right mr-1">Previous</button>
                                </div>

                                <div class="step" id="step7">
                                    <p class="bg-yes text-center mb-0"><b>VI. MAKLUMAT PENDAPATAN DAN PERBELANJAAN BULANNAN PEMOHON / ISI RUMAH</b></p>
                                    <div class="progress progress-sm active mb-3">
                                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87.5%">
                                        </div>
                                    </div>

                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-0">
                                                <p class="text-primary mb-1"><b>1. PENDAPATAN BULANAN</b></p>
                                                <label class="mb-0">a.Jumlah pendapatan bulanan keseluruhan </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>SENDIRI(RM)</label>
                                                <input type="text" class="form-control" name="pendapatan_sendiri" placeholder="00.00">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> ISI RUMAH YANG TINGGAL (RM)</label>
                                                <input type="text" class="form-control" name="pendapatan_isirumah" placeholder="00.00">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>b. Sumbangan anak/ahli keluarga yang tinggal berasingan (RM)</label>
                                                <input type="text" class="form-control" name="pendapatan_sumbangan" placeholder="00.00">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>c. Bantuan daripada agensi yang lain (kerajaan/swasta/NGO) (RM)</label>
                                                <input type="text" class="form-control" name="pendapatan_bantuan" placeholder="00.00">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group mb-0">
                                                <label class="text-primary mb-1">2. PERBELANJAAN BULANAN</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>a. Ansuran/Sewa Rumah</label>
                                                <input type="text" class="form-control" name="perbelanjaan_rumah" placeholder="00.00">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>b. Ansuran Kenderaan</label>
                                                <input type="text" class="form-control" name="perbelanjaan_kenderaan" placeholder="00.00">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>c. Persekolahan</label>
                                                <input type="text" class="form-control" name="perbelanjaan_persekolahan" placeholder="00.00">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>d. Perubatan</label>
                                                <input type="text" class="form-control" name="perbelanjaan_perubatan" placeholder="00.00">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>e. Bil Utiliti (Elektrik / Air / Astro dll.)</label>
                                                <input type="text" class="form-control" name="perbelanjaan_utiliti" placeholder="00.00">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>f. Perbelanjaan Keluarga</label>
                                                <input type="text" class="form-control" name="perbelanjaan_keluarga" placeholder="00.00">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>g. Lain-lain (Nyatakan)</label>
                                                <input type="text" class="form-control" name="perbelanjaan_lainlain" placeholder="00.00">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="button" class="next-btn btn btn-primary float-right">Next</button>
                                    <button type="button" class="prev-btn btn btn-secondary float-right mr-1">Previous</button>
                                </div>

                                <div class="step" id="step8">
                                    <p class="bg-yes text-center mb-0"><b>VII. MAKLUMAT WARIS</b></p>
                                    <div class="progress progress-sm active mb-3">
                                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>NAMA</label>
                                                <input type="text" class="form-control" name="waris_nama">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>NO. KAD PENGENALAN</label>
                                                <input type="text" class="form-control" name="waris_ic">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>HUBUNGAN</label>
                                                <input type="text" class="form-control" name="waris_hubungan">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>ALAMAT</label>
                                                <textarea class="form-control" name="waris_alamat" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>NO. TELEFON</label>
                                                <input type="text" class="form-control" name="waris_telefon">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary float-right">Hantar</button>
                                    <button type="button" class="prev-btn btn btn-secondary float-right mr-1">Previous</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scriptfooter')
<script>
    $(document).ready(function() {
        @if(isset($_GET['negeri']))
        getParlimen("{{$_GET['negeri']}}");
        getDaerah("{{$_GET['negeri']}}");
        @endif

        @if(isset($_GET['dun']))
        getDun("{{$_GET['negeri']}}", "{{$_GET['parlimen']}}");
        @endif

        @if(isset($_GET['mukim']))
        getMukim("{{$_GET['negeri']}}", "{{$_GET['daerah']}}");
        @endif
    });

    $(document).ready(function() {
        getNegeri();
    });

    $(document).on("change", "select[name=negeri]", function() {
        var negeri = $(this).val();
        getParlimen(negeri);
    });

    $(document).on("change", "select[name=parlimen]", function() {
        var negeri = $("select[name=negeri]").val();
        var parlimen = $(this).val();
        getDun(negeri,parlimen);
    });

    function getNegeri() {
        $.ajax({
            url: "{{url('getNegeri')}}",
            type: "GET",
            success: function(response) {
                // console.log(response);
                var negeri = '';
                $.each(response, function(index,value) {
                    negeri += '<option value="'+value.negeri+'">'+value.negeri+'</option>'
                });
                $("select[name=negeri]").html('<option value="">-- Pilih Negeri --</option>' + negeri);
                @if(isset($_GET['negeri']))
                $("select[name=negeri]").val("{{$_GET['negeri']}}");
                @endif
            }
        });
    }

    function getParlimen(negeri) {
        $.ajax({
            url: "{{url('getParlimen')}}",
            type: "GET",
            data: " negeri=" + negeri,
            success: function(response) {
                // console.log(response);
                var parlimen = '';
                $.each(response, function(index,value) {
                    parlimen += '<option value="'+value.parlimen+'">'+value.parlimen+'</option>'
                });
                $("select[name=parlimen]").html('<option value="">-- Pilih Parlimen --</option>' + parlimen);
                @if(isset($_GET['parlimen']))
                $("select[name=parlimen]").val("{{$_GET['parlimen']}}");
                @endif
            }
        });
    }

    function getDun(negeri, parlimen) {
        $.ajax({
            url: "{{url('getDun')}}",
            type: "GET",
            data: "negeri=" + negeri + "&parlimen=" + parlimen,
            success: function(response) {
                // console.log(response);
                var dun = '';
                $.each(response, function(index,value) {
                    dun += '<option value="'+value.dun+'">'+value.dun+'</option>'
                });
                $("select[name=dun]").html('<option value="">-- Pilih Dun --</option>' + dun);
                @if(isset($_GET['dun']))
                $("select[name=dun]").val("{{$_GET['dun']}}");
                @endif
            }
        });
    }

    $(document).on("change", "select[name=negeri]", function() {
        var negeri = $(this).val();
        getDaerah(negeri);
    });

    $(document).on("change", "select[name=daerah]", function() {
        var negeri = $("select[name=negeri]").val();
        var daerah = $(this).val();
        getMukim(negeri,daerah);
    });

    function getDaerah(negeri) {
        $.ajax({
            url: "{{url('getDaerah')}}",
            type: "GET",
            data: " negeri=" + negeri,
            success: function(response) {
                // console.log(response);
                var daerah = '';
                $.each(response, function(index,value) {
                    daerah += '<option value="'+value.daerah+'">'+value.daerah+'</option>'
                });
                $("select[name=daerah]").html('<option value="">-- Pilih Daerah --</option>' + daerah);
                @if(isset($_GET['daerah']))
                $("select[name=daerah]").val("{{$_GET['daerah']}}");
                @endif
            }
        });
    }

    function getMukim(negeri, daerah) {
        $.ajax({
            url: "{{url('getMukim')}}",
            type: "GET",
            data: "negeri=" + negeri + "&daerah=" + daerah,
            success: function(response) {
                // console.log(response);
                var mukim = '';
                $.each(response, function(index,value) {
                    mukim += '<option value="'+value.mukim+'">'+value.mukim+'</option>'
                });
                $("select[name=mukim]").html('<option value="">-- Pilih Mukim --</option>' + mukim);
                @if(isset($_GET['mukim']))
                $("select[name=mukim]").val("{{$_GET['mukim']}}");
                @endif
            }
        });
    }
</script>

<script>
    $(document).ready(function(){
        // Show the first step and hide the others
        $("#step1").show();
        $("#step2").hide();
        $("#step3").hide();
        $("#step4").hide();
        $("#step5").hide();
        $("#step6").hide();
        $("#step7").hide();
        $("#step8").hide();
        
        // Handle "Next" button click
        $(".next-btn").click(function(){
            var currentStep = $(this).parent();
            var nextStep = $(this).parent().next();
            
            // Validate current step before moving to the next step
            var inputs = currentStep.find("input[required]");
            var isValid = true;
            $.each(inputs, function(index, input){
                if (!input.checkValidity()){
                    isValid = false;
                }
            });
            if (isValid){
                currentStep.hide();
                nextStep.show();
            }
        });
        
        // Handle "Previous" button click
        $(".prev-btn").click(function(){
            var currentStep = $(this).parent();
            var prevStep = $(this).parent().prev();
            currentStep.hide();
            prevStep.show();
        });
    });
</script>

<script>
    var count_keluarga = 0;

    $(document).on("click", ".btn-delete-keluarga", function() {
        $(this).parents("tr").remove();
    });

    function addKeluarga() {
        var keluarga_nama = $(".keluarga-nama").val();
        var keluarga_ic = $(".keluarga-ic").val();
        var keluarga_hubungan = $(".keluarga-hubungan").val();
        var keluarga_perkerjaan = $(".keluarga-pekerjaan").val();
        var keluarga_pendapatan = $(".keluarga-pendapatan").val();
        var keluarga_kedudukan = $(".keluarga-kedudukan").val();

        count_keluarga++;

        $(".table-keluarga").find("tbody").append(
            '<tr>'+
                '<td>'+keluarga_nama+'</td>'+
                '<td>'+keluarga_ic+'</td>'+
                '<td>'+keluarga_hubungan+'</td>'+
                '<td>'+keluarga_perkerjaan+'</td>'+
                '<td>'+keluarga_pendapatan+'</td>'+
                '<td>'+keluarga_kedudukan+'</td>'+
                '<td>'+
                    '<div class="text-center">'+
                    '<button class="btn btn-danger btn-xs btn-delete-keluarga"><i class="fas fa-trash"></i></button>'+
                    '<input type="hidden" name="keluarga['+count_keluarga+'][namakeluarga]" value="'+keluarga_nama+'">'+
                    '<input type="hidden" name="keluarga['+count_keluarga+'][ickeluarga]" value="'+keluarga_ic+'">'+
                    '<input type="hidden" name="keluarga['+count_keluarga+'][hubungankeluarga]" value="'+keluarga_hubungan+'">'+
                    '<input type="hidden" name="keluarga['+count_keluarga+'][pekerjaankeluarga]" value="'+keluarga_perkerjaan+'">'+
                    '<input type="hidden" name="keluarga['+count_keluarga+'][pendapatankeluarga]" value="'+keluarga_pendapatan+'">'+
                    '<input type="hidden" name="keluarga['+count_keluarga+'][kedudukankeluarga]" value="'+keluarga_kedudukan+'">'+
                    '</div>'+
                '</td>'+
            '</tr>'
        )
    }
</script>
@endsection