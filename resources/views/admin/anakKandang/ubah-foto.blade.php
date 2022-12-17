@extends('admin.template_backend.home')
@section('heading', 'Ubah Foto')
@section('page')
  <li class="breadcrumb-item active"><a href="#">Anak Kandang</a></li>
  <li class="breadcrumb-item active">Ubah Foto</li>
@endsection
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
          <div class="row">
            <div class="col-md-6">
              <h3 class="card-title">Form ubah foto</h3>
            </div>
              <div class="col-md-6">
                <h3 class="card-title">Foto Saat ini</h3>
              </div>
          </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="#"  enctype="multipart/form-data" method="post">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_anak_kandang">Nama Anak Kandang</label>
                        <input type="text" name="nama_anak_kandang" class="form-control" value="#" readonly>
                    </div>
                    <div class="form-group">
                        <label for="foto_anak_kandang">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="foto_anak_kandang" class="custom-file-input @error('foto_anak_kandang') is-invalid @enderror" id="foto_anak_kandang">
                                <label class="custom-file-label" for="foto_anak_kandang">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="#" class="img img-responsive" alt="" width="30%" />
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <a href="#" class="btn btn-default"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
            <button name="submit" class="btn btn-primary"><i class="nav-icon fas fa-upload"></i> &nbsp; Upload</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
</div>
@endsection
@section('script')
    <script>
        $("#MasterData").addClass("active");
        $("#liMasterData").addClass("menu-open");
        $("#DataAnakKandang").addClass("active");
    </script>
@endsection