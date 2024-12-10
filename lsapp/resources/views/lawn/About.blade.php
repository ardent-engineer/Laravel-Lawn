@extends('components.layout')
@section('title')
About Us
@endsection
@section('internal_css')
.hero {
        text-align: center;
        position: relative;
        top: 50%;
        bottom: 50%;
        left: 50%;
        width: 800px;
        height: min-content;
        background-color: #338334;
        transform: translate(-50%, -50%);
        color: white;
        background: linear-gradient(
          to right,
          rgba(255, 255, 255, 0) 0%,
          #338334 50%,
          rgba(255, 255, 255, 0) 100%
        );
      }
      .hero p {
        font-size: 1.25rem;
      }
@endsection
@section('content')
    <main>
      <section>
        <div class="hero-image" style="background-image: url({{asset('./images/lawn-hero.jpg')}})">
          <div class="hero">
            <h1>About Us</h1>
            <p>
              At Not Just Lawn Mowing, we believe in creating beautiful and
              functional outdoor spaces that enhance your home and lifestyle.
              Since our inception, we've been committed to delivering
              high-quality lawn care and landscaping services, ensuring our
              clients' satisfaction and the health of their gardens.
            </p>
          </div>
        </div>
      </section>

      <section class="about-section">
        <h2>Our Profile in Lawn Mowing</h2>
        <p>
          What began as a small venture has grown exponentially. We are proud to
          serve over 27 cities across Pakistan, expanding our reach to meet the
          growing demands of our customers. Our team of dedicated professionals
          works tirelessly to ensure that every garden we care for is a
          sanctuary of relaxation and beauty.
        </p>
        <div class="stat">
          <img src={{asset('images/graph.png')}} />
        </div>
      </section>
    </main>
@endsection
