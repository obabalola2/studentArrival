<?php
    $connection = mysqli_connect("localhost", "root", "", "students");
    $results = mysqli_query($connection, 'SELECT * FROM information');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>On Arrival - Aberdeen International Student Guide</title>
    <meta name="description" content="Aberdeen International Student Guide App">
    <meta name="keywords" content="RGU, Robert Gordon University, RGU International Student, International Student Aberdeen, International Student Advisor">
    <meta name="author" content="Segun">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="resources/styles/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/style.css">

</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            </button>
            <a class="navbar-brand" href="#">AISA</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="#"><a href="#">Home</a></li>
                <li class="#"><a href="#">Pre-Arrival</a></li>
                <li class="active"><a href="#">On-Arrival</a></li>
                <li class="#"><a href="#">Pre-Departure</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav" style='text-align: left;'>
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item"><a href="https://www.ukcisa.org.uk/">UKCISA</a></li>
                    <li class="list-group-item"><a href="https://www.aberdeencity.gov.uk/">Aberdeen City Council</a></li>
                    <li class="list-group-item"><a href="https://www.rgu.ac.uk/"> Robert Gordon University</a></li>
                    <li class="list-group-item"><a href="https://www.abdn.ac.uk/"> University of Aberdeen</a></li>
                    <li class="list-group-item"><a href="https://www.google.com/maps/@57.1401561,-2.1010407,14z"> My Map</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-8 text-left">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="union_street_image.png" alt="Caption of Union Street" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="Sunset%20Aberdeen%20beach.jpg" alt="Aberdeen Beach at Sunset" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="Aberdeen.jpg" alt="Beautiful Scene" style="width:100%";>
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


            <h1>Welcome to Aberdeen</h1>
            <p>
            Aberdeen is Scotland's third most populous city and the United Kingdom's 39th most populous built-up area. Since the discovery of North Sea oil in the 1970s, Aberdeen has been known as the off-shore oil capital of Europe.The area around Aberdeen has been settled for at least 8,000 years when prehistoric villages lay around the mouths of the rivers Dee and Don. The city has a long, sandy coastline and a marine climate, the latter resulting in chilly summers and mild winters.
            </p>
            <hr>        
            <div class="row">
                <h4> <b>Local Malls</b> </h4> <hr>
                <div class="col-md-3">
                    <a href="https://www.unionsquareaberdeen.com">
                      <img src="images/unionsquare.png">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="https://www.bonaccordaberdeen.com/">
                       <img src="images/bonaccourd.png">
                    </a>
                </div>   
                <div class="col-md-3">
                    <a href="https://www.trinityaberdeen.co.uk/">
                      <img src="images/trinity.png">
                    </a>
                </div> 
                <div class="col-md-3">
                    <a href="https://stores.primark.com/united-kingdom/aberdeen/153-union-street/">
                       <img src="images/primary.png">
                    </a>
                </div>                                                             
            </div> 
            <hr>
            <div class="row">
                <h4> <b>Local Supermarkets</b> </h4> <hr>
                <div class="col-md-3">
                    <a href="https://www.asda.com/">
                      <img src="images/asda.png">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="https://www.boots.com/?utm_source=google-maps&utm_medium=google-maps&utm_campaign=google-maps">
                      <img src="images/boots.png">
                    </a>
                </div>                
                <div class="col-md-3">
                    <a href="https://www.sainsburys.co.uk/">
                       <img src="images/sainsbury.png">
                    </a>
                </div>                
                <div class="col-md-3">
                    <a href="https://www.tesco.com/store-locator/uk/?bID=2007">
                       <img src="images/tesco.png">
                    </a>
                </div>                
            </div>
            <hr>
            <div class="row">
                <h4> <b>Local Bus Services</b> </h4> <hr>
                <div class="col-md-3">
                    <a href="https://www.firstgroup.com/aberdeen">
                        <img src="images/firstbus.png">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="https://www.stagecoachbus.com/tickets/unirider">
                       <img src="images/stagecoach.png">
                    </a>
                </div>                             
            </div>            

        </div>
        <div class="col-sm-2 sidenav">
            <div class="col-md-12" style="text-align: left">
                <h4> Title </h4>
                <ul class="list-group">
                    <li class="list-group-item"><a href="#"> Link 1</a></li>
                    <li class="list-group-item"><a href="#"> Link 1</a></li>
                    <li class="list-group-item"><a href="#"> Link 1</a></li>
                </ul>

                <h4> Title </h4>
                <ul class="list-group">
                    <li class="list-group-item"><a href="#"> Link 1</a></li>
                    <li class="list-group-item"><a href="#"> Link 1</a></li>
                    <li class="list-group-item"><a href="#"> Link 1</a></li>
                </ul>
            </div>
        </div>

        <div style="max-width: 900px; margin: auto">
            <div class="col-md-12" style="text-align: left">
                <hr>
                <p> Crowd Source Information - <a data-toggle="modal" data-target="#myModal" href="javascript:;"> Add new </a></p>
                <table class="table table-bordered">
                    <?php while($row = mysqli_fetch_array($results)){ ?>
                        <tr>
                            <td>
                                <b>
                                    <?php echo $row['title'];?> </b><br>
                                <?php echo $row['information']; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Add Information </h4>
      </div>
      <div class="modal-body">
      <form action="save_info.php" method="post">
            <div class="form-group">
                <label for="pwd">Title:</label>
                <input class="form-control"  name="title" required>
            </div>
            <div class="form-group">
                <label for="pwd">Information:</label>
                <textarea class="form-control" rows="6" id="pwd" name="information" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Footer -->
<footer class="page-footer font-small black">
    <div class="footer-copyright text-center py-3">© <?php echo date('Y'); ?> Copyright:
         Aberdeen International Student Directory
    </div>
</footer>
</body>
</html>