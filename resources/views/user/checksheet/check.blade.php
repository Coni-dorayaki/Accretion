@extends('layouts.app')
@section('title', 'チェックシートの記入')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>チェックシート</h2>
                <form action="{{ action('User\ChecksheetController@checksend') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">日付</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">温度</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control-file" name="temp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">湿度</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control-file" name="humi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">清掃状態</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control-file" name="clean">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">備考欄</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control-file" name="body">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">参考画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection