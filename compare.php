<?php

//name servers to compare against
$nameservers = array();
array_push($nameservers,"NS1.GEODNS.NET");
array_push($nameservers,"NS2.GEODNS.NET");
array_push($nameservers,"ns-1238.awsdns-26.org");
array_push($nameservers,"ns-20.awsdns-02.com");
array_push($nameservers,"ns-1803.awsdns-33.co.uk");
array_push($nameservers,"ns-994.awsdns-60.net");


//hosts to compare
$hosts = array(
		"*.barcodegen.syncapse.com",
		"*.chat.syncapse.com",
		"*.ldn.syncapse.com",
		"*.pepsi.syncapse.com",
		"*.test.syncapse.com",
		"*.tor2.syncapse.com",
		"*.tor.syncapse.com",
		"syncapse.com",
		"amanda.syncapse.com",
		"autism1.syncapse.com",
		"autism2.syncapse.com",
		"barcodegen.syncapse.com",
		"bot01.trac.syncapse.com",
		"changemypassword.syncapse.com",
		"chat.syncapse.com",
		"chevy-dream2.syncapse.com",
		"chevy-dream.syncapse.com",
		"ci.syncapse.com",
		"datastore-01.ifolder.syncapse.com",
		"db01.syncapse.com",
		"db2.syncapse.com",
		"db.syncapse.com",
		"debian.syncapse.com",
		"deploy.syncapse.com",
		"dev.autism-stg.syncapse.com",
		"developers.syncapse.com",
		"devmine.syncapse.com",
		"dr.syncapse.com",
		"fanboy.syncapse.com",
		"fpa1.syncapse.com",
		"google.syncapse.com",
		"http1.socialurl.syncapse.com",
		"http2.socialurl.syncapse.com",
		"jive-old.syncapse.com",
		"jive.syncapse.com",
		"las-fb.syncapse.com",
		"lb01.sl.syncapse.com",
		"lb02.sl.syncapse.com",
		"lb1.syncapse.com",
		"lb2.syncapse.com",
		"lb3.syncapse.com",
		"lb.syncapse.com",
		"ldap.syncapse.com",
		"ldn.syncapse.com",
		"manage.syncapse.com",
		"nexus.syncapse.com",
		"oldmine.syncapse.com",
		"pass.syncapse.com",
		"pepsi.syncapse.com",
		"platform-s3.syncapse.com",
		"psftp.syncapse.com",
		"psmine.syncapse.com",
		"puppetmaster.syncapse.com",
		"qa.autism-stg.syncapse.com",
		"respond-api.syncapse.com",
		"respond-db-prod.syncapse.com",
		"sentiment2.syncapse.com",
		"share.syncapse.com",
		"site.syncapse.com",
		"social-sync-rep.syncapse.com",
		"social-trac.syncapse.com",
		"socialsupply.syncapse.com",
		"socialtalk-respond.syncapse.com",
		"socialtalk.syncapse.com",
		"spmine.syncapse.com",
		"stats.syncapse.com",
		"status.syncapse.com",
		"stella1.syncapse.com",
		"stella2.syncapse.com",
		"stella3.syncapse.com",
		"stella.syncapse.com",
		"stg.autism-stg.syncapse.com",
		"support.syncapse.com",
		"svn01.syncapse.com",
		"svn02.syncapse.com",
		"svn0.syncapse.com",
		"syme.syncapse.com",
		"syncapseqrgen.syncapse.com",
		"testbed.syncapse.com",
		"tor3.syncapse.com",
		"tor.syncapse.com",
		"voice.syncapse.com",
		"webaccess.ifolder.syncapse.com",
		"wiki.syncapse.com",
		"www01.trac.syncapse.com",
		"admin-uat.platform.syncapse.com",
		"admin.autism.syncapse.com",
		"admin.budlight.nfl.syncapse.com",
		"admin.platform.syncapse.com",
		"admin.platform-stage.syncapse.com",
		"admin.platform-uat.syncapse.com",
		"admin.prod.keiths1820.syncapse.com",
		"autism.syncapse.com",
		"autodiscover.syncapse.com",
		"bbplaybook.syncapse.com",
		"bbplaybook1.syncapse.com",
		"bbplaybook2.syncapse.com",
		"bbplaybook3.syncapse.com",
		"bbplaybook4.syncapse.com",
		"bigdata01.syncapse.com",
		"build.syncapse.com",
		"central.platform.syncapse.com",
		"demo.webdashboard.syncapse.com",
		"dev.bigdata01.syncapse.com",
		"dev.pentaho01.syncapse.com",
		"dev.webdashboard.syncapse.com",
		"fb.prod.keiths1820.syncapse.com",
		"ftp.syncapse.com",
		"health.syncapse.com",
		"ifolder.syncapse.com",
		"justforlaughs.syncapse.com",
		"lb.fb.prod.keiths1820.syncapse.com",
		"logic.budlight.nfl.syncapse.com",
		"logic.prod.keiths1820.syncapse.com",
		"mail.syncapse.com",
		"modulerenderer.syncapse.com",
		"mx.syncapse.com",
		"new.syncapse.com",
		"pentaho01.syncapse.com",
		"platform.syncapse.com",
		"platform-uat.syncapse.com",
		"puppet.syncapse.com",
		"renderengine.syncapse.com",
		"repo.budlight.nfl.syncapse.com",
		"repo.prod.keiths1820.syncapse.com",
		"respond-api-prod.syncapse.com",
		"respond-db-prod.syncapse.com",
		"respond-db-prod-local.syncapse.com",
		"rim-emea-apac.syncapse.com",
		"sentiment.syncapse.com",
		"server1.syncapse.com",
		"sites.syncapse.com",
		"smtp.syncapse.com",
		"socialapps.syncapse.com",
		"socialapps-nightly.syncapse.com",
		"socialfeeds.syncapse.com",
		"sso.platform.syncapse.com",
		"staging.syncapse.com",
		"stella-lb.syncapse.com",
		"stg.syncapse.com",
		"thrift-uat.platform.syncapse.com",
		"thrift.platform.syncapse.com",
		"thrift.platform-uat.syncapse.com",
		"thumbnails.syncapse.com",
		"track.platform.syncapse.com",
		"training.syncapse.com",
		"trainingdemo.syncapse.com",
		"uidemo.syncapse.com",
		"webdashboard.syncapse.com",
		"webdashboard-db.syncapse.com",
		"webmail.syncapse.com",
		"syncapse.com",
		"syncapse.com",
		"contacts.syncapse.com",
		"contacts.syncapse.com",
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
