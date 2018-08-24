<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage"><img src="./images/vpftitle.png" alt="Block Party Image" /></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#teaser">TRAILER</a></li>
        <li><a href="#festival">FESTIVAL</a></li>
        <li><a href="#artists">ARTISTS</a></li>
        <li><a href="https://www.showpass.com/van-pop-fest/" target="_blank">BUY PASSES</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="text-center poster" id='poster'>
    <img src='images/vpftitlebg.gif'/>
</div>
<div class='text-center' id='teaser'>
    <video controls style='max-width: 100%;'>
        <source src='./videos/vpfteaser.mp4' type='video/mp4'></source>
    </video>
</div>
<div id="festival" class="festival">
    <div class="row">
        <div class="col mob-12 tbt-6 dsk-4 festival-info">
            <p class='text-center'>Friday August 31st - <a href='https://www.google.ca/maps/place/Hotel+At+The+Waldorf/@49.2815248,-123.0765048,17z/data=!3m1!4b1!4m7!3m6!1s0x54867113fbcd90f7:0x98a140004b6e5cdb!5m1!1s2018-08-31!8m2!3d49.2815213!4d-123.0743108' target='_blank'>1489 E Hastings St</a></p>
            <p>Join us at VAN POP FEST outdoors at the historic <a href='https://www.google.ca/maps/place/Hotel+At+The+Waldorf/@49.2815248,-123.0765048,17z/data=!3m1!4b1!4m7!3m6!1s0x54867113fbcd90f7:0x98a140004b6e5cdb!5m1!1s2018-08-31!8m2!3d49.2815213!4d-123.0743108' target='_blank'>Waldorf Hotel</a>'s parking lot in Vancouver, BC. Nine top tier garage, indie and hip hop acts will grace the stage from 3-10pm.<br><br> This event welcomes ALL AGES with 19+ licensed section and food trucks.</p>
        </div>
        <div class="tickets col mob-12 tbt-6 dsk-4">
            <img src="images/Waldorf.png" alt="Walforf Logo" style='margin-top:20px;'/>
        </div>
        <div class="col mob-10 mob-off-1 tbt-8 tbt-off-2 dsk-4 tickets">
            <h2 class='text-center'>TICKETS</h2>
            <div class="row">
                <div class="col mob-4 tbt-4 dsk-4">
                    <p>Early Bird</p>
                    <h3>$15</h3>
                </div>
                <div class="col mob-4 tbt-4 dsk-4">
                    <p>Tier I</p>
                    <h3>$20</h3>
                </div>
                <div class="col mob-4 tbt-4 dsk-4">
                    <p>Tier II</p>
                    <h3>$25</h3>
                </div>
                <div class="col mob-12 tbt-12 dsk-12">
                <a href="https://www.showpass.com/van-pop-fest/" target="_blank" class="btn btn-lg">Buy Here</a>
                </div>
            </div>

        </div>
    </div>
</div>
<div id="artists" class="artists">
	<div class="row text-center">
        <h3 class=" hidden-sm hidden-md hidden-lg">Artists</h3>
        <div class="col-xs-4 hidden-xs "><h3>Artists</h3></div>
        <div class="col-xs-8 hidden-xs " style="height: 62px;"></div>
        <div class="col-xs-12 col-sm-6 col-md-4 artist-list" style='margin-bottom: 20px;'>
            <?php foreach ($this->a_list as $k=>$v) { ?>
            <h3><a href="<?=$v['l']?>" target="_blank"><?=$k?></a></h3>
            <?php } ?>
        </div>
        <?php reset($this->a_list_1); ?>
        <div class="col-md-8 col-sm-6 col-xs-12 images">
            <div class="col-xs-4"><!--
                --><?php while (list($k,$v) = each($this->a_list_1)) { ?><!--
                --><?php if ($i && $i%3==0) { ?></div><div class="col-xs-4"><?php } ?><!--
                --><a href="<?=$v['l']?>" target="_blank"><img src="<?=$v['i']?>" alt="<?=$v['a']?>"/></a><!--
                --><?php ++$i ?><!--
                --><?php } ?>
            </div>
        </div>
    </div>
</div>
<div class='sponsors' id="sponsors" >
    <div class="row text-center">
        <div class="clearfix">
            <div class='col-xs-3'>
            <?php foreach ($this->sponsors as $k=>$v) { ?>
            <?php if ($k && $k%$this->spo_cnt==0) { ?></div><div class='col-xs-3'><?php } ?>
            <img src='sponsors/<?=$v?>'/>
            <br>
            <br>
            <?php } ?>
            </div>
        </div>
    </div>
</div>
