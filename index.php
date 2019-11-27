<?php 
	// die("mod ".$mod. " act ".$act );
	$mod = isset($_GET['mod'])?$_GET['mod']:'user';
	$act = isset($_GET['act'])?$_GET['act']:'home';
	switch ($mod) {
		case 'user':
		// die('^^aaaaaaaaaaaaaaaaaaaaa');
			require_once 'controllers/home_controller.php';
			$controller_obj = new home_controller();
			switch ($act) {
				case 'home':
					$controller_obj->home();
					break;
				case 'list':
					$controller_obj->list();
					break;
				case 'detail':
					$controller_obj->detail();
					break;
				case 'about':
					$controller_obj->about();
					break;
				case 'contact':
					$controller_obj->contact();
					break;
				case 'sendMessages':
						# code...
					$controller_obj->sendMessages();
						break;
				case 'search':
					$controller_obj->search();
					break;
				default:
					echo "404-act";
					break;
			}
			break;
		case 'blogger':
			require_once 'controllers/blogger_controller.php';
			$controller_obj = new blogger_controller();
			switch ($act) {
				case 'login':
					$controller_obj->login();
					break;
				case 'viewcreate':
					$controller_obj->viewcreate();
					break;
				case 'create':
					$controller_obj->create();
					break;
				case 'logout':
					$controller_obj->logout();
					break;
				case 'categoryapp':
					$controller_obj->categoryapp();
					break;
				case 'postapp':
					$controller_obj->postapp();
					break;
				case 'manageblogger':
					$controller_obj->manageblogger();
					break;
				case 'listcategory':
					$controller_obj->listcategory();
					break;
				case 'listcategories':
					$controller_obj->listcategories();
					break;
				case 'addcategory':
					$controller_obj->addcategory();
					break;
				case 'delete':
					$controller_obj->delete();
					break;
				case 'listpost':
					$controller_obj->listpost();
					break;
				case 'addpost':
					$controller_obj->addpost();
					break;
				case 'addprocesspost':
					$controller_obj->addprocesspost();
					break;
				case 'deletepost':
					$controller_obj->deletepost();
					break;
				case 'editcategories':
					$controller_obj->editcategories();
					break;
				case 'editprocesscate':
					$controller_obj->editprocesscate();
					break;
				case 'deletecategory':
					$controller_obj->deletecategory();
					break;
				case 'deleteposts':
					$controller_obj->deleteposts();
					break;
				case 'editpost':
					$controller_obj->editpost();
					break;
				case 'editposts':
					$controller_obj->editposts();
					break;
				case 'updatepost':
					$controller_obj->updatepost();
					break;
				case 'updateposts':
					$controller_obj->updateposts();
					break;
				case 'edituser':
					$controller_obj->edituser();
					break;
				case 'updateuser':
					$controller_obj->updateuser();
					break;
				case 'listuser':
					$controller_obj->listuser();
					break;
				case 'listposts':
					$controller_obj->listposts();
					break;
				case 'approved':
					$controller_obj->approved();
					break;
				case 'approvedcate':
					$controller_obj->approvedcate();
					break;
				case 'hiddenpost':
					$controller_obj->hiddenpost();
					break;
				case 'viewhidden':
					$controller_obj->viewhidden();
					break;
				case 'showhidden':
					$controller_obj->showhidden();
					break;
				case 'showdeletepost':
					$controller_obj->showdeletepost();
					break;
				case 'userdeactive':
					$controller_obj->userdeactive();
					break;
				case 'listdeactive':
					$controller_obj->listdeactive();
					break;
				case 'openuser':
					$controller_obj->openuser();
					break;
				case 'postdetail':
					$controller_obj->postdetail();
					break;
				case 'resetpassword':
					$controller_obj->resetpassword();
					break;
				default:
					echo "404-bloger";
					break;
			}
			break;

		default:
			echo "404 - mod";
			break;
	}
 ?>