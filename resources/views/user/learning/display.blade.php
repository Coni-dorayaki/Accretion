@extends('layouts.admin',['authgroup'=>'admin'])
@section('title', 'ラーニング詳細画面')

@section('content')
<div class="container mt-4">
    <div class="border p-4">
        <!-- 件名 -->
        <h1 class="h4 mb-4">
            【タイトル】{{ $learning->title }}
        </h1>
        <h2>【機種】{{ $learning->machineClass }}</h2>
 
        <!-- 本文 -->
        <p class="mb-5">
            {!! nl2br(e($learning->body)) !!}
        </p>
    </div>
</div>
@endsection