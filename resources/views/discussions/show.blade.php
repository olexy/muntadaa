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

    @foreach ($discussion->replies()->paginate(3) as $reply)

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div>
                    <img src="{{ Gravatar::src($reply->owner->email) }}" alt="" width="20px" height="20px" style="border-radius: 50%">
                    <span>
                     {{ $reply->owner->name }}
                    </span>
                </div>

            </div>
            {{-- <h6><strong>Replies</strong></h6> --}}
        </div>

        <div class="card-body">
            {!! $reply->content !!}
        </div>

    </div>

    @endforeach

    {{ $discussion->replies()->paginate(3)->links() }}

    <div class="card-header">
        <h6><strong>Add a Reply</strong></h6>
    </div>

    <div class="card-body">
       @auth
            <form action="{{ route('replies.store', $discussion->slug) }}" method="post">
            @csrf
                <div class="form-group">
                    <input id="reply" type="hidden" name="reply">
                    <trix-editor input="reply"></trix-editor>
                </div>
                <button class="btn btn-success" type="submit">Submit Reply</button>
            </form>
       @else
        <a href="{{ route('login') }}" class="btn btn-info my-2" style="width: 100%; color: #fff ">Sign-in to Add Reply</a>
       @endauth
    </div>


</div>

@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.css">
@endsection

@section('js')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.js"></script>
@endsection

