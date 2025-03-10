@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Registered Companies</h2>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Perusahaan</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $company->fullname }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td>{{ $company->phone_number }}</td>
                                    <td>{{ $company->status }}</td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" onclick="getCompany({{ $company->company_id }})"
                                            class="btn btn-sm btn-primary">View</a>
                                        <button onclick="updateStatus({{ $company->company_id }}, 'APPROVED')"
                                                class="btn btn-sm btn-success">Approve</button>
                                        <button onclick="updateStatus({{ $company->company_id }}, 'REJECT')"
                                            class="btn btn-sm btn-danger">Reject</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="detailCompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                                           aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Perusahaan</h5>
                    <button type="button" class="btn btn-sm btn-warning" id="toggleEdit">Edit</button>
                </div>
                <div class="modal-body">
                    <form id="editCompanyForm">
                        <input type="hidden" name="company_id" id="companyId">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"><label>Company Name</label><input type="text" class="form-control" id="companyName" readonly /></div>
                            <div class="form-group"><label>Email</label><input type="text" class="form-control" id="email" readonly /></div>
                            <div class="form-group"><label>Phone Number</label><input type="text" class="form-control" id="phone_number" readonly /></div>
                            <div class="form-group"><label>Merchant Name</label><input type="text" class="form-control" id="merchant_name" readonly /></div>
                            <div class="form-group"><label>Nationality ID</label><input type="text" class="form-control" id="nationality_id" readonly /></div>
                            <div class="form-group"><label>Tax Number</label><input type="text" class="form-control" id="tax_number" readonly /></div>
                            <div class="form-group"><label>Business Type</label><input type="text" class="form-control" id="business_type" readonly /></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label>Address</label><textarea class="form-control" id="address" readonly></textarea></div>
                            <div class="form-group"><label>NIB</label><input type="text" class="form-control" id="nib" readonly /></div>
                            <div class="form-group"><label>SIUP</label><input type="text" class="form-control" id="siup" readonly /></div>
                            <div class="form-group"><label>AKTA</label><input type="text" class="form-control" id="akta" readonly /></div>
                            <div class="form-group"><label>Status</label><input type="text" class="form-control" id="status" readonly /></div>
                            <div class="form-group"><label>Referral</label><input type="text" class="form-control" id="referall" readonly /></div>
                            <div class="form-group"><label>Applicant Date</label><input type="text" class="form-control" id="applicant_date" readonly /></div>
                            <div class="form-group">
                                <label>KTP </label>
                                <div>
                                    <img id="fileKtpPreview" src="" alt="KTP Image" class="img-fluid rounded" style="max-width: 200px; display: none;">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="submitEdit" style="display: none;">Save changes</button>
                </div>>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script>
        $('#toggleEdit').click(function() {
            var isReadOnly = $("#companyName").prop("readonly");

            // Toggle all text inputs
            $("#detailCompany input, #detailCompany textarea, #detailCompany select").each(function() {
                if ($(this).attr("name") !== "_token") {
                    $(this).prop("readonly", isReadOnly);
                    $(this).prop("disabled", isReadOnly);
                }
            });

            $('#submitEdit').toggle();
        });

        $('#editCompanyForm').submit(function(e) {
            e.preventDefault();

            var formData = {
                company_id: $('#companyId').val(),
                nationality_id: $('#nationalityId').val(),
                tax_number: $('#taxNumber').val(),
                fullname: $('#companyName').val(),
                email: $('#companyEmail').val(),
                phone_number: $('#phoneNumber').val(),
                merchant_name: $('#merchantName').val(),
                business_type: $('#businessType').val(),
                address: $('#companyAddress').val(),
                nib: $('#nib').val(),
                siup: $('#siup').val(),
                akta: $('#akta').val(),
                referall: $('#referall').val(),
                password: $('#password').val(),
                status: $('#companyStatus').val(),
                file_ktp: $('#fileKtp').val(),
                applicant_date: $('#applicantDate').val(),
                process_date: $('#processDate').val(),
                process_by: $('#processBy').val(),
                _token: "{{ csrf_token() }}"
            };

            $.ajax({
                url: "{{ route('admin.company.update') }}",
                type: "POST",
                data: formData,
                success: function(res) {
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: res.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    location.reload();
                },
            });
        });

        function getCompany(id) {
            $.get('/app/admin/company/show/' + id, function(data) {
                console.log(data);
                $("#companyName").val(data.merchant_name)
                $("#email").val(data.email)
                $("#merchantName").val(data.merchant_name)
                $("#phoneNumber").val(data.phone_number)
                $('#status').val(data.status)
                $('#detailCompany').modal("toggle")

                $("#fullname").val(data.fullname);
                $("#email").val(data.email);
                $("#phone_number").val(data.phone_number);
                $("#merchant_name").val(data.merchant_name);
                $("#nationality_id").val(data.nationality_id);
                $("#tax_number").val(data.tax_number);
                $("#business_type").val(data.business_type);
                $("#address").val(data.address);
                $("#nib").val(data.nib);
                $("#siup").val(data.siup);
                $("#akta").val(data.akta);
                $("#status").val(data.status);
                $("#referall").val(data.referall);
                $("#applicant_date").val(data.applicant_date);

                // Display KTP image if available
                if (data.file_ktp) {
                    $('#fileKtpPreview').attr("src", "/storage/" + data.file_ktp).show();
                } else {
                    $('#fileKtpPreview').hide();
                }
            })
        }

        function updateStatus(id, status) {
            $.ajax({
                url: "{{route('admin.company.update')}}",
                type: "POST",
                data: {
                    company_id: id,
                    status: status,
                    _token: "{{ csrf_token() }}"
                },
                success: function(res) {
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Status updated to " + status,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    location.reload()
                },
            })
        }

    </script>
@endpush
