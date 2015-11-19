/*function addRow(btn) {
    var textbox1 = document.createElement("select");
 	var textbox2 = document.createElement("input");
    //Assign different attributes to the element.
    textbox1.setAttribute("id", "expbox");
    textbox1.setAttribute("class", "select-style gender");

    var opt1 = document.createElement("option");
    var opt2 = document.createElement("option");
    var opt3 = document.createElement("option");
    opt1.value="Subject 1";
    opt1.textContent="Subject 1";
    opt2.value="Subject 2";
    opt2.textContent="Subject 2";
    opt3.value="Subject 3";
    opt3.textContent="Subject 3";
    textbox1.appendChild(opt1);
	textbox1.appendChild(opt2);
    textbox1.appendChild(opt3);

 	textbox2.setAttribute("type", "text");
    textbox2.setAttribute("placeholder", "# of years");
    textbox2.setAttribute("id", "years");
 
 
    var box1 = document.getElementById("texp");
    box1.appendChild(textbox1);    
    box1.appendChild(textbox2);
 }*/

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

function login(form)/*function to check userid & password*/
{
 /*the following code checkes whether the entered userid and password are matching*/
 if(form.uname.value == "admin" && form.upassword.value == "admin")
  {
  	form.setAttribute("action", "overview.html");
    // window.open('../index.html')/*opens the target page while Id & password matches*/
  }
 else
 {
   alert("Opps! Wrong Credentials");/*displays error message*/
  }
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

function sched_next(val)
{
    if(val==0){
        document.getElementById("div1").style.display = 'none';
        document.getElementById("div2").style.display = 'block';
    }else if(val==1){
        document.getElementById("div2").style.display = 'none';
        document.getElementById("div3").style.display = 'block';
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