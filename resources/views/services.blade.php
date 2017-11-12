@extends('layout')

@section('content')

<div class="container">

    <div class='row'>
        <div class='col-md-8 col-md-offset-2'>

            <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>資料持續整理中</strong>：<a href='https://docs.google.com/spreadsheets/d/1p1PZLHvTiz11xMfM0GhygnE8ObFghZ7EQ6Q0zw1FLm8/edit?usp=sharing' target="_blank">點這裡可以參與編輯</a>
            </div>

            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>上次更新資料時間</strong>：2017-11-12 14:35</a>
            </div>

        </div>
    </div>
</div>

<div class="container">

    <div class='row'>
        <div class='col-md-12'>
            <div class="header-box">
                <h2 class="title">架站服務</h2>
                <p class="description">
                    找看看有沒有適合的架站服務吧！
                </p>
            </div>
        </div>
    </div>
</div>

<br>

<div class='container'>

    <div class='row item-box -header'>
        <div class='col-md-1'>
            名稱
        </div>
        <div class='col-md-2'>
            支援功能
        </div>
        <div class='col-md-4'>
            補充說明
        </div>
        <div class='col-md-4'>
            價格
        </div>
        <div class='col-md-1'>
            網址
        </div>
    </div>
    @foreach($rows as $row)
    <div class='row item-box'>
        <div class='col-md-1'>
            <div class='title'>{{ $row[0] }}</div>
        </div>
        <div class='col-md-2'>
            {!! ($row[2]) !!}
        </div>
        <div class='col-md-4'>
            {{ $row[3] }}
        </div>
        <div class='col-md-4'>
            {{ $row[4] }}
        </div>
        <div class='col-md-1'>
            <a href='{{$row[1]}}' target="_blank">網址</a>
        </div>
    </div>
    @endforeach
</div>

@endsection
