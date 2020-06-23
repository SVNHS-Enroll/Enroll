<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 mb-5">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Welcome, <?php echo $student['stud_firstname'];?>!</h5>
                    <h6 class="card-subtitle mb-2 text-muted">You are currently <?php echo "<span style=\"color:red\">". strtolower($student['stud_status']). "</span>";?>.</h6>
                    <p class="card-text"></p>
                    <a href="<?=site_url('student/application')?>" class="card-link">Enroll Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="/images/studying.png" alt="student" style="display:block; margin: auto; width:250px;">
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-5">
            <?php 
                if ($this->session->flashdata('message')){
                    echo "<div class='message'>".$this->session->flashdata('message')."</div>";
                }
                if (count($applications)) {
                    echo "<table border='1' cellspacing='0' cellpadding='3' width='400' > \n";
                    echo "<tr valign='top'> \n";
                    echo " <th> ID </th> \n <th> LRN </th> <th> Year Level </th> <th> Date </th> <th> Status </th> <th> Actions </th> \n";
                    echo " </tr> \n";
                    foreach ($applications as $key => $list) {
                        echo " <tr valign='top'> \n";
                        echo " <td> ".$list['appli_ID']." </td > \n";
                        echo " <td> ".$list['appli_LRN']." </td > \n";
                        echo " <td> ".$list['appli_yearlevel']." </td> \n";
                        echo " <td> ".$list['appli_date']." </td > \n";
                        echo " <td align='center'> ".$list['appli_status']." </td> \n";
                        echo " <td align='center'> ";
                        echo anchor('admin/admins/edit/'.$list['appli_ID'],'edit');
                        echo " | ";
                        echo anchor('admin/admins/delete/'.$list['appli_ID'],'delete');
                        echo " </td> \n";
                        echo " </tr> \n";
                    }
                    echo " </table> "; 
                    
                }
            ?>
        </div>
    </div>
</div>