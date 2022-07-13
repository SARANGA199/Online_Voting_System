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
  
  
  function checkPassword()
{
	if(document.getElementById("pwd1").value == document.getElementById("pwd2").value)
	{	
	}
	else 
	{
		alert("Passwords Missmatched")
	}
}


function pw1()
{
	document.getElementById("pwd1").disabled=false;
	document.getElementById("pwd2").disabled=false;
	document.getElementById("pwd3").disabled=false;
}


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

function showSlides1() {
var slideIndex = 0;
showSlides();

function showSlides() {
  var r;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("slidedot");
  for (r = 0; r < slides.length; r++) {
    slides[r].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (r = 0; r < dots.length; r++) {
    dots[r].className = dots[r].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000);
}
}
showSlides1();