<!DOCTYPE html>
<html>
  <head>
    <title>Calendar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="css/calendar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">P.O.W.E.R</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="login.html">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
        <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="users.php"><i class="glyphicon glyphicon-user"></i> New Users</a></li>
                    <li><a href="all_users.php"><i class="glyphicon glyphicon-user"></i> All Users</a></li>
                    <li><a href="projects.php"><i class="glyphicon glyphicon-book"></i> New Projects</a></li>
                    <li><a href="all_projects.php"><i class="glyphicon glyphicon-book"></i> All Projects</a></li>
                    <li><a href="reported_projects.php"><i class="glyphicon glyphicon-ban-circle"></i>Reported Projects</a></li>
                    <li><a href="transactions.php"><i class="glyphicon glyphicon-credit-card"></i>New Transactions</a></li>
                    <li><a href="transactions.php"><i class="glyphicon glyphicon-credit-card"></i>All Transactions</a></li>
                    <li class="current" ><a href="calendar.php"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                    <li><a href="stats.php"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">

		  			<div class="content-box-large">
		  				<div class="panel-body">
		  					<div class="row">
		  						<div class="col-md-2">
		  							<div id='external-events'>
	                                    <h4>Draggable Events</h4>
	                                    <div class='external-event'>My Event 1</div>
	                                    <div class='external-event'>My Event 2</div>
	                                    <div class='external-event'>My Event 3</div>
	                                    <div class='external-event'>My Event 4</div>
	                                    <div class='external-event'>My Event 5</div>
	                                    <div class='external-event'>My Event 6</div>
	                                    <div class='external-event'>My Event 7</div>
	                                    <div class='external-event'>My Event 8</div>
	                                    <div class='external-event'>My Event 9</div>
	                                    <div class='external-event'>My Event 10</div>
	                                    <div class='external-event'>My Event 11</div>
	                                    <div class='external-event'>My Event 12</div>
	                                    <div class='external-event'>My Event 13</div>
	                                    <div class='external-event'>My Event 14</div>
	                                    <div class='external-event'>My Event 15</div>
	                                    <p>
	                                    <input type='checkbox' id='drop-remove' /> <label for='drop-remove'>remove after drop</label>
	                                    </p>
                                    </div>
		  						</div>
		  						<div class="col-md-10">
		  							<div id='calendar'></div>
		  						</div>
		  					</div>
		  				</div>
		  			</div>


		  </div>
		</div>
    </div>

    <footer>
         <div class="container">

            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>

         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/fullcalendar/fullcalendar.js"></script>
    <script src="vendors/fullcalendar/gcal.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/calendar.js"></script>
  </body>
</html>