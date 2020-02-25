<?php

use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class PlaylistfromTabCest
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
      
        //Create playlist from playlist tab!!!
      $I->seeElement( ConstantsPage :: $options );
      $I->click( ConstantsPage :: $options );
      $I->seeElement( ConstantsPage :: $rtmediaPlaylistName );
      $I->fillField( ConstantsPage :: $rtmediaPlaylistName, ConstantsPage :: $playlistStr );
      $I->wait(2);
      $I->seeElement( ConstantsPage :: $playlistPrivacy );
      $I->selectOption('select#rtSelect0', '40');
      $I->seeElement( ConstantsPage :: $createPlaylist );
      $I->click( ConstantsPage :: $createPlaylist );
      echo ".....Playlist Created!!!!.....";
      $I->wait(2);

    }
}

?>