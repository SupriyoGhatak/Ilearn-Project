<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard_style.css" >
    <title>dashboard!</title>
  </head>
  <body>
    <!--navbar-->
    <nav class="navbar navbar-dark bg-primary fixed-top flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">ILEARN</a>
<input type="text" class="form-control form-control-primary w-100" placeholder="Search..." >
<ul class="navbar-nav px-3">
  <li class="nav-item text-nowrap">
    <a class="nav-link" href="#">Logout</a>
  </li>
</ul>
</nav>
<!--container-->
<div class="container-fluid">
  <div class="row">
    <!-- Sidear -->
    <div class="col-md-2 bg-light d-none d-md-block sidebar">
      <div class="left-sidebar">
        
        <ul class="nav flex-column sidebar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="dashboard.php">
              <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd"/>
              </svg>
              Statistics
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="dashcourses.php">
              <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd"/>
              </svg>
              Courses
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="dashexamboard.php">
              <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd"/></svg>
              Exam Board
             </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="dashupcoming.php">
              <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd"/></svg>
              Upcoming Events
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="dashreports.php">
              <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd"/></svg>
             Reports
            </a>
          </li>
        </ul>
      
      </div>
    </div>
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4>
              
	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a href="dashboard.php">Statistics</a></li>
  </ol>
</nav>
<h1 class="h2">Dashboard</h1>
<p>This is the homepage of a simple admin interface which is part of a tutorial written on Themesberg</p>
<div class="col-md-4 my-3">
                <div class="bg-mattBlackLight px-3 py-3">
                  <h4 class="mb-2">C++</h4>
                  <div class="progress" style="height: 16px;">
                    <div
                      class="progress-bar bg-warning text-mattBlackDark"
                      role="progressbar"
                      style="width: 25%;"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    >
                      25
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 my-3">
                <div class="bg-mattBlackLight px-3 py-3">
                  <h4 class="mb-2">JAVA</h4>
                  <div class="progress" style="height: 16px;">
                    <div
                      class="progress-bar bg-info text-mattBlackDark"
                      role="progressbar"
                      style="width: 50%;"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    >
                      50
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 my-3">
                <div class="bg-mattBlackLight p-3">
                  <h4 class="mb-2">SQL</h4>
                  <div class="progress" style="height: 16px;">
                    <div
                      class="progress-bar bg-success"
                      role="progressbar"
                      style="width: 80%;"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    >
                      80
                    </div>
                  </div>
                </div>
              </div>
           
            <div class="col-md-4 my-3">
                <div class="bg-mattBlackLight p-3">
                  <h4 class="mb-2">C</h4>
                  <div class="progress" style="height: 16px;">
                    <div
                      class="progress-bar bg-success"
                      role="progressbar"
                      style="width: 75%;"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    >
                      75
                    </div>
                  </div>
                </div>
              </div>
              <!--</div>-->
            
            <div class="row">
              <div class="col-md-6">
                <div class="bg-mattBlackLight my-2 p-3">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Ratione libero totam rerum eos nam ab perspiciatis voluptatum
                  in. Quidem natus autem quae. Velit accusamus sit, perspiciatis
                  sunt earum tempora veniam.
                </div>
              </div>
              <div class="col-md-6">
                <div class="bg-mattBlackLight my-2 p-3">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Ratione libero totam rerum eos nam ab perspiciatis voluptatum
                  in. Quidem natus autem quae. Velit accusamus sit, perspiciatis
                  sunt earum tempora veniam.
                </div>
              </div>
                </div>
  </div>
	</main>
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>