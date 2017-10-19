<!-- <div class="menu frame">
	<div class="menu--container container">
		<div class="menu--container--items col-lg-6 col-md-12 col-sm-12">
			<div class="menu--container--items--item col-lg-12 col-md-11 col-sm-11">
				
				<div class="menu--container--items--item--logo col-lg-1 col-md-1 col-sm-1">	
					<img src="<? echo $site->image($site->logo())->url(); ?>" alt="">
				</div>
				<div class="menu--container--items--item--title col-lg-11 col-md-11 col-sm-11">		
					<h4><?php echo $site->title()?></h4>
				</div>
			</div>
			<div class="menu--container--items--item  col-md-1 col-sm-1">			
				<div class="menu--container--items--item--burger-menu col-xs-12">	
					<img src="<? echo $site->image($site->burgermenu())->url(); ?>" alt="">	
				</div>
			</div>
		</div>	
		<div class="menu--container--items col-lg-6 col-md-12 col-sm-12">
			<div class="menu--container--items--item col-lg-12 col-md-12 col-sm-12 ">
				<div class="menu--container--items--item--menu  col-lg-4 col-md-12 col-sm-12">
				<h4>Work</h4>
				</div>
				
				<div class="menu--container--items--item--menu col-lg-4 col-md-12 col-sm-12">
				<h4>Mood</h4>
				</div>
				
				<div class="menu--container--items--item--menu col-lg-4 col-md-12 col-sm-12">
				<h4>About</h4>
				</div>						
			</div>		
		</div>		
	</div>
</div>
 -->


 <div class="menu frame container">
 	<span class="menu--bg"></span>
	<div class="menu--items col-lg-3 col-md-6 col-sm-6">
	<!-- Logo + type -->
		<div class="menu--items--item menu-logo col-lg-2 col-md-2 col-sm-2">	
			<img class="menu--items--item--logo" src="<? echo $site->image($site->logo())->url(); ?>" alt="">
		</div>
		<div class="menu--items--item menu-logo col-lg-10 col-md-10 col-sm-10">		
			<h4 class="menu--items--item--tittle"><?php echo $site->title()?></h4>
		</div>
	</div>

	<div class="menu--items menu-burger js-menu-burger col-lg-3 col-md-6 col-sm-6">
		<!-- Burger menu -->
		<div class="menu--items--item">	
			<img class="menu--items--item--burger" src="<? echo $site->image($site->burgermenu())->url(); ?>" alt="">	
		</div>
	</div>

	<div class="menu--items menu-lvl-1 js-menu-lvl-1 col-lg-6 col-md-12 col-sm-12">
		
		<!-- menu level 1 -->
		<div class="menu--items--item js-menu-lvl-1--work col-lg-4 col-md-12 col-sm-12">	
			<h4 class="menu--items--item--link">Work</h4>
		</div>
		<div class="menu--items--item col-lg-4 col-md-12 col-sm-12">	
			<h4 class="menu--items--item--link">Mood</h4>
		</div>
		<div class="menu--items--item col-lg-4 col-md-12 col-sm-12">	
			<h4 class="menu--items--item--link">About</h4>
		</div>
	</div>

	<div class="menu--items menu-lvl-2 js-menu-lvl-2 col-lg-12 col-md-12 col-sm-12">
		
		<!-- menu level 2 -->
		<div class="menu--items--item col-lg-2 col-md-12 col-sm-12">	
			<p class="menu--items--item--link">Grafic Design</p>
		</div>
		<div class="menu--items--item col-lg-2 col-md-12 col-sm-12">	
			<p class="menu--items--item--link">Textil Design</p>
		</div>
		<div class="menu--items--item col-lg-2 col-md-12 col-sm-12">	
			<p class="menu--items--item--link">Surface Design</p>
		</div>
		<div class="menu--items--item col-lg-2 col-md-12 col-sm-12">	
			<p class="menu--items--item--link">Interior Design</p>
		</div>
		<div class="menu--items--item col-lg-2 col-md-12 col-sm-12">	
			<p class="menu--items--item--link">Concepting & Trend</p>
		</div>
		<div class="menu--items--item col-lg-1 col-md-12 col-sm-12">	
			<p class="menu--items--item--link">Product Design</p>
		</div>
		<div class="menu--items--item col-lg-1 col-md-12 col-sm-12">	
			<p class="menu--items--item--link">All </p>
		</div>
	</div>


 </div>



































