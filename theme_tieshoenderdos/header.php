<html lang="en">
  <head>
    <meta
      name="description"
      content="Website laten maken en hosten voor een voordelige prijs. Websites kunnen op maat gemaakt worden maar kunnen ook aangepast worden op basis van een template."
    />
    <meta
      name="keywords"
      content="Website, hosting, template, domeinnaam, Ties Hoenderdos"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/shortcuts/inview.js"></script>
    <meta charset="UTF-8" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Antic+Slab&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script>
      $(document).ready(function () {
        var inview = new Waypoint.Inview({
          element: $("#tekst-foto-services")[0],
          enter: function (direction) {
            $("#tekst-foto-services").addClass("is--entered");
          },
        });
      });

      $(document).ready(function () {
        var inview = new Waypoint.Inview({
          element: $("#tekst-template")[0],
          enter: function (direction) {
            $("#tekst-template").addClass("is--entered");
          },
        });
      });

      $(document).ready(function () {
        var inview = new Waypoint.Inview({
          element: $("#hosting-service")[0],
          enter: function (direction) {
            $("#hosting-service").addClass("is--entered");
          },
        });
      });

      $(document).ready(function () {
        var inview = new Waypoint.Inview({
          element: $("#tekst-redactie")[0],
          enter: function (direction) {
            $("#tekst-redactie").addClass("is--entered");
          },
        });
      });
    </script>
    <title>Home</title>
  </head>

  <body>
    <button id="hamburger-knop" onclick="showFunction()">☰</button>
    <div class="hamburger-container">
      <ul>
        <li><a href="#" class="ham-nav-link">Vaardigheden</a></li>
        <li><a href="#" class="ham-nav-link">Tarief</a></li>
        <li><a href="#" class="ham-nav-link">Contact</a></li>
      </ul>
    </div>
    <button id="hamburger-kruis" onclick="dissapearFunction()">X</button>
    <script src="js/hamburger.js"></script>
    <header id="header">
      <nav>
        <h1><a href="#" id="h1-nav">Ties Hoenderdos</a></h1>
        <ul class="nav-links">
          <li><a href="#" class="nav-link" id="projecten">Vaardigheden</a></li>
          <li><a href="#" class="nav-link" id="prijzen">Tarief</a></li>
          <li><a href="#" class="nav-link" id="contact">Contact</a></li>
        </ul>
      </nav>
    </header>