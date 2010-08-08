<?php
	$query = "select name,comment,datetime from rachel_tagboard order by datetime desc";
	$result = mysql_query($query);
	while(list($name,$comment,$date) = mysql_fetch_row($result)) {
		$tagboard[] = array("name"=>$name,"comment"=>$comment,"date"=>$date);
	}
	
?>


<div id="tagboard">
	<h2>leave a message</h2>
	<div id="tags">
	<?php 
		foreach($tagboard as $tag) {
			$background = ($i++ % 2 == 0)?"one":"two";
			
			print "<div class='t $background'>";
			print "<b>" . $tag['name'] . "</b> - " . $tag['comment'];
			print "</div>";
		}
	?>
	</div>
	<form action="" method="post">
		<input type="hidden" name="addtag" value="yes" />
		Name: <input name="tagboard_name" /><br />
		Comment: <textarea name="tagboard_comment"></textarea>
		<input type="submit" value="Add" />
	</form>	
</div>