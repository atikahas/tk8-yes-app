@extends('layouts.app')

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
                        <div class="card-header">
                          <a href="{{ route('borang.create') }}" class="btn btn-sm btn-primary float-right"><i class="nav-icon fas fa-plus"></i> Tambah Pemohon</a>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Negeri</th>
                                        <th>Parlimen</th>
                                        <th>IC</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Pilihan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $borang as $key=>$b )
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $b->negeri }}</td>
                                        <td>{{ $b->parlimen }}</td>
                                        <td>{{ $b->asas_ic }}</td>
                                        <td>{{ $b->asas_nama }}</td>
                                        <td>
                                            @if ( $b->borang_status == 'APPROVE')
                                                <span class="badge badge-success">Approved</span>
                                            @elseif ( $b->borang_status == 'PENDING')
                                                <span class="badge badge-secondary">Pending</span>
                                            @elseif ( $b->borang_status  == 'REJECT')
                                                <span class="badge badge-danger">Reject</span>
                                            @elseif ( $b->borang_status  == 'KIV')
                                                <span class="badge badge-warning">KIV</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url('borang/show/'.$b->id)}}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                            @if ($b->borang_status  == 'APPROVE' || $b->borang_status  == 'REJECT')
                                            @else
                                                <a href="{{url('borang/edit/'.$b->id.'?negeri='.$b->negeri.'&daerah='.$b->daerah.'&parlimen='.$b->parlimen.'&mukim='.$b->mukim.'&dun='.$b->dun)}}" class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></a>
                                            @endif
                                            
                                            @if ( $b->borang_status  == 'APPROVE' || $b->borang_status  == 'REJECT' || $b->borang_status  == 'KIV')
                                            @else
                                                <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                            @endif
                                        </td>
                                    </tr> 
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scriptfooter')
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, 
                "lengthChange": false, 
                "autoWidth": false,
                "buttons": [ "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection