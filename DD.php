<html>
	<body bgcolor="khaki">
		<h2>Hello, <?php echo $_GET["name"]; ?>!</h2>
		<h4 style="margin-left:20px">Here's your personality description so far:</h4>
		<table border='1' cellpadding="10" width="60%" style = "margin-left:30px;">
			<tr cellspan="3">
				<th>Name</th>
				<th>Race</th>
				<th>Class</th>
			</tr>
			<tr cellspan="3">
				<td align="center"><?php echo $_GET["name"]; ?></td>
				<td align="center"><?php echo $_GET["race"]; ?></td>
				<td align="center"><?php echo $_GET["class"]; ?></td>
			</tr>
		</table>
		<br/>
		<p>Please click the arrow button to continue to story time.</p>
		<br/>
		<?php
			$storyTIM = "STORY?race=".$_GET["race"]."&class=".$_GET["class"];
			echo "<a href=".$storyTIM." style='margin-left:300px'><img src='http://www.ci.berkeley.ca.us/uploadedImages/Planning_(new_site_map_walk-through)/Level_3_-_General/arrow.gif'></a>";
		?>
	</body>
</html>