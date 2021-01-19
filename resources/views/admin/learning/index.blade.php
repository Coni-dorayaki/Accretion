@extends('layouts.admin',['authgroup'=>'admin'])
@section('title', 'ラーニング作成履歴一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>ラーニング記事履歴</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\LearningController@add') }}" role="button" class="btn btn-primary">ラーニング記事の作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\LearningController@index') }}" method="get">
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
                                <th width="20%">タイトル</th>
                                <th width="20%">製品区分</th>
                                <td width="40%">本文</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $learning)
                                <tr>
                                    <th>{{ $learning->id }}</th>
                                    <th>{{ $learning->title }}</th>
                                    <th>{{ $learning->machineClass }}</th>
                                    <td>{{ \Str::limit($learning->body, 100) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection