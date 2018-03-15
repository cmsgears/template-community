<?php

return [
	'bootstrap' => [ 'gii' ],
	'modules' => [
		'gii' => 'yii\gii\Module'
	],
	'components' => [
		'urlManager' => [
			'class' => 'yii\web\UrlManager',
			'baseUrl' => 'http://localhost/communitydemo/frontend/web'
		],
		// CMG Modules - Core
		'migration' => [
			'class' => 'cmsgears\core\common\components\Migration',
			'cmgPrefix' => 'cmg_',
			'sitePrefix' => 'site_',
			'siteName' => 'CMSGears',
			'siteTitle' => 'Community Demo',
			'siteMaster' => 'demomaster',
			'primaryDomain' => 'cmsgears.com',
			'defaultSite' => 'http://localhost/communitydemo/frontend/web',
			'defaultAdmin' => 'http://localhost/communitydemo/backend/web',
			'uploadsUrl' => 'http://localhost/communitydemo/uploads'
		]
	]
];
