  function countdown(){
    var now = new Date();
    var voteDate = new Date(now.getFullYear(), 11, 10);

    var nowTiime = now.getTime();
    var voteTime = voteDate.getTime();

    var remaningTime = voteTime - nowTiime;

    var s = Math.floor(remaningTime/ 1000);
    var m = Math.floor(s / 60);
    var h = Math.floor(m / 60);
    var d = Math.floor(h / 24);

    h =h% 24;
    m =m% 60;
    s =s% 60;

    if(h < 10)  { "0" + h} ;
    if (m < 10) { "0" + m};
    if (s < 10)  { "0" + s} ;

    document.getElementById("days").textContent = d;
    document.getElementById("days").innerText = d;

    document.getElementById("hours").textContent = h;
    document.getElementById("minutes").textContent = m;
    document.getElementById("seconds").textContent = s;

    setTimeout(countdown, 1000);
  }

  
//user profile edit


 function openinfor(evt, infoName) {
  var i, contents, tablinks;
  contents = document.getElementsByClassName("contents");
  for (i = 0; i < contents.length; i++) {
    contents[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(infoName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


//pword checked

function enableButton(){
	if(document.getElementById("chkTerms").checked)
	
	{   
        if((document.getElementById("pwd1").value) == (document.getElementById("pwd2").value))
	{	
            document.getElementById("subup").disabled = false;
	}
	else 
	{
		document.getElementById("subup").disabled = true;
		alert("Passwords Missmatched")
	}}
  
  else{
	  
	  document.getElementById("subup").disabled = true;
  }
}

