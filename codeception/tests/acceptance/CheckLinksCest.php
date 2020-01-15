$I->amOnPage('/');
$I->scrollTo(['css' => '.entry-content>.home-page-premium-features']);
$I->amOnPage('/');
$I->seeElement('.wp-block-image');
$I->click(' .wp-block-image img ');
