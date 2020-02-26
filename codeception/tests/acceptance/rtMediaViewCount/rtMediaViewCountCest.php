<?php

use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class rtMediaViewCountCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {

      $loginPage = new LoginPage( $I );
      $loginPage->loginAsAdmin();

      $I->moveMouseOver( ConstantsPage :: $mouseOver );
      $I->wait(2);
      $I->click( ConstantsPage :: $mediaMouseOver );
      $I->scrollTo( ConstantsPage :: $scrollContainer );
      $I->wait(2);

      $I->seeElement( ConstantsPage :: $itemThumbnail );
      $I->click( ConstantsPage :: $itemThumbnail );
      $I->wait(2);

      $I->seeElement( ConstantsPage :: $viewList );
      $I->click( ConstantsPage :: $viewList );
      $I->wait(2);
      $I->seeElement( ConstantsPage :: $closelightbox );
      $I->wait(2);

    }

}

?>