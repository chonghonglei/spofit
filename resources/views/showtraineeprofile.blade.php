<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="images/SpoFit.png">
    <link rel="icon" type="image/png" href="images/SpoFit.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Trainee Profile Page
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
              {{--<li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Profile" data-placement="bottom" href="/profile" target="_blank">
                  <u>Profile</u>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Personal Coach" data-placement="bottom" target="_blank">
                  Personal Coach
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Facilities" data-placement="bottom" href="" target="_blank">
                  Facilities
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Check In" data-placement="bottom" href="/dashboard" target="_blank">
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
                <h4 class="title">Trainee Profile Page</h4>
                <hr>
                <table class="table">
                    <thead class="description">
                        <th>Profile Picture</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Weight</th>
                        <th>Height</th>
                        <th>Gender</th>
                        <th>Exercise Level</th>
                        <th>Body Mass Index (BMI)</th>
                        <th>Basal Metabolic Rate (BMR)</th>
                        <th>Calories Intake (kcal)</th>
                    </thead>
                    @foreach ($trainees as $trainee)
                        <tbody class="description">
                            <tr>
                            <td><img src="{{ asset('assets/img/faces/'.$trainee['picture']) }}" width="70px" height="70px" alt="Profile Picture"></td>
                            <td>{{ $trainee['name'] }}</td>
                            <td>{{ $trainee['age'] }}</td>
                            <td>{{ $trainee['weight'] }}</td>
                            <td>{{ $trainee['height'] }}</td>
                            <td>{{ $trainee['gender'] }}</td>
                            <td>{{ $trainee['exe'] }}</td>
                            <td>{{ round($trainee['weight']/($trainee['height']*$trainee['height']),2) }}</td>
                            <td>@if($trainee['gender'] == "Male")
                              {{ 10*$trainee['weight'] + 6.25*$trainee['height']*100 - 5*$trainee['age'] + 5}}
                              @else
                              {{ 10*$trainee['weight'] + 6.25*$trainee['height']*100 - 5*$trainee['age'] - 161}}
                              @endif
                            </td>
                            <td>@if($trainee['gender'] == "Male")
                                  @if($trainee['exe'] == "1 to 2 days a week")
                                    {{ (10*$trainee['weight'] + 6.25*$trainee['height']*100 - 5*$trainee['age'] + 5) * 1.375}}
                                  @endif
                                  @if($trainee['exe'] == "3 to 5 days a week")
                                    {{ (10*$trainee['weight'] + 6.25*$trainee['height']*100 - 5*$trainee['age'] + 5) * 1.55}}
                                  @endif
                                  @if($trainee['exe'] == "6 to 7 days a week")
                                    {{ (10*$trainee['weight'] + 6.25*$trainee['height']*100 - 5*$trainee['age'] + 5) * 1.725}}
                                  @endif
                                @elseif($trainee['gender'] == "Female")
                                  @if($trainee['exe'] == "1 to 2 days a week")
                                    {{ (10*$trainee['weight'] + 6.25*$trainee['height']*100 - 5*$trainee['age'] - 161) * 1.375}}
                                  @endif
                                  @if($trainee['exe'] == "3 to 5 days a week")
                                    {{ (10*$trainee['weight'] + 6.25*$trainee['height']*100 - 5*$trainee['age'] - 161) * 1.55}}
                                  @endif
                                  @if($trainee['exe'] == "6 to 7 days a week")
                                    {{ (10*$trainee['weight'] + 6.25*$trainee['height']*100 - 5*$trainee['age'] - 161) * 1.725}}
                                  @endif
                                @endif
                            </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</body>

</html>