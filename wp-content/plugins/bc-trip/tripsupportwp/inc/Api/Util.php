<?php


namespace Inc\Api;


class Util
{
    static function get_star(string $star)
    {

    	if(empty($star))
	    {
		    return [0, 0];
	    }

	    $len_star=strlen($star);
	    if($len_star==1)
	    {
		    $part1=$star;
		    $part2='0';
		    return [$part1, $part2];
	    }
	    list($part1, $part2)= explode('.', $star);
	    if(empty($part1)) $part1='0';
	    if(empty($part2)) $part2='0';
	    return [$part1, $part2];
    }

    static function show_dateTime($dateTime)
    {
        return date("Y M d", strtotime($dateTime));
    }

}