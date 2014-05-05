<!DOCTYPE html>
<html>
<head>
	<title>Loan Calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<p class="credit">Keagan's design</p>
<div id="header"><h2>Loan Calculators</h2></div> <!--header -->
	<div id="container"> <!--start container -->
		<div id="pmtCalc"> <!--start pmt calc -->
		<form name=loancalc action='index.php' method='post'>
		<p><strong>Payment Calculator</strong></p>
		<p>Loan amount:<input title="Loan Amount" class="left" type="text" maxlength="16" name=amount></p></br>
		<p>Loan Term months:<input title="Loan term (Months)"class="left" maxlength="3"type=text name=term></p></br>
		<p>Loan APR:<input title="Loan APR" class="left" type=text  maxlength="6" name=apr></p></br>
		<input type="submit" value="Calculate"> <input type="submit" value="Reset" onclick="reset();" /></br>
		</form>
		</div> <!--end pmt calc -->
		<div id="loanDetails">	<p><strong>Loan Details</strong></p>
		<?php 
		
		if($_POST['amount'] > 0 && $_POST['term'] > 0 && $_POST['apr'] > 0){ 
			include('vars.php');
			include('printDetails.php');
		?>
		
		</div>
		<div id="amortab"><p><strong>Amortization Schedule</strong></p>
		<table>
			<th>Pmt#</th>
			<th>Payment <br>Amount</th>
			<th>Interest</th>
			<th>Principal</th>
			<th>Balance</th>
		<?php include('amort.php');?>
		</table>
		</div><!--end amortab -->
		<?php	
			}
			else{
				echo "<div style= clear:both;>Enter loan information and hit calculate.</div>";
			}
		?>
	
	</div> <!--end container to check math -- echo "1 + i = " . $iplusOne ." </br>" . "(1 + i) ^ " . $loanTerm . " = " . $ipoPowered;-->

</body>
</html>