@extends('layout.master')

@section('content')


<div class="wrapper">
    <div class="pageheader">
        <h1>Suppliers</h1>
    </div>



<a href="/supplier/create" class="btn btn-primary btn-lg active" role="button">New Supplier</a>
        <div class="wrapper">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Supplier Name</th>
                        <th>Supplier ID</th>
                    </tr>
                </thead>
            <tbody>
                    @foreach($supplier as $supply)
                    <tr>
                        <td>{{ $supply->supplier_name }}</td>
                        <td>{{ $supply->id }}</td>
                    </tr>
                    @endforeach
            </tbody>
            </table>
        </div>
</div>
@stop