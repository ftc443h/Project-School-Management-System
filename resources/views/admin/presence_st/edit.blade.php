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
                    <h3 class="page-title mb-0">Edit Presence Student</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb mb-0 p-0 float-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><span>Edit Presence Student</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-center">
                        <i class="bi bi-exclude"> <span class="spanCreate"> Welcome To Edit Student</span></i>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('presence_st.update', $presence_Sedit->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row ">
                                <label class="bi bi-calendar3 col-form-label col-md-2 LabForm"> Date presence</label>
                                <div class="col-md-10">
                                    <input type="datetime-local" name="date_stud" value="{{$presence_Sedit->date_stud}}" class="form-control place @error ('date_stud') is-invalid @else is-valid @enderror">
                                    @error('date_stud')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="bi bi-person-fill-add col-form-label col-md-2 LabForm"> Teacher</label>
                                <div class="col-md-10">
                                    <select name="tbl_student_id" class="form-control @error ('tbl_student_id') is-invalid @else is-valid @enderror">
                                        <option class="optins">-- Please Select --</option>
                                        @foreach($student_Sedit as $prencTC)
                                        @php $opti_student = ($prencTC->id == $presence_Sedit->tbl_student_id) ? 'selected' : ''; @endphp
                                        <option class="optins" value="{{ $prencTC->id }}" {{$opti_student}}>{{$prencTC->name_student}}</option>
                                        @endforeach
                                    </select>
                                    @error('tbl_student_id')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="bi bi-pencil-square col-form-label col-md-2 LabForm"> Present</label>
                                <div class="col-md-10">
                                    <select name="status_stud" class="form-control @error ('status_stud') is-invalid @else is-valid @enderror" id="status_stud">
                                        <option class="optins" value="Present" {{ $presence_Sedit->status_stud == "Present" ? 'selected': ''}}>Present</option>
                                        <option class="optins" value="Not Present" {{ $presence_Sedit->status_stud == "Not Present" ? 'selected': ''}}>Not Present</option>
                                        <option class="optins" value="Presence Permissions" {{ $presence_Sedit->status_stud == "Presence Permissions" ? 'selected': ''}}>Presence Permissions</option>
                                    </select>
                                    @error('status_stud')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <a href="{{url('/presence_st')}}" class="btn btn-danger btp">Cancel</a>
                            <button type="submit" name="proses" value="simpan" id="simpan" class="btn btn-primary btp">Edit</button>
                            <input type="hidden" name="id" value="{{$presence_Sedit->id}}">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('admin.classroom.message')
</div>
@endsection