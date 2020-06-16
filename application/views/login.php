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
            <form action="<?php echo site_url();?>welcome/login" method="post">
                <div class="form-group">
                    <label style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB" for="username">USERNAME</label><br>
                    <input type="text" class="form-control col-5" name="username" id="username">
                </div>
                <div class="form-group">
                    <label style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB" for="password">PASSWORD</label><br>
                    <input type="password" class="form-control col-5" name="password" id="password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="remember" id="remember">
                    <label class="form-check-label" for="remember">Remember Me?</label>
                </div>
                <div class="form-group">
                    <br>
                    <input type="submit" value="Log In" class="btn btn-primary" style="margin-left: 5em; font-family: Arial; font-weight: bold; font-size: 18px; padding: 10px 25px;">
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <img src="/images/student.png" alt="student" style="display:block; margin: auto; width:250px;">
        </div>
    </div>
</div>