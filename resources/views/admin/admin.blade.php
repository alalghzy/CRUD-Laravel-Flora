@extends('layouts.app')

@section('tittle')
Laman {{ Auth::user()->name}}
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-start">
        <div class="col-md-9">
            <div class="card px">
                <div class="card-header bg-danger" style="color: white">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Selamat datang {{ Auth::user()->name}} !</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card px">
                <div class="card-header" style="background:  #fd7e14; color:azure;">+</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3><strong>+</strong></h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
