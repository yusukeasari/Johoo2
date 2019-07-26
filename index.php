<!DOCTYPE html>
<html>
<head>
	<?php require_once 'assets/viewport.php'; ?>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<title></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<meta name="description" content="">
	<meta property="og:title" content=''/>
	<meta property="og:url" content="http://SUBDOMAIN.pitcom.jp/"/>
	<meta property="og:image" content="http://SUBDOMAIN.pitcom.jp/fb.jpg"/>
	<meta property="og:site_name" content=''/>
	<meta property="og:description" content='' />
</head>

<body>
	<div id="Johoo">

		<div id="Shadow"></div>
		<div id="Popup"></div>
		<div id="Timeline"></div>
		<div id="SearchPanel"></div>
		<div id="ControlPanel">
			<nav class="menu">
				<input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />
				<label class="menu-open-button" for="menu-open">
					<span class="lines line-1"></span>
					<span class="lines line-2"></span>
					<span class="lines line-3"></span>
				</label>

				<div id="QuickSearch" class="Search"><input type="file" id="file-form"><label class="file-form-button" for="file-form"><i id="image" class="SearchForm fas fa-image"></i></label><input id="QuickSearchInput" type="tel" name="" class="SearchForm" maxlength="6" placeholder="ID検索"><i id="cancel-button" class="SearchForm fas fa-times"></i><i id="QuickSearchButton" class="fas fa-search"></i><div id="QuickSearchResult"></div></div>
				<!--<a href="#" class="menu-item green"><i class="fa fa-coffee"></i> </a>-->
				<!--<a href="#" class="menu-item red"><i class="fa fa-heart"></i> </a>-->
				<a href="#" id="HomeButton" class="menu-item btn"><i class="fas fa-home"></i></a>
				<a href="#" id="ZoomInButton" class="menu-item btn"><i class="fas fa-plus"></i> </a>
				<a href="#" id="ZoomOutButton" class="menu-item btn"><i class="fas fa-minus"></i></a>
			</nav>
		</div>
		<!-- <div id="Logo"></div> -->
		<!-- <div id="copy"></div> -->
		<div id="pitcomLogo" onclick="openLink('http://pitcom.jp/','PITCOMページを開きますか？')"></div>
		<div id="Pyramid">
			<div id="Tiles"></div>
		</div>
		<div id="loading" style="position: absolute;top: 0;width:100%;height:100%;background-color: #000;z-index:10000000;display: flex;justify-content: center;align-items: center;">

			<div class="lds-css ng-scope"">
			<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
			<style type="text/css">@keyframes lds-spinner {
			  0% {
			    opacity: 1;
			  }
			  100% {
			    opacity: 0;
			  }
			}
			@-webkit-keyframes lds-spinner {
			  0% {
			    opacity: 1;
			  }
			  100% {
			    opacity: 0;
			  }
			}
			.lds-spinner {
			  position: relative;
			}
			.lds-spinner div {
			  left: 94px;
			  top: 48px;
			  position: absolute;
			  -webkit-animation: lds-spinner linear 1s infinite;
			  animation: lds-spinner linear 1s infinite;
			  background: #ffffff;
			  width: 12px;
			  height: 24px;
			  border-radius: 40%;
			  -webkit-transform-origin: 6px 52px;
			  transform-origin: 6px 52px;
			}
			.lds-spinner div:nth-child(1) {
			  -webkit-transform: rotate(0deg);
			  transform: rotate(0deg);
			  -webkit-animation-delay: -0.916666666666667s;
			  animation-delay: -0.916666666666667s;
			}
			.lds-spinner div:nth-child(2) {
			  -webkit-transform: rotate(30deg);
			  transform: rotate(30deg);
			  -webkit-animation-delay: -0.833333333333333s;
			  animation-delay: -0.833333333333333s;
			}
			.lds-spinner div:nth-child(3) {
			  -webkit-transform: rotate(60deg);
			  transform: rotate(60deg);
			  -webkit-animation-delay: -0.75s;
			  animation-delay: -0.75s;
			}
			.lds-spinner div:nth-child(4) {
			  -webkit-transform: rotate(90deg);
			  transform: rotate(90deg);
			  -webkit-animation-delay: -0.666666666666667s;
			  animation-delay: -0.666666666666667s;
			}
			.lds-spinner div:nth-child(5) {
			  -webkit-transform: rotate(120deg);
			  transform: rotate(120deg);
			  -webkit-animation-delay: -0.583333333333333s;
			  animation-delay: -0.583333333333333s;
			}
			.lds-spinner div:nth-child(6) {
			  -webkit-transform: rotate(150deg);
			  transform: rotate(150deg);
			  -webkit-animation-delay: -0.5s;
			  animation-delay: -0.5s;
			}
			.lds-spinner div:nth-child(7) {
			  -webkit-transform: rotate(180deg);
			  transform: rotate(180deg);
			  -webkit-animation-delay: -0.416666666666667s;
			  animation-delay: -0.416666666666667s;
			}
			.lds-spinner div:nth-child(8) {
			  -webkit-transform: rotate(210deg);
			  transform: rotate(210deg);
			  -webkit-animation-delay: -0.333333333333333s;
			  animation-delay: -0.333333333333333s;
			}
			.lds-spinner div:nth-child(9) {
			  -webkit-transform: rotate(240deg);
			  transform: rotate(240deg);
			  -webkit-animation-delay: -0.25s;
			  animation-delay: -0.25s;
			}
			.lds-spinner div:nth-child(10) {
			  -webkit-transform: rotate(270deg);
			  transform: rotate(270deg);
			  -webkit-animation-delay: -0.166666666666667s;
			  animation-delay: -0.166666666666667s;
			}
			.lds-spinner div:nth-child(11) {
			  -webkit-transform: rotate(300deg);
			  transform: rotate(300deg);
			  -webkit-animation-delay: -0.083333333333333s;
			  animation-delay: -0.083333333333333s;
			}
			.lds-spinner div:nth-child(12) {
			  -webkit-transform: rotate(330deg);
			  transform: rotate(330deg);
			  -webkit-animation-delay: 0s;
			  animation-delay: 0s;
			}
			.lds-spinner {
			  width: 152px !important;
			  height: 152px !important;
			  -webkit-transform: translate(-76px, -76px) scale(0.76) translate(76px, 76px);
			  transform: translate(-76px, -76px) scale(0.76) translate(76px, 76px);
			}
			</style></div>
		<div id="CI"></div>
	</div>

	<script type="text/javascript" src="lib/package.js"></script>

	<!--[if lte IE 9]>
	<script type="text/javascript" src="lib/jquery.ah-placeholder.js"></script>
	<![endif]-->
	<script type="text/javascript" src="lib/jquery.flickable-1.0b3.js"></script>
	<script type="text/javascript" src="lib/jquery.bottom-1.0.js"></script>
	<link rel="stylesheet" href="css/jquery.fancybox.min.css" />
	<script src="lib/jquery.fancybox.min.js"></script>
	<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
	<script type="text/javascript" src="lib/load-image.all.min.js"></script>



	<script>
	function openFacebook(){
	    window.open('https://www.facebook.com/sharer.php?u=http://pearl.pitcom.jp/');
	}
	function openTwitter(){
		var string = "";
	    window.open('https://twitter.com/intent/tweet?text='+encodeURIComponent(""));
	}
	</script>
	<script type="text/javascript" src="app/johoo.coffee"></script>

</body>
</html>
