<?php
namespace controllers;
class Home extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->sponsors = scandir('./sponsors');
    unset($this->sponsors[array_search('.',$this->sponsors)]);
    unset($this->sponsors[array_search('..',$this->sponsors)]);
    $this->sponsors = array_values($this->sponsors);
    $this->spo_cnt = ceil(count($this->sponsors)/4);
    $this->a_list_1 = [ 
        'CHERRY GLAZERR'=>[
            'l'=>'http://www.cherry-glazerr.com',
            'i'=>'b_i/cherry_glazerr.jpg',
            'a'=>'Cherry Glazerr',
        ], 
        'BBNO$'=>[
            'l'=>'https://www.youtube.com/channel/UCC8FSfSnbjiZ6vGr68ZLtzg',
            'i'=>'b_i/bbno$.jpg',
            'a'=>'bbno$',
        ], 
        'BORED DECOR'=>[ 
            'l'=>'https://boreddecor.bandcamp.com/',
            'i'=>'b_i/bored-decor.jpg',
            'a'=>'Bored Décor',
        ], 
        'CLUB SOFA'=>[ 
            'l'=>'https://club-sofa.bandcamp.com/',
            'i'=>'b_i/clubsofa.jpg',
            'a'=>'Club Sofa',
        ], 
        'YUNG HEAZY'=>[ 
            'l'=>'https://yungheazy.com/',
            'i'=>'b_i/yungheazy.jpg',
            'a'=>'Yung Heazy',
        ], 
        'POLO BRIAN'=>[ 
            'l'=>'https://soundcloud.com/nicoxbrian',
            'i'=>'b_i/brianpolo.jpg',
            'a'=>'Polo Brian',
        ], 
        'WAX COWBOY'=>[ 
            'l'=>'https://waxcowboy.bandcamp.com/',
            'i'=>'b_i/waxcowboy.jpg',
            'a'=>'Wax Cowboy',
        ], 
        'MIND OFFLINE'=>[ 
            'l'=>'https://www.facebook.com/mindoffline604/',
            'i'=>'b_i/mindoffline.jpg',
            'a'=>'Mind Offline',
        ],
        'RAIDEN'=>[ 
            'l'=>'https://www.instagram.com/raidenchills/',
            'i'=>'b_i/Raiden.png',
            'a'=>'Raiden',
        ],
    ];

    $this->a_list = [ 
        'CHERRY GLAZERR'=>[
            'l'=>'http://www.cherry-glazerr.com',
            'i'=>'b_i/cherry_glazerr.jpg',
            'a'=>'Cherry Glazerr',
        ], 
        'BBNO$'=>[
            'l'=>'https://www.youtube.com/channel/UCC8FSfSnbjiZ6vGr68ZLtzg',
            'i'=>'b_i/bbno$.jpg',
            'a'=>'bbno$',
        ], 
        'YUNG HEAZY'=>[ 
            'l'=>'https://yungheazy.com/',
            'i'=>'b_i/yungheazy.jpg',
            'a'=>'Yung Heazy',
        ], 
        'BORED DECOR'=>[ 
            'l'=>'https://boreddecor.bandcamp.com/',
            'i'=>'b_i/bored-decor.jpg',
            'a'=>'Bored Décor',
        ], 
        'CLUB SOFA'=>[ 
            'l'=>'https://club-sofa.bandcamp.com/',
            'i'=>'b_i/clubsofa.jpg',
            'a'=>'Club Sofa',
        ], 
        'POLO BRIAN'=>[ 
            'l'=>'https://soundcloud.com/nicoxbrian',
            'i'=>'b_i/brianpolo.jpg',
            'a'=>'Polo Brian',
        ], 
        'WAX COWBOY'=>[ 
            'l'=>'https://waxcowboy.bandcamp.com/',
            'i'=>'b_i/waxcowboy.jpg',
            'a'=>'Wax Cowboy',
        ], 
        'MIND OFFLINE'=>[ 
            'l'=>'https://www.facebook.com/mindoffline604/',
            'i'=>'b_i/mindoffline.jpg',
            'a'=>'Mind Offline',
        ],
        'RAIDEN'=>[ 
            'l'=>'https://www.instagram.com/raidenchills/',
            'i'=>'b_i/Raiden.png',
            'a'=>'Raiden',
        ],
    ];
    $this->run();
  }
}
