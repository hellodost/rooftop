<?php
return CMap::mergeArray(
    require(dirname(__FILE__).'/main.php'),
    array(
        // Put front-end settings there
        // (for example, url rules).
		'theme'=>'admin_black',
		'defaultController'=>'admin/index',
		'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'adminFile' => 'backend.php',
	),
		
		
    )
);?>