
@extends('layout.master')

@section('content')

<div class="wrapper">
    <div class="pageheader">
        <h1>Update items</h1>
    </div>

<div class="glass">
    <div class="addform">
        <form name='baccs' method='POST' action='/item/edit'>

        @foreach($item as $items)
            <label for="itemname">Item Name: </label>
            <div class="form-group"><input type='text' class="form-control" id='item_name' name='item_name' required='required' value={{ $items->item_name }}></div>
            <label for="type">Type: </label>
            <div class="form-group"><input type='text' class="form-control" id='type' name='type' required='required' value={{ $items->type }}></div>
            <label for="supplier">Supplier: </label>
            <div class="form-group"><input type='text' class="form-control" id='supplier_name' name='supplier_name' required='required' value={{ $items->supplier_name }}></div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="item">Item on Hand: </label>
                    <div class="form-group"><input type='number' class="form-control" id='item_onhand' name='item_onhand' required='required' value={{ $items->item_onhand }}></div>
                </div>
                <div class="col-sm-6">
                    <input type='submit' class="btn btn-primary form-control" value='Update'>
                </div>
            </div>
            @endforeach

        </form>
    </div>




</div>


@stop