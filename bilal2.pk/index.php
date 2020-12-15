<?php

class mobile
{
    public $image;
    public $name;
    public $price;
}

$m1 = new mobile;
$m1->image = "1.jpg";
$m1->name = "Poco M3";
$m1->price = 52000;

$m2 = new mobile;
$m2->image = "9.jpg";
$m2->name = "Oppo F17";
$m2->price = 39999;

$m3 = new mobile;
$m3->image = "10.jpg";
$m3->name = "Infinix note 8";
$m3->price = 29999;

$m4 = new mobile;
$m4->image ="11.jpg";
$m4->name = "Galaxy M31";
$m4->price = 48000;



$mobiles = [$m1,$m2,$m3,$m4];

?>


<?php

class watch
{
    public $image;
    public $name;
    public $price;
}

$w1 = new watch;
$w1->image = "5.jpg";
$w1->name = "CK royal";
$w1->price = 4200;

$w2 = new watch;
$w2->image = "6.jpg";
$w2->name = "CK Black";
$w2->price = 3500;

$w3 = new watch;
$w3->image = "7.jpg";
$w3->name = "CK minimal ";
$w3->price = 2900;

$w4 = new watch;
$w4->image = "8.jpg";
$w4->name = "CK Leather";
$w4->price = 2400;

$watches = [$w1,$w2,$w3,$w4];
?>

<?php

class camera
{
    public $image;
    public $name;
    public $price;
}

$c1 = new camera;
$c1->image = "12.jpg";
$c1->name = "Canon";
$c1->price = 42000;

$c2 = new watch;
$c2->image = "13.jpeg";
$c2->name = "Canon 5D";
$c2->price = 3500;

$c3 = new watch;
$c3->image = "12.jpg";
$c3->name = "Canon  ";
$c3->price = 2900;

$c4 = new watch;
$c4->image = "13.jpeg";
$c4->name = "Canon 5D";
$c4->price = 2400;

$cameras = [$c1,$c2,$c3,$c4];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <title>Bilal.pk</title>
    <style>
    body 
    {
      margin:0;
      padding:0;
    }
    h5
    {
      font-family: 'Russo One', sans-serif;
    }
    p
    {
      font-family: 'PT Sans Narrow', sans-serif;

    }
    </style>
</head>
<body>
     <div>
       <img class="mt-2 ml-2" src="image/logo1.jpg" alt="logo" style="height:80px; width:85px;border-radius:10px;">
     </div>
        <h2 class="ml-2">Categories</h2>
    <div class="col-12">
        <div class="row">
            <div class="col-2">

                <?php
                $catg = ['Mobiles','Watches','Cameras'];

                for ($i = 0; $i < 3; $i++) {

                ?>
                    <p><a href=""><?php echo $catg[$i];  ?></a></p>


                <?php
                }
                ?>

            </div>
          </div>
        </div>
            <div class="container">
              <div class="row">
                <?php 
                   foreach ($mobiles as $items)
                   {
                  ?>
                    <div class="card col-12 col-lg-3">
                      <div class="card-body text-center">
                       <img class="img-fluid" src="image/<?php echo $items ->image;?>" alt="">
                       <h5 class="card-title text-center"><?php echo $items -> name; ?></h5>
                       <p class="card-text text-center"><?php echo $items-> price;?></p>
                    </div>
                    </div>
                <?php
                   }
                   ?>
              </div>
            </div>

                    
            <div class="container">
              <div class="row">
                <?php 
                   foreach ($watches as $items)
                   {
                  ?>
                    <div class="card col-12 col-lg-3 mt-2">
                      <div class="card-body text-center">
                       <img class="img-fluid" src="image/<?php echo $items ->image;?>" alt="">
                       <h5 class="card-title text-center"><?php echo $items -> name; ?></h5>
                       <p class="card-text text-center"><?php echo $items-> price;?></p>
                    </div>
                    </div>
                <?php
                   }
                   ?>
              </div>
            </div>

            <div class="container">
              <div class="row">
                <?php 
                   foreach ($cameras as $items)
                   {
                  ?>
                    <div class="card col-12 col-lg-3 mt-2">
                      <div class="card-body text-center">
                       <img class="img-fluid" src="image/<?php echo $items ->image;?>" alt="">
                       <h5 class="card-title text-center"><?php echo $items -> name; ?></h5>
                       <p class="card-text text-center"><?php echo $items-> price;?></p>
                    </div>
                    </div>
                <?php
                   }
                   ?>
              </div>
            </div>
</body>
</html>