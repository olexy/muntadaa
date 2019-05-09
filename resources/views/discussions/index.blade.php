@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-end mb-2">
<a href="{{ route('discussions.create') }}" class="btn btn-success">Add Discussion</a>
</div>
@foreach ($discussions as $discussion)

    <div class="card">
        <div class="card-header"><h3><strong>{{ $discussion->title }}</strong></h3></div>

        <div class="card-body">
           {!! $discussion->content  !!}
        </div>
    </div>

@endforeach
    {{ $discussions->links() }}

@endsection
