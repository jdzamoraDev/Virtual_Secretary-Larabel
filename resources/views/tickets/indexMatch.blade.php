<!DOCTYPE html>
<html lang="en">

<head>
  <title>Match´s Games</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="csstickets/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="csstickets/jquery-ui.css">
  <link rel="stylesheet" href="csstickets/owl.carousel.min.css">
  <link rel="stylesheet" href="csstickets/owl.theme.default.min.css">
  <link rel="stylesheet" href="csstickets/owl.theme.default.min.css">

  <link rel="stylesheet" href="csstickets/jquery.fancybox.min.css">

  <link rel="stylesheet" href="csstickets/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="csstickets/aos.css">

  <link rel="stylesheet" href="csstickets/style.css">



</head>



<body>
@foreach($teams as $team)

          <div class="container" id="{{ $team->id}}">
        <div class="row">
          <div class="col-lg-6">
            <div class="widget-next-match">
              <div class="widget-title">
                <h3>Match 1</h3>
              </div>
              <div class="widget-body mb-3">
                <div class="widget-vs">
                  <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                    <div class="team-1 text-center">
                      <img src="{{ $team->imgA }}" alt="Image">
                      <h3>{{ $team->teamA }}</h3>
                    </div>
                    <div>
                      <span class="vs"><span>VS</span></span>
                    </div>
                    <div class="team-2 text-center">
                      <img src="{{ $team->imgB }}" alt="Image">
                      <h3>{{ $team->teamB }}</h3>
                    </div>
                  </div>
                </div>  
              </div>

              <div class="text-center widget-vs-contents mb-4">
                <h4>Liga Promerica</h4>
                <p class="mb-5">
                  <span class="d-block">{{ $team->price1}}</span>
                  <span class="d-block" >{{ $team->time}}</span>
                  <strong class="text-primary">Price: ₡{{ $team->price2}}</strong>
                  <br>
                  <strong class="text-primary">{{ $team->stadium}}</strong>
                </p>

                <!-- Button for choose the game -->
                <a href="checkout"><div class="d-grid"><button class="btn btn-primary" href="./welcome.blade.php">Chose Game</button></div></a>

                <!-- Finish of button for choose the game -->

              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div> <!-- .site-section -->

  
  @endforeach
    <!--  End Three Container-->

    <!-- Container of  Reservation-->
    <div class="site-section bg-dark">
      <div class="container" id="">
        <div class="row">
          <div class="col-lg-6">
            <div class="widget-next-match">
              <div class="widget-title">
                <h3>Side of CheckOut</h3>
              </div>
              <div class="widget-body mb-3">
                <div class="reservation">
                  <a href="checkout">CheckOut</a>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- End of Container of Reservation-->
  </div>
  <!-- finish of div general  -->



  <script src="jstickets/jquery-3.3.1.min.js"></script>
  <script src="jstickets/jquery-migrate-3.0.1.min.js"></script>
  <script src="jstickets/jquery-ui.js"></script>
  <script src="jstickets/popper.min.js"></script>
  <script src="jstickets/bootstrap.min.js"></script>
  <script src="jstickets/owl.carousel.min.js"></script>
  <script src="jstickets/jquery.stellar.min.js"></script>
  <script src="jstickets/jquery.countdown.min.js"></script>
  <script src="jstickets/bootstrap-datepicker.min.js"></script>
  <script src="jstickets/jquery.easing.1.3.js"></script>
  <script src="jstickets/aos.js"></script>
  <script src="jstickets/jquery.fancybox.min.js"></script>
  <script src="jstickets/jquery.sticky.js"></script>
  <script src="jstickets/jquery.mb.YTPlayer.min.js"></script>


  <script src="jstickets/main.js"></script>

</body>

</html>