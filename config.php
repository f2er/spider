<?php
/**
 * Created by IntelliJ IDEA.
 * User: chandleryu
 * Date: 12-7-19
 * Time: 上午9:51
 * To change this template use File | Settings | File Templates.
 */

//文件路径，可以是相对路径，也可以是hardlink，带上斜杠
define('FILE_PATH','html/');

//路径下过滤文件名的规则
define('HTML_FILE_NAME_PREG','/wg_.*\.htm(l)?/');

//默认作者名
define('DEFAULT_AUTHOR_NAME','webgame');

//浏览HTML路径，带上斜杠
define('HTML_PATH','http://192.168.50.104:8081/ued/webgame/html/');