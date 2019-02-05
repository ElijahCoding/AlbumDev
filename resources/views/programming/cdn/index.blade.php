@extends('layouts.app')

@section('content')
    {{-- {{ dd($libraries) }} --}}
    @foreach ($libraries as $library)
        <p>{{ $library }}</p>
    @endforeach
    {{-- <app-libraries :libraries="{{ $libraries }}"></app-libraries> --}}
@endsection
