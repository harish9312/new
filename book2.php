<?php

include "includes/db.php";

include "includes/header.php";
//    <!-- Navigation -->
include "includes/nav.php";

?>




     <DIV CLASS="container"><center>
	 <img class="img-responsive"	src="2.jpg" align="center" width="800" height="500"><br>
	 <p><br><br><font face="Algerian" size="5">No. Of Seats You Want</p>
	 <select>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
	</select>

	<br><br>
	<table align="center"><tr><td>
<form class="form-signin" action="booked2.php" method="post">
<button class="btn btn-lg btn-primary btn-block button1" name="submit" type="submit">Book Seats</button>          
</form>
<br><br