
<html>
<body>
<table border="1"  >
<?php
for($i=1;$i<=12;$i++)
{
echo "<tr>";
for ($j=1;$j<=12;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }

