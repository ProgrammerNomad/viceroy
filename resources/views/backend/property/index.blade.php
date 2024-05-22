@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('property.create') }}"> Create Property</a>
            </div>
            <div class="row mt-4">

                <div class="col">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Property ID</th>
                                    <th scope="col">Property Name</th>
                                    <th scope="col">Property Type</th>
                                    <th scope="col">Type of Property</th>
                                    <th scope="col"> Address</th>
                                    <th scope="col">Beds Rooms </th>
                                    <th scope="col">Bath Rooms</th>
                                    <th scope="col">Number of Rooms</th>
                                    <th scope="col">Area</th>
                                    <th scope="col">Discription</th>
                                    <th scope="col">price</th>
                                    <th scope="col">Originating Year</th>
                                    <th scope="col">Property Images</th>
                                    <th scope="col">Property floor_plan</th>
                                    <th scope="col">Property Video</th>
                                    <th scope="col">Property Map</th>
                                    <th scope="col">Slag</th>
                                    <th scope="col">facilities</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($propertys as $property)
                                <tr>
                                    <td>{{ $property->id }}</td>
                                    <td>{{ $property->p_id }}</td>
                                    <td>{{ $property->title }}</td>
                                    <td>{{ $property->type }}</td>
                                    <td>{{ $property->p_type }}</td>
                                    <td>{{ $property->address }}</td>
                                    <td>{{ $property->bed }}</td>
                                    <td>{{ $property->number_bathroom }}</td>
                                    <td>{{ $property->number_of_room }}</td>
                                    <td>{{ $property->area }}</td>
                                    <td>{{ $property->desc }}</td>
                                    <td>{{ $property->price }}</td>
                                    <td>{{ $property->year }}</td>

                                    <td>
                                        @php
                                            $images = unserialize($property->image);
                                        @endphp
                                        @if ($images !== false && is_array($images))
                                        {{-- asset('public/uploads/' . $image) --}}
                                            @foreach ($images as $image)
                                                <img src="{{ asset('public/' . $image) }}" alt="Image" style="width: 100%">
                                            @endforeach
                                        @else
                                            <p>No images available</p>
                                        @endif
                                    </td>
                                    <td>
                                        @php
                                            $floorPlans = unserialize($property->floor_plan);
                                        @endphp
                                        @if ($floorPlans !== false && is_array($floorPlans))
                                            @foreach ($floorPlans as $floorPlan)
                                                <img src="{{ asset('public/' . $floorPlan) }}" alt="Floor Plan" style="width: 100%">
                                            @endforeach
                                        @else
                                            <p>No floor plans available</p>
                                        @endif
                                    </td>

                                    <td>{{ $property->video }}</td>
                                    <td>{{ $property->map }}</td>
                                    <td>{{ $property->slag }}</td>

                                    <td>
                                        @php
                                            $facilitiesy = unserialize($property->facilities);
                                        @endphp
                                        @if (!empty($facilitiesy))
                                            <ul>
                                                @foreach ($facilitiesy as $facility)
                                                    @php
                                                        $facility = App\Models\Facilities::find($facility);
                                                    @endphp
                                                    @if ($facility)
                                                        <li>{{ $facility->name }}</li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        @else
                                            <p>No facilities available</p>
                                        @endif
                                    </td>

                                    <td>
                                        <form action="{{ route('property.destroy', $property->id) }}" method="Post">
                                            <a class="btn btn-primary"
                                                href="{{ route('property.edit', $property->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-7">
                    <div class="float-left">
                        <!-- Any additional content you want to add -->
                    </div>
                </div>
                <div class="col-5">
                    <div class="float-end">
                        <!-- Any additional content you want to add -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection