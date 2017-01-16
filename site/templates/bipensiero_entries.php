<?php

include('./_head.php'); // include header markup ?>

<div id='content'><?php

    // output bodycopy
    echo $page->body;

    // output 'headline' if available, otherwise 'title'
    foreach($page->entry_bipensiero_test as $entry_bipensiero) {
        echo "<h2>{$page->title_bipensiero_entry}</h2><p>";
        if($page->image_bipensiero_entry) {
            echo "<img src='{$page->image_bipensiero_entry->size(100,100)->url}'>";
        }
        echo "Citazione: {$page->body_bipensiero_entry}";
    }

    ?>

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


