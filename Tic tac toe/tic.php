<html>
<head>
<title>TIC TAC TOE</title>
</head>
<body>

	<?php
		error_reporting(0);
		$_POST['submit1']? $a=1 : $a=$_POST['a'];
		$_POST['submit2']? $b=1 : $b=$_POST['b'];
		$_POST['submit3']? $c=1 : $c=$_POST['c'];
		$_POST['submit4']? $d=1 : $d=$_POST['d'];
		$_POST['submit5']? $e=1 : $e=$_POST['e'];
		$_POST['submit6']? $f=1 : $f=$_POST['f'];
		$_POST['submit7']? $g=1 : $g=$_POST['g'];
		$_POST['submit8']? $h=1 : $h=$_POST['h'];
		$_POST['submit9']? $i=1 : $i=$_POST['i'];

		$end=false;
		$comp=false;


		$winner=0;

		if($a==$b&&$b==$c&&$a!=0)
		{
			$winner=$a;	
		}
		else if($d==$e&&$e==$f&&$d!=0)
		{
			$winner=$d;	
		}
		else if($g==$h&&$h==$i&&$g!=0)
		{
			$winner=$g;	
		}
		else if($a==$d&&$d==$g&&$a!=0)
		{
			$winner=$a;	
		}
		else if($e==$b&&$b==$h&&$e!=0)
		{
			$winner=$b;	
		}
		else if($i==$c&&$f==$c&&$i!=0)
		{
			$winner=$c;	
		}
		else if($a==$e&&$e==$i&&$a!=0)
		{
			$winner=$a;	
		}
		else if($c==$e&&$e==$g&&$c!=0)
		{
			$winner=$c;	
		}
		else
		{

		// Decision to place a '0' for making a win

		if($a==2&&$b==2&&$c==0)
		{
			$c=2;
			$comp=true;
		}
		else if($c==2&&$b==2&&$a==0)
		{
			$a=2;
			$comp=true;
		}
		else if($c==2&&$a==2&&$b==0)
		{
			$b=2;
			$comp=true;
		}
		else if($d==2&&$e==2&&$f==0)
		{
			$f=2;
			$comp=true;
		}
		else if($d==2&&$f==2&&$e==0)
		{
			$e=2;
			$comp=true;
		}
		else if($e==2&&$f==2&&$d==0)
		{
			$d=2;
			$comp=true;
		}
		else if($g==2&&$h==2&&$i==0)
		{
			$i=2;
			$comp=true;
		}
		else if($g==2&&$i==2&&$h==0)
		{
			$h=2;
			$comp=true;
		}
		else if($h==2&&$i==2&&$g==0)
		{
			$g=2;
			$comp=true;
		}
		else if($a==2&&$d==2&&$g==0)
		{
			$g=2;
			$comp=true;
		}
		else if($g==2&&$a==2&&$d==0)
		{
			$d=2;
			$comp=true;
		}
		else if($d==2&&$g==2&&$a==0)
		{
			$a=2;
			$comp=true;
		}
		else if($b==2&&$e==2&&$h==0)
		{
			$h=2;
			$comp=true;
		}
		else if($b==2&&$h==2&&$e==0)
		{
			$e=2;
			$comp=true;
		}
		else if($e==2&&$h==2&&$b==0)
		{
			$b=2;
			$comp=true;
		}
		else if($c==2&&$f==2&&$i==0)
		{
			$i=2;
			$comp=true;
		}
		else if($c==2&&$i==2&&$f==0)
		{
			$f=2;
			$comp=true;
		}
		else if($f==2&&$i==2&&$c==0)
		{
			$c=2;
			$comp=true;
		}
		else if($e==2&&$a==2&&$i==0)
		{
			$i=2;
			$comp=true;
		}
		else if($i==2&&$a==2&&$e==0)
		{
			$e=2;
			$comp=true;
		}
		else if($e==2&&$i==2&&$a==0)
		{
			$a=2;
			$comp=true;
		}
		else if($c==2&&$e==2&&$g==0)
		{
			$g=2;
			$comp=true;
		}
		else if($c==2&&$g==2&&$e==0)
		{
			$e=2;
			$comp=true;
		}
		else if($e==2&&$g==2&&$c==0)
		{
			$c=2;
			$comp=true;
		}
		else
		{
			$comp=false;
		}
		}

		if($comp==true||$winner==1)
		{
			//Comp wins so no check for further steps.
		}
		else if($_POST['submit2']&&$d==1&&$a==0&&($c==0&&$g==0))
		{
			$a=2;
		}
		else if($_POST['submit2']&&$f==1&&$c==0&&($a==0&&$i==0))
		{
			$c=2;
		}
		else if($_POST['submit4']&&$b==1&&$a==0&&($c==0&&$g==0))
		{
			$a=2;
		}
		else if($_POST['submit4']&&$h==1&&$g==0&&($a==0&&$i==0))
		{
			$g=2;
		}
		else if($_POST['submit6']&&$b==1&&$c==0&&($a==0&&$i==0))
		{
			$c=2;
		}
		else if($_POST['submit6']&&$h==1&&$i==0&&($c==0&&$g==0))
		{
			$i=2;
		}
		else if($_POST['submit8']&&$d==1&&$g==0&&($a==0&&$i==0))
		{
			$g=2;
		}
		else if($_POST['submit8']&&$f==1&&$i==0&&($c==0&&$g==0))
		{
			$i=2;
		}
		else if($_POST['submit1'])
		{
			if($b==1&&$c==0)
			{
				$c=2;
			}
			else if($c==1&&$b==0)
			{
				$b=2;
			}
			else if($d==1&&$g==0)
			{
				$g=2;
			}
			else if($g==1&&$d==0)
			{
				$d=2;
			}
			else if($e==1&&$i==0)
			{
				$i=2;
			}
			else if($i==1&&$e==0)
			{
				$e=2;
			}
			else
			{
				if($i==1&$e==2&&$b==0&&$c==0&&$f==0)
				{
					$b=2;
				}
				else if($i==1&$e==2&&$d==0&&$g==0&&$h==0)
				{
					$d=2;
				}
				else if($e==0)
				{
					$e=2;
				}
				else if($b==0)
				{
					$b=2;
				}
				else if($d==0)
				{
					$d=2;
				}
				else if($i==0)
				{
					$i=2;
				}
				else if($c==0)
				{
					$c=2;
				}
				else if($g==0)
				{
					$g=2;
				}
				else if($f==0)
				{
					$f=2;
				}
				else if($h==0)
				{
					$h=2;
				}
				else
				{
					$end=true;
				}
			}
		}
		else if($_POST['submit3'])
		{
			if($b==1&&$a==0)
			{
				$a=2;
			}
			else if($a==1&&$b==0)
			{
				$b=2;
			}
			else if($f==1&&$i==0)
			{
				$i=2;
			}
			else if($i==1&&$f==0)
			{
				$f=2;
			}
			else if($e==1&&$g==0)
			{
				$g=2;
			}
			else if($g==1&&$e==0)
			{
				$e=2;
			}
			else
			{
				if($g==1&$e==2&&$a==0&&$a==0&&$d==0)
				{
					$b=2;
				}
				else if($g==1&$e==2&&$f==0&&$h==0&&$i==0)
				{
					$f=2;
				}
				else if($e==0)
				{
					$e=2;
				}
				else if($b==0)
				{
					$b=2;
				}
				else if($f==0)
				{
					$f=2;
				}
				else if($g==0)
				{
					$g=2;
				}
				else if($a==0)
				{
					$a=2;
				}
				else if($i==0)
				{
					$i=2;
				}
				else if($d==0)
				{
					$d=2;
				}
				else if($h==0)
				{
					$h=2;
				}
				else
				{
					$end=true;
				}
			}
		}
		else if($_POST['submit7'])
		{
			if($d==1&&$a==0)
			{
				$a=2;
			}
			else if($a==1&&$d==0)
			{
				$d=2;
			}
			else if($h==1&&$i==0)
			{
				$i=2;
			}
			else if($i==1&&$h==0)
			{
				$h=2;
			}
			else if($e==1&&$c==0)
			{
				$c=2;
			}
			else if($c==1&&$e==0)
			{
				$e=2;
			}
			else
			{
				if($c==1&$e==2&&$b==0&&$a==0&&$d==0)
				{
					$d=2;
				}
				else if($c==1&$e==2&&$h==0&&$f==0&&$i==0)
				{
					$h=2;
				}
				else if($e==0)
				{
					$e=2;
				}
				else if($d==0)
				{
					$d=2;
				}
				else if($h==0)
				{
					$h=2;
				}
				else if($c==0)
				{
					$c=2;
				}
				else if($a==0)
				{
					$a=2;
				}
				else if($i==0)
				{
					$i=2;
				}
				else if($b==0)
				{
					$b=2;
				}
				else if($f==0)
				{
					$f=2;
				}
				else
				{
					$end=true;
				}
			}
		}
		else if($_POST['submit9'])
		{
			if($h==1&&$g==0)
			{
				$g=2;
			}
			else if($g==1&&$h==0)
			{
				$h=2;
			}
			else if($f==1&&$c==0)
			{
				$c=2;
			}
			else if($c==1&&$f==0)
			{
				$f=2;
			}
			else if($e==1&&$a==0)
			{
				$a=2;
			}
			else if($a==1&&$e==0)
			{
				$e=2;
			}
			else
			{
				if($a==1&$e==2&&$b==0&&$c==0&&$f==0)
				{
					$f=2;
				}
				else if($a==1&$e==2&&$d==0&&$g==0&&$h==0)
				{
					$g=2;
				}
				else if($e==0)
				{
					$e=2;
				}
				else if($g==0)
				{
					$g=2;
				}
				else if($a==0)
				{
					$a=2;
				}
				else if($c==0)
				{
					$c=2;
				}
				else if($f==0)
				{
					$f=2;
				}
				else if($h==0)
				{
					$h=2;
				}
				else if($d==0)
				{
					$d=2;
				}
				else if($b==0)
				{
					$b=2;
				}
				else
				{
					$end=true;
				}
			}
		}
		else if($_POST['submit2'])
		{
			if($a==1&&$c==0)
			{
				$c=2;
			}
			else if($c==1&&$a==0)
			{
				$a=2;
			}
			else if($e==1&&$h==0)
			{
				$h=2;
			}
			else if($h==1&&$e==0)
			{
				$e=2;
			}
			else
			{
				if($e==0)
				{
					$e=2;
				}
				else if($a==0)
				{
					$a=2;
				}
				else if($c==0)
				{
					$c=2;
				}
				else if($h==0)
				{
					$h=2;
				}
				else if($d==0)
				{
					$d=2;
				}
				else if($f==0)
				{
					$f=2;
				}
				else if($g==0)
				{
					$g=2;
				}
				else if($i==0)
				{
					$i=2;
				}
				else
				{
					$end=true;
				}
			}
		}
		else if($_POST['submit4'])
		{
			if($a==1&&$g==0)
			{
				$g=2;
			}
			else if($g==1&&$a==0)
			{
				$a=2;
			}
			else if($e==1&&$f==0)
			{
				$f=2;
			}
			else if($f==1&&$e==0)
			{
				$e=2;
			}
			else
			{
				if($e==0)
				{
					$e=2;
				}
				else if($a==0)
				{
					$a=2;
				}
				else if($g==0)
				{
					$g=2;
				}
				else if($f==0)
				{
					$f=2;
				}
				else if($b==0)
				{
					$b=2;
				}
				else if($h==0)
				{
					$h=2;
				}
				else if($c==0)
				{
					$c=2;
				}
				else if($i==0)
				{
					$i=2;
				}
				else
				{
					$end=true;
				}
			}
		}
		else if($_POST['submit8'])
		{
			if($g==1&&$i==0)
			{
				$i=2;
			}
			else if($i==1&&$g==0)
			{
				$g=2;
			}
			else if($e==1&&$b==0)
			{
				$b=2;
			}
			else if($b==1&&$e==0)
			{
				$e=2;
			}
			else
			{
				if($e==0)
				{
					$e=2;
				}
				else if($g==0)
				{
					$g=2;
				}
				else if($i==0)
				{
					$i=2;
				}
				else if($b==0)
				{
					$b=2;
				}
				else if($d==0)
				{
					$d=2;
				}
				else if($f==0)
				{
					$f=2;
				}
				else if($a==0)
				{
					$a=2;
				}
				else if($c==0)
				{
					$c=2;
				}
				else
				{
					$end=true;
				}
			}
		}
		else if($_POST['submit6'])
		{
			if($i==1&&$c==0)
			{
				$c=2;
			}
			else if($c==1&&$i==0)
			{
				$i=2;
			}
			else if($e==1&&$d==0)
			{
				$d=2;
			}
			else if($d==1&&$e==0)
			{
				$e=2;
			}
			else
			{
				if($e==0)
				{
					$e=2;
				}
				else if($c==0)
				{
					$c=2;
				}
				else if($i==0)
				{
					$i=2;
				}
				else if($d==0)
				{
					$d=2;
				}
				else if($b==0)
				{
					$b=2;
				}
				else if($h==0)
				{
					$h=2;
				}
				else if($a==0)
				{
					$a=2;
				}
				else if($g==0)
				{
					$g=2;
				}
				else
				{
					$end=true;
				}
			}
		}
		else
		{
			if($a==1&&$i==0)
			{
				$i=2;
			}
			else if($i==1&&$a==0)
			{
				$a=2;
			}
			else if($c==1&&$g==0)
			{
				$g=2;
			}
			else if($g==1&&$c==0)
			{
				$c=2;
			}
			else
			{
				if($a==0)
				{
					$a=2;
				}
				else if($c==0)
				{
					$c=2;
				}
				else if($g==0)
				{
					$g=2;
				}
				else if($i==0)
				{
					$i=2;
				}
				else if($b==0)
				{
					$b=2;
				}
				else if($d==0)
				{
					$d=2;
				}
				else if($f==0)
				{
					$f=2;
				}
				else if($h==0)
				{
					$h=2;
				}
				else
				{
					$end=true;
				}
			}
		}

		?>
		<form action="tic.php" method="POST">
		<table border="1px" cellpadding="8">
		<tr>
		<td>
		<?php
		if($a==1)
		{
			echo "<input type='hidden' name='a' value='1'>";
			echo " X ";
		}
		else if($a==2)
		{
			echo "<input type='hidden' name='a' value='2'>";
			echo " 0 ";
		}
		else if(($winner==1||$comp==true))
		{
			echo "<input type='hidden' name='i' value='0'>";
			echo " * ";
		}
		else
		{
			echo "<input type='hidden' name='a' value='0'>";
			echo "<input type='submit' name='submit1'  value=' ? '>";
		}
		?>
		</td>
		<td>
		<?php
		if($b==1)
		{
			echo "<input type='hidden' name='b' value='1'>";
			echo " X ";
		}
		else if($b==2)
		{
			echo "<input type='hidden' name='b' value='2'>";
			echo " 0 ";
		}
		else if(($winner==1||$comp==true))
		{
			echo "<input type='hidden' name='i' value='0'>";
			echo " * ";
		}
		else
		{
			echo "<input type='hidden' name='b' value='0'>";
			echo "<input type='submit' name='submit2'  value=' ? '>";
		}
		?>
		</td>
		<td>
		<?php
		if($c==1)
		{
			echo "<input type='hidden' name='c' value='1'>";
			echo " X ";
		}
		else if($c==2)
		{
			echo "<input type='hidden' name='c' value='2'>";
			echo " 0 ";
		}
		else if(($winner==1||$comp==true))
		{
			echo "<input type='hidden' name='i' value='0'>";
			echo " * ";
		}
		else
		{
			echo "<input type='hidden' name='c' value='0'>";
			echo "<input type='submit' name='submit3' value=' ? '>";
		}
		?>
		</td>
		</tr>
		<tr>
		<td>
		<?php
		if($d==1)
		{
			echo "<input type='hidden' name='d' value='1'>";
			echo " X ";
		}
		else if($d==2)
		{
			echo "<input type='hidden' name='d' value='2'>";
			echo " 0 ";
		}
		else if(($winner==1||$comp==true))
		{
			echo "<input type='hidden' name='i' value='0'>";
			echo " * ";
		}
		else
		{
			echo "<input type='hidden' name='d' value='0'>";
			echo "<input type='submit' name='submit4' value=' ? '>";
		}
		?>
		</td>
		<td>
		<?php
		if($e==1)
		{
			echo "<input type='hidden' name='e' value='1'>";
			echo " X ";
		}
		else if($e==2)
		{
			echo "<input type='hidden' name='e' value='2'>";
			echo " 0 ";
		}
		else if(($winner==1||$comp==true))
		{
			echo "<input type='hidden' name='i' value='0'>";
			echo " * ";
		}
		else
		{
			echo "<input type='hidden' name='e' value='0'>";
			echo "<input type='submit' name='submit5' value=' ? '>";
		}
		?>
		</td>
		<td>
		<?php
		if($f==1)
		{
			echo "<input type='hidden' name='f' value='1'>";
			echo " X ";
		}
		else if($f==2)
		{
			echo "<input type='hidden' name='f' value='2'>";
			echo " 0 ";
		}
		else if(($winner==1||$comp==true))
		{
			echo "<input type='hidden' name='i' value='0'>";
			echo " * ";
		}
		else
		{
			echo "<input type='hidden' name='f' value='0'>";
			echo "<input type='submit' name='submit6' value=' ? '>";
		}
		?>
		</td>
		</tr>
		<tr>
		<td>
		<?php
		if($g==1)
		{
			echo "<input type='hidden' name='g' value='1'>";
			echo " X ";
		}
		else if($g==2)
		{
			echo "<input type='hidden' name='g' value='2'>";
			echo " 0 ";
		}
		else if(($winner==1||$comp==true))
		{
			echo "<input type='hidden' name='i' value='0'>";
			echo " * ";
		}
		else
		{
			echo "<input type='hidden' name='g' value='0'>";
			echo "<input type='submit' name='submit7' value=' ? '>";
		}
		?>
		</td>
		<td>
		<?php
		if($h==1)
		{
			echo "<input type='hidden' name='h' value='1'>";
			echo " X ";
		}
		else if($h==2)
		{
			echo "<input type='hidden' name='h' value='2'>";
			echo " 0 ";
		}
		else if(($winner==1||$comp==true))
		{
			echo "<input type='hidden' name='i' value='0'>";
			echo " * ";
		}
		else
		{
			echo "<input type='hidden' name='h' value='0'>";
			echo "<input type='submit' name='submit8' value=' ? '>";
		}
		?>
		</td>
		<td>
		<?php
		if($i==1)
		{
			echo "<input type='hidden' name='i' value='1'>";
			echo " X ";
		}
		else if($i==2)
		{
			echo "<input type='hidden' name='i' value='2'>";
			echo " 0 ";
		}
		else if(($winner==1||$comp==true))
		{
			echo "<input type='hidden' name='i' value='0'>";
			echo " * ";
		}
		else
		{
			echo "<input type='hidden' name='i' value='0'>";
			echo "<input type='submit' name='submit9' value=' ? '>";
		}
		?>
		</td>
		</tr>
		</table>
		</form>
		<?php

		if($winner==0&&$end==true)
		{
			echo "Its an tie!";
		}
		else if($winner==1)
		{
			echo "Congratulations! you won...";
		}
		else if($comp==true)
		{
			echo "Oops! you loose...";
		}
		else
		{
			//do nothing
		}
		?>
		<a href="index.html" > New Game</a>
</body>		
</html>
