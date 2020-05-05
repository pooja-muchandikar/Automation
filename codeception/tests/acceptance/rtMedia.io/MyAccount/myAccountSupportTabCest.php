<?php

use Page\Constants as ConstantsPage;
use Page\userAccount as userAccountPage;

class myAccountSupportTabCest
{

    public function registerWorks(AcceptanceTester $I)
    {

        $I->amOnPage( '/' );

        $userAccountLogin = new userAccountPage( $I );
        $userAccountLogin->userAccountLogin();

        // $I->executeJS( ConstantsPage :: $userAccountSupportTab );
        $I->click(['xpath'=> '//ul/li/li/li/li/a[@href="#support"]']);
        $I->wait(2);


    }

}

?>