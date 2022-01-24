<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="images/SpoFit.png">
    <link rel="icon" type="image/png" href="images/SpoFit.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Check Appointment Page
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
                <a class="nav-link" rel="tooltip" title="Profile" data-placement="bottom" href="coachprofile" target="_blank">
                  Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Schedule" data-placement="bottom" href="" target="_blank">
                  <u>Schedule</u>
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
                <h4 class="title">Check Appointment Schedule</h4>
                <hr>
                <table class="table">
                    <thead class="description">
                        <th>Trainee's Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Confirm</th>
                        <th>Cancel</th>
                    </thead>
                    @foreach ($appointments as $appoint)
                        <tbody class="description">
                            <tr>
                            <td><a href="showtraineeprofile">{{ $appoint['name'] }}</a></td>
                            <td>{{ $appoint['date'] }}</td>
                            <td>{{ $appoint['time'] }}</td>
                            <td>{{ $appoint['phone'] }}</td>
                            <td>{{ $appoint['email'] }}</td>
                            <td><a href="">Confirm</a></td>
                            <td><a href="/delete/{{ $appoint['id'] }}">Cancel</a></td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</body>

</html>