<?php
// PHP placeholder images
// Version: 0.1
// Author: Hinerangi Courtenay - @sky_maiden
// Usage (all parameters are optional):
// <img src="placeholder.php?size=400x150&bg=eee&fg=999&text=Generated+image" alt="Placeholder image" />
// Inspired by http://placehold.it/

header ("Content-type: image/png");

// Convert hex to rgb (modified from csstricks.com)
function hex2rgb($colour)
{
    $colour = preg_replace("/[^abcdef0-9]/i", "", $colour);
    if (strlen($colour) == 6)
    {
        list($r, $g, $b) = str_split($colour, 2);
        return Array("r" => hexdec($r), "g" => hexdec($g), "b" => hexdec($b));
    }
    elseif (strlen($colour) == 3)
    {
        list($r, $g, $b) = array($colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2]);
        return Array("r" => hexdec($r), "g" => hexdec($g), "b" => hexdec($b));    
    }
    return false;
}
// Dimensions
function array_get($arr, $key, $default=NULL)
{
    return isset($arr[$key]) ? $arr[$key] : $default;
}

$path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
$path_info = trim($path_info, '/');
$args = explode('/', $path_info);
$size = array_get($args, 0, '100x100');
$bg = array_get($args, 1, 'ccc');
$fg = array_get($args, 2, '555');
$dimensions = explode('x', $size);
// Create image

$image      = imagecreate($dimensions[0], $dimensions[1]);
// Colours
$bg         = hex2rgb($bg);
$setbg      = imagecolorallocate($image, $bg['r'], $bg['g'], $bg['b']);
$fg         = hex2rgb($fg); 
$setfg      = imagecolorallocate($image, $fg['r'], $fg['g'], $fg['b']);
// Text
$text       = array_get($_GET, 'text', $size);
$text       = str_replace('+', ' ', $text);
// Text positioning
$fontsize   = 4;
$fontwidth  = imagefontwidth($fontsize);    // width of a character
$fontheight = imagefontheight($fontsize);   // height of a character
$length     = strlen($text);                // number of characters
$textwidth  = $length * $fontwidth;         // text width
$xpos       = (imagesx($image) - $textwidth) / 2;
$ypos       = (imagesy($image) - $fontheight) / 2;
// Generate text
imagestring($image, $fontsize, $xpos, $ypos, $text, $setfg);
// Render image
imagepng($image);
