<?php
for($i = 40; $i <=70; $i++)
{
    echo "<p>$i</p>";
}
?>
<br>
<?php
$min = 40;
$max = 100;

for($a = $min; $a <= $max; $a=$a+2)
{
    echo "<p>$a</p>";
}
?>
<br>
<?php
echo '<select>';
for($j = 1970; $j <= 2040; $j++) 
{
    echo "<option>$j</option>";
}
echo '</select>';
?>
<br>
<?php
echo '<table border="1">';
echo '<tbody>';
for($z = 1; $z <= 10; $z++)
{
    echo '<tr>';
    for($b = 1; $b <= 10; $b++)
    {
        echo '<td>' . "L$z . C$b" . '</td>';
    }
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';
?>

