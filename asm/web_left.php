<?php
$rows = array(
	array(1, "Michelin"),
	array(2, "Bridgestone"),
	array(3, "GoodYear"),
	array(4, "Toyo")
);
?>
<nav class="navbar bg-light">
    <ul class="navbar-nav">
	<?php
	for($i = 0; $i<count($rows);$i++)
	{
	?>	
	<li class="nav-item">
		<a href="web.php?catid=<?=$rows[$i][0]?>" class="nav-link">
		<?=$rows[$i][1]?></a>
	</li>
	<?php
	}	
	?>							    						
    </ul>
</nav>
<style>
	.nav-item a {
		font-size: 18px;
	}
</style>