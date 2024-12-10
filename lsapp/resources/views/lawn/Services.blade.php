@extends('components.layout')
@section('title')
Services
@endsection
@section('content')
<main>
      <section class="services">
        <div class="service-container">
          <div class="service-item" id="first-img">
            <img src="images/lawn.jpg" alt="Lawn Mowing" />
            <h3>
              Lawn Mowing<button class="detail-btn" onclick="firstImg_Func()">
                Details
              </button>
            </h3>
          </div>
          <div class="service-item" id="second-img">
            <img src="images/bbq.jpg" alt="BBQ Areas and Sheds" />
            <h3>
              BBQ Areas and Sheds
              <button class="detail-btn" onclick="secondImg_Func()">
                Details
              </button>
            </h3>
          </div>
          <div class="service-item" id="third-img">
            <img src="images/land.jpg" alt="Landscaping" />
            <h3>
              Landscaping
              <button class="detail-btn" onclick="thirdImg_Func()">
                Details
              </button>
            </h3>
          </div>
          <div class="service-item" id="forth-img">
            <img src="images/pool.jpg" alt="Spa and Pool Settings" />
            <h3>
              Spa and Pool Settings
              <button class="detail-btn" onclick="forthImg_Func()">
                Details
              </button>
            </h3>
          </div>
          <div class="service-item" id="fifth-img">
            <img src="images/plant.jpg" alt="Planting" />
            <h3>
              Planting
              <button class="detail-btn" onclick="fifthImg_Func()">
                Details
              </button>
            </h3>
          </div>
        </div>
      </section>
    </main>
@endsection
@section('script')
function firstImg_Func() {
        firstImg = document.getElementById("first-img");
        firstImg_2 = firstImg;
        if (firstImg.style.fontWeight == "bold") {
          firstImg.innerHTML =
            '<div class="service-item" id="first-img"><img src="images/lawn.jpg" alt="Lawn Mowing" /><h3>Lawn Mowing<button class="detail-btn" onclick="firstImg_Func()">Details</button></h3></div>';
          firstImg.style.fontWeight = "normal";
        } else {
          firstImg.innerHTML =
            '<h1>Lawn Mowing</h1><ul><li>Areas Covered: Residential and Commercial</li><li>Cost: $30/hour for small lawns</li><li>Cost: $50/hour for large lawns</li><li>Additional Services: Edging and Trimming</li></ul> <h3>Lawn Mowing<button class="detail-btn" onclick="firstImg_Func()">Hide</button></h3>';
          firstImg.style.background = "#A8E6A1";
          firstImg.style.fontWeight = "bold";
          firstImg.style.padding = "2px";
        }
      }
      function secondImg_Func() {
        firstImg = document.getElementById("second-img");
        firstImg_2 = firstImg;
        if (firstImg.style.fontWeight == "bold") {
          firstImg.innerHTML =
            '<div class="service-item"><img src="images/bbq.jpg" alt="BBQ Areas and Sheds" /><h3>BBQ Areas and Sheds<button class="detail-btn" onclick="secondImg_Func()">Details</button></h3></div>';
          firstImg.style.fontWeight = "normal";
        } else {
          firstImg.innerHTML =
            '<h1>BBQ Areas and Sheds</h1><ul><li>Areas Covered: Residential and Commercial</li><li>Cost: $40/hour for small BBQ setups</li><li>Cost: $70/hour for large BBQ areas</li><li>Additional Services: Shed Building and Maintenance</li></ul><h3>Lawn Mowing<button class="detail-btn" onclick="secondImg_Func()">Hide</button></h3>';
          firstImg.style.background = "#A8E6A1";
          firstImg.style.fontWeight = "bold";
          firstImg.style.padding = "2px";
        }
      }
      function thirdImg_Func() {
        firstImg = document.getElementById("third-img");
        firstImg_2 = firstImg;
        if (firstImg.style.fontWeight == "bold") {
          firstImg.innerHTML =
            '<div class="service-item"><img src="images/land.jpg" alt="Landscaping" /><h3>Landscaping<button class="detail-btn" onclick="thirdImg_Func()">Details</button></h3></div>';
          firstImg.style.fontWeight = "normal";
        } else {
          firstImg.innerHTML =
            '<h1>Landscaping</h1><ul><li>Areas Covered: Residential and Commercial</li><li>Cost: $50/hour for basic landscaping</li><li>Cost: $80/hour for advanced landscaping</li><li>Additional Services: Lawn Design and Garden Maintenance</li></ul><h3>Lawn Mowing<button class="detail-btn" onclick="thirdImg_Func()">Hide</button></h3>';
          firstImg.style.background = "#A8E6A1";
          firstImg.style.fontWeight = "bold";
          firstImg.style.padding = "2px";
        }
      }
      function forthImg_Func() {
        firstImg = document.getElementById("forth-img");
        firstImg_2 = firstImg;
        if (firstImg.style.fontWeight == "bold") {
          firstImg.innerHTML =
            '<div class="service-item" id="forth-img"><img src="images/pool.jpg" alt="Spa and Pool Settings" /><h3>Spa and Pool Settings<button class="detail-btn" onclick="forthImg_Func()">Details</button></h3></div>';
          firstImg.style.fontWeight = "normal";
        } else {
          firstImg.innerHTML =
            '<h1>Spa and Pool Settings</h1><ul><li>Areas Covered: Residential and Commercial</li><li>Cost: $60/hour for spa setups</li><li>Cost: $90/hour for pool setups</li><li>Additional Services: Pool Cleaning and Maintenance</li></ul><h3>Lawn Mowing<button class="detail-btn" onclick="forthImg_Func()">Hide</button></h3>';
          firstImg.style.background = "#A8E6A1";
          firstImg.style.fontWeight = "bold";
          firstImg.style.padding = "2px";
        }
      }
      function fifthImg_Func() {
        firstImg = document.getElementById("fifth-img");
        firstImg_2 = firstImg;
        if (firstImg.style.fontWeight == "bold") {
          firstImg.innerHTML =
            '<div class="service-item" id="fifth-img"><img src="images/plant.jpg" alt="Planting" /><h3>Planting<button class="detail-btn" onclick="fifthImg_Func()">Details</button></h3></div>';
          firstImg.style.fontWeight = "normal";
        } else {
          firstImg.innerHTML =
            '<h1>Planting</h1><ul><li>Areas Covered: Residential and Commercial</li><li>Cost: $25/hour for small plantings</li><li>Cost: $45/hour for large plantings</li><li>Additional Services: Tree Planting and Garden Design</li></ul><h3>Lawn Mowing<button class="detail-btn" onclick="fifthImg_Func()">Hide</button></h3>';
          firstImg.style.background = "#A8E6A1";
          firstImg.style.fontWeight = "bold";
          firstImg.style.padding = "2px";
        }
      }
@endsection