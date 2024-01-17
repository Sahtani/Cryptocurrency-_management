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

                                    <form method="post" action="<?php echo URLROOT; ?>/users/verif">

                                        <h5 class="fw-semibold mb-5 pb-3 text-center" style="letter-spacing: 1px;">Enter the Verification Code</h5>

                                        <div class="form-floating mb-3 mt-4">
                                            <input type="text" class="form-control" name="verif" id="floatingInput" value="<?php echo $data['verif']; ?>"
                                                placeholder="name@example.com">
                                            <label for="floatingInput" class="text-secondary">Verification code</label>
                                            <span class="ms-2 text-danger "><?php echo $data['verif_err']; ?></span>
                                        </div>
                                       
                                        <div class="pt-1  d-flex justify-content-end">
                                            <button class="btn orange text-white btn-lg btn-block" type="submit" 
                                                name="submit">Submit</button>
                                        </div>

                                       
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