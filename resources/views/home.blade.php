@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <div>
                        @if (session('success_message'))
                            <div class="alert alert-success">
                                {{ session('success_message') }}
                            </div>
                        @endif
                        <form action="/submit" method="POST">
                            @csrf
                            <input type="text" name="name">
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="/assets/SpiderWebtr/isAuth/isAuth.js"></script>
<script>
    let user={
        name:"{{$user->name}}",
        email:"{{$user->email}}",
    };
    let auth=defineIsAuth(user);
</script>
<style>
    .swal-icon--custom>img{
        max-height: 250px;
        border-radius: 50%;
    }
</style>
@endsection
