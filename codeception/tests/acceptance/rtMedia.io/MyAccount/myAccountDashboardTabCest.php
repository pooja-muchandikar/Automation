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

        $I->waitForElementVisible( ConstantsPage :: $eddDownloadZip );
        $I->click( ConstantsPage :: $eddDownloadZip );

        $I->waitForElementVisible( ConstantsPage :: $downloadHistoryTabCreateTicket, 20 );
        $I->click( ConstantsPage :: $downloadHistoryTabCreateTicket, 20 );

        // $I->waitForElementVisible( ConstantsPage :: )

    }

}

?>