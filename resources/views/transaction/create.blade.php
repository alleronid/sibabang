@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="font-weight">Add Transaction</h5>
        </div>
        <div class="card-body">
            <form action="{{route('transaction.save')}}" method="POST">
                @csrf
                @if ($company->status !== 'APPROVED')
                    <div class="row">
                        <div class="alert alert-warning d-flex align-items-center" role="alert">
                            <span class="me-2">⚠️</span>
                            <div>Akun anda belum terverifikasi tidak dapat membuat transaksi.</div>
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Merchant</label>
                            <select name="merchant_id" class="form-control" required>
                              <option value="">Pilih Merchant</option>
                              @foreach ($merchants as $item)
                                <option value="{{$item->merchant_id}}">{{$item->merchant_name}}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Jumlah</label>
                            <input type="text" class="form-control" name="amount" placeholder="Masukan Jumlah Transaksi" required/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email <sup>*)</sup></label>
                            <input type="text" class="form-control" name="email" placeholder="Masukan Nama Merchant"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Metode Pembayaran</label>
                            <select class="form-control" name="method" required>
                                <option value="qris">QRIS</option>
                                <option value="va_bni">VA BNI</option>
                                {{-- <option value="dana">DANA</option> --}}
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nama Lengkap <sup>*)</sup></label>
                            <input type="text" class="form-control" name="fullname" placeholder="Masukan Nama Lengkap"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nomor HP <sup>*)</sup></label>
                            <input type="text" class="form-control" name="phone_number" placeholder="Masukan Nama Merchant"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p class="ml-4"><sup>*)</sup> Optional jika ada</p>
                </div>
                @if ($company->status === 'APPROVED')
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                @else
                <div class="row">
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <span class="me-2">⚠️</span>
                        <div>Akun anda belum terverifikasi tidak dapat membuat transaksi.</div>
                    </div>
                </div>
                @endif
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
