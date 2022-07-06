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
        {{-- Data Outlet --}}<a href="{{ route('outlet.create') }}" class="btn btn-primary">Tambah</a>
        {{-- <h4 class="card-title">
            <a href="#" class="btn btn-primary">Tambah</a>
        </h4> --}}
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID Outlet</th>
                    <th>Nama Outlet</th>
                    <th>Alamat Outlet</th>
                    <th>No_Telpon</th>
                    <th>Email</th>
                    <th>Tentang Outlet</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID Outlet</th>
                    <th>Nama Outlet</th>
                    <th>Alamat Outlet</th>
                    <th>No_Telpon</th>
                    <th>Email</th>
                    <th>Tentang Outlet</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <?php $no=1; ?>
                          @foreach ($outlet as $o)
                          <tr>
                              <td>{{$no}}</td>
                              <td>{{$o->nama_outlet}}</td>
                              <td>{{$o->alamat_outlet}}</td>
                              <td>{{$o->no_telp}}</td>
                              <td>{{$o->email}}</td>
                              <td>{{$o->tentang_outlet}}</td>
                              <td class="align-middle text-center text-sm">
                                @if ($o->kategori == 'Agent')
                                    <span class="btn btn-sm btn-primary">Agent</span>
                                @else
                                    <span class="btn btn-sm btn-primary">Home</span>
                                @endif
                              </td>
                              {{-- <td class="align-middle text-center text-sm">
                                    <form action="#" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <a class="btn btn-sm btn-{{$o->status == 'Active' ? 'primary' : 'danger'}}" data-id-update="{{$o->id}}" id="updateStatus">{{$o->status == 'Active' ? 'Non-Aktifkan' : 'Aktifkan'}}</a>
                                    </form>
                                </td> --}}
                                @csrf
                                @method('DELETE')
                              <td class="align-middle">
                                <a href="{{ route('outlet.edit', $o->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-wrench"></i> Edit</a>
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