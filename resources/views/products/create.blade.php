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
                    <div class="form-group">
                        <strong>Name:</strong>
                        <label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Detail:</strong>
                        <label>
                            <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
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
        document.getEventListener('DOMContentLoaded', function (e) {
            FormValidation.formValidation(document.getElementById('demoForm'), {
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: 'The name is required',
                            },
                            stringLength: {
                                min: 6,
                                max: 30,
                                message: 'The name must be more than 6 and less than 30 characters long',
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_]+$/,
                                message: 'The name can only consist of alphabetical, number and underscore',
                            },
                        },
                    },

                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bulma: new FormValidation.plugins.Bulma(),
                        submitButton: new FormValidation.plugins.SubmitButton(),
                        icon: new FormValidation.plugins.Icon({
                            valid: 'fa fa-check',
                            invalid: 'fa fa-times',
                            validating: 'fa fa-refresh',
                        }),
                    },
                },
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>
    <script src="/vendors/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="/vendors/formvalidation/dist/js/plugins/Bulma.min.js"></script>
@endsection
