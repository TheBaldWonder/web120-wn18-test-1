<?php
//BIG Config file!

/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6Ld92jQUAAAAAGdOQV4QsuyrZA3XOiZZ3Yof3gf3";
$secretKey = "6Ld92jQUAAAAAHD2--PFDXngUUviQhltUF1RBxlq";


define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


switch(THIS_PAGE)
{
    case 'index.php':
        $title = 'Jonathan Heilman: WEB120 Big Website';
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'flexbox.php':
        $title = 'Flexbox Research';
        $logo = '';
        $PageID = 'Flexbox Research';
    break;
        
    case 'gallaries.php':
        $title = 'Gallaries Research';
        $logo = '';
        $PageID = 'Gallaries Research';
    break;
        
    case 'map.php':
        $title = 'Google Map';
        $logo = '';
        $PageID = 'Responsive Google Map';
    break;

    case 'calendar.php':
        $title = 'Calendar';
        $logo = '';
        $PageID = 'Google Calendar';
    break;
        
    case 'youtube.php':
        $title = 'Youtube';
        $logo = '';
        $PageID = 'Youtube Video';
    break;   
        
    case 'parallax.php':
        $title = 'Parallax Research';
        $logo = '';
        $PageID = 'Parallax Research';
    break;
        
    case 'siteapp.php':
        $title = 'Responsive vs. Native Web Research';
        $logo = '';
        $PageID = 'Responsive vs. Native Web Research';
    break;
        
    case 'shoppingcarts.php':
        $title = 'Shopping Cart Research';
        $logo = '';
        $PageID = 'Shopping Cart Research';
    break; 
        
    case 'webcam.php':
        $title = 'Live Webcams';
        $logo = '';
        $PageID = 'Live Webcams';
    break; 
        
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
    break;
}
