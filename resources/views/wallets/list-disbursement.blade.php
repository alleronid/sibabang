@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4>Report Disbursement</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Disbursement</th>
                                <th>Merchant Bank</th>
                                <th>Nominal</th>
                                <th>Status</th>
                                <th>Process Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->no_trx}}</td>
                                <td>{{$item->bank->bank_name}} - {{$item->bank->account_name}}</td>
                                <td>{{$item->nominal}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->process_date}}</td>
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

