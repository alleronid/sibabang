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
                        <input type="hidden" name="company_id" id="companyId">
                        <div class="nav nav-pills active" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <ul class="nav-link active" id="v-pills-personal-tab" data-toggle="pill" data-target="#v-pills-personal"
                                type="button" role="tab" aria-controls="v-pills-personal" aria-selected="false">Data Personal</ul>
                            <ul class="nav-link" id="v-pills-company-tab" data-toggle="pill" data-target="#v-pills-company"
                                type="button" role="tab" aria-controls="v-pills-company" aria-selected="false">Data Perusahaan</ul>
                            <ul class="nav-link" id="v-pills-files-tab" data-toggle="pill" data-target="#v-pills-files"
                                type="button" role="tab" aria-controls="v-pills-files" aria-selected="false">Upload Berkas</ul>
                        </div>

                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-personal" role="tabpanel" aria-labelledby="v-pills-personal-tab">
                                @include('company.personal_data')
                            </div>
                            <div class="tab-pane fade" id="v-pills-company" role="tabpanel" aria-labelledby="v-pills-company-tab">
                                @include('company.company_data')
                            </div>
                            <div class="tab-pane fade" id="v-pills-files" role="tabpanel" aria-labelledby="v-pills-files-tab">
                                @include('company.company_file')
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="submitEdit" style="display: none;">Save changes</button>
                </div>
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
                let detail = data.detail
                $("#company_id").val(detail.id);
                $("#client_name").val(detail.client_name);
                $("#client_no_ktp").val(detail.client_no_ktp);
                $("#client_address").val(detail.client_address);
                $("#client_postcode").val(detail.client_postcode);
                $("#client_npwp").val(detail.client_npwp);
                $("#client_email").val(detail.client_email);
                $("#client_phone_number").val(detail.client_phone_number);
                $("#client_rt_rw").val(detail.client_rt_rw);
                $("#client_no_kk").val(detail.client_no_kk);

                // Populate province dropdown
                $("#propinsi").val(detail.client_province_id).trigger("change");

                // Populate Kota/Kabupaten dropdown
                if (detail.client_city_id) {
                    $("#kabKota").html(`<option value="${detail.client_city_id}" selected>${detail.kota_kabupaten?.nama_kab_kota ?? ''}</option>`);
                    //$("#kabKota").val(detail.client_city_id).trigger("change");
                }

                // Populate Kecamatan dropdown
                if (detail.client_kecamatan_id) {
                    $("#kecamatan").html(`<option value="${detail.client_kecamatan_id}" selected>${detail.kecamatan?.nama_kecamatan ?? ''}</option>`);
                }

                // Populate Kelurahan/Desa dropdown
                if (detail.client_kel_desa_id) {
                    $("#kelDesa").html(`<option value="${detail.client_kel_desa_id}" selected>${detail.desa_kelurahan?.nama_desa_kelurahan ?? ''}</option>`);
                }

                $('#detailCompany').modal("toggle")
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
