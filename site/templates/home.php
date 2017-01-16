<?php

include('./_head.php'); // include header markup ?>

	<div id='content'><?php
	
		// output 'headline' if available, otherwise 'title'
		echo "<h1>" . $page->get('headline|title') . "</h1>";
	
		// output bodycopy
		echo $page->body;

		foreach($page->entry_bipensiero_test as $entry_bipensiero) {
			echo "<h2>{$entry_bipensiero->title_bipensiero_entry}</h2><p>";
			echo "<h3>{$entry_bipensiero->topic_bipensiero_entry}</h3><p>";
			if($entry_bipensiero->image_bipensiero_entry) {
				echo "<img src='{$entry_bipensiero->image_bipensiero_entry->size(100,100)->url}'>";
			}
			echo "Citazione: {$entry_bipensiero->body_bipensiero_entry}";
		}

		// render navigation to child pages
		renderNav($page->children);
	
	?></div><!-- end content -->
	
	<div id='sidebar'><?php
	
		if(count($page->images)) {
	
			// if the page has images on it, grab one of them randomly... 
			$image = $page->images->getRandom();
			
			// resize it to 400 pixels wide
			$image = $image->width(400);
			
			// output the image at the top of the sidebar...
			echo "<img src='$image->url' alt='$image->description' />";
		}
	
		// output sidebar text if the page has it
		echo $page->sidebar;
	
	?></div><!-- end sidebar -->

<?php include('./_foot.php'); // include footer markup ?>


