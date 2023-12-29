@extends('layouts.dashboard.master')

@section('container')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Evaluasi dan Monitoring Sistem Rekam Medis</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">E-Monev</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title -->
            <div class="row">

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div>
                                <h5 class="font-16"> Data Lengkap</h5>
                            </div>
                            <h3 class="mt-4">{{$data_lengkap}}%</h3>
                            <div class="progress mt-4" style="height: 4px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: {{$data_lengkap}}%" aria-valuenow="{{$data_lengkap}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div>
                                <h5 class="font-16"> Data Tidak Lengkap</h5>
                            </div>
                            <h3 class="mt-4">{{$data_tidak_lengkap}}%</h3>
                            <div class="progress mt-4" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{$data_tidak_lengkap}}%" aria-valuenow="{{$data_tidak_lengkap}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div>
                                <h5 class="font-16"> Jawaban Ya</h5>
                            </div>
                            <h3 class="mt-4">{{$persentase_jawaban_ya}}%</h3>
                            <div class="progress mt-4" style="height: 4px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: {{$persentase_jawaban_ya}}%" aria-valuenow="{{$persentase_jawaban_ya}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div>
                                <h5 class="font-16"> Jawaban Tidak</h5>
                            </div>
                            <h3 class="mt-4">{{$persentase_jawaban_tidak}}%</h3>
                            <div class="progress mt-4" style="height: 4px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: {{$persentase_jawaban_tidak}}%" aria-valuenow="{{$persentase_jawaban_tidak}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- container-fluid -->

    </div>
    <!-- content -->
</div>
@endsection
