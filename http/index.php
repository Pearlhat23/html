<html>
	<link rel="stylesheet" type = "text/css" href="text.css">
	<head><title> Jeremiah's HTML </title></head>
	<body style="background-color: #C8C8C8;">
CBC HTML (Hyper Text Markup Language)<br />
<div>
<ul>
<li><a href="index.php"> Home</a> &nbsp;</li>
<li><a href="contact.html"> Contact</a> &nbsp;</li>
<li><a href="documents/" target="_blank"> Documents</a> &nbsp;</li>
<li><a href="http://thetypingcat.com/" target="_blank"> TheTypingCat</a> &nbsp;</li>
<li><a href="https://github.com/Pearlhat23" target="_blank"> Git-Hub</a> &nbsp;</li>
<li><a href="html/" target="_blank"> HTML</a> &nbsp;</li>
<li><a href="logs/" target="_blank"> Logs</a> &nbsp;</li>
</ul>
</div>
<?php
echo "";
phpinfo();
?>
<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHiyypKyplYxxMtXo3OIzatjZqrqXwY8U&callback=myMap"></script>
</body>
</html>
