<?php

use Page\Constants as ConstantsPage;

class passwordResetCest 
{

    public function registerWorks(AcceptanceTester $I)
    {
        $I->amOnPage( '/' );
        $I->amOnPage( ConstantsPage :: $myAccount );

        $I->waitForElementVisible( ConstantsPage :: $lostPasswordLink, 20 );
        $I->click( ConstantsPage :: $lostPasswordLink );
        // $I->amOnPage( ConstantsPage :: $forgotPassword );
        $I->waitForElementVisible( ConstantsPage :: $userLogin, 20 );
        $I->fillField( ConstantsPage :: $userLogin, ConstantsPage :: $userName );

        $I->waitForElementVisible( ConstantsPage :: $userSubmit, 20 );
        $I->click( ConstantsPage :: $userSubmit );

        echo ".....Password Reset Link Sent Successfully.....";
        
    }
}