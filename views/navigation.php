<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <?php
                      foreach($data as $key=>$val) {
                        if ($val == "/" . $currentPage["pagename"]){
                          echo "<li class='active'><a href='" . $val . "'>" . $key . "</a></li>";
                        } else {
                          echo "<li><a href='" . $val . "'>" . $key . "</a></li>";
                        }
                      }
                      echo "<li><a href='/about' id='about'>About</a></li>";
                      echo "<li><a href='#' id='showLogin'>LOGIN</a></li>";

                    ?>
                </ul>
                <span style="color:red"><?=@$_REQUEST["msg"]?$_REQUEST["msg"]: '';?></span>
                <?php if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1){ ?>
                  <!-- Why Did you wrap this in form tag -->
  <!------------------------------>
                  <div class="navbar-form navbar-right">
                    <a href="/profile">Profile</a>
                    <a href="/auth/logout">Logout</a>
                    <a href="/about"
                  </div>
                <?php } else{ ?>
                  <form class="navbar-form navbar-right" role="search" method="POST" action="/auth/login" id="log">
                    <div class="form-group">
                      <input type="text" class="form-control" name="username" placeholder="username">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="password" placeholder="password">
                    </div>
                    <button type="submit" class="btn btn-default">Sign In</button>
                  </form>
                <?php } ?>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
