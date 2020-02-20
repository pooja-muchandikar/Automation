<?php

use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class rtMediaPlaylistCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {

      $loginPage = new LoginPage( $I );
      $loginPage->loginAsAdmin();
      $I->amOnPage( '/wp-admin/plugins.php?plugin_status=all' );

      $I->amOnPage( ConstantsPage :: $rtMediaSettingsUrl );
      $I->wait(2);
      $I->seeElement( ConstantsPage :: $tabGeneral );
      $I->click( ConstantsPage :: $tabGeneral );
      $I->wait(2);
      $I->seeElement('.rtm-form-checkbox');
      $I->wait(2);
      echo ".....Playlist Enabled.....!!!";

      $I->moveMouseOver( ConstantsPage :: $mouseOver );
      $I->wait(2);
      $I->click( ConstantsPage :: $mediaMouseOver );
      $I->scrollTo( ConstantsPage :: $scrollContainer );
      $I->click( ConstantsPage :: $itemThumbnail );
      $I->wait(2);

      $I->scrollTo( ConstantsPage :: $optionsList );
      $I->wait(2);
      $I->click( ConstantsPage :: $optionsList );
      $I->wait(2);

      $I->seeElement( ConstantsPage :: $addPlaylist );
      $I->click( ConstantsPage ::  $addPlaylist );
      $I->wait(2);

      $I->seeElement( ConstantsPage :: $playlistForm );
      $I->selectOption('select#playlist-list', 'Create Playlist');
      $I->wait(2);

      $I->seeElement( ConstantsPage :: $playlistName );
      $I->fillField( ConstantsPage :: $playlistName , ConstantsPage :: $playlistStr );
      $I->seeElement( ConstantsPage :: $privacy );
      $I->selectOption('select#rtSelectPrivacy', '40');
      $I->seeElement( ConstantsPage :: $playlistAdd );
      $I->click( ConstantsPage :: $playlistAdd );
      echo "Media added to playlist!!!!!";
      $I->click( ConstantsPage :: $close );
      $I->wait(2);

    }
}

?>