<!--  Sign up Modal -->
<div class="modal fade"  id="Signup">
    <div class="modal-dialog" >
        <div class="modal-content"
            style="background-color: #c9c9c9; border-radius: 20px; border: 2px solid #ffc108;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"
                    style="text-align: center; width: 100%; font-weight: bold; font-size: 150%;">Create A New
                    Account</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- first name -->
                    <div class="col">
                        <input type="text" placeholder="First name" aria-label="First name" id="fnames"
                            class="form-control Sign_up_Input">
                        <label id="fname_error"></label>
                    </div>
                    <!-- first name -->

                    <!-- Last name -->
                    <div class="col">
                        <input type="text" placeholder="Last name" aria-label="Last name" id="lnames"
                            class="form-control Sign_up_Input">
                        <label id="lname_error"></label>
                    </div>
                    <!-- Last name -->
                </div>

                <!-- email addrass -->
                <div>
                    <input type="text" placeholder="email addrass" id="emails"
                        class="form-control Sign_up_Input"><label id="email_error"></label>
                </div>
                <!-- email addrass -->

                <!-- Password -->
                <input type="password" placeholder="Password" id="pass" class="form-control  Sign_up_Input"><label
                    id="pass_error" class="form-label"></label>
                <!-- Password -->

                <!-- date of barth -->
                <fieldset class="row mb-3">
                    <label for="" class="form-label">Date of birth</label>
                    <div class="col-sm-4 col-lg-4 pb-2 ">
                        <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                        <select class="form-select Sign_up_Input" id="specificSizeSelect">

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                    </div>
                    <div class="col-sm-4 col-lg-4 pb-2">
                        <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                        <select class="form-select Sign_up_Input" id="specificSizeSelect">
                            <option value="Jan">Jan</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Apr">Apr</option>
                            <option value="May">May</option>
                            <option value="Jun">Jun</option>
                            <option value="Jul">Jul</option>
                            <option value="Aug">Aug</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Oct</option>
                            <option value="Nov">Nov</option>
                            <option value="Dec">Dec</option>
                        </select>
                    </div>
                    <div class="col-sm-4 col-lg-4 pb-2">
                        <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                        <select class="form-select Sign_up_Input" id="specificSizeSelect">
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <br><br>
                    <div>
                        <label for="" class="form-label">Gender</label>
                    </div>
                    <div class="col-sm-12" style="display: flex; justify-content: space-between;">
                        <div class="form-check">
                            <input class="form-check-input " type="radio" name="gridRadios" id="gridRadios1"
                                value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input " type="radio" name="gridRadios" id="gridRadios2"
                                value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                Female
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input " type="radio" name="gridRadios" id="gridRadios2"
                                value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                Custom
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary sign-btn" style="background-color: #6c757d;    border-color: #6c757d;
      " data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn sign-btn"  id="Sign_up_modal" onclick="signup()">Sign Up</button>
                    </div>
            </div>
        </div>
    </div>
</div>
