<?php 
	$query = "SELECT * FROM pagecontent";

	$result = $db->query($query);
	$pagesAll = $result->fetch_all(MYSQLI_ASSOC);



	function getAll()
	{
		global $pagesAll;
		foreach ($pagesAll as $pageAll)
		{
			echo "
				<tr>
					<td>" . $pageAll['id'] . "</td>
					<td>" . $pageAll['page'] . "</td>
					<td>" . $pageAll['content'] . "</td>
					<td>" . $pageAll['menuoption'] . "</td>
					<td><a href='editPage.php'><i class='glyphicon glyphicon-edit'></i></a>
					<td><a href='deletePage.php'><i class='glyphicon glyphicon-trash'></i></a>
				</tr>";
		}
	}