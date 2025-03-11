@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4>List Wallets</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mechant</th>
                                <th>Pending Amount</th>
                                <th>Avail Amount</th>
                                <th>Total Amount</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->merchant_name}}</td>
                                    <td>Rp. {{$item->pending_balance}}</td>
                                    <td>Rp. {{$item->avail_balance}}</td>
                                    <td>Rp. {{$item->total_balance}}</td>
                                    <td class="text-center">
                                        <a href="{{route('wallet.disbursement', base64_encode($item->merchant_id))}}" class="btn btn-sm btn-primary">Request Disbursement</a>
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
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable();
        });
    </script>
@endpush

