<?php

use Page\Login as LoginPage;
use Page\Constants as ConstantsPage;
#use \Codeception\Util\Locator;

class checkoutwithSearchCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $loginPage = new LoginPage( $I );
        $loginPage->loginAsAdmin();
        

        $I->seeElement('#menu-item-149021');
        $I->click('#menu-item-149021');

        $I->seeElement('.search-field');
        $I->fillField('#primary .search-field', 'default album');

        echo "..........Search for Product..........";

        #$I->pressKey('.search-field', \WebDriverKeys::ENTER);
        #$I->pressKey('#primary .search-field');






    }
}

?>