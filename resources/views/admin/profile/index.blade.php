@extends('admin.layouts.index')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">

        @include('sweetalert::alert')

        <div class="page-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="page-title mb-0">My Profile</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb mb-0 p-0 float-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><span>My Profile</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            @if(empty(Auth::user()->photo))
                            <img class="rounded-circle" src="{{ url('admin/assets/img/users/banner-img.png') }}" style="width: 100px; height: 100px;">
                            @else
                            <img class="rounded-circle" src="{{ url('admin/assets/img/users/') }}/{{Auth::user()->photo}}" style="width: 100px; height: 100px;">
                            @endif

                            <h2>
                                @if(empty(Auth::user()->role_users))
                                {{''}}
                                @else
                                {{Auth::user()->name}}
                                @endif
                            </h2>
                            <h3>
                                @if(empty(Auth::user()->role_users))
                                {{''}}
                                @else
                                {{Auth::user()->role_users}}
                                @endif
                            </h3>
                            <div class="social-links mt-2">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">About</h5>
                                    <p class="P-Abots">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                        <div class="col-lg-9 col-md-8"> :
                                            @if(empty(Auth::user()->role_users))
                                            {{''}}
                                            @else
                                            {{Auth::user()->name}}
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">:
                                            @if(empty(Auth::user()->role_users))
                                            {{''}}
                                            @else
                                            {{Auth::user()->email}}
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                        <div class="col-lg-9 col-md-8">:
                                            @if(empty(Auth::user()->role_users))
                                            {{''}}
                                            @else
                                            {{Auth::user()->phone}}
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Status</div>
                                        <div class="col-lg-9 col-md-8">: 
                                            <label class="btn btn-sm btn-success mt-2">
                                            @if(empty(Auth::user()->role_users))
                                            {{''}}
                                            @else
                                            {{Auth::user()->status_users}}
                                            @endif
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Address</div>
                                        <div class="col-lg-9 col-md-8">:
                                            @if(empty(Auth::user()->role_users))
                                            {{''}}
                                            @else
                                            {{Auth::user()->address}}
                                            @endif
                                        </div>
                                    </div>

                                </div>
                                @include('admin.profile.edit')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection