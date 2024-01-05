<?php require APPROOT . '/views/inc/headerB.php'; ?>
<section class="vh-100 back">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-flex align-items-center">
                                <img src="<?php echo URLROOT; ?>/img/nex.png" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-4 text-black">
                                    <div class="container">
                                        <div class="mx-auto my-5" style="max-width: 30rem">
                                            <div class="card">
                                                <div class="card-body">
                                                    <blockquote class="blockquote blockquote-custom bg-white px-3 pt-4">
                                                        <div class="blockquote-custom-icon orange shadow-1-strong">
                                                            <img class="w-50" src="<?php echo URLROOT; ?>/Img/Done.png" alt="">
                                                        </div>
                                                        <h3>Thank you for your registration!</h3>
                                                        <p class="mb-0 mt-2 font-italic">
                                                        Your account has been successfully created. You can now log in.
                                                        </p>
                                                        <a href="<?php echo URLROOT; ?>/users/login" style="color: #DB2777;">Click here to Log in</a>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require APPROOT . '/views/inc/footerB.php'; ?>