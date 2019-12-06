@extends('layouts.getaride')
@section('content')
    <div class="container">
        <div class="pull-right">
            <a href="{{ url('/addcar') }}" class="btn btn-primary">Add Car</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table width="100%" class="table table-bordered">
                    <tr>
                        <th>Car Name</th>
                        <th>Price Per Hour</th>
                        <th>Is Available ?</th>
                        <th>Has AC ?</th>
                    </tr>                    
                    @foreach($data['cars'] as $car)
                        <tr>
                            <td>{{ $car->car_name }}</td>
                            <td>{{ $car->price_per_hour }}</td>
                            <td>
                               @php
                                  {{{ 'Yes' }}}
                                }
                                @else
                                  {{{ 'No' }}}
                                @endif
                            </td>
                            <td>{{ $car->is_ac }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection