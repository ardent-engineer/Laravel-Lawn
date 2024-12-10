@extends('components.layout')
@section('title')
Index
@endsection
@section('content')
<main>
      <section>
        <div class="hero-image" style="background-image: url({{asset('images/lawn-hero.jpg')}})">
          <div class="hero">
            <h1>Great Gardens for Relaxation</h1>
            <a href="{{route('contact')}}">
              <button>Book an Appointment Now!</button>
            </a>
          </div>
        </div>
      </section>
      <section class="testimonials">
        <h2>What Our Customers Say</h2>
        <div class="testimonial-container">
          <div class="testimonial-item">
            <p>
              " … as a business owner I’m constantly looking for new experiences
              to help reinforce what I provide to my customers. The welcoming
              and facilities offered by the hostel were extraordinary and made
              me think about how to improved my customer relations."
            </p>
            <h4>- Saad U.</h4>
          </div>
          <div class="testimonial-item">
            <p>
              "… I’ve wanted to get some sort of gift for my daughter besides
              just the usual wedding gifts. You know it would be good to give
              her just that something extra."
            </p>
            <h4>- Abdullah U.</h4>
          </div>
          <div class="testimonial-item">
            <p>
              "“ ... the idea of having a coffee (was a good one) in a lovely
              relaxing setting was exciting, but the manner and professionalism
              of their work made me what to tell all my friends."
            </p>
            <h4>- Musfir B.</h4>
          </div>
        </div>
      </section>
    </main>
@endsection