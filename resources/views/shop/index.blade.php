@extends('layouts.master')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">{{ __('front.page', ['number' => 1]) }} </h1>
            <p class="lead">{{ __('front.text') }} 1</p>
        </div>
    </div>
@endsection