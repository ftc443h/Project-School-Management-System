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
                        <span>Lesson</span>
                        <h3>{{ $learningCount }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="page-title mb-0">Edit Lesson Value Class</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb mb-0 p-0 float-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><span>Edit Lesson Value Class</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-center">
                        <i class="bi bi-exclude"> <span class="spanCreate"> Welcome To Edit Lesson Value Class</span></i>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('lesson_value.update', $lesson_Edit->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label class="bi bi-person-fill-add col-form-label col-md-2 LabForm"> Student</label>
                                <div class="col-md-10">
                                    <select name="tbl_student_id" class="form-control @error ('name_student') is-invalid @else is-valid @enderror">
                                        <option class="">-- Please Select --</option>
                                        @foreach($Std_Edit as $lessonST)
                                        @php $opti_lessonST = ($lessonST->id == $lesson_Edit->tbl_student_id) ? 'selected' : ''; @endphp
                                        <option class="optins" value="{{$lessonST->id}}" {{$opti_lessonST}}>{{$lessonST->name_student}}</option>
                                        @endforeach
                                    </select>
                                    @error('name_student')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="bi bi-book-half col-form-label col-md-2 LabForm"> Lesson</label>
                                <div class="col-md-10">
                                    <select name="tbl_learning_id" class="form-control @error ('learning_class') is-invalid @else is-valid @enderror">
                                        <option class="">-- Please Select --</option>
                                        @foreach($lear_Edit as $lessonVL)
                                        @php $opti_lessonVL = ($lessonVL->id == $lesson_Edit->tbl_learning_id) ? 'selected' : ''; @endphp
                                        <option class="optins" value="{{$lessonVL->id}}" {{$opti_lessonVL}}>{{$lessonVL->learning_class}}</option>
                                        @endforeach
                                    </select>
                                    @error('learning_class')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="bi bi-pencil col-form-label col-md-2 LabForm"> Daily Tasks</label>
                                <div class="col-md-10">
                                    <input type="text" value="{{ $lesson_Edit->dailytasks_grade }}" id="dailytasks_grade" name="dailytasks_grade" class="form-control place @error ('dailytasks_grade') is-invalid @else is-valid @enderror" placeholder="Daily Tasks Input">
                                    @error('dailytasks_grade')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="bi bi-pencil col-form-label col-md-2 LabForm"> UTS</label>
                                <div class="col-md-10">
                                    <input type="text" value="{{ $lesson_Edit->uts_grade }}" id="uts_grade" name="uts_grade" class="form-control place @error ('uts_grade') is-invalid @else is-valid @enderror" placeholder="UTS Input">
                                    @error('uts_grade')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="bi bi-pencil col-form-label col-md-2 LabForm"> UAS</label>
                                <div class="col-md-10">
                                    <input type="text" value="{{ $lesson_Edit->uas_grade }}" id="uas_grade" name="uas_grade" class="form-control place @error ('uas_grade') is-invalid @else is-valid @enderror" placeholder="UAS Input">
                                    @error('uas_grade')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <a href="{{url('/lesson_value')}}" class="btn btn-danger btp">Cancel</a>
                            <button type="submit" name="proses" value="simpan" id="simpan" class="btn btn-primary btp">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('admin.classroom.message')
</div>
@endsection