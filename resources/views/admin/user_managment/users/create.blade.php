@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Create user @endslot
            @slot('parent') Main @endslot
            @slot('active') User @endslot
        @endcomponent

        <hr>

        <form class="form-horizontal" action="{{route('admin.user_managment.user.store')}}" method="post">
            {{ csrf_field() }}



            @include('admin.user_managment.users.partials.form')

        </form>

    </div>
@endsection
