@extends('layouts.app')
@section('section')

{{-- Search Produk, Search Outlet n Etc --}}
{{-- <div class="container">
    <h3>Lacak Status Laundry Kamu Disini...</h3>
    <div class="input-group m-b-20">
        <input type="text" class="form-control input-lg" id="search_status" placeholder="Contoh : TR0392928" />
        <span class="input-group-btn">
            <button type="submit" class="btn btn-lg" id="search-btn"><i class="fa fa-search"></i></button>
        </span>
    </div> --}}
<div class="row">
    <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center pb-20">
                            <h3 class="title">Softener</h3>
                        </div> 
                    </div>
                </div>
                <div class="col text-center">
                    <img src="{{ ('assets/img/download.jpg') }}" alt="pict">
                </div>
            </div>
            <div class="card-header text-center">
                <h5 class="sub-title">Basic</h5>
                <p class="month"><span class="price">$ 199</span>/month</p>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="#">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center pb-20">
                            <h3 class="title">Softener</h3>
                        </div> 
                    </div>
                </div>
                <div class="col text-center">
                    <img src="{{ ('assets/img/download.jpg') }}" alt="pict">
                </div>
            </div>
            <div class="card-header text-center">
                <h5 class="sub-title">Basic</h5>
                <p class="month"><span class="price">$ 199</span>/month</p>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="#">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center pb-20">
                            <h3 class="title">Softener</h3>
                        </div> 
                    </div>
                </div>
                <div class="col text-center">
                    <img src="{{ ('assets/img/download.jpg') }}" alt="pict">
                </div>
            </div>
            <div class="card-header text-center">
                <h5 class="sub-title">Basic</h5>
                <p class="month"><span class="price">$ 199</span>/month</p>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="#">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center pb-20">
                            <h3 class="title">Softener</h3>
                        </div> 
                    </div>
                </div>
                <div class="col text-center">
                    <img src="{{ ('assets/img/download.jpg') }}" alt="pict">
                </div>
            </div>
            <div class="card-header text-center">
                <h5 class="sub-title">Basic</h5>
                <p class="month"><span class="price">$ 199</span>/month</p>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="#">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center pb-20">
                            <h3 class="title">Softener</h3>
                        </div> 
                    </div>
                </div>
                <div class="col text-center">
                    <img src="{{ ('assets/img/download.jpg') }}" alt="pict">
                </div>
            </div>
            <div class="card-header text-center">
                <h5 class="sub-title">Basic</h5>
                <p class="month"><span class="price">$ 199</span>/month</p>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="#">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center pb-20">
                            <h3 class="title">Softener</h3>
                        </div> 
                    </div>
                </div>
                <div class="col text-center">
                    <img src="{{ ('assets/img/download.jpg') }}" alt="pict">
                </div>
            </div>
            <div class="card-header text-center">
                <h5 class="sub-title">Basic</h5>
                <p class="month"><span class="price">$ 199</span>/month</p>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="#">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center pb-20">
                            <h3 class="title">Softener</h3>
                        </div> 
                    </div>
                </div>
                <div class="col text-center">
                    <img src="{{ ('assets/img/download.jpg') }}" alt="pict">
                </div>
            </div>
            <div class="card-header text-center">
                <h5 class="sub-title">Basic</h5>
                <p class="month"><span class="price">$ 199</span>/month</p>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="#">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center pb-20">
                            <h3 class="title">Softener</h3>
                        </div> 
                    </div>
                </div>
                <div class="col text-center">
                    <img src="{{ ('assets/img/download.jpg') }}" alt="pict">
                </div>
            </div>
            <div class="card-header text-center">
                <h5 class="sub-title">Basic</h5>
                <p class="month"><span class="price">$ 199</span>/month</p>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="#">View Details</a>
                <div class="small text-black"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection