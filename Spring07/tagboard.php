<?php
	if (isset($_REQUEST['addtag']) && $_REQUEST['addtag'] == "yes") {
		$query = "INSERT INTO rachel_tagboard (name, comment, datetime) VALUES ('{$_REQUEST['tagboard_name']}', '{$_REQUEST['tagboard_comment']}', '".mktime()."')";
		mysql_query($query);
	}

	$query = "select name,comment,datetime from rachel_tagboard order by datetime desc";
	$result = mysql_query($query);
	while(list($name,$comment,$date) = mysql_fetch_row($result)) {
		$tagboard[] = array("name"=>$name,"comment"=>$comment,"date"=>$date);
	}
	
	if (isset($_REQUEST['get_form'])) {
		echo <<<HTML
		<form name="tagboard" action="" method="post">
			<input type="hidden" id="addtag" name="addtag" value="" />
			Name: <input name="tagboard_name" id="tagboard_name" /><br />
			Comment: <textarea name="tagboard_comment" id="tagboard_comment"></textarea>
			<input type="button" value="Add" onclick="document.getElementById('addtag').value='yes'; document.tagboard.submit();" />
		</form>
HTML;
	} else {
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
	<div id="form_holder">
		<h3 style="text-align:right;font-size:14pt;margin-top:1px;"><a href="http://www.rljart.com/blog/wp-content/themes/melon2/tagboard.php?get_form" onclick="getForm.click(this.href);return false;">click here to leave a message</a></h3>
	</div>
</div>
<?php
	}
?>