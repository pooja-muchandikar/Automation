<?php

use Page\Constants as ConstantsPage;
use \Codeception\Util\Locator;

class ValidateformCest
{
    public function frontpageworks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->seeElement( ConstantsPage :: $headerMenu );
        $I->scrollTo( ConstantsPage :: $formWrapper );

        echo ".......Validate Subscribing to Newsletter.....";

        $I->seeElement( ConstantsPage::$emailField );
        $I->fillfield( ConstantsPage::$emailField, ConstantsPage::$textField );

        $I->click( ConstantsPage::$validateField );

        echo ".......Validation Done!!!.....";



    }
}

?>




