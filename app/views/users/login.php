<?php 
    require APPROOT . '/views/includes/head.php';
    require APPROOT . '/views/includes/navigation.php';
?>  
 
<section id="contact" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                    <div class="card p-4">
                        <div class="card-body">
                        <?php flash('register_success'); ?>
                            <h3 class="text-center">Login Form</h3>
                            <hr>
                            <form action="<?php echo URLROOT; ?>/users/login" method="post">
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>" placeholder="Email">
                                            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>" placeholder="Password">
                                            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                                            <p class="text-center"> <a href="<?php echo URLROOT; ?>/users/resetpassword">Forgot Password?</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Login" class="btn btn-primary btn-block">
                                        </div>
                                        <div class="form-group">
                                        <p class="text-center">Not registered yet? <a href="<?php echo URLROOT; ?>/users/register">Create an account!</a></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>