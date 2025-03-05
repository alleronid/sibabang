@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="font-weight">Tambah User Baru</h5>
        </div>
        <div class="card-body">
            <form action="{{route('user.save')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="control-label">Merchant Name</label>
                    <select class="form-control" name="merchant_id" required>
                        @foreach ($merchant as $item)
                        <option value="{{$item->merchant_id}}">{{$item->merchant_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="Masukan Nama" required/>
                </div>
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Masukan Email" required/>
                </div>
                <div class="form-group">
                    <label class="control-label">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Masukan Nama Merchant" required/>
                </div>
                <div class="form-group">
                    <label class="control-label">Role</label>
                    <select class="form-control" name="role_id" required>
                        @foreach ($roles as $role)
                        <option value="{{$role->id}}">{{$role->role_name}}</option>
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
