<?php

//name servers to compare against
$nameservers = array();
array_push($nameservers,"ns2.oldnameserver.com");
array_push($nameservers,"ns1.oldnameserver.com);
array_push($nameservers,"ns2.newnameserver.com");
array_push($nameservers,"ns1.newnameserver.com");


//hosts to compare
$hosts = array(
		"website.com",
		"www..website.com",
		"mx.example.com"
		);

//do the compare and echo out the results
foreach($hosts as $host)
{
	//get the results for each name server given the current host
	$results = array();
	foreach($nameservers as $ns)
	{
		$result = getDNS($host,$ns);
		array_push($results,strtolower($result));
		//echo "LOG: $host $ns - $result\n";
	}

	//see if all the results match
	$allmatch = true;
	$compare_result = $results[0];
	foreach($results as $result)
	{
		if($result != $compare_result)
			$allmatch = false;
	}

	//check to see if everything matched or not
	if(!$allmatch)
	{
		echo "WARN: $host does not match on all nameservers\n";
		$count = 0;
		foreach($results as $result)
		{
			echo "[".$nameservers[$count]."] $result\n";
			++$count;
		}
	}
	else
	{
		echo "INFO: $host OK\n";
	}
}

//getdns function to get host name given a name server
function getDNS($host,$ns)
{
	$string = '';
	exec("dig @$ns +short $host 2>&1", $output, $retval);
	if ($retval != 0)
	{
		return "ERROR_NO_RESULT";
	}
	else
	{
		$x=0;
		while ($x < (sizeof($output)))
		{
			$string.= $output[$x];
			$x++;
		}
	}

	if (empty($string))
	{
		return "ERROR_NO_RESULT";
	}
	else if($string[strlen($string)-1] == '.')
	{
		$string = substr($string, 0, -1);
	}

	return $string;
}
