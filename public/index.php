<?php

header('Content-Type: application/json; charset=utf-8');
http_response_code(200);

print json_encode([
    'code' => 200,
    'status' => 'Success'
]);