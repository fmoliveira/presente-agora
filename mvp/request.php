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
	$sql = "SELECT id, nome FROM tb_estados ORDER BY nome ASC;";
	$result = mysqli_query($link, $sql);
	
	if (mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_assoc($result))
		{
			$item = array();
			$item['id'] = $row['id'];
			$item['nome'] = $row['nome'];
			$ret[] = $item;
		}
	}
	
	return json_encode($ret);
}

function get_cidades($id)
{
	$ret = array();
	$link = get_link();
	$sql = sprintf("SELECT id, nome FROM tb_cidades WHERE estado = %d;", $id);
	$result = mysqli_query($link, $sql);
	
	if (mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_assoc($result))
		{
			$item = array();
			$item['id'] = $row['id'];
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
			
		case "cidades":
			if (isset($_GET['id'])) {
				header("Content-type: application/json; charset=UTF8");
				print get_cidades($_GET['id']);
			}
			break;
	}
}

?>
