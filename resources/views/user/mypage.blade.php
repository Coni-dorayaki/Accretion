@extends('layouts.app')
@section('title', 'マイページ')

@section('content')
<div class="container">
    <h1>マイページ</h1>
            <div class="list-userinfo col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <td width="10%">会社名</td>
                                <th width="10%">名前</th>
                                <th width="20%">メールアドレス</th>
                                <th width="20%">機種</th>
                                <td width="10%">電話番号</td>
                                <td width="10%">住所</td>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
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
