@extends('layouts.master')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">{{ __('front.page', ['number' => 2]) }} </h1>
            <p class="lead">{{ __('front.text') }} 2</p>
        </div>
    </div>
@endsection