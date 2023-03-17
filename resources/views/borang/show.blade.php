@extends('layouts.app')

@section('scriptheader')
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
        <div class="content-fluid">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <table class="table table-sm table-bordered" >
                                <tr class= "bg-dark">
                                    <td colspan=4 class="text-center"><b>KATEGORI PERMOHONAN (BARU)</b></td>
                                </tr>
                                <tr>
                                    <td width="25%"><b>1. NEGERI</b></td>
                                    <td width="25%">{{ $borang->negeri }}</td>
                                    <td width="25%"><b>4. PARLIMEN</b></td>
                                    <td width="25%">{{ $borang->parlimen }}</td>
                                </tr>
                                <tr>
                                    <td><b>2. DAERAH/JAJAHAN</b></td>
                                    <td>{{ $borang->daerah }}</td>
                                    <td><b>5. DUN</b></td>
                                    <td>{{ $borang->dun }}</td>
                                </tr>
                                <tr>
                                    <td><b>3. MUKIM</b></td>
                                    <td>{{ $borang->mukim }}</td>
                                    <td colspan=2><b>6.
                                        @if ( $borang->jenis_kawasan == 'LUAR BANDAR' )
                                           <s>BANDAR</s> / LUAR BANDAR</b> 
                                        @elseif ( $borang->jenis_kawasan == 'BANDAR' )
                                           BANDAR / <s>LUAR BANDAR</s></b> 
                                        @endif
                                    </td>
                                </tr>
                                <tr class= "bg-dark">
                                    <td colspan=4><b>I. MAKLUMAT ASAS</b></td>
                                </tr>
                                <tr>
                                    <td><b>1. NO. KAD PENGENALAN</b></td>
                                    <td colspan=3>{{ $borang->asas_ic }}</td>
                                </tr>
                                <tr>
                                    <td><b>2. NAMA</b></td>
                                    <td colspan=3>{{ Str::upper($borang->asas_nama) }}</td>
                                </tr>
                                <tr>
                                    <td><b>3. ALAMAT</b></td>
                                    <td colspan="3">{!! nl2br(Str::upper($borang->asas_alamat)) !!}</td>
                                </tr>
                                <tr>
                                    <td><b>4. POSKOD</b></td>
                                    <td>{{ $borang->asas_poskod }}</td>
                                    <td><b>5. JANTINA</b></td>
                                    <td>{{ Str::upper($borang->asas_jantina) }}</td>
                                </tr>
                                <tr>
                                    <td><b>6. NO. TELEFON</b></td>
                                    <td>{{ $borang->asas_telefon }}</td>
                                    <td><b>7. ALAMAT e-MEL</b></td>
                                    <td>{{ $borang->asas_email }}</td>
                                </tr>
                                <tr>
                                    <td><b>8. KUMPULAN ETNIK</b></td>
                                    <td colspan="3">{{ Str::upper($borang->asas_bangsa) }}</td>
                                </tr>
                                <tr>
                                    <td><b>9. STATUS PERKAHWINAN</b></td>
                                    <td colspan="3">
                                        <table class="table table-sm table-bordered mb-0">
                                            <tr >
                                                @foreach ( $statusperkahwinan as $sp)
                                                <td width="16.8%">
                                                    @if ( $borang->asas_statusperkahwinan == $sp->statusperkahwinan )
                                                        <div class="icheck-midnightblue d-inline">
                                                            <input type="checkbox" checked>
                                                            <label for="statusperkahwinan" style="font-weight: 400">{{ $sp->statusperkahwinan }}</label>
                                                        </div>
                                                    @else
                                                        <div class="icheck-midnightblue d-inline">
                                                            <input type="checkbox" disabled>
                                                            <label for="statusperkahwinan" style="font-weight: 400">{{ $sp->statusperkahwinan }}</label>
                                                        </div>
                                                    @endif
                                                </td>
                                                @endforeach
                                            </tr> 
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>10. TAHAP PENDIDIKAN</b></td>
                                    <td colspan="3">
                                        <table class="table table-sm table-bordered mb-0">
                                            <tr >
                                                @foreach ( $statuspendidikan as $spen)
                                                <td width="16.6%">
                                                    @if ( $borang->asas_tahappendidikan == $spen->statuspendidikan )
                                                        <div class="icheck-midnightblue d-inline">
                                                            <input type="checkbox" checked>
                                                            <label for="statuspendidikan" style="font-weight: 400">{{ $spen->statuspendidikan }}</label>
                                                        </div>
                                                    @else
                                                        <div class="icheck-midnightblue d-inline">
                                                            <input type="checkbox" disabled>
                                                            <label for="statuspendidikan" style="font-weight: 400">{{ $spen->statuspendidikan }}</label>
                                                        </div>
                                                    @endif
                                                </td>
                                                @endforeach
                                            </tr> 
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="bg-dark"><b>II. MAKLUMAT KEDIAMAN</b></td>
                                </tr>
                                <tr>
                                    <td><b>1. STATUS KEDIAMAN</b></td>
                                    <td colspan="3">
                                        <table class="table table-sm table-bordered mb-0">
                                            <tr >
                                                @foreach ( $statuskediaman as $sk)
                                                <td width="25%">
                                                    @if ( $borang->kediaman_status == $sk->statuskediaman )
                                                        <div class="icheck-midnightblue d-inline">
                                                            <input type="checkbox" checked>
                                                            <label for="statuskediaman" style="font-weight: 400">{{ $sk->statuskediaman }}</label>
                                                        </div>
                                                    @else
                                                        <div class="icheck-midnightblue d-inline">
                                                            <input type="checkbox" disabled>
                                                            <label for="statuskediaman" style="font-weight: 400">{{ $sk->statuskediaman }}</label>
                                                        </div>
                                                    @endif
                                                </td>
                                                @endforeach
                                            </tr> 
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="bg-dark"><b>III. MAKLUMAT PEKERJAAN</b></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <b>2. PEKERJAAN</b><br><br>
                                        <table class="table table-sm table-bordered mb-0">
                                            <tr >
                                                @foreach ( $statuspekerjaan as $spek)
                                                <td width="20%">
                                                    @if ( $borang->pekerjaan_status == $spek->statuspekerjaan )
                                                        <div class="icheck-midnightblue d-inline">
                                                            <input type="checkbox" checked>
                                                            <label for="statuspekerjaan" style="font-weight: 400">{{ $spek->statuspekerjaan }}</label>
                                                        </div>
                                                    @else
                                                        <div class="icheck-midnightblue d-inline">
                                                            <input type="checkbox" disabled>
                                                            <label for="statuspekerjaan" style="font-weight: 400">{{ $spek->statuspekerjaan }}</label>
                                                        </div>
                                                    @endif
                                                </td>
                                                @endforeach
                                            </tr> 
                                        </table>
                                    </td>
                                    <td colspan="2">
                                        <table class="table table-sm table-bordered">
                                            <tr>
                                                <td><b>a. JENIS PEKERJAAN</b> : {{ $borang->pekerjaan_jenis }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>b. NAMA & ALAMAT MAJIKAN :</b><br>{{ Str::upper($borang->pekerjaan_namasyarikat) }}<br>{{ Str::upper($borang->pekerjaan_alamatsyarikat) }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>c. NO. TEL MAJIKAN :</b> {{ $borang->pekerjaan_telefonsyarikat }}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="bg-dark"><b>IV. MAKLUMAT AHLI KELUARGA</b></td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <table class="table table-sm table-bordered mb-0">
                                            <thead>
                                                <tr>
                                                    <td><b>BIL</b></td>
                                                    <td><b>NAMA PENUH</b></td>
                                                    <td><b>NO. KAD PENGENALAN</b></td>
                                                    <td><b>HUBUNGAN / PETRALIAN</b></td>
                                                    <td><b>PEKERJAAN / PERSEKOLAHAN</b></td>
                                                    <td><b>PENDAPATAN SEBULAN (RM)</b></td>
                                                    <td><b>TINGGAL BERSAMA PEMOHON</b></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    @foreach ( $borangkeluarga as $key=>$bk)
                                                        @if ( $borang->id == $bk->borangid )
                                                            <td>{{ ++$key }}</td>
                                                            <td>{{ $bk->namakeluarga }}</td>
                                                            <td>{{ $bk->ickeluarga }}</td>
                                                            <td>{{ $bk->hubungankeluarga }}</td>
                                                            <td>{{ $bk->pekerjaankeluarga }}</td>
                                                            <td>{{ $bk->pendapatankeluarga }}</td>
                                                            <td>{{ $bk->kedudukankeluarga }}</td>
                                                        @else
                                                            <td><br></td>
                                                            <td><br></td>
                                                            <td><br></td>
                                                            <td><br></td>
                                                            <td><br></td>
                                                            <td><br></td>
                                                            <td><br></td>
                                                        @endif
                                                    @endforeach
                                                </tr> 
                                            </tbody>
                                        </table>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td colspan="4" class="bg-dark"><b>V. MAKLUMAT KESIHATAN DAN KETIDAKUPAYAAN</b></td>
                                </tr>
                                <tr>
                                    <td><b>1. PENYAKIT YANG DIHIDAPI PEMOHON</b></td>
                                    <td colspan="3"></td>
                                </tr>
                                <tr>
                                    <td><b>2. MAKLUMAT PESAKIT/OKU TERLANTAR YANG DIJAGA</b></td>
                                    <td colspan="3">
                                        <table class="table table-sm table-bordered">
                                            <tr>
                                                <td width="25%"><b>NAMA :</b></td>
                                                <td>{{ $borang->kesihatan_namawarisoku }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>NO. KAD PENGENALAN: </b></td>
                                                <td>{{ $borang->kesihatan_icwarisoku }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>HUBUNGAN: </b></td>
                                                <td>{{ $borang->kesihatan_hubunganwarisoku }}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <b>3. MAKLUMAT MENGENAI KETIDAKUPAYAAN PEMOHON</b><br>
                                        <table>
                                            <tr>
                                                <td><b>a. NO PENDAFTARAN OKU</b></td>
                                                <td>{{ $borang->kesihatan_nooku }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>b. JENIS KETIDAKUPAYAAN</b></td>
                                                <td>
                                                    <table class="table table-sm table-bordered mb-0">
                                                        <tr >
                                                            @foreach ( $statusoku as $so)
                                                            <td width="14.3%">
                                                                @if ( $borang->kesihatan_jenisoku == $so->statusoku )
                                                                    <div class="icheck-midnightblue d-inline">
                                                                        <input type="checkbox" checked>
                                                                        <label for="statusoku" style="font-weight: 400">{{ $so->statusoku }}</label>
                                                                    </div>
                                                                @else
                                                                    <div class="icheck-midnightblue d-inline">
                                                                        <input type="checkbox" disabled>
                                                                        <label for="statusoku" style="font-weight: 400">{{ $so->statusoku }}</label>
                                                                    </div>
                                                                @endif
                                                            </td>
                                                            @endforeach
                                                        </tr> 
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="bg-dark"><b>VI. MAKLUMAT PENDAPATAN DAN PERBBELANJAAN BULANAN PEMOHON / ISI RUMAH</b></td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <b>1. PENDAPATAN BULANAN</b>
                                        <table class="table table-sm table-bordered">
                                            <tr>
                                                <td width="5%"><b>NO.</b></td>
                                                <td width="55%"><b>SUMPER PENDAPATAN</b></td>
                                                <td width="20%"><b>SENDIRI (RM)</b></td>
                                                <td width="20%"><b>ISI RUMAH YANG TINGGAL BERSAMA (RM)</b></td>
                                            </tr>
                                            <tr>
                                                <td>a.</td>
                                                <td>Jumlah pendapatan bulanan keseluruhan</td>
                                                <td>RM {{ $borang->pendapatan_sendiri }}</td>
                                                <td>RM {{ $borang->pendaptan_keluarga }}</td>
                                            </tr>
                                            <tr>
                                                <td>b.</td>
                                                <td>Sumbangan anak/ahli keluarga yang tinggal berasingan</td>
                                                <td>RM {{ $borang->pendapatan_sumbangan }}</td>
                                                <td class="bg-dark"></td>
                                            </tr>
                                            <tr>
                                                <td>c.</td>
                                                <td>Bantuan daripada agensi yang lain (kerajaan/swasta/NGO)</td>
                                                <td>RM {{ $borang->pendapatan_bantuan }}</td>
                                                <td class="bg-dark"></td>
                                            </tr>
                                            <tr>
                                                <td><b>JUMLAH</b></td>
                                                <td>RM </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <b>2. PERBELANJAAN BULANAN</b>
                                        <table class="table table-sm table-bordered">
                                            <tr>
                                                <td width="5%"><b>NO.</b></td>
                                                <td width="75%"><b>JENIS PERBELANJAAN BULANAN</b></td>
                                                <td width="20%"><b>PERBELANJAAN (RM)</b></td>
                                            </tr>
                                            <tr>
                                                <td>a.</td>
                                                <td>Ansuran/Sewa Rumah</td>
                                                <td>RM {{ $borang->perbelanjaan_rumah }}</td>
                                            </tr>
                                            <tr>
                                                <td>b.</td>
                                                <td>Aunsuran Kenderaan</td>
                                                <td>RM {{ $borang->perbelanjaan_kenderaan }}</td>
                                            </tr>
                                            <tr>
                                                <td>c.</td>
                                                <td>Persekolahan</td>
                                                <td>RM {{ $borang->perbelanjaan_persekolahan }}</td>
                                            </tr>
                                            <tr>
                                                <td>d.</td>
                                                <td>Perubatan</td>
                                                <td>RM {{ $borang->perbelanjaan_perubatan }}</td>
                                            </tr>
                                            <tr>
                                                <td>e.</td>
                                                <td>Bil Utiliti (Elektrik/Air/Astro dll.)</td>
                                                <td>RM {{ $borang->perbelanjaan_utiliti }}</td>
                                            </tr>
                                            <tr>
                                                <td>f.</td>
                                                <td>Perbelanjaan Keluarga</td>
                                                <td>RM {{ $borang->perbelanjaan_keluarga }}</td>
                                            </tr>
                                            <tr>
                                                <td>g.</td>
                                                <td>Lain-lain</td>
                                                <td>RM {{ $borang->perbelanjaan_lainlain }}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="bg-dark"><b>VII. MAKLUMAT WARIS</b></td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <table class="table table-sm table-bordered">
                                            <tr>
                                                <td width="25%"><b>NAMA :</b></td>
                                                <td colspan="3" width="75%">{{ $borang->waris_nama }}</td>
                                            </tr>
                                            <tr>
                                                <td width="25%"><b>NO. KAD PENGENALAN :</b></td>
                                                <td width="25%">{{ $borang->waris_ic }}</td>
                                                <td width="25%"><b>HUBUNGAN :</b></td>
                                                <td width="25%">{{ $borang->waris_hubungan }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>ALAMAT :</b></td>
                                                <td colspan="3">{{ $borang->waris_alamat }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>NO. TELEFON: </b></td>
                                                <td colspan="3">{{ $borang->waris_telefon }}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="bg-dark"><b>VIII. KEGUNAAN PEJABAT</b></td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-center">
                                        Setelah disemak permohonan ini 
                                        @if ( $borang->borang_status == 'APPROVE')
                                            <span class="badge badge-success" style="font-size:20px">Approved</span>
                                        @elseif ( $borang->borang_status == 'PENDING')
                                            <span class="badge badge-secondary" style="font-size:20px">Pending</span>
                                        @elseif ( $borang->borang_status  == 'REJECT')
                                            <span class="badge badge-danger" style="font-size:20px">Reject</span>
                                        @elseif ( $borang->borang_status  == 'KIV')
                                            <span class="badge badge-warning" style="font-size:20px">KIV</span>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scriptfooter')
    
@endsection