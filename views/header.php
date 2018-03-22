<header class="container">
	<?php
	if($this->showBanner && !empty($this->bannerImgs))
	{ ?>
		<div class="row six-banner bg-tri-3">
			<div class="col dsk-2 tbt-2 mob-3 text-center logo-box">
				<!-- <span class="text-white text-bold logo-text">6thSense</span> -->
			</div>
			<div class="col dsk-10 tbt-10 mob-9 banner-img" style="<?="background-image: url('/$this->bannerImgsDir/".current($this->bannerImgs)."');"?>"
												   data-images='<?=json_encode($this->bannerImgs)?>' data-key="<?=key($this->bannerImgs)?>">
			</div>
		</div>
		<?php
	} ?>
	 <div class="row navi-row bg-tri-4 sticky-navi">
		 <div class="col dsk-12 tbt-12 mob-12">
			<?php 
			foreach ($this->authorized_to_view as $view)
			{	?><a class="text-no-decal <?=strtolower($this->view) == $view->page?"bg-tri-5":""?>" href="/<?=$view->page?>/"><?=ucwords(str_replace(["_","-"], " " ,$view->page))?></a><?php
			}	?>	
		 </div>
	 </div>
</header>
<main class="container">
