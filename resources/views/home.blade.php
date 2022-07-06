@extends('layouts.app')

@section('section')
    <div class = "row">
        <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card bg-primary text-white mb-4 order-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                        Outlet</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">34</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-home fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card bg-danger text-white mb-4 order-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                        Laundry Masuk</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">50%</div>
                                    {{-- <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card bg-warning text-white mb-4 order-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                        Laundry Proses</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clock fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card bg-success text-white mb-4 order-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                        Laundry Keluar</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">14</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-caravan fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
              </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        Data Laundry Masuk per Hari
                    </div>
                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Data Laundry Masuk per Bulan
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>

        {{--  --}}
        <div class = "row">
            <div class="col-xl-7 col-md-6 col-12">
                <div class="card card-statistics">
                    <div class="shadow mb-4">
                        <div class="card-header">
                            <h4 class="card-title">Pendapatan</h4>
                            <div class="d-flex align-items-center">
                                <p class="card-text font-small-2 mr-25 mb-0">Pendapatan Tahuan & Bulan</p>
                            </div>
                        </div>
                        <div class="card-body statistics-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="media">
                                        <div class="avatar bg-primary mr-2">
                                            <div class="avatar-content">
                                                <i class="feather icon-dollar-sign"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h5 class="font-weight-bolder mb-0">Rupiah</h5>
                                            <p class="card-text font-small-1 mb-0">Tahun ini {{date('Y')}} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="media">
                                        <div class="avatar bg-info mr-2">
                                            <div class="avatar-content">
                                               <i class="feather icon-dollar-sign"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h5 class="font-weight-bolder mb-0"> Rupiah </h5>
                                            <p class="card-text font-small-1 mb-0">Bulan ini {{date('F')}} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-sm-0">
                                    <div class="media">
                                        <div class="avatar bg-danger mr-2">
                                            <div class="avatar-content">
                                                <i class="feather icon-dollar-sign"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h5 class="font-weight-bolder mb-0">Rupiah</h5>
                                            <p class="card-text font-small-1 mb-0">Tahun lalu {{date("Y",strtotime("-1 year")) ?? 0}} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-md-6 col-12">
                <div class="card card-statistics">
                    <div class="shadow mb-4">
                        <div class="card-header">
                            <h4 class="card-title">Pendapatan </h4>
                            <div class="d-flex align-items-center">
                                <p class="card-text font-small-2 mr-25 mb-0">Pendapatan Harian</p>
                            </div>
                        </div>
                        <div class="card-body statistics-body">
                            <div class="row">
                                <div class="col-xl-6 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="media">
                                        <div class="avatar bg-rgba-success mr-2">
                                            <div class="avatar-content">
                                                <i class="feather icon-dollar-sign"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h4 class="font-weight-bolder mb-0">Rupiah</h4>
                                            <p class="card-text font-small-1 mb-0">Hari ini {{date('l')}} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="media">
                                        <div class="avatar bg-rgba-warning mr-2">
                                            <div class="avatar-content">
                                               <i class="feather icon-dollar-sign"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h4 class="font-weight-bolder mb-0">Rupiah</h4>
                                            <p class="card-text font-small-1 mb-0">Kemarin {{date("l",strtotime("-1 day"))}} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        </div>
        {{--  --}}

        {{-- <div class="card shadow mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Daftar Outlet
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID Outlet</th>
                            <th>Nama Outlet</th>
                            <th>Alamat Outlet</th>
                            <th>Kontak</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID Outlet</th>
                            <th>Nama Outlet</th>
                            <th>Alamat Outlet</th>
                            <th>Kontak</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> --}}
    </div>
@endsection