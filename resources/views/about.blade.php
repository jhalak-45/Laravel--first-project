@extends('layouts.main')
@php
    $title = 'Jhalak Dhami | About';
@endphp
@section('main')
    <div class="container-fluid about-page">
        <div class="title py-2">
            <h1 class="page-title pb-2">About Me</h1>

        </div>

        <div class="row py-2">
            <div class="image-section col-md-5 py-3 px-2">
                <img src="{{ asset('images/jhalak.jpg') }}" class="rounded-5 text-center" height="auto" width="100%">
            </div>
            <div class="about-section col-md-7 py-3">
                <h3 class="py-2">Introduction</h3>
                <p class="about-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat corporis, dolore illum ab voluptatem
                    quas
                    maiores quia laborum ratione vero exercitationem suscipit quibusdam omnis cupiditate laboriosam magnam
                    perspiciatis facere ea.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat corporis, dolore illum ab voluptatem
                    quas
                    maiores quia laborum ratione vero exercitationem suscipit quibusdam omnis cupiditate laboriosam magnam
                    maiores quia laborum ratione vero exercitationem suscipit quibusdam omnis cupiditate laboriosam magnam
                    perspiciatis facere ea

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat corporis, dolore illum ab voluptatem
                    quas
                    perspiciatis facere ea

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat corporis, dolore illum ab voluptatem
                    quas
                </p>
                <button type="button" class="btn  text-white px-4" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    data-bs-whatever="@mdo"
                    style="background-color: orangered; font-size:20px; font-family:'Nunito',sans-serif">View CV</button>


                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Message:</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="">
                                    <button type="button" class="btn btn-primary">Download</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection
