<?php
if (!defined("IN_ESO")) exit;

class classic extends Skin {

var $name = "classic";
var $version = "1.0";
var $author = "Andromeda-Z";
var $numberOfColors = 27;

// Add stylesheets and a favicon to the page header.
function init()
{
	global $config;
    $this->eso->addToFooter("Skin by Andromeda-Z <a href='https://github.com/andromeda-Z/classic'>(view it on github)</a>", "10");
	$this->eso->addCSS("skins/{$config["skin"]}/base.css");
	$this->eso->addCSS("skins/{$config["skin"]}/classic.css");
	$this->eso->addCSS("skins/{$config["skin"]}/ie6.css", "ie6");
	$this->eso->addCSS("skins/{$config["skin"]}/ie7.css", "ie7");
	$this->eso->addToHead("<link rel='shortcut icon' type='image/ico' href='skins/{$config["skin"]}/favicon.ico'/>");
    $this->eso->addToHead("<!-- classic skin by Andromeda-Z https://github.com/andromeda-Z/classic -->");
}

// Generate button HTML.
function button($attributes)
{
	$class = $id = $style = ""; $attr = " type='submit'";
	foreach ($attributes as $k => $v) {
		if ($k == "class") $class = " $v";
		elseif ($k == "id") $id = " id='$v'";
		elseif ($k == "style") $style = " style='$v'";
		else $attr .= " $k='$v'";
	}
	return "<span class='button$class'$id$style><input$attr/></span>";
}

}

?>
