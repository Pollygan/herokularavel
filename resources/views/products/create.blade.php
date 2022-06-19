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
                            <input type="text" name="name" class="form-control" placeholder="Fill in the name here">
                        </label>
                    </div>
                </div>

                @if($errors->any()) {

                   <input type="text" name="name" class="input is-success" placeholder="Good">
                } @else {
                  <input type="text" name="name" class="input is-danger" placeholder="The field is required">
                }
                @endif

                <div class="col-xs-12 col-sm-12 col-md-12 pt-5">
                    <div class="form-group">
                        <strong>Detail</strong>
                        <label>
                            <textarea class="form-control" style="height:130px" name="detail" placeholder="Fill in the details of the product here"></textarea>
                        </label>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
