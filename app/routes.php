<?php


/*function isAdmin() {
	return true;
}

Router::Route('/product/view')->host('')->parameter('id', int)
->where(!isAdmin())->controller('ProductViewController')->method('GET')->add();*/

	Router::Map('/', 'TicketController');
	Router::Map('ticket', 'TicketController');
	Router::Map('account', 'AccountController');
	Router::Map('profile', 'ProfileController');
	Router::Map('filter', 'FilterController');
?>
