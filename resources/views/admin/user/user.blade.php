@extends('layouts.app_admin')

@section('content') 
  <div class="col-md-12">
      <div class="panel block">
          <div class="panel-body">
              <h1>Daftar User</h1>
              <ol class="breadcrumb">
                  <li><a href="{{asset('/softwaretester/home')}}"></i> Home</a></li>
                  <li class="active">User</li>
              </ol>
          </div>
      </div>
  </div>
  <div class="col-md-12 padding-0">
      <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">
              @include('admin.shared.components.alert')             
              <hr>
              <div class="responsive-table">
                <table id="mydatatables" class="table table-striped table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->gender }}</td>
                      <td>
                        <a href="#" class="btn btn-info btn-sm">
                          <span class="fa fa-pencil"></span>
                        </a>
                        <a onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" href="#" class="btn btn-danger btn-sm">
                          <span class="fa fa-trash"></span>
                        </a>
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
@endsection