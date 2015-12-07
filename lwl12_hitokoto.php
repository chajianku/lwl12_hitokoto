<?php
/*
Plugin Name: 一言
Version: 1.0
Plugin URL: http://blog.lwl12.com
Description: 在站点底部添加一句随机的话
Author: liwanglin12
Author Email: i@lwl12.com
Author aURL: http://blog.lwl12.com
For: 不限
*/
function lwl12_hitokoto_head()
{
    echo '<script type="text/javascript" src="http://api.lwl12.com/hitokoto/?encode=js&charset=utf-8"></script>';
    echo "<style> .hitokoto{ font-weight:bold; } </style>";
    
}
addAction('header', 'lwl12_hitokoto_head');

function lwl12_hitokoto_foot()
{
    echo '<div id=hitokoto><span class="magicflicker">『<script>lwlhitokoto()</script>』</span></div>';
    echo '<script>var elems = $(\'span[class~=magicflicker]\'); for(var i=0; i<elems.length; i++){ magicColor(elems[i]); } function magicColor(elem, t) {t = t || 10;elem = (elem && elem.constructor == String) ? $(elem) : elem;if(!elem){setTimeout(function(){magicColor(elem, t-1);}, 400);return;}if(window.mcHandler == undefined) {window.mcHandler = {elements:[]};window.mcHandler.colorIndex = 0;window.mcHandler.run = function(){var color = ["#CC0000","#9999CC","#CC3366","#669999","#FFCC00","#00CCCC","#CC00CC"][(window.mcHandler.colorIndex++) % 7];for(var i = 0, L=window.mcHandler.elements.length; i<L; i++)window.mcHandler.elements[i].style.color = color;}}window.mcHandler.elements.push(elem);if(window.mcHandler.timer == undefined) {window.mcHandler.timer = setInterval(window.mcHandler.run, 500);}}</script>';
}
addAction('footer', 'lwl12_hitokoto_foot');
?>