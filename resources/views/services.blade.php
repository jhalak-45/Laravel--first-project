@extends('layouts.main')
@php
    $title = 'Jhalak Dhami | Services';
@endphp
@section('main')
    <div class="container-fluid service-page">
        <div class="title py-2">
            <h1 class="page-title pb-2">Services</h1>
        </div>
        <div class="services py-5">
            <div class="card service">
                <div class="text-center">
                    <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                        class="rounded-circle p-2" height="280px" width="280px">

                </div>
                <div class="card-body">
                    <h5 class="card-title">Website Development</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>

                </div>
            </div>
            <div class="card service">
                <div class="text-center">
                    <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                        class="rounded-circle p-2" height="280px" width="280px">

                </div>
                <div class="card-body">
                    <h5 class="card-title">Website Design</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>

                </div>
            </div>
            <div class="card service">
                <div class="text-center">
                    <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                        class="rounded-circle p-2" height="280px" width="280px">

                </div>
                <div class="card-body">
                    <h5 class="card-title">Website Hosting</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>

                </div>
            </div>

        </div>

    </div>
@endsection
