<?php

/* TODO - load as path_* , env /folder/conf */

return [
    
    'debug' => false,

    'url' => 'crud-api.uk.to',
    
    'storage' => realpath(__DIR__.'/../Storage/'),
    
    'www' => realpath(__DIR__.'/../../www/'),
    
    'Schema' => realpath( __DIR__.'/../Classes/Schema/' )
];

?>