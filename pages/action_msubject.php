<?php
require("connect.php");


if(!empty($_POST["subject_code"])) {
	$sql ="SELECT * FROM subject WHERE subject_code = '" . $_POST["subject_code"] . "' ";
	$result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
    	while($row = mysqli_fetch_assoc($result)) {
           // echo "value='$row[subject_desc]'" ;
			echo "<p class='contact'><label>Subject Description</label></p>";
            echo "<input class='sample' id='sdesc' name='sdesc' value='$row[subject_desc]' type='text'>";
			echo "<p class='contact'><label>Units</label></p>";
            echo "<input class='sample' id='units' name='units' value='$row[units]' type='text'>";
			echo "<p class='contact'><label>Class Hours</label></p>";
            echo "<input class='sample' id='chours' name='chours' value='$row[contact_hours]' type='text'>";
			echo "<p class='contact'><label>Offerings</label></p>";
            echo "<input class='sample' id='offerings' name='offerings' value='$row[offerings]' type='text'>";

                                  
            // <p class="contact"><label for="fname">Units</label></p> 
            // <input id="units" name="units" placeholder="Units" required="" tabindex="1" type="text"> 
    
            // <p class="contact"><label for="fname">Class Hours</label></p> 
            // <input id="chours" name="chours" placeholder="Class Hours" required="" tabindex="1" type="text"> 
            // <p class="contact"><label >Offerings</label></p> 
            // <input id="offerings" name="offerings" placeholder="Offerings" required="" tabindex="1" type="text">
			echo '<script language="javascript">';

			// echo "document.getElementById('sdesc').setAttribute('value', '$row[subject_desc]')";
			// echo "document.getElementById('units').setAttribute('value', '$row[units]')";
			// echo "document.getElementById('chours').setAttribute('value', '$row[contact_hours]')";
			// echo "document.getElementById('offerings').setAttribute('value', '$row[offerings]')";
			echo '</script>';	
        }
    } else {
        echo "NO RESULT";
    }
}
?>

