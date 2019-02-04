@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            @include('info.partials._nav')
        </div>
        <div class="col-md-8">
            @foreach ($stories as $story)
                <div class="card">
                    <div class="card-header text-center">Hacker News</div>

                    <div class="card-body">

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
