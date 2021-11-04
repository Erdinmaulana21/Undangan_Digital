@extends('template.master')

@section('title_web')
Melihat Users
@endsection

@section('title_content')
Data Users
@endsection

@section('breadcrumb')
<div class="breadcrumb-item active"><a href="/admin/dashboard">Dashboard</a></div>
<div class="breadcrumb-item">Users</div>
@endsection

@section('content')
<h3 class="mt-5 mb-3" style="color: #555; font-family: 'Open Sans', sans-serif; font-weight: 700;"><i
    class="fas fa-user-tie ml-4 mr-4" style="font-size: 40px;"></i>Data Users
</h3>
<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-body">
                <a href="/users/create"
                class="btn btn-m text-white btn-primary mb-4"><i class="fas fa-user-plus mr-2"></i> TAMBAH
                USERS</a>
                <button class="btn btn-m text-white btn-danger float-right mb-4 delete-all-user"><i class="fas fa-trash mr-2"></i> HAPUS SEMUA</button>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped" id="tableUser" style="font-size: 16px;">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 2%;">No.</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Avatar</th>
                                <th>Terdaftar</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $usr)
                                <tr>
                                    <th class="text-center">{{ $loop->iteration }}</th>
                                    <td>{{ $usr->name }}</td>
                                    <td>{{ $usr->email }}</td>
                                    <td>{{ $usr->role }}</td>
                                    <td align="center">
                                        @if($usr->avatar == 'default_avatar_users.png')
                                            <img src="/images/avatar_user_default/default_avatar_users.png" alt="{{$usr->name}}" width="140px" class="shadow rounded-circle m-2"
                                            loading="lazy">
                                        @else
                                            <img src="{{ asset('images/avatar_users/'.$usr->avatar)}}" alt="{{$usr->name}}" width="140px" class="shadow rounded m-2"
                                            loading="lazy">
                                        @endif
                                    </td>
                                    <td>{{ $usr->created_at }}</td>
                                    <td align="center">
                                        <button class="btn btn-danger m-2 text-white delete-user"
                                        data-id="{{ $usr->id }}" style="cursor: pointer" title="Delete Data"><i
                                            class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        $(document).ready(function () {
            $('#tableUser').DataTable({
                "lengthMenu": [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, 100]
                ]
            });
        });

        $('.delete-user').click(function () {
            var userid = $(this).attr('data-id');
            swal({
                    title: "Yakin Ingin Menghapus?",
                    text: "Anda Akan Menghapus Data User Dengan ID : " + userid + "",
                    icon: "warning",
                    buttons: ["BATAL", "OK"],
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deleteuser/ " + userid + ""
                        swal("Data User Berhasil Dihapus!", {
                            icon: "success",
                        });
                    } else {
                        swal("Data Tidak Jadi Dihapus!");
                    }
                });
        });

        $('.delete-all-user').click(function () {
            var alluserid = $(this).attr('data-id');
            swal({
                    title: "Yakin Ingin Menghapus?",
                    text: "Anda Akan Menghapus Semua User Kecuali Yang Sedang Login",
                    icon: "warning",
                    buttons: ["BATAL", "OK"],
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletealluser/ " + alluserid + ""
                        swal("Semua Data User Berhasil Dihapus!", {
                            icon: "success",
                        });
                    } else {
                        swal("Data Tidak Jadi Dihapus!");
                    }
                });
        });
    </script>
@endpush
@endsection