<html>
<head>

  <title><?php echo $pageTitle;?></title>
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

  <div class="header">
    <div class="wrapper">
      <h1 class="branding-title"><a href="/">Personal Media Libary</a></h1>

      <ul class="nav">

        <li class="books<?php if($section=="books"){echo" on";}?>"><a href="catalog.php?cat=books">books</a></li>
          <li class="movies<?php if($section=="movies"){echo" on";}?>"><a href="catalog.php?cat=movies">movies</a></li>
            <li class="music<?php if($section=="music"){echo" on";}?>"><a href="catalog.php?cat=music">music</a></li>
              <li class="suggest<?php if($section=="suggest"){echo" on";}?>"><a href="catalog.php?cat=suggest">suggest</a></li>
</ul>

</div>
</div>

<div id="content">
