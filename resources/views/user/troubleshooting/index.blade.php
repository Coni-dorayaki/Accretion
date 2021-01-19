@extends('layouts.app')
@section('title', '事例作成履歴一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>トラブルシュート事例の履歴</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="{{ action('Admin\TroubleshootController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">製品区分</label>
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
                            @foreach($posts as $troubleshoot)
                                <tr>
                                    <th>{{ $troubleshoot->id }}</th>
                                    <th>{{ $troubleshoot->title }}</th>
                                    <th>{{ $troubleshoot->machineClass }}</th>
                                    <td>{{ \Str::limit($troubleshoot->body, 100) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection