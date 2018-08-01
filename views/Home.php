<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header hidden-xs hidden-sm">
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
        <li><a href="#artists">ARTISTS</a></li>
        <li><a href="#festival">FESTIVAL</a></li>
        <li><a href="https://www.showpass.com/van-pop-fest/" target="_blank">BUY PASSES</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="text-center poster" id='poster'>
    <video style='' width='100%' id='teaser-banner' poster='images/vpftitlebg.gif'>
        <source src='./videos/vpfteaser.mp4' type='video/mp4'></source>
    </video>
</div>
<div id="festival" class="festival">
    <div class="row">
        <div class="col mob-12 tbt-12 dsk-4"><img src="images/Waldorf.png" alt="Walforf Logo"/></div>
        <div class="col mob-12 tbt-6 dsk-4 festival-info">
            <p>Friday August 31st - 1489 E Hastings St - Waldorf Hotel Parking Lot</p>
            <p> 
                Join us at the VAN POP FEST at the historic Waldorf Hotel’s parking lot in Vancouver, BC. Nine top tier garage, indie and hip hop acts will grace the stage for the event 3-10pm. This event welcomes ALL AGES and features a 19+ licensed area. 
            </p>
        </div>
        <div class="tickets col mob-12 tbt-6 dsk-4">
            <h2>Tickets</h2>
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
        <div class="col-xs-12 col-sm-6 col-md-4 artist-list">
            <?php foreach ($this->a_list as $k=>$v) { ?>
            <h3><a href="<?=$v['l']?>" target="_blank"><?=$k?></a></h3>
            <?php } ?>
            <h3> and more... </h3>
        </div>
        <?php reset($this->a_list); ?>
        <div class="col-md-8 col-sm-6 hidden-xs images">
            <div class="col-xs-3"><!--
                --><?php while (list($k,$v) = each($this->a_list)) { ?><!--
                --><?php if ($i && $i%3==0) { ?></div><div class="col-xs-3"><?php } ?><!--
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
