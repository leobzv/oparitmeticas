<?php
 $num1=75;
 $num2=80;

?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<TABLE BORDER>
<tr>
    <td colspan="5" align="center"> EJEMPLO </td> 
  </tr>
	<TR>
		<TH></TH> <TH>NUM1</TH> <TH>NUM2</TH><TH>RESULTADO</TH>
	</TR>
	<TR>
		<TD>SUMA</TD> <TD><?php echo $num1; ?></TD> <TD><?php echo $num2; ?></TD><TD><?php echo $num1+$num2; ?></TD>
	</TR>
	<TR>
		<TD>RESTA</TD> <TD><?php echo $num1; ?></TD> <TD><?php echo $num2; ?></TD><TD><?php echo $num1-$num2; ?></TD>
	</TR>
	<TR>
		<TD>MULTIPLICAR</TD> <TD><?php echo $num1; ?></TD> <TD><?php echo $num2; ?></TD><TD><?php echo $num1*$num2; ?></TD>
	</TR>
	<TR>
		<TD>DIVISION</TD> <TD><?php echo $num1; ?></TD> <TD><?php echo $num2; ?></TD><TD><?php echo $num1/$num2; ?></TD>

	</TR>
</TABLE>	



</body>
</html>
