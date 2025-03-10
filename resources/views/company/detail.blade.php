<div class="flex-row-fluid ml-lg-8">
    <!--begin::Card-->
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-header py-3">
            <div class="card-title align-items-start flex-column">
                <h3 class="card-label font-weight-bolder text-dark">Status Data Perusahaan</h3>
                <span class="text-muted font-weight-bold font-size-sm mt-1">Harap lengkapi data</span>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Form-->
        <div class="card-body">
            <div class="row">
                @if ($data->status == 'APPROVED')
                    <div class="col-xl-12">
                        <!--begin::Engage Widget 1-->
                        <div class="card card-custom card-stretch gutter-b">
                            <div class="card-body d-flex p-0">
                                <div class="flex-grow-1 p-8 card-rounded bgi-no-repeat d-flex align-items-center"
                                    style="background-color: #FFF4DE; background-position: left bottom; background-size: auto 100%; background-image: url({{ asset('assets/media/svg/humans/custom-2.svg') }})">
                                    <div class="row">
                                        <div class="col-12 col-xl-5"></div>
                                        <div class="col-12 col-xl-7">
                                            <h4 class="text-danger font-weight-bolder">Stasus Permohonan Aplikasi</h4>
                                            <p class="text-dark-50 my-5 font-size-xl font-weight-bold">Data anda sudah
                                                terverifikasi, anda dapat menggunakan server production.</p>
                                            <a href="#" class="btn btn-danger font-weight-bold py-2 px-6">Lihat
                                                Perjanjian Kerja Sama (PKS)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Engage Widget 1-->
                    </div>
                @else
                    <div class="col-xl-12">
                        <!--begin::Engage Widget 1-->
                        <div class="card card-custom card-stretch gutter-b">
                            <div class="card-body d-flex p-0">
                                <div class="flex-grow-1 p-8 card-rounded bgi-no-repeat d-flex align-items-center"
                                    style="background-color: #FFF4DE; background-position: left bottom; background-size: auto 100%; background-image: url({{ asset('assets/media/svg/humans/custom-2.svg') }})">
                                    <div class="row">
                                        <div class="col-12 col-xl-5"></div>
                                        <div class="col-12 col-xl-7">
                                            <h4 class="text-danger font-weight-bolder">Stasus Permohonan Aplikasi</h4>
                                            <p class="text-dark-50 my-5 font-size-xl font-weight-bold">Lengkapi semua
                                                data personal, perusahaan dan berkas untuk mendapatkan server
                                                production.</p>
                                            @if (
                                                $data->client_name &&
                                                    $data->client_email &&
                                                    $data->client_no_ktp &&
                                                    $data->client_phone_number &&
                                                    $data->client_address &&
                                                    $data->client_province_id &&
                                                    $data->client_city_id &&
                                                    $data->client_kecamatan_id &&
                                                    $data->client_kel_desa_id &&
                                                    $data->client_rt_rw &&
                                                    $data->client_postcode &&
                                                    $data->client_no_kk &&
                                                    $data->client_npwp &&
                                                    $data->merchant_name &&
                                                    $data->merchant_amount &&
                                                    $data->merchant_address &&
                                                    $data->merchant_province_id &&
                                                    $data->merchant_city_id &&
                                                    $data->merchant_kecamatan_id &&
                                                    $data->merchant_kel_desa_id &&
                                                    $data->merchant_rt_rw &&
                                                    $data->merchant_postcode &&
                                                    $data->bank_name &&
                                                    $data->account_number &&
                                                    $data->account_name &&
                                                    $data->file_ktp &&
                                                    $data->file_rekening &&
                                                    $data->file_tempat_usaha &&
                                                    $data->file_npwp &&
                                                    $data->file_siup &&
                                                    $data->file_nib &&
                                                    $data->file_akta_pendirian &&
                                                    $data->file_akta_perubahan &&
                                                    $data->company_id &&
                                                    $data->submit_date)
                                                <a href="#" class="btn btn-danger font-weight-bold py-2 px-6">
                                                    Submit Berkas</a>
                                            @else
                                                <p>Ada data yang masih kosong</p>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Engage Widget 1-->
                    </div>
                @endif
            </div>
        </div>
        <!--end::Form-->
    </div>
    <!--end::Card-->
</div>
