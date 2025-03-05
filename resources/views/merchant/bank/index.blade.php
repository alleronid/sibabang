@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="font-weight">Merchant Bank</h5>
                </div>
                <div class="text-right">
                    <a href="{{ route('merchant-bank.create') }}" class="btn btn-sm btn-primary">
                        <i class="flaticon-plus"></i>
                        Tambah Merchant Bank
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Merchant</th>
                                <th>Nama Bank</th>
                                <th>No Rekening</th>
                                <th>Nama Pemilik</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                  <td>{{$loop->iteration}}</td>
                                  <td>{{$item->merchant->merchant_name}}</td>
                                  <td>{{$item->bank_name}}</td>
                                  <td>{{$item->account_number}}</td>
                                  <td>{{$item->account_name}}</td>
                                  <td>{{$item->is_active == 0 ? 'PENDING' : 'ACTIVE'}}</td>
                                  <td>
                                    <a href="{{route('merchant-bank.edit', $item->id_hash)}}" class="btn btn-sm btn-primary">Edit</a>
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

@push('addon-script')
@endpush
