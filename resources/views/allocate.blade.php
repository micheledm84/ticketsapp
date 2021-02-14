@extends('layout')
        
@section('content')
    <allocate-task :tasks="{{ $tasks }}" :dev="{{ $dev }}"></allocate-task>
@endsection