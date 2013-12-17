<?php

// -----------------------------------------------------------------------------------
// - remove attributes from HTML Tags
// -----------------------------------------------------------------------------------

// http://stackoverflow.com/questions/2994448/regex-strip-html-attributes-except-src/3001582#3001582
$text = '<p id="paragraph" class="green">This is a paragraph with an image <img src="/path/to/image.jpg" width="50" height="75"/></p>';
echo preg_replace("/<([a-z][a-z0-9]*)(?:[^>]*(\ssrc=['\"][^'\"]*['\"]))?[^>]*?(\/?)>/i",'<$1$2$3>', $text);

// http://stackoverflow.com/questions/3026096/remove-all-attributes-from-an-html-tag/#3026235
$text = '<p style="padding:0px;"><strong style="padding:0;margin:0;">hello</strong></p>';
echo preg_replace("/<([a-z][a-z0-9]*)[^>]*?(\/?)>/i",'<$1$2>', $text);

// -----------------------------------------------------------------------------------

