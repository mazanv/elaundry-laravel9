@extends('layouts.app')
@section('section')
@if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
  </div>
@elseif($message = Session::get('error'))
  <div class="alert alert-danger alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
  </div>
@endif
<div class="card shadow mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        {{-- Data Outlet --}}<a href="#" class="btn btn-primary">Tambah</a>
        {{-- <h4 class="card-title">
            <a href="#" class="btn btn-primary">Tambah</a>
        </h4> --}}
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID Customer</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No_Telpon</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID Customer</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No_Telpon</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <?php $no=1; ?>
                          @foreach ($customer as $c)
                          <tr>
                              <td>{{$no}}</td>
                              <td>{{$c->nama}}</td>
                              <td>{{$c->email}}</td>
                              <td>{{$c->no_telp}}</td>
                              <td>{{ $c->alamat }}</td>
                              <td class="align-middle text-center text-sm">
                                @if ($c->status == 'Active')
                                    <span class="btn btn-sm btn-success">Aktif</span>
                                @else
                                    <span class="btn btn-sm btn-danger">Tidak Aktif</span>
                                @endif
                              </td>
                              <td class="align-middle text-center text-sm">
                                    <form action="#" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <a class="btn btn-sm btn-{{$c->status == 'Active' ? 'danger' : 'primary'}}" data-id-update="{{$c->id}}" id="updateStatus">{{$c->status == 'Active' ? 'Non-Aktifkan' : 'Aktifkan'}}</a>
                                    </form>
                                    <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-wrench"></i> Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                </td>
                          </tr>
                          <?php $no++; ?> 
                          @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection