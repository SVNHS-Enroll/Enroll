<div class="container">
    <div class="row">
        <div class="col-xs-12 mt-5"></div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="<?php echo site_url();?>student/application" method="post">
                <div class="form-group">
                    <h6 style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB">LRN</h6>
                    <input type="text" name="appli_LRN" id="appli_LRN" class="form-control" style="width: 50%">
                </div>
                <div class="form-group">
                    <h6 style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB">YEAR LEVEL</h6>
                    <div class="input-group mb-3" style="width: 50%">
                        <select class="custom-select" id="appli_yearlevel" name="appli_yearlevel">
                            <option value="Grade 11">Grade 11</option>
                            <option value="Grade 12">Grade 12</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <h6 style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB">SELECT STRAND</h6>
                    <div class="input-group mb-3" style="width: 50%">
                        <select class="custom-select" id="appli_strand" name="appli_strand">
                            <?php 
                                foreach ($strands as $row) {
                                    echo '<option value="'.$row->strand_name.'">'.$row->strand_name.'</option>';
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <h6 style="font-family: GothicBold; font-size: 15px; font-weight: bolder; color: #2699FB">STATUS</h6>
                    <label color="#2699FB" style="margin-left: 3em"><input type="radio" name="estatus" id="estatus" value="New" class="form-check-input">New</label>
                    <label color="#2699FB" style="margin-left: 3em"><input type="radio" name="estatus" id="estatus" value="Old" class="form-check-input">Old</label>
                    <label color="#2699FB" style="margin-left: 3em"><input type="radio" name="estatus" id="estatus" value="Tranferee" class="form-check-input">Transferee</label>
                </div>
                <div class="form-group centered">
                    <input type="submit" value="Enroll" class="btn btn-primary" style="margin-left: 5em; font-family: Arial; font-weight: bold; font-size: 18px; padding: 10px 25px;">
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <img src="/images/books.png" alt="student" style="display:block; margin: auto; width:250px;">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 mb-5"></div>
    </div>
</div>