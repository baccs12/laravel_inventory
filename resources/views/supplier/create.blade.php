@extends('layout.master')

@section('content')

<div class="pageheader">
    <h1>Add Supplier</h1>
</div>

<div class="glass">
    <div class="addform">
        <form name='baccs' method='POST' action='/supplier'>
            <label for="itemname">Supplier Name: </label>
            <div class="form-group"><input type='text' class="form-control" id='supplier_name' name='supplier_name' required='required'></div>
                    <input type='submit' class="btn btn-primary form-control" value='Add Supplier'>
            </div>
        </form>
    </div>
</div>




@stop