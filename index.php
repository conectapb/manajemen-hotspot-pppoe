<?php
include "conf.php";
include "lib/library.php";
include "lib/con_api.php";
include "header.php";
if(!isset($_GET['page'])) $_GET['page'] = 'home';

switch($_GET['page'])
{ 
	case 'home':
		{ include "konten/home.php"; } break;
	case 'pengguna':
		{ include "konten/pengguna.php"; } break;
	case 'route':
		{ include "konten/router.php"; } break;
	case 'prosesroute':
		{ include "konten/proses-route.php"; } break;
	case 'pengguna':
		{ include "konten/pengguna.php"; } break;
	case 'prosespengguna':
		{ include "konten/proses-pengguna.php"; } break;
	case 'paket':
		{ include "konten/paket.php"; } break;
	case 'prosespaket':
		{ include "konten/proses-paket.php"; } break;
	case 'user':
		{ include "konten/user.php"; } break;
	case 'prosesuser':
		{ include "konten/proses-user.php"; } break;
	// logout
	case 'logout':
		{ include "konten/logout.php"; } break;
}
include "footer.php";
?>
