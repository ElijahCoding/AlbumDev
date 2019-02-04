@extends('layouts.app')

@section('content')
    <albums :albums="{{ $albums }}"></albums>
@endsection
