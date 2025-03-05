@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
               Merchant Payment
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mechant</th>
                                <th>Upload Date</th>
                                <th>File Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->merchant_name }}</td>
                                    <td>{{ $item->payment->process_date ?? '-' }}</td>
                                    <td>
                                        <a href="">File link</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="detailMerchant" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        x
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Merchant</label>
                                <input type="text" class="form-control" name="merchant_name" id="merchantName"
                                    readonly />
                            </div>
                            <div class="form-group">
                                <label>Environment</label>
                                <input type="text" class="form-control" name="env" id="env" readonly />
                            </div>
                            <div class="form-group">
                                <label>Api Key Sandbox</label>
                                <input type="text" class="form-control" name="api_key_sb" id="ApiKeySB" readonly />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" class="form-control" name="status" id="status" readonly />
                            </div>
                            <div class="form-group">
                                <label>Vendor</label>
                                <input type="text" class="form-control" name="vendor" id="vendor" readonly />
                            </div>
                            <div class="form-group">
                                <label>Callback Sandbox</label>
                                <input type="text" class="form-control" name="cb_key_sb" id="CbKeySB"
                                    readonly />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editMerchant" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Merchant</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        x
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Merchant</label>
                                    <input type="text" class="form-control" name="merchant_name" id="merchantNameEdit"
                                        required />
                                    <input type="text" class="form-control" name="merchant_id" id="merchantIdEdit" hidden />
                                </div>
                                <div class="form-group">
                                    <label>Environment</label>
                                    <input type="text" class="form-control" name="env" id="envEdit" readonly />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status" id="statusEdit">
                                        <option value="PENDING">PENDING</option>
                                        <option value="ACTIVE">ACTIVE</option>
                                        <option value="DEACTIVE">DEACTIVE</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Vendor</label>
                                    <input type="text" class="form-control" name="vendor" id="vendorEdit" readonly />
                                </div>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection
