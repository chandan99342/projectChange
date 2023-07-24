<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
   

</head>

<?php include 'menu.php'; ?>

  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../image/food1.jpg" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="../image/pick.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="../image/food3.jpg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>   
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>


<section class="my-5">
    <div class="py-5 ">
        <h2 class="text-center">About us</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="../image/food1.jpg" class="img-fluid aboutimg">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="display-4">I am chandan singh kushwaha</h2> 
                <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ea numquam natus? Reprehenderit quisquam quae perspiciatis et odit magni accusamus animi ducimus, tempora atque repudiandae mollitia, assumenda, repellat libero? Numquam?</p>   
                <a href="about.php" class="btn btn-success">check More</a>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5 ">
        <h2 class="text-center">Our Services</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12"> 
                <div class="card" style="width: 400px;">
                    <img class="card-img-top" src="../image/pick.jpg" alt="card-image">
                    <div class="card-body">
                        <h4 class="card-title">Beautiful Nature</h4>
                        <p class="card-text">some exaple text</p>
                        <a href="#" class="btn btn-primary">see profile</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12"> 
                <div class="card" style="width: 400px;">
                    <img class="card-img-top" src="../image/pick.jpg" alt="card-image">
                    <div class="card-body">
                        <h4 class="card-title">Beautiful Nature</h4>
                        <p class="card-text">some exaple text</p>
                        <a href="#" class="btn btn-primary">see profile</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12"> 
                <div class="card" style="width: 400px;">
                    <img class="card-img-top" src="../image/pick.jpg" alt="card-image">
                    <div class="card-body">
                        <h4 class="card-title">Beautiful Nature</h4>
                        <p class="card-text">some exaple text</p>
                        <a href="#" class="btn btn-primary">see profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="my-5">
    <div class="py-5 ">
        <h2 class="text-center">Our Gallery</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="../image/food4.jpg" class="img-fluid pb-4">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="../image/food4.jpg" class="img-fluid pb-4">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="../image/food4.jpg" class="img-fluid pb-4">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="../image/food4.jpg" class="img-fluid pb-4">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="../image/food4.jpg" class="img-fluid pb-4">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="../image/food4.jpg" class="img-fluid pb-4">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="../image/food4.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="../image/food4.jpg" class="img-fluid pb-4">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="../image/food4.jpg" class="img-fluid pb-4">
            </div>
        
        </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5 ">
        <h2 class="text-center">Our contact</h2>
    </div>

    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group"> 
                <label>Username</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
            </div>

            <div class="form-group"> 
                <label>Email Id</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
            </div>

            <div class="form-group"> 
                <label>Mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>

            <div class="form-group"> 
                <label>Comments</label>
                <textarea class="form-control" name="comment"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>


        </form>
    </div>
</section>

<footer>
    <p class="p-3 bg-dark text-white text-center">@chandansinghkushwahaproduction</p>
</footer>
    

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>