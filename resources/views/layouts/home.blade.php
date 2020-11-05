@extends('index')
@section('content')
<div class="page-header">
    <h1>Welcome to Stackode</h1>
</div>
<p class="lead">This build with laravel 5 {!! HTML::link('https://www.stackode.tk/', 'Stackode Lab', ['class'=>'btn btn-danger', 'target'=>'_blank']) !!}</p>
@endsection