<?php
		include('vars.php');
		$balance = $_POST['amount'];
		for($pmt =1; $pmt <=$loanTerm; $pmt++){
			$moInterest = $balance * $periodRate;
			$moPrincipal = $perPmt - $moInterest;
			$balance -= $moPrincipal;
		
		if($pmt % 2 ==0){		
			echo "<tr class=even><td> " . $pmt ."<td> $" . round($perPmt,2). "</td><td> $" . round($moInterest,2) . "</td><td> $" . round($moPrincipal,2) .  "</td><td> $" . abs(round($balance,2)) . "</td></tr>";
		
		}
		else{
			echo "<tr class=odd><td> " . $pmt ."<td> $" . round($perPmt,2). "</td><td> $" . round($moInterest,2) . "</td><td> $" . round($moPrincipal,2) . "</td><td> $" .  abs(round($balance,2)) . "</td></tr>";
			}
		}
?>
