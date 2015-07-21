<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('make a request to file in document root and pass parameter via query string');
$I->amOnPage('/hello.php?name=PHP');
$I->see('Hello PHP');
