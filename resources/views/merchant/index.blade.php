@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List Merchants</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">

            @if(Auth::user()->isAdmin())
                <div class="row">
                    <div class="form-group">
                        <label for="filterCompany">Filter by Company:</label>
                        <select id="filterCompany" class="form-control">
                            <option value="">All Companies</option>
                            @foreach ($companies as $company)
                                <option value="{{ $company->company_id }}">{{ $company->merchant_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            @endif

                <div class="text-right">
                    <a href="{{ route('merchant.create') }}" class="btn btn-sm btn-primary mb-3">
                        <i class="flaticon-plus"></i>
                        Add Merchant
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mechant</th>
                                <th>Status</th>
                                <th>Nama Perusahaan</th>
                                <th>Environment</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->merchant_name }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->company->merchant_name }}</td>
                                    <td>{{ $item->env }}</td>
                                    <td>
                                        <a href="javascript:void(0)" onclick="editMerchant({{ $item->merchant_id }})"
                                            class="btn btn-sm btn-primary">Edit</a>
                                        <a href="javascript:void(0)" onclick="getMerchant({{ $item->merchant_id }})"
                                            class="btn btn-sm btn-primary">View</a>
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
                            <div class="form-group">
                                <label for="">Api Key Production</label>
                                <input type="text" class="form-control" name="api_key_prod" id="ApiKeyProd" readonly />
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
                                <label>Secret Token</label>
                                <input type="text" class="form-control" name="secret_token" id="secretToken"
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
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Vendor</label>
                                    <input type="text" class="form-control" name="vendor" id="vendorEdit" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="address" id="addressEdit">
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

@push('addon-script')
    <script>
        $(document).ready(function() {
            var table = $('#dataTable').DataTable();
            var isAdmin = @json(Auth::user()->isAdmin());

            if (isAdmin){
                $('#filterCompany').change(function() {
                    var selectedCompany = $('#filterCompany :selected').text();
                    console.log(selectedCompany)

                    table.column(1).search(selectedCompany != 'All Companies' ? '^' + selectedCompany + '$' : '', true, false).draw();
                });
            }
        });
        function getMerchant(id) {
            $.get('/app/merchant/show/' + id, function(data) {
                $("#merchantName").val(data.merchant_name)
                $("#env").val(data.env)
                $('#status').val(data.status)
                $('#vendor').val(data.vendor.vendor_name)
                $('#ApiKeySB').val(data.api_key_sb)
                $('#ApiKeyProd').val(data.api_key_prod)
                $('#secretToken').val(data.token)
                $('#detailMerchant').modal("toggle")
            })
        }

        function editMerchant(id) {
            $.get('/app/merchant/show/' + id, function(data) {
                $("#merchantNameEdit").val(data.merchant_name)
                $("#merchantIdEdit").val(data.merchant_id)
                $('#vendorEdit').val(data.vendor.vendor_name)
                $('#addressEdit').val(data.address)
                $('#editMerchant').modal("toggle")
            })
        }

        $('#editForm').submit(function(e) {
            e.preventDefault();
            var id = $('#merchantIdEdit').val()
            var name = $('#merchantNameEdit').val()
            var status  = $('#statusEdit').val()
            var address = $('#addressEdit').val()

            $.ajax({
                url: "{{route('merchant.update')}}",
                type: "POST",
                data: {
                    merchant_id : id,
                    merchant_name: name,
                    status : status,
                    address : address,
                    _token: "{{ csrf_token() }}"
                },
                success: function(res) {
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: res.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    location.reload()
                },
            })

        })
    </script>
@endpush
