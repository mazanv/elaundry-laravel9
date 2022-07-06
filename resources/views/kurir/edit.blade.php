@extends('layouts.app')
@section('section')
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Data Kurir</h4>
            </div>
            <div class="card-body px-2 pt-2 pb-2">
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="card-content">
                <div class="card-body">
                    @error('errors')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <form method="POST" action="{{ route('kurir.update', $kurir->id) }}" class="form form-vertical">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-lg-4 col-xl-4 col-12">
                                    <div class="form-group">
                                        <label for="nama_kurir">Nama Kurir</label>
                                        <div class="position-relative">
                                            <input type="text" name="nama_kurir" value="{{ $kurir->nama_kurir }}"
                                                id="nama_kurir" class="form-control" placeholder="Nama Kurir">
                                            @error('nama_kurir')
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
                                            <input type="email" name="email" value="{{ $kurir->email }}"
                                                id="email-id-icon" class="form-control" placeholder="Email Kurir">
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
                                            <input type="number" name="no_telp" value="{{ $kurir->no_telp }}"
                                                id="no_telp" class="form-control" placeholder="No. Telp Kurir">
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
                                            <input type="password" name="password" id="password" class="form-control"
                                                placeholder="Password">
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
                                            <input type="password" name="password_confirmation" id="confirm-password"
                                                class="form-control" placeholder="Konfirmasi Password">
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
                                        <label for="exampleFormControlSelect1">Status Kurir</label>
                                        <select class="form-control" name="status" id="inputFormControlSelect1">
                                            <option>-- Status Kurir--</option>
                                            <option>Active</option>
                                            <option>Non Active</option>
                                        </select>
                                        @error('status')
                                            <div class="form-text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-5 col-xl-5 col-12">
                                    <div class="form-group">
                                        <label for="alamat">Alamat Kurir</label>
                                        <div class="position-relative">
                                            <textarea type="text" name="alamat" class="form-control" value="{{ $kurir->alamat }}" id="alamat"
                                                rows="3"></textarea>
                                            @error('alamat')
                                                <span class="invalid-feedback text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Update</button>
                                    <a href="/kurir" class="btn btn-outline-danger mr-1 mb-1">Batal</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
