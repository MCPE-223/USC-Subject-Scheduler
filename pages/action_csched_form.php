<?php
require("connect.php");
if(($_POST['mon_7_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_7_30am]', '$_POST[mon]', '$_POST[time_7_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_7_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_7_30am]', '$_POST[tue]', '$_POST[time_7_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_7_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_7_30am]', '$_POST[wed]', '$_POST[time_7_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_7_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_7_30am]', '$_POST[thu]', '$_POST[time_7_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_7_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_7_30am]', '$_POST[fri]', '$_POST[time_7_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_7_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_7_30am]', '$_POST[sat]', '$_POST[time_7_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_7_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_7_30am]', '$_POST[sun]', '$_POST[time_7_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_8_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_8_00am]', '$_POST[mon]', '$_POST[time_8_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_8_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_8_00am]', '$_POST[tue]', '$_POST[time_8_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_8_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_8_00am]', '$_POST[wed]', '$_POST[time_8_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_8_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_8_00am]', '$_POST[thu]', '$_POST[time_8_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_8_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_8_00am]', '$_POST[fri]', '$_POST[time_8_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_8_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_8_00am]', '$_POST[sat]', '$_POST[time_8_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_8_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_8_00am]', '$_POST[sun]', '$_POST[time_8_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_8_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_8_30am]', '$_POST[mon]', '$_POST[time_8_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_8_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_8_30am]', '$_POST[tue]', '$_POST[time_8_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_8_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_8_30am]', '$_POST[wed]', '$_POST[time_8_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_8_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_8_30am]', '$_POST[thu]', '$_POST[time_8_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_8_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_8_30am]', '$_POST[fri]', '$_POST[time_8_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_8_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_8_30am]', '$_POST[sat]', '$_POST[time_8_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_8_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_8_30am]', '$_POST[sun]', '$_POST[time_8_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_9_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_9_00am]', '$_POST[mon]', '$_POST[time_9_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_9_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_9_00am]', '$_POST[tue]', '$_POST[time_9_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_9_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_9_00am]', '$_POST[wed]', '$_POST[time_9_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_9_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_9_00am]', '$_POST[thu]', '$_POST[time_9_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_9_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_9_00am]', '$_POST[fri]', '$_POST[time_9_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_9_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_9_00am]', '$_POST[sat]', '$_POST[time_9_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_9_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_9_00am]', '$_POST[sun]', '$_POST[time_9_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_9_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_9_30am]', '$_POST[mon]', '$_POST[time_9_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_9_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_9_30am]', '$_POST[tue]', '$_POST[time_9_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_9_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_9_30am]', '$_POST[wed]', '$_POST[time_9_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_9_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_9_30am]', '$_POST[thu]', '$_POST[time_9_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_9_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_9_30am]', '$_POST[fri]', '$_POST[time_9_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_9_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_9_30am]', '$_POST[sat]', '$_POST[time_9_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_9_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_9_30am]', '$_POST[sun]', '$_POST[time_9_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_10_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_10_00am]', '$_POST[mon]', '$_POST[time_10_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_10_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_10_00am]', '$_POST[tue]', '$_POST[time_10_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_10_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_10_00am]', '$_POST[wed]', '$_POST[time_10_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_10_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_10_00am]', '$_POST[thu]', '$_POST[time_10_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_10_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_10_00am]', '$_POST[fri]', '$_POST[time_10_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_10_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_10_00am]', '$_POST[sat]', '$_POST[time_10_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_10_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_10_00am]', '$_POST[sun]', '$_POST[time_10_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_10_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_10_30am]', '$_POST[mon]', '$_POST[time_10_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_10_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_10_30am]', '$_POST[tue]', '$_POST[time_10_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_10_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_10_30am]', '$_POST[wed]', '$_POST[time_10_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_10_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_10_30am]', '$_POST[thu]', '$_POST[time_10_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_10_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_10_30am]', '$_POST[fri]', '$_POST[time_10_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_10_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_10_30am]', '$_POST[sat]', '$_POST[time_10_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_10_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_10_30am]', '$_POST[sun]', '$_POST[time_10_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_11_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_11_00am]', '$_POST[mon]', '$_POST[time_11_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_11_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_11_00am]', '$_POST[tue]', '$_POST[time_11_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_11_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_11_00am]', '$_POST[wed]', '$_POST[time_11_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_11_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_11_00am]', '$_POST[thu]', '$_POST[time_11_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_11_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_11_00am]', '$_POST[fri]', '$_POST[time_11_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_11_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_11_00am]', '$_POST[sat]', '$_POST[time_11_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_11_00am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_11_00am]', '$_POST[sun]', '$_POST[time_11_00am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_11_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_11_30am]', '$_POST[mon]', '$_POST[time_11_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_11_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_11_30am]', '$_POST[tue]', '$_POST[time_11_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_11_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_11_30am]', '$_POST[wed]', '$_POST[time_11_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_11_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_11_30am]', '$_POST[thu]', '$_POST[time_11_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_11_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_11_30am]', '$_POST[fri]', '$_POST[time_11_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_11_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_11_30am]', '$_POST[sat]', '$_POST[time_11_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_11_30am']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_11_30am]', '$_POST[sun]', '$_POST[time_11_30am]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_12_00nn']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_12_00nn]', '$_POST[mon]', '$_POST[time_12_00nn]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_12_00nn']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_12_00nn]', '$_POST[tue]', '$_POST[time_12_00nn]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_12_00nn']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_12_00nn]', '$_POST[wed]', '$_POST[time_12_00nn]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_12_00nn']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_12_00nn]', '$_POST[thu]', '$_POST[time_12_00nn]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_12_00nn']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_12_00nn]', '$_POST[fri]', '$_POST[time_12_00nn]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_12_00nn']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_12_00nn]', '$_POST[sat]', '$_POST[time_12_00nn]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_12_00nn']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_12_00nn]', '$_POST[sun]', '$_POST[time_12_00nn]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_12_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_12_30pm]', '$_POST[mon]', '$_POST[time_12_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_12_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_12_30pm]', '$_POST[tue]', '$_POST[time_12_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_12_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_12_30pm]', '$_POST[wed]', '$_POST[time_12_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_12_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_12_30pm]', '$_POST[thu]', '$_POST[time_12_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_12_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_12_30pm]', '$_POST[fri]', '$_POST[time_12_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_12_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_12_30pm]', '$_POST[sat]', '$_POST[time_12_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_12_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_12_30pm]', '$_POST[sun]', '$_POST[time_12_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_1_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_1_00pm]', '$_POST[mon]', '$_POST[time_1_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_1_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_1_00pm]', '$_POST[tue]', '$_POST[time_1_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_1_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_1_00pm]', '$_POST[wed]', '$_POST[time_1_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_1_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_1_00pm]', '$_POST[thu]', '$_POST[time_1_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_1_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_1_00pm]', '$_POST[fri]', '$_POST[time_1_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_1_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_1_00pm]', '$_POST[sat]', '$_POST[time_1_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_1_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_1_00pm]', '$_POST[sun]', '$_POST[time_1_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_1_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_1_30pm]', '$_POST[mon]', '$_POST[time_1_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_1_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_1_30pm]', '$_POST[tue]', '$_POST[time_1_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_1_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_1_30pm]', '$_POST[wed]', '$_POST[time_1_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_1_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_1_30pm]', '$_POST[thu]', '$_POST[time_1_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_1_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_1_30pm]', '$_POST[fri]', '$_POST[time_1_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_1_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_1_30pm]', '$_POST[sat]', '$_POST[time_1_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_1_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_1_30pm]', '$_POST[sun]', '$_POST[time_1_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_1_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_1_00pm]', '$_POST[mon]', '$_POST[time_2_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_2_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_2_00pm]', '$_POST[tue]', '$_POST[time_2_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_2_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_2_00pm]', '$_POST[wed]', '$_POST[time_2_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_2_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_2_00pm]', '$_POST[thu]', '$_POST[time_2_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_2_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_2_00pm]', '$_POST[fri]', '$_POST[time_2_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_2_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_2_00pm]', '$_POST[sat]', '$_POST[time_2_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_2_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_2_00pm]', '$_POST[sun]', '$_POST[time_2_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_2_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_2_30pm]', '$_POST[mon]', '$_POST[time_2_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_2_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_2_30pm]', '$_POST[tue]', '$_POST[time_2_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_2_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_2_30pm]', '$_POST[wed]', '$_POST[time_2_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_2_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_2_30pm]', '$_POST[thu]', '$_POST[time_2_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_2_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_2_30pm]', '$_POST[fri]', '$_POST[time_2_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_2_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_2_30pm]', '$_POST[sat]', '$_POST[time_2_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_2_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_2_30pm]', '$_POST[sun]', '$_POST[time_2_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_2_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_2_00pm]', '$_POST[mon]', '$_POST[time_3_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_3_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_3_00pm]', '$_POST[tue]', '$_POST[time_3_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_3_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_3_00pm]', '$_POST[wed]', '$_POST[time_3_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_3_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_3_00pm]', '$_POST[thu]', '$_POST[time_3_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_3_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_3_00pm]', '$_POST[fri]', '$_POST[time_3_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_3_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_3_00pm]', '$_POST[sat]', '$_POST[time_3_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_3_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_3_00pm]', '$_POST[sun]', '$_POST[time_3_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_3_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_3_30pm]', '$_POST[mon]', '$_POST[time_3_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_3_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_3_30pm]', '$_POST[tue]', '$_POST[time_3_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_3_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_3_30pm]', '$_POST[wed]', '$_POST[time_3_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_3_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_3_30pm]', '$_POST[thu]', '$_POST[time_3_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_3_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_3_30pm]', '$_POST[fri]', '$_POST[time_3_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_3_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_3_30pm]', '$_POST[sat]', '$_POST[time_3_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_3_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_3_30pm]', '$_POST[sun]', '$_POST[time_3_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_3_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_3_00pm]', '$_POST[mon]', '$_POST[time_4_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_4_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_4_00pm]', '$_POST[tue]', '$_POST[time_4_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_4_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_4_00pm]', '$_POST[wed]', '$_POST[time_4_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_4_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_4_00pm]', '$_POST[thu]', '$_POST[time_4_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_4_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_4_00pm]', '$_POST[fri]', '$_POST[time_4_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_4_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_4_00pm]', '$_POST[sat]', '$_POST[time_4_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_4_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_4_00pm]', '$_POST[sun]', '$_POST[time_4_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_4_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_4_30pm]', '$_POST[mon]', '$_POST[time_4_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_4_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_4_30pm]', '$_POST[tue]', '$_POST[time_4_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_4_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_4_30pm]', '$_POST[wed]', '$_POST[time_4_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_4_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_4_30pm]', '$_POST[thu]', '$_POST[time_4_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_4_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_4_30pm]', '$_POST[fri]', '$_POST[time_4_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_4_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_4_30pm]', '$_POST[sat]', '$_POST[time_4_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_4_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_4_30pm]', '$_POST[sun]', '$_POST[time_4_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_5_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_5_00pm]', '$_POST[mon]', '$_POST[time_5_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_5_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_5_00pm]', '$_POST[tue]', '$_POST[time_5_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_5_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_5_00pm]', '$_POST[wed]', '$_POST[time_5_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_5_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_5_00pm]', '$_POST[thu]', '$_POST[time_5_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_5_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_5_00pm]', '$_POST[fri]', '$_POST[time_5_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_5_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_5_00pm]', '$_POST[sat]', '$_POST[time_5_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_5_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_5_00pm]', '$_POST[sun]', '$_POST[time_5_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_5_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_5_30pm]', '$_POST[mon]', '$_POST[time_5_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_5_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_5_30pm]', '$_POST[tue]', '$_POST[time_5_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_5_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_5_30pm]', '$_POST[wed]', '$_POST[time_5_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_5_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_5_30pm]', '$_POST[thu]', '$_POST[time_5_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_5_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_5_30pm]', '$_POST[fri]', '$_POST[time_5_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_5_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_5_30pm]', '$_POST[sat]', '$_POST[time_5_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_5_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_5_30pm]', '$_POST[sun]', '$_POST[time_5_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_6_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_6_00pm]', '$_POST[mon]', '$_POST[time_6_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_6_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_6_00pm]', '$_POST[tue]', '$_POST[time_6_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_6_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_6_00pm]', '$_POST[wed]', '$_POST[time_6_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_6_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_6_00pm]', '$_POST[thu]', '$_POST[time_6_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_6_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_6_00pm]', '$_POST[fri]', '$_POST[time_6_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_6_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_6_00pm]', '$_POST[sat]', '$_POST[time_6_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_6_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_6_00pm]', '$_POST[sun]', '$_POST[time_6_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_6_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_6_30pm]', '$_POST[mon]', '$_POST[time_6_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_6_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_6_30pm]', '$_POST[tue]', '$_POST[time_6_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_6_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_6_30pm]', '$_POST[wed]', '$_POST[time_6_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_6_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_6_30pm]', '$_POST[thu]', '$_POST[time_6_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_6_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_6_30pm]', '$_POST[fri]', '$_POST[time_6_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_6_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_6_30pm]', '$_POST[sat]', '$_POST[time_6_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_6_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_6_30pm]', '$_POST[sun]', '$_POST[time_6_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_7_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_7_00pm]', '$_POST[mon]', '$_POST[time_7_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_7_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_7_00pm]', '$_POST[tue]', '$_POST[time_7_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_7_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_7_00pm]', '$_POST[wed]', '$_POST[time_7_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_7_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_7_00pm]', '$_POST[thu]', '$_POST[time_7_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_7_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_7_00pmfri_7_00pm]', '$_POST[fri]', '$_POST[time_7_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_7_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_7_00pm]', '$_POST[sat]', '$_POST[time_7_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_7_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_7_00pm]', '$_POST[sun]', '$_POST[time_7_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_7_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_7_30pm]', '$_POST[mon]', '$_POST[time_7_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_7_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_7_30pm]', '$_POST[tue]', '$_POST[time_7_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_7_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_7_30pm]', '$_POST[wed]', '$_POST[time_7_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_7_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_7_30pm]', '$_POST[thu]', '$_POST[time_7_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_7_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_7_30pm]', '$_POST[fri]', '$_POST[time_7_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_7_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_7_30pm]', '$_POST[sat]', '$_POST[time_7_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_7_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_7_30pm]', '$_POST[sun]', '$_POST[time_7_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_8_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_8_00pm]', '$_POST[mon]', '$_POST[time_8_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_8_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_8_00pm]', '$_POST[tue]', '$_POST[time_8_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_8_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_8_00pm]', '$_POST[wed]', '$_POST[time_8_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_8_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_8_00pm]', '$_POST[thu]', '$_POST[time_8_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_8_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_8_00pm]', '$_POST[fri]', '$_POST[time_8_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_8_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_8_00pm]', '$_POST[sat]', '$_POST[time_8_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_8_00pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_8_00pm]', '$_POST[sun]', '$_POST[time_8_00pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['mon_8_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[mon_8_30pm]', '$_POST[mon]', '$_POST[time_8_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['tue_8_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[tue_8_30pm]', '$_POST[tue]', '$_POST[time_8_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['wed_8_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[wed_8_30pm]', '$_POST[wed]', '$_POST[time_8_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['thu_8_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[thu_8_30pm]', '$_POST[thu]', '$_POST[time_8_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['fri_8_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[fri_8_30pm]', '$_POST[fri]', '$_POST[time_8_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sat_8_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sat_8_30pm]', '$_POST[sat]', '$_POST[time_8_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}

if(($_POST['sun_8_30pm']) != ""){$sql = "INSERT INTO schedule(subject_code, day, period, acad_year, acad_sem, building_code, room_no) values('$_POST[sun_8_30pm]', '$_POST[sun]', '$_POST[time_8_30pm]', '$_POST[ayear]','$_POST[asem]', '$_POST[building]', '$_POST[room]')"; $conn->query ($sql);}


echo "<script>window.location.href='csched.php';</script>";
$conn->close();

?>