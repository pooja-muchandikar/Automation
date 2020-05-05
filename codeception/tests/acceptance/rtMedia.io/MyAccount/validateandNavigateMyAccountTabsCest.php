<?php

use Page\Constants as ConstantsPage;
use Page\userAccount as userAccountPage;

class validateandNavigateMyAccountTabsCest
{

    public function registerWorks(AcceptanceTester $I)
    {

        $I->amOnPage( '/' );

        $userAccountLogin = new userAccountPage( $I );
        $userAccountLogin->userAccountLogin();
        
        $I->waitForElementVisible( ConstantsPage :: $userAccountLicenseTab );
        $I->executeJS( ConstantsPage :: $userAccountLicenseTab );
        $I->wait(2);
        // $I->executeJS( ConstantsPage :: $userAccountPurcahseHistoryTab );
        // $I->wait(2);
        // $I->executeJS( ConstantsPage :: $userAccountSupportTab );
        // $I->wait(2);
        // $I->executeJS( ConstantsPage :: $userAccountProfileEditorTab );
        // $I->wait(2);
        // $I->executeJS( ConstantsPage :: $userAccountSubscriptionTab );


    }

}

?>