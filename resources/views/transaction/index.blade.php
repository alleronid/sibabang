@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('transaction.create') }}" class="btn btn-sm btn-primary">
                    <i class="flaticon-plus"></i>
                    Buat Transaksi
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Kode Transaksi</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th>Tanggal Transaksi</th>
                                <th>Tanggal Bayar</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->trx_id}}</td>
                                <td>{{$item->amount}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->payed_at}}</td>
                                <td>
                                   <div class="dropdown open">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                                Dropdown
                                            </button>
                                    <div class="dropdown-menu" aria-labelledby="triggerId">
                                        <a class="dropdown-item" href="{{route('transaction.detail', $item->trx_id)}}">Payment Link</a>
                                        <a class="dropdown-item" href="#">Detail</a>
                                    </div>
                                   </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
