@extends('layouts.app')
@section('section')
<div class="card shadow mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        {{-- Data Outlet --}}<a href="/tambah_produk" class="btn btn-primary">Tambah</a>
        {{-- <h4 class="card-title">
            <a href="#" class="btn btn-primary">Tambah</a>
        </h4> --}}
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID Produk</th>
                    <th>Nama Produk</th>
                    <th>Tentang Produk</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <<th>ID Produk</th>
                    <th>Gambar Produk</th>
                    <th>Nama Produk</th>
                    <th>Tentang Produk</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php $no=1; ?>
                          @foreach ($produk as $p)
                          <tr>
                              <td>{{$no}}</td>
                              <td>{{$p->nama_produk}}</td>
                              <td>{{$p->tentang_produk}}</td>
                              <td>{{$p->harga_produk}}</td>
                              <td class="align-middle text-center text-sm">
                                <a href="#" class="btn btn-sm btn-warning"><i class="fa fa-wrench"></i> Edit</a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                            </td>
                                
                          </tr>
                          <?php $no++; ?> 
                          @endforeach 
            </tbody>
        </table>
    </div>
</div>
@endsection