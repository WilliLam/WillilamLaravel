 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/modifications.css">
</head>
<body>
<br>
<div class="container">
    <h1 style="font-family:Arial Black, Gadget, sans-serif" align="left">William Lam</h1>
    <p align="left"><span class="icon far fa-envelope" title="email"></span> La.william4@gmail.com <a href="https://github.com/WilliLam" target="_blank" class="hyperlink"><span class="icon fab fa-github" title="github"></span> WilliLam</a></p>
</div>
<hr>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav border-between">
        <li class="active border-between"><a href="/"><p class="welink">Home</p></a></li>
        <li class="border-between"><a href="/CV"><p class="welink">Experience</p></a></li>
        <li class="border-between"><a href="/blog"><p class="welink">Blog</p></a></li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
@yield('content')


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
