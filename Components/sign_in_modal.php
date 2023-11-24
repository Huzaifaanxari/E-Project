<!-- Sign In Modal  -->
<div class="modal fade" id="Signin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"
            style="background-color: #c9c9c9; border-radius: 20px; border: 2px solid #ffc108;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"
                    style="text-align: center; width: 100%; font-weight: bold; font-size: 150%;">Log into Account
                </h5>
            </div>
            <div class="modal-body">

                <!-- email addrass Start-->
                <div>
                    <input type="text" placeholder="email addrass" id="emails2" class="form-control Sign_up_Input">
                    <label id="email_error2"></label>
                </div>
                <!-- email addrass End-->

                <!-- Password Start -->
                <input type="password" placeholder="Password" id="pass2" class="form-control Sign_up_Input">
                <label id="pass_error2" class="form-label"></label><br>
                <!-- Password End-->
                <button data-bs-toggle="modal" data-bs-target="#Signup" data-bs-dismiss="modal"
                    style="border:none; background : none; color : blue; margin : 20px 0"> Create a new Account
                    !!</button>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary sign-btn" style="background-color: #6c757d;    border-color: #6c757d;
      " data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn sign-btn" onclick="signin()">Sign in</button>
                </div>
            </div>
        </div>
    </div>
</div>
