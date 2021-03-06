 <div class="menu container frame nofloat">
 	<span class="menu--bg js-menu-bg"></span>
	<div class="menu--items col-lg-3 col-md-6 col-sm-6">
	<!-- Logo + type -->
		<div class="menu--items--item menu-logo col-lg-2 col-md-2 col-sm-2">	
			<div class="menu--items--item--logo--triangle">
				<div class="menu--items--item--logo--triangle--inner"></div>
			</div>
		</div>
		<div class="menu--items--item menu-logo col-lg-10 col-md-10 col-sm-10">		
			<h3 class="menu--items--item--tittle"><?php echo $site->title()?></h3>
		</div>
	</div>
	<div class="menu--items menu-burger js-menu-burger col-lg-3 col-md-6 col-sm-6">
		<!-- Burger menu -->
		<div class="menu--items--item">	
			<button class="hamburger hamburger--collapse" type="button">
  				<span class="hamburger-box">
    			<span class="hamburger-inner"></span>
  				</span>
			</button>  
		</div>
	</div>
	<div class="menu--items menu-lvl-1 js-menu-lvl-1 col-lg-6 col-md-12 col-sm-12">
		<?php foreach( $site->children()->visible() as $nav): ?>
			
			<? if (strtoupper($nav) == 'WORK'): ?>
  				<div class="menu--items--item js-menu-lvl-1--work col-lg-4 col-md-12 col-sm-12">	
					<h3 class="menu--items--item--link">Work</h3>
				</div>
			<? else: ?>
				<div class="menu--items--item col-lg-4 col-md-12 col-sm-12">	
					<h3 class="menu--items--item--link"><?php echo $nav->title(); ?></h3>
				</div>            
			<? endif; ?>
        <?php endforeach ?>
	</div>
	<div class="menu--items menu-lvl-2 js-menu-lvl-2 col-lg-12 col-md-12 col-sm-12">
		<!-- sub menu-->
		<?php foreach( page('work')->children()->visible() as $subnav): ?>
			<div class="menu--items--item col-lg-2 col-md-12 col-sm-12">	
				<h4 class="menu--items--item--link"><?php echo $subnav->title(); ?></h4>
			</div>		
		<?php endforeach ?>
		<div class="menu--items--item col-lg-1 col-md-12 col-sm-12">	
			<h4 class="menu--items--item--link">All </h4>
		</div>
	</div>
 </div>