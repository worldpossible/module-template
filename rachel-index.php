<!-- This is a rachel-index.php file. It is the file that RACHEL uses to
     display your module on the RACHEL front page. You should place this file
     in your module's directory. It's under 50 lines including comments, so
     just read it through and edit as needed for your module, leaving the PHP
     tags in place.
-->

<div class="indexmodule">

<!-- Search form - uncomment this section only if you set up search
     functionality. See the RACHEL search documentation for details.
-->
<!--
<form action="<?php echo $dir ?>/search/search.php">
<input name="query" id="<?php echo $moddir ?>_search" autocomplete="off">
<input type="submit" value="Search">
</form>
-->

<!-- Logo and link to your module's index.html - PHP will fill the path to your
     module's directory, so just complete the path from there. To support
     filesystem browsing, it is recommended that you include the full
     filename, even if it is "index.html", instead of relying on the server.
-->
<a href="<?php echo $dir ?>/index.html">
<img src="<?php echo $dir ?>/logo.png" alt="">
</a>

<!-- Title and link to your module's index.html - same as above. -->
<h2><a href="<?php echo $dir ?>/index.html">Module Title</a></h2>

<!-- Description of your module -->
<p>This is a wonderful module that will make the world a better place.</p>

<!-- Links to specific parts of your content - only required if it makes sense.
     Try to keep the list size reasonable (i.e. not too long). You can make
     multi-column lists by adding "double", "triple", or "quad" as the <ul>
     class. For example, <ul class="double"> will create a two-column list.
-->
<ul>
<li><a href="<?php echo $dir ?>/topic1.html">Topic 1</a></li>
<li><a href="<?php echo $dir ?>/topic2.html">Topic 2</a></li>
<li><a href="<?php echo $dir ?>/topic3.html">Topic 3</a></li>
</ul>

<!-- And you're done! -->
</div>
