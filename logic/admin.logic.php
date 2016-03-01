<?php 
	$query = "SELECT * FROM pagecontent";

	$result = $db->query($query);
	$pagesAll = $result->fetch_assoc();



	function getAll()
	{
		global $pagesAll;
		foreach ($pagesAll as $pageAll)
		{
			echo "
				<tr>
					<td>" . $pagesAll['content'] . "</td>
				</tr>";
		}

	}