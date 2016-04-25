<html>

<body>
<?php
    require("connect.php");

    $totalhrs = 0;
    $count = 0;
    $dummycount = 0;
    $x = 0;
    $teacher;
    $teachload;
    $newteach;
    $counthrs = 0;
    $subjecthrs;
    $teachname;
    $counterr = 0;
    $dumhrs;
    $countsubj = 0;

    $sql = "TRUNCATE TABLE class";
    $result = mysqli_query($conn,$sql);


    $sql ="SELECT * FROM subject";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0) {
        
        // echo "<table>";
        while($row = mysqli_fetch_assoc($result)) {

            // echo "<tr><td>" .$row["subject_code"]. "</td><td>".$row["contact_hours"]*$row["offerings"]. "</td></tr>";
            $totalhrs = $totalhrs + $row["contact_hours"]*$row["offerings"];
            $dumhrs = $totalhrs;
            $countsubj = $countsubj + 1;
        }
        
        // echo "</table>";
    } else {
        // echo "<p>NO RESULT</p>";
    }
    // echo $totalhrs;
    // echo "\n <br />$countsubj";

$sql ="SELECT * FROM teacherstatus WHERE status = 'Professor'";
    $result = mysqli_query($conn, $sql);
    // echo "<p>PROFESSORS</p>";
    if(mysqli_num_rows($result) > 0) {
        // echo "<table>";
        while($row = mysqli_fetch_assoc($result)) {
            // echo "<tr><td>" .$row["teacher_id"]. "</td><td>".$row["rank"]. "</td></tr>";
            if($totalhrs >= 24) {

     $totalhrs = $totalhrs - 24;
     $count = $count + 1;
     $teacher[$count] = $row["teacher_id"];
     $teachload[$count] = "24";
     

    } elseif($totalhrs > 0){
        $count = $count + 1;
        $newteach = $row["teacher_id"];
        $teacher[$count] = $row["teacher_id"];
        $sql = "UPDATE teacherstatus SET teachingload = '$totalhrs' WHERE teacher_id = '$newteach'";
        $result = mysqli_query($conn, $sql);
        $teachload[$count] = $totalhrs;
    }




    }
          // echo "</table>";
    } else {
        // echo "<p>NO RESULT</p>";
    }
    $teacherix = 0;
    $dummycount = $count;
    while($dummycount != 0) {

        $sql = "UPDATE teacherstatus SET teachingload = '24' WHERE teacher_id = '$teacher[$teacherix]'";
        $result = mysqli_query($conn, $sql);
        $teacherix = $teacherix + 1;
        $dummycount = $dummycount - 1;
    }
 

    $sql ="SELECT * FROM teacherstatus WHERE status = 'Assistant Professor'";
    $result = mysqli_query($conn, $sql);
    // echo "<p>ASSt PROF</p>";
    if(mysqli_num_rows($result) > 0) {
        // echo "<table>";
        while($row = mysqli_fetch_assoc($result)) {
            // echo "<tr><td>" .$row["teacher_id"]. "</td><td>".$row["rank"]. "</td></tr>";

            if($totalhrs >= 24) {

     $totalhrs = $totalhrs - 24;
     $count = $count + 1;
     $teacher[$count] = $row["teacher_id"];
     $teachload[$count] = "24";
     // $sql = "UPDATE teacherstatus SET teachingload = '24' WHERE teacher_id = '$teacher[$count]'";
     //    $result = mysqli_query($conn, $sql);


    }
    elseif($totalhrs > 0){
        $count = $count + 1;
        $newteach = $row["teacher_id"];
        $teacher[$count] = $row["teacher_id"];
        $sql = "UPDATE teacherstatus SET teachingload = '$totalhrs' WHERE teacher_id = '$newteach'";
        $result = mysqli_query($conn, $sql);
        $teachload[$count] = $totalhrs;
    }
 
        
        }
        // echo "</table>";
    } else {
        // echo "<p>NO RESULT</p>";
    }

    $teacherix = 0;
    $dummycount = $count;
    while($dummycount != 0) {

        $sql = "UPDATE teacherstatus SET teachingload = '24' WHERE teacher_id = '$teacher[$teacherix]'";
        $result = mysqli_query($conn, $sql);
        $teacherix = $teacherix + 1;
        $dummycount = $dummycount - 1;
    }
 

    
   

    $sql ="SELECT * FROM teacherstatus WHERE status = 'Full Instructor'";
    $result = mysqli_query($conn, $sql);
    // echo "<p>FULL INST</p>";
    if(mysqli_num_rows($result) > 0) {
        // echo "<table>";
        while($row = mysqli_fetch_assoc($result)) {
            // echo "<tr><td>" .$row["teacher_id"]. "</td><td>".$row["rank"]. "</td></tr>";

            if($totalhrs >= 24) {

     $totalhrs = $totalhrs - 24;
     $count = $count + 1;
     $teacher[$count] = $row["teacher_id"];
     $teachload[$count] = "24";
     // $sql = "UPDATE teacherstatus SET teachingload = '24' WHERE teacher_id = '$teacher[$count]'";
     //    $result = mysqli_query($conn, $sql);


    }
    elseif($totalhrs > 0){
        $count = $count + 1;
        $newteach = $row["teacher_id"];
        $teacher[$count] = $row["teacher_id"];
        $sql = "UPDATE teacherstatus SET teachingload = '$totalhrs' WHERE teacher_id = '$newteach'";
        $result = mysqli_query($conn, $sql);
        $teachload[$count] = $totalhrs;
    }
 
        
    }
        // echo "</table>";
    } else {
        // echo "<p>NO RESULT</p>";
    }

    $teacherix = 0;
    $dummycount = $count;
    while($dummycount != 0) {

        $sql = "UPDATE teacherstatus SET teachingload = '24' WHERE teacher_id = '$teacher[$teacherix]'";
        $result = mysqli_query($conn, $sql);
        $teacherix = $teacherix + 1;
        $dummycount = $dummycount - 1;
    }
 

    $sql ="SELECT * FROM teacherstatus WHERE status = 'Assistant Instructor'";
    $result = mysqli_query($conn, $sql);
    // echo "<p>ASSt inst</p>";
    if(mysqli_num_rows($result) > 0) {
        // echo "<table>";
        while($row = mysqli_fetch_assoc($result)) {
            // echo "<tr><td>" .$row["teacher_id"]. "</td><td>".$row["rank"]. "</td></tr>";

            if($totalhrs >= 24) {

     $totalhrs = $totalhrs - 24;
     $count = $count + 1;
     $teacher[$count] = $row["teacher_id"];
     // $sql = "UPDATE teacherstatus SET teachingload = '24' WHERE teacher_id = '$teacher[$count]'";
     //    $result = mysqli_query($conn, $sql);
        $teachload[$count] = "24";


    }
    elseif($totalhrs > 0){
        $count = $count + 1;
        $newteach = $row["teacher_id"];
        $teacher[$count] = $row["teacher_id"];
        $sql = "UPDATE teacherstatus SET teachingload = '$totalhrs' WHERE teacher_id = '$newteach'";
        $result = mysqli_query($conn, $sql);
        $teachload[$count] = $totalhrs;
    }
 
        
        }
        // echo "</table>";
    } else {
        // echo "<p>NO RESULT</p>";
    }

    $teacherix = 0;
    $dummycount = $count;
    while($dummycount != 0) {

        $sql = "UPDATE teacherstatus SET teachingload = '24' WHERE teacher_id = '$teacher[$teacherix]'";
        $result = mysqli_query($conn, $sql);
        $teacherix = $teacherix + 1;
        $dummycount = $dummycount - 1;
    }
 

   


// echo $count;
// echo "\n $totalhrs";
// echo "<br />$teachload[5]";
$i = 0;
$subj;
$subjid;
$offerz = 0;
$sql ="SELECT * FROM subject";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        
        // echo "<table>";
        while($row = mysqli_fetch_assoc($result)) {
            // echo "<trx`><td>" .$row["subject_code"]. "</td></tr>";
            $subj = $row["subject_code"];
            $subjid[$i] = $row["subject_id"];

            $i = $i + 1;
        // echo "</table>";


     }   
        // echo "</table>";
    } else {
        // echo "<p>NO RESULT</p>";
    }

    $i = 0;
    $teachingloadix = 0;
    $teacherload;
    $winner;
    $m = 0;
    $offerings;
    $teacherassigned;

    $sql ="SELECT * FROM subject";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        
        // echo "<table>";
        while($row = mysqli_fetch_assoc($result)) {
            $offerings = $row["offerings"];
            $contact_hours = $row["contact_hours"];
            $display = $row["contact_hours"];
            // echo "$offerings";
           /* echo "<br /><tr><td>" .$row["subject_code"]. "</td></tr>";*/
            $subj = $row["subject_code"];
            


            $sql = "SELECT * FROM expertise WHERE subject_code = '$subj'";
            $result = mysqli_query($conn, $sql);
            


        // echo "<table>";
        // while($row = mysqli_fetch_assoc($result)) {


        //echo "<tr><td>" .$row["teacher_id"]. "</td><td>".$row["no_of_years"]. "</td></tr>";

        $dummycount = 1;
        $dummyyears = 0;
        $dummyyears2 = 0;
        $dummyteach = 0;
        $dummyteach2;
        $dummyteach3;
        $dummycount2 = 1;
        $dummyyearsarr;
        $x = 0;


        while($dummycount2 <= $count){
            $dummyteach3[$dummycount2] = $teacher[$dummycount2];
            $dummyteach2[$dummycount2] = $teacher[$dummycount2];
            $dummycount2 = $dummycount2 + 1;

        }


        $dummycount = 1;

      $x = 1;
      $index = 1;
      $teampo;
      $teampoor;
      $dumteach;


      

          $sql = "SELECT * FROM expertise WHERE subject_code = '$subj'";
            $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($result)){
                
            while($dummycount <= $count){
            if($dummyteach3[$dummycount] == $row["teacher_id"]){
            
            $teampoor = $teachload[$index];
            $teampo = $dummyteach3[$x];
             $dummyteach3[$x] = $dummyteach3[$dummycount];
             $teachload[$index] = $teachload[$dummycount];
             $dummyteach3[$dummycount] = $teampo;
             $teachload[$dummycount] = $teampoor;
             $dummyyearsarr[$x] = $row["no_of_years"];
             $x = $x + 1;
             $index = $index + 1;
        }
         $dummycount = $dummycount + 1;
        }

    $dummycount = 1;

    }

        $dummycount = $count;

        while($dummycount - $x >= 0){

            $dummyyearsarr[$x] = "0";
            $x = $x + 1;
        }
        $dummyyearsarr[$x] = "0";
        


        $dummycount = 1;
        $dummycount2 = 1;
        $dummycount3 = $countsubj - 1;
        $temp;
        $temp2;
        $offerings2 = $offerings - 1;

        while($dummycount <= $x){
            while($dummycount2 <= $x - $dummycount - 1){

                if($dummyyearsarr[$dummycount2] < $dummyyearsarr[$dummycount2 + 1]){

                    $temp = $dummyyearsarr[$dummycount2];
                    $temp2 = $dummyteach3[$dummycount2];
                    $dummyyearsarr[$dummycount2] = $dummyyearsarr[$dummycount2 + 1];
                    $dummyteach3[$dummycount2] = $dummyteach3[$dummycount2 + 1];
                    $dummyyearsarr[$dummycount2 + 1] = $temp;
                    $dummyteach3[$dummycount2 + 1] = $temp2;
                }
                $dummycount2 = $dummycount2 + 1;
            }

            $dummycount = $dummycount + 1;

        }

        $dummycount = 1;

    $dummycount2 = $countsubj;
    $dummycount = 1;
    $groupno;
    $sched = 0;
    $groupno = 1;
    $dummygroup = $groupno;
    while($offerings != 0){


    while($dummycount2 != 0){
        
        if($teachload[$dummycount] > $contact_hours){
            $teachload[$dummycount] = $teachload[$dummycount] - $contact_hours;
            $dummyteach = $dummyteach3[$dummycount];
            break;
        } else {
            $dummycount = $dummycount + 1;

        }

    

        $dummycount2 = $dummycount2 - 1;

    }
    $dummycount = 1;
   /* echo "\n <br />$dummyteach";*/
    
   
  
   $counter2 = 1;
    $sql = "SELECT * FROM subject_group WHERE subject_code = '$subj'";
    $result = mysqli_query($conn,$sql);
    $y = 1;
    $dummysubj2[1] = 5;
    $dummysubj2[0] = 3;
    $dummysubj[1] = 5;
    $dummysubj[0] = 3;
    while($row = mysqli_fetch_assoc($result)){
        $dummysubj[$y] = $row["subject_code_group"];  
        $y = $y + 1;
    }
    $y = 1;

    $display = 1;
    $counter;
    $sched2;
    while($display != 0){
    $sql = "SELECT * FROM schedule WHERE subject_code_group = '$dummysubj[$y]'";
    $result = mysqli_query($conn, $sql);
    $counter = 1;
    while($row = mysqli_fetch_assoc($result)){
       /* echo " <br />".$row["period"] . " " .$row["day"] . " " .$row["room_no"];*/

         $sched = $row["schedule_id"];
         $sched2[$counter] = $sched;
         $counter = $counter + 1;

        // $sql = 'UPDATE class SET schedule_id = "$sched"  WHERE teacher_id = "$dummyteach")';
         //$result = mysqli_query($conn,$sql);
         /*echo "<br />$sched";*/
         
    }
 
    while($counter != $counter2){
           $counterr = $counterr + 1;
           $sql = "INSERT INTO class (teacher_id) VALUES ('$dummyteach')";
           $result = mysqli_query($conn,$sql);
           

           $sql = "UPDATE class SET schedule_id = '$sched2[$counter2]' WHERE class_id = '$counterr'";
           $result = mysqli_query($conn,$sql);
           $counter2 = $counter2 + 1;
        
    }
    $display = $display - 1;
    $y = $y + 1;


}
    $y = 1;

    $offerings = $offerings - 1;
    $dummygroup = $dummygroup + 1;
    $groupno = $dummygroup;  

}
       $teacherix = $count;


        $i = $i + 1;
          
        // echo "</table>";


       $sql ="SELECT * FROM subject WHERE subject_id = '$subjid[$i]'";
       $result = mysqli_query($conn, $sql); 
   

     }   
        // echo "</table>";
    
    }
     else {
        // echo "<p>NO RESULT</p>";
    }

if($conn->query($sql) == TRUE) {    
    echo '<script language="javascript">';
    echo 'alert("Classes Created Successfully!")';
    echo '</script>';   
    echo "<script>window.location.href='cclasses.php';</script>";   
} else {
    echo '<script language="javascript">';
    echo 'alert("Failed to create classes!")';
    echo '</script>';   
    echo "<script>window.location.href='cclasses.php';</script>";
}

    
?>
</body>
</html>