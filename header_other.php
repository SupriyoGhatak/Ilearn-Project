<header class="header_area white-header">
      <div class="main_menu">
      <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand" href="index.php">
              <img class="logo-2" src="img/logo_1111.png" alt="" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                  <?php
                        session_start();
                        if(isset($_SESSION['username'])){ ?>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"> Hii,&nbsp; <?php echo $_SESSION['username']; ?></a>
                </li>
               <li class="nav-item ">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="test.php">Dashboard</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="my_profile.php">My Profile</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="logout.php">logout</a>
                </li>
                
                <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li>
                  
                   <?php } else { ?> 
                  
                  
                  
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                
                <li class="nav-item submenu dropdown active">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Courses</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="course-details-c.php">C</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="course-details.php">C++</a>
                    </li>
                    
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="course-details-java.php">Java</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="course-details-rdbms.php">RDBMS</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about_us.php">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
             <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li>
                 <?php } ?>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
