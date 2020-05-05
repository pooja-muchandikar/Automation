<?php

use Page\Constants as ConstantsPage;

class userRegistrationCest 
{

    public function registerWorks(AcceptanceTester $I)
    {
        
        $I->amOnPage( '/' );
        $I->amOnPage( ConstantsPage :: $myAccount );

        $I->waitForElementVisible( ConstantsPage :: $userRegisterLink, 20 );
        $I->click( ConstantsPage :: $userRegisterLink );

        $I->waitForElementVisible( ConstantsPage :: $userLogin, 20 );
        $I->fillField( ConstantsPage :: $userLogin, ConstantsPage :: $newUserStr );
        $I->waitForElementVisible( ConstantsPage :: $newUserEmail, 20 );
        $I->fillField( ConstantsPage :: $newUserEmail, ConstantsPage :: $newUserEmailStr );
        $I->waitForElementVisible( ConstantsPage :: $userSubmit, 20 );
        $I->click( ConstantsPage :: $userSubmit );

        echo ".....Registration Done Successfully. Please check your email!.....";

    }
}