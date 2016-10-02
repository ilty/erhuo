<?php
class Autoload{

	public static $classMap = array();

	public static function load($class)
	{
		if(isset(self::$classMap[$class])) 
		{
			return true;
		}else{
			$file = ROOT_DIR."/".$class.'.class.php';
			if(!file_exists($file))
			{
				$file = ROOT_DIR.'/'.$class.'.php';
			}
			include $file;
			self::$classMap[$class] = $class;
		}
	}
}
?>