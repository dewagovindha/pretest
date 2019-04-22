@extends('layout.layout')

@section('content')
<section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Tambah Data Dosen</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Form Tambah Data Dosen</h4>
              <form class="form-horizontal style-form" action="/dosen" method="post">
                @csrf
                
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">NIP</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="nip" name="nip" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <input type="radio"  id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki" required>Laki-laki<br>
                    <input type="radio"  id="jenis_kelamin" name="jenis_kelamin" value="Perempuan" required>Perempuan
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit">Submit</button>
                  </div>
                </div>
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
        </div>
        <!-- /row -->
      </section>

@endsection