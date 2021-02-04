@extends('layouts.app')
@section('title', 'チェックシート履歴一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>チェックシート記入履歴</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('User\ChecksheetController@checkfront') }}" role="button" class="btn btn-primary">チェックシートの記入</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('User\ChecksheetController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">日付</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">確認者</th>
                                <th width="10%">日付</th>
                                <th width="10%">温度</th>
                                <th width="10%">湿度</th>
                                <th width="10%">清掃状態</th>
                                <th width="20%">備考欄</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $checksheet)
                                <tr>
                                    <th>{{ $checksheet->name }}</th>
                                    <th>{{ $checksheet->date }}</th>
                                    <th>{{ $checksheet->temp }}</th>
                                    <th>{{ $checksheet->humi }}</th>
                                    <th>{{ $checksheet->clean }}</th>
                                    <td>{{ \Str::limit($checksheet->body, 100) }}</td>
                                    <td>
                                        <div>
                                        <a href="{{ action('User\ChecksheetController@show', $checksheet->id) }}" role="button" class="btn btn-primary">詳細</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection