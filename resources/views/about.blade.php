@extends('layouts.app')
@section('title')
<title>About - RaraCookies</title>
@endsection

@section('content')
 <!-- Header Start -->
 <div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">About</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Dashboard</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
@include('components.service')
@include('components.about')
{{-- @include('components.team') --}}
@include('components.foot')
@endsection
