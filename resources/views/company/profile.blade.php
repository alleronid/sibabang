@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!--begin::Profile Account Information-->
    <div class="d-flex flex-row">
        <!--begin::Aside-->
        <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
            <!--begin::Profile Card-->
            <div class="card card-custom card-stretch">
                <!--begin::Body-->
                <div class="card-body pt-4">
                    <!--begin::User-->
                    <div class="d-flex align-items-center">
                        <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                            <div class="symbol-label" style="background-image:url('{{asset('assets/media/users/300_21.jpg')}}')"></div>
                            <i class="symbol-badge bg-success"></i>
                        </div>
                        <div>
                            <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">{{$data->fullname}}</a>
                            <div class="text-muted">Application Developer</div>
                            <div class="mt-2">
                                {{-- <a href="#" class="btn btn-sm btn-primary font-weight-bold mr-2 py-2 px-3 px-xxl-5 my-1">Chat</a> --}}
                                {{-- <a href="#" class="btn btn-sm btn-success font-weight-bold py-2 px-3 px-xxl-5 my-1">Follow</a> --}}
                            </div>
                        </div>
                    </div>
                    <!--end::User-->
                    <!--begin::Contact-->
                    <div class="py-9">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="font-weight-bold mr-2">Email:</span>
                            <a href="#" class="text-muted text-hover-primary">{{$data->email}}</a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="font-weight-bold mr-2">Phone:</span>
                            <span class="text-muted">{{$data->phone_number}}</span>
                        </div>
                    </div>
                    <!--end::Contact-->
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <ul class="nav-link active" id="v-pills-home-tab" data-toggle="pill" data-target="#v-pills-home"
                        type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</ul>
                        <ul class="nav-link" id="v-pills-personal-tab" data-toggle="pill" data-target="#v-pills-personal"
                        type="button" role="tab" aria-controls="v-pills-personal" aria-selected="false">Data Personal</ul>
                        <ul class="nav-link" id="v-pills-company-tab" data-toggle="pill" data-target="#v-pills-company"
                        type="button" role="tab" aria-controls="v-pills-company" aria-selected="false">Data Perusahaan</ul>
                        <ul class="nav-link" id="v-pills-files-tab" data-toggle="pill" data-target="#v-pills-files"
                        type="button" role="tab" aria-controls="v-pills-files" aria-selected="false">Upload Berkas</ul>
                        <ul class="nav-link" id="v-pills-settings-tab" data-toggle="pill" data-target="#v-pills-settings"
                        type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</ul>
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Profile Card-->
        </div>
        <!--end::Aside-->
        <!--begin::Content-->
        <div class="flex-row-fluid ml-lg-8">
            <!--begin::Card-->
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    ....
                </div>
                <div class="tab-pane fade" id="v-pills-personal" role="tabpanel" aria-labelledby="v-pills-personal-tab">
                    @include('company.personal_data')
                </div>
                <div class="tab-pane fade" id="v-pills-company" role="tabpanel" aria-labelledby="v-pills-company-tab">
                    @include('company.company_data')
                </div>
                <div class="tab-pane fade" id="v-pills-files" role="tabpanel" aria-labelledby="v-pills-files-tab">
                    @include('company.company_file')
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
              </div>
            <!--end::Card-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Profile Account Information-->
</div>
@endsection
