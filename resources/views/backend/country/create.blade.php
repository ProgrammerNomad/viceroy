@extends ('backend.layouts.app')



@section('content')
<div class="card">
    <div class="card-body">

        <div class="pull-right mb-2">
            <a class="btn btn-success" href="{{ route('country.index') }}"> Country</a>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="container mt-5">

                    <form method="POST" action="{{ route('country.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="exampleInputEmail1">Country Name</label>
                            <input type="text" class="form-control" name="co_name" placeholder="">
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


