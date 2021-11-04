@extends('template.master')

@section('title_web')
Welcome Admin
@endsection

@section('title_content')
Dashboard
@endsection

@section('breadcrumb')
<div class="breadcrumb-item">Dashboard</div>
@endsection


@section('content')
    <style>
        .text-table{
            text-decoration: none;
            color: #000;
        }
        .text-table:hover{
            text-decoration: none;
            color: #000;
        }
    </style>
<div class="row justify-content-center">
    <div class="col-xl-3 col-lg-5 col-md-5 col-sm-6 col-12">
        <div class="card card-statistic-1 shadow" style="border-radius: 8px">
            <div class="card-icon bg-danger">
                <i class="fas fa-th"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4 class="text-dark">Total Ulasan Hari Ini</h4>
                </div>
                <div class="card-body">
                    Hi
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-5 col-md-5 col-sm-6 col-12">
        <div class="card card-statistic-1 shadow" style="border-radius: 8px">
            <div class="card-icon bg-success">
                <i class="fas fa-file-alt"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4 class="text-dark">Total Data Ulasan</h4>
                </div>
                <div class="card-body">
                    oke
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-5 col-md-5 col-sm-6 col-12">
        <div class="card card-statistic-1 shadow" style="border-radius: 8px">
            <div class="card-icon bg-danger">
                <i class="fas fa-th"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4 class="text-dark">Total Ulasan Hari Ini</h4>
                </div>
                <div class="card-body">
                    Hi
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-5 col-md-5 col-sm-6 col-12">
        <div class="card card-statistic-1 shadow" style="border-radius: 8px">
            <div class="card-icon bg-success">
                <i class="fas fa-file-alt"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4 class="text-dark">Total Data Ulasan</h4>
                </div>
                <div class="card-body">
                    oke
                </div>
            </div>
        </div>
    </div>
</div>
@endsection