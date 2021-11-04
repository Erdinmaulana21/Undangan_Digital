@extends('template.master')

@section('title_web')
Tambah User
@endsection

@section('title_content')
<div class="section-header-back">
    <a href="/users" class="btn btn-icon mr-2" title="Back"><i class="fas fa-arrow-left"></i></a>
    Tambah User
</div>
@endsection

@section('breadcrumb')
<div class="breadcrumb-item active"><a href="/admin/dashboard">Dashboard</a></div>
<div class="breadcrumb-item active"><a href="/users">Users</a></div>
<div class="breadcrumb-item">Tambah User</div>
@endsection

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-6">
            <div class="card" style="border: none; box-shadow: 0 1px 41px rgba(0, 0, 0, 12%); border-radius: 16px;">
                <div class="card-body mt-3">

                    <form action="/storeUser" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label h6 font-weight-bold">Masukkan Nama Lengkap</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-address-card m-1"></i>
                                    </div>
                                </div>
                                <input type="text" id="name" class="form-control input-custom" name="name"
                                    value="{{ old('name') }}" />
                            </div>
                            @error('name')
                                <div class="alert alert-danger font-weight-bold alert-dismissible fade show"
                                    role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label h6 font-weight-bold">Masukkan Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-envelope ml-1"></i>
                                    </div>
                                </div>
                                <input type="email" id="email" class="form-control input-custom" name="email"
                                    value="{{ old('email') }}" />
                            </div>
                            @error('email')
                                <div class="alert alert-danger font-weight-bold alert-dismissible fade show"
                                    role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label h6 font-weight-bold">Masukkan Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-envelope ml-1"></i>
                                    </div>
                                </div>
                                <input type="password" id="password" class="form-control input-custom"
                                    name="password" />
                            </div>
                            @error('password')
                                <div class="alert alert-danger font-weight-bold alert-dismissible fade show"
                                    role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="pass-confirm" class="form-label h6 font-weight-bold">Masukkan Konfirmasi
                                Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-envelope ml-1"></i>
                                    </div>
                                </div>
                                <input type="password" id="pass-confirm" class="form-control input-custom"
                                    name="password_confirmation" required autocomplete="new-password" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label h6 font-weight-bold">Pilih Role</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-envelope ml-1"></i>
                                    </div>
                                </div>
                                <select class="custom-select form-control" name="role" id="role">
                                    <option selected disabled>Pilih Nama Role</option>
                                    <option value="admin">ADMIN</option>
                                    <option value="weddingorganizer">WO</option>
                                    <option value="customer">CUSTOMER</option>
                                </select>
                            </div>
                            @error('role')
                                <div class="alert alert-danger font-weight-bold alert-dismissible fade show"
                                    role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="avatar" class="form-label h6 font-weight-bold">Masukkan Foto - Dapat Dikosongkan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-image ml-1"></i>
                                    </div>
                                </div>
                                <input type="file" name="avatar" class="form-control input-custom" id="avatar"
                                    onchange="previewFile(this)">
                            </div>
                            @error('avatar')
                                <div class="alert alert-danger font-weight-bold alert-dismissible fade show"
                                    role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror
                            <img id="previewImg" style="max-width: 180px; margin-top: 20px;" class="shadow-sm">
                        </div>

                        <center>
                            <input type="reset"
                                class="btn btn-lg btn-reset text-white btn-block font-weight-bold mb-3 mt-4"
                                style="font-size: 18px" value="BATALKAN">

                            <input type="submit"
                                class="btn btn-lg btn-save text-white btn-block font-weight-bold mb-3 mt-4"
                                style="font-size: 18px" value="SIMPAN">
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection