<?php
namespace controllers;
class Home extends Controller
{
  function __construct()
  {
    parent::__construct();
    $this->a_list = [
        'WALTER TV'=>[
            'l'=>'https://www.facebook.com/WalterTV/',
            'i'=>'images/WalterTv.jpg',
            'a'=>'Walter Tv',
        ],
        'DJ D. DEE'=>[
            'l'=>'https://soundcloud.com/derekdee',
            'i'=>'images/DjDD.jpeg',
            'a'=>'DJ D. Dee',
        ],
        'TANK GYAL'=>[
            'l'=>'https://www.facebook.com/TankGyal/',
            'i'=>'images/TankGyal.jpg',
            'a'=>'Tank Gyal',
        ],
        'HUMANS'=>[
            'l'=>'https://www.facebook.com/dashumans/',
            'i'=>'images/Humans.jpg',
            'a'=>'Humans',
        ],
        'PEACH PIT'=>[
            'l'=>'https://www.facebook.com/peachpit17/',
            'i'=>'images/PeachPit.jpg',
            'a'=>'Peach Pit',
        ],
        'BREVNER'=>[
            'l'=>'https://www.facebook.com/Brevner/',
            'i'=>'images/Brevner.jpg',
            'a'=>'Brevner',
        ],
        'LITTLE DESTROYER'=>[
            'l'=>'https://www.facebook.com/littledestroyermusic/',
            'i'=>'images/LittleDestroyer.png',
            'a'=>'Little Destoyer',
        ],
        'BB'=>[
            'l'=>'https://www.facebook.com/bbshredderz/',
            'i'=>'images/BB.jpg',
            'a'=>'BB',
        ],
        'FUNK SCHWEY'=>[
            'l'=>'https://www.facebook.com/funkschwey/',
            'i'=>'images/FunkSchwey.jpg',
            'a'=>'Funk Schwey',
        ],
        'TANGLERS'=>[
            'l'=>'https://www.facebook.com/TANGLERSBAND/',
            'i'=>'images/TANGLERS.jpg',
            'a'=>'TANGLERS',
        ],
        'CHAPEL SOUND'=>[
            'l'=>'https://www.facebook.com/ChapelSound/',
            'i'=>'images/ChapelSound.jpg',
            'a'=>'Chapel Sound',
        ],
        'MAX ULIS'=>[
            'l'=>'https://www.facebook.com/mulis',
            'i'=>'images/MaxUlis.jpg',
            'a'=>'Max Ulis',
        ],
        'DJ KOOKUM'=>[
            'l'=>'https://www.facebook.com/djkookum/',
            'i'=>'images/DjKookum.jpg',
            'a'=>'Dj Kookum',
        ],
    ];
    $this->run();
  }
}
