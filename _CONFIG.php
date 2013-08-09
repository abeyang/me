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
if (c::get('inproduction')) 
	 c::set('root', '/');
else c::set('root', '/me');

c::set('name', 'Abe Yang');
c::set('profession', 'Product Designer');
c::set('location', 'Irvine, CA');

// Portfolio / Case Study logic

g::set('cases', array(
	array('id'=>'webapp', 'title'=>'Webapp Design', 'subtitle'=>'Consolidating three products into one', 'short'=>'Webapp', 'company'=>'Turnitin', 'class'=>'turnitin-webapp'),
	array('id'=>'ipad', 'title'=>'iPad Design', 'subtitle'=>'Bringing the flagship product to the iPad', 'short'=>'iPad', 'company'=>'Turnitin', 'class'=>'turnitin-ipad')
));

// <head> info

c::set('description', 'Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.');
c::set('keywords', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo.');

// Analytics info
// If you need to add anything, make sure to also modify the script inside header.php

// TODO...

// core functions

// takes root into account
function url($url = '') {
	return c::get('root') . $url;
}

?>