<?php

/* 
'api' => [noAuth , noAuth] , if empty auth is required - by default
if false -> allow all 
if array [] -> allow noAuth what ever is in array
*/
return [
    'user' => ['POST','GET'],
    'session' => ['POST'],
    'Quotes/NoAuth' => false,
    'Quotes/Auth' => true,
    'test' => false,
    'store' => true
    ]
?>