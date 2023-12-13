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
                    <h3 class="page-title mb-0">Create Learning</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb mb-0 p-0 float-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><span>Create Learning</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-center">
                        <i class="bi bi-exclude"> <span class="spanCreate"> Welcome To Learning</span></i>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('learning.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="bi bi-person-fill-add col-form-label col-md-2 LabForm"> Learning Class</label>
                                <div class="col-md-10">
                                    <select name="learning_class" class="form-control @error ('learning_class') is-invalid @else is-valid @enderror" id="learning_class">
                                        <option class="optins" value="{{ old('learning_class') }}"> -- Please Select -- </option>
                                        <option class="optins" value="Java">Java</option>
                                        <option class="optins" value="Python">Python</option>
                                        <option class="optins" value="C++">C++</option>
                                        <option class="optins" value="HTML & CSS">HTML & CSS</option>
                                        <option class="optins" value="JavaScript">JavaScript</option>
                                        <option class="optins" value="PHP">PHP</option>
                                        <option class="optins" value="Laravel">Laravel</option>
                                        <option class="optins" value="Network Engineer">Network Engineer</option>
                                        <option class="optins" value="Cyber Security">Cyber Security</option>
                                    </select>
                                    @error('learning_class')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="bi bi-house col-form-label col-md-2 LabForm"> Category Class</label>
                                <div class="col-md-10">
                                    <textarea class="form-control place @error ('category_class') is-invalid @else is-valid @enderror" name="category_class" id="" cols="30" placeholder="Input Category Learning" rows="10">{{ old('category_class') }}</textarea>
                                    @error('category_class')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <a href="{{url('/learning')}}" class="btn btn-danger btp">Cancel</a>
                            <button type="submit" name="proses" value="simpan" id="simpan" class="btn btn-primary btp">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('admin.classroom.message')
</div>
@endsection