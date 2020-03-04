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

        $I->seeElement( ConstantsPage :: $userMenu );
        $I->click( ConstantsPage :: $userMenu );

        $I->seeElement( ConstantsPage :: $userSearchInput );
        $I->fillField( ConstantsPage :: $userSearchInput, ConstantsPage :: $userSearchInputStr );

        $I->seeElement( ConstantsPage :: $searchSubmit );
        $I->click( ConstantsPage :: $searchSubmit );


        $I->seeElement( ConstantsPage :: $userID );
        $I->wait(2);
        $I->moveMouseOver( ConstantsPage :: $userID );
        $I->seeElement( ConstantsPage :: $actions );
        $I->waitForElementVisible( ConstantsPage :: $userDeleteSubmitButton, 20 );
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