@extends('layouts.app')

@section('content')
    <div class="container">
        @if (count($repositories))
            <ul class="list-group">
                @foreach ($repositories as $repository)
                    <li class="list-group-item">
                        <a href="{{ $repository->html_url }}" target="_blank">
                            {{ $repository->full_name }}
                        </a>
                    </li>
                    <br>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
