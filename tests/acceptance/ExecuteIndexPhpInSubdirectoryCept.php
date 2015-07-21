<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('execute index.php in subdirectory');
$I->amOnPage('/dir1/');
$I->see('Hello subdirectory');
