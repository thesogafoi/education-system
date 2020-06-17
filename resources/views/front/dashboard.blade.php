@extends('layouts.front-app')
@section('title')
Dashboard
@endsection
@section('content')
@if(Auth::guard('student')->check())

<form action="/logout/student" method="POST">
{{csrf_field()}}
<input type="submit" value="logout"/>
</form>


@endif


@endsection