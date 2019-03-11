<?php
/*
 |  Snicker     A small Comment System 4 Bludit
 |  @file       ./system/snicker-template.class.php
 |  @author     SamBrishes <sam@pytes.net>
 |  @version    0.1.0
 |
 |  @website    https://github.com/pytesNET/snicker
 |  @license    X11 / MIT License
 |  @copyright  Copyright © 2018 - 2019 SamBrishes, pytesNET <info@pytes.net>
 */
    if(!defined("BLUDIT")){ die("Go directly to Jail. Do not pass Go. Do not collect 200 Cookies!"); }

    abstract class SnickerTemplate{
        /*
         |  REQUIRED :: FORM
         */
        abstract public function form($username = "", $email = "", $title = "", $message = "");

        /*
         |  REQUIRED :: COMMENT
         */
        abstract public function comment($comment, $key);

        /*
         |  REQUIRED :: PAGINATION
         */
        abstract public function pagination($loction, $cpage, $limit, $count);
    }
