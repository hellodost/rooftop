<?php 
class Helpers
{

public static $adminFile='backend.php';

public function __construct()
{
$this->adminFile=	'backend.php';	
	
}
public static function adminFile()
{
return 'backend.php';	
	
	}	
	
public static function getMsg(){
	
	foreach(Yii::app()->user->getFlashes() as $key => $message) {
        /*echo '<div class="flash-' . $key . '">' . $message . "</div>\n";*/
		
		echo '<div class="message '.$key.' close">
							<h2>'.ucwords($key).'</h2>
							<p>'.$message.'</p>
						</div>';
    }
	
	}	
	
	public static function replaceSpace($string)
	{
		
	return $str = preg_replace('/[^a-zA-Z0-9]+/', '-', $string);	
		}
	
	
	
        
 public static function getExperienceValues()
 {
     return $experience=array('1'=>'0-1',
         '2'=>'1-2',
         '3'=>'2-5',
         '4'=>'5-10',
         '5'=>'10-15',
         '6'=>'15-20');
     
 }
}

?>