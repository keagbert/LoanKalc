<?php
		$loanAmount = $_POST['amount'];
		$loanTerm = $_POST['term'];
		$loanRate = $_POST['apr'];
		$periodRate = ($loanRate/100)/12;
		$iplusOne = $periodRate + 1;
		$ipoPowered = pow($iplusOne,$loanTerm);
		$numer = $periodRate * $ipoPowered;
		$denom = $ipoPowered - 1;
		$perPmt = $loanAmount * ($numer/$denom);
		$totalPmt = $perPmt * $loanTerm;
		$finCharges = $totalPmt - $loanAmount;
?>