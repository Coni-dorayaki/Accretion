@extends('layouts.app')
@section('title', 'カタログ情報履歴一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>カタログ情報履歴</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="{{ action('Admin\CatalogController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">品名</label>
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
                                <th width="30%">品名</th>
                                <th width="30%">部品番号</th>
                                <td width="30%">価格</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $catalog)
                                <tr>
                                    <th>{{ $catalog->id }}</th>
                                    <th>{{ $catalog->name }}</th>
                                    <th>{{ $catalog->number }}</th>
                                    <td>{{ $catalog->price }}</td>
                                    <td>
                                        <div>
                                        <a href="{{ action('User\CatalogController@show', $catalog->id) }}" role="button" class="btn btn-primary">詳細</a>
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