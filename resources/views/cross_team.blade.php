@extends('layout')
        
@section('content')
    <cross-team-table :projects="{{ $projects }}"></cross-team-table>
@endsection