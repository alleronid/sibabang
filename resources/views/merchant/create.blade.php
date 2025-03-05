@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="font-weight">Merchant</h5>
        </div>
        <div class="card-body">
            <form action="{{route('merchant.save')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="control-label">Perusahaan</label>
                    <select name="company_id" class="form-control">
                        <option value="{{Auth::user()->company_id}}">{{Auth::user()->company_id}}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Nama Merchant</label>
                    <input type="text" class="form-control" name="merchant_name" placeholder="Masukan Nama Merchant" required/>
                </div>
                <div class="form-group">
                    <label class="control-label">Soundbox</label>
                    <select class="form-control" name="soundbox" required>
                        <option value="0">Tidak</option>
                        <option value="1">Iya</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </form>
        </div>
      </div>
</div>
@endsection

@push('addon-script')
<script>
    $('#select-all').click(function(e){
        if(this.checked){
            $(':checkbox').each(function(){
                this.checked = true
            })
        }else{
            $(':checkbox').each(function(){
                this.checked = false
            })
        }
    })
</script>
@endpush
