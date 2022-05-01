<div class="dropdown d-inline-block user-dropdown">
    <button type="button" class="btn dark-color-1 header-item waves-effect"
            id="page-header-user-dropdown"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="rounded-circle header-profile-user" src="{{asset('assets/images/users/avatar-1.png')}}"
             alt="Header Avatar">
        <span class="d-none d-xl-inline-block ml-1">John</span>
        <i class="mdi mdi-chevron-down"></i>
        <!-- d-none d-lg-none d-xl-none" -->

    </button>
    <div class="dropdown-menu dropdown-menu-right user-downdown-custom">
        <!-- d-none d-lg-none d-xl-none -->
        <!-- item-->
        <div class="dropdown-section-wrap">
            <a class="dropdown-item user-profile-menu" href="#">Profile</a>
            <a class="dropdown-item user-activities-menu" href="#">Activities</a>
            <a class="dropdown-item d-block user-management-menu" href="#">Management</a>
            <a class="dropdown-item d-block user-Wallet-menu" href="#">Wallet</a>

            <div class="dropdown-divider"></div>

            <div class="change-role-panel">
                <h5>Change Role</h5>
                <div class="custom-control custom-radio mb-2">
                    <input type="radio" id="customRadio1" name="individual"
                           class="custom-control-input individual" checked>
                    <label class="custom-control-label" for="customRadio1">Individual</label>
                </div>
                <div class="individual-element">
                    <select class="form-control mb-4" id="Individual">
                        <option>Select Org.</option>
                        <option>Organization</option>
                        <option>Organization</option>
                    </select>
                    <button type="button" class="btn btn-light waves-effect compare"></button>
                </div>


                <div class="custom-control custom-radio custom-control-left mt-3 mb-2">
                    <input type="radio" id="customRadio2" name="organisation"
                           class="custom-control-input organisation">
                    <label class="custom-control-label" for="customRadio2">Organisation</label>
                </div>
                <div class="organisation-element">
                    <select class="form-control" id="Organisation">
                        <option>Select Org.</option>
                        <option>Organization</option>
                        <option>Organization</option>
                    </select>
                    <button type="button" class="btn btn-light waves-effect compare"></button>
                </div>
            </div>

            <div class="dropdown-divider"></div>
            <div class="row user-level">
                <div class="col-8">
                    <h5>Level 1</h5>
                </div>
                <div class="col-4 text-right">
                    <div><span class="count">10 anA</span></div>
                    <div><span class="count">200 KmA</span></div>
                </div>
            </div>
            <div class="">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                         role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                         style="width: 75%"></div>
                </div>
            </div>
            <div class="dropdown-divider"></div>

            <div id="multi-item-example" class="carousel slide carousel-multi-item sdgs-section"
                 data-ride="carousel" data-interval="false">

                <div class="row">
                    <div class="col-8">
                        <h5>Selected SDGS</h5>
                    </div>

                    <div class="col-4 text-right">
                        <!--Controls-->
                        <!-- <div class="controls-top">
                             <a class="btn-floating line" href="#multi-item-example" data-slide="prev"><i class="ri-arrow-left-s-fill"></i></a>

                            <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="ri-arrow-right-s-fill"></i></a>
                        </div> -->
                        <!--/.Controls-->
                    </div>
                </div>


                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item active">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="{{asset('assets/images/sdgicons/TheGlobalGoals_Icons_Color_Goal_1.svg')}}"
                                         alt="Card image cap">

                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="{{asset('assets/images/sdgicons/TheGlobalGoals_Icons_Color_Goal_2.svg')}}"
                                         alt="Card image cap">


                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="{{asset('assets/images/sdgicons/TheGlobalGoals_Icons_Color_Goal_7.svg')}}"
                                         alt="Card image cap">

                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="{{asset('assets/images/img-industry-innovation.svg')}}"
                                         alt="Card image cap">
                                    <p>Industry, Innovations & Infrastructure</p>
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="{{asset('assets/images/sustainable-cities.svg')}}"
                                         alt="Card image cap">
                                    <p>Sustainable Cities & Communities</p>

                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                         src="{{asset('assets/images/img-responsible-production.svg')}}"
                                         alt="Card image cap">
                                    <p>Responsible Production & Consumption</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/.Second slide-->


                </div>
                <!--/.Slides-->

            </div>
            <!--/.Carousel Wrapper-->
            <div class="dropdown-divider"></div>

            <a class="dropdown-item user-settings-menu" href="#">Settings</a>

        </div>
        <div class="dropdown-divider"></div>

        <div class="user-logout">
            <a class="dropdown-item text-danger" href="#"><i
                    class="ri-shut-down-line align-middle mr-1 text-danger"></i>Logout</a>
        </div>
    </div>
</div>
