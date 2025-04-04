<div class="flex-row-fluid ml-lg-8">
        <!--begin::Form-->
        <form action="{{route('company.update.file')}}" class="form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" id="preview_file_ktp">
                            @if (empty($detail->file_ktp))
                                <label for="">KTP Direktur</label>
                                <input type="file" class="form-control" name="file_ktp" required/>
                            @else
                                <a href="{{asset('storage/'. $detail->file_ktp)}}" class="btn btn-sm btn-primary rounded-lg ml-2" target="_blank">
                                    <i class="flaticon-file"></i> KTP
                                </a>
                            @endif
                        </div>

                        <div class="form-group" id="preview_file_rekening">
                            @if (empty($detail->file_rekening))
                                <label for="">Buku Rekening</label>
                                <input type="file" class="form-control" name="file_rekening" required/>
                            @else
                                <a href="{{asset('storage/'. $detail->file_rekening)}}" class="btn btn-sm btn-primary rounded-lg ml-2" target="_blank">
                                    <i class="flaticon-file"></i> Buku Rekening
                                </a>
                            @endif
                        </div>

                        <div class="form-group" id="preview_file_tempat_usaha">
                            @if (empty($detail->file_tempat_usaha))
                                <label for="">Foto Tempat Usaha</label>
                                <input type="file" class="form-control" name="file_tempat_usaha" required />
                            @else
                                <a href="{{asset('storage/'. $detail->file_tempat_usaha)}}" class="btn btn-sm btn-primary rounded-lg ml-2" target="_blank">
                                    <i class="flaticon-file"></i> Foto Tempat Usaha
                                </a>
                            @endif
                        </div>

                        <div class="form-group" id="preview_file_npwp">
                            @if (empty($detail->file_npwp))
                                <label for="">NPWP <sup>*)</sup></label>
                                <input type="file" class="form-control" name="file_npwp" />
                            @else
                                <a href="{{asset('storage/'. $detail->file_npwp)}}" class="btn btn-sm btn-primary rounded-lg ml-2" target="_blank">
                                    <i class="flaticon-file"></i> NPWP
                                </a>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group" id="preview_file_siup">
                            @if (empty($detail->file_siup))
                                <label for="">SIUP</label>
                                <input type="file" class="form-control" name="file_siup" required/>
                            @else
                                <a href="{{asset('storage/'. $detail->file_siup)}}" class="btn btn-sm btn-primary rounded-lg ml-2" target="_blank">
                                    <i class="flaticon-file"></i> SIUP
                                </a>
                            @endif
                        </div>

                        <div class="form-group" id="preview_file_nib">
                            @if (empty($detail->file_nib))
                                <label for="">NIB</label>
                                <input type="file" class="form-control" name="file_nib" required/>
                            @else
                                <a href="{{asset('storage/'. $detail->file_nib)}}" class="btn btn-sm btn-primary rounded-lg ml-2" target="_blank">
                                    <i class="flaticon-file"></i> NIB
                                </a>
                            @endif
                        </div>

                        <div class="form-group" id="preview_file_akta_pendirian">
                            @if (empty($detail->file_akta_pendirian))
                                <label for="">Akta Pendirian</label>
                                <input type="file" class="form-control" name="file_akta_pendirian" required />
                            @else
                                <a href="{{asset('storage/'. $detail->file_akta_pendirian)}}" class="btn btn-sm btn-primary rounded-lg ml-2" target="_blank">
                                    <i class="flaticon-file"></i> Akta Pendirian
                                </a>
                            @endif
                        </div>

                        <div class="form-group" id="preview_file_akta_perubahan">
                            @if (empty($detail->file_akta_perubahan))
                                <label for="">Dokumen Lainnya <sup>*)</sup></label>
                                <input type="file" class="form-control" name="file_akta_perubahan" />
                            @else
                                <a href="{{asset('storage/'. $detail->file_akta_perubahan)}}" class="btn btn-sm btn-primary rounded-lg ml-2" target="_blank">
                                    <i class="flaticon-file"></i> Akta Perubahan
                                </a>
                            @endif
                        </div>
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

