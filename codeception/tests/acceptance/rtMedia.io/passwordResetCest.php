<?php

use Page\Constants as ConstantsPage;
use Codeception\Util\Shared\Asserts;

class passwordResetCest 
{

    public function resetPassword(AcceptanceTester $I, $confirmMessage, $checkEmail = 'true')
    {
        $I->amOnPage( '/' );
        $I->amOnPage( ConstantsPage :: $myAccount );

        $I->waitForElementVisible( ConstantsPage :: $lostPasswordLink, 20 );
        $I->click( ConstantsPage :: $lostPasswordLink );
        
        $I->waitForElementVisible( ConstantsPage :: $userLogin, 20 );
        $I->fillField( ConstantsPage :: $userLogin, ConstantsPage :: $userName );

        if ( $checkEmail = 'true' ) {
            $I->waitForElementVisible( ConstantsPage :: $userSubmit, 20 );
            $I->click( ConstantsPage :: $userSubmit );
        } else{
            echo nl2br( ConstantsPage :: $errorStr ); 
        }    

    }
}