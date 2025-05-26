<x-app-layout>
    <div class="container-fluid">
        <div class="row">
           <div class="col-lg-12">
              <div class="card">
                 <div class="card-body p-0">
                    <div class="iq-edit-list usr-edit">
                       <ul class="iq-edit-profile d-flex nav nav-tabs mb-0">
                          <li class="col-md-3 p-0">
                             <a class="nav-link active" data-bs-toggle="pill" href="#personal-information">
                                Personal Information
                             </a>
                          </li>
                          <li class="col-md-3 p-0">
                             <a class="nav-link" data-bs-toggle="pill" href="#chang-pwd">
                                Change Password
                             </a>
                          </li>
                          <li class="col-md-3 p-0">
                             <a class="nav-link" data-bs-toggle="pill" href="#emailandsms">
                                Email and SMS
                             </a>
                          </li>
                          <li class="col-md-3 p-0">
                             <a class="nav-link" data-bs-toggle="pill" href="#manage-contact">
                                Manage Contact
                             </a>
                          </li>
                       </ul>
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-lg-12">
              <div class="iq-edit-list-data">
                 <div class="tab-content">
                    <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                       <div class="card">
                          <div class="card-header d-flex justify-content-between">
                             <div class="header-title">
                                <h4 class="card-title">Personal Information</h4>
                             </div>
                          </div>
                          <div class="card-body">
                             <form>
                                <div class="form-group row align-items-center">
                                   <div class="col-md-12">
                                      <div class="profile-img-edit">
                                         <div class="crm-profile-img-edit">
                                            <img class="crm-profile-pic rounded-circle avatar-100"
                                               src="{{asset('images/user/1.jpg')}}" alt="profile-pic">
                                            <div class="crm-p-image bg-primary">
                                               <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                                                  viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                     d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                               </svg>
                                               <input class="file-upload" type="file" accept="image/*">
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class=" row align-items-center">
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="fname">First Name:</label>
                                      <input type="text" class="form-control" id="fname" value="Barry">
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="lname">Last Name:</label>
                                      <input type="text" class="form-control" id="lname" value="Tech">
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="uname">User Name:</label>
                                      <input type="text" class="form-control" id="uname" value="Barry@01">
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="cname">City:</label>
                                      <input type="text" class="form-control" id="cname" value="Atlanta">
                                   </div>
                                   <div class="col-sm-6">
                                      <label class="form-label" for="gender">Gender:</label><br>
                                      <div class="form-check form-check-inline">
                                         <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios1" value="option1" checked>
                                         <label class="form-check-label" for="exampleRadios1">
                                            Male
                                         </label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                         <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadios2" value="option1">
                                         <label class="form-check-label" for="exampleRadios2">
                                            FeMale
                                         </label>
                                      </div>
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label" for="dob">Date Of Birth:</label>
                                      <input class="form-control" id="dob" value="1984-01-24">
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label">Marital Status:</label>
                                      <select class="form-select" id="exampleFormControlSelect1">
                                         <option selected="">Single</option>
                                         <option>Married</option>
                                         <option>Widowed</option>
                                         <option>Divorced</option>
                                         <option>Separated </option>
                                      </select>
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label">Age:</label>
                                      <select class="form-select" id="exampleFormControlSelect2">
                                         <option>12-18</option>
                                         <option>19-32</option>
                                         <option selected="">33-45</option>
                                         <option>46-62</option>
                                         <option>63 > </option>
                                      </select>
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label">Country:</label>
                                      <select class="form-select" id="exampleFormControlSelect3">
                                         <option>Caneda</option>
                                         <option>Noida</option>
                                         <option selected="">USA</option>
                                         <option>India</option>
                                         <option>Africa</option>
                                      </select>
                                   </div>
                                   <div class="form-group col-sm-6">
                                      <label class="form-label">State:</label>
                                      <select class="form-select" id="exampleFormControlSelect4">
                                         <option>California</option>
                                         <option>Florida</option>
                                         <option selected="">Georgia</option>
                                         <option>Connecticut</option>
                                         <option>Louisiana</option>
                                      </select>
                                   </div>
                                   <div class="form-group col-sm-12">
                                      <label class="form-label">Address:</label>
                                      <textarea class="form-control" name="address" rows="5" style="line-height: 22px;">37 Cardinal Lane
Petersburg, VA 23803
United States of America
Zip Code: 85001</textarea>
                                   </div>
                                </div>
                                <button type="reset" class="btn btn-outline-primary me-2">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                             </form>
                          </div>
                       </div>
                    </div>
                    <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                       <div class="card">
                          <div class="card-header d-flex justify-content-between">
                             <div class="header-title">
                                <h4 class="card-title">Change Password</h4>
                             </div>
                          </div>
                          <div class="card-body">
                             <form>
                                <div class="form-group">
                                   <label class="form-label" for="cpass">Current Password:</label>
                                   <a href="{{route('recovers')}}" class="float-end">Forgot Password</a>
                                   <input type="Password" class="form-control" id="cpass" value="">
                                </div>
                                <div class="form-group">
                                   <label class="form-label" for="npass">New Password:</label>
                                   <input type="Password" class="form-control" id="npass" value="">
                                </div>
                                <div class="form-group">
                                   <label class="form-label" for="vpass">Verify Password:</label>
                                   <input type="Password" class="form-control" id="vpass" value="">
                                </div>
                                <button type="reset" class="btn btn-outline-primary me-2">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                             </form>
                          </div>
                       </div>
                    </div>
                    <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                       <div class="card">
                          <div class="card-header d-flex justify-content-between">
                             <div class="header-title">
                                <h4 class="card-title">Email and SMS</h4>
                             </div>
                          </div>
                          <div class="card-body">
                             <form>
                                <div class="form-group row align-items-center">
                                   <label class="col-md-3 form-label" for="emailnotification">Email Notification:</label>
                                   <div class="col-md-9 ">
                                      <div class="form-check form-check-inline form-switch">
                                         <input class="form-check-input" type="checkbox" role="switch" id="inlineCheckbox1"
                                            value="option1" checked>
                                      </div>
                                   </div>
                                </div>
                                <div class="form-group row align-items-center">
                                   <label class="col-md-3 form-label" for="smsnotification">SMS Notification:</label>
                                   <div class="col-md-9 ">
                                      <div class="form-check form-check-inline form-switch">
                                         <input class="form-check-input" type="checkbox" role="switch" id="inlineCheckbox2"
                                            value="option1" checked>
                                      </div>
                                   </div>
                                </div>
                                <div class="form-group row align-items-center">
                                   <label class="col-md-3" for="npass">When To Email</label>
                                   <div class="col-md-9">
                                      <div class="form-check">
                                         <input class="form-check-input" type="checkbox" value="" id="defaultCheck11">
                                         <label class="form-check-label" for="defaultCheck11">
                                            You have new notifications.
                                         </label>
                                      </div>
                                      <div class="form-check">
                                         <input class="form-check-input" type="checkbox" value="" id="defaultCheck12">
                                         <label class="form-check-label" for="defaultCheck12">
                                            You're sent a direct message
                                         </label>
                                      </div>
                                      <div class="form-check">
                                         <input class="form-check-input" type="checkbox" value="" id="defaultCheck13">
                                         <label class="form-check-label" for="defaultCheck13">
                                            Someone adds you as a connection
                                         </label>
                                      </div>
                                   </div>
                                </div>
                                <div class="form-group row align-items-center">
                                   <label class="col-md-3" for="npass">When To Escalate Emails</label>
                                   <div class="col-md-9">
                                      <div class="form-check">
                                         <input class="form-check-input" type="checkbox" value="" id="defaultCheck14">
                                         <label class="form-check-label" for="defaultCheck14">
                                            Upon new order.
                                         </label>
                                      </div>
                                      <div class="form-check">
                                         <input class="form-check-input" type="checkbox" value="" id="defaultCheck15">
                                         <label class="form-check-label" for="defaultCheck15">
                                            New membership approval
                                         </label>
                                      </div>
                                      <div class="form-check">
                                         <input class="form-check-input" type="checkbox" value="" id="defaultCheck16">
                                         <label class="form-check-label" for="defaultCheck16">
                                            Member registration
                                         </label>
                                      </div>
                                   </div>
                                </div>
                                <button type="reset" class="btn btn-outline-primary me-2">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                             </form>
                          </div>
                       </div>
                    </div>
                    <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                       <div class="card">
                          <div class="card-header d-flex justify-content-between">
                             <div class="header-title">
                                <h4 class="card-title">Manage Contact</h4>
                             </div>
                          </div>
                          <div class="card-body">
                             <form>
                                <div class="form-group">
                                   <label class="form-label" for="cno">Contact Number:</label>
                                   <input type="text" class="form-control" id="cno" value="001 2536 123 458">
                                </div>
                                <div class="form-group">
                                   <label class="form-label" for="email">Email:</label>
                                   <input type="text" class="form-control" id="email" value="Barryjone@demo.com">
                                </div>
                                <div class="form-group">
                                   <label class="form-label" for="url">Url:</label>
                                   <input type="text" class="form-control" id="url" value="https://getbootstrap.com">
                                </div>
                                <button type="reset" class="btn btn-outline-primary me-2">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                             </form>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
</x-app-layout>
