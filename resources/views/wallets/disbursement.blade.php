@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <div>
                <h5 class="font-weight">Permintaan Pencairan Dana</h5>
                <p class="text-secondary">Pilih rekening bank untuk pencairan dana</p>
            </div>
            <div class="text-right">
                <p class="text-secondary mb-0">Saldo Tersedia</p>
                <h5 class="font-weight-bold text-success">Rp. {{number_format($wallet->avail_balance, 0, ',', '.')}}</h5>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('wallet.store.disbursement')}}" method="POST">
                @csrf
                @if (count($banks) == 0)
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <span class="me-2">⚠️</span>
                        <div>Anda belum memiliki rekening bank yang terdaftar.</div>
                    </div>
                    <a href="{{route('merchant-bank.create')}}" class="btn btn-primary mb-3">➕ Tambah Rekening Bank</a>
                @else
                <div class="form-group">
                    <label class="control-label">Nominal</label>
                    <input type="text" class="form-control" name="nominal" id="amount" max="{{$wallet->avail_balance}}" required oninput="validateAmount()"/>
                    <h6 id="error-message" class="text-danger" style="display:none;">Nominal melebihi saldo tersedia!</h6>
                </div>
                @endif
                <div class="form-group">
                    <label class="control-label">Nama Merchant</label>
                    <input type="text" class="form-control" name="merchant_name" value="{{$merchant->merchant_name}}" readonly/>
                    <input type="text" class="form-control" name="merchant_id" value="{{$merchant->merchant_id}}" hidden/>
                </div>
                <div class="form-group">
                    <label class="control-label">Pilih Rekening Bank</label>
                    <select class="form-control" name="merchant_bank" required>
                        <option value="">Pilih Rekening</option>
                       @foreach ($banks as $item)
                        <option value="{{$item->id}}">{{$item->bank_name}} - {{$item->account_name}}</option>
                       @endforeach
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
        function validateAmount() {
        let amountInput = document.getElementById("amount");
        let maxAmount = parseFloat(amountInput.getAttribute("max"));
        let errorMessage = document.getElementById("error-message");

        if (parseFloat(amountInput.value) > maxAmount) {
            errorMessage.style.display = "block";
            amountInput.value = maxAmount;
        } else {
            errorMessage.style.display = "none";
        }
    }
    </script>
@endpush
