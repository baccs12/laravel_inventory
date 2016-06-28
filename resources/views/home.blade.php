@extends('master')

@section('content')

<div class="wrapper">
    <p>Inventory System</p>
        <div class="buttons">
        <ul>
            <li><span><a href="item.blade.php"><img src="{{ ('css/items.png') }}" class="itemicon"><br>Items</a></span></li>
            <li><span><a href="supplier.blade.php"><img src="{{ ('css/supplier.png') }}" class="suppliericon"><br>Supplier</a></span></li>
            <li><span><a href="update.blade.php"><img src="{{ ('css/update.png') }}" class="updateicon"><br>Stock Update</a></span></li>
            <li><span><a href="users.blade.php"><img src="{{ ('css/users.png') }}" class="usericon"><br>User</a></span></li>
        </ul>

        </div>
</div>

@stop