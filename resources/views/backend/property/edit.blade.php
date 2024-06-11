@extends('backend.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('property.index') }}" enctype="multipart/form-data">
                    Back</a>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <div class="container mt-5">
                        <form method="post" action="{{ route('property.update', $property->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="form-group mb-2 col-4">
                                    <label for="">Type of Property</label>
                                    <select class="form-control" name="type" value="">
                                        <option value="{{ $property->type }} ">{{ $property->type }} </option>
                                        <option value="rent"> Rent </option>
                                        <option value="buy"> Buy</option>

                                    </select>
                                </div>

                                <div class="form-group mb-2 col-4">
                                    <label for="exampleInputEmail1">Property Name</label>
                                    <input type="text" class="form-control" name="title" value="{{ $property->title }}"
                                        placeholder="">
                                </div>

                                <div class="form-group mb-2 col-4">
                                    <label for="ct_name">Address </label>
                                    <textarea class="form-control" name="address" value="" placeholder="">{{ $property->address }}</textarea>
                                </div>

                                <div class="form-group mb-2 col-4">
                                    <label for="city">Bed Rooms</label>
                                    <input type="text" class="form-control" id="city" name="bed"
                                        value="{{ $property->bed }}" placeholder="">
                                </div>

                                <div class="form-group mb-2 col-4">
                                    <label for="city">Bath Rooms</label>
                                    <input type="text" class="form-control" id="city" name="number_bathroom"
                                        value="{{ $property->number_bathroom }}" placeholder="">
                                </div>
                                <div class="form-group mb-2 col-4">
                                    <label for="city">number_of_room</label>
                                    <input type="text" class="form-control" id="city" name="number_of_room"
                                        value="{{ $property->number_of_room }}" placeholder="">
                                </div>
                                <div class="form-group mb-2 col-4">
                                    <label for="city">price</label>
                                    <input type="text" class="form-control" id="city" name="price"
                                        value="{{ $property->price }}" placeholder="">
                                </div>

                                <div class="form-group mb-2 col-4">
                                    <label>Type of Property</label>
                                    <select class="form-control" name="p_type" value="">
                                        <option value="{{ $property->p_type }}">{{ $property->p_type }}</option>
                                        <option value="Apartment">Apartment</option>
                                        <option value="Villa">Villa</option>
                                        <option value="Plot">Plot</option>
                                        <option value="Unique">Unique</option>
                                        <option value="Bungalows">Bungalows</option>
                                        <option value="Flats">Flats</option>

                                    </select>
                                </div>
                                <div class="form-group mb-2 col-4">
                                    <label for="city">Area</label>
                                    <input type="text" class="form-control" id="city" name="area"
                                        value="{{ $property->area }}" placeholder="">
                                </div>
                                <div class="form-group mb-2 col-4">
                                    <label for="image">Property Images</label>
                                    <input type="file" class="form-control" name="image[]" value="" multiple>
                                    @if (!empty($property->image) && is_array($property->image))
                                        <div class="form-group mb-2 col-12">
                                            <label>Existing Images:</label>
                                            <div class="row">
                                                @foreach ($property->image as $image)
                                                    <div class="col-md-2">
                                                        <img src="{{ asset('public/' . $image) }}" alt="Property Image"
                                                            class="img-thumbnail" style="width: 100px; height: auto;">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group mb-2 col-4">
                                    <label for="city">Property Video</label>
                                    <input type="text" class="form-control" name="video"
                                        value="{{ $property->video }}">
                                </div>
                                <div class="form-group mb-2 col-4">
                                    <label for="city">Map</label>
                                    <input type="text" class="form-control" name="map"
                                        value="{{ $property->map }}">
                                </div>
                                <div class="form-group mb-2 col-4">
                                    <label for="floor_plan">Floor Plan</label>
                                    <input type="file" class="form-control" name="floor_plan[]" multiple>
                                    @php
                                    // Check if $property->floor_plan is serialized
                                    $floorPlans = is_string($property->floor_plan) ? unserialize($property->floor_plan) : $property->floor_plan;
                                @endphp

                                @if (!empty($floorPlans) && is_array($floorPlans))
                                    <div class="form-group mb-2 col-12">
                                        <label>Existing Floor Plans:</label>
                                        <div class="row">
                                            @foreach ($floorPlans as $floor_plan)
                                                <div class="col-md-2">
                                                    <img src="{{ asset('public/' . $floor_plan) }}" alt="Property Floor Plan"
                                                        class="img-thumbnail" style="width: 100px; height: auto;">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @else
                                    <p>No floor plans available</p>
                                @endif
                                </div>
                                <div class="form-group mb-2 col-4">
                                    <label for="city"> Originating Year</label>
                                    <input type="text" class="form-control" name="year"
                                        value="{{ $property->area }}"placeholder="">
                                </div>
                                <div class="form-group mb-2 col-4">
                                    <label for="city">Discription</label>
                                    <textarea type="text" class="form-control" name="desc" placeholder="">{{ $property->desc }}</textarea>
                                </div>
                                <div class="form-group mb-2 col-4">
                                    <label >property_status</label>
                                    <select class="form-control" id="" name="property_status" value="">
                                        <option value="{{ $property->property_status }} ">{{ $property->property_status }} </option>
                                        <option value="For Sale">For Sale </option>
                                        <option value="For Buy">For Buy</option>
                                        {{-- <option value="standard">Standard</option> --}}

                                    </select>
                                </div>
                                <div class="form-group mb-2 col-4">
                                    <label for="city">Property ID</label>
                                    <input type="text" class="form-control" name="p_id"
                                        value="{{ $property->p_id }}"placeholder="">
                                </div>
                                <div class="form-group mb-2 col-4">
                                    <label for="city">Slag</label>
                                    <input type="text" class="form-control" name="slag"
                                        value="{{ $property->slag }}"placeholder="">
                                </div>
                                <div class="form-group mb-2 col-4">
                                    <label for="long">Longitude</label>
                                    <input type="text" class="form-control" name="long"
                                        value="{{ $property->longitude }}" placeholder="" disabled>
                                </div>

                                <div class="form-group mb-2 col-4">
                                    <label for="lati">Latitude</label>
                                    <input type="text" class="form-control" name="lati"
                                        value="{{ $property->latitude }}" placeholder="" disabled>
                                </div>
                                <div class="form-group mb-2 col-4">
                                    <label for="featured">Featured</label>
                                    <input type="checkbox" name="featured" value="1"
                                        {{ $property->featured ? 'checked' : '' }}>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="facilities">Facilities:</label><br>
                                <div class="row">
                                    @foreach ($facilities as $facility)
                                        <div class="col-md-6">
                                            <input type="checkbox" id="{{ $facility->id }}" name="facilities[]"
                                                value="{{ $facility->id }}"
                                                {{ in_array($facility->id, $selectedFacilities) ? 'checked' : '' }}>
                                            <label for="{{ $facility->id }}">{{ $facility->name }}</label><br>
                                        </div>
                                    @endforeach
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
