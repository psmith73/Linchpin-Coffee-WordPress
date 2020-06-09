<?php
/**
 * The template for displaying the search form.
 *
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
		<span style="font: 600 10px Verdana, Geneva, sans-serif;" title="Search our site">Search our Site</span><br />
   	<input onblur="fillsearch()" onfocus="clrsearch()" type="text" id="s" name="s" value="Search for..." accesskey="4" />
    <input type="submit" id="searchsubmit" value="Go" />
</form>