@extends('admin.layouts.index')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget dash-widget5">
                    <span class="float-left"><img src="{{ asset('admin/assets/img/dash/dash-1.png') }}" alt="" width="80"></span>
                    <div class="dash-widget-info text-right">
                        <span>Students</span>
                        <h3>{{ $studentCount }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget dash-widget5">
                    <div class="dash-widget-info text-left d-inline-block">
                        <span>Teachers</span>
                        <h3>{{ $teacherCount }}</h3>
                    </div>
                    <span class="float-right"><img src="{{ asset('admin/assets/img/dash/dash-5.png') }}" width="80" alt=""></span>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget dash-widget5">
                    <span class="float-left"><img src="{{ asset('admin/assets/img/dash/dash-2.png') }}" alt="" width="80"></span>
                    <div class="dash-widget-info text-right">
                        <span>Classroom</span>
                        <h3>{{ $classroomCount }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget dash-widget5">
                    <span class="float-left"><img src="{{ asset('admin/assets/img/dash/dash-6.png') }}" alt="" width="80"></span>
                    <div class="dash-widget-info text-right">
                        <span>Learning</span>
                        <h3>{{ $learningCount }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <h5 class="text-uppercase mb-0 mt-0 page-title">View Classroom</h5>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <ul class="breadcrumb float-right p-0 mb-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item"><span>View Classroom</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row cad-view">

            <div class="container col-sm-6 col-md-6 col-lg-4">
                <div class="blog grid-blog">
                    <div class="blog-image">
                        <a href="{{ url('/classroom') }}"><img class="img-fluid" src="{{ asset('admin/assets/img/blog/blog-01.jpg') }}" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><i class="bi bi-book-half iclearn"></i><a class="clasView" href="{{ url('/classroom') }}"> {{$classroom_view->tbl_learning->learning_class}}</a></h3>
                        <p class="text-justify prgs">{{$classroom_view->tbl_learning->category_class}}</p>
                        <a href="{{ route('classroom.edit', $classroom_view->id) }}" class="btn text-white edit1">Edit</a>
                        <a href="{{ url('/classroom') }}" class="btn text-white back1">Back</a>
                        <div class="blog-info clearfix mt-3">
                            <div class="post-left">
                                <ul>
                                    <li><a href="#"><i class="far fa-calendar-alt" aria-hidden="true"></i>
                                            <span>{{$classroom_view->date_start}} {{$classroom_view->clock_start}}</span></a></li>
                                </ul>
                            </div>
                            <div class="post-right"><a href="#"><i class="far fa-heart" aria-hidden="true"></i>21</a> <a href="#"><i class="fas fa-eye" aria-hidden="true"></i>8</a> <a href="#"><i class="fas fa-comment-o" aria-hidden="true"></i>17</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container col-sm-6 col-md-6 col-lg-4">
                <div class="blog grid-blog">
                    <div class="blog-image">
                        <a href="{{ url('/classroom') }}"><img class="img-fluid" src="{{ asset('admin/assets/img/blog/blog-01.jpg') }}" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><i class="bi bi-people-fill iclearn"></i><a class="clasView" href="{{ url('/classroom') }}"> {{$classroom_view->tbl_student->name_student}}</a></h3>
                        <p class="text-justify prgs">{{$classroom_view->tbl_learning->category_class}}</p>
                        <a href="{{ route('classroom.edit', $classroom_view->id) }}" class="btn text-white edit1">Edit</a>
                        <a href="{{ url('/classroom') }}" class="btn text-white back1">Back</a>
                        <div class="blog-info clearfix mt-3">
                            <div class="post-left">
                                <ul>
                                    <li><a href="#"><i class="far fa-calendar-alt" aria-hidden="true"></i>
                                            <span>{{$classroom_view->date_start}} {{$classroom_view->clock_start}}</span></a></li>
                                </ul>
                            </div>
                            <div class="post-right"><a href="#"><i class="far fa-heart" aria-hidden="true"></i>21</a> <a href="#"><i class="fas fa-eye" aria-hidden="true"></i>8</a> <a href="#"><i class="fas fa-comment-o" aria-hidden="true"></i>17</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container col-sm-6 col-md-6 col-lg-4">
                <div class="blog grid-blog">
                    <div class="blog-image">
                        <a href="{{ url('/classroom') }}"><img class="img-fluid" src="{{ asset('admin/assets/img/blog/blog-01.jpg') }}" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><i class="bi bi-easel iclearn"></i><a class="clasView" href="{{ url('/classroom') }}"> {{$classroom_view->tbl_teacher->name_teacher}}</a></h3>
                        <p class="text-justify prgs">{{$classroom_view->tbl_learning->category_class}}</p>
                        <a href="{{ route('classroom.edit', $classroom_view->id) }}" class="btn text-white edit1">Edit</a>
                        <a href="{{ url('/classroom') }}" class="btn text-white back1">Back</a>
                        <div class="blog-info clearfix mt-3">
                            <div class="post-left">
                                <ul>
                                    <li><a href="#"><i class="far fa-calendar-alt" aria-hidden="true"></i>
                                            <span>{{$classroom_view->date_start}} {{$classroom_view->clock_start}}</span></a></li>
                                </ul>
                            </div>
                            <div class="post-right"><a href="#"><i class="far fa-heart" aria-hidden="true"></i>21</a> <a href="#"><i class="fas fa-eye" aria-hidden="true"></i>8</a> <a href="#"><i class="fas fa-comment-o" aria-hidden="true"></i>17</a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @include('admin.classroom.message')
</div>


@endsection