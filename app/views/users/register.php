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
                            <h3 class="text-center">Registration Form</h3>
                            <hr>
                            <form action="<?php echo URLROOT; ?>/users/register" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>" placeholder="Username" >
                                            <span class="invalid-feedback"><?php echo $data['name_err']?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>" placeholder="Email" >
                                            <span class="invalid-feedback"><?php echo $data['email_err']?></span>
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>" placeholder="Password">
                                            <span class="invalid-feedback"><?php echo $data['password_err']?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="password" name="confirm_password" class="form-control <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>" placeholder="Confirm password">
                                            <span class="invalid-feedback"><?php echo $data['confirm_password_err']?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Register" class="btn btn-primary btn-block">
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

<?php 
    require APPROOT . '/views/includes/footer.php';
?>