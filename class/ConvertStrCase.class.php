<?php
/*******************************************
** スネークケースとキャメルケースへ相互変換するクラス
*******************************************/

class ConvertStrCase{
	//スネークケースからアッパーキャメルケースへ変換
	public static function snakeToUpperCamel($str){
		return strtr(
			ucwords(
				strtr(
					strtolower($str), 
					[
						'_' => ' ' 
					] 
				) 
			), 
			[
				' ' => '' 
			] 
		);
	}
	
	//スネークケースからローアーキャメルケースへ変換
	public static function snakeToLowerCamel($str){
		return lcfirst(
			self::snakeToUpperCamel($str) 
		);
	}
	
	//アッパーキャメルケースからスネークケースへ変換
	public static function upperCamelToSnake($str){
		return ltrim(
			strtolower(
				preg_replace(
					'/[A-Z]/', 
					'_\0', 
					$str 
				) 
			), 
			'_' 
		);
	}
	
	//アッパーキャメルケースからローアーキャメルケースへ変換
	public static function upperCamelToLowerCamel($str){
		return lcfirst($str);
	}
	
	//ローアーキャメルケースからスネークケースへ変換
	public static function lowerCamelToSnake($str){
		return self::upperCamelToSnake($str);
	}
	
	//ローアーキャメルケースからアッパーキャメルケースへ変換
	public static function lowerCamelToUpperCamel($str){
		return ucwords($str);
	}
}