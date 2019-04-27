@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <div class="header  py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('CAFE KARAOKE') }}</h1>
                        <h2 class="text-white">{{__('Una nueva forma de diversion')}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" "></polygon>
            </svg>
        </div>
    </div>

    <div class="container mt--10 pb-5"></div>
@endsection
