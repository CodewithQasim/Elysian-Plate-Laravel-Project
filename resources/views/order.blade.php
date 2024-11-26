@extends('layouts.web')

@section('content')
<div class="container my-4">
    <!-- Search and Category Filters -->
    <div class="row">
        <div class="col-md-5 mb-3">
            <input type="text" class="form-control" id="searchInput" placeholder="Search menu...">
        </div>
        <div class="col-md-5 mb-3">
            <select class="form-select" id="categoryFilter">
                <option value="all">All Categories</option>
                <option value="main">Main Dishes</option>
                <option value="Soups">Soups</option>
                <option value="Our Speciality">Our Speciality</option>
                <option value="appetizer">Appetizers</option>
                <option value="dessert">Desserts</option>
                <option value="Drinks">Drinks</option>
            </select>
        </div>
    </div>
</div>

<div class="container">
    <!-- Recipe Cards -->
    <div class="row" id="recipeContainer">
        @foreach ($menuItems as $item)
            <div class="col-md-4 mb-4 recipe-card" data-category="{{ $item->category }}">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{ $item->name }}</strong></h5>
                        <p class="card-text"><strong>Price:</strong> RS {{ $item->price }}/-</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script>
    const searchInput = document.getElementById('searchInput');
    const categoryFilter = document.getElementById('categoryFilter');
    const recipeContainer = document.getElementById('recipeContainer');

    // Function to filter menu items
    function filterMenuItems() {
        const searchValue = searchInput.value.toLowerCase();
        const selectedCategory = categoryFilter.value;
        const menuItems = recipeContainer.getElementsByClassName('recipe-card');

        Array.from(menuItems).forEach(item => {
            const itemName = item.querySelector('.card-title').textContent.toLowerCase();
            const itemCategory = item.getAttribute('data-category');
            const matchesSearch = itemName.includes(searchValue);
            const matchesCategory = selectedCategory === 'all' || itemCategory === selectedCategory;

            if (matchesSearch && matchesCategory) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }

    // Event Listeners for search and category filter
    searchInput.addEventListener('input', filterMenuItems);
    categoryFilter.addEventListener('change', filterMenuItems);
</script>
@endsection
