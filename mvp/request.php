<?php

require "config.inc.php";

function get_link()
{
	global $app_config;
	$link = mysqli_connect($app_config['mysql_hostname'], $app_config['mysql_username'], $app_config['mysql_password']);
	mysqli_select_db($link, $app_config['mysql_database']);
	return $link;
}

function get_estados()
{
	$ret = array();
	$link = get_link();
	$sql = "SELECT id, uf, nome FROM tb_estados ORDER BY nome ASC;";
	$result = mysqli_query($link, $sql);
	
	if (mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_assoc($result))
		{
			$item = array();
			$item['id'] = $row['id'];
			$item['uf'] = $row['uf'];
			$item['nome'] = $row['nome'];
			$ret[] = $item;
		}
	}
	
	return json_encode($ret);
}

if (isset($_GET) && isset($_GET['action']))
{
	switch ($_GET['action'])
	{
		case "estados":
			header("Content-type: application/json; charset=UTF8");
			print get_estados();
			break;
	}
}

?>
