<?php
session_start();

?>
<?php

		if (!isset($_SESSION["c"])) $_SESSION["c"]=""; 
		if (!isset($_SESSION["operateur"])) $_SESSION["operateur"]="="; 
		if (!isset($_SESSION["p"])) $_SESSION["p"]= 0;
		if (!isset($_SESSION["concat"])) $_SESSION["concat"]=FALSE;
		if (!isset($_SESSION['$id'])) $_SESSION['$id']=false;  
			function calcule($x,$op,$y)
				{
					switch($op)
						{
							case "+" : $res=$x+$y;break;
							case "-" : $res=$x-$y;break;
							case "*" : $res=$x*$y;break;
							case "/" : if($y==0)  $res=0; else $res=$x/$y;break;
							case "=" : $res=$y;break;
						}
					return $res;
				}

				$_SESSION["virgule"]=false;

				if (isset($_POST["cmd"])) 
					$cmd = trim($_POST["cmd"]); 
				else
					$cmd ="";


				switch($cmd) 
					{
							case "0" : if ($_SESSION['$id'])
					{$_SESSION["c"]=$cmd;$_SESSION['$id']=false;}
					else
					$_SESSION["c"]=$_SESSION["c"].$cmd;
					break;
					
					
						case "0" : if ($_SESSION['$id'] )
							{$_SESSION["c"]=$cmd;$_SESSION['$id']=false;}
								   else
							$_SESSION["c"]=$_SESSION["c"].$cmd;
						break;
					
							case "1" : if ($_SESSION['$id'])
							{$_SESSION["c"]=$cmd;$_SESSION['$id']=false;}
							else
							$_SESSION["c"]=$_SESSION["c"].$cmd;
						break;
						case "2" : if ($_SESSION['$id'])
							{$_SESSION["c"]=$cmd;$_SESSION['$id']=false;}
							else
							$_SESSION["c"]=$_SESSION["c"].$cmd;
						break;
						case "3" : if ($_SESSION['$id'])
							{$_SESSION["c"]=$cmd;$_SESSION['$id']=false;}
									else
							$_SESSION["c"]=$_SESSION["c"].$cmd;
						break;
						case "4" : if ($_SESSION['$id'])
							{$_SESSION["c"]=$cmd;$_SESSION['$id']=false;}
									else
							$_SESSION["c"]=$_SESSION["c"].$cmd;
						break;
						case "5" : if ($_SESSION['$id'])
							{$_SESSION["c"]=$cmd;$_SESSION['$id']=false;}
							else
					$_SESSION["c"]=$_SESSION["c"].$cmd;
					break;
					case "6" : if ($_SESSION['$id'])
							{$_SESSION["c"]=$cmd;$_SESSION['$id']=false;}
								else
							$_SESSION["c"]=$_SESSION["c"].$cmd;
					break;
					case "7" : if ($_SESSION['$id'])
							{$_SESSION["c"]=$cmd;$_SESSION['$id']=false;}
							else
							$_SESSION["c"]=$_SESSION["c"].$cmd;
					break;
					case "8" : if ($_SESSION['$id'])
							{$_SESSION["c"]=$cmd;$_SESSION['$id']=false;}
								else
							$_SESSION["c"]=$_SESSION["c"].$cmd;
					break;
					case "9" : if ($_SESSION['$id'])
									{$_SESSION["c"]=$cmd;$_SESSION['$id']=false;}
								else
									$_SESSION["c"]=$_SESSION["c"].$cmd;
					break;
		
					case "+" :  $_SESSION["operateur"]="+";
					$_SESSION["p"]=$_SESSION["c"];
					$_SESSION['$id']=true;
					$_SESSION['concat']=false;
					break;
					case "-" :  $_SESSION["operateur"]="-";
					$_SESSION["p"]=$_SESSION["c"];
					$_SESSION['$id']=true;
					$_SESSION['concat']=false;
					break;
					case "*" :  $_SESSION["operateur"]="*";
					$_SESSION["p"]=$_SESSION["c"];
					$_SESSION['$id']=true;
					$_SESSION['concat']=false;
					break;
					case "/" :  $_SESSION["operateur"]="/";
					$_SESSION["p"]=$_SESSION["c"];
					$_SESSION['$id']=true;
					$_SESSION['concat']=false;
					break;
					case "=" :  $_SESSION["c"]=calcule($_SESSION["p"],$_SESSION["operateur"],$_SESSION["c"]);
					$_SESSION['$id']=true;
					$_SESSION['concat']=false;
					break;
					case "." :	if ($_SESSION['concat']==false)
						{
						$_SESSION["c"]=$_SESSION["c"] .".";
						$_SESSION['concat']=true;
						}
						break;
					
					case "c" :	session_destroy();
					$_SESSION["c"]="";
					break;
	} 

?>
<html>
<head>
	<title>Calculatrice</title>
</head>
<body background="grey">


	

<table border="4" align="center">
<tr>
	<td>
<table bgcolor="blue" border="1">
<tr height="50"  bgcolor="white">
	<td colspan="5" align="center" ><table border="2" width="100%" height="100%"><tr><td align="right"><?php echo $_SESSION["c"]; ?></td></tr></table></td>
</tr>
<form action="calculatrice2.php" method="post"> 
<tr>
	<tr>
<td colspan="4" align="center" width="100%"> <input type="submit" name="cmd" value="                        c                         "></td>
</tr>
	<td align="center" bgcolor="red"> <input type="submit" name="cmd" value="   7   " ></td>
	<td align="center"bgcolor="red"> <input type="submit" name="cmd" value="   8   "></td>
	<td align="center"bgcolor="red"> <input type="submit" name="cmd" value="   9   "></td>
	<td align="center"bgcolor="red"> <input type="submit" name="cmd" value="   +   "></td>
</tr>

<tr>
	<td align="center" bgcolor="green"> <input type="submit" name="cmd" value="   4   "></td>
	<td align="center"bgcolor="green"> <input type="submit" name="cmd" value="   5   "></td>
	<td align="center"bgcolor="green"> <input type="submit" name="cmd" value="   6   "></td>
	<td align="center"bgcolor="green"> <input type="submit" name="cmd" value="   -   "></td>
</tr>
<tr>
	<td align="center" bgcolor="grey"> <input type="submit" name="cmd" value="   1   "></td>
	<td align="center" bgcolor="grey"> <input type="submit" name="cmd" value="   2   "></td>
	<td align="center" bgcolor="grey"> <input type="submit" name="cmd" value="   3   "></td>
	<td align="center" bgcolor="grey"> <input type="submit" name="cmd" value="   *   "></td>
</tr>
<tr>
	<td align="center" bgcolor="yellow"> <input type="submit" name="cmd" value="   0   "></td>
	<td align="center" bgcolor="yellow"> <input type="submit" name="cmd" value="   .    "></td>
	<td align="center" bgcolor="yellow"> <input type="submit" name="cmd" value="   =   "></td>
	<td align="center" bgcolor="yellow"> <input type="submit" name="cmd" value="   /   "></td>
</tr>

</table>
	</td>
</tr>
</table>
</form>
</body>
</html>