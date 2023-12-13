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
                <div class="col-md-6">
                    <h3 class="page-title mb-0">View Lesson</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb mb-0 p-0 float-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><span>View Lesson</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row cad-view">
            
            <div class="container col-sm-6 col-md-6 col-lg-4">
                <div class="blog grid-blog">
                    <div class="blog-image">
                        <a href="{{ route('learning.index') }}"><img class="img-fluid" src="{{ asset('admin/assets/img/blog/blog-01.jpg') }}" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><i class="bi bi-book-half iclearn"></i><a class="clasView" href="{{ route('learning.index') }}"> {{$learning_view->learning_class}}</a></h3>
                        <p class="text-justify prgs">{{$learning_view->category_class}}</p>
                        <a href="{{ route('learning.edit', $learning_view->id) }}" class="btn text-white edit1">Edit</a>
                        <a href="{{ url('/learning') }}" class="btn text-white back1">Back</a>
                        <div class="blog-info clearfix mt-3">
                            <div class="post-left">
                                <ul>
                                    <li><a href="#"><i class="far fa-calendar-alt" aria-hidden="true"></i>
                                    <span>December 6, 2018</span></a></li>
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