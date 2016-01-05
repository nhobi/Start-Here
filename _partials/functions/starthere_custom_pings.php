<?php

function starthere_custom_pings($comment)
{
	    $GLOBALS['comment'] = $comment;
	?>
	<li <?php
	    comment_class();
	?> id="li-comment-<?php
	    comment_ID();
	?>"><?php
	    echo comment_author_link();
	?></li>
	<?php
}