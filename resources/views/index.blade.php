<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bizzlisto</title>
  <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>


  @include('layouts.nav')

  <div id="main">


    <!-- --------------------image-slider-------------------->

    <div class="carousel">

      <div class="list">

        <div class="item" style="background-image:url('{{ asset('frontend/images/Chicken-Soup-main-2.webp') }}')">
          <div class="content">
            <div class="title mb-4" style="color:white;">Praiseworthy soup</div>
            <div class="btn">
              <a href="#" class="btn btn-danger text-light text-decoration-none fw-bolder">Italian</a>
            </div>
          </div>
        </div>

        <div class="item" style="background-image:url('{{asset('frontend/images/plumber-fixing-white-sink-pipe-with-adjustable-wrench-picture-id1150199946.jpg')}}')">

          <div class="content">
            <div class="container">
              <div class="title mb-4" style="color:white;">Time for a tune-up?</div>

              <div class="btn">
                <button class=" btn-danger" style="background-color: red;color:white"> <a href="" class="text-light text-decoration-none fw-bolder">Auto Repaire</a></button>

              </div>
            </div>
          </div>

        </div>

        <div class="item" style="background-image:url('{{asset('frontend/images/6126-08643014en_Masterfile.jpg')}}');">

          <div class="content">
            <div class="title mb-4" style="color:white;">Nothing like a new coat of paint</div>
            <div class="btn">
              <button class=" btn-danger" style="background-color: red;color:white"><a href="" class="text-light text-decoration-none fw-bolder">Painter</a></button>

            </div>
          </div>

        </div>

      </div>

      <div class="arrows">
        <button class="prev">></button>

        <button class="next">></button>
      </div>

    </div>

    <!------------------------------ Recent Acativity-------------------------------->

    <div class="container mt-4">
      <h1 class="text-center">Recent Activity</h1>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card p-3 shadow-sm">
            <div class="d-flex align-items-center mb-2">
              <img src="{{asset('frontend/images/Chicken-Soup-main-2.webp')}}" class="rounded-circle me-2" width="50" height="50" alt="User Image">
              <div>
                <p class="mb-0"><strong>Phil A.</strong> wrote a review</p>
                <small class="text-muted">28 minutes ago</small>
              </div>
            </div>
            <img src="{{asset('frontend/images/plumber-fixing-white-sink-pipe-with-adjustable-wrench-picture-id1150199946.jpg')}}" class="img-fluid rounded mb-2" alt="City Image">
            <a href="#" class="text-dark text-decoration-none">
              <h5>city of the evil</h5>
            </a>
            <p class="text-danger">★★★★☆</p>
            <p class="short-paragraph">Emeryville is a small city, right next to the bay, that's sandwiched in between Oakland and Berkeley!...</p>
            <p class="full-paragraph" style="display: none;">Emeryville is a small city, right next to the bay, that's sandwiched in between Oakland and Berkeley! It has a vibrant community and offers various activities for residents and visitors alike. The city is known for its art scene, parks, and waterfront views. Whether you're looking to explore local shops or enjoy a meal at one of the many restaurants, Emeryville has something for everyone.</p>
            <a href="#" class="text-dark read-more">Read more</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3 shadow-sm">
            <div class="d-flex align-items-center mb-2">
              <img src="{{asset('frontend/images/Chicken-Soup-main-2.webp')}}" class="rounded-circle me-2" width="50" height="50" alt="User Image">
              <div>
                <p class="mb-0"><strong>Thomas M.</strong> wrote a review</p>
                <small class="text-muted">30 minutes ago</small>
              </div>
            </div>
            <img src="{{asset('frontend/images/Roofing_iStock-934626558.0-1-scaled.jpg.optimal.jpg')}}" class="img-fluid rounded mb-2" alt="Restaurant Image">
            <a href="#" class="text-dark text-decoration-none">
              <h5>606</h5>
            </a>
            <p class="text-danger">★★★★★</p>
            <p class="short-paragraph">Emeryville is a small city, right next to the bay, that's sandwiched in between Oakland and Berkeley!...</p>
            <p class="full-paragraph" style="display: none;">Emeryville is a small city, right next to the bay, that's sandwiched in between Oakland and Berkeley! It has a vibrant community and offers various activities for residents and visitors alike. The city is known for its art scene, parks, and waterfront views. Whether you're looking to explore local shops or enjoy a meal at one of the many restaurants, Emeryville has something for everyone.</p>
            <a href="#" class="text-dark read-more">Read more</a>
          </div>
        </div>
      </div>

    </div>

    <!------------------------------category-------------------------------->

    <div class="container mt-5">
      <h1 class="text-center">category</h1>
      <div class="row g-4">
        <div class="col-md-3">
          <div class="category-card">
            <a class="text-decoration-none" href="#">
              <div class="category-icon">🍽️</div>
              <p class="text-dark">Restaurants</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="category-card">
            <a class="text-decoration-none" href="#">
              <div class="category-icon">🎁</div>
              <p class="text-dark">Shopping</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="category-card">
            <a class="text-decoration-none" href="#">
              <div class="category-icon">✨</div>
              <p class="text-dark">Nightlife</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="category-card">
            <a class="text-decoration-none" href="#">
              <div class="category-icon">🎯</div>
              <p class="text-dark">Active Life</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="category-card">
            <a class="text-decoration-none" href="#">
              <div class="category-icon">💇‍♂️</div>
              <p class="text-dark">Beauty & Spas</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="category-card">
            <a class="text-decoration-none" href="#">
              <div class="category-icon">🚗</div>
              <p class="text-dark">Automotive</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="category-card">
            <a class="text-decoration-none" href="#">
              <div class="category-icon">🏠</div>
              <p class="text-dark">Home Services</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="category-card">
            <a class="text-decoration-none" href="#" onclick="toggleCategories(event)">
              <div class="category-icon">
                <i class="bi bi-three-dots text-dark"></i>
              </div>
              <p class="text-dark">More</p>
            </a>
          </div>
        </div>
      </div>
    </div>


    <div class="container cont  mt-5 mb-5" id="moreCategories" style="display: none;">
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
        <div class="col">
          <a class="text-decoration-none" href="#">
            <div class="category text-dark"> ☕ Coffee & Tea</div>
          </a>
          </a>
        </div>
        <div class="col">
          <a class="text-decoration-none" href="#">
            <div class="category text-dark"> 🍽️ Food</div>
          </a>
        </div>
        <div class="col">
          <a class="text-decoration-none" href="#">
            <div class="category text-dark"> 🎨 Arts & Entertainment</div>
          </a>
        </div>
        <div class="col">
          <a class="text-decoration-none" href="#">
            <div class="category text-dark"> 🏥 Health & Medical</div>
          </a>
        </div>
        <div class="col">
          <a class="text-decoration-none" href="#">
            <div class="category text-dark"> 💼 Professional Services</div>
          </a>
        </div>
        <div class="col">
          <a class="text-decoration-none" href="#">
            <div class="category text-dark">🐾 Pets</div>
          </a>
        </div>
        <div class="col">
          <a class="text-decoration-none" href="#">
            <div class="category text-dark"> 🏡 Real Estate</div>
          </a>
        </div>
        <div class="col">
          <a class="text-decoration-none" href="#">
            <div class="category text-dark">🏨 Hotels & Travel</div>
          </a>
        </div>
        <div class="col">
          <a class="text-decoration-none" href="#">
            <div class="category text-dark"> 📍 Local Services</div>
          </a>
        </div>
        <div class="col">
          <a class="text-decoration-none" href="#">
            <div class="category text-dark">📅 Event Planning & Services</div>
          </a>
        </div>
        <div class="col">
          <a class="text-decoration-none" href="#">
            <div class="category text-dark"> 🏛️ Public Services & Government</div>
          </a>
        </div>
        <div class="col">
          <a class="text-decoration-none" href="#">
            <div class="category text-dark"> 📈 Financial Services</div>
          </a>
        </div>
        <div class="col">
          <a class="text-decoration-none" href="#">
            <div class="category text-dark"> 🎓 Education</div>
          </a>
        </div>
        <div class="col">
          <a class="text-decoration-none" href="#">
            <div class="category text-dark">⛪ Religious Organizations</div>
          </a>
        </div>
        <div class="col">
          <a class="text-decoration-none" href="#">
            <div class="category text-dark"> 🌱 Local Flavor</div>
          </a>
        </div>
        <div class="col">
          <a class="text-decoration-none" href="#">
            <div class="category text-dark"> 📰 Mass Media</div>
          </a>

        </div>
      </div>

    </div>
  </div>



  @include('layouts.footer')



  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js" integrity="sha512-NcZdtrT77bJr4STcmsGAESr06BYGE8woZdSdEgqnpyqac7sugNO+Tr4bGwGF3MsnEkGKhU2KL2xh6Ec+BqsaHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js" integrity="sha512-P2IDYZfqSwjcSjX0BKeNhwRUH8zRPGlgcWl5n6gBLzdi4Y5/0O4zaXrtO4K9TZK6Hn1BenYpKowuCavNandERg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{asset('frontend/amit.js')}}"></script>
  <script src="{{asset('frontend/main.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>