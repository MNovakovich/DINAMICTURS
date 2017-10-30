<!DOCTYPE html>
<html ng-app  >

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<style>

#kocka {
 background-color:blue;
 width:200px;
 height:200px;
 
 border-radius: 
  width:{{velicina}}px;
  height:{{velicina}}px;
    width:{{velicina}}px;
 background-color:{{myCol}};
  margin-top:{{visina}}px;
 margin-left:{{sirina}}px;
 border:2px solid red;


}
</style>
<body>

<p>Change the value of the input field:</p>





<input  ng-model="myCol" placeholder="engleski" >boja kocke<br>
<input  ng-model="visina">px  vertikala<br>
<input  ng-model="sirina">px  horizontala<br>
<input  ng-model="velicina" type="range" name="points"  min="0" max="500"> velicina kocke

<div >
<button id="dugme">dugme</button>
<div id="kocka">Ovde  ce ici neki tekst</div>
</div>

<script>;


	document.getElementById("kocka").addEventListener("click",test);
	
	

	function test(){
		alert("helo maj");
	}

</script>


<br><hr>
<h2>Primer 2</h2>


<div ng-init="cost=5">

<button ng-init="quantity=5" >5</button>
<button ng-init="quantity1=10" >10</button>
<button ng-init="quantity2=15" >15</button>
<p>Total in dollar: {{ quantity * cost }}</p>