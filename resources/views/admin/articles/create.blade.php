@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Create article @endslot
            @slot('parent') Main @endslot
            @slot('active') Articles @endslot
        @endcomponent

        <hr>

        <form class="form-horizontal" action="{{route('admin.article.store')}}" method="post">
            {{ csrf_field() }}



            @include('admin.articles.partials.form')

            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>

    </div>
@endsection
