<?php 
	$query = "SELECT * FROM pagecontent";

	$result = $db->query($query);
	$pagesAll = $result->fetch_all(MYSQLI_ASSOC);	



	function getAll()
	{
		global $pagesAll;
		foreach ($pagesAll as $pageAll)
		{
			$id = $pageAll['id'];
			echo "
				<tr>
					<td>" . $pageAll['id'] . "</td>
					<td>" . $pageAll['page'] . "</td>
					<td>" . $pageAll['content'] . "</td>
					<td>" . $pageAll['menuorder'] . "</td>
					<td>" . $pageAll['menuoption'] . "</td>
					<td>" . $pageAll['theme'] . "</td>
					<td><a href='../pages/editPage.php?id=" . $id . "'><i class='glyphicon glyphicon-edit'></i></a>
					<td><a href='../pages/deletePage.php?id=" . $id . "'><i class='glyphicon glyphicon-trash'></i></a>
				</tr>";
		}
	}