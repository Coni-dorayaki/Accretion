@extends('layouts.admin',['authgroup'=>'admin'])
@section('title', 'カタログ情報の作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>カタログ情報作成</h2>
                <form action="{{ action('Admin\CatalogController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">品名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control-file" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">部品番号</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control-file" name="number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">価格</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control-file" name="price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">参考画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="作成">
                </form>
            </div>
        </div>
    </div>
@endsection