<?php

return [
	'aliases' => [
		'@bower' => '@vendor/bower-asset',
		'@npm'   => '@vendor/npm-asset'
	],
    'vendorPath' => dirname( dirname( __DIR__ ) ) . '/vendor',
    'components' => [
    	// Yii Components
        'user' => [
        	'class' => 'yii\web\User',
            'identityClass' => 'cmsgears\core\common\models\entities\User',
			'enableAutoLogin' => true,
			'loginUrl' => '@web/login'
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache'
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => [ 'error', 'warning' ]
				]
			]
		],
        'view' => [
            'renderers' => [
                'twig' => [
                    'class' => 'yii\twig\ViewRenderer',
                    'cachePath' => '@runtime/Twig/cache',
                    // Array of twig options:
                    'options' => [
                        'auto_reload' => true
                    ],
                    'globals' => [ 'html' => '\yii\helpers\Html' ],
                    //'uses' => [ 'yii\bootstrap' ]
                ]
            ]
        ],
        // CMG Modules - Core
        'factory' => [
        	'class' => 'cmsgears\core\common\components\ObjectFactory'
        ],
        'core' => [
        	'class' => 'cmsgears\core\common\components\Core',
        	'editorClass' => 'cmsgears\widgets\cleditor\ClEditor',
        	'rbacFilters' => [
				'discover' => 'cmsgears\core\common\filters\DiscoverFilter',
        		'owner' => 'cmsgears\core\common\filters\OwnerFilter'
        	],
        	'notifications' => true,
        	'siteConfigAll' => true,
			'multiSite' => false
        ],
        'coreMessage' => [
        	'class' => 'cmsgears\core\common\components\MessageSource'
        ],
        'coreMailer' => [
        	'class' => 'cmsgears\core\common\components\Mailer'
        ],
        'formDesigner' => [
        	'class' => 'cmsgears\core\common\components\FormDesigner'
        ],
        'templateManager' => [
        	'class' => 'cmsgears\core\common\components\TemplateManager',
        	'templatesPath' => null,
        	'renderers' => [
        		'default' => 'Default',
        		'twig' => 'Twig',
        		'smarty' => 'Smarty'
        	]
        ],
        'eventManager' => [
        	'class' => 'cmsgears\notify\common\components\EventManager'
        ],
		// CMG Modules - CMS
		'cms' => [
			'class' => 'cmsgears\cms\common\components\Cms'
		],
		'cmsMessage' => [
			'class' => 'cmsgears\cms\common\components\MessageSource'
		],
		'cmsMailer' => [
			'class' => 'cmsgears\cms\common\components\Mailer'
		],
		// CMG Modules - Forms
		'forms' => [
			'class' => 'cmsgears\forms\common\components\Form'
		],
		'formsMessage' => [
			'class' => 'cmsgears\forms\common\components\MessageSource'
		],
		'formsMailer' => [
			'class' => 'cmsgears\forms\common\components\Mailer'
		],
        // CMG Modules - SNS Connect
        'snsConnect' => [
        	'class' => 'cmsgears\social\connect\common\components\SnsConnect'
        ],
		'snsConnectMessage' => [
			'class' => 'cmsgears\social\connect\common\components\MessageSource'
		],
        'snsConnectMailer' => [
        	'class' => 'cmsgears\social\connect\common\components\Mailer'
        ],
		// CMG Modules - Newsletter
		'newsletter' => [
			'class' => 'cmsgears\newsletter\common\components\Newsletter'
		],
		'newsletterMessage' => [
			'class' => 'cmsgears\newsletter\common\components\MessageSource'
		],
		'newsletterMailer' => [
			'class' => 'cmsgears\newsletter\common\components\Mailer'
		],
		// CMG Modules - Notify
		'notify' => [
			'class' => 'cmsgears\notify\common\components\Notify'
		],
		'notifyMessage' => [
			'class' => 'cmsgears\notify\common\components\MessageSource'
		],
		'notifyMailer' => [
			'class' => 'cmsgears\notify\common\components\Mailer'
		],
		// CMG Modules - Community
		'community' => [
			'class' => 'cmsgears\community\common\components\Community'
		],
		'communityMessage' => [
			'class' => 'cmsgears\community\common\components\MessageSource'
		],
		// CMG Plugins
		'fileManager' => [
			'class' => 'cmsgears\files\components\FileManager'
		],
		'iconManager' => [
			'class' => 'cmsgears\icons\components\IconManager'
		],
		// FoxSlider
		'foxSlider' => [
			'class' => 'foxslider\common\components\Core'
		]
	]
];
