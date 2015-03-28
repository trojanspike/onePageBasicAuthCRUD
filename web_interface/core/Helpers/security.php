<?php
use App\Config;

/**
 * Does something interesting
 * 28/03/15 , 16:30
 * @param  string    $where  Where something interesting takes place
 * @param  integer  $repeat How many times something interesting should happen
 * @throws Exception If something interesting cannot happen
 * @return Status
 */

if( ! function_exists('api_user_pass') )
{
    function api_user_pass($pass)
    {
        return hash('crc32', Config::get('database.passwordSalt')).hash('haval192,3', $pass).'$';
    }
}

/**
 * Does something interesting
 * 28/03/15 , 16:30
 * @param  string    $where  Where something interesting takes place
 * @param  integer  $repeat How many times something interesting should happen
 * @throws Exception If something interesting cannot happen
 * @return Status
 */

if( ! function_exists('AuthTokenGenerate') )
{
    function AuthTokenGenerate()
    {
        return hash('haval224,3', md5(uniqid()).time()).'.'.str_replace(' ', '#', microtime());
    }
}



/* Add to Gump Filter
|apiUserPass
 */
GUMP::add_filter("apiUserPass", function($value) {
    return api_user_pass($value);
});

?>
