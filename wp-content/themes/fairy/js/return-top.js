/**by monniya for return top **/

window.onscroll = function(){
   var $window=$(window);
   var shouldvisible=( $window.scrollTop() >= 100 )? true : false;
  if (shouldvisible){
	document.getElementById("return-top").className="return_top";
  }else{
	document.getElementById("return-top").className="";
  }
}
document.getElementById("return-top").onclick = function () { 
	window.scrollTo(0, 0) 
};

