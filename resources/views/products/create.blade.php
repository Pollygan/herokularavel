@extends('layouts.app')

@section('content')
    <div class="container-md">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Add New Product</h2>
                </div>
            </div>
        </div>

        <form id="demoForm" action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 pt-5">
                    <div class="form-group">
                        <strong>Name</strong>
                        <label>
                            <input class="input {{ $errors->has('name') ? 'is-danger' : 'is-success' }}" type="text" name="name" placeholder="Fill in the name here">
                        </label>
                    </div>
                </div>

                @if($errors->has('name'))
                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                @endif

                <div class="col-xs-12 col-sm-12 col-md-12 pt-5">
                    <div class="form-group">
                        <strong>Detail</strong>
                        <label>
                            <textarea class="form-control" style="height:130px" name="detail" placeholder="Fill in the details of the product here"></textarea>
                        </label>
                    </div>
                </div>

{{--                @if($errors->all())--}}
{{--                    <div class="alert alert-danger" style="color: red">Please fill in the detail of the product</div>--}}
{{--                @endif--}}

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
