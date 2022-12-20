@extends ('master')

@section('judul')
<h1>Halaman Details Jurusan</h1>
@endsection
@section('content')
<section class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Siswa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/jurusan" method="POST">
              @csrf
              <div class="card-body">
                
                  <div class="form-group">
                    <label for="InputNama">Nama Siswa</label>
                    <input type="text" name="nama_siswa" class="form-control" id="InputNama" placeholder="Enter Your Nama" value="{{ $showjurusanById->nama_siswa}}" disabled>
                  </div>

                  <div class="form-group">
                    <label for="InputKelas">Nama kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" id="InputKelas" placeholder="Enter Your Kelas" value="{{ $showjurusanById->nama_kelas }}" disabled>
                  </div>

                <div class="form-group">
                    <label for="InputJurusan">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="InputJurusan" placeholder="Enter Your Jurusan" value="{{ $showjurusanById->jurusan }}" disabled>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a class="btn btn-primary"href="/jurusan">Back</a>
                </div>
              </form>
            </div>
</section>
@endsection