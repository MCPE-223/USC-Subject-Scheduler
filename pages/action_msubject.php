<?php
require("connect.php");


if(!empty($_POST["subject_code"])) {
    $sql ="SELECT * FROM subject WHERE subject_code = '" . $_POST["subject_code"] . "' ";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<input value='.$row[room_no].'>";
        }
    } else {
        echo "NO RESULT";
    }
}
?>

