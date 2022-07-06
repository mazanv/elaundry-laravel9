@extends('layouts.app')
@section('section')
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data Outlet</h4>
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
                        <form method="POST" action="{{ route('outlet.store') }}" " class="form form-vertical">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-lg-4 col-xl-4 col-12">
                                        <div class="form-group">
                                            <label for="nama">Nama Outlet</label>
                                            <div class="position-relative">
                                                <input type="text" name="nama_outlet" id="nama_outlet" class="form-control @error('nama_outlet') is-invalid @enderror" placeholder="Nama Outlet" value="{{old('nama_outlet')}}">
                                                @error('name')
                                                  <span class="invalid-feedback text-danger" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-4 col-12">
                                        <div class="form-group">
                                            <label for="email-id-icon">Email</label>
                                            <div class="position-relative">
                                                <input type="email" name="email" id="email-id-icon" class="form-control @error('email') is-invalid @enderror" placeholder="Email Outlet" value="{{old('email')}}">
                                                @error('email')
                                                  <span class="invalid-feedback text-danger" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-4 col-12">
                                        <div class="form-group">
                                            <label for="no_telp">No.Telp</label>
                                            <div class="position-relative">
                                                <input type="number" name="no_telp" id="no_telp" class="form-control @error('no_telp') is-invalid @enderror" placeholder="No. Telp Outlet" value="{{old('no_telp')}}">
                                                @error('no_telp')
                                                  <span class="invalid-feedback text-danger" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="col-lg-4 col-xl-4 col-12">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <div class="position-relative">
                                                <input type="password" name="password" id="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password">
                                                @error('password')
                                                  <span class="invalid-feedback text-danger text-danger" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="col-lg-4 col-xl-4 col-12">
                                        <div class="form-group">
                                            <label for="confirm-password">Konfirmasi Password</label>
                                            <div class="position-relative">
                                                <input type="password" name="password_confirmation" id="confirm-password" class="form-control  @error('password_confirmation') is-invalid @enderror" placeholder="Konfirmasi Password">
                                                @error('password_confirmation')
                                                  <span class="invalid-feedback text-danger" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-xl-4 col-12">
                                        <div class="form-group">
                                        <label for="exampleFormControlSelect1 @error('kategori') is-invalid @enderror">Kategori Outlet</label>
                                        <select class="form-control" name="kategori" id="inputFormControlSelect1">
                                          <option>-- Pilih Kategori Outlet--</option>
                                          <option>Agent</option>
                                          <option>Home</option>
                                        </select>
                                        @error('kategori')
                                                <div class="form-text text-danger">{{ $message }}</div>
                                            @enderror
                                      </div>
                                    </div>
                                    <div class="col-lg-5 col-xl-5 col-12">
                                        <div class="form-group">
                                            <label for="alamat_outlet">Alamat Outlet</label>
                                            <div class="position-relative">
                                               <textarea type="text" name="alamat_outlet" class="form-control @error('alamat_outlet') is-invalid @enderror" id="alamat_outlet" rows="3"> {{old('alamat_outlet')}} </textarea>
                                               @error('alamat_outlet')
                                                  <span class="invalid-feedback text-danger" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-xl-5 col-12">
                                        <div class="form-group">
                                            <label for="tentang_outlet">Tentang Outlet</label>
                                            <div class="position-relative">
                                                <textarea type="text" name="tentang_outlet" class="form-control @error('tentang_outlet') is-invalid @enderror" id="tentang_outlet" rows="3">{{old('tentang_outlet')}}</textarea>
                                                @error('tentang_outlet')
                                                  <span class="invalid-feedback text-danger" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                      <button type="submit" class="btn btn-primary mr-1 mb-1">Tambah</button>
                                      <a href="/outlet" class="btn btn-outline-danger mr-1 mb-1">Batal</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    
@endsection