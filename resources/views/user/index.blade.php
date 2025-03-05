@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>User</h2>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('admin.user.create') }}" class="btn btn-sm btn-primary">
                    <i class="flaticon-plus"></i>
                    Tambah User
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama User</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Merchant</th>
                                <th>Nama Perusahaan</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->role->role_name }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->merchant->merchant_name ?? '' }}</td>
                                    <td>{{ $item->company->fullname ?? '' }}</td>
                                    <td>
                                        <a href="javascript:void(0)" onclick="editUser({{ $item->id }})"
                                            class="btn btn-sm btn-primary">Edit</a>
                                        <a href="javascript:void(0)" onclick="getUser({{ $item->id }})"
                                            class="btn btn-sm btn-primary">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="detailUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        x
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama User</label>
                                <input type="text" class="form-control" name="name" id="userName"
                                readonly />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" id="email" readonly />
                            </div>
                            <div class="form-group">
                                <label>Merchant</label>
                                <input type="text" class="form-control" name="merchant_id" id="merchantId" readonly />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Role</label>
                                <input type="text" class="form-control" name="role_id" id="roleId" readonly />
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" class="form-control" name="status" id="status" readonly />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        x
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama User</label>
                                    <input type="text" class="form-control" name="name" id="userNameEdit"
                                                                                        required />
                                    <input type="text" class="form-control" name="id" id="userIdEdit" hidden />
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" id="emailEdit" readonly />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status" id="statusEdit">
                                        <option value="ACTIVE">ACTIVE</option>
                                        <option value="DEACTIVE">DEACTIVE</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
                    </form>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script>
        function getUser(id) {
            $.get('/app/user/show/' + id, function(data) {
                console.log(data);
                $("#userName").val(data.name)
                $("#email").val(data.email)
                $('#status').val(data.status)
                $('#merchantId').val(data.merchant.merchant_name)
                $('#roleId').val(data.role.role_name)
                $('#detailUser').modal("toggle")
            })
        }

        function editUser(id) {
            $.get('/app/user/show/' + id, function(data) {
                $("#userNameEdit").val(data.name)
                $("#userIdEdit").val(data.id)
                $("#emailEdit").val(data.email)
                $('#statusEdit').val(data.status)
                $('#editUser').modal("toggle")
            })
        }

        $('#editForm').submit(function(e) {
            e.preventDefault();
            var id = $('#userIdEdit').val()
            var name = $('#userNameEdit').val()
            var status  = $('#statusEdit').val()

            $.ajax({
                url: "{{route('admin.user.update')}}",
                type: "POST",
                data: {
                    id : id,
                    name: name,
                    status : status,
                    _token: "{{ csrf_token() }}"
                },
                success: function(res) {
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: res.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                },
            })
        })
    </script>
@endpush
