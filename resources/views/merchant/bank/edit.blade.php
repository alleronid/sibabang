@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h5 class="font-weight">Merchant Bank</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('merchant-bank.update') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">Merchant</label>
                        <select name="merchant_id" class="form-control">
                            <option value="">Pilih merchant</option>
                            @foreach ($merchant as $item)
                                <option value="{{ $item->merchant_id }}" @if ($item->merchant_id == $data->merchant_id)
                                    selected
                                @endif>{{ $item->merchant_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Pilih Bank</label>
                        <select name="bank_id" class="form-control" id="banks">
                            <option value="">Pilih Bank</option>
                            @foreach ($banks as $b)
                                <option value="{{ $b->id }}" @if ($b->id == $data->bank_id)
                                    selected
                                @endif>{{ $b->bank_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nomor Rekening</label>
                        <input type="text" class="form-control" name="account_number" placeholder="Masukan Nomor Rekening"
                            value="{{$data->account_number}}" required />
                        <input type="text" class="form-control" name="bank_name" id="bank_name" value="{{$data->bank_name}}" hidden />
                        <input type="text" class="form-control" name="id" value="{{$data->id}}" hidden />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nama Rekening</label>
                        <input type="text" class="form-control" name="account_name" placeholder="Masukan Nama Pemilik"
                         value="{{$data->account_name}}" required />
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
        $('#banks').change(function() {
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
