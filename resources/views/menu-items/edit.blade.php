@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Menu Item</h1>
    <form action="{{ route('menu-items.update', $menuItem->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $menuItem->name }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{ $menuItem->price }}" required>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control" required>
                <option value="main" {{ $menuItem->category == 'main' ? 'selected' : '' }}>main</option>
                <option value="Soups" {{ $menuItem->category == 'Soups' ? 'selected' : '' }}>Soups</option>
                <option value="Our Speciality" {{ $menuItem->category == 'Our Speciality' ? 'selected' : '' }}>Our Speciality</option>
                <option value="appetizers" {{ $menuItem->category == 'appetizers' ? 'selected' : '' }}>Appetizers</option>
                <option value="desserts" {{ $menuItem->category == 'desserts' ? 'selected' : '' }}>Desserts</option>
                <option value="Drinks" {{ $menuItem->category == 'drinks' ? 'selected' : '' }}>Drinks</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('menu-items.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection