@extends('layouts.admin',['authgroup'=>'admin'])
@section('title', 'チェックシート履歴一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>チェックシート記入履歴</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="{{ action('Admin\ChecksheetController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">会社名</label>
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
                                <th width="10%">ID</th>
                                <th width="10%">会社名</th>
                                <th width="10%">確認者</th>
                                <th width="10%">日付</th>
                                <th width="10%">温度</th>
                                <th width="10%">湿度</th>
                                <th width="10%">清掃状態</th>
                                <th width="20%">備考欄</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $checksheet)
                                <tr>
                                    <th>{{ $checksheet->id }}</th>
                                    <th>{{ $checksheet->companyName }}</th>
                                    <th>{{ $checksheet->name }}</th>
                                    <th>{{ $checksheet->date }}</th>
                                    <th>{{ $checksheet->temp }}</th>
                                    <th>{{ $checksheet->humi }}</th>
                                    <th>{{ $checksheet->clean }}</th>
                                    <td>{{ \Str::limit($checksheet->body, 100) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection