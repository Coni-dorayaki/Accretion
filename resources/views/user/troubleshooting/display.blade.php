@extends('layouts.app')
@section('title', 'FAQ詳細画面')

@section('content')
<div class="container mt-4">
    <div class="border p-4">
        <!-- 件名 -->
        <h1 class="h4 mb-4">
            【タイトル】{{ $troubleshoot->title }}
        </h1>
        <h2>【機種】{{ $troubleshoot->machineClass }}</h2>
 
        <!-- 本文 -->
        <p class="mb-5">
            {!! nl2br(e($troubleshoot->body)) !!}
        </p>
    </div>
</div>
@endsection