<div class="flex-row-fluid ml-lg-8">
    <!--begin::Card-->
        <!--begin::Form-->
        <form action="{{route('company.update.company')}}" class="form" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nama Perusahaan</label>
                            <input type="text" class="form-control" name="merchant_name" id="merchant_name" value="{{$detail->merchant_name ?? ''}}"/>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Sesuai KTP</label>
                            <input type="text" class="form-control" name="merchant_address" id="merchant_address" value="{{$detail->merchant_address ?? ''}}"/>
                        </div>
                        <div class="form-group">
                            <label for="">Kota/Kabupaten</label>
                            <select class="form-control" name="merchant_city_id" id="merchant_city_id">
                                @if (!empty($detail))
                                <option value="{{$detail->merchant_city_id}}">{{$detail->merchant_kota?->nama_kab_kota ?? ''}}</option>
                            @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Kelurahan/Desa</label>
                            <select class="form-control" name="merchant_kel_desa_id" id="merchant_kel_desa_id" >
                                @if (!empty($detail))
                                <option value="{{$detail->merchant_kel_desa_id}}">{{$detail->merchant_kelurahan?->nama_desa_kelurahan ?? ''}}</option>
                            @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Kode Pos</label>
                            <input type="number" class="form-control" name="merchant_postcode" id="merchant_postcode" value="{{$detail->merchant_postcode ?? ''}}"/>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Bank</label>
                            <select name="bank_id" id="bank_id" class="form-control" >
                                @foreach ($banks as $b)
                                <option value="{{ $b->id }}" @if ($detail->bank_name === $b->bank_name)
                                    selected
                                @endif
                                    >{{ $b->bank_name }}</option>
                             @endforeach
                            </select>
                            <input type="text" class="form-control" name="bank_name" id="bank_name" value="{{$detail->bank_name}}" hidden/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Jumlah Cabang Merchant</label>
                            <input type="number" class="form-control" name="merchant_amount" id="merchant_amount" value="{{$detail->merchant_amount ?? ''}}"/>
                        </div>
                        <div class="form-group">
                            <label for="">Propinsi</label>
                            <select class="form-control" name="merchant_province_id" id="merchant_province_id" >
                                <option value="">Pilih Propinsi</option>
                                @foreach ($province as $p)
                                    <option value="{{$p->kode_provinsi}}" @if (!empty($detail) && $p->kode_provinsi == $detail->merchant_province_id)
                                        selected
                                    @endif>{{$p->nama_provinsi}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <select class="form-control" name="merchant_kecamatan_id" id="merchant_kecamatan_id" >
                                @if (!empty($detail))
                                <option value="{{$detail->merchant_kecamatan_id}}">{{$detail->merchant_kecamatan->nama_kecamatan ?? ''}}</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">RT/RW</label>
                            <input type="text" class="form-control" name="merchant_rt_rw" id="merchant_rt_rw" value="{{$detail->merchant_rt_rw ?? ''}}"/>
                        </div>
                        <div class="form-group">
                            <label for="">No Rekening</label>
                            <input type="number" class="form-control" name="account_number" id="account_number" value="{{$detail->account_number ?? ''}}"/>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Pemilik Rekening</label>
                            <input type="text" class="form-control" name="account_name" id="account_name" value="{{$detail->account_name ?? ''}}"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-sm btn-success">
                        Submit
                    </button>
                </div>
            </div>
        </form>
        <!--end::Form-->
</div>


@push('addon-script')
<script>
    $('#merchant_province_id').change(function(){
        var idPropinsi = $(this).val()
        if(idPropinsi){
            $.ajax({
                type: "GET",
                url : "/app/company/get-kota/"+idPropinsi,
                dataType : 'JSON',
                success:function(res){
                    if(res){
                        console.log(res);
                        $('#merchant_city_id').empty();
                        $("#merchant_city_id").append('<option>---Pilih Kabupaten / Kota---</option>');
                        $.each(res,function(idx, item){
                            $("#merchant_city_id").append('<option value="'+item.kode_kab_kota+'">'+item.nama_kab_kota+'</option>');
                        });
                    }else{
                        $('#merchant_city_id').empty();
                    }
                }
            })
        }else{
            $('#kabKota').empty();
        }
    })

    $('#merchant_city_id').change(function(){
        var idKota = $(this).val()
        if(idKota){
            $.ajax({
                type: "GET",
                url : "/app/company/get-kecamatan/"+idKota,
                dataType : 'JSON',
                success:function(res){
                    if(res){
                        console.log(res);
                        $('#merchant_kecamatan_id').empty();
                        $("#merchant_kecamatan_id").append('<option>---Pilih Kecamatan---</option>');
                        $.each(res,function(idx, item){
                            $("#merchant_kecamatan_id").append('<option value="'+item.kode_kecamatan+'">'+item.nama_kecamatan+'</option>');
                        });
                    }else{
                        $('#merchant_kecamatan_id').empty();
                    }
                }
            })
        }
    })

    $('#merchant_kecamatan_id').change(function(){
        var idKecamatan = $(this).val()
        if(idKecamatan){
            $.ajax({
                type: "GET",
                url : "/app/company/get-kelurahan/"+idKecamatan,
                dataType : 'JSON',
                success:function(res){
                    if(res){
                        $('#merchant_kel_desa_id').empty();
                        $("#merchant_kel_desa_id").append('<option>---Pilih Kelurahan / Desa---</option>');
                        $.each(res,function(idx, item){
                            $("#merchant_kel_desa_id").append('<option value="'+item.kode_desa_kelurahan+'">'+item.nama_desa_kelurahan+'</option>');
                        });
                    }else{
                        $('#merchant_kel_desa_id').empty();
                    }
                }
            })
        }
    })

    $('#bank_id').change(function() {
            var id = $(this).val()
            if (id) {
                $.ajax({
                    type: "GET",
                    url: "/app/merchant-bank/get-bank/"+id,
                    dataType: 'JSON',
                    success: function(res) {
                        $('#bank_name').val(res.bank_name)
                    }
                })
            }
        })
</script>
@endpush

