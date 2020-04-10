@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Edit category @endslot
            @slot('parent') Main @endslot
            @slot('active') Categories @endslot
        @endcomponent

        <hr>

        <form class="form-horizontal" action="{{route('admin.category.update', $category)}}" method="post">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}



            @include('admin.categories.partials.form')
        </form>

    </div>
@endsection
