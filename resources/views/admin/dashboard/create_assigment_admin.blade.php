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
                        <span>Assigment</span>
                        <h3>{{ $assigmentCount }}</h3>
                    </div>
                    <span class="float-right"><img src="{{ asset('admin/assets/img/dash/dash-5.png') }}" width="80" alt=""></span>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="dash-widget dash-widget5">
                    <div class="dash-widget-info text-left d-inline-block">
                        <span>Classroom</span>
                        <h3>{{ $classroomCount }}</h3>
                    </div>
                    <span class="float-right"><img src="{{ asset('admin/assets/img/dash/dash-2.png') }}" width="80" alt=""></span>
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
                    <h3 class="page-title mb-0">Create Assigment Student Class</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb mb-0 p-0 float-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><span>Create Assigment Student Class</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-center">
                        <i class="bi bi-exclude"> <span class="spanCreate"> Welcome To Assigment Student Class</span></i>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('assigment.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row ">
                                <label class="bi bi-file-earmark-word-fill col-form-label col-md-2 LabForm"> File</label>
                                <div class="col-md-10">
                                    <input type="file" value="{{old('file_assigment')}}" name="file_assigment" class="form-control place @error ('file_assigment') is-invalid @else is-valid @enderror">
                                    @error('file_assigment')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="bi bi-building-fill-add col-form-label col-md-2 LabForm"> ID</label>
                                <div class="col-md-10">
                                    <input type="text" name="code_assigment" value="{{old('code_assigment')}}" class="form-control place @error ('code_assigment') is-invalid @else is-valid @enderror" placeholder="Input ID Assigment">
                                    @error('code_assigment')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="bi bi-person-fill-add col-form-label col-md-2 LabForm"> Student</label>
                                <div class="col-md-10">
                                    <select name="tbl_student_id" class="form-control @error ('name_student') is-invalid @else is-valid @enderror">
                                        <option class="">-- Please Select --</option>
                                        @foreach($studentAssig as $stund)
                                        @php $sel = ( old('name_student')==$stund['id'] ) ? 'selected' : ''; @endphp
                                        <option class="optins" value="{{$stund->id}}" {{$sel}}>{{$stund->name_student}}</option>
                                        @endforeach
                                    </select>
                                    @error('name_student')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="bi bi-clock-fill col-form-label col-md-2 LabForm"> Clock</label>
                                <div class="col-md-10">
                                    <input type="datetime-local" value="{{ old('clock_assigment') }}" name="clock_assigment" class="form-control place @error ('clock_assigment') is-invalid @else is-valid @enderror">
                                    @error('clock_assigment')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <a href="{{url('/assigment')}}" class="btn btn-danger btp">Cancel</a>
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