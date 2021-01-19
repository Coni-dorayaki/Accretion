@extends('layouts.app')
@section('title', 'ACCRETION')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mainblock">
                
                <h1 class="maintitle">ACCRETION</h1>
                    
                <div class="links">
                    <a href="{{ action('User\CatalogController@index') }}" role="button" class="btn btn-primary titlebtn">Catalog</a>
                    <a href="{{ action('User\ChatController@talk') }}" role="button" class="btn btn-primary titlebtn">Chat</a>
                    <a href="{{ action('User\ChecksheetController@index') }}" role="button" class="btn btn-primary titlebtn">Checksheet</a>
                    <a href="{{ action('User\TroubleshootingController@index') }}" role="button" class="btn btn-primary titlebtn">Troubleshooting</a>
                    <a href="{{ action('User\LearningController@index') }}" role="button" class="btn btn-primary titlebtn">Learning</a>
                    <a href="{{ action('User\InformationController@index') }}" role="button" class="btn btn-primary titlebtn">Inormation</a>
                </div>
            </div>
        </div>
    </div>
@endsection