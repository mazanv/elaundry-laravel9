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
        {{-- Data Outlet --}}<a href="{{ route('kurir.create') }}" class="btn btn-primary">Tambah</a>
        {{-- <h4 class="card-title">
            <a href="#" class="btn btn-primary">Tambah</a>
        </h4> --}}
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID Kurir</th>
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
                    <th>ID Kurir</th>
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
                          @foreach ($kurir as $k)
                          <tr>
                              <td>{{$no}}</td>
                              <td>{{$k->nama_kurir}}</td>
                              <td>{{$k->email}}</td>
                              <td>{{$k->no_telp}}</td>
                              <td>{{$k->alamat}}</td>
                              <td class="align-middle text-center text-sm">
                                @if ($k->status == 'Active')
                                    <span class="btn btn-sm btn-success">Aktif</span>
                                @else
                                    <span class="btn btn-sm btn-danger">Tidak Aktif</span>
                                @endif
                              </td>
                              <td class="align-middle text-center text-sm">
                                    <form action="#" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <a class="btn btn-sm btn-{{$k->status == 'Active' ? 'primary' : 'danger'}}" data-id-update="{{$k->id}}" id="updateStatus">{{$k->status == 'Active' ? 'Non-Aktifkan' : 'Aktifkan'}}</a>
                                    </form>
                                    <a href="{{ route('kurir.edit', $k->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-wrench"></i> Edit</a>
                                    <a href="{{ route('kurir.destroy', $k->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                    {{-- <button type="submit" class = "btn btn-sm btn-danger">Hapus</button> --}}
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


{{-- <td class="align-middle text-center text-sm">
    <span class="badge badge-sm bg-gradient-success">A</span>
  </td>
 
  <td class="align-middle">
    <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-wrench"></i> Edit</a>
     
    </a>
  </td>
  <td class="align-middle">
    <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
      
    </a>
  </td> --}}