@extends('frontEnd.layouts.app')
@section('title','OriclePay')
@section('extra_css')
    <style>
        body {
            background: #EDEDF5;
            font-family: "Oswald", sans-serif;
        }

        .bottom-menu a {
            text-decoration: none;
        }

        .header-menu a {
            text-decoration: none;
        }

    </style>
@endsection
@section('content')
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <div class="profile  mb-3">
                    <img src="https://ui-avatars.com/api/?background=584283&color=fff&name={{$user->name}}" alt="">
                    <h4>{{$user->name}}</h4>
                    <span class="text-muted">{{number_format($user->wallet ? $user->wallet->amount : 0) }} MMK</span>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <div class="col-6 p-0 pr-3">
                <div class="card shortcut-box">
                    <div class="card-body">
                        <img src="{{asset('/img/scanner.png')}}" alt="">
                        <span>Scan Pay</span>
                    </div>
                </div>
            </div>
            <div class="col-6 p-0">
                <div class="card shortcut-box">
                    <div class="card-body">
                        <img src="{{asset('/img/qr-code.png')}}" alt="">
                        <span>Receive QR</span>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
@endsection
