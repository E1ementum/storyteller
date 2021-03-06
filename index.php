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
					<div class="jas_clear"></div>
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
					<div class="jas_clear"></div>
				</div>
			</div>
			<div class="p3">
				<div class="content">
					<div class="t1">Featured Articles</div>
					<div class="t2">The gentlemen who rented the room would sometimes take their evening meal at home in the living room that was used by everyone, and so the door to this room was often kept closed in the  </div>
					<div class="i1"></div>
				</div>
			</div>
			<div class="p4">
				<div class="content">
					<div class="t1">Clients</div>
					<div class="i1">
					</div>
				</div>
			</div>
			<div class="p5">
				<div class="content">
					<div class="t1">Portfolio & Screenshots</div>
					<div class="t2">The gentlemen who rented the room would sometimes take their evening meal at home in the living room that was used by everyone, and so the door to this room was often kept closed in the  </div>
					<div class="b1"></div>
					<div class="b2">
						<div class="menu jas_noselect">
							<div class="t3 jas_noselect"><span>Art</span></div>
							<div class="t3 jas_noselect"><span>Mestery</span></div>
							<div class="t3 jas_noselect"><span>Illusion</span></div>
							<div class="t3 jas_noselect"><span>Travel</span></div>
							<div class="t3 jas_noselect"><span>Paintings</span></div>
						</div>							
					</div>
				</div>
			</div>
			<div class="p6">
				<div class="content_2">
					<div class="i1"></div>
				</div>
			</div>
			<div class="p7">
				<div class="content">
					<div class="i1"></div>
					<div class="t1">Happiness cannot be traveled to, owned, earned, or worn. It is the spiritual experience of living every minute with love, grace & gratitude.</div>
					<div class="t2">Denis Waitley</div>
				</div>
			</div>
			<div class="p8">
				<div class="content">
					<div class="t1">Team Members</div>
					<div class="t2">The gentlemen who rented the room would sometimes take their evening meal at home in the living room that was used by everyone, and so the door to this room was often kept closed in the  </div>
					<div class="b1">
						<div class="b2_v1">
							<div class="i1"></div>
							<div class="t1_v1">JAMES PHILLY</div>
							<div class="t2_v1">Lead Developer</div>
						</div>
						<div class="b2_v2">
							<div class="i2"></div>
							<div class="t1_v2">CACTUS JACK</div>
							<div class="t2_v2">3D Model Designer</div>
						</div>
						<div class="b2_v3">
							<div class="i3"></div>
							<div class="t1_v3">JACK SPARROW</div>
							<div class="t2_v3">Master of All Trade</div>
						</div>
						<div class="b2_v4">
							<div class="i4"></div>
							<div class="t1_v4">YAGA SQUARHEAD</div>
							<div class="t2_v4">Manages Money</div>
						</div>																							
					</div>
				</div>
			</div>
			<div class="p9">
				<div class="content">
					<div class="t1">Facts & Numbers</div>
					<div class="b1">
						<div class="b2">
							<div class="t2">110</div>
							<div class="b4"></div>
							<div class="t3">successful projects</div>
							<div class="t4">30</div>
							<div class="b4"></div>
							<div class="t3">open source plugins</div>							
						</div>
						<div class="b3">
							<div class="t2">25</div>
							<div class="b4"></div>
							<div class="t3">awesome clients</div>
							<div class="t4">13</div>
							<div class="b4"></div>
							<div class="t3">open source themes</div>
						</div>						
					</div>

				</div>
			</div>
			<div class="p10">
				<div class="content">
					<div class="b1">
						<div class="b1_v1">
							<div class="t1_v1">Travel / 21st March, 2014</div>
							<div class="t2_v1">A New Product Is Coming</div>
							<div class="t3_v1">The office assistant was the boss's man, spineless, and with no understanding. What about if he reported sick? But that would be extremely strained and suspicious as in fifteen years of service Gregor had never.</div>
						</div>
						<div class="b1_v2"></div>
					</div>
					<div class="b2">
						<div class="b2_v1"></div>
						<div class="b2_v2">
							<div class="t1_v2">Gadget / 3rd March, 2014</div>
							<div class="t2_v2">Jimmy’s New Xbox Controller</div>
							<div class="t3_v2">The office assistant was the boss's man, spineless, and with no understanding. What about if he reported sick? But that would be extremely strained and suspicious as in fifteen years of service Gregor had never.</div>
						</div>						
					</div>
					<div class="b3">
						<div class="b1_v1">
							<div class="t1_v3">Travel / 21st March, 2014</div>
							<div class="t2_v1">A New Product Is Coming</div>
							<div class="t3_v1">The office assistant was the boss's man, spineless, and with no understanding. What about if he reported sick? But that would be extremely strained and suspicious as in fifteen years of service Gregor had never.</div>
						</div>
						<div class="b3_v2"></div>						
					</div>
				</div>
			<div class="jas_clear"></div>
			</div>
			<div class="p11">
				<div class="content">
					<div class="b1">
						<div class="b2">
							<div class="b2_v1"></div>
							<div class="t1">Another Day In Paradise</div>
							<div class="t2">Travel / 21st March, 2014</div>
						</div>
						<div class="b3">
							<div class="b2_v1"></div>
							<div class="t1">Jimmy’s New Book on Aliens</div>
							<div class="t2">Personal / 21st March, 2014</div>							
						</div>
						<div class="b4">
							<div class="b2_v1"></div>
							<div class="t1">Sarah’s New House</div>
							<div class="t2">Personal / 21st March, 2014</div>							
						</div>
					</div>
				</div>
			<div class="jas_clear"></div>
			</div>
			<div class="p12">
				<div class="content">
					<div class="i1"></div>
					<div class="i2"></div>
					<div class="t1">Happiness cannot be traveled to, owned, earned, or worn. It is the spiritual experience of living every minute with love, grace & gratitude.</div>
					<div class="t2">@loveless</div>
				</div>
			<div class="jas_clear"></div>	
			</div>
			<div class="footer">
				<div class="content">
					<div class="t1">UNICORN</div>
					<div class="t2">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his</div>
					<div class="menu jas_noselect">
						<div class="b1">
							<div class="t3_v1">LINKS</div>
							<div class="t4_v1"><a href="#">Home</a><br><a href="#">About</a><br><a href="#">Services</a><br><a href="#">Menu</a><br><a href="#">Restaurants</a><br><a href="#">Work Hours</a><br><a href="#">Call Hours</a></div>
						</div>
						<div class="b2">
							<div class="t3_v1">FRIENDS</div>
							<div class="t4_v1"><a href="#">Home</a><br><a href="#">About</a><br><a href="#">Services</a><br><a href="#">Menu</a><br><a href="#">Restaurants</a></div>
						</div>
						<div class="b3">
							<div class="t3_v1">SOCIAL</div>
							<div class="t4_v1"><a href="#">Facebook</a><br><a href="#">Twitter</a><br><a href="#">Github</a><br><a href="#">Pinterest</a><br><a href="#">Google Plus</a><br><a href="#">Dribbble</a><br><a href="#">Flickr</a><br><a href="#">Others</a></div>						
						</div>
					</div>
					<div class="b4"></div>
					<div class="t5">One morning, when Gregor Samsa woke from troubled dreams, he found<br>© 2015 Your Awesome Company</div>
					<div class="menu jas_noselect">
						<div class="b5">
							<div class="t6"><a href="#">TERMS</a><a href="#">PRIVACY POLICY</a><a href="#">CONTACT</a><a href="#">JOB</a></div>
						</div>
					</div>					
				</div>
			</div>
			</div>
		</div>
	</body>
</html>
