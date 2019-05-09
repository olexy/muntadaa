@extends('layouts.app')

@section('content')

<div class="card">
        @include('partials.discussion-header')
            <div>
                <h5><strong>{{ $discussion->title }}</strong></h5>
            </div>
        </div>
    </div>

    <div class="card-body">
        {!! $discussion->content  !!}
    </div>
</div>

@endsection
