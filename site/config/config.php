<?php 
return [
	'cache' => [
    'pages' => [
      'active' => false
    ]
	],
	'thumbs' => [
    'srcsets' => [
      'nativesize' => [
        '600w'  => ['width' => 600, 'resize' => true, 'quality' => 80],
        '900w'  => ['width' => 900, 'resize' => true, 'quality' => 80],
        '1200w' => ['width' => 1200, 'resize' => true, 'quality' => 80],
        '1800w' => ['width' => 1800, 'resize' => true, 'quality' => 80],
        '2200w' => ['width' => 2000, 'resize' => true, 'quality' => 80]
      ],
      'nativesize-webp' => [
        '600w'  => ['width' => 600, 'quality' => 80, 'resize' => true, 'format' => 'webp'],
        '900w'  => ['width' => 900, 'quality' => 80, 'resize' => true, 'format' => 'webp'],
        '1200w' => ['width' => 1200, 'quality' => 80, 'resize' => true, 'format' => 'webp'],
        '1800w' => ['width' => 1800, 'quality' => 80, 'resize' => true, 'format' => 'webp'],
        '2200w' => ['width' => 2000, 'quality' => 80, 'resize' => true, 'format' => 'webp']
      ],
			'nativesize-thumb' => [
        '600w'  => ['width' => 600, 'resize' => true, 'quality' => 80],
        '900w'  => ['width' => 800, 'resize' => true, 'quality' => 80],
        '1200w' => ['width' => 1000, 'resize' => true, 'quality' => 80],
        '1800w' => ['width' => 1200, 'resize' => true, 'quality' => 80]
      ],
      'nativesize-thumb-webp' => [
        '600w'  => ['width' => 600, 'resize' => true, 'quality' => 80, 'format' => 'webp'],
        '900w'  => ['width' => 800, 'resize' => true, 'quality' => 80, 'format' => 'webp'],
        '1200w' => ['width' => 1000, 'resize' => true, 'quality' => 80, 'format' => 'webp'],
        '1800w' => ['width' => 1200, 'resize' => true, 'quality' => 80, 'format' => 'webp']
      ],
			'square' => [
        '600w'  => ['width' => 600, 'height' => 600, 'crop' => true, 'quality' => 80],
        '900w'  => ['width' => 900, 'height' => 900, 'crop' => true, 'quality' => 80],
        '1200w' => ['width' => 1200, 'height' => 1200, 'crop' => true, 'quality' => 80],
        '1800w' => ['width' => 1800, 'height' => 1800, 'crop' => true, 'quality' => 80],
        '2200w' => ['width' => 2000, 'height' => 2000, 'crop' => true, 'quality' => 80]
      ],
      'square-webp' => [
        '600w'  => ['width' => 600, 'height' => 600, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
        '900w'  => ['width' => 900, 'height' => 900, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
        '1200w' => ['width' => 1200, 'height' => 1200, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
        '1800w' => ['width' => 1800, 'height' => 1800, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
        '2200w' => ['width' => 2000, 'height' => 2000, 'crop' => true, 'quality' => 80, 'format' => 'webp']
      ],
			'square-thumb' => [
				'600w'  => ['width' => 600, 'height' => 600, 'crop' => true, 'quality' => 80],
				'900w'  => ['width' => 800, 'height' => 800, 'crop' => true, 'quality' => 80],
				'1200w' => ['width' => 1000, 'height' => 1000, 'crop' => true, 'quality' => 80],
				'1800w' => ['width' => 1400, 'height' => 1400, 'crop' => true, 'quality' => 80],
			],
			'square-thumb-webp' => [
					'600w'  => ['width' => 600, 'height' => 600, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
					'900w'  => ['width' => 800, 'height' => 800, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
					'1200w' => ['width' => 1000, 'height' => 1000, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
					'1800w' => ['width' => 1400, 'height' => 1400, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
			],
			'landscape' => [
					'600w'  => ['width' => 600, 'height' => 338, 'crop' => true, 'quality' => 80],
					'900w'  => ['width' => 900, 'height' => 506, 'crop' => true, 'quality' => 80],
					'1200w' => ['width' => 1200, 'height' => 675, 'crop' => true, 'quality' => 80],
					'1800w' => ['width' => 1800, 'height' => 1013, 'crop' => true, 'quality' => 80],
					'2200w' => ['width' => 2000, 'height' => 1125, 'crop' => true, 'quality' => 80]
			],
			'landscape-webp' => [
					'600w'  => ['width' => 600, 'height' => 338, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
					'900w'  => ['width' => 900, 'height' => 506, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
					'1200w' => ['width' => 1200, 'height' => 675, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
					'1800w' => ['width' => 1800, 'height' => 1013, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
					'2200w' => ['width' => 2000, 'height' => 1125, 'crop' => true, 'quality' => 80, 'format' => 'webp']
			],
			'landscape-thumb' => [
				'600w'  => ['width' => 600, 'height' => 390, 'crop' => true, 'quality' => 80],
				'900w'  => ['width' => 800, 'height' => 520, 'crop' => true, 'quality' => 80],
				'1200w' => ['width' => 1000, 'height' => 650, 'crop' => true, 'quality' => 80],
				'1800w' => ['width' => 1400, 'height' => 910, 'crop' => true, 'quality' => 80],
			],
			'landscape-thumb-webp' => [
					'600w'  => ['width' => 600, 'height' => 390, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
					'900w'  => ['width' => 800, 'height' => 520, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
					'1200w' => ['width' => 1000, 'height' => 650, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
					'1800w' => ['width' => 1400, 'height' => 910, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
			],
			'portrait' => [
				'600w'  => ['width' => 600, 'height' => 810, 'crop' => true, 'quality' => 80],
				'900w'  => ['width' => 900, 'height' => 1215, 'crop' => true, 'quality' => 80],
				'1200w' => ['width' => 1200, 'height' => 1620, 'crop' => true, 'quality' => 80],
				'1800w' => ['width' => 1800, 'height' => 2430, 'crop' => true, 'quality' => 80],
				'2200w' => ['width' => 2000, 'height' => 2200, 'crop' => true, 'quality' => 80]
			],
			'portrait-webp' => [
					'600w'  => ['width' => 600, 'height' => 810, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
					'900w'  => ['width' => 900, 'height' => 1215, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
					'1200w' => ['width' => 1200, 'height' => 1620, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
					'1800w' => ['width' => 1800, 'height' => 2430, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
					'2200w' => ['width' => 2000, 'height' => 2200, 'crop' => true, 'quality' => 80, 'format' => 'webp']
			],
			'portrait-thumb' => [
				'600w'  => ['width' => 600, 'height' => 810, 'crop' => true, 'quality' => 80],
				'900w'  => ['width' => 800, 'height' => 1080, 'crop' => true, 'quality' => 80],
				'1200w' => ['width' => 1000, 'height' => 1350, 'crop' => true, 'quality' => 80],
				'1800w' => ['width' => 1400, 'height' => 1890, 'crop' => true, 'quality' => 80],
			],
			'portrait-thumb-webp' => [
				'600w'  => ['width' => 600, 'height' => 810, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
				'900w'  => ['width' => 800, 'height' => 1080, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
				'1200w' => ['width' => 1000, 'height' => 1350, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
				'1800w' => ['width' => 1400, 'height' => 1890, 'crop' => true, 'quality' => 80, 'format' => 'webp'],
			],
    ]
  ]
]; 