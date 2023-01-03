@extends('layouts.main')
@php
    $title = 'Jhalak Dhami | Blog';
@endphp

@section('main')
    <div class="container-fluid blog-page">
        <div class="title py-2">
            <h1 class="page-title pb-2">Projects</h1>
        </div>
        <div class="blogs d-flex flex-wrap justify-content-around  py-4">
            <div class="card blog">
                <img src="https://dummyimage.com/180x120/dbdbdb/787878.png&text=Image+cap" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <span class="text-muted py-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" style="fill: rgb(74, 74, 74);transform: ;msFilter:;">
                            <path
                                d="M19 4h-3V2h-2v2h-4V2H8v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zM5 20V7h14V6l.002 14H5z">
                            </path>
                            <path
                                d="m15.628 12.183-1.8-1.799 1.37-1.371 1.8 1.799zm-7.623 4.018V18h1.799l4.976-4.97-1.799-1.799z">
                            </path>
                        </svg>
                        {{ date('Y M d H:i') }}</span>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="">Read more</a>
                </div>
            </div>

            <div class="card blog" >
                <img src="https://dummyimage.com/180x120/dbdbdb/787878.png&text=Image+cap" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <span class="text-muted py-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" style="fill: rgb(74, 74, 74);transform: ;msFilter:;">
                            <path
                                d="M19 4h-3V2h-2v2h-4V2H8v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zM5 20V7h14V6l.002 14H5z">
                            </path>
                            <path
                                d="m15.628 12.183-1.8-1.799 1.37-1.371 1.8 1.799zm-7.623 4.018V18h1.799l4.976-4.97-1.799-1.799z">
                            </path>
                        </svg>
                        {{ date('Y M d H:i') }}</span>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="">Read more</a>
                </div>
            </div>

            <div class="card blog">
                <img src="https://dummyimage.com/180x120/dbdbdb/787878.png&text=Image+cap" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <span class="text-muted py-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" style="fill: rgb(74, 74, 74);transform: ;msFilter:;">
                            <path
                                d="M19 4h-3V2h-2v2h-4V2H8v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zM5 20V7h14V6l.002 14H5z">
                            </path>
                            <path
                                d="m15.628 12.183-1.8-1.799 1.37-1.371 1.8 1.799zm-7.623 4.018V18h1.799l4.976-4.97-1.799-1.799z">
                            </path>
                        </svg>
                        {{ date('Y M d H:i') }}</span>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="">Read more</a>
                </div>
            </div>

            <div class="card blog">
                <img src="https://dummyimage.com/180x120/dbdbdb/787878.png&text=Image+cap" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <span class="text-muted py-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" style="fill: rgb(74, 74, 74);transform: ;msFilter:;">
                            <path
                                d="M19 4h-3V2h-2v2h-4V2H8v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zM5 20V7h14V6l.002 14H5z">
                            </path>
                            <path
                                d="m15.628 12.183-1.8-1.799 1.37-1.371 1.8 1.799zm-7.623 4.018V18h1.799l4.976-4.97-1.799-1.799z">
                            </path>
                        </svg>
                        {{ date('Y M d H:i') }}</span>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="">Read more</a>
                </div>
            </div>
        </div>
    </div>
@endsection
