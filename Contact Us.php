<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.css">
    <link rel="stylesheet" href="CSS\Home-Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="CSS\Contact-style.css">

    <script src="java script/Sign in and Sign Up.js"></script>

    <!-- Slider Coding start  -->

    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->

    <!-- Slider Coding End  -->

<body>
    <div class="container-fluid" style="border:none ; box-sizing: border-box; text-align: center;">

        <?php include 'components/navbar.php' ?>
        <?php include 'components/searchbar.php' ?>
        <?php include 'components/slider.php' ?>

        <!-- contect us start -->
        <div class="container container_2">
            <div class="row ">
                <div class="col-lg-8 p-4" style="background-color: white;">
                    <h4 style="font-weight: bold;">Send a Message</h4>
                    <div class="row">

                        <div class="col-lg-6">
                            <label for="">First Name :</label><br>
                            <input type="text" name="" id="cfnames" class="form-control" placeholder="Type Here">
                            <label for="" id="cfname_error"></label><br><br>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Last Name :</label><br>
                            <input type="text" name="" id="clnames" class="form-control" placeholder="Type Here">
                            <label for="" id="clname_error"></label><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Email :</label><br>
                            <input type="text" name="" id="cemails" class="form-control" placeholder="abcd321@gmail.com">
                            <label for="" id="cemail_error"></label><br><br>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Mobile :</label><br>
                            <input type="text" name="" id="cMobile_num" class="form-control" placeholder="0300-000000">
                            <label for="" id="cmob_error"></label><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="">Message :</label><br>
                            <textarea name="" id="" rows="5" class="form-control"></textarea><br><br>
                            <input class="btn btn-danger" style="width: 100%;" onclick="cal()" type="submit">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row  ">
                        <div class="col-lg-12 p-3" style="background-color: #ffc107; color: black;">
                            <h4>Contact Info</h4>
                            <div class="row">
                                <div class="col-lg-12 p-2" style="display: flex;">
                                    <div style="background-color: #cea426; width: 30px; height: 30px; border-radius: 50%; margin-right: 3px;">
                                        <i class="fa fa-map-marker icon-size"></i>
                                    </div>
                                    <div>Cannaught Place,New Dhli india</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 p-2" style="display: flex;">
                                    <div style="background-color: #cea426; width: 30px; height: 30px; border-radius: 50%;margin-right: 3px;">
                                        <i class="material-icons icon-size">mail</i>
                                    </div>
                                    <div>Loremipsum@gmail.com</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 p-2" style="display: flex;">
                                    <div style="background-color: #cea426; width: 30px; height: 30px; border-radius: 50%;margin-right: 3px;">
                                        <i class="material-icons icon-size">local_phone</i>
                                    </div>
                                    <div>+92 1234567891</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <i class="fa fa-facebook-square" style="font-size: 25px; padding: 10px 8px; cursor: pointer;"></i>
                                    <i class="fa fa-twitter" style="font-size: 25px; padding: 10px 8px; cursor: pointer;"></i>
                                    <i class="fa fa-linkedin-square" style="font-size: 25px; padding: 10px 8px; cursor: pointer;"></i>
                                    <i class="fa fa-instagram" style="font-size: 25px; padding: 10px 8px; cursor: pointer;"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 p-0">
                            <div id="map">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contect us closs -->

        <?php include 'Components/footer.php' ?>
        <?php include 'Components/sign_up_modal.php' ?>
        <?php include 'Components/sign_in_modal.php' ?>

    </div>

    <script src="bootstrap-5.0.2-dist\js\bootstrap.js"></script>
    <script>
        function initMap() {
            var Aptech = {
                lat: 24.9289577,
                lng: 67.0356264
            };
            var abc = new google.maps.Map(document.getElementById("map"), {
                zoom: 18,
                center: Aptech
            });
            var marker = new google.maps.Marker({
                position: Aptech,
                map: abc
            });

        }
        fnames = document.getElementById('cfnames').value;
        lnames = document.getElementById('clnames').value;
        emails = document.getElementById('cemails').value;
        mobile = document.getElementById('cMobile_num').value;


        name_chk = /^([a-zA-Z])+$/;
        email_chk = /^([a-zA-Z0-9\-\.]{5,20})+\@([a-zA-Z])+\.([a-zA-Z]{2,4})+$/;
        mob_chk = /^([03]{2})+([0-9]{2})+\-([0-9]{7})+$/;


        // First name Event Listner focus and Blur
        document.getElementById("cfnames").addEventListener("blur", function() {
            if (this.value.length > 0) {
                if (name_chk.test(this.value) == true) {
                    document.getElementById("cfname_error").innerHTML = '';
                } else {
                    document.getElementById("cfname_error").innerHTML = 'Only alphabet Allowed';
                    document.getElementById("cfname_error").style.color = "red";
                }
            } else {
                document.getElementById("cfname_error").innerHTML = 'Please Enter Name';
                document.getElementById("cfname_error").style.color = "red";

            }
        });

        //  Last Name Event Listner focus and Blur
        document.getElementById("clnames").addEventListener("blur", function() {
            if (this.value.length > 0) {
                if (name_chk.test(this.value) == true) {
                    document.getElementById("clname_error").innerHTML = '';
                } else {
                    document.getElementById("clname_error").innerHTML = 'Only alphabet Allowed';
                    document.getElementById("clname_error").style.color = "red";
                }
            } else {
                document.getElementById("clname_error").innerHTML = 'Please Enter Name';
                document.getElementById("clname_error").style.color = "red";

            }
        });

        // Email Event Listner focus and Blur
        document.getElementById("cemails").addEventListener("blur", function() {
            if (this.value.length > 0) {
                if (email_chk.test(this.value) == true) {
                    document.getElementById("cemail_error").innerHTML = '';
                } else {
                    document.getElementById("cemail_error").innerHTML = 'Please Enter Valid Email Address';
                    document.getElementById("cemail_error").style.color = "red";
                }
            } else {
                document.getElementById("cemail_error").innerHTML = 'Please Enter Email address';
                document.getElementById("cemail_error").style.color = "red";

            }
        });

        // Mobile Number Event Listner focus and Blur
        document.getElementById("cMobile_num").addEventListener("blur", function() {
            if (this.value.length > 0) {
                if (mob_chk.test(this.value) == true) {
                    document.getElementById("cmob_error").innerHTML = '';
                } else {
                    document.getElementById("cmob_error").innerHTML = 'Please Enter Valid Mobile Num';
                    document.getElementById("cmob_error").style.color = "red";
                }
            } else {
                document.getElementById("cmob_error").innerHTML = 'Please Enter Mobile Number';
                document.getElementById("cmob_error").style.color = "red";

            }
        });



        function cal() {
            fnames = document.getElementById('cfnames').value;
            lnames = document.getElementById('clnames').value;
            emails = document.getElementById('cemails').value;
            mobile = document.getElementById('cMobile_num').value;


            name_chk = /^([a-zA-Z])+$/;
            email_chk = /^([a-zA-Z0-9\-\.]{5,20})+\@([a-zA-Z])+\.([a-zA-Z]{2,4})+$/;
            mob_chk = /^([03]{2})+([0-9]{2})+\-([0-9]{7})+$/;


            //                                       F Name
            if (fnames.length > 0) {
                if (name_chk.test(fnames) == true) {
                    document.getElementById("cfname_error").innerHTML = '';
                } else {
                    document.getElementById("cfname_error").innerHTML = 'Only alphabet Allowed';
                    document.getElementById("cfname_error").style.color = "red";
                }
            } else {
                document.getElementById("cfname_error").innerHTML = 'Please Enter Name';
                document.getElementById("cfname_error").style.color = "red";

            }

            //                                       L Name
            if (lnames.length > 0) {
                if (name_chk.test(lnames) == true) {
                    document.getElementById("clname_error").innerHTML = '';
                } else {
                    document.getElementById("clname_error").innerHTML = 'Only alphabet Allowed';
                    document.getElementById("clname_error").style.color = "red";
                }
            } else {
                document.getElementById("clname_error").innerHTML = 'Please Enter Name';
                document.getElementById("clname_error").style.color = "red";

            }
            //                                       Email
            if (emails.length > 0) {
                if (email_chk.test(emails) == true) {
                    document.getElementById("cemail_error").innerHTML = '';
                } else {
                    document.getElementById("cemail_error").innerHTML = 'Please Enter Valid Email';
                    document.getElementById("cemail_error").style.color = "red";
                }
            } else {
                document.getElementById("cemail_error").innerHTML = 'Please Enter Email';
                document.getElementById("cemail_error").style.color = "red";

            }
            //                                       Mobile
            if (mobile.length > 0) {
                if (mob_chk.test(mobile) == true) {
                    document.getElementById("cmob_error").innerHTML = '';
                } else {
                    document.getElementById("cmob_error").innerHTML = 'Please Check your Number';
                    document.getElementById("cmob_error").style.color = "red";
                }
            } else {
                document.getElementById("cmob_error").innerHTML = 'Please Enter Mobile Number';
                document.getElementById("cmob_error").style.color = "red";

            }

            var fnames_error1 = document.getElementById('cfname_error').innerHTML;
            var lnames_error1 = document.getElementById('clname_error').innerHTML;
            var emails_error1 = document.getElementById('cemail_error').innerHTML;
            var mobile_error1 = document.getElementById('cmob_error').innerHTML;

            if (fnames_error1.length == 0 && lnames_error1.length == 0 && emails_error1.length == 0 && mobile_error1.length == 0) {
                alert("Your information Submitted")
                document.getElementById("cfnames").value = "";
                document.getElementById("clnames").value = "";
                document.getElementById("cemails").value = "";
                document.getElementById("cMobile_num").value = "";
            } else {}
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAg272BuCY-f0VDYyrc9O_1OYHXjDThoSQ
      &callback=initMap"></script>

</body>

</html>