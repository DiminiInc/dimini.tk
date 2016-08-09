<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-71776322-1', 'auto');
		ga('send', 'pageview');
        </script>
	<link rel ="shortcut icon" href="/site_files/dimini_favicon.ico">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
<style>
body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td{
	margin:0;
	padding:0;
}
table{
	border-collapse:collapse;
	border-spacing:0;
}
fieldset,img{
	border:0;
}
address,caption,cite,code,dfn,th,var{
	font-style:normal;
	font-weight:normal;
}
caption,th{
	text-align:left;
}
h1,h2,h3,h4,h5,h6{
	font-size:100%;
	font-weight:normal;
}
q:before,q:after{
	content:'';
}
abbr,acronym{
	border:0;
}
	#header{
		text-align:center;
		background-color:#ddd;
		padding:1px;
		padding-top:8px;
	}

	#header a{
		text-decoration:none;
		color:#000;
	}
	#mainmenu img{
		vertical-align:middle;
		display:inline;
		height:50px;
		width:50px;
	}

	#mainmenu{
	  	display:inline;
		width:100%;
		list-style:none;
		margin-bottom:10px;

	}

	#mainmenu li{

		position:relative;
		display:inline;
		z-index:10;
	}

	#mainmenu li a{
		display:inline;
		color:#000;
		background:#ddd;
		font-family: Futura, Tahoma, Sans-Serif;
		font-size:200%;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-right: 30px;
		padding-left: 30px;
		position:center;

	}

	#mainmenu li a:hover{
		background:#eee;
	}

	#mainmenu ul{
		list-style:none;
		position:absolute;
		left:-9999px; 
	}

	#mainmenu ul li{
		float:none;
	}

	#mainmenu ul a{
		white-space:nowrap; 
		display:block;

		font-size:150%;
	}

	#mainmenu li:hover ul{ 
		left:0;
		
		text-align: center;
	}

	#mainmenu li:hover ul li a:hover{ 
		background:#eee;
	}

	@media (max-width: 850px) {
	#mainmenu{
		display: none;
	}

	.menuelements li:not(:first-child) {
		display: none;
	}
}
	@media (min-width:851px){
		#mainmenumobile{
			display:none;
		}
	}
	.menuelements.show li {
		display: block;
	}
	.menuelements img{
		width:50px;
		height:50px;
		vertical-align:middle;
	}
	.menuelements a{
		font-size:200%;
		font-family: Futura, Tahoma, Sans-Serif;
		
	}
	.menuelements ul a{
		font-size:150%;
	}


</style>

<script>
function myFunction() {
    var x = document.getElementById("mainmenumobile");
    if (x.className === "menuelements") {
        x.className += " show";
    } else {
        x.className = "menuelements";
    }
}
</script>

<meta name="viewport" content="initial-scale=1">
<div id="header">
	<div id="main_menu">
		<ul id="mainmenu">
			<li><a href="/"><img src="/site_files/dimini_icon.png"/></a></li>
			<li>
				<a href="/news">News</a>
			</li>
			<li>
				<a href="/software">Software</a>
				<ul>
					<li><a href="/software/snake">Snake</a></li>
					<li><a href="/software/disearch">Dimini Search</a></li>		
				</ul>
			</li>
			<li>
				<a href="/testdrive">Testdrive</a>
				<ul class="submenu">
					<li><a href="/testdrive/browsers">Browsers comparison</a></li>
					<li><a href="main.html">Smartphones comparison</a></li>
					<li><a href="main.html">Search engines comparison</a></li>
					<li><a href="main.html">Social networks comparison</a></li>	
				</ul>
			</li>
			<li>
				<a href="/about_us">About us</a>
			</li>
		</ul>
		<ul id="mainmenumobile" class="menuelements">
			<li><a href="javascript:void(0);" onclick="myFunction()"><img src="/site_files/dimini_icon.png"/>Menu</a></li>
			<li>
				<a href="/">Home</a>
			</li>
			<li>
				<a href="/news">News</a>
			</li>
			<li>
				<a href="/software">Software</a>
				<ul>
					<li><a href="/software/snake">Snake</a></li>
					<li><a href="/software/disearch">Dimini Search</a></li>		
				</ul>
			</li>
			<li>
				<a href="/testdrive">Testdrive</a>
				<ul class="submenu">
					<li><a href="/testdrive/browsers">Browsers comparison</a></li>
					<li><a href="main.html">Smartphones comparison</a></li>
					<li><a href="main.html">Search engines comparison</a></li>
					<li><a href="main.html">Social networks comparison</a></li>	
				</ul>
			</li>
			<li>
				<a href="/about_us">About us</a>
			</li>
		</ul>
	</div>
</div>

		<div id="content" class="site-content">					