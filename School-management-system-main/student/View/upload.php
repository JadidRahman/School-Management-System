<?php
$title = "Upload Assignment";
<script src="Scripts/uploadval.js"></script>;
include('StudentHeader.php');
include('Controllers/UploadNotesCheck')
?>

<?php include('SideBar.php'); ?>
 
<td>
            <fieldset>
                <form class="" name="Upload" action="" method="post" enctype="multipart/form-data" onsubmit="return FileUpload()">
                    <fieldset>
                      <legend>Upload Notes</legend>
                      <input type="file" name="photo"><br>
                      <hr>
                      <input type="submit" name="submit" value="submit">
                      <center>
                         <div id="error_messege">
                         </div>
                      </center>
                    </fieldset>
              
                  </form>
            </fieldset>
        </td>
</tr>

<?php include('Footer.php'); ?>