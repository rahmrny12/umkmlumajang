<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>

                                    <form class="user" method="post" action="<?= base_url('auth/login'); ?>">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="email" name="email"
                                                placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>')?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password..." value="<?= set_value('password'); ?>">
                                                <?= form_error('Password', '<small class="text-danger pl-3">', '</small>')?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                        <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url();?>auth/registration">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


        <!-- Start login section  -->
        <!-- <div class="login__section section--padding">
            <div class="content-login">
                <form action="#">
                    <div class="login__section--inner">
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <div class="account__login">
                                    <div class="account__login--header">
                                        <h2 class="account__login--header__title  mb-15">Login</h2>
                                        <p class="account__login--header__desc">Login if you area a returning customer.</p>
                                    </div>
                                    <div class="account__login--inner">
                                        <input class="account__login--input" name="email" id="email" placeholder="Email Addres" type="email">
                                        <input class="account__login--input" id="password" name="password" placeholder="Password" type="password">
                                        <div class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                            <button class="account__login--forgot" type="submit">Forgot Your Password?</button>
                                        </div>
                                        <button class="account__login--btn primary__btn" type="submit">Login</button>
                                        <div class="account__login--divide">
                                            <span class="account__login--divide__text">OR</span>
                                        </div>
                                        <div class="account__social d-flex justify-content-center mb-15">
                                        </div>
                                        <p class="account__login--signup__text">Don,t Have an Account? <a href="<?= base_url(); ?>auth/registration">Registration, Now!!</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>     
        </div> -->
        <!-- End login section  -->

   