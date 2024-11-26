@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Add New Menu Item</h1>
    <form action="{{ route('menu-items.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control" required>
                <option value="main">Main Dishes</option>
                <option value="Soups">Soups</option>
                <option value="Our Speciality">Our Speciality</option>
                <option value="appetizer">Appetizers</option>
                <option value="dessert">Desserts</option>
                <option value="Drinks">Drinks</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection