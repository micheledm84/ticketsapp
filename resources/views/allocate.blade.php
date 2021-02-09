@extends('layout')
        
@section('content')
    <h4>Assign a task to {{ $dev->name }}</h4>
    <allocate-task :tasks="{{ $tasks }}" :dev="{{ $dev }}"></allocate-task>
@endsection