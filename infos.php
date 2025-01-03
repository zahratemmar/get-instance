<?php
// Get the public IP address
$publicIp = file_get_contents("http://169.254.169.254/latest/meta-data/public-ipv4");

// Get the instance ID
$instanceId = file_get_contents("http://169.254.169.254/latest/meta-data/instance-id");

// Display the information
echo "<h1>EC2 Instance Information</h1>";
echo "<p><strong>Public IP Address:</strong> $publicIp</p>";
echo "<p><strong>Instance ID:</strong> $instanceId</p>";
?>