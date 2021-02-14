@extends('layout')
        
@section('content')
    <in-progress-table :tasks="{{ $tasks }}" dev="{{ $dev }}"></in-progress-table>
@endsection