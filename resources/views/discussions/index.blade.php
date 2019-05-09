@extends('layouts.app')

@section('content')

@foreach ($discussions as $discussion)

    <div class="card">
        @include('partials.discussion-header')

                <div>
                    <a href="{{ route('discussions.show', $discussion->slug) }}" class="btn btn-success btn.sm">View</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="text-center">
                <strong> {{ $discussion->title }} </strong>
            </div>
        </div>
    </div>

@endforeach
    {{ $discussions->links() }}

@endsection
