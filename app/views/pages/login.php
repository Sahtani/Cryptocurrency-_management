<?php require APPROOT . '/views/inc/headerB.php'; ?>
<section class="vh-100 back" >
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100 ">
                <div class="col col-xl-10 ">
                    <div class="card " style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-flex p-0 radiu rounded-3">
                                <img src="<?php echo URLROOT; ?>/img/nex.png" alt="login form" class="img-fluid"  style="border-radius: 1rem 0px 0px 1rem;"/>
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-2 p-lg-5 text-black">

                                    <form method="post" action="<?php echo URLROOT; ?>/users/index">

                                        <h5 class="fw-semibold mb-3 pb-3" style="letter-spacing: 1px;">Log in to your account</h5>

                                        <div class="form-floating mb-4">
                                            <input type="email" class="form-control" name="email" id="floatingInput" value="<?php echo $data['email']; ?>"
                                                placeholder="name@example.com">
                                            <label for="floatingInput" class="text-secondary">Email </label>
                                            <span class="ms-2 text-danger "><?php echo $data['email_err']; ?></span>
                                        </div>
                                        <div class="form-floating mb-4 ">
                                            <input type="password" class="form-control" name="password"
                                                id="floatingPassword" placeholder="Password">
                                            <label for="floatingPassword" class="text-secondary">Password</label>
                                            <span class=" ms-2 text-danger "><?php echo $data['password_err']; ?></span>
                                        </div>

                                        <div class="pt-1 mb-4 d-flex justify-content-end">
                                            <button class="btn orange text-white btn-lg btn-block" type="submit" 
                                                name="submit">Connexion</button>
                                        </div>

                                        <p class=" mb-5 pb-lg-2" style="color: #000000;">Don't have an account? <a
                                                href="<?php echo URLROOT; ?>/users/register" style="color: #DB2777;">Sign up here</a>
                                        </p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require APPROOT . '/views/inc/footerB.php'; ?>