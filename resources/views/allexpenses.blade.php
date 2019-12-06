@extends('layouts.viewpage')
@section('content')
    <div class="container">
        <div class="pull-right">
            <a href="{{ url('/addexpense') }}" class="btn btn-primary">Add Expense</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table width="100%" class="table table-bordered">
                    <tr>
                        <th>Expense Id</th>
                        <th>Expense Name</th>
                        <th>Expense Category</th>
                        <th>Expense Amount</th>
                        <th>Created At</th>
                    </tr>
                    @foreach($data['expenses'] as $expense)
                        <tr>
                            <td>{{ $expense->id }}</td>
                            <td>{{ $expense->expense_name }}</td>
                            <td>{{ $expense->expense_category }}</td>
                            <td>{{ $expense->expense_amount }}</td>
                            <td>{{ $expense->created_at }}</td>
                        </tr>
                    @endforeach
                </table>

            <div class="pull-right">
                
                <b>Total Expense : </b>
                <?php echo $data['total_expense']; ?>

            </div>
            </div>
        </div>
    </div>
@endsection