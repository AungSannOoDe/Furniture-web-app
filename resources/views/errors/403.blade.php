@extends('admin.layouts.error')
@section('Content')
<h1 class="display-1">403</h1>
<p class="lead">Forriden error</p>
<p class=""> {{$exception->getMessage() ?: 'Forbidden'}} </p>
@endsection
