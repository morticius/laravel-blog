@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Update user @endslot
            @slot('parent') Main @endslot
            @slot('active') User @endslot
        @endcomponent

        <hr>

        <form class="form-horizontal" action="{{route('admin.user_managment.user.update', $user)}}" method="post">
            {{ csrf_field() }}



            @include('admin.user_managment.users.partials.form')

        </form>

    </div>
@endsection
