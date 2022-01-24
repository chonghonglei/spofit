<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="images/SpoFit.png">
    <link rel="icon" type="image/png" href="images/SpoFit.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Home Page
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
    <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
      
      <nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="300">
        <div class="container">
          <div class="navbar-translate">
            <a class="navbar-brand" href="">
              Sport and Fitness Centre
            </a>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="/login" target="_blank" class="btn btn-danger btn-round">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
      <div class="page-header section-dark" style="background-image: url('images/gym.jpg')">
        <div class="filter"></div>
        <div class="content-center">
          <div class="container">
            <div class="title-brand">
              <h1 class="presentation-title">Sport and Fitness Centre</h1>
            </div>
            <h2 class="presentation-subtitle text-center">Web Application (SpoFit)</h2>
          </div>
        </div>
      </div>

      <div class="section section-dark">
      <div class="container">
        <div class="row">
            <div class=".col-md-4 col-md-offset-4" style="margin-top:20px">
                <form name="login" action="{{ route('user_login') }}" method="POST">
                    @csrf
                    <input type="text" name="content" id="content" value="{{ $data->name }}" hidden>
                    <input type="text" name="login_time" id="login_time" value="{{ old('login_time') }}" hidden>
                </form>
            </div>
        </div>
      </div>

      <style>
        .cam {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .list {
            display: flex;
            flex-direction: column;
            gap: 20px;
            justify-content: center;
            align-items: center;
        }
      </style>

      <div id="checkin" class="cam">
        <video id="preview"></video>
      </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

        <script type="text/javascript">
            let scanner = new Instascan.Scanner({
                video: document.getElementById('preview')
            });
            scanner.addListener('scan', function(content) {
                var today = new Date();
                var timestamp = today.toISOString().slice(0, 19).replace('T', ' ');
                // document.getElementById('content').value = {{ $data->name }};
                document.getElementById('login_time').value = timestamp;
                alert("Login at " + timestamp + ", " + content);
                document.login.submit();
            });

            Instascan.Camera.getCameras().then(function(cameras) {
                if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                } else {
                    console.error('No cameras found.');
                }
            }).catch(function(e) {
                console.error(e);
            });
        </script>
      </div>

      @if ($data->category === 'Admin')
      <div class="section section-dark">
          <div class="container">
            <div class="row">
              <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title"><b>Welcome, {{ $data->name }}</b></h2>
              </div>
            </div>
          </div>
    
          <div class="container">
            <div class="row example-page">
              <div class="col-md-6 text-center">
                  <img src="images/profile.png" alt="Rounded Image" class="img-rounded img-responsive" style="width: 50%">
                  <br><a href="list" class="btn btn-outline-neutral btn-round" target="_blank">View User List</a><br>
                  <a href="login_list" class="btn btn-outline-neutral btn-round" target="_blank">View Check In List</a>
              </div>
              <div class="col-md-6 text-center">
                  <img src="images/facilities.jpg" alt="Rounded Image" class="img-rounded img-responsive" style="width: 50%">
                  <br><a href="facilitiesinfo" class="btn btn-outline-neutral btn-round" target="_blank">Facilities Information</a><br>
                  <a href="schedule" class="btn btn-outline-neutral btn-round" target="_blank">Facilities Booking Schedule</a>
              </div>
              <div class="col-md-6 text-center">
                  <img src="images/checkin.jpg" alt="Rounded Image" class="img-rounded img-responsive" style="width: 50%">
                  <br><a href="#checkin" class="btn btn-outline-neutral btn-round">Check in to Sport and Fitness Centre</a>
              </div>
            </div>
          </div>
      @endif

      @if($data->category === 'Trainee')
      <div class="section section-dark">
          <div class="container">
            <div class="row">
              <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title"><b>Welcome, {{ $data->name }}</b></h2>
                <p class="description">Thank you for being a trainee member of Sport and Fitness Centre.</p>
                <p class="description">You can set up 
                    your personal profile, view facilities and personal coaches' information, book facilities and 
                    personal coaches, check-in Sport and Fitness Centre by scanning QR code in SpoFit.</p>
                <h2 class="title">In SpoFit,</h2>
              </div>
            </div>
          </div>
    
          <div class="container">
            <div class="row example-page">
              <div class="col-md-6 text-center">
                  <img src="images/profile.png" alt="Rounded Image" class="img-rounded img-responsive" style="width: 50%">
                  <br><a href="profile" class="btn btn-outline-neutral btn-round" target="_blank">Set up Profile</a>
                  <br>
                  <img src="images/facilities.jpg" alt="Rounded Image" class="img-rounded img-responsive" style="width: 50%">
                  <br><a href="bookfacilities" class="btn btn-outline-neutral btn-round" target="_blank">View and Book Facilities</a>
              </div>
    
              <div class="col-md-6 text-center">
                  <img src="images/personalcoach.jpg" alt="Rounded Image" class="img-rounded img-responsive" style="width: 50%">
                  <br><a href="bookcoach" class="btn btn-outline-neutral btn-round" target="_blank">View and Book Personal Coach</a>
                  <br>
                  <img src="images/checkin.jpg" alt="Rounded Image" class="img-rounded img-responsive" style="width: 50%">
                  <br><a href="#checkin" class="btn btn-outline-neutral btn-round">Check in to Sport and Fitness Centre</a>
              </div>
            </div>
            <br>
      @endif

      @if($data->category === 'Coach')
      <div class="section section-dark">
          <div class="container">
            <div class="row">
              <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title"><b>Welcome, {{ $data->name }}</b></h2>
                <p class="description">Thank you for being a coach of Sport and Fitness Centre.</p>
                <p class="description">You can set up personal profile and introduction, view facilities' information,
                  book facilities, check schedule for appointment or lesson, check own trainees' profile and 
                  check-in Sport and Fitness Centre by scanning QR code</p>
                <h2 class="title">In SpoFit,</h2>
              </div>
            </div>
          </div>
    
          <div class="container">
            <div class="row example-page">
              <div class="col-md-6 text-center">
                  <img src="images/profile.png" alt="Rounded Image" class="img-rounded img-responsive" style="width: 50%">
                  <br><a href="coachprofile" class="btn btn-outline-neutral btn-round" target="_blank">Set up Profile</a>
                  <br>
                  <img src="images/facilities.jpg" alt="Rounded Image" class="img-rounded img-responsive" style="width: 50%">
                  <br><a href="bookfacilities" class="btn btn-outline-neutral btn-round" target="_blank">View and Book Facilities</a>
              </div>
    
              <div class="col-md-6 text-center">
                  <img src="images/personalcoach.jpg" alt="Rounded Image" class="img-rounded img-responsive" style="width: 50%">
                  <br><a href="appointment" class="btn btn-outline-neutral btn-round" target="_blank">Check Schedule for Lesson and Trainees' Profile</a>
                  <br>
                  <img src="images/checkin.jpg" alt="Rounded Image" class="img-rounded img-responsive" style="width: 50%">
                  <br><a href="#checkin" class="btn btn-outline-neutral btn-round" target="_blank">Check in to Sport and Fitness Centre</a>
              </div>
            </div>
        </div>
      @endif
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    
      <br>
      <br>
    
      <footer class="footer footer-black text-center">
              <div class="credits ml-auto">
                <span class="copyright">
                  ©
                  <script>
                    document.write(new Date().getFullYear())
                  </script>, made with <i class="fa fa-heart heart"></i> by Sport and Fitness Centre
                </span>
              </div>
        </footer>
    </div>

</body>

</html>