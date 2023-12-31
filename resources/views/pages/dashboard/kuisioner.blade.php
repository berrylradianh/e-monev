@extends('layouts.dashboard.master')

@section('container')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Kuisioner</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">E-Monev</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kuisioner</li>
                        </ol>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @if ($userHasFilledKuisioner)
                            <p>Anda sudah mengisi kuisioner</p>
                            @foreach ($questions as $data)
                            <div class="form-group">
                                <label for="pertanyaan{{ $data->id }}">{{ $data->id }} . {{ $data->question }}</label>
                                <div class="ml-3">
                                    <p>Jawaban: {{ $userAnswers['pertanyaan'.$data->id] }}</p>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <form method="POST" action="{{ route('kuisioner.store') }}">
                                @csrf
                                @foreach ($questions as $data)
                                <div class="form-group">
                                    <label for="pertanyaan{{ $data->id }}">{{ $data->id }} . {{ $data->question }}</label>
                                    <div class="ml-3">
                                        <label class="radio-inline mr-2">
                                            <input type="radio" name="pertanyaan{{ $data->id }}" value="Ya">
                                            <span class="ml-1">Ya</span>
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="pertanyaan{{ $data->id }}" value="Tidak">
                                            <span class="m-1">Tidak</span>
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                            @endif
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
