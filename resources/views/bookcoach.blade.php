<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../images/SpoFit.png">
    <link rel="icon" type="image/png" href="../images/SpoFit.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Coach Booking Page
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
    <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">

    {{--<nav class="navbar navbar-expand-lg fixed-top" color-on-scroll="300"
        style=" background-image: url('images/gym.jpg')">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom"
                    target="_blank" style="color: white;">
                    Sport and Fitness Centre
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a href="profile" target="_blank" class="nav-link" style="color: white;">
                            Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="" target="_blank" class="nav-link" style="color: white;">
                            <u>Personal Coach</u></a>
                    </li>
                    <li class="nav-item">
                        <a href="bookfacilities" target="_blank" class="nav-link" style="color: white;">
                            Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a href="dashboard" target="_blank" class="nav-link" style="color: white;">
                            Check in</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" target="_blank" class="btn btn-danger btn-round">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>--}}

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
                <a class="nav-link" rel="tooltip" title="Profile" data-placement="bottom" href="profile" target="_blank">
                  Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Personal Coach" data-placement="bottom" href="" target="_blank">
                  <u>Personal Coach</u>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Facilities" data-placement="bottom" href="bookfacilities" target="_blank">
                  Facilities
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Check In" data-placement="bottom" href="dashboard" target="_blank">
                  Check In
                </a>
              </li>
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
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">View and Book Personal Coach</h2>
                    <p class="description">Thank you for being a trainee member of Sport and Fitness Centre.
                        You can view and book a personal coach to assist you to manage your health.</p>
                    <a href="showcoachprofile"><u>Display all coach profiles</u></a>
                </div>
            </div>
        </div>
        <br>

        <div class="row">

            @foreach ($data as $coach)
                <div class="col-md-4 text-center">
                    <a href="/bookcoach/{{ $coach->id }}">
                        {{-- <img src="{{ $coach->picture }}" alt="" style="height: 70%"> --}}
                        <img src="/images/{{ $coach->picture }}" alt="" style="height: 70%">
                        <br>
                        <p class="description">{{ Str::upper($coach->name) }}</p>
                    </a>
                </div>
            @endforeach

        </div>

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
