<?php
    if(isset($_GET['page'])){
		$page = $_GET['page'];
 		switch ($page) {
			case 'index':
				include "../admin/page/index.php";
				break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "../admin/page/index.php";
	}

?>