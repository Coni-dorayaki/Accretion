@extends('layouts.app')
@section('title', 'お知らせ詳細')

@section('content')
<div class="container mt-4">
    <div class="border p-4">
        <!-- 件名 -->
        <h1 class="h4 mb-4">
            {{ $information->title }}
        </h1>
 
        <!-- 本文 -->
        <p class="mb-5">
            {!! nl2br(e($information->body)) !!}
        </p>
    </div>
</div>
@endsection