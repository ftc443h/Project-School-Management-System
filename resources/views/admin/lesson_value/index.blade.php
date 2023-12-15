@extends('admin.layouts.index')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p class="mt-3">{{ $message }}</p>
        </div>
        @endif

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
                        <span>Lesson Value</span>
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
                    <h3 class="page-title mb-0">Grade Student</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb mb-0 p-0 float-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><span>Grade Student</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    @if(Auth::user()->role_users != 'teacher')
                    @else
                    <div class="weppr-class container-fluid">
                        <a class="text-center create" href="{{ route('lesson_value.create') }}" title="Create"><i class="bi bi-plus-circle"></i></a>
                    </div>
                    @endif
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                    </div>
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Photo</th>
                                    <th class="text-center">Student</th>
                                    <th class="text-center">Lesson</th>
                                    <th class="text-center">Daily Tasks</th>
                                    <th class="text-center">UTS</th>
                                    <th class="text-center">UAS</th>
                                    <th class="text-center">Final Score</th>
                                    <th class="text-center">Grade</th>
                                    <th class="text-center">Predikat</th>
                                    <th class="text-center">Status</th>
                                    @if(Auth::user()->role_users == 'admin')
                                    @else
                                    <th class="text-center">Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach($lessonValue as $lessoV)
                                <tr>
                                    <td class="text-center">{{ $no }}</td>
                                    <td class="text-center">
                                        @empty($lessoV->photo)
                                        <img src="{{url('admin/assets/img/profile/notprofileimages.png')}}" alt="" width="15%" style="width: 50px;">
                                        @else
                                        <img src="{{url('admin/assets/img/profile/')}}/{{$lessoV->photo}}" alt="" width="15%" style="width: 40px;">
                                        @endempty
                                    </td>
                                    <td class="text-center">{{ $lessoV->student }}</td>
                                    <td class="text-center">{{ $lessoV->learning }}</td>
                                    <td class="text-center">{{ $lessoV->dailytasks_grade }}</td>
                                    <td class="text-center">{{ $lessoV->uts_grade }}</td>
                                    <td class="text-center">{{ $lessoV->uas_grade }}</td>
                                    <td class="text-center">{{ $lessoV->average_grade }}</td>
                                    <td class="text-center">{{ $lessoV->grade }}</td>
                                    <td class="text-center">{{ $lessoV->predikat }}</td>
                                    <td class="text-center">

                                        @php
                                        $status_ketvalue = $lessoV->ketnilai;
                                        $btn_color = '';

                                        switch ($status_ketvalue){
                                        case 'Graduate';
                                        $btn_color = 'btn-success';
                                        break;
                                        case 'Not Pass':
                                        $btn_color = 'btn-danger';
                                        break;
                                        default:
                                        $status_ketvalue = '';
                                        }
                                        @endphp

                                        <label class="btn btn-sm {{ $btn_color }}">{{ $lessoV->ketnilai }}</label>
                                    </td>
                                    @if(Auth::user()->role_users == 'admin')
                                    @else
                                    <td class="text-center">
                                        <form method="POST" action="{{ route('lesson_value.destroy', $lessoV->id) }}">
                                            @csrf
                                            @method('DELETE')

                                            @if(Auth::user()->role_users != 'student')
                                            @else
                                            <a href="{{ route('lesson_value.show', $lessoV->id) }}" class="text-center eyes" title="View"><i class="bi bi-eye-fill text-center"></i></a>
                                            @endif

                                            @if(Auth::user()->role_users != 'teacher')
                                            @else
                                            <a href="{{ route('lesson_value.edit', $lessoV->id) }}" class="text-center edit" title="Edit"><i class="bi bi-pencil-square text-center"></i></a>
                                            <button class="text-center trash" name="delete" value="delete" title="Trash"><i class="bi bi-trash3 text-center"></i></button>
                                            @endif
                                        </form>
                                    </td>
                                    @endif
                                </tr>
                                @php $no++; @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--Row-->

    </div>
    @include('admin.classroom.message')
</div>
@endsection