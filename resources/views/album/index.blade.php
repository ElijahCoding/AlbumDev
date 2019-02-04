@extends('layouts.app')

@section('content')
    <album-index :albums="{{ $albums }}"></album-index>
@endsection
