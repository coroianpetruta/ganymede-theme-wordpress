<form method="get" action="<?php echo home_url(); ?>">
<input type = "search" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>">
<span class="underline"></span>
<button type="submit" id= "search-btn" value=""><i class="fa fa-search" aria-hidden="true"></i></button>
</form>