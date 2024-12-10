@extends('components.layout')

@section('title')
    Edit Order
@endsection

@section('internal_css')
    /* Custom CSS for the page */
    #form-all {
        margin: 100px auto;
        max-width: 600px;
    }

    main {
        padding: 20px;
        max-width: 600px;
        margin: auto;
        background: #fff;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        margin-top: 3rem;
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

    /* Service List Styling */
    #service-list {
        margin-bottom: 10px;
    }

    #service-list li {
        background-color: #f0f0f0;
        padding: 8px;
        margin-bottom: 5px;
        border-radius: 5px;
        list-style-type: none;
        border: 1px solid #ddd;
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
    }
@endsection

@section('content')
<main>
    <section id="form-all">
        <h1>Edit Your Order</h1>
        <form action="{{ route('orders.update', $order->id) }}" method="post">
            @csrf
            @method('PUT')

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required>{{ old('message', $order->message) }}</textarea>

            <h2>Select Services:</h2>
            <ul id="service-list">
                @foreach($order->services as $service)
                    <li>{{ $service }}</li>
                @endforeach
            </ul>
            <select name="services[]" id="services-options" onchange="serviceSelection(this)" multiple>
                <option value="Lawn Mowing" {{ in_array('Lawn Mowing', $order->services) ? 'selected' : '' }}>Lawn Mowing</option>
                <option value="BBQ and Sheds" {{ in_array('BBQ and Sheds', $order->services) ? 'selected' : '' }}>BBQ and Sheds</option>
                <option value="Landscaping" {{ in_array('Landscaping', $order->services) ? 'selected' : '' }}>Landscaping</option>
                <option value="Spa and Pool" {{ in_array('Spa and Pool', $order->services) ? 'selected' : '' }}>Spa and Pool</option>
                <option value="Planting" {{ in_array('Planting', $order->services) ? 'selected' : '' }}>Planting</option>
            </select>

            <input type="submit" value="Update Order" />
        </form>
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
