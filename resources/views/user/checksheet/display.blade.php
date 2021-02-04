@extends('layouts.app')
@section('title', '詳細画面')

@section('content')
<div class="container mt-4">
    <div class="border p-4">
        <h2>【確認者】{{ $checksheet->name }}</h2>
        <h2>【日付】{{ $checksheet->date }}</h2>
        <h2>【温度】{{ $checksheet->temp }}</h2>
        <h2>【湿度】{{ $checksheet->humi }}</h2>
        <h2>【清掃状態】{{ $checksheet->clean }}</h2>
        <h2>【備考欄】{{ $checksheet->body }}</h2>
    </div>
</div>
@endsection