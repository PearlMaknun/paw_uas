  <style>
    @font-face{
      font-family:'Glyphicons Halflings';
      src:url(fonts/glyphicons-halflings-regular.eot);
    }

    .container-fluid > h1{
      margin-top: 50px;
      margin-bottom: 50px;
      background-color: black;
      color: white;
    }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    }
  </style>
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="dashboard.php">DASHBOARD ADMINISTRATOR STARFUTSAL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-bell"></span> Pemberitahuan</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profil</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
      </ul>
    </div>
  </div>
  </nav>