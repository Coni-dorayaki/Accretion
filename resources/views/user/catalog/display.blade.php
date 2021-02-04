@extends('layouts.app')
@section('title', 'カタログ情報履歴一覧')

@section('content')
<div class="container mt-4">
    <div class="border p-4">
        <!-- 件名 -->
        <h1 class="h4 mb-4">
            【名称】{{ $catalog->name }}
        </h1>
 
        <!-- 本文 -->
        <h2 class="mb-5">
            【部品番号】{!! nl2br(e($catalog->number)) !!}
        </h2>
        <h2>
            【価格】{!! nl2br(e($catalog->price)) !!}円
        </h2>
    </div>
</div>
@endsection