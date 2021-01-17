@extends('adminLayout/index')
@section('content')
tabel mahasiswa
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">NO.</th>
        <th scope="col">NPM</th>
        <th scope="col">NAMA</th>
        <th scope="col">KELAS</th>
        <th scope="col">ORGANISASI</th>
        <th scope="col">ALAMAT</th>
        <th scope="col">ACTION</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($mahasiswa as $item)
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->npm}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->class}}</td>
            <td>{{$item->organization->nama}}</td>
            <td>{{$item->alamat}}</td>
            <td> <a href="/list/detail1/{{$item->slug}}" class="btn btn-success btn-sm">edit </a></td>
            <td> <form action="/list/delete/{{$item->slug}}" method="post">
            @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
              </form> </td>
          </tr>
        @endforeach
    </tbody>
  </table>

    <div class='row'>
        <a href="/createmhs" class="btn btn-success btn-sm">Create</a>
    </div>

<div class="d-flex justify-content-center">
  {!! $mahasiswa->links('pagination') !!}
</div>


@endsection
