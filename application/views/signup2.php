<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <?php 
                if ($this->session->flashdata('error')) {
                    echo "<div class='message'>";
                    echo $this->session->flashdata('error');
                    echo "</div>";
                }
            ?>
                <div class="form-group" style="padding-bottom: 2em">
                    <img src="../images/school.png" alt="monitor" style="display:block; margin: auto; width:200px;"><br>
                    <h6 style="text-align: center; font-family: Oswald; font-size: 15px; color: #2699FB">Already have an account? Log In</h6>
                </div>
        </div>
        <div class="col-md-6">
            <form action="<?php echo site_url();?>welcome/sign_up" method="post" oninput = 'cpassword.setCustomValidity(cpassword.value != password.value ? "Password do not match." : "")'>
                <div class="form-group">
                    <h6 style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB">USERNAME</h6>
                    <input type="text" name="username" id="user" class="form-control" placeholder="enter username" style="width: 70%" required>
                </div>
                <div class="form-group">
                    <h6 style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB">EMAIL</h6>
                    <input type="email" name="email" id="email" class="form-control" placeholder="enter email address" style="width: 70%" required>
                </div>
                <div class="form-group">
                    <h6 style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB">PASSWORD</h6>
                    <input type="password" name="password" id="pass" class="form-control" placeholder="enter password" style="width: 70%" data-minlength="8" required>
                </div>
                <div class="form-group">
                    <h6 style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB">CONFIRM PASSWORD</h6>
                    <input type="password" name="cpassword" id="cpass" class="form-control" placeholder="confirm password" style="width: 70%">
                </div>

                <div class="form-group centered">
                    <input type="submit" value="Sign Up" class="btn btn-primary" style="margin-left: 5em; font-family: Arial; font-weight: bold; font-size: 18px; padding: 10px 25px;">
                </div>
            </form>
        </div>
    </div>
</div>