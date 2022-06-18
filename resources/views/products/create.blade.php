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
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="field">
                        <strong class="label">Name</strong>
                        <label>
                            <input type="text" name="name" class="form-control" placeholder="Type the name here" data-validation="name">
                        </label>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="field">
                        <strong class="label">Detail:</strong>
                        <label>
                            <textarea class="form-control" style="height:150px" name="detail" placeholder="Type the details of the product here" data-validation="detail"></textarea>
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

    <script>

        $(function() {
            $("form").BulmaValidator({
                name: "BulmaValidator"
            });
        });

        $("form").BulmaValidator({
            name: "BulmaValidator",
            fields: ["text", "detail"],
            settings: {
                text: {
                    regex: "^[A-Za-z ,.'-]{3,35}$"
                },
        detail: {
                    regex: "^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+$"
                },
                classes: {
                    danger: "is-danger",
                    success: "is-success",
                    helptext: "help"
                }
            }
        });
    </script>
@endsection
