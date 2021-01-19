@extends('layouts.app')
@section('title', 'お知らせ一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>お知らせ一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="{{ action('User\InformationController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
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
                                <th width="5%">ID</th>
                                <th width="10%">タイトル</th>
                                <td width="40%">本文</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $information)
                                <tr>
                                    <th>{{ $information->id }}</th>
                                    <th>{{ $information->title }}</th>
                                    <td>{{ \Str::limit($information->body, 100) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection