@extends('layouts.app')
@section('section')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data Produk</h4>
        </div>
        <div class="card-body px-2 pt-2 pb-2">
            @if(session('status'))
            <div class = "mb-4 font-medium text-sm text-green-600">
              {{ session('status') }}
            </div>
            @endif
        </div>
        <div class="card-content">
            <div class="card-body">
                @error('errors')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <form action="/tambah_outlet" method="post" class="form form-vertical">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-lg-4 col-xl-4 col-12">
                                <div class="form-group">
                                    <label for="nama_produk">Nama Produk</label>
                                    <div class="position-relative">
                                        <input type="text" name="nama_produk" id="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" placeholder="Nama Produk" value="{{old('nama_produk')}}">
                                        @error('nama_produk')
                                          <span class="invalid-feedback text-danger" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-xl-5 col-12">
                                <div class="form-group">
                                    <label for="tentang_produk">Tentang Produk</label>
                                    <div class="position-relative">
                                        <textarea type="text" name="tentang_produk" class="form-control @error('tentang_produk') is-invalid @enderror" id="tentang_produk" rows="3">{{old('tentang_produk')}}</textarea>
                                        @error('tentang_produk')
                                          <span class="invalid-feedback text-danger" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-2 col-12">
                                <div class="form-group">
                                    <label for="no_telp">Harga Produk</label>
                                    <div class="position-relative">
                                        <input type="number" name="no_telp" id="no_telp" class="form-control @error('no_telp') is-invalid @enderror" placeholder="Harga Produk" value="{{old('no_telp')}}">
                                        @error('no_telp')
                                          <span class="invalid-feedback text-danger" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary mr-1 mb-1">Tambah</button>
                              <a href="/produk" class="btn btn-outline-danger mr-1 mb-1">Batal</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection