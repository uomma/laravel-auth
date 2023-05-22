@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-start">
            <div>

                {{ $post->title }}
            </div>
            <div> 
                {{ $post->caption }}
            </div>

        </div>
    </div>
@endsection
