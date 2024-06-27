<?php
$rows = array(
	array(1,"Michelin 225/45 R18 Pilot Sport 4", "img/michelin225_45.jpeg", "$170", 1),
	array(2,"Michelin 255/55 R18 Sport 3", "img/mit1.webp", "$150", 1),
	array(3,"Michelin 215/60R16 Energy XM 2+", "img/mit2.webp", "$120", 1),
	array(4,"Michelin 235/70 R15 LTX Trail", "img/mit3.webp", "$150", 1),
	array(5,"Bridgestone 175/50 R15 EP150", "img/brid1.webp", "$120", 2),
	array(6,"Bridgestone 175/70 R13 Ecopia", "img/brid2.webp", "$150", 2),
	array(7,"Bridgestone 205/45 R17 Potenza", "img/brid3.webp", "$200", 2),
	array(8,"Goodyear 185/60 R14 Duraplus 2", "img/good1.webp", "$100", 3),
	array(9,"Goodyear 255/70 R15 Wrangler", "img/good2.webp", "$150", 3),
    array(10,"Toyo 225/55 R19 Proxes CF2", "img/toyo1.webp", "$150", 4),
    array(11,"Toyo 225/55 R19 Proxes R46", "img/toyo2.webp", "$120", 4),
    array(12,"Toyo 185/60R15 NanoEnergy 3", "img/toyo3.webp", "$250", 4)
)
?>
<div class="row">
<?php
for($i=0;$i<count($rows);$i++)
{
	if(isset($_GET['catid']))
	{
		$catid=$_GET['catid'];
		if($catid!=$rows[$i][4])
		continue;
	}
	if(isset($_GET['keyword']))
	{
		$keyword=$_GET['keyword'];
		if(strpos(strtolower($rows[$i][1]), strtolower($keyword))===false)
		continue;
	}
?>
 <div class="col-lg-4">
	<div class="item">					
		<div>
			<a href="index_inf_pr.php?inforid=<?=$rows[$i][0]?>">
				<img src="<?=$rows[$i][2]?>" alt="">
			</a>
		</div>
		<div><?=$rows[$i][1]?></div>
		<div><?=$rows[$i][3]?></div>
		</div>
</div>
<?php
}
?>
</div>


