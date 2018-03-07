<?php
namespace controllers;
class Home extends Controller
{
  protected $bannerImgsDir = "banner-imgs";
  protected $showBanner = 1;
  protected $bannerImgs;
  function __construct()
  {
    parent::__construct();
    $this->getBannerImgs();
    $this->run();
  }
  protected function getBannerImgs()
  {
    $bannerImgs = scandir("$this->bannerImgsDir/");
    unset($bannerImgs[0]);
    unset($bannerImgs[1]);
    $this->bannerImgs = $bannerImgs;
  }
} ?>
