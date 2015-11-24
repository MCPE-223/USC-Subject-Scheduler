<?php
require("connect.php");

$sql ="SELECT * FROM  schedule, class WHERE schedule.schedule_id=class.schedule_id 
	AND teacher_id = '" . $_POST["teacher_id"] . "'  
	AND schedule.acad_year = '" . $_POST["acad_year"] . "'
	AND schedule.acad_sem = '" . $_POST["acad_sem"] . "'
	";
$result = mysqli_query($conn, $sql);
	echo "   

                    <table class='table1'>
                        <thead>
                            <tr>
                                <th></th>
                                <th abbr='Mon'><input class='ctime' type='text' value='Monday' name='Mon'></th>
                                <th scope='col' abbr='Tue'><input class='ctime' type='text' value='Tuesday' name='Tue'></th>
                                <th scope='col' abbr='Wed'><input class='ctime add' type='text' value='Wednesday' name='Wed'></th>
                                <th scope='col' abbr='Thu'><input class='ctime' type='text' value='Thursday' name='Thu'></th>
                                <th scope='col' abbr='Fri'><input class='ctime' type='text' value='Friday' name='Fri'></th>
                                <th scope='col' abbr='Sat'><input class='ctime' type='text' value='Saturday' name='Sat'></th>
                                <th scope='col' abbr='Sun'><input class='ctime' type='text' value='Sunday' name='Sun'></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='07:30 - 08:00 am' id='time_7_30am'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_7_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_7_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_7_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_7_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_7_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_7_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_7_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_7_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_7_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_7_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_7_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_7_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_7_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_7_30am_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='08:00 - 08:30 am' id='time_8_00am'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_8_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_8_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_8_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_8_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_8_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_8_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_8_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_8_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_8_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_8_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_8_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_8_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_8_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_8_00am_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='08:30 - 09:00 am' id='time_8_30am'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_8_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_8_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_8_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_8_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_8_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_8_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_8_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_8_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_8_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_8_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_8_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_8_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_8_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_8_30am_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='09:00 - 09:30 am' id='time_9_00am'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_9_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_9_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_9_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_9_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_9_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_9_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_9_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_9_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_9_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_9_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_9_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_9_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_9_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_9_00am_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='09:30 - 10:00 am' id='time_9_30am'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_9_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_9_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_9_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_9_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_9_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_9_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_9_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_9_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_9_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_9_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_9_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_9_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_9_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_9_30am_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='10:00 - 10:30 am' id='time_10_00am'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_10_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_10_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_10_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_10_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_10_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_10_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_10_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_10_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_10_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_10_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_10_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_10_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_10_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_10_00am_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='10:30 - 11:00 am' id='time_10_30am'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_10_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_10_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_10_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_10_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_10_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_10_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_10_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_10_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_10_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_10_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_10_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_10_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_10_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_10_30am_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='11:00 - 11:30 am' id='time_11_00am'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_11_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_11_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_11_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_11_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_11_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_11_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_11_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_11_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_11_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_11_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_11_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_11_00am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_11_00am'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_11_00am_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='11:30 - 12:00 am' id='time_11_30am'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_11_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_11_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_11_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_11_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_11_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_11_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_11_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_11_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_11_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_11_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_11_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_11_30am_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_11_30am'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_11_30am_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='12:00 - 12:30 pm' id='time_12_00nn'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_12_00nn'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_12_00nn_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_12_00nn'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_12_00nn_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_12_00nn'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_12_00nn_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_12_00nn'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_12_00nn_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_12_00nn'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_12_00nn_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_12_00nn'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_12_00nn_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_12_00nn'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_12_00nn_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='12:30 - 01:00 pm' id='time_12_30pm'> 
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_12_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_12_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_12_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_12_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_12_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_12_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_12_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_12_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_12_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_12_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_12_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_12_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_12_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_12_30pm_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='01:00 - 01:30 pm' id='time_1_00pm'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_1_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_1_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_1_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_1_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_1_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_1_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_1_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_1_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_1_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_1_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_1_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_1_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_1_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_1_00pm_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='01:30 - 02:00 pm' id='time_1_30pm'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_1_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_1_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_1_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_1_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_1_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_1_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_1_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_1_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_1_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_1_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_1_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_1_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_1_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_1_30pm_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='02:00 - 02:30 pm' id='time_2_00pm'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_2_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_2_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_2_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_2_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_2_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_2_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_2_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_2_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_2_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_2_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_2_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_2_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_2_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_2_00pm_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='02:30 - 03:00 pm' id='time_2_30pm'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_2_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_2_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_2_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_2_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_2_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_2_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_2_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_2_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_2_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_2_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_2_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_2_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_2_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_2_30pm_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='03:00 - 03:30 pm' id='time_3_00pm'> 
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_3_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_3_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_3_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_3_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_3_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_3_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_3_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_3_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_3_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_3_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_3_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_3_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_3_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_3_00pm_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='03:30 - 04:00 pm' id='time_3_30pm'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_3_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_3_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_3_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_3_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_3_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_3_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_3_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_3_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_3_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_3_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_3_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_3_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_3_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_3_30pm_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='04:00 - 04:30 pm' id='time_4_00pm'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_4_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_4_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_4_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_4_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_4_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_4_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_4_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_4_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_4_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_4_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_4_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_4_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_4_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_4_00pm_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='04:30 - 05:00 pm' id='time_4_30pm'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_4_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_4_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_4_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_4_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_4_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_4_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_4_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_4_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_4_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_4_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_4_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_4_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_4_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_4_30pm_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='05:00 - 05:30 pm' id='time_5_00pm'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_5_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_5_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_5_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_5_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_5_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_5_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_5_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_5_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_5_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_5_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_5_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_5_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_5_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_5_00pm_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='05:30 - 06:00 pm' id='time_5_30pm'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_5_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_5_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_5_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_5_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_5_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_5_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_5_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_5_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_5_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_5_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_5_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_5_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_5_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_5_30pm_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='06:00 - 06:30 pm' id='time_6_00pm'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_6_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_6_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_6_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_6_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_6_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_6_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_6_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_6_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_6_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_6_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_6_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_6_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_6_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_6_00pm_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='06:30 - 07:00 pm' id='time_6_30pm'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_6_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_6_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_6_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_6_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_6_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_6_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_6_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_6_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_6_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_6_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_6_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_6_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_6_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_6_30pm_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='07:00 - 07:30 pm' id='time_7_00pm'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_7_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_7_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_7_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_7_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_7_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_7_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_7_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_7_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_7_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_7_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_7_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_7_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_7_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_7_00pm_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='07:30 - 08:00 pm' id='time_7_30pm'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_7_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_7_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_7_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_7_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_7_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_7_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_7_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_7_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_7_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_7_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_7_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_7_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_7_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_7_30pm_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='08:00 - 08:30 pm' id='time_8_00pm'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_8_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_8_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_8_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_8_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_8_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_8_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_8_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_8_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_8_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_8_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_8_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_8_00pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_8_00pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_8_00pm_room'> 
                                </td>
                            </tr>
                            <tr>
                                <th scope='row'>
                                    <div class='pre-wrap'>
                                        <input class='ctime plus' type='text' value='08:30 - 09:00 pm' id='time_8_30pm'> 
                                    </div>
                                </th>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='mon_8_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='mon_8_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='tue_8_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='tue_8_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='wed_8_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='wed_8_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='thu_8_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='thu_8_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='fri_8_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='fri_8_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sat_8_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sat_8_30pm_room'> 
                                </td>
                                <td> 
                                    <input class='ctime black' type='text' value='-----' id='sun_8_30pm'> 
                                    <input class='ctime black' type='text' value='-----' id='sun_8_30pm_room'> 
                                </td>
                            </tr>
                        </tbody>
                        </table>             
                    	";
if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {

            // echo "<input class='ctime plus' type='text' value='$row[teacher_id]' id='time_7_30am'>";

                if($row['day']=='Monday' && $row['period']=='07:30 - 08:00 am'){echo "<script>document.getElementById('mon_7_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_7_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='07:30 - 08:00 am'){echo "<script>document.getElementById('tue_7_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_7_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='07:30 - 08:00 am'){echo "<script>document.getElementById('wed_7_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_7_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='07:30 - 08:00 am'){echo "<script>document.getElementById('thu_7_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_7_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='07:30 - 08:00 am'){echo "<script>document.getElementById('fri_7_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_7_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='07:30 - 08:00 am'){echo "<script>document.getElementById('sat_7_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_7_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='07:30 - 08:00 am'){echo "<script>document.getElementById('sun_7_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_7_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Monday' && $row['period']=='08:00 - 08:30 am'){echo "<script>document.getElementById('mon_8_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_8_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='08:00 - 08:30 am'){echo "<script>document.getElementById('tue_8_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_8_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='08:00 - 08:30 am'){echo "<script>document.getElementById('wed_8_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_8_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='08:00 - 08:30 am'){echo "<script>document.getElementById('thu_8_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_8_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='08:00 - 08:30 am'){echo "<script>document.getElementById('fri_8_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_8_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='08:00 - 08:30 am'){echo "<script>document.getElementById('sat_8_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_8_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='08:00 - 08:30 am'){echo "<script>document.getElementById('sun_8_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_8_00am_room').setAttribute('value', '$row[room_no]');</script>";}

                if($row['day']=='Monday' && $row['period']=='08:30 - 09:00 am'){echo "<script>document.getElementById('mon_8_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_8_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='08:30 - 09:00 am'){echo "<script>document.getElementById('tue_8_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_8_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='08:30 - 09:00 am'){echo "<script>document.getElementById('wed_8_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_8_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='08:30 - 09:00 am'){echo "<script>document.getElementById('thu_8_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_8_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='08:30 - 09:00 am'){echo "<script>document.getElementById('fri_8_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_8_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='08:30 - 09:00 am'){echo "<script>document.getElementById('sat_8_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_8_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='08:30 - 09:00 am'){echo "<script>document.getElementById('sun_8_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_8_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Monday' && $row['period']=='09:00 - 09:30 am'){echo "<script>document.getElementById('mon_9_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_9_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='09:00 - 09:30 am'){echo "<script>document.getElementById('tue_9_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_9_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='09:00 - 09:30 am'){echo "<script>document.getElementById('wed_9_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_9_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='09:00 - 09:30 am'){echo "<script>document.getElementById('thu_9_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_9_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='09:00 - 09:30 am'){echo "<script>document.getElementById('fri_9_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_9_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='09:00 - 09:30 am'){echo "<script>document.getElementById('sat_9_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_9_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='09:00 - 09:30 am'){echo "<script>document.getElementById('sun_9_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_9_00am_room').setAttribute('value', '$row[room_no]');</script>";}

                if($row['day']=='Monday' && $row['period']=='09:30 - 10:00 am'){echo "<script>document.getElementById('mon_9_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_9_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='09:30 - 10:00 am'){echo "<script>document.getElementById('tue_9_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_9_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='09:30 - 10:00 am'){echo "<script>document.getElementById('wed_9_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_9_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='09:30 - 10:00 am'){echo "<script>document.getElementById('thu_9_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_9_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='09:30 - 10:00 am'){echo "<script>document.getElementById('fri_9_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_9_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='09:30 - 10:00 am'){echo "<script>document.getElementById('sat_9_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_9_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='09:30 - 10:00 am'){echo "<script>document.getElementById('sun_9_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_9_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Monday' && $row['period']=='10:00 - 10:30 am'){echo "<script>document.getElementById('mon_10_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_10_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='10:00 - 10:30 am'){echo "<script>document.getElementById('tue_10_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_10_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='10:00 - 10:30 am'){echo "<script>document.getElementById('wed_10_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_10_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='10:00 - 10:30 am'){echo "<script>document.getElementById('thu_10_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_10_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='10:00 - 10:30 am'){echo "<script>document.getElementById('fri_10_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_10_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='10:00 - 10:30 am'){echo "<script>document.getElementById('sat_10_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_10_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='10:00 - 10:30 am'){echo "<script>document.getElementById('sun_10_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_10_00am_room').setAttribute('value', '$row[room_no]');</script>";}

                if($row['day']=='Monday' && $row['period']=='10:30 - 11:00 am'){echo "<script>document.getElementById('mon_10_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_10_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='10:30 - 11:00 am'){echo "<script>document.getElementById('tue_10_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_10_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='10:30 - 11:00 am'){echo "<script>document.getElementById('wed_10_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_10_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='10:30 - 11:00 am'){echo "<script>document.getElementById('thu_10_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_10_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='10:30 - 11:00 am'){echo "<script>document.getElementById('fri_10_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_10_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='10:30 - 11:00 am'){echo "<script>document.getElementById('sat_10_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_10_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='10:30 - 11:00 am'){echo "<script>document.getElementById('sun_10_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_10_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Monday' && $row['period']=='11:00 - 11:30 am'){echo "<script>document.getElementById('mon_11_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_11_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='11:00 - 11:30 am'){echo "<script>document.getElementById('tue_11_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_11_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='11:00 - 11:30 am'){echo "<script>document.getElementById('wed_11_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_11_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='11:00 - 11:30 am'){echo "<script>document.getElementById('thu_11_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_11_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='11:00 - 11:30 am'){echo "<script>document.getElementById('fri_11_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_11_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='11:00 - 11:30 am'){echo "<script>document.getElementById('sat_11_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_11_00am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='11:00 - 11:30 am'){echo "<script>document.getElementById('sun_11_00am').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_11_00am_room').setAttribute('value', '$row[room_no]');</script>";}

                if($row['day']=='Monday' && $row['period']=='11:30 - 12:00 nn'){echo "<script>document.getElementById('mon_11_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_11_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='11:30 - 12:00 nn'){echo "<script>document.getElementById('tue_11_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_11_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='11:30 - 12:00 nn'){echo "<script>document.getElementById('wed_11_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_11_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='11:30 - 12:00 nn'){echo "<script>document.getElementById('thu_11_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_11_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='11:30 - 12:00 nn'){echo "<script>document.getElementById('fri_11_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_11_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='11:30 - 12:00 nn'){echo "<script>document.getElementById('sat_11_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_11_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='11:30 - 12:00 nn'){echo "<script>document.getElementById('sun_11_30am').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_11_30am_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Monday' && $row['period']=='12:00 - 12:30 pm'){echo "<script>document.getElementById('mon_12_00nn').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_12_00nn_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='12:00 - 12:30 pm'){echo "<script>document.getElementById('tue_12_00nn').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_12_00nn_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='12:00 - 12:30 pm'){echo "<script>document.getElementById('wed_12_00nn').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_12_00nn_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='12:00 - 12:30 pm'){echo "<script>document.getElementById('thu_12_00nn').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_12_00nn_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='12:00 - 12:30 pm'){echo "<script>document.getElementById('fri_12_00nn').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_12_00nn_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='12:00 - 12:30 pm'){echo "<script>document.getElementById('sat_12_00nn').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_12_00nn_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='12:00 - 12:30 pm'){echo "<script>document.getElementById('sun_12_00nn').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_12_00nn_room').setAttribute('value', '$row[room_no]');</script>";}

                if($row['day']=='Monday' && $row['period']=='12:30 - 01:00 pm'){echo "<script>document.getElementById('mon_12_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_12_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='12:30 - 01:00 pm'){echo "<script>document.getElementById('tue_12_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_12_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='12:30 - 01:00 pm'){echo "<script>document.getElementById('wed_12_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_12_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='12:30 - 01:00 pm'){echo "<script>document.getElementById('thu_12_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_12_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='12:30 - 01:00 pm'){echo "<script>document.getElementById('fri_12_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_12_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='12:30 - 01:00 pm'){echo "<script>document.getElementById('sat_12_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_12_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='12:30 - 01:00 pm'){echo "<script>document.getElementById('sun_12_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_12_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Monday' && $row['period']=='01:00 - 01:30 pm'){echo "<script>document.getElementById('mon_1_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_1_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='01:00 - 01:30 pm'){echo "<script>document.getElementById('tue_1_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_1_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='01:00 - 01:30 pm'){echo "<script>document.getElementById('wed_1_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_1_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='01:00 - 01:30 pm'){echo "<script>document.getElementById('thu_1_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_1_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='01:00 - 01:30 pm'){echo "<script>document.getElementById('fri_1_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_1_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='01:00 - 01:30 pm'){echo "<script>document.getElementById('sat_1_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_1_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='01:00 - 01:30 pm'){echo "<script>document.getElementById('sun_1_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_1_00pm_room').setAttribute('value', '$row[room_no]');</script>";}

                if($row['day']=='Monday' && $row['period']=='01:30 - 02:00 pm'){echo "<script>document.getElementById('mon_1_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_1_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='01:30 - 02:00 pm'){echo "<script>document.getElementById('tue_1_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_1_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='01:30 - 02:00 pm'){echo "<script>document.getElementById('wed_1_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_1_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='01:30 - 02:00 pm'){echo "<script>document.getElementById('thu_1_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_1_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='01:30 - 02:00 pm'){echo "<script>document.getElementById('fri_1_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_1_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='01:30 - 02:00 pm'){echo "<script>document.getElementById('sat_1_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_1_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='01:30 - 02:00 pm'){echo "<script>document.getElementById('sun_1_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_1_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Monday' && $row['period']=='02:00 - 02:30 pm'){echo "<script>document.getElementById('mon_2_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_2_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='02:00 - 02:30 pm'){echo "<script>document.getElementById('tue_2_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_2_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='02:00 - 02:30 pm'){echo "<script>document.getElementById('wed_2_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_2_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='02:00 - 02:30 pm'){echo "<script>document.getElementById('thu_2_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_2_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='02:00 - 02:30 pm'){echo "<script>document.getElementById('fri_2_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_2_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='02:00 - 02:30 pm'){echo "<script>document.getElementById('sat_2_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_2_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='02:00 - 02:30 pm'){echo "<script>document.getElementById('sun_2_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_2_00pm_room').setAttribute('value', '$row[room_no]');</script>";}

                if($row['day']=='Monday' && $row['period']=='02:30 - 03:00 pm'){echo "<script>document.getElementById('mon_2_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_2_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='02:30 - 03:00 pm'){echo "<script>document.getElementById('tue_2_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_2_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='02:30 - 03:00 pm'){echo "<script>document.getElementById('wed_2_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_2_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='02:30 - 03:00 pm'){echo "<script>document.getElementById('thu_2_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_2_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='02:30 - 03:00 pm'){echo "<script>document.getElementById('fri_2_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_2_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='02:30 - 03:00 pm'){echo "<script>document.getElementById('sat_2_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_2_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='02:30 - 03:00 pm'){echo "<script>document.getElementById('sun_2_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_2_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Monday' && $row['period']=='03:00 - 03:30 pm'){echo "<script>document.getElementById('mon_3_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_3_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='03:00 - 03:30 pm'){echo "<script>document.getElementById('tue_3_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_3_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='03:00 - 03:30 pm'){echo "<script>document.getElementById('wed_3_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_3_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='03:00 - 03:30 pm'){echo "<script>document.getElementById('thu_3_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_3_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='03:00 - 03:30 pm'){echo "<script>document.getElementById('fri_3_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_3_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='03:00 - 03:30 pm'){echo "<script>document.getElementById('sat_3_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_3_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='03:00 - 03:30 pm'){echo "<script>document.getElementById('sun_3_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_3_00pm_room').setAttribute('value', '$row[room_no]');</script>";}

                if($row['day']=='Monday' && $row['period']=='03:30 - 04:00 pm'){echo "<script>document.getElementById('mon_3_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_3_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='03:30 - 04:00 pm'){echo "<script>document.getElementById('tue_3_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_3_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='03:30 - 04:00 pm'){echo "<script>document.getElementById('wed_3_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_3_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='03:30 - 04:00 pm'){echo "<script>document.getElementById('thu_3_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_3_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='03:30 - 04:00 pm'){echo "<script>document.getElementById('fri_3_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_3_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='03:30 - 04:00 pm'){echo "<script>document.getElementById('sat_3_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_3_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='03:30 - 04:00 pm'){echo "<script>document.getElementById('sun_3_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_3_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Monday' && $row['period']=='04:00 - 04:30 pm'){echo "<script>document.getElementById('mon_4_00pmm').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_4_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='04:00 - 04:30 pm'){echo "<script>document.getElementById('tue_4_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_4_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='04:00 - 04:30 pm'){echo "<script>document.getElementById('wed_4_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_4_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='04:00 - 04:30 pm'){echo "<script>document.getElementById('thu_4_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_4_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='04:00 - 04:30 pm'){echo "<script>document.getElementById('fri_4_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_4_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='04:00 - 04:30 pm'){echo "<script>document.getElementById('sat_4_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_4_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='04:00 - 04:30 pm'){echo "<script>document.getElementById('sun_4_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_4_00pm_room').setAttribute('value', '$row[room_no]');</script>";}

                if($row['day']=='Monday' && $row['period']=='04:30 - 05:00 pm'){echo "<script>document.getElementById('mon_4_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_4_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='04:30 - 05:00 pm'){echo "<script>document.getElementById('tue_4_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_4_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='04:30 - 05:00 pm'){echo "<script>document.getElementById('wed_4_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_4_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='04:30 - 05:00 pm'){echo "<script>document.getElementById('thu_4_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_4_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='04:30 - 05:00 pm'){echo "<script>document.getElementById('fri_4_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_4_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='04:30 - 05:00 pm'){echo "<script>document.getElementById('sat_4_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_4_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='04:30 - 05:00 pm'){echo "<script>document.getElementById('sun_4_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_4_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Monday' && $row['period']=='05:00 - 05:30 pm'){echo "<script>document.getElementById('mon_5_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_5_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='05:00 - 05:30 pm'){echo "<script>document.getElementById('tue_5_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_5_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='05:00 - 05:30 pm'){echo "<script>document.getElementById('wed_5_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_5_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='05:00 - 05:30 pm'){echo "<script>document.getElementById('thu_5_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_5_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='05:00 - 05:30 pm'){echo "<script>document.getElementById('fri_5_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_5_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='05:00 - 05:30 pm'){echo "<script>document.getElementById('sat_5_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_5_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='05:00 - 05:30 pm'){echo "<script>document.getElementById('sun_5_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_5_00pm_room').setAttribute('value', '$row[room_no]');</script>";}

                if($row['day']=='Monday' && $row['period']=='05:30 - 06:00 pm'){echo "<script>document.getElementById('mon_5_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_5_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='05:30 - 06:00 pm'){echo "<script>document.getElementById('tue_5_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_5_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='05:30 - 06:00 pm'){echo "<script>document.getElementById('wed_5_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_5_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='05:30 - 06:00 pm'){echo "<script>document.getElementById('thu_5_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_5_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='05:30 - 06:00 pm'){echo "<script>document.getElementById('fri_5_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_5_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='05:30 - 06:00 pm'){echo "<script>document.getElementById('sat_5_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_5_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='05:30 - 06:00 pm'){echo "<script>document.getElementById('sun_5_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_5_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Monday' && $row['period']=='06:00 - 06:30 pm'){echo "<script>document.getElementById('mon_6_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_6_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='06:00 - 06:30 pm'){echo "<script>document.getElementById('tue_6_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_6_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='06:00 - 06:30 pm'){echo "<script>document.getElementById('wed_6_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_6_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='06:00 - 06:30 pm'){echo "<script>document.getElementById('thu_6_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_6_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='06:00 - 06:30 pm'){echo "<script>document.getElementById('fri_6_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_6_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='06:00 - 06:30 pm'){echo "<script>document.getElementById('sat_6_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_6_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='06:00 - 06:30 pm'){echo "<script>document.getElementById('sun_6_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_6_00pm_room').setAttribute('value', '$row[room_no]');</script>";}

                if($row['day']=='Monday' && $row['period']=='06:30 - 07:00 pm'){echo "<script>document.getElementById('mon_6_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_6_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='06:30 - 07:00 pm'){echo "<script>document.getElementById('tue_6_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_6_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='06:30 - 07:00 pm'){echo "<script>document.getElementById('wed_6_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_6_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='06:30 - 07:00 pm'){echo "<script>document.getElementById('thu_6_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_6_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='06:30 - 07:00 pm'){echo "<script>document.getElementById('fri_6_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_6_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='06:30 - 07:00 pm'){echo "<script>document.getElementById('sat_6_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_6_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='06:30 - 07:00 pm'){echo "<script>document.getElementById('sun_6_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_6_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Monday' && $row['period']=='07:00 - 07:30 pm'){echo "<script>document.getElementById('mon_7_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_7_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='07:00 - 07:30 pm'){echo "<script>document.getElementById('tue_7_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_7_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='07:00 - 07:30 pm'){echo "<script>document.getElementById('wed_7_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_7_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='07:00 - 07:30 pm'){echo "<script>document.getElementById('thu_7_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_7_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='07:00 - 07:30 pm'){echo "<script>document.getElementById('fri_7_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_7_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='07:00 - 07:30 pm'){echo "<script>document.getElementById('sat_7_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_7_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='07:00 - 07:30 pm'){echo "<script>document.getElementById('sun_7_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_7_00pm_room').setAttribute('value', '$row[room_no]');</script>";}

                if($row['day']=='Monday' && $row['period']=='07:30 - 08:00 pm'){echo "<script>document.getElementById('mon_7_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_7_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='07:30 - 08:00 pm'){echo "<script>document.getElementById('tue_7_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_7_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='07:30 - 08:00 pm'){echo "<script>document.getElementById('wed_7_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_7_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='07:30 - 08:00 pm'){echo "<script>document.getElementById('thu_7_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_7_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='07:30 - 08:00 pm'){echo "<script>document.getElementById('fri_7_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_7_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='07:30 - 08:00 pm'){echo "<script>document.getElementById('sat_7_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_7_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='07:30 - 08:00 pm'){echo "<script>document.getElementById('sun_7_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_7_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Monday' && $row['period']=='08:00 - 08:30 pm'){echo "<script>document.getElementById('mon_8_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_8_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='08:00 - 08:30 pm'){echo "<script>document.getElementById('tue_8_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_8_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='08:00 - 08:30 pm'){echo "<script>document.getElementById('wed_8_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_8_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='08:00 - 08:30 pm'){echo "<script>document.getElementById('thu_8_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_8_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='08:00 - 08:30 pm'){echo "<script>document.getElementById('fri_8_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_8_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='08:00 - 08:30 pm'){echo "<script>document.getElementById('sat_8_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_8_00pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='08:00 - 08:30 pm'){echo "<script>document.getElementById('sun_8_00pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_8_00pm_room').setAttribute('value', '$row[room_no]');</script>";}

                if($row['day']=='Monday' && $row['period']=='08:30 - 09:00 pm'){echo "<script>document.getElementById('mon_8_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('mon_8_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Tuesday' && $row['period']=='08:30 - 09:00 pm'){echo "<script>document.getElementById('tue_8_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('tue_8_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Wednesday' && $row['period']=='08:30 - 09:00 pm'){echo "<script>document.getElementById('wed_8_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('wed_8_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Thursday' && $row['period']=='08:30 - 09:00 pm'){echo "<script>document.getElementById('thu_8_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('thu_8_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Friday' && $row['period']=='08:30 - 09:00 pm'){echo "<script>document.getElementById('fri_8_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('fri_8_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Saturday' && $row['period']=='08:30 - 09:00 pm'){echo "<script>document.getElementById('sat_8_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sat_8_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
                if($row['day']=='Sunday' && $row['period']=='08:30 - 09:00 pm'){echo "<script>document.getElementById('sun_8_30pm').setAttribute('value', '$row[subject_code_group]');document.getElementById('sun_8_30pm_room').setAttribute('value', '$row[room_no]');</script>";}
			}

} else {
    echo "NO RESULT";
}
?>

