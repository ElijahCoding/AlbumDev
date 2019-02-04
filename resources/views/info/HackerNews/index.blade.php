@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            @include('info.partials._nav')
        </div>
        <div class="col-md-8">
            @foreach ($stories as $story)
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">
                            <strong>
                                {{ strlen($story->title) > 65 ? substr($story->title, 0, 65) . '...' : $story->title }}
                            </strong>
                            <strong class="float-right">
                                {{ $story->timestamp }}
                            </strong>
                        </h5>
                        <br>
                        <a target="_blank" href="{{ $story->link }}" class="btn btn-dark float-right">Check it</a>
                      </div>
                    </div>
                  </div>
              </div>
              <br>
            @endforeach
        </div>
    </div>
@endsection
