<?php
// This file was auto-generated from sdk-root/src/data/ec2-instance-connect/2018-04-02/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>AWS EC2 Connect Service is a service that enables system administrators to publish temporary SSH keys to their EC2 instances in order to establish connections to their instances without leaving a permanent authentication option.</p>', 'operations' => [ 'SendSSHPublicKey' => '<p>Pushes an SSH public key to a particular OS user on a given EC2 instance for 60 seconds.</p>', ], 'shapes' => [ 'AuthException' => [ 'base' => '<p>Indicates that either your AWS credentials are invalid or you do not have access to the EC2 instance.</p>', 'refs' => [], ], 'AvailabilityZone' => [ 'base' => NULL, 'refs' => [ 'SendSSHPublicKeyRequest$AvailabilityZone' => '<p>The availability zone the EC2 instance was launched in.</p>', ], ], 'EC2InstanceNotFoundException' => [ 'base' => '<p>Indicates that the instance requested was not found in the given zone. Check that you have provided a valid instance ID and the correct zone.</p>', 'refs' => [], ], 'InstanceId' => [ 'base' => NULL, 'refs' => [ 'SendSSHPublicKeyRequest$InstanceId' => '<p>The EC2 instance you wish to publish the SSH key to.</p>', ], ], 'InstanceOSUser' => [ 'base' => NULL, 'refs' => [ 'SendSSHPublicKeyRequest$InstanceOSUser' => '<p>The OS user on the EC2 instance whom the key may be used to authenticate as.</p>', ], ], 'InvalidArgsException' => [ 'base' => '<p>Indicates that you provided bad input. Ensure you have a valid instance ID, the correct zone, and a valid SSH public key.</p>', 'refs' => [], ], 'RequestId' => [ 'base' => NULL, 'refs' => [ 'SendSSHPublicKeyResponse$RequestId' => '<p>The request ID as logged by EC2 Connect. Please provide this when contacting AWS Support.</p>', ], ], 'SSHPublicKey' => [ 'base' => NULL, 'refs' => [ 'SendSSHPublicKeyRequest$SSHPublicKey' => '<p>The public key to be published to the instance. To use it after publication you must have the matching private key.</p>', ], ], 'SendSSHPublicKeyRequest' => [ 'base' => NULL, 'refs' => [], ], 'SendSSHPublicKeyResponse' => [ 'base' => NULL, 'refs' => [], ], 'ServiceException' => [ 'base' => '<p>Indicates that the service encountered an error. Follow the message\'s instructions and try again.</p>', 'refs' => [], ], 'String' => [ 'base' => NULL, 'refs' => [ 'AuthException$Message' => NULL, 'EC2InstanceNotFoundException$Message' => NULL, 'InvalidArgsException$Message' => NULL, 'ServiceException$Message' => NULL, 'ThrottlingException$Message' => NULL, ], ], 'Success' => [ 'base' => NULL, 'refs' => [ 'SendSSHPublicKeyResponse$Success' => '<p>Indicates request success.</p>', ], ], 'ThrottlingException' => [ 'base' => '<p>Indicates you have been making requests too frequently and have been throttled. Wait for a while and try again. If higher call volume is warranted contact AWS Support.</p>', 'refs' => [], ], ],];