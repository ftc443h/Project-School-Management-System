@extends('admin.layouts.index')
@section('content')

<div class="page-wrapper">
    @if(Auth::user()->role_users == 'teacher')
    @include('admin.dashboard.create_presenceS_admin')
    @else
    @include('admin.access_denied.access_denied_presenceS')
    @endif
</div>
@endsection