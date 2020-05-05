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
      $I->wait(2);
      // $I->seeElement( ConstantsPage :: $enableViewCount );

      $I->click("input[name*='viewcount']");


      
      // $I->click( ConstantsPage :: $enableViewCount );
      $I->wait(2);

      echo ".....View Count Enabled!!.....";

    }

}

?>