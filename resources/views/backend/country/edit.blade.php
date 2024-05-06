@extends('backend.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('country.index') }}" enctype="multipart/form-data">
                Back</a>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="container mt-5">
                    <form method="post" action="{{ route('country.update',$country->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-2">
                            <label for="exampleInputEmail1">Services Name</label>
                            <input type="text" class="form-control" name="co_name" value="{{ $country->co_name}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-7">
                <div class="float-left">

                </div>
            </div>
            <div class="col-5">
                <div class="float-end">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
