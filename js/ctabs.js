 function updateTeacher(val)
{
  document.getElementById("enumber").value = val;
}

function displayTab(x)
{
	var ndisplay = document.getElementsByClassName('treeview-menu');
	ndisplay[0].style.display="none";
	ndisplay[1].style.display="none";
	ndisplay[2].style.display="none";
	ndisplay[x].style.display="block";
}


function credential() {
    document.getElementById("usercred").innerHTML = "Uname: admin";
    document.getElementById("passcred").innerHTML = "Pword: admin";
}


function getRoom(val) {
	$.ajax({
	type: "POST",
	url: "action_csched.php",
	data:'building_code='+val,
	success: function(data){
		$("#room-list").html(data);
	}
	});
}

function getSubject(val) {
    // alert(val);
    $.ajax({
    type: "POST",
    url: "action_msubject.php",
    data:'subject_code='+val,
    success: function(data){
        $("#sub-wrapper").html(data);
    }
    });
}

function getOverview(year, sem, tid) {
    // if(year!="" && sem !="" && tid !="") alert(year + ", " + sem + ", " + tid);
    if(year!="" && sem !="" && tid !="")
    {
        $.ajax({
        type: "POST",
        url: "action_overview.php",
        data: 'acad_year='+year + '&acad_sem='+sem + '&teacher_id='+tid,
        success: function(data){
            $("#moverview").html(data);
        }
        });
    }
}

function Just()
{
    var x=document.getElementById("just");
    if(x.className == "dropdown user user-menu")
        x.setAttribute("class", "dropdown user user-menu open");
    else
        x.setAttribute("class", "dropdown user user-menu");
}

function mSubject(val)
{
    if(val == 0)
    {
        document.getElementById('msubjectform').setAttribute('action', 'action_msubject_update.php');
    }
    else if (val == 1)
    {
        document.getElementById('msubjectform').setAttribute('action', 'action_msubject_delete.php');
    }
}