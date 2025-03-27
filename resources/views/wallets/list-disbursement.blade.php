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
                                @if (Auth::user()->isAdmin())
                                    <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->no_trx }}</td>
                                <td>{{ $item->bank->bank_name }} - {{ $item->bank->account_name }}</td>
                                <td>{{ $item->nominal }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->process_date }}</td>
                                <td>
                                    <a href="javascript:void(0)" onclick="detailDisbursement({{ $item->id }})"
                                        class="btn btn-sm btn-primary">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="detailDisbur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        x
                    </button>
                </div>
                <form id="processForm">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Bank</label>
                                    <input type="text" class="form-control" name="bank_name" id="bankName" readonly />
                                </div>
                                <div class="form-group">
                                    <label>Nomor Rekening</label>
                                    <input type="text" class="form-control" name="account_number" id="accountNumber"
                                        readonly />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nominal</label>
                                    <input type="text" class="form-control" name="nominal" id="nominal" readonly />
                                    <input type="text" class="form-control" name="trxNo" id="trxNo" hidden />
                                </div>
                                <div class="form-group">
                                    <label>Nama Pemilik</label>
                                    <input type="text" class="form-control" name="account_name" id="accountName"
                                        readonly />
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="PENDING">PENDING</option>
                                        <option value="PROCESS">PROCESS</option>
                                        <option value="CANCEL">CANCEL</option>
                                        <option value="SUCCESS">SUCCESS</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-block btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });

        function detailDisbursement(id) {
            $.get('/app/admin/disbursement/detail/' + id, function(data) {
                console.log(data);
                $('#trxNo').val(data.no_trx)
                $('#bankName').val(data.bank.bank_name)
                $('#accountNumber').val(data.bank.account_number)
                $('#accountName').val(data.bank.account_name)
                $('#nominal').val(data.nominal)
                $('#status').val(data.status)
                $('#detailDisbur').modal("toggle")
            })
        }

        $('#processForm').submit(function(e) {
            e.preventDefault();
            var noTrx = $("#trxNo").val();
            var status = $("#status").val();

            $.ajax({
                url: "{{route('admin.disbursement.process')}}",
                type: "POST",
                data: {
                    no_trx: noTrx,
                    status: status,
                    _token: "{{ csrf_token()}}"
                },
                success: function(res) {
                    if (res.status == 200) {
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: res.message,
                            showConfirmButton: false,
                            timer: 1500
                        });
                        location.reload();
                    }else{
                        Swal.fire({
                            position: "top-end",
                            icon: "error",
                            title: res.message,
                            showConfirmButton: false,
                            timer: 1500
                        });
                        // location.reload();
                    }
                }
            })
        })
    </script>
@endpush
