<div class="flex-row-fluid ml-lg-8">
    <!--begin::Card-->
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-header py-3">
            <div class="card-title align-items-start flex-column">
                <h3 class="card-label font-weight-bolder text-dark">Kelengkapan Data Perusahaan</h3>
                <span class="text-muted font-weight-bold font-size-sm mt-1">Harap lengkapi data</span>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Form-->
        <form action="{{route('company.update.file')}}" class="form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        @if (empty($detail->file_ktp))
                        <div class="form-group">
                            <label for="">KTP Direktur</label>
                            <input type="file" class="form-control" name="file_ktp" required/>
                        </div>
                        @else
                        <div class="form-group">
                            <a href="{{asset('storage/'. $data->surat_permohonan)}}" class="btn btn-sm btn-primary rounded-lg ml-2" target="_blank">
                                <i class="flaticon-file"></i>
                                KTP</a>
                        </div>
                        @endif
                        @if (empty($detail->file_rekening))
                        <div class="form-group">
                            <label for="">Buku Rekening</label>
                            <input type="file" class="form-control" name="file_rekening" required/>
                        </div>
                        @else
                        <div class="form-group">
                            <a href="{{asset('storage/'. $data->file_rekening)}}" class="btn btn-sm btn-primary rounded-lg ml-2" target="_blank">
                                <i class="flaticon-file"></i>
                                Buku Rekening</a>
                        </div>
                        @endif
                        @if (empty($detail->file_rekening))
                        <div class="form-group">
                            <label for="">Foto Tempat Usaha</label>
                            <input type="file" class="form-control" name="file_tempat_usaha" required />
                        </div>
                        @else
                        <div class="form-group">
                            <a href="{{asset('storage/'. $data->file_rekening)}}" class="btn btn-sm btn-primary rounded-lg ml-2" target="_blank">
                                <i class="flaticon-file"></i>
                                Foto Tempat Usaha</a>
                        </div>
                        @endif
                        @if (empty($detail->file_npwp))
                        <div class="form-group">
                            <label for="">NPWP <sup>*)</sup></label>
                            <input type="file" class="form-control" name="file_npwp" />
                        </div>
                        @else
                        <div class="form-group">
                            <a href="{{asset('storage/'. $data->file_npwp)}}" class="btn btn-sm btn-primary rounded-lg ml-2" target="_blank">
                                <i class="flaticon-file"></i>
                                NPWP</a>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        @if (empty($detail->file_siup))
                        <div class="form-group">
                            <label for="">SIUP</label>
                            <input type="file" class="form-control" name="file_siup" required/>
                        </div>
                        @else
                        <div class="form-group">
                            <a href="{{asset('storage/'. $data->file_siup)}}" class="btn btn-sm btn-primary rounded-lg ml-2" target="_blank">
                                <i class="flaticon-file"></i>
                                SIUP</a>
                        </div>
                        @endif
                        @if (empty($detail->file_nib))
                        <div class="form-group">
                            <label for="">NIB</label>
                            <input type="file" class="form-control" name="file_nib" required/>
                        </div>
                        @else
                        <div class="form-group">
                            <a href="{{asset('storage/'. $data->file_nib)}}" class="btn btn-sm btn-primary rounded-lg ml-2" target="_blank">
                                <i class="flaticon-file"></i>
                                NIB</a>
                        </div>
                        @endif
                        @if (empty($detail->file_akta_pendirian))
                        <div class="form-group">
                            <label for="">Akta Pendirian</label>
                            <input type="file" class="form-control" name="file_akta_pendirian" required />
                        </div>
                        @else
                        <div class="form-group">
                            <a href="{{asset('storage/'. $data->file_akta_pendirian)}}" class="btn btn-sm btn-primary rounded-lg ml-2" target="_blank">
                                <i class="flaticon-file"></i>
                                Akta Pendirian</a>
                        </div>
                        @endif
                        @if (empty($detail->file_akta_perubahan))
                        <div class="form-group">
                            <label for="">Dokumen Lainnya <sup>*)</sup></label>
                            <input type="file" class="form-control" name="file_akta_perubahan" />
                        </div>
                        @else
                        <div class="form-group">
                            <a href="{{asset('storage/'. $data->file_akta_perubahan)}}" class="btn btn-sm btn-primary rounded-lg ml-2" target="_blank">
                                <i class="flaticon-file"></i>
                                Akta Perubahan</a>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    @if (empty($detail->file_ktp))
                    <button type="submit" class="btn btn-block btn-success">
                        Submit
                    </button>
                    @else
                    <a href="" class="btn btn-block btn-primary">Edit</a>
                    @endif
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Card-->
</div>


@push('addon-script')
<script>
    $('#merchantProv').change(function(){
        var idPropinsi = $(this).val()
        if(idPropinsi){
            $.ajax({
                type: "GET",
                url : "/app/company/get-kota/"+idPropinsi,
                dataType : 'JSON',
                success:function(res){
                    if(res){
                        console.log(res);
                        $('#merchantCity').empty();
                        $("#merchantCity").append('<option>---Pilih Kabupaten / Kota---</option>');
                        $.each(res,function(idx, item){
                            $("#merchantCity").append('<option value="'+item.kode_kab_kota+'">'+item.nama_kab_kota+'</option>');
                        });
                    }else{
                        $('#merchantCity').empty();
                    }
                }
            })
        }else{
            $('#kabKota').empty();
        }
    })

    $('#merchantCity').change(function(){
        var idKota = $(this).val()
        if(idKota){
            $.ajax({
                type: "GET",
                url : "/app/company/get-kecamatan/"+idKota,
                dataType : 'JSON',
                success:function(res){
                    if(res){
                        console.log(res);
                        $('#merchantKecamatan').empty();
                        $("#merchantKecamatan").append('<option>---Pilih Kecamatan---</option>');
                        $.each(res,function(idx, item){
                            $("#merchantKecamatan").append('<option value="'+item.kode_kecamatan+'">'+item.nama_kecamatan+'</option>');
                        });
                    }else{
                        $('#merchantKecamatan').empty();
                    }
                }
            })
        }
    })

    $('#merchantKecamatan').change(function(){
        var idKecamatan = $(this).val()
        if(idKecamatan){
            $.ajax({
                type: "GET",
                url : "/app/company/get-kelurahan/"+idKecamatan,
                dataType : 'JSON',
                success:function(res){
                    if(res){
                        $('#merchantKelurahan').empty();
                        $("#merchantKelurahan").append('<option>---Pilih Kelurahan / Desa---</option>');
                        $.each(res,function(idx, item){
                            $("#merchantKelurahan").append('<option value="'+item.kode_desa_kelurahan+'">'+item.nama_desa_kelurahan+'</option>');
                        });
                    }else{
                        $('#merchantKelurahan').empty();
                    }
                }
            })
        }
    })
</script>
@endpush

