<!DOCTYPE html>

<head>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-c8uGQ6/RLU6C/yn9XzqheOH3PurhUpPOJZfMxLb+0wW/t0DhF5yUa5X5AgguO5zrMYG1ZiQh5x/z+mC8dwOyLg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Portfolio</title>
</head>

<body>

  <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
    <div class="carousel-inner">
      <!-- Single item -->
      <div class="carousel-item active">
        <img src="portfolio.jpg" class="d-block w-100 opacity-55 " data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="slide-out-right" alt="" />
        <div class="carousel-caption d-none d-md-block">
          <h5>PORTFOLIO</h5>

        </div>
      </div>
    </div>
  </div>


  <br>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <form class="form-inline d-flex justify-content-center">
          <input class="form-control mr-2" id="filter" type="search" placeholder="Search" aria-label="Search">
          <!-- <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i>Search</button> -->
        </form>
      </div>
    </div>
  </div>

  <!-- Carousel wrapper


  <div><br></div>

  <!-- Inner -->
  <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" >
            <div class="cards" id="card" data-filter-text="Engagement ">
              <img src="gallery1/1.jpg " class="card-img-top " alt="" style="height: 32rem;" />
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">Nikini & Pamudu</h5>
                  <p class="card-text-center">
                    Engagement Moments
                  </p>
                  <a href="gallery1.php" class="btn btn-primary" style="background-color: black;">More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="cards" id="card2" data-filter-text="Pre wedding ">
              <img src="gallery2/8.jpg" class="card-img-top" alt="" style="height: 32rem;" />
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">Devindi & Tharindu</h5>
                  <p class="card-text">
                    Pre wedding Shoot
                  </p>
                  <a href="gallery2.php" class="btn btn-primary" style="background-color: black;">More</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="cards" data-filter-text="Wedding ">
              <img src="gallery3/1.jpg" class="card-img-top" alt="" style="height: 32rem;" />
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">Chanodi & Chamindu</h5>
                  <p class="card-text">
                    Wedding Moments
                  </p>
                  <a href="gallery3.php" class="btn btn-primary" style="background-color: black;">More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->




  </div>
  </div>
  </div>

  <!-- Single item -->

  </div>
  <!-- Inner -->
  </div>
  <!-- Carousel wrapper -->


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <script>
    // Get the search bar and cards
    const searchBar = document.getElementById('filter');
    const cards = document.getElementsByClassName('cards');

    // Listen to the search bar's input event
    searchBar.addEventListener('input', function(event) {
      // Get the search term
      const searchTerm = event.target.value.toLowerCase();

      // Iterate over the cards
      for (i = 0; i < cards.length; i++) { 
        
        // Get the card's data-filter-text attribute value
        const filterText = cards[i].getAttribute('data-filter-text').toLowerCase();

        // Check if the filter text contains the search term
        if (filterText.includes(searchTerm)) {
          // If it does, set the card's display style to block
          cards[i].style.display = 'block';
        } else {
          // If it doesn't, set the card's display style to none
          cards[i].style.display = 'none';
        }
      };
    });
  </script>

</body>

</html>