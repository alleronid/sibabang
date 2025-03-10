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
        <form action="{{route('company.update.company')}}" class="form" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">KTP Direktur</label>
                            <input type="text" class="form-control" name="merchant_name" value="{{$detail->merchant_name}}"/>
                        </div>
                        <div class="form-group">
                            <label for="">Buku Rekening</label>
                            <input type="text" class="form-control" name="merchant_address" value="{{$detail->merchant_address}}"/>
                        </div>
                        <div class="form-group">
                            <label for="">Foto Tempat Usaha</label>
                            <select class="form-control" name="merchant_city_id" id="merchantCity">
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">NPWP <sup>*)</sup></label>
                            <select class="form-control" name="merchant_kel_desa_id" id="merchantKelurahan"></select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">SIUP</label>
                            <input type="number" class="form-control" name="merchant_postcode" value="{{$detail->merchant_postcode}}"/>
                        </div>
                        <div class="form-group">
                            <label for="">Akta Pendirian</label>
                            <input type="text" class="form-control" name="bank_name" value="{{$detail->bank_name}}"/>
                        </div>
                        <div class="form-group">
                            <label for="">NIB</label>
                            <input type="text" class="form-control" name="bank_name" value="{{$detail->bank_name}}"/>
                        </div>
                        <div class="form-group">
                            <label for="">Other Document</label>
                            <input type="text" class="form-control" name="bank_name" value="{{$detail->bank_name}}"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-block btn-success">
                        Submit
                    </button>
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

