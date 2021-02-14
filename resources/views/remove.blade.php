@extends('layout')
        
@section('content')
    <remove-task :tasks_user="{{ $tasks_user }}" dev="{{ $dev }}"></remove-task>
@endsection