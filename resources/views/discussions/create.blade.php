@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">Add Discussion</div>
        <div class="card-body">
            <form action="{{ route('discussions.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title" id="title" value="">
                </div>
                <div class="for-group">
                    <label for="channel">Select A Channel</label>
                        <select class="form-control" name="channel" id="channel">
                            @foreach ($channels as $channel)
                            <option value="{{ $channel->id }}">{{ $channel->name }}</option>
                            @endforeach
                        </select>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    {{-- <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea> --}}
                    <input id="content" type="hidden" name="content">
                    <trix-editor input="content"></trix-editor>
                </div>
                   <button class="btn btn-success" type="submit">Create Discussion</button>
            </form>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.css">
@endsection

@section('js')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.1.1/trix.js"></script>
@endsection
