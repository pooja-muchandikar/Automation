<?php

namespace Page;
use Page\Constants as ConstantsPage;

class Login 
{
    #protected $tester;
    #public function __construct( \AcceptanceTester $I ) {
	#	$this->tester = $I;
	#}
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('https://rtcamp:goodwork@rtmedia-dev.rtm.rt.gw/');
        $I->see('Home');
        $I->amOnPage( '/wp-admin' );
        $I->seeElement( ConstantsPage::$wpUserNameField );
		$I->fillfield( ConstantsPage::$wpUserNameField, $wpUserName );
		$I->seeElement( ConstantsPage::$wpPasswordField );
		$I->fillfield( ConstantsPage::$wpPasswordField, $wpPassword );
		$I->click( ConstantsPage::$wpSubmitButton );
		$I->waitForElement( ConstantsPage::$wpDashboard, 10 );
    }
}

