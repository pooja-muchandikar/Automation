<?php

use Page\Constants as ConstantsPage;
use Page\commonFunctions as commonFunctionsPage;

use \Codeception\Util\Locator;

class subscribeToNewsletterCest
{
    public function subscribeNewsletter( AcceptanceTester $I, $verifyEmail = 'true' )
    {
        // $I = $AcceptanceTester;
        $I->amOnPage('/');
        $I->waitForElementVisible( ConstantsPage :: $headerMenu, 20 );
        $I->scrollTo( ConstantsPage :: $formWrapper );

        echo ".......Validate Subscribing to Newsletter.....";

        $I->waitForElementVisible( ConstantsPage::$emailField, 20 );
        $I->fillfield( ConstantsPage::$emailField, ConstantsPage::$textField );

        if ( $verifyEmail = 'true' ) {
            $I->click( ConstantsPage::$validateField );
            $I->see( ConstantsPage:: $successMessage );
        } 

    }
}


?>




