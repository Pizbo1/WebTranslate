<?php
$data = array("text" => "this is a long test because i am so freaking tired i dont even know what is going on any more and i just want to freaking sleep when this freaking project is freaking over");
$ch = curl_init("http://localhost/work.php");

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

print "here\n";
print $response;
?>
