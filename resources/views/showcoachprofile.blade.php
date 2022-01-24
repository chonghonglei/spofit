<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="images/SpoFit.png">
    <link rel="icon" type="image/png" href="images/SpoFit.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Coach Profile Page
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
                <a class="nav-link" rel="tooltip" title="Profile" data-placement="bottom" href="profile" target="_blank">
                  Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" rel="tooltip" title="Personal Coach" data-placement="bottom" href="bookcoach" target="_blank">
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
                <h4 class="title">Coach Profile Page</h4>
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
                    @foreach ($coaches as $coach)
                        <tbody class="description">
                            <tr>
                            <td><img src="{{ asset('images/'.$coach['picture']) }}" width="180px" height="120px" alt="Profile Picture"></td>
                            <td>{{ $coach['name'] }}</td>
                            <td>{{ $coach['age'] }}</td>
                            <td>{{ $coach['weight'] }}</td>
                            <td>{{ $coach['height'] }}</td>
                            <td>{{ $coach['gender'] }}</td>
                            <td>{{ $coach['exe'] }}</td>
                            <td>{{ round($coach['weight']/($coach['height']*$coach['height']),2) }}</td>
                            <td>@if($coach['gender'] == "Male")
                              {{ round((10*$coach['weight'] + 6.25*$coach['height']*100 - 5*$coach['age'] + 5),2)}}
                              @else
                              {{ round((10*$coach['weight'] + 6.25*$coach['height']*100 - 5*$coach['age'] - 161),2)}}
                              @endif
                            </td>
                            <td>@if($coach['gender'] == "Male")
                                  @if($coach['exe'] == "1 to 2 days a week")
                                    {{ round(((10*$coach['weight'] + 6.25*$coach['height']*100 - 5*$coach['age'] + 5) * 1.375),2)}}
                                  @endif
                                  @if($coach['exe'] == "3 to 5 days a week")
                                    {{ round(((10*$coach['weight'] + 6.25*$coach['height']*100 - 5*$coach['age'] + 5) * 1.55),2)}}
                                  @endif
                                  @if($coach['exe'] == "6 to 7 days a week")
                                    {{ round(((10*$coach['weight'] + 6.25*$coach['height']*100 - 5*$coach['age'] + 5) * 1.725),2)}}
                                  @endif
                                @elseif($coach['gender'] == "Female")
                                  @if($coach['exe'] == "1 to 2 days a week")
                                    {{ round(((10*$coach['weight'] + 6.25*$coach['height']*100 - 5*$coach['age'] - 161) * 1.375),2)}}
                                  @endif
                                  @if($coach['exe'] == "3 to 5 days a week")
                                    {{ round(((10*$coach['weight'] + 6.25*$coach['height']*100 - 5*$coach['age'] - 161) * 1.55),2)}}
                                  @endif
                                  @if($coach['exe'] == "6 to 7 days a week")
                                    {{ round(((10*$coach['weight'] + 6.25*$coach['height']*100 - 5*$coach['age'] - 161) * 1.725),2)}}
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