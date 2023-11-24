<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo/2.jpg" type="image/icon type">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.css">
    <link rel="stylesheet" href="CSS\Home-Style.css">
    <link rel="stylesheet" href="Category Brands/Css files/style.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <?php include 'components/slider_header.php' ?>
</head>


<body>
    <div class="container-fluid" style="border:none ; box-sizing: border-box; text-align: center;">


        <?php include 'components/navbar.php' ?>
        <?php include 'components/searchbar.php' ?>
        <?php include 'components/slider.php' ?>



        <h1 class="heading">Category</h1>
        <div class="row" style="width: 100%; margin: 0; display: flex;justify-content: space-evenly;">

            <div class="card col-lg-3 cat_col_div" style="width: 18rem;">
                <a href="Category Brands\Category html Files\Refrigerator\FRI1.html"><img src="img\Home page Category\Fridge.png" style="width:150px; height:150px; margin:15px; " class="card-img-top cdimg" alt="..."></a>
                <div class="card-body">
                    <a href="Category Brands\Category html Files\Refrigerator\FRI1.html" class="cdtitle">
                        <h5 class="card-title">Refrigerator</h5>
                    </a>
                </div>
            </div>

            <div class="card col-lg-3 cat_col_div" style="width: 18rem;">
                <a href="Category Brands\Category html Files\Led Tv\TV1.html"><img src="img\Home page Category\Tv.png" style="width:150px; height:150px; margin:15px; " class="card-img-top cdimg" alt="..."></a>
                <div class="card-body">
                    <a href="Category Brands\Category html Files\Led Tv\TV1.html" class="cdtitle">
                        <h5 class="card-title">Smart LED TV</h5>
                    </a>
                </div>
            </div>

            <div class="card col-lg-3 cat_col_div" style="width: 18rem;">
                <a href="Category Brands\Category html Files\Washer\WAS1.html"><img src="img\Home page Category\Washer.png" style="width:150px; height:150px; margin:15px; " class="card-img-top cdimg" alt="..."></a>
                <div class="card-body">
                    <a href="Category Brands\Category html Files\Washer\WAS1.html" class="cdtitle">
                        <h5 class="card-title">Washer</h5>
                    </a>
                </div>
            </div>

            <div class="card col-lg-3 cat_col_div" style="width: 18rem;">
                <a href="Category Brands\Category html Files\Air Conditionar\AC1.html"><img src="img\Home page Category\Ac.png" class="card-img-top cdimg" alt="..."></a>
                <div class="card-body">
                    <a href="Category Brands\Category html Files\Air Conditionar\AC1.html" class="cdtitle">
                        <h5 class="card-title">Air Conditioner</h5>
                    </a>
                </div>
            </div>




        </div>
    </div>
    <!-- Category Section End  -->


    <!-- Brands Section Start  -->
    <h1 class="heading">Brands</h1>
    <div class="row" style="width: 100%; margin: 0; display: flex; justify-content: center; align-items: center;">
        <div class="col-lg-3 col-md-4" style="text-align: center;">
            <a href="Category Brands/Brands html Files/Haier/H1.html"><img src="img\Home Page Brands\Haier.jpg" alt="" class="Brands_images"></a>
        </div>
        <div class="col-lg-3 col-md-4" style="text-align: center;">
            <a href="Category Brands/Brands html Files/Samsung/S1.html"><img src="img\Home Page Brands\samsung2.jpg" alt="" class="Brands_images"></a>
        </div>
        <div class="col-lg-3 col-md-4" style="text-align: center;">
            <a href="Category Brands/Brands html Files/Panasonic/P1.html"><img src="img\Home Page Brands\panasonic.jpg" alt="" class="Brands_images"></a>
        </div>
        <div class="col-lg-3 col-md-4" style="text-align: center;">
            <a href="Category Brands/Brands html Files/LG/O1.html"><img src="img\Home Page Brands\LG2.jpg" alt="" class="Brands_images"></a>
        </div>
    </div>
    </div>
    <!-- Brands Section End  -->
    <!-- Suggestion For Your Start -->
    <div class="row" style="width: 100%; margin: 30px 0 10px 0;">
        <div class="col-lg-4 col-md-12" style="text-align: center;">
            <h1 class="Suggestion_heading">
                Suggestion For You</h1>
        </div>
    </div>
    <div class="row" style=" width: 100%; margin: 0;">
        <div class="col-lg-3 col-md-6 col-sm-12 col_huz">
            <div class="card">
                <a href="Category Brands/Add to Cart pages/lt1.html"> <img src="img/items/LED Tv/LG/1.jpeg" alt="Denim Product" style="width:100%"></a>
                <h2 class="Product_Tag">HFM-50</h2>
                <p class="price">$19.99</p>
                <p>AU7000 UHD 4K Smart TV</p>
                <p><button onclick="atc()">Add to Cart</button></p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col_huz">
            <div class="card">
                <a href="Category Brands/Add to Cart pages/ht5.html"> <img src="img/items/LED Tv/Haier/2.jpeg" alt="Denim Product" style="width:100%"></a>
                <h2 class="Product_Tag">HFM-50</h2>
                <p class="price">$19.99</p>
                <p>AU7000 UHD 4K Smart TV</p>
                <p><button onclick="atc()">Add to Cart</button></p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col_huz">
            <div class="card">
                <a href="Category Brands/Add to Cart pages/pt5.html"> <img src="img/items/LED Tv/Panasonic/5.jpeg" alt="Denim Product" style="width:100%"></a>
                <h2 class="Product_Tag">HFM-50</h2>
                <p class="price">$19.99</p>
                <p>AU7000 UHD 4K Smart TV</p>
                <p><button onclick="atc()">Add to Cart</button></p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col_huz">
            <div class="card">
                <a href="Category Brands/Add to Cart pages/lt5.html"> <img src="img/items/LED Tv/LG/5.jpeg" alt="Denim Product" style="width:100%"></a>
                <h2 class="Product_Tag">HFM-50</h2>
                <p class="price">$19.99</p>
                <p>AU7000 UHD 4K Smart TV</p>
                <p><button onclick="atc()">Add to Cart</button></p>
            </div>
        </div>
    </div>

    <div class="row" style=" width: 100%; margin:20px 0;">
        <div class="col-lg-6 d-flex" style="align-items: center; justify-content: center;"><img src="img/ref.jpg" alt="" style="border-radius: 20px; width: 100%;"></div>
        <div class="col-lg-6 d-flex Text_div" style="align-items: center; justify-content: center;flex-direction: column; padding: 0 5% 0 5%;">
            <h2 class="WR_heading">REFRIGERATOR</h2>
            <p style="text-align: justify;">A refrigerator, also known as a fridge, is an essential appliance found in homes and commercial settings that is designed to preserve and cool perishable food items and beverages. It consists of a thermally insulated compartment with a door, shelves, and compartments for efficient storage and organization of various food items.</p>
        </div>
    </div>
    <div class="row" style=" width: 100%; margin:20px 0;">
        <div class="col-lg-6 d-flex Text_div" style="align-items: center; justify-content: center;flex-direction: column; padding: 0 5% 0 5%;">
            <h2 class="WR_heading">WASHER</h2>
            <p style="text-align: justify;">
                A washer, commonly referred to as a washing machine, is a household appliance that plays a vital role in cleaning and maintaining our clothes. It has become an indispensable part of modern homes, saving time and effort in the laundry process. Washers come in various types, including top-loading and front-loading models, each with its unique features and advantages. </p>
        </div>
        <div class="col-lg-6 d-flex" style="align-items: center; justify-content: center;"><img src="img/wash.jpg" alt="" style="border-radius: 20px; width: 100%;"></div>
    </div>
    <div class="row" style=" width: 100%; margin:20px 0;">
        <div class="col-lg-6 d-flex" style="align-items: center; justify-content: center;"><img src="img/AC.jpg" alt="" style="border-radius: 20px; width: 100%;"></div>
        <div class="col-lg-6 d-flex Text_div" style="align-items: center; justify-content: center;flex-direction: column; padding: 0 5% 0 5%;">
            <h2 class="WR_heading">Air Conditioner</h2>
            <p style="text-align: justify;">An air conditioner, often referred to as AC or air con, is a widely used appliance that helps regulate the temperature and humidity of indoor spaces. It provides cooling and dehumidification, creating a comfortable environment during hot and humid weather conditions.</p>
        </div>
    </div>
    <div class="row" style=" width: 100%; margin:20px 0;">
        <div class="col-lg-6 d-flex Text_div" style="align-items: center; justify-content: center;flex-direction: column; padding: 0 5% 0 5%;">
            <h2 class="WR_heading">TELEVISION</h2>
            <p style="text-align: justify;">
                Television, commonly known as TV, is an integral part of modern households and a significant source of entertainment, information, and communication. It has revolutionized the way we access news, watch shows, and stay connected to the world. Television sets consist of a display screen, audio speakers, and various input ports for connecting external devices.</p>
        </div>
        <div class="col-lg-6 d-flex" style="align-items: center; justify-content: center;"><img src="img/tv.jpeg" alt="" style="border-radius: 20px; width: 100%;"></div>
    </div>
    <!-- Suggestion For Your End -->

    <?php include 'Components/footer.php' ?>
    <?php include 'Components/sign_up_modal.php' ?>
    <?php include 'Components/sign_in_modal.php' ?>
    
        <!-- Feedback  -->
    <div class="containerf" id="cont">
        <div class="f_c">
            <div> <button onclick="fback()">
                    <h5>Feedback&nbsp;🤗</h5>
                </button></div>
            <div><button onclick="fcan()"><i class="glyphicon glyphicon-remove"></i></button></div>
        </div>
        <div class="eb">
            <textarea name="" id="txt" cols="30" rows="7" placeholder="Enter Text here"></textarea>
        </div>
        <div class="btns">
            <button class="btn btn-default btn-lg" onclick="fcan()" style="background-color: #ffc107;">Cancel</button>
            <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal" style="background-color: #ffc107;" onclick="txt_sub()">Submit</button>
        </div>
    </div>



    <script src="bootstrap-5.0.2-dist\js\bootstrap.js"></script>
    <script src="java script/Sign in and Sign Up.js"></script>
</body>

</html>