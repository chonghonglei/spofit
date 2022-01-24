<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="images/SpoFit.png">
    <link rel="icon" type="image/png" href="images/SpoFit.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Profile Page
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
                <a class="nav-link" rel="tooltip" title="Profile" data-placement="bottom" href="" target="_blank">
                  <u>Profile</u>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Schedule" data-placement="bottom" href="appointment" target="_blank">
                  Schedule
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
                <h2 class="title"><b>Set Up Profile</b></h2>
                <p class="description">Thank you for being a coach of Sport and Fitness Centre.</p>
                <p class="description">Please set up 
                    your personal profile and you can check your calories intake and BMI.</p>
              </div>
            </div>
          </div>
    
        <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <form class="contact-form" action="{{ route('coach_profile') }}" method="post">
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    @if (Session::has('fail'))
                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                    @endif
                    @csrf
                  <label class="description">Profile Picture</label>
                  <input type="file" id="picture" name="picture" placeholder="Picture" onchange=PreviewImage()>
                  <img id="uploadPreview" value="{{ old('picture') }}"><br><br>
                  <script type="text/javascript">
                  function PreviewImage() {
                  var oFReader = new FileReader();
                  oFReader.readAsDataURL(document.getElementById("picture").files[0]);
                  oFReader.onload = function (oFREvent) {
                  document.getElementById("uploadPreview").src = oFREvent.target.result;
                  };
                  };
                  </script>
              <div class="row">
                <div class="col-md-6">
                  <label class="description">Name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                  </div>
                </div>
                <div class="col-md-6">
                  <label class="description">Age</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="age" name="age" placeholder="Age" value="{{ old('age') }}">
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6">
                  <label class="description">Weight (in kg)</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight" value="{{ old('weight') }}">
                  </div>
                </div>
                <div class="col-md-6">
                  <label class="description">Height (in m)</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="height" name="height" placeholder="Height" value="{{ old('height') }}">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <label class="description">Gender</label><br>
                  <select name="gender" id="gender" style="font-weight: bold;" value="{{ old('gender') }}">
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="description">Exercise Level</label><br>
                  <select name="exe" id="exe" style="font-weight: bold;" value="{{ old('exe') }}">
                    <option>1 to 2 days a week</option>
                    <option>3 to 5 days a week</option>
                    <option>6 to 7 days a week</option>
                  </select>
                </div>

                <label class="description">Description</label>
                <div class="input-group">
                  <textarea class="form-control" rows="4" id="description" name="description" placeholder="Describe yourself...." value="{{ old('description') }}"></textarea>
                </div>
                
              </div>

              <div class="row">
                <div class="col-md-4 ml-auto mr-auto">
                <button type="submit" class="btn btn-danger btn-lg btn-fill">Submit</button>
                </div>
              </div>
            </form>

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
        </div>
      </div>

</body>
</html>