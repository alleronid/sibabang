<div class="col">
    <div class="card card-custom">
        <div class="card-header h-auto">
            <!--begin::Title-->
            <div class="card-title py-5">
                <h3 class="card-label">Recent Transactions</h3>
            </div>
            <!--end::Title-->
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTableTransacions" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Perusahaan</th>
                            <th>Nama Merchant</th>
                            <th>Kode Transaksi</th>
                            <th>Total Amount</th>
                            <th>Status</th>
                            <th>Tanggal Transaksi</th>
                            <th>Tanggal Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $item)
                            <tr>
                                <th>{{$item->company->merchant_name}}</th>
                                <th>{{$item->merchant->merchant_name}}</th>
                                <td>{{$item->trx_id}}</td>
                                <td>{{$item->amount}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->payed_at}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@push('addon-script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var table = $('#dataTableTransacions').DataTable();
    });
</script>
@endpush
