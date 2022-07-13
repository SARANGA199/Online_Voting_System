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

  countdown();

  function myFunction1() {
var txt;
if (confirm("Confirm the Vote!")) {
  txt =alert( "Vote successfully!");
  document.getElementById("btn1").disabled = true;
} else {
  txt = alert("Cancel the submit!");
}
document.getElementById("new1").innerHTML = txt;


}

function myFunction2() {
var txt;
if (confirm("Confirm the Vote!")) {
txt =alert( "Vote successfully!");
document.getElementById("btn2").disabled = true;
} else {
txt = alert("Cancel the submit!");
}
document.getElementById("new1").innerHTML = txt;


}

function myFunction3() {
var txt;
if (confirm("Confirm the Vote!")) {
txt =alert( "Vote successfully!");
document.getElementById("btn3").disabled = true;
} else {
txt = alert("Cancel the submit!");
}
document.getElementById("new1").innerHTML = txt;


}


function enablenew(){
	if(document.getElementById("verify").checked)

	{
        document.getElementById("sub1").disabled = false;}

  else{

	  document.getElementById("sub1").disabled = true;
  }
}



function reset1() {
  document.getElementById("Fform").reset();
}
