@extends('layouts.admin',['authgroup'=>'admin'])
@section('title', 'お知らせ作成履歴一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>お知らせ履歴</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\InformationController@add') }}" role="button" class="btn btn-primary">お知らせの作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\InformationController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2"></label>
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
                                <th width="30%">タイトル</th>
                                <td width="50%">本文</td>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $information)
                                <tr>
                                    <th>{{ $information->id }}</th>
                                    <th>{{ $information->title }}</th>
                                    <td>{{ \Str::limit($information->body, 100) }}</td>
                                    <td>
                                        <div>
                                        <a href="{{ action('Admin\InformationController@show', $information->id) }}" role="button" class="btn btn-primary">詳細</a>
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