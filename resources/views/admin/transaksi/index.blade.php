@extends('template.master')

@section('title_web')
Melihat Data Undangan
@endsection

@section('title_content')
Data Undangan
@endsection

@section('breadcrumb')
<div class="breadcrumb-item active"><a href="/admin/dashboard">Dashboard</a></div>
<div class="breadcrumb-item">Undangan</div>
@endsection

@section('content')
<h3 class="mt-5 mb-3" style="color: #555; font-family: 'Open Sans', sans-serif; font-weight: 700;"><i
    class="fas fa-folder-open ml-4 mr-4" style="font-size: 40px;"></i>Data Undangan
</h3>
<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-body">
                <a href="/undangan/create"
                class="btn btn-m text-white btn-primary mb-4"><i class="fas fa-plus mr-2"></i> TAMBAH
                DATA</a>
                <button class="btn btn-m text-white btn-danger float-right mb-4 delete-all-data"><i class="fas fa-trash mr-2"></i> HAPUS SEMUA</button>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped" id="tableData" style="font-size: 16px;">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 2%;">No.</th>
                                <th>ID User</th>
                                <th>Foto Pria</th>
                                <th>Foto Wanita</th>
                                <th>Embed Maps</th>
                                <th>Salam Pembuka</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($undangan as $und)
                                <tr>
                                    <th class="text-center">{{ $loop->iteration }}</th>
                                    <td>{{ $und->User->id }}</td>
                                    <td align="center">
                                            <img src="{{ asset('images/foto_undangan/'.$und->foto_pria)}}" alt="Foto Pria" width="140px" class="shadow rounded m-2"
                                            loading="lazy">
                                    </td>
                                    <td align="center">
                                            <img src="{{ asset('images/foto_undangan/'.$und->foto_wanita)}}" alt="Foto Wanita" width="140px" class="shadow rounded m-2"
                                            loading="lazy">
                                    </td>
                                    <td>{{ $und->embed_maps }}</td>
                                    <td>{{ $und->salam_pembuka }}</td>
                                    {{-- <td>{{ $und->created_at }}</td> --}}
                                    <td align="center">
                                        <button class="btn btn-danger m-2 text-white delete-data"
                                        data-id="{{ $und->id }}" style="cursor: pointer" title="Delete Data"><i
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
            $('#tableData').DataTable({
                "lengthMenu": [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, 100]
                ]
            });
        });

        $('.delete-data').click(function () {
            var dataid = $(this).attr('data-id');
            swal({
                    title: "Yakin Ingin Menghapus?",
                    text: "Anda Akan Menghapus Data Undangan Dengan ID : " + dataid + "",
                    icon: "warning",
                    buttons: ["BATAL", "OK"],
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletedata/ " + dataid + ""
                        swal("Data Undangan Berhasil Dihapus!", {
                            icon: "success",
                        });
                    } else {
                        swal("Data Tidak Jadi Dihapus!");
                    }
                });
        });

        $('.delete-all-data').click(function () {
            var alldataid = $(this).attr('data-id');
            swal({
                    title: "Yakin Ingin Menghapus?",
                    text: "Anda Akan Menghapus Semua Data Undangan",
                    icon: "warning",
                    buttons: ["BATAL", "OK"],
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletealldata/ " + alldataid + ""
                        swal("Semua Data Undangan Berhasil Dihapus!", {
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