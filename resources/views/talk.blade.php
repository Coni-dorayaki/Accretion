@extends('layouts.chat')
@section('title', '問い合わせチャット')

@section('content')
<div class="chat-container row justify-content-center">
    <div class="chat-area">
        <div class="card">
            <div class="card-header">Comment</div>
            <div class="card-body chat-card">
               @foreach ($comments as $item)
               @include('components.comment', ['item' => $item])
               @endforeach
            </div>
        </div>
    </div>
</div>
<form method="POST" action="{{route('add')}}">
    @csrf
    <div class="comment-container row justify-content-center">
        <div class="input-group comment-area">
            <textarea class="form-control" id="comment" name="comment" placeholder="push massage (shift + Enter)"
                aria-label="With textarea"
                onkeydown="if(event.shiftKey&&event.keyCode==13){document.getElementById('submit').click();return false};"></textarea>
            <button type="submit" id="submit" class="btn btn-outline-primary comment-btn">Submit</button>
        </div>
    </div>
</form>
@section('js')
<script src="{{ asset('js/comment.js') }}"></script>

@endsection

@endsection