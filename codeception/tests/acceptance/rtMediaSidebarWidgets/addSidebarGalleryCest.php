<?php

use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class addSidebarGalleryCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {

      $loginPage = new LoginPage( $I );
      $loginPage->loginAsAdmin();

      $I->seeElement( ConstantsPage :: $appearance );
      $I->click( ConstantsPage :: $appearance );
      $I->amOnPage( ConstantsPage :: $widgetURL );
      $I->scrollTo( ConstantsPage :: $galleryWidget );
      $I->wait(2);
      $I->seeElement( ConstantsPage :: $galleryWidget );
      $I->click( ConstantsPage :: $galleryWidget );
      $I->wait(2);
    //   $I->amOnPage( ConstantsPage :: $widgetURL );


      $I->seeElement( ConstantsPage :: $chooseWidget );
      $I->click( ConstantsPage :: $addWidget );
      $I->wait(2);

      $I->seeElement( ConstantsPage ::  $rtMediaWidget );
      $I->selectOption('#widget-rtmediagallerywidget-wdType', 'Recent Media');



    }

}

?>
