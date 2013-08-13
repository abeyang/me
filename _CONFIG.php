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
c::set('inproduction', true);

// by default, root is '/'
if (c::get('inproduction')) 
	 c::set('root', '/');
else c::set('root', '/me/');

c::set('name', 'Abe Yang');
c::set('profession', 'UX Designer');
c::set('location', 'Irvine, CA');
c::set('email', 'abeyang@gmail.com');
c::set('resume', 'AbeYang-Resume2013.pdf');

// Portfolio / Case Study logic

g::set('cases', array(
	array('id'=>'webapp', 'title'=>'Webapp Design', 'subtitle'=>'Consolidating three products into one', 'short'=>'Webapp', 'company'=>'Turnitin', 'class'=>'turnitin-webapp'),
	array('id'=>'ipad', 'title'=>'iPad Design', 'subtitle'=>'Bringing the flagship product to the iPad', 'short'=>'iPad', 'company'=>'Turnitin', 'class'=>'turnitin-ipad'),
	array('id'=>'explore', 'title'=>'Explorations', 'subtitle'=>'Design explorations and prototypes', 'short'=>'Explore', 'company'=>'Kareo', 'class'=>'kareo-explore'),
	array('id'=>'websites', 'title'=>'Website Design', 'subtitle'=>'Striving for simplicity and elegance', 'short'=>'Website', 'company'=>'Gracepoint', 'class'=>'gracepoint-website')
));

// <head> info

c::set('description', 'The portfolio of Abe Yang. UX/Product Designer. Contains several case studies across different industries, like education and medical billing.');
c::set('keywords', 'UX Product Designer, Irvine, Telecommute, Gracepoint Riverside, acts2fellowship, Interaction and Visual Design, Information Architecture, Layouts');

// Analytics info
// If you need to add anything, make sure to also modify the script inside header.php

// TODO...

// core functions

// takes root into account
function url($url = '') {
	// if (c::get('root')=='' && $url=='') return '/';
	return c::get('root') . $url;
}

?>