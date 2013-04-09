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

c::set('name', 'Kareo Labs');
c::set('profession', 'Medical Billing');
c::set('location', 'Irvine, CA');

c::set('description', 'Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.');
c::set('keywords', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo.');

// core functions
function url($url) {
	// currently returns url -- might need to adjust this later on
	return $url;
}

?>