<?php 

require('models/blog.php');

//コントローラのクラスをインスタンス化
$controller = new BlogsController();

//アクション名によって、呼び出すメソッドを変える
//$action(グローバル変数)は、routes.phpで定義されているもの
switch ($action) {
	case 'index':
		$controller->index();
		break;
	
	default:
		# code...
		break;
}
//



 class BlogsController{
 		//プロパィ
 		private $action='';
 		private $resource='';
 		private $viewOptions='';

 		public function index(){


 		// foreach ($this->viweOptions as $viweOption) {
 			
 		// }
 		
 		///モデルを呼び出す
 		$blog = new Blog();
 		$this->viewOptions = $blog->index();
 		//アクション名を設定
 		$this->action ='index';

 		//ビューを呼び出す
 		require('views/layout/application.php');
 		//require('views/blogs/index.php');
 	}
 }
 ?>
