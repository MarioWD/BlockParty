$(function(){
  var banner = $(".six-banner .banner-img");
  var bannerData = banner.data();
  function switchBanner()
  {
    bannerData.key = bannerData.images[1+bannerData.key]?++bannerData.key:Object.keys(bannerData.images)[0];
    banner.css({"background-image": "url('/banner-imgs/"+bannerData.images[bannerData.key]+"')"});
  }
  var bannerInterval = setInterval(switchBanner, 3000);

  var lastStick = 0;
  function stickNavi()
  {
    var naviStickLimit = $(".sticky-navi").position().top;
    var naviHeight = $(".sticky-navi").height();
    var scrollFromTop = $(document).scrollTop();
    var isStuck = $(".sticky-navi").hasClass("stuck");
    if((naviStickLimit+naviHeight) <= scrollFromTop && !isStuck)
    {
      $(".sticky-navi").addClass("stuck").slideDown();
      lastStick = naviStickLimit;
    }
    else if(lastStick >= scrollFromTop && isStuck)
    {
      $(".sticky-navi").removeClass("stuck");
    }
  }
  $(document).on("scroll", stickNavi);
});
