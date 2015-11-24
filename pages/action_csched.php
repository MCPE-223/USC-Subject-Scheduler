<?php
require("connect.php");


if(!empty($_POST["building_code"])) {
	$sql ="SELECT * FROM room WHERE building_code = '" . $_POST["building_code"] . "' order by room_no, room_type";
	$result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        echo "<option> Select Room </option> ";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<option>" .$row["building_code"]. "".$row["room_no"]. "</option>";
        }
    } else {
        echo "NO RESULT";
    }
}
?>

