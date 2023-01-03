@extends('layouts.main')
@php
    $title = 'Jhalak Dhami | Contact';
@endphp

@section('main')
    <div class="container-fluid contact-page">
        <div class="title py-2">
            <h1 class="page-title pb-2">Contact Me</h1>
        </div>
        <div class="contact py-4 ">
            <div class="row">
                <div class="col-md-6">
                    <div class="text h2">Let's get Connected!</div>
                    <p class="about-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis nobis
                        provident quod
                        libero porro ipsa sed omnis rem numquam molestiae dolor, totam aspernatur pariatur dicta
                        ipsum ullam dignissimos harum quasi!
                    </p>
                    <div class="icons">
                        <div class="con">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Jhalak Dhami</div>
                            </div>
                        </div>
                        <div class="con">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Birthplace</div>
                                <div class="sub-title">Bajhang, Nepal</div>
                            </div>
                        </div>
                        <div class="con">
                            <i class="fas fa-envelope"></i>
                            <div class="info ">
                                <div class="head">Email</div>
                                <div class="sub-title">
                                    <a href="mailto:jhalakise@gmail.com">jhalaksime@gmail.com

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 h-100">
                    kfa-pull-left
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe officiis, consectetur animi aliquam
                        consequuntur qui dolor molestiae est incidunt odit eveniet ducimus unde maiores reprehenderit. Natus
                        dolorem ex error pariatur!</p>
                    kfa-pull-left
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe officiis, consectetur animi aliquam
                        consequuntur qui dolor molestiae est incidunt odit eveniet ducimus unde maiores reprehenderit. Natus
                        dolorem ex error pariatur!</p>
                    kfa-pull-left
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe officiis, consectetur animi aliquam
                        consequuntur qui dolor molestiae est incidunt odit eveniet ducimus unde maiores reprehenderit. Natus
                        dolorem ex error pariatur!</p>

                </div>
            </div>
        </div>
    </div>
@endsection
