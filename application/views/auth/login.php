<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->

        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Apotek KS</h3>
                            </a>

                        </div>
                        <?= $this->session->flashdata('message');?>
                        <form class="user" action="<?= base_url('auth/cek_login'); ?>" method="post">
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="email" placeholder="name">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <!-- <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> -->
                                <!-- <a href="">Forgot Password</a> -->
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                            <p class="text-center mb-0">Don't have an Account? <a
                                    href="<?= base_url('auth/registrasi') ?>">Registrasi</a></p>
                    </div>
                </div>
            </div>
        </div>