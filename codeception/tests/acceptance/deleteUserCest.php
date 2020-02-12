<?php

use Page\Login as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;
#use \Codeception\Util\Locator;

class deleteUserCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $loginPage = new LoginPage( $I );
        $loginPage->loginAsAdmin();

        $I->seeElement('#menu-users');
        $I->click('#menu-users');

        $I->seeElement('#user-search-input');
        $I->fillField('#user-search-input', 'pooja');

        $I->seeElement('#search-submit');
        $I->click('#search-submit');


        $I->seeElement('#user-29086');
        $I->wait(2);
        $I->moveMouseOver('#user-29086');
        $I->seeElement('.row-actions');
        $I->wait(2);
        $I->seeElement('#user-29086 .submitdelete');
        $I->click('#user-29086 .submitdelete');   
        $I->wait(2);

        $I->seeElement('#delete_option0');
        $I->click('#delete_option0');
        #$I->selectOption('select#delete_option0', 'delete');

        $I->seeElement('#submit');
        $I->click('#submit');

        echo ".....User Deleted Successfully.....";

        $logout = new LogoutPage( $I );
        $logout->logout();
        $I->wait(2);

    }

}

?>