@extends('layouts.app')
@section('title', '利用者一覧')

@section('content')
<div class="container">
    <h1>マイページ</h1>
            <div class="list-userinfo col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <td width="5%">ID</td>
                                <td width="10%">会社名</td>
                                <th width="10%">名前</th>
                                <th width="20%">メールアドレス</th>
                                <th width="20%">住所</th>
                                <td width="10%">電話番号</td>
                                <td width="10%">使用機械</td>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <th>{{$user->id}}</th>
                                    <th>{{$user->name}}</th>
                                    <th>{{$user->email}}</th>
                                    <th>{{$user->companyName}}</th>
                                    <th>{{$user->useMachine}}</th>
                                    <th>{{$user->telNumber}}</th>
                                    <th>{{$user->address}}</th>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
