@extends('layout.layout')

@section('content')
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Data Dosen</h3>          
        <!-- row -->
        <div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <form action="/dosen/create" method="GET">
                    <button type="submit" class="btn btn-theme" style="margin-left: 10px;"><i class="fa fa-plus"></i> Tambah Dosen</button>
                </form>

                <hr>
                <thead>
                <tr>
                    <th>No.</th>
                    <th>NIP </th>
                    <th>Nama </th>
                    <th>Alamat </th>
                    <th>Tanggal Lahir </th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= sizeof($dosens); $i++)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $dosens[$i-1]->nip }}</td>
                            <td>{{ $dosens[$i-1]->nama }}</td>
                            <td>{{ $dosens[$i-1]->alamat }}</td>
                            <td>{{ $dosens[$i-1]->tgl_lahir }}</td>
                            <td>{{ $dosens[$i-1]->jenis_kelamin }}</td>
                            <td>
                                <form action="/dosen/{{$dosens[$i-1]->id}}/edit" method="GET">
                                    <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                </form> 
                                <form action="/dosen/{{$dosens[$i-1]->id}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" onclick="return confirm('Yakin Ingin Menonaktifkan User?')"></i></button>
                                </form>
                            </td>                       
                        </tr>  
                    @endfor
                </tbody>
            
            </table>
            </div>
            <!-- /content-panel -->
            @if(session('success'))
                <div class="alert alert-success">
                <p style="text-align: center"><b>{{ session('success') }}</b></p>
                </div>
            @elseif(session('warning'))
                <div class="alert alert-warning">
                <p style="text-align: center"><b>{{ session('warning') }}</b></p>
                </div>
            @elseif(session('danger'))
                <div class="alert alert-danger">
                <p style="text-align: center"><b>{{ session('danger') }}</b></p>
                </div>
            @endif
        </div>
        <!-- /col-md-12 -->
        </div>
        <!-- /row -->
        </form>
    </section>
@endsection