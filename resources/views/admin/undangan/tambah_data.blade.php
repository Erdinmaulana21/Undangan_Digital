@extends('template.master')

@section('title_web')
Tambah Data Undangan
@endsection

@section('title_content')
<div class="section-header-back">
    <a href="/undangan" class="btn btn-icon mr-2" title="Back"><i class="fas fa-arrow-left"></i></a>
    Tambah Undangan
</div>
@endsection

@section('breadcrumb')
<div class="breadcrumb-item active"><a href="/admin/dashboard">Dashboard</a></div>
<div class="breadcrumb-item active"><a href="/undangan">Undangan</a></div>
<div class="breadcrumb-item">Tambah Undangan</div>
@endsection

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-6">
            <div class="card" style="border: none; box-shadow: 0 1px 41px rgba(0, 0, 0, 12%); border-radius: 16px;">
                <div class="card-body mt-3">

                    <form action="/storeUndangan" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="id_user" class="form-label h6 font-weight-bold">Masukkan ID User</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-address-card m-1"></i>
                                    </div>
                                </div>
                                <select class="custom-select form-control input-custom" id="id_user" name="id_user">
                                    <option selected disabled>Pilih ID User</option>
                                    @foreach($user as $data)
                                        <option value="{{ $data->id }}">{{ $data->id }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('id_user')
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
                            <label for="foto_pria" class="form-label h6 font-weight-bold">Masukkan Foto Pria</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-image ml-1"></i>
                                    </div>
                                </div>
                                <input type="file" name="foto_pria" class="form-control input-custom" id="foto_pria">
                            </div>
                            @error('foto_pria')
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
                        <div class="mb-3">
                            <label for="foto_wanita" class="form-label h6 font-weight-bold">Masukkan Foto Wanita</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-image ml-1"></i>
                                    </div>
                                </div>
                                <input type="file" name="foto_wanita" class="form-control input-custom" id="foto_wanita">
                            </div>
                            @error('foto_wanita')
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
                        <div class="mb-3">
                            <label for="maps" class="form-label h6 font-weight-bold">Masukkan Embed Maps</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-address-card m-1"></i>
                                    </div>
                                </div>
                                <textarea class="form-control input-custom" name="embed_maps" id="maps">{{ old('embed_maps') }}</textarea>
                            </div>
                            @error('embed_maps')
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
                            <label for="sal_pembuka" class="form-label h6 font-weight-bold">Masukkan Salam Pembuka</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-address-card m-1"></i>
                                    </div>
                                </div>
                                <textarea class="form-control input-custom" name="salam_pembuka" id="sal_pembuka">{{ old('salam_pembuka') }}</textarea>
                            </div>
                            @error('salam_pembuka')
                                <div class="alert alert-danger font-weight-bold alert-dismissible fade show"
                                    role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror
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