<?php
/*******************************************
**	スネークケースとキャメルケースへ相互変換するクラス読み込み実行
**	コンストラクタクラスで必要なファイルを読み込む
**	executeメソッドで
*******************************************/

class Execute{
	//定数宣言
	const CONST_STR = [
		'snake_str', 
		'UpperCamelStr', 
		'lowerCamelStr' 
	];
	
	//コンストラクタ
	public function __construct(){
		//スネークケースとキャメルケースへ相互変換するクラス
		require_once dirname(__FILE__). '/class/ConvertStrCase.class.php';
	}
	
	//デストラクタ
	public function __destruct(){}
	
	//スネークケースとキャメルケースへ相互変換するクラス実行表示用メソッド
	public function executeConvertStrCase(){
		echo 'スネークケースからアッパーキャメルケースへ変換<br>【変換前：'. self::CONST_STR[0]. ', 変換後：'. ConvertStrCase::snakeToUpperCamel(self::CONST_STR[0]). '】<br><br>';
		echo 'スネークケースからローアーキャメルケースへ変換<br>【変換前：'. self::CONST_STR[0]. ', 変換後：'. ConvertStrCase::snakeToLowerCamel(self::CONST_STR[0]). '】<br><br>';
		echo 'アッパーキャメルケースからスネークケースへ変換<br>【変換前：'. self::CONST_STR[1]. ', 変換後：'. ConvertStrCase::upperCamelToSnake(self::CONST_STR[1]). '】<br><br>';
		echo 'アッパーキャメルケースからローアーキャメルケースへ変換<br>【変換前：'. self::CONST_STR[1]. ', 変換後：'. ConvertStrCase::upperCamelToLowerCamel(self::CONST_STR[1]). '】<br><br>';
		echo 'ローアーキャメルケースからスネークケースへ変換<br>【変換前：'. self::CONST_STR[2]. ', 変換後：'. ConvertStrCase::lowerCamelToSnake(self::CONST_STR[2]). '】<br><br>';
		echo 'ローアーキャメルケースからアッパーキャメルケースへ変換<br>【変換前：'. self::CONST_STR[2]. ', 変換後：'. ConvertStrCase::lowerCamelToUpperCamel(self::CONST_STR[2]). '】';
	}
	
	//実行用メソッド
	public function execute(){
		//スネークケースとキャメルケースへ相互変換するクラス実行表示用メソッド
		$this->executeConvertStrCase();
	}
}

$class_execute = new Execute();
$class_execute->execute();