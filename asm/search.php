<div class="wrap">
			<form action="" class="search" method="get">
				<input type="text" name="keyword" method="post" class="searchTerm" placeholder="Search...">
				<button type="submit" class="searchButton" ><i class="fa fa-search"></i></button>
				<?php
				if(isset($_GET['keyword'])){
					$keyword=$_GET['keyword'];
				}
				?>
				<a href="web.php?keyword=<?=$keyword?>"></a>
			</form>
</div>
<style>
	.wrap{
		margin-left: 120px;
		margin-top: 5px;
	}
	.searchTerm{
		width: 450px; 
		height: 25px;
	}
	.search i{
		width: 18px;
	}
</style>



