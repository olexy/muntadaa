@extends('layouts.app')

@section('content')


<div class="card">
        <div class="card-header">Notifications</div>

        <div class="card-body">
            <ul class="list-group">
            @foreach ($notifications as $notification)
                    <li class="list-group-item">
                    @if ($notification->type == 'Muntadaa\Notifications\NewReplyAdded' )
                        A new notitication was added to your <strong> {{ $notification->data['discussion']['title'] }} </strong> discussion
                        <a href="{{ route('discussions.show', $notification->data['discussion']['slug']) }}" class="btn btn-info btn-sm float-right"> View discussion </a>
                    @endif
                    @if($notification->type == 'Muntadaa\Notifications\BestReply')
                        Your reply to the discussion <strong>{{ $notification->data['discussion']['title'] }}</strong> was marked as best!
                        <a href="{{ route('discussions.show', $notification->data['discussion']['slug']) }}" class="btn btn-info btn-sm float-right"> View discussion </a>
                    @endif
                    </li>
            @endforeach
            </ul>
        </div>
    </div>
@endsection
