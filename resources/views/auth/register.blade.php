@extends('layouts.app')

<style>
    .parsley-errors-list li{
        list-style: none;
        color: red;
    }
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required  data-parsley-pattern="[a-zA-Z]+$" data-parsley-trigger="keyup" />
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" required data-parsley-type="email" data-parsley-trigger="keyup" />
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" name="password" id="password" class="form-control" required data-parsley-length="[8,12]" data-parsley-trigger="keyup" />
                        </div>

                        <div class="form-group">
                            <label for="cpassword">Confirm Password</label>
                            <input type="text" name="cpassword" id="cpassword" class="form-control" required data-parsley-equelto="#password" data-parsley-trigger="keyup" />
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <script>
        $(function(){
            $("#registerForm").parsley();
        })
    </script>
@endsection
