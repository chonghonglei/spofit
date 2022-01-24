<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../images/SpoFit.png">
    <link rel="icon" type="image/png" href="../images/SpoFit.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Facilities Booking Page
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
    <link href="../assets/demo/demo.css" rel="stylesheet" />
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
              {{--<li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Profile" data-placement="bottom" href="profile" target="_blank">
                  Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Personal Coach" data-placement="bottom" href="bookcoach" target="_blank">
                  Personal Coach
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Facilities" data-placement="bottom" href="" target="_blank">
                  <u>Facilities</u>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Check In" data-placement="bottom" href="dashboard" target="_blank">
                  Check In
                </a>
              </li>--}}
              <li class="nav-item">
                <a href="/login" target="_blank" class="btn btn-danger btn-round">Logout</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="page-header section-dark" style="background-image: url('../images/gym.jpg')">
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
            <div class="row" style="padding-top: 20px">
                <img src="/images/{{ $data->picture }}" alt="" style="width: 500px; height: 400px">
                <div class="col-5">
                    <p class="title">Facilities Name: <br> <b>{{ $data->name }}</b></p> 
                    <p class="title">Facilities Status: <br> <b>{{ $data->description }}</b></p>
                    <p class="title">Facilities ID: <br> <b>{{ $data->no }}</b></p>
                </div>
            </div>

            <hr>

            <form class="contact-form" action="{{ route('book_facilities') }}" method="post">
                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                @if (Session::has('fail'))
                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                @endif
                @csrf
                @csrf
                @csrf
                <h2 class="title">GET IN TOUCH</h2>

                <div class="row">
                    <div class="col-md-6">
                        <label class="description">Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="description">Date</label>
                        <div class="input-group">
                            <input type="date" class="form-control" id="date" name="date" placeholder="Date"
                                value="{{ old('date') }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label class="description">Phone</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"
                                value="{{ old('phone') }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="description">Time Slot</label>
                        <div class="input-group">
                            <input type="time" class="form-control" id="time" name="time" placeholder="Time"
                                value="{{ old('time') }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label class="description">Email</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" class="form-control" id="no" name="no" placeholder="ID"
                                value="{{ $data->no }}" hidden>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <button type="submit" class="btn btn-danger btn-lg btn-fill">Submit</button>
                    </div>
                </div>
            </form>

            <hr>

      <div class="section section-dark">
      <div class="container">
        <div class="row">
            <div class=".col-md-4 col-md-offset-4" style="margin-top:20px">
            <h2 class="title">SCAN QR CODE BEFORE USING FACILITIES</h2>
                <form name="login" action="{{ route('login_facilities') }}" method="POST">
                    @csrf
                        <label class="description">Enter Your Name:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="content" name="content" placeholder="Name"
                                value="{{ old('content') }}">
                        </div><br><br>
                    <input type="text" name="no" id="no" value="{{ $data->no }}" hidden>
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

      <div class="cam">
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
                // document.getElementById('content').value = content;
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
        </div>
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
