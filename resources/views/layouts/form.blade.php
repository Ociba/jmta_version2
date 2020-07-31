<!-- Validation wizard -->
<div class="row" id="validation">
    <div class="col-12">
        <div class="card wizard-content">
            <div class="card-body">
                <h4 class="card-title">Enrollment Form</h4>
                <h6 class="card-subtitle text-white">Follow the steps</h6>
                <form action="/create-enrollment-information" class="validation-wzard wizard-circle" method="post" enctype="multipart/form-data">
                @csrf
                    <!-- Step 1 -->
                    <h6 class="text-white">Step 1</h6>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wfirstName2"> First Name : <span class="danger">*</span> </label>
                                    <input type="text" class="form-control required" id="wfirstName2" name="first_name"> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wlastName2"> Last Name : <span class="danger">*</span> </label>
                                    <input type="text" class="form-control required" id="wlastName2" name="last_name"> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wphoneNumber2">Gender :</label>
                                    <input type="tel" list= "gender" class="form-control" name="gender" id="wphoneNumber2">
                                    <datalist id="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                    </datalist>
                                     </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wdate2">Date of Birth :</label>
                                    <input type="date" name="date_of_birth" class="form-control" id="wdate2"> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wphoneNumber2">Nationality :</label>
                                    <input type="text" name="nationality" class="form-control" id="wphoneNumber2"> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wphoneNumber2">County :</label>
                                    <input type="tel" name="country" class="form-control" id="wphoneNumber2"> </div>
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
                                    <input type="text" class="custom-select form-control required" id="wlocation2" list="city" name="state">
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
                                    <input type="text" name="city" class="form-control" id="wphoneNumber2"> </div>
                            </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white" for="wphoneNumber2">Phone Number :</label>
                                        <input type="tel" name="phone_number" class="form-control" id="wphoneNumber2"> </div>
                                </div>
                            <div class="col-md-6">
                             <div class="form-group">
                                <label class="text-white" for="wemailAddress2"> Email Address : <span class="danger">*</span> </label>
                                <input type="email" class="form-control required" id="wemailAddress2" name="email"> </div>
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
                                    <input type="text" class="form-control" list="marital" name="marital_status" id="wphoneNumber2"> 
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
                                    <input type="text" name="denomination" class="form-control" id="wphoneNumber2"> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wphoneNumber2">Ministry:</label>
                                    <input type="text" name="ministry" class="form-control" id="wphoneNumber2"> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wphoneNumber2">Local Church :</label>
                                    <input type="text" name="local_church" class="form-control" id="wphoneNumber2"> </div>
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
                                    <input type="text" name="profession" class="form-control" id="wphoneNumber2"> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wphoneNumber2">Occupation :</label>
                                    <input type="text" name="occupation" class="form-control" id="wphoneNumber2"> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wphoneNumber2">Payment Method:</label>
                                    <input type="text"  list="payment" name="payment_method" class="form-control" id="wphoneNumber2">
                                    <datalist id="payment">
                                    <option>Mobile money</option>
                                    <option>Paypal</option>
                                    </datalist>
                                     </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-white" for="wphoneNumber2">Attach Photo :</label>
                                    <input type="file" class="form-control" name="passport_photo" id="wphoneumber2"> </div>
                            </div>
                            <input type="hidden" name="course_id" value="{{request()->route()->id}}">
                        </div>
                    <div clsss="row">
                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
                    
                    </section>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- vertical wizard -->