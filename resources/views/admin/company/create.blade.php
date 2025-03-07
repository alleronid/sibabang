@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h5 class="font-weight">Form User</h5>
            </div>
            <div class="card-body">
                <form action="{{route('admin.user.save')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">Nama</label>
                        <input type="text" class="form-control" name="name" placeholder="Masukan Nama" required/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Masukan Email" required/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukan Password" required/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Role</label>
                        <select class="form-control" name="role_id" required>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{$role->role_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Merchant</label>
                        <select class="form-control" name="merchant_id" required>
                            @foreach($merchants as $merchant)
                                <option value="{{ $merchant->merchant_id }}" {{ ($merchant->merchant_id == Auth::user()->merchant_id) ? 'selected' : '' }}>{{ $merchant->merchant_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Company</label>
                        <select class="form-control" name="company_id" required>
                            <option value="{{ Auth::user()->company_id }}">{{ Auth::user()->company->fullname }}</option>
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
