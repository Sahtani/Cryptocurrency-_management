<?php require APPROOT . '/views/inc/headerB.php'; ?>

<section class="back">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-flex p-0 radiu rounded-3">
                            <img src="<?php echo URLROOT; ?>/img/nex.png" alt="login form" class="img-fluid"
                                style="border-radius: 1rem 0px 0px 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-2 p-lg-4 text-black">
                                <form method="post" action="<?php echo URLROOT; ?>/users/register">
                                    <h5 class="fw-semibold mb-3 mt-2 pb-1" style="letter-spacing: 1px;">Create an account
                                    </h5>

                                    <div class="form-floating mb-1">
                                        <input type="text" name="prenom" class="form-control" id="floatingInput"
                                            value="<?php echo isset($data['prenom']) ? $data['prenom'] : ''; ?>"
                                            placeholder="name">
                                        <label class="text-secondary" for="floatingInput">First name</label>
                                        <span class="ms-2 text-danger "><?php echo isset($data['prenom_err']) ? $data['prenom_err'] : ''; ?></span>
                                    </div>

                                    <div class="form-floating mb-1">
                                        <input type="text" name="nom" class="form-control" id="floatingInput"
                                            value="<?php echo isset($data['nom']) ? $data['nom'] : ''; ?>"
                                            placeholder="last">
                                        <label class="text-secondary" for="floatingInput">Last Name</label>
                                        <span class="ms-2 text-danger "><?php echo isset($data['name_err']) ? $data['name_err'] : ''; ?></span>
                                    </div>

                                    <div class="form-floating mb-1">
                                        <input type="date" name="date" class="form-control" id="floatingInput"
                                            value="<?php echo isset($data['date']) ? $data['date'] : ''; ?>"
                                            placeholder="last">
                                        <label class="text-secondary" for="floatingInput">Date of birth</label>
                                        <span class="ms-2 text-danger "><?php echo isset($data['date_err']) ? $data['date_err'] : ''; ?></span>
                                    </div>

                                    <div class="form-floating mb-1">
                                        <input type="email" name="email" class="form-control" id="floatingInput"
                                            value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>"
                                            placeholder="name@example.com">
                                        <label class="text-secondary" for="floatingInput">Email </label>
                                        <span class="ms-2 text-danger "><?php echo isset($data['email_err']) ? $data['email_err'] : ''; ?></span>
                                    </div>

                                    <div class="form-floating mb-1">
                                        <input type="password" name="password" class="form-control"
                                            id="floatingPassword" placeholder="Password">
                                        <label class="text-secondary" for="floatingPassword">Password</label>
                                        <span class="ms-2 text-danger "><?php echo isset($data['password_err']) ? $data['password_err'] : ''; ?></span>
                                    </div>

                                    <div class="pt-1 mb-1 d-flex justify-content-end">
                                        <button class="btn orange text-white btn-lg btn-block" type="submit"
                                            name="submit">Register</button>
                                    </div>

                                    <p class="mb-2 pb-lg-2" style="color: #000000;">Do you already have an account?<a
                                            href="<?php echo URLROOT; ?>/users/index"
                                            style="color: #DB2777;"> Log in here</a></p>
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
