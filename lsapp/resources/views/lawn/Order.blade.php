@extends('components.layout')

@section('title')
    Place Order
@endsection

@section('internal_css')
    /* Custom CSS for the page */
    #form-all {
        margin: 100px auto;
        max-width: 1000px;
    }

    main {
        padding: 20px;
        max-width: 1000px;
        margin: auto;
        background: #fff;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        margin-top: 3rem;
        min-width: 800px;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 2rem;
        color: #333;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"], input[type="email"], textarea, select {
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    input[type="text"]:focus, input[type="email"]:focus, textarea:focus, select:focus {
        border-color: #4CAF50;
        box-shadow: 0 0 5px rgba(72, 219, 89, 0.7);
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 15px;
        border-radius: 30px;
        cursor: pointer;
        font-size: 1.2rem;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    /* Orders Section Styling */
    .order-item {
        background: #f9f9f9;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 8px;
        border: 1px solid #ddd;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .order-actions {
        display: flex;
        gap: 15px;
        margin-top: 10px;
    }

            .order-actions a, .order-actions button {
            background-color: #E64A19;  /* Matching button color */
            padding: 8px 15px;
            color: white;
            border-radius: 5px;
            border: none;
            font-size: 1rem;
            cursor: pointer;
            min-width: 70px;
            transition: background-color 0.3s ease;
        }
        a {
            text-align: center;
            margin: 0px 0px 20px;
            padding: 0px
        }
        .order-actions a:hover, .order-actions button:hover {
            background-color: #D84B16;  /* Darker hover effect */
        }

        .order-actions form {
            display: inline;
        }

    .button {
        margin: 0 0;
        background-color: #E64A19;
    }
    #services-options {
        height: 130px;
    }

    /* Responsive Styling */
    @media (max-width: 768px) {
        main {
            padding: 15px;
        }

        input[type="submit"] {
            font-size: 1rem;
            padding: 12px;
        }

        .order-actions {
            flex-direction: column;
            align-items: flex-start;
        }
    }
@endsection

@section('content')
<main>
    <section id="form-all">
        <h1>Place Your Order</h1>
        <form action="{{ route('orders.store') }}" method="post">
            @csrf
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <h2>Select Services:</h2>
            <ul id="service-list"></ul>
            <select name="services[]" id="services-options" onchange="serviceSelection(this)" multiple>
                <option value="Lawn Mowing">Lawn Mowing</option>
                <option value="BBQ and Sheds">BBQ and Sheds</option>
                <option value="Landscaping">Landscaping</option>
                <option value="Spa and Pool">Spa and Pool</option>
                <option value="Planting">Planting</option>
            </select>

            <input type="submit" value="Submit" />
        </form>

        <!-- Display previous orders -->
        @if($orders->isNotEmpty())
            <h2>Your Previous Orders:</h2>
            @foreach($orders as $order)
                <div class="order-item">
                    <strong>Message:</strong> {{ $order->message }} <br>
                    <strong>Services:</strong>
                    @foreach($order->services as $service)
                        {{ $service }}
                    @endforeach
                    <p class="order-date"><strong>Order Placed On:</strong> {{ $order->created_at->format('F j, Y') }}</p> 
                    <div class="order-actions">
                        <a href="{{ route('orders.edit', $order->id) }}">Edit</a>
                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this order?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        @else
            <p>You have no previous orders.</p>
        @endif
    </section>
</main>
@endsection

@section('script')
function serviceSelection(_this) {
    let selectedServices = [];
    let serviceList = document.getElementById('service-list');
    let servicesOptions = document.getElementById('services-options');

    // Clear current service list
    serviceList.innerHTML = '';

    // Collect selected services
    for (let option of servicesOptions.selectedOptions) {
        selectedServices.push(option.value);
        let listItem = document.createElement('li');
        listItem.textContent = option.value;
        serviceList.appendChild(listItem);
    }

    // Update hidden field with selected services (for form submission)
    document.getElementById('services-options').setAttribute('value', selectedServices.join(','));
}
@endsection
