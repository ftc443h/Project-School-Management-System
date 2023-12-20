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
                        <span>Lesson</span>
                        <h3>{{ $learningCount }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="page-title mb-0">Teacher</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumb mb-0 p-0 float-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item"><span>Teacher</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Row -->
        <div class="row">
            <!-- DataTable with Hover -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    @if(Auth::user()->role_users != 'admin')
                    @else
                    <div class="weppr-class container-fluid">
                        <a class="text-center create" href="{{ route('teacher.create') }}" title="Create"><i class="bi bi-plus-circle"></i></a>
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
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Birth</th>
                                    <th class="text-center">Gender</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Address</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach($teacher as $tchr)
                                <tr>
                                    <td class="text-center">{{ $no }}</td>
                                    <td class="text-center">
                                        @empty($tchr->photo_teacher)
                                        <img src="{{url('admin/assets/img/profile/notprofileimages.png')}}" alt="" width="15%" style="width: 50px;">
                                        @else
                                        <img src="{{url('admin/assets/img/profile/')}}/{{$tchr->photo_teacher}}" alt="" width="15%" style="width: 40px;">
                                        @endempty
                                    </td>
                                    <td class="text-center">{{ $tchr->code_teacher }}</td>
                                    <td class="text-center">{{ $tchr->name_teacher }}</td>
                                    <td class="text-center">{{ $tchr->birthday_teacher }}</td>
                                    <td class="text-center">{{ $tchr->gender_teacher }}</td>
                                    <td class="text-center">{{ $tchr->email_teacher }}</td>
                                    <td class="text-center">{{ $tchr->phone_teacher }}</td>
                                    <td class="text-center">{{ $tchr->address_teacher }}</td>
                                    <td class="text-center">
                                        <form method="POST" action="{{ route('teacher.destroy', $tchr->id)}}">
                                            @csrf
                                            @method('DELETE')

                                            @if(Auth::user()->role_users == 'teacher' || Auth::user()->role_users == 'admin')
                                            <a href="{{route('teacher.show', $tchr->id)}}" class="text-center eyes" title="View"><i class="bi bi-eye-fill text-center"></i></a>
                                            @endif

                                            @if(Auth::user()->role_users != 'admin')
                                            @else
                                            <a href="{{ route('teacher.edit', $tchr->id) }}" class="text-center edit" title="Edit"><i class="bi bi-pencil-square text-center"></i></a>
                                            <button class="text-center trash" name="delete" value="delete" title="Trash"><i class="bi bi-trash3 text-center"></i></button>
                                            @endif
                                        </form>
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
    @include('admin.teacher.message')
</div>

@endsection