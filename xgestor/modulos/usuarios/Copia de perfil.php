<div class="col-lg-3 col-md-5">
                        <div class="user-profile-menu">
                            <div class="profile-info">
                                <img src="../assets/img/me.jpg" alt="me">
                                <h3>Bienvenido, <?php echo $_SESSION["Nombre"]." ".$_SESSION["Apellido"];?>!</h3>
                            </div>

                            <div class="user-menu">
                                <h5 class="title mt-0">Main <i class="fas fa-cog"></i></h5>

                                <ul>
                                    <li class="active"><a href="dashboard.html"><i class="fas fa-cogs"></i> Dashboard</a></li>
                                    <li><a href="my-profile.html"><i class="far fa-user"></i> My Profile</a></li>
                                    <li><a href="edit-profile.html"><i class="fas fa-edit"></i> Edit Profile</a></li>
                                    <li><a href="message.html"><i class="fas fa-envelope"></i> Message</a></li>
                                    <li><a href="#"><i class="fas fa-unlock-alt"></i> Change Password</a></li>
                                </ul>

                                <h5 class="title">Listings <i class="far fa-check-circle"></i></h5>

                                <ul>
                                    <li><a href="manage-listing.html"><i class="fas fa-th-list"></i> My Listing</a></li>
                                    <li><a href="reviews.html"><i class="fas fa-comments"></i> Reviews</a></li>
                                    <li><a href="add-listing.html"><i class="fas fa-upload"></i> Submit New Listing</a></li>
                                </ul>

                                <div class="logout-btn">
                                    <a href="#" class="btn btn-primary">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
