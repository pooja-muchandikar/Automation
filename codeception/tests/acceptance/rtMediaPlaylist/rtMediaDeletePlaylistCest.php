<?php

use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class DeletePlaylistCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {

      $loginPage = new LoginPage( $I );
      $loginPage->loginAsAdmin();

      $I->moveMouseOver( ConstantsPage :: $mouseOver );
      $I->wait(2);
      $I->click( ConstantsPage :: $mediaMouseOver );
      $I->amOnPage('/members/pooja/media/playlist/');
      $I->wait(2);

      $I->scrollTo( ConstantsPage :: $scrollAll );
      $I->seeElement( ConstantsPage :: $itemThumbnail );
      $I->moveMouseOver( ConstantsPage :: $itemThumbnail );
      $I->seeElement( ConstantsPage :: $deletePlaylist );
      $I->click( ConstantsPage :: $deletePlaylist );
      $I->wait(2);
      $I->acceptPopup();

      echo ".....Playlist Deleted Successfully!!!!.....";

      $logout = new LogoutPage( $I );
      $logout->logout();
     


    }

}

?>