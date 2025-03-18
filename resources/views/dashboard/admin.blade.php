@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1>Admin Dashboard</h1>

    <div class="row">
        <!-- Pending Alert -->
        <div class="alert-box alert-pending">
            <div class="alert-title">
                <i class="fas fa-hourglass-half icon"></i>
                Pending transactions awaiting review
            </div>
            <div class="alert-time">30 minutes ago</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 mb-4">
            Filter Company:
            <select id="company_id" class="form-control">
                <option value="">All Companies</option>
                                    @foreach ($companies as $item)
                                        <option value="{{ $item->company_id }}" @if ($item->merchant_id == auth()->user()->merchant_id) selected @endif>
                                        {{ $item->fullname }}</option>
                                    @endforeach
            </select>
        </div>
        <div class="col-md-3 mb-4">
            Filter Merchant:
            <select id="merchant_id" class="form-control">
                <option value="">All Merchants</option>
                                     @foreach ($merchants as $item)
                                         <option value="{{ $item->merchant_id }}" @if ($item->merchant_id == auth()->user()->merchant_id) selected @endif>
                                         {{ $item->merchant_name }}</option>
                                     @endforeach
            </select>
        </div>

        <div class="col-md-6">
            <button class="btn mt-6 btm-sm btn-primary">
                Filter
            </button>
        </div>
    </div>

    <div class="mt-4">
        @include('dashboard.components.card-summary')
    </div>

    <div class="mt-4">
        <div class="row">
            <div class="col-md-8">
                @include('dashboard.components.chart-transaction-volume')
            </div>

            <div class="col-md-4">
                @include('dashboard.components.bar-sales-breakdown')
            </div>
        </div>
    </div>

    <div class="row mt-4">
        @include('dashboard.components.table-recent-transactions')
    </div>
</div>
@endsection
