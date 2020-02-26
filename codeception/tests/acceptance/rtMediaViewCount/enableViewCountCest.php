<?php

use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class enableViewCountCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {

      $loginPage = new LoginPage( $I );
      $loginPage->loginAsAdmin();

      $I->amOnPage( ConstantsPage ::  $rtMediaSettingsUrl );
    //   $I->seeElement( ConstantsPage :: $enableViewCount );
    //   $I->click( ConstantsPage :: $enableViewCount );
    $I->click('input#rtm-form-checkbox-1');
      $I->wait(2);

      echo ".....View Count Enabled!!.....";

    }

}

?>