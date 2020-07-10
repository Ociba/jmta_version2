<!-- Validation wizard -->
<div class="row" id="validation">
    <div class="col-12">
        <div class="card wizard-content">
            <div class="card-body">
                <h4 class="card-title">Enrollment Form</h4>
                <h6 class="card-subtitle text-white">Follow the steps</h6>
                <form action="/j" class="validation-wizard wizard-circle">
                    <!-- Step 1 -->
                    <h6 class="text-white">Step 1</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wfirstName2"> First Name : <span class="danger">*</span> </label>
                                    <input type="text" class="form-control required" id="wfirstName2" name="firstName"> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wlastName2"> Last Name : <span class="danger">*</span> </label>
                                    <input type="text" class="form-control required" id="wlastName2" name="lastName"> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wphoneNumber2">Gender :</label>
                                    <input type="tel" list= "gender" class="form-control" name="" id="wphoneNumber2">
                                    <datalist id="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                    </datalist>
                                     </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wdate2">Date of Birth :</label>
                                    <input type="date" class="form-control" id="wdate2"> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wphoneNumber2">Nationality :</label>
                                    <input type="tel" class="form-control" id="wphoneNumber2"> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wphoneNumber2">County :</label>
                                    <input type="tel" class="form-control" id="wphoneNumber2"> </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 2 -->
                    <h6 class="text-white">Step 2</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wlocation2">State : <span class="danger">*</span> </label>
                                    <input type="text" class="custom-select form-control required" id="wlocation2" list="city" name="location">
                                    <datalist id="city">
                                        <option value="India">India</option>
                                        <option value="USA">USA</option>
                                        <option value="Dubai">Dubai</option>
                                    </datalist>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wphoneNumber2">City :</label>
                                    <input type="tel" class="form-control" id="wphoneNumber2"> </div>
                            </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white" for="wphoneNumber2">Phone Number :</label>
                                        <input type="tel" class="form-control" id="wphoneNumber2"> </div>
                                </div>
                            <div class="col-md-6">
                             <div class="form-group">
                                <label class="text-white" for="wemailAddress2"> Email Address : <span class="danger">*</span> </label>
                                <input type="email" class="form-control required" id="wemailAddress2" name="emailAddress"> </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 3 -->
                    <h6 class="text-white">Step 3</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wphoneNumber2">Marital Status :</label>
                                    <input type="tel" class="form-control" list="marital" id="wphoneNumber2"> 
                                    <datalist id="marital">
                                    <option>Single</option>
                                    <option>Married</option>
                                    <option>Divorced</option>
                                    </datalist>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wphoneNumber2">Denomination :</label>
                                    <input type="tel" class="form-control" id="wphoneNumber2"> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wphoneNumber2">Ministry:</label>
                                    <input type="tel" class="form-control" id="wphoneNumber2"> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wphoneNumber2">Local Church :</label>
                                    <input type="tel" class="form-control" id="wphoneNumber2"> </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 4 -->
                    <h6 class="text-white">Step 4</h6>
                    <section>
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wphoneNumber2">Profession:</label>
                                    <input type="tel" class="form-control" id="wphoneNumber2"> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wphoneNumber2">Occupation :</label>
                                    <input type="tel" class="form-control" id="wphoneNumber2"> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wphoneNumber2">Payment Method:</label>
                                    <input type="tel"  list="payment" class="form-control" id="wphoneNumber2">
                                    <datalist id="payment">
                                    <option>Mobile money</option>
                                    <option>Paypal</option>
                                    </datalist>
                                     </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wphoneNumber2">Attach Photo :</label>
                                    <input type="file" class="form-control" id="wphoneNumber2"> </div>
                            </div>
                        </div>
                    <div clsss="row">
                    <a href="/get-sub-courses" button class="btn btn-primary">SubCourses</button></a>
                    </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- vertical wizard -->