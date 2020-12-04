<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>



  <nav class="#00e676 green accent-3"/>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">The Local Store</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Stores</a></li>
        <li><a href="badges.html">Account</a></li>
        <li><a href="collapsible.html">Payments</a></li>
        <li><a href="collapsible.html">Sign-in</a></li>
      </ul>
    </div>
    <div class="#80cbc4 teal lighten-3">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#test1">Products</a></li>
        <li class="tab"><a class="active" href="#test2">Payments</a></li>
        <li class="tab"><a href="#test3">Reviews</a></li>
        <li class="tab"><a href="#test4">Payments</a></li>
      </ul>
    </div>
  </nav>


<main>
  @yield('content')
</main>



    <body>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
@include('layouts.footer')
