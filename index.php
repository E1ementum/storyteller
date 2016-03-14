<?php

/*
	skype: Elementum
	vk: https://vk.com/e1ementum
*/



	define('SUBF', '/');
	define('PAGE_VERSION', 0);

	date_default_timezone_set('UTC');
	define('VERSION_SUFFIX', PAGE_VERSION == 0 ? '' : '?vers=' . PAGE_VERSION);

	include('jas-5.4.0/jas.php');
	jas::$path = SUBF . 'jas-5.4.0/';
	jas::utm_save('/');
	jas::dev();

?><!DOCTYPE html>
<!--
	skype: Elementum
	vk: https://vk.com/e1ementum
-->
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<?php jas::style(); ?>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/jas-default.css" media="all" />
		<link rel="stylesheet" href="libs/css/font-awesome.min.css">
		<?php jas::script(); ?>
		<script src="<?=SUBF?>js/script.js<?=VERSION_SUFFIX?>"></script>
		<link rel="icon" type="image/png" href="<?=SUBF?>favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?=SUBF?>favicon-16x16.png" sizes="16x16" />
		<title>STORYTELLER</title>
	</head>
	<body>
		<div class="screen">
			<div class="header">
				<div class="content">
					<div class="b1">
						<div class="t1">UNICORN</div>
					</div>
					<div class="b2">
						<div class="menu jas_noselect">
							<div class="t2 jas_noselect" onclick="jas.page_scroll({target: '.#', offset: 0, speed: 500});"><span>HELLO</span></div>
							<div class="t2 jas_noselect" onclick="jas.page_scroll({target: '.#', offset: 0, speed: 500});"><span>STORIES</span></div>
							<div class="t2 jas_noselect" onclick="jas.page_scroll({target: '.#', offset: 0, speed: 500});"><span>ABOUT</span></div>
							<div class="t2 jas_noselect" onclick="jas.page_scroll({target: '.#', offset: 0, speed: 500});"><span>HOME</span></div>
							<div class="i1"><div class="fa fa-bars"></div></div>
						</div>
					</div>
					<div class="b3">
						<div class="t3">STORYTELLER</div>
						<div class="b4"></div>
						<div class="t4">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</div>
						<div class="btn1">read the rest</div>
					</div>
					<div class="jas_clear"></div>
				</div>
			</div>
			<div class="p1">
				<div class="content">
					<div class="i1"></div>
					<div class="t1">Who & Why</div>
					<div class="t2">The gentlemen who rented the room would sometimes take their evening meal at home in the living room that was used by everyone, and so the door to this room was often kept closed in the evening. But Gregor found it easy to give up having the door open, he had, after all, often failed to make use of it when it was open and, without the family having noticed it, lain in his room in its darkest corner. One time, though, the charwoman left the door.</div>
				</div>
			</div>
			<div class="p2">
				<div class="content">
					<div class="b1">
						<div class="i1"></div>
						<div class="t1">An Wow Feature</div>
						<div class="t2">The gentlemen who rented the room would sometimes take their evening meal at home in the living.</div>
					</div>
					<div class="b2">
						<div class="i2"></div>
						<div class="t3">A Beautiful Feature</div>
						<div class="t4">The gentlemen who rented the room would sometimes take their evening meal at home in the living.</div>
					</div>
					<div class="b3">
						<div class="i3"></div>
						<div class="t5">An Amazing Feature</div>
						<div class="t6">The gentlemen who rented the room would sometimes take their evening meal at home in the living.</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
