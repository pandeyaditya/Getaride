@extends('layouts.getaride')
@section('content')
        <div class="container">
            <div class="row">
            <div class="col-md-12">
            <h5>Add Trip</h5>  
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif     

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form method="post" action="{{ url('/savetrip') }}">
                <label>Source</label>
                <input class="form-control" type="text" name="source" id="source"><br/>

                <label>Destination</label>
                <input class="form-control" type="text" name="destination" id="destination"><br/>

                <label>Price</label>
                <input class="form-control" type="text" name="price" id="price"><br/>
                <br/>

                <label>Is Expired ?</label>
                <select  class="form-control" name="is_ac" id="is_ac">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
                <br/>

                {{ csrf_field() }}
                <input class="btn btn-success" type="submit" name="add_trip" id="add_trip" value="Add Trip">
            </form>
            </div>
            </div>
        </div>
@endsection    