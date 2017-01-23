function validator(){
var x=document.regform.firstname.value;
var y=document.regform.secondname.value;
var z=document.regform.surname.value;
var k=document.regform.id.value;

if(x==""||y==""||z==""||k=="" )
{
   alert("all textfields must be filled");
   
   return false;
}else{
	
}

}
var zungusha=["nyumba.jpg","hao3.jpg","chill.jpg"];
var pics=document.getElementById("picha");


var index=0;
function slide()
    
	{
	pics.setAttribute("src" ,zungusha[index]);
	index++;
	if(index >=zungusha.length)
	{
	index=0;
	
	
	}}
	setInterval(slide,3000);


