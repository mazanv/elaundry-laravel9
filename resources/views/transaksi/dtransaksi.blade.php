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
        {{-- Data Outlet --}}<a href="/tambah_kurir" class="btn btn-primary">Tambah</a>
        {{-- <h4 class="card-title">
            <a href="#" class="btn btn-primary">Tambah</a>
        </h4> --}}
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID Transaksi</th>
                    <th>Tanggal Transaksi</th>
                    <th>Customer</th>
                    <th>No_Telpon</th>
                    <th>Alamat</th>
                    <th>Status Order</th>
                    <th>Status Pembayaran</th>
                    <th>Jenis Pembayaran</th>
                    <th>Jenis Laundry</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID Transaksi</th>
                    <th>Tanggal Transaksi</th>
                    <th>Customer</th>
                    <th>No_Telpon</th>
                    <th>Alamat</th>
                    <th>Status Order</th>
                    <th>Status Pembayaran</th>
                    <th>Jenis Pembayaran</th>
                    <th>Jenis Laundry</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <?php $no=1; ?>
                          @foreach ($transaksi as $t)
                          <tr>
                              <td>{{$no}}</td>
                              <td>{{$t->tanggal_transaksi}}</td>
                              <td>{{$t->customer}}</td>
                              <td>{{$t->no_telp}}</td>
                              <td>{{$t->alamat_customer}}</td>
                              <td class="align-middle text-center text-sm">
                                @if ($t->status_order == 'Done')
                                    <span class="btn btn-sm btn-success">Done</span>
                                @elseif
                                    <span class="btn btn-sm btn-warning">Delivery</span>    
                                @else
                                <span class="btn btn-sm btn-danger">Process</span>
                                @endif
                              </td>
                              <td class="align-middle text-center text-sm">
                                @if ($t->status_pembayaran == 'Cash')
                                    <span class="btn btn-sm btn-success">Cash</span>
                                @elseif
                                    <span class="btn btn-sm btn-success">GoPay</span>    
                                @else
                                <span class="btn btn-sm btn-success">Bank</span>
                                @endif
                              </td>
                              <td class="align-middle text-center text-sm">
                                @if ($t->jenis_laundry == 'Cuci/Setrika')
                                    <span class="btn btn-sm btn-success">Cuci Setrika</span>
                                @elseif
                                    <span class="btn btn-sm btn-success">Cuci</span>    
                                @else
                                <span class="btn btn-sm btn-success">Setrika</span>
                                @endif
                              </td>
                              <td class="align-middle text-center text-sm">
                                @if ($t->jenis_paket == 'Kiloan')
                                    <span class="btn btn-sm btn-success">Kiloan</span>   
                                @else
                                    <span class="btn btn-sm btn-success">Satuan</span>
                                @endif
                              </td>
                              <td class="align-middle text-center text-sm">
                                @if ($t->pengiriman == 'Kurir')
                                    <span class="btn btn-sm btn-success">Kurir</span>  
                                @else
                                <span class="btn btn-sm btn-success">Ambil Sendiri</span>
                                @endif
                              </td>
                              <td class="align-middle text-center text-sm">
                                    <form action="#" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <a class="btn btn-sm btn-{{$k->status == 'Active' ? 'primary' : 'danger'}}" data-id-update="{{$k->id}}" id="updateStatus">{{$k->status == 'Active' ? 'Non-Aktifkan' : 'Aktifkan'}}</a>
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