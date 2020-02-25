<?php

use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class enableMediaRatingsCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {

      $loginPage = new LoginPage( $I );
      $loginPage->loginAsAdmin();

      $I->amOnPage( ConstantsPage ::  $rtMediaSettingsUrl );

      // $I->scrollTo( ConstantsPage :: $scrolltowrapper );
      // $I->click( ConstantsPage :: $enableRating );
      // $I->wait(2);

      echo ".....Media Ratings Option enabled.....";
      $I->wait(3);
      $I->pauseExecution();




    }

}

?>