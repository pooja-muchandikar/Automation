<?php

use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class rtMediaAlbumAddRatingCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {

      $loginPage = new LoginPage( $I );
      $loginPage->loginAsAdmin();

      $I->moveMouseOver( ConstantsPage :: $mouseOver );
      $I->wait(2);
      $I->click( ConstantsPage :: $mediaMouseOver );
      $I->scrollTo( ConstantsPage :: $listTab );
      $I->wait(2);
      $I->seeElement( ConstantsPage :: $listTab1 );
      $I->click( ConstantsPage :: $itemAlbum );
      $I->scrollTo( ConstantsPage :: $rtmediaContainer );
      $I->seeElement( ConstantsPage :: $rtMediaRating );
      $I->seeElement( ConstantsPage :: $ratingwidget );
      $I->click( ConstantsPage :: $albumRating );
      $I->wait(2);
      echo ".....Rating added to albums!!.....";
      $I->wait(2);




    }

}

?>