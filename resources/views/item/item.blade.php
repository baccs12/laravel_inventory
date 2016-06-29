@extends('layout.master')

@section('content')



<div class="wrapper">
    <div class="pageheader">
        <h1>List of items</h1>
    </div>

    <a href="/item/create" class="btn btn-primary btn-lg active" role="button">Create New Item</a>

    <div class="wrapper">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Supplier</th>
                        <th>Stock</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                    <tr>
                        <td>{{ $item->item_name }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->supplier_name }}</td>
                        <td>{{ $item->item_onhand }}</td>
                        <td><a href="/item/edit/{{ $item->id }}">Edit Item</a></td>
                        <td><a href="/item/delete">Delete Item</a></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
@stop