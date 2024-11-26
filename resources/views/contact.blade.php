@extends('layouts.web')
@section('content')
<!-- Reservation Section -->
<div class="res">
    <h1>Reservation</h1>
    <p>
        To make a reservation, simply select the date and time that you would
        like to dine with us, and choose the number of guests in your party. If
        you have any special requests or dietary needs, please don't hesitate to
        let us know in the comments section.
    </p>
    <p>
        We look forward to hosting you at The Elysian Plate and providing you with
        a royal dining experience. Thank you for considering us for your next
        meal out!
    </p>

    <!-- Reservation Form -->
    <div class="form">
        <form action="#" method="post">

            <!-- Name Input -->
            <div class="elem-group">
                <label for="name">Your Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="visitor_name" 
                    placeholder="Qasim Ali" 
                    pattern="[A-Z\sa-z]{3,20}" 
                    required
                />
            </div>

            <!-- Email Input -->
            <div class="elem-group">
                <label for="email">Your E-mail</label>
                <input 
                    type="email" 
                    id="email" 
                    name="visitor_email" 
                    placeholder="Qasim.Ali@email.com" 
                    required 
                />
            </div>

            <!-- Phone Number Input -->
            <div class="elem-group">
                <label for="phone">Your Phone</label>
                <input 
                    type="tel" 
                    id="phone" 
                    name="visitor_phone" 
                    placeholder="0300-0344522" 
                    required 
                />
            </div>

            <hr />

            <!-- Guest Number Input -->
            <div class="elem-group inlined">
                <label for="guest">Guest</label>
                <input 
                    type="number" 
                    id="guest" 
                    name="total_guest" 
                    placeholder="2" 
                    min="1" 
                    required 
                />
            </div>

            <!-- Date Input -->
            <div class="elem-group inlined">
                <label for="date">Date</label>
                <input 
                    type="date" 
                    id="date" 
                    name="date" 
                    required 
                />
            </div>

            <!-- Time Input -->
            <div class="elem-group inlined">
                <label for="time">Time</label>
                <input 
                    type="time" 
                    id="time" 
                    name="time" 
                    required 
                />
            </div>

            <hr />

            <!-- Additional Message Input -->
            <div class="elem-group">
                <label for="message">Anything Else?</label>
                <br>
                <textarea 
                    id="message" 
                    name="customer_message" 
                    placeholder="Tell us anything else that might be important."
                ></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit">Submit</button>

        </form>
    </div>
</div>
@endsection
