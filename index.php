<?php
ini_set('display_errors',0);

 $domains = array('Google.com', 'poc_zta.in.de', 'p.h.0.pl', '1--3.iNfo',
		'9.xxx', 'face_-_Book.com', 'x.a-b.ww', 'onet..pl', 
		'canon.photo', '-.net', 'wppl', '!x.pl', 'bmw.', 'onet.12', 
		'g._.pl', '.wiki.com', 'micro$oft.com', '_.lt', 
		'wykop.pl.', '.tw', 'p..h.au', 'x.-.uk', 'a.p');

    foreach($domains as $domain) {
        $ret = preg_match('/^([a-z0-9][a-z0-9_\-]*\.)+[a-z]{2,4}$/i', $domain);
        echo $domain, ' = ', $ret, '<br>';
    }
