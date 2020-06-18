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
                    <img src="../images/computer.png" alt="monitor" style="display:block; margin: auto; width:200px;"><br>
                    <h6 style="text-align: center; font-family: Oswald; font-size: 15px; color: #2699FB">Create account</h6>
                </div>
                <div class="form-group" style="padding-bottom: 1.7em">
                    <img src="../images/test.png" alt="paper" style="display:block; margin: auto; width:200px;"><br>
                    <h6 style="text-align: center; font-family: Oswald; font-size: 15px; color: #2699FB">Fill up needed info</h6>
                </div>
                <div class="form-group">
                    <img src="../images/books.png" alt="paper" style="display:block; margin: auto; width:200px;"><br>
                    <h6 style="text-align: center; font-family: Oswald; font-size: 15px; color: #2699FB">Enroll on your desired strand</h6>
                </div>
        </div>
        <div class="col-md-6">
            <form action="<?php echo site_url();?>welcome/register" method="post">
                <div class="form-group">
                    <h6 style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB">FIRSTNAME</h6>
                    <input type="text" name="fname" id="fname" class="form-control" style="width: 70%">
                </div>
                <div class="form-group">
                    <h6 style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB">MIDDLENAME</h6>
                    <input type="text" name="mname" id="mname" class="form-control" style="width: 70%">
                </div>
                <div class="form-group">
                    <h6 style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB">LASTNAME</h6>
                    <input type="text" name="lname" id="lname" class="form-control" style="width: 70%">
                </div>
                <div class="form-group">
                    <h6 style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB">BIRTHDATE</h6>
                    <input type="date" name="bday" id="bday" class="form-control" style="width: 70%">
                </div>
                <div class="form-group">
                    <h6 style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB">SEX</h6>
                    <label color="#2699FB" style="margin-left: 3em"><input type="radio" name="sex" id="sex" value="Male" class="form-check-input">Male</label>
                    <label color="#2699FB" style="margin-left: 3em"><input type="radio" name="sex" id="sex" value="Female" class="form-check-input">Female</label>
                </div>
                <div class="form-group">
                    <h6 style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB">HOME ADDRESS</h6>
                    <input type="text" name="haddress" id="haddress" class="form-control" style="width: 70%">
                </div>
                <div class="form-group">
                    <h6 style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB">PARENT'S/GUARDIAN'S NAME</h6>
                    <input type="text" name="parent" id="parent" class="form-control" style="width: 70%">
                </div>
                <div class="form-group">
                    <h6 style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB">OCCUPATION</h6>
                    <input type="text" name="occupation" id="occupation" class="form-control" style="width: 70%">
                </div>
                <div class="form-group">
                    <h6 style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB">CONTACT NO.</h6>
                    <input type="tel" id="phone" name="phone" pattern="((^(\+)(\d){12}$)|(^\d{11}$))" class="form-control" style="width: 70%">
                </div>
                <div class="form-group">
                    <h6 style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB">SCHOOL LAST ATTENDED</h6>
                    <input type="text" name="school" id="school" class="form-control" style="width: 70%">
                </div>
                <div class="form-group">
                    <h6 style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB">ADDRESS</h6>
                    <input type="text" name="schoAdd" id="schoAdd" class="form-control" style="width: 70%">
                </div>
                <div class="form-group centered">
                    <input type="submit" value="Sign Up" class="btn btn-primary" style="margin-left: 5em; font-family: Arial; font-weight: bold; font-size: 18px; padding: 10px 25px;">
                </div>
            </form>
        </div>
    </div>
</div>