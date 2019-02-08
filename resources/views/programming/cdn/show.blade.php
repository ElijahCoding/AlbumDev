@extends('layouts.app')

@section('content')
    <app-library-detail :library="{{ $library }}"></app-library-detail>
@endsection
