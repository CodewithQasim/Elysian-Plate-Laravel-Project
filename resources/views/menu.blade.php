@extends('layouts.web')

@section('content')

<!-- Menu Introduction Section -->
<div class="menu">
  <div>
    <h2>Menu</h2>
    <p>OUR FOOD IS SKILLFULLY PREPARED BY OUR TALENTED KITCHEN TEAM</p>
  </div>

  <div>
    <p>
      Welcome to The Elysian Plate, a Pakistani restaurant featuring authentic
      and delicious cuisine. Our menu offers a variety of dishes to choose
      from, including appetizers, soups, salads, and entrees. For starters,
      try our samosas or kebabs. For a heartier meal, dig into our biryani
      or curry dishes served with rice and naan bread. Don't forget to save
      room for desserts like gulab jamun or kulfi. We also offer a selection
      of beverages to complete your meal. Thank you for choosing The Royal
      Table.
    </p>
  </div>
</div>


<!-- Main Dishes Section -->
<div class="main">
  <div class="background">
    <h2>Our Main Dishes</h2>
  </div>
  <table>
    <thead>
      <tr>
        <th>Dishes</th>
        <th>Soups</th>
        <th>Appetizers</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Chicken Biryani <span>400PKR</span></td>
        <td>Chicken Corn Soup <span>250PKR</span></td>
        <td>Chaat <span>100 PKR</span></td>
      </tr>
      <tr>
        <td>Chicken Karahi <span>450PKR</span></td>
        <td>Chicken Noodle Soup <span>250PKR</span></td>
        <td>Samosas (2 pieces) <span>80 PKR</span></td>
      </tr>
      <tr>
        <td>Beef Nihari <span>550PKR</span></td>
        <td>French Onion Soup <span>250PKR</span></td>
        <td>Spring Rolls (2 pieces) <span>80 PKR</span></td>
      </tr>
      <tr>
        <td>Chicken Jalfrezi <span>400PKR</span></td>
        <td>Cream of Mushroom Soup <span>250PKR</span></td>
        <td>Samosas (2 pieces) <span>80 PKR</span></td>
      </tr>
      <tr>
        <td>Chicken Korma <span>450PKR</span></td>
        <td>Tomato Soup <span>250PKR</span></td>
        <td>Chicken Wings (4 pieces) <span>200 PKR</span></td>
      </tr>
      <tr>
        <td>Chicken Bar B Que <span>600PKR</span></td>
        <td>Beef and Barley Soup <span>250PKR</span></td>
        <td>Chicken Tikka Skewers (3 per serving) <span>200 PKR</span></td>
      </tr>
      <tr>
        <td>Chicken Kofta <span>300PKR</span></td>
        <td>Split Pea Soup <span>250PKR</span></td>
        <td>Beef Seekh Kebabs (2 per serving) <span>250 PKR</span></td>
      </tr>
    </tbody>
  </table>
</div>

<!-- Desserts Section -->
<div class="dessert">
  <div class="background2">
    <h2>Desserts</h2>
  </div>
  <table>
    <thead>
      <tr>
        <th>Sweets</th>
        <th>Cakes & Pastries</th>
        <th>Our Speciality</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Gajar Halwa <span>100PKR</span></td>
        <td>Butter Croissant <span>200PKR</span></td>
        <td>Royal Chocolate Cake <span>1000PKR</span></td>
      </tr>
      <tr>
        <td>Kheer <span>100PKR</span></td>
        <td>Raspberry Crumble Muffin <span>300PKR</span></td>
        <td>Housemade Granola <span>1000PKR</span></td>
      </tr>
      <tr>
        <td>Gulab Jamun <span>200PKR</span></td>
        <td>Red Velvet Cake <span>500PKR</span></td>
      </tr>
      <tr>
        <td>Jalebi <span>80PKR</span></td>
        <td>Black Forest Cake <span>500PKR</span></td>
      </tr>
      <tr>
        <td>Zarda <span>80PKR</span></td>
        <td>Caramel & Smoked Almond <br> Brownie (Gluten Free) <span>250PKR</span></td>
      </tr>
    </tbody>
  </table>
</div>

<!-- Drinks Section -->
<div class="drink">
  <div class="background3">
    <h2>Drinks</h2>
  </div>
  <table>
    <thead>
      <tr>
        <th>Tea & Coffee</th>
        <th>Smoothies</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Brewed Coffee <span>80PKR</span></td>
        <td>Strawberry Banana Smoothie <span>100PKR</span></td>
      </tr>
      <tr>
        <td>Dark Hot Chocolate <span>100PKR</span></td>
        <td>Mango Smoothie <span>200PKR</span></td>
      </tr>
      <tr>
        <td>Chai Latte <span>120PKR</span></td>
        <td>Peach Smoothie <span>150PKR</span></td>
      </tr>
      <tr>
        <td>Americano <span>80PKR</span></td>
        <td>Cherry Smoothie <span>100PKR</span></td>
      </tr>
      <tr>
        <td>Royal Chai <span>300PKR</span></td>
        <td>Pineapple Smoothie <span>200PKR</span></td>
      </tr>
    </tbody>
  </table>
</div>

@endsection