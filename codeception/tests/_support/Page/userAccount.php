<?php
namespace Page;

use Page\Constants as ConstantsPage;

class userAccount {
    protected $tester;
	public function __construct( \AcceptanceTester $I ) {
		$this->tester = $I;
    }

    public function userAccountLogin() {

        $I = $this->tester;

        $I->waitForElementVisible( ConstantsPage :: $userAccount, 20 );
        $I->click( ConstantsPage :: $userAccount );
        
        $I->waitForElementVisible( ConstantsPage :: $userLogin, 20 );
        $I->fillField( ConstantsPage :: $userLogin, ConstantsPage :: $userLoginStr );

        $I->waitForElementVisible( ConstantsPage :: $userPass, 20 );
        $I->fillField( ConstantsPage :: $userPass, ConstantsPage :: $userPassStr );

        $I->waitForElementVisible( ConstantsPage :: $userSubmit, 20);
        $I->click( ConstantsPage :: $userSubmit );

    }


}

?>
