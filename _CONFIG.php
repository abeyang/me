<?php

/*	
	---------------------------------------
	ONE CONFIG FILE TO RULE THEM ALL
	---------------------------------------
	Master file for all of portfolio site
	by Abe Yang, 2013
*/

// When in Development mode, set to false;
// when in Production, set to true
c::set('inproduction', false);

// by default, root is '/'
// set root to /this/is/my/root
// c::set('root', '/');
c::set('root', '/me');

c::set('initials', 'kl');
c::set('name', 'Kareo');
c::set('profession', 'Medical Billing');
c::set('location', 'Irvine, CA');

// <head> info

c::set('description', 'Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.');
c::set('keywords', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo.');

// Analytics info
// If you need to add anything, make sure to also modify the script inside header.php

// TODO...

// core functions

// takes root into account
function url($url) {
	return c::get('root') . $url;
}

?>