<?php

use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class removeRatingsCest
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

      //remove ratings from media
      $I->seeElement( ConstantsPage :: $itemThumbnail );
      $I->click( ConstantsPage :: $itemThumbnail );
      $I->wait(2);
      $I->moveMouseOver( ConstantsPage :: $avgRating );
      $I->wait(2);
      $I->seeElement( ConstantsPage :: $undoRating );
      $I->click( ConstantsPage :: $undoRating );
      echo ".....Rating Removed!!.....";
      $I->click( ConstantsPage :: $closelightbox );
      $I->wait(2);
      

    }

}

?>
