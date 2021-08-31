@extends('frontEnd.layouts.app')
@section('title','Update Password')
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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="updatePassword">
                    <div class="card mb-3">
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                            <div class="text-center">
                                <img src="{{ asset('img/security.png')}}" alt="">
                            </div>

                            <div class="form-group">
                                <div class="label">Old Password</div>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="label">New Password</div>
                                <input type="text" class="form-control">
                            </div>
                            <button type="submit" class="btn-block btn btn-theme">Update</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        
    })
</script>   
@endsection
