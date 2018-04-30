<?php

return [
	'sandbox_url' => env('MOOTA_SANDBOX_URL','http://moota.matamerah.com'),
	'live_url' => env('MOOTA_LIVE_URL','https://app.moota.co'),
	'api_key' => env('MOOTA_API_KEY',''),
	'api_timeout' => env('MOOTA_API_TIMEOUT',30),
	'sdk_mode' => env('MOOTA_SDK_MODE','production'),
	'use_unique_code' => env('MOOTA_USE_UNIQUE_CODE',true),
	'unique_mode' => env('MOOTA_UNIQUE_MODE',null),
	'unique_min' => env('MOOTA_UNIQUE_MIN',null),
	'unique_max' => env('MOOTA_UNIQUE_MAX',null),
];