<div class="flex-row-fluid ml-lg-8">
        <!--end::Header-->
        <!--begin::Form-->
        <form action="{{route('company.update.personal')}}" method="POST" class="form" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="company_id" id="company_id" value="">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="client_name">Nama Lengkap</label>
                            <input type="text" class="form-control" id="client_name" name="client_name" value="{{$detail->client_name ?? ''}}"/>
                        </div>
                        <div class="form-group">
                            <label for="client_no_ktp">No KTP</label>
                            <input type="text" class="form-control" id="client_no_ktp" name="client_no_ktp" value="{{$detail->client_no_ktp ?? ''}}"/>
                        </div>
                        <div class="form-group">
                            <label for="client_address">Alamat Sesuai KTP</label>
                            <input type="text" class="form-control" id="client_address" name="client_address" value="{{$detail->client_address ?? ''}}"/>
                        </div>
                        <div class="form-group">
                            <label for="kabKota">Kota/Kabupaten</label>
                            <select class="form-control" name="client_city_id" id="kabKota">
                                @if (!empty($detail))
                                    <option value="{{$detail->client_city_id}}">{{$detail->kota_kabupaten?->nama_kab_kota ?? ''}}</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kelDesa">Kelurahan/Desa</label>
                            <select class="form-control" name="client_kel_desa_id" id="kelDesa">
                                @if (!empty($detail))
                                    <option value="{{$detail->client_kel_desa_id}}">{{$detail->desa_kelurahan->nama_desa_kelurahan ?? ''}}</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="client_postcode">Kode Pos</label>
                            <input type="number" class="form-control" id="client_postcode" name="client_postcode" value="{{$detail->client_postcode ?? ''}}"/>
                        </div>
                        <div class="form-group">
                            <label for="client_npwp">No NPWP <sup>*)</sup></label>
                            <input type="number" class="form-control" id="client_npwp" name="client_npwp" value="{{$detail->client_npwp ?? ''}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="client_email">Email</label>
                            <input type="text" class="form-control" id="client_email" name="client_email" value="{{$detail->client_email ?? ''}}"/>
                        </div>
                        <div class="form-group">
                            <label for="client_phone_number">No HP</label>
                            <input type="number" class="form-control" id="client_phone_number" name="client_phone_number" value="{{$detail->client_phone_number ?? ''}}"/>
                        </div>
                        <div class="form-group">
                            <label for="propinsi">Propinsi</label>
                            <select name="client_province_id" id="propinsi" class="form-control">
                                <option value="">Pilih Propinsi</option>
                                @foreach ($province as $p)
                                    <option value="{{$p->kode_provinsi}}" @if ($p->kode_provinsi == ($detail->client_province_id ?? ''))
                                        selected
                                    @endif>{{$p->nama_provinsi}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <select class="form-control" id="kecamatan" name="client_kecamatan_id">
                                @if (!empty($detail))
                                    <option value="{{$detail->client_kecamatan_id}}">{{$detail->kecamatan->nama_kecamatan ?? ''}}</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="client_rt_rw">RT/RW</label>
                            <input type="text" class="form-control" id="client_rt_rw" name="client_rt_rw" value="{{$detail->client_rt_rw ?? ''}}"/>
                        </div>
                        <div class="form-group">
                            <label for="client_no_kk">No KK <sup>*)</sup></label>
                            <input type="text" class="form-control" id="client_no_kk" name="client_no_kk" value="{{$detail->client_no_kk ?? ''}}"/>
                        </div>
                    </div>
                    <p><sup>*)</sup>Optional</p>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-block btn-success">Submit</button>
                </div>
            </div>
        </form>
        <!--end::Form-->
</div>

@push('addon-script')
<script>
    $('#propinsi').change(function(){
        var idPropinsi = $(this).val()
        if(idPropinsi){
            $.ajax({
                type: "GET",
                url : "/app/company/get-kota/"+idPropinsi,
                dataType : 'JSON',
                success:function(res){
                    if(res){
                        console.log(res);
                        //$('#kabKota').empty();
                        $("#kabKota").append('<option>---Pilih Kabupaten / Kota---</option>');
                        $.each(res,function(idx, item){

                            $("#kabKota").append('<option value="'+item.kode_kab_kota+'">'+item.nama_kab_kota+'</option>');
                        });
                    }else{
                        $('#kab_kota').empty();
                    }
                }
            })
        }else{
            $('#kabKota').empty();
        }
    })

    $('#kabKota').change(function(){
        var idKota = $(this).val()
        console.log(idKota);
        if(idKota){
            $.ajax({
                type: "GET",
                url : "/app/company/get-kecamatan/"+idKota,
                dataType : 'JSON',
                success:function(res){
                    if(res){
                        console.log(res);
                        //$('#kecamatan').empty();
                        $("#kecamatan").append('<option>---Pilih Kecamatan---</option>');
                        $.each(res,function(idx, item){

                            $("#kecamatan").append('<option value="'+item.kode_kecamatan+'">'+item.nama_kecamatan+'</option>');
                        });
                    }else{
                        $('#kecamatan').empty();
                    }
                }
            })
        }
    })

    $('#kecamatan').change(function(){
        var idKecamatan = $(this).val()
        if(idKecamatan){
            $.ajax({
                type: "GET",
                url : "/app/company/get-kelurahan/"+idKecamatan,
                dataType : 'JSON',
                success:function(res){
                    if(res){
                        //$('#kelDesa').empty();
                        $("#kelDesa").append('<option>---Pilih Kelurahan / Desa---</option>');
                        $.each(res,function(idx, item){
                            $("#kelDesa").append('<option value="'+item.kode_desa_kelurahan+'">'+item.nama_desa_kelurahan+'</option>');
                        });
                    }else{
                        $('#kelDesa').empty();
                    }
                }
            })
        }
    })
</script>
@endpush


