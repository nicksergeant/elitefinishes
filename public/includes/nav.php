<div class="nav">
		<div class="floatLeft"><img src="<?php echo $sub;?>images/nav_left.gif" alt="" title="" /></div>
		<div class="floatRight"><img src="<?php echo $sub;?>images/nav_right.gif" alt="" title="" /></div>
		<img src="<?php echo $sub;?>images/nav_sep.gif" alt="" title="" />
		<a<?php echo ($page == "home" ? " class=\"navSelected\"" : " class=\"navUnselected\"");?> onclick="this.blur()" title="Home" href="<?php echo $sub;?>">Home</a><img src="<?php echo $sub;?>images/nav_sep.gif" alt="" title="" />
		<a<?php echo ($page == "services" ? " class=\"navSelected\"" : " class=\"navUnselected\"");?> onclick="this.blur()" title="Services" href="<?php echo $sub;?>services/">Services</a><img src="<?php echo $sub;?>images/nav_sep.gif" alt="" title="" />
		<a<?php echo ($page == "photo_gallery" ? " class=\"navSelected\"" : " class=\"navUnselected\"");?> onclick="this.blur()" title="Photo Gallery" href="<?php echo $sub;?>photo_gallery/">Photo Gallery</a><img src="<?php echo $sub;?>images/nav_sep.gif" alt="" title="" />
		<a<?php echo ($page == "contact" ? " class=\"navSelected\"" : " class=\"navUnselected\"");?> onclick="this.blur()" title="Contact" href="<?php echo $sub;?>contact/">Contact</a><img src="<?php echo $sub;?>images/nav_sep.gif" alt="" title="" />
	</div>
