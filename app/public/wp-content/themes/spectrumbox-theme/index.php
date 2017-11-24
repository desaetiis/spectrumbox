<?php

$names = array('Felix', 'Alex', 'Octavia', 'Ada', 'Noni', 'Deda');
$count = 0;
?>

<h1>
	Names of peeps:
</h1>
<?php while($count < count($names)) { ?>
<li>My name is <?php echo $names[$count]; ?>.</li>
<?php $count++; ?>
<?php } ?>
<p>So here, bitches!</p>