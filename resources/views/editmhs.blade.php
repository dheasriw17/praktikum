@extends('adminLayout/index')
@section('content')
<section class="content">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit Data Mahasiswa</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="/list/update/{{$mahasiswa->slug}}">
              @method('patch')
              @csrf

            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">NPM</label>
                <input type="Text" class="form-control" id="npm" name="npm" value="{{$mahasiswa->npm}}">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="Text" class="form-control" id="name" name="name" value="{{$mahasiswa->name}}">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Kelas</label>
                  <input type="Text" class="form-control" id="class" name="class" value="{{$mahasiswa->class}}"">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="Text" class="form-control" id="alamat" name="alamat" value="{{$mahasiswa->alamat}}"">
                </div>

                <div class="form-group">
                  <label for="exampleSelectBorder">Pilih Organisasi</label>
                  <select class="custom-select form-control-border" name="organization_id" id="organization_id">
                      <option value="0">Tidak berorganisasi</option>
                      @foreach ($org as $item)
                    <option value="{{$item->id}}" {{$item->id==$mahasiswa->organization_id ? 'selected':''}}>{{$item->nama}}</option>
                    @endforeach
                  </select>
                </div>
            <!-- /.card-body -->
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
@endsection
