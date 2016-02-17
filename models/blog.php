<?php 
	class Blog{
		//プロパティ
		private $dbconnect = '';

		//コンストラクタ
		public function __construct(){
			//DB接続ファイルの読み込み
			require ('dbconnect.php');
			//DB接続設定の値に代入
			$this->dbconnect = $db;
		}
		public function index(){

			$sql ='SELECT * FROM `blogs` WHERE `delete_flag`=0';
			$results = mysqli_query($this->dbconnect,$sql)or die(mysql_error($this->dbconnect));

			$rtn = array();
			while ($result = mysqli_fetch_assoc($results)) {
				$rtn[] = $result;
			}
			//取得結果を返す
			return $rtn;

			}

			public function show($id){

				$spl = 'SELECT * FROM `blogs` WHERE `id`= '.$id;
				$results = mysqli_query($this->dbconnect,$sql)or die(mysql_error($this->dbconnect));
				$result = mysqli_fetch_assoc($results);
				return $result;
				var_dump($result);
			// 	$rtn = array();
			// while ($result = mysqli_fetch_assoc($results)) {
			// 	$rtn[] = $result;
			// }
			// //取得結果を返す
			// return $rtn;
			
		}
	}
 ?>