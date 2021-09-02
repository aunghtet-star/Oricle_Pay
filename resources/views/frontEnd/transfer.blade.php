@extends('frontEnd.layouts.app')
@section('title','Transfer')
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
        <div class="card">
            <div class="card-body">
                <form action="{{route('transfer.confirm')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for=""><strong>From</strong></label>
                        <p class="text-muted mb-1">{{$user->name}}</p>
                        <p class="text-muted mb-1">{{$user->phone}}</p>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>To</strong></label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Amount(MMK)</strong></label>
                        <input type="number" name="amount" class="form-control">
                    </div>
                    <button type="submit" class="btn-block btn btn-theme mt-4">Continue</button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection
