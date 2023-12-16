@extends('admin.layouts.index')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">

        @include('sweetalert::alert')

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
                    <h3 class="page-title mb-0">Presence Student</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb mb-0 p-0 float-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><span>Presence Student</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="weppr-class container-fluid">
                        @if(Auth::user()->role_users != 'teacher')
                        @else
                        <a class="text-center create" href="{{ route('presence_st.create') }}" title="Create"><i class="bi bi-plus-circle"></i></a>
                        @endif
                    </div>
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                    </div>
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Photo</th>
                                    <th class="text-center">Student</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach($presensi_s as $presence_stt)
                                <tr>
                                    <td class="text-center">{{ $no }}</td>
                                    <td class="text-center">
                                        @empty($presence_stt->photoS)
                                        <img src="{{url('admin/assets/img/profile/notprofileimages.png')}}" alt="" width="15%" style="width: 50px;">
                                        @else
                                        <img src="{{url('admin/assets/img/profile/')}}/{{$presence_stt->photoS}}" alt="" width="15%" style="width: 40px;">
                                        @endempty
                                    </td>
                                    <td class="text-center">{{ $presence_stt->student }}</td>
                                    <td class="text-center">{{ $presence_stt->date_stud }}</td>
                                    <td class="text-center">
                                        <!-- Kondisi Merubah Warna Otomatis Sesuai Status Presence Teacher -->
                                        @php
                                        $status_Present = $presence_stt->status_stud;
                                        $btn_color = '';

                                        switch ($status_Present){
                                        case 'Present';
                                        $btn_color = 'btn-success';
                                        break;
                                        case 'Presence Permissions';
                                        $btn_color = 'btn-info';
                                        break;
                                        case 'Not Present':
                                        $btn_color = 'btn-danger';
                                        break;
                                        default:
                                        $status_Present = '';
                                        }
                                        @endphp
                                        <label class="btn btn-sm {{ $btn_color }}">{{$presence_stt->status_stud}}</label>
                                    </td>
                                    <td class="text-center">
                                        <form method="POST" action="{{ route('presence_st.destroy', $presence_stt->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            @if(Auth::user()->role_users != 'student')
                                            @else
                                            <a href="{{ route('presence_st.show', $presence_stt->id) }}" class="text-center eyes" title="View"><i class="bi bi-eye-fill text-center"></i></a>
                                            @endif

                                            @if(Auth::user()->role_users != 'teacher')
                                            @else
                                            <a href="{{ route('presence_st.edit', $presence_stt->id) }}" class="text-center edit" title="Edit"><i class="bi bi-pencil-square text-center"></i></a>
                                            @endif

                                            @if(Auth::user()->role_users != 'admin')
                                            @else
                                            <button class="text-center trash" title="Trash"><i class="bi bi-trash3 text-center"></i></button>
                                            @endif
                                    </td>
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