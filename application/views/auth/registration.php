

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama" name="nama" 
                                        placeholder="Full Name" value="<?= set_value('nama'); ?>">
                                        <?= form_error('nama','<small class="text-danger pl-3">','</small>');?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" 
                                        placeholder="Email Address"><?= set_value('email'); ?>
                                        <?= form_error('email','<small class="text-danger pl-3">','</small>');?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="password2" name="password2" placeholder="password">
                                            <?= form_error('password','<small class="text-danger pl-3">','</small>');?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"
                                            id="password3" name="password3" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark btn-user btn-block">
                                    Register Account
                                </a>
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth');?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    