@extends('layouts.getaride')
@section('content')
        <div class="container">
            <div class="row">
            <div class="col-md-12">
            <h5>Add Car</h5>  
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
            <form method="post" action="{{ url('/savecar') }}">
                <label>Name</label>
                <input class="form-control" type="text" name="car_name" id="car_name"><br/>

                <label>Price Per Hour</label>
                <input class="form-control" type="text" name="price_per_hour" id="price_per_hour"><br/>

                <label>Is Available ?</label>
                <select class="form-control" name="is_available" id="is_available">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
                <br/>

                <label>Has Air Condition ?</label>
                <select  class="form-control" name="is_ac" id="is_ac">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
                <br/>

                {{ csrf_field() }}
                <input class="btn btn-success" type="submit" name="add_expense" id="add_expense" value="Add Car">
            </form>
            </div>
            </div>
        </div>
@endsection    