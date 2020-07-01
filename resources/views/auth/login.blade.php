@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="/login/twitter">twitter</a>
                    <a class="btn btn-primary" href="/login/facebook">facebook</a>
                    <a class="btn btn-primary" href="/login/google">google</a>
                    <a class="btn btn-primary" href="/login/github">github</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
