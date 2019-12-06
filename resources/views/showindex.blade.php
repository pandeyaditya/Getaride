@extends('layouts/getaride')
@section('content')
 <div class="container">
        <div class="row">

            <div class="col-md-6" style="margin-top:20px;">

                 <!-- Tabs Code -->
                    <div id="tabs">
                      <ul>
                        <li><a href="#tabs-1">Outstation</a></li>
                        <li><a href="#tabs-2">Local</a></li>
                        <!-- <li><a href="#tabs-3">Airport</a></li> -->
                      </ul>
                      <div id="tabs-1">
                        <p>

                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form method="post" action="{{ url('enquire/outstation') }}">
                                <label>Source:</label>
                                <input class="form-control" type="text" name="expense_name" id="expense_name"><br/>

                                <label>Destination:</label>
                                <input class="form-control" type="text" name="destintation" id="destination_name"><br/>

                                <label>Start Date:</label>
                                <input class="form-control" type="text" name="start_date" id="start_date"><br/>

                                <label>Return Date:</label>
                                <input class="form-control" type="text" name="return_date" id="return_date"><br/>

                                <label>Timing:</label>
                                <input class="form-control" type="text" name="timing" id="timing"><br/>


                                {{ csrf_field() }}
                                <input class="btn btn-success" type="submit" name="add_expense" id="add_expense" value="Enquire">
                            </form>
                        </p>
                      </div>
                      <div id="tabs-2">
                        <p>
                             <p>

                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form method="post" action="{{ url('enquire/local') }}">
                                <label>Name</label>
                                <input class="form-control" type="text" name="expense_name" id="expense_name"><br/>

                                <label>Category</label>
                                <select class="form-control" name="expense_category">
                                </select><br/>

                                <label>Amount</label>
                                <input  class="form-control" type="text" name="expense_amount" id="expense_amount"><br/>

                                {{ csrf_field() }}
                                <input class="btn btn-success" type="submit" name="add_expense" id="add_expense" value="Enquire">
                            </form>
                        </p>
                        </p>
                      </div>
                      <!-- <div id="tabs-3">
                        <p>
                             <p>

                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form method="post" action="{{ url('enquire/airport') }}">
                                <label>Name</label>
                                <input class="form-control" type="text" name="expense_name" id="expense_name"><br/>

                                <label>Category</label>
                                <select class="form-control" name="expense_category">
                                </select><br/>

                                <label>Amount</label>
                                <input  class="form-control" type="text" name="expense_amount" id="expense_amount"><br/>

                                {{ csrf_field() }}
                                <input class="btn btn-success" type="submit" name="add_expense" id="add_expense" value="Enquire">
                            </form>
                        </p>
                        </p>

                      </div> -->
                    </div>
                <!-- Tabs Code Ends -->


            </div>

            <div class="col-md-6" style="margin-top:20px;">
                <p>Recently added cars</p>

                <ul>
                    <li>
                        <img src="">Innova<br>
                        Price : 5000 per day
                    </li>
                    <li>
                        <img src="">Fortuner<br>
                        Price : 5000 per day
                    </li>
                    <li>
                        <img src="">Swift Dzire<br>
                        Price : 5000 per day
                    </li>
                    <li>
                        <img src="">i20 <br>
                        Price : 5000 per day
                    </li>
                </ul>
            </div>
        </div>

    </div>
@endsection
