<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('execute index.php in subdirectory when REQUEST_URI refers to deeper non-existing subdirectory');
$I->amOnPage('/dir1/dir2');
$I->see('Hello subdirectory1');
