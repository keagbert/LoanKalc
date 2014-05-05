<?php
echo "<p>Loan Amount : $" . $loanAmount . "</br>
		No. of Payments : " . $loanTerm . "</br>
		APR : " . $loanRate . "% </br>
		Monthly Payments : $" . round($perPmt,2) . "</br>
		Sum of all Payments : $" . round($totalPmt,2) . "</br>
		Total finance charges : $" . round($finCharges,2) . "</p>";
?>