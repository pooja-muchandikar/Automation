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
      $I->seeElement('#tab-rtmedia-general');
      $I->click('#tab-rtmedia-general');
      $I->wait(2);
      $I->seeElement('.rtm-form-checkbox');
      $I->wait(2);
    //   $I->click( ConstantsPage :: $enablePlaylistCheckbox );
    //   $I->click( ConstantsPage :: $saveSettingsButtonBottom );
      echo ".....Playlist Enabled.....!!!";

      $I->moveMouseOver('li#wp-admin-bar-my-account');
      $I->wait(2);
      $I->click('li#wp-admin-bar-my-account-media a');
      $I->scrollTo(['css' => '.rtmedia-container ']);
      $I->click('.rtmedia-item-thumbnail');

      $I->scrollTo('#rtm-media-options-list');
      $I->wait(2);
      $I->click('#rtm-media-options-list');
      $I->wait(2);

      $I->seeElement('#rtmedia-action-button-535');
      $I->click('#rtmedia-action-button-535');
      $I->wait(2);

      $I->seeElement('#rtmp-playlist-form');
      $I->selectOption('select#playlist-list', 'Create Playlist');
      $I->wait(2);

      $I->seeElement('#playlist_name');
      $I->fillField('#playlist_name', 'Playlist');
      $I->seeElement('#rtSelectPrivacy');
      $I->selectOption('select#rtSelectPrivacy', '40');
      $I->seeElement('.add-to-rtmp-playlist');
      $I->click('.add-to-rtmp-playlist');

      echo "Media added to playlist!!!!!";

      $I->click('.rtmedia-container.rtmedia-single-container span.rtm-mfp-close');
      $I->wait(2);

      //Create playlist from playlist tab!!!
     $I->amOnPage('/members/pooja/media/playlist/');
     $I->wait(2);
     $I->seeElement('#rtmedia-media-options');
     $I->click('#rtmedia-media-options');
     $I->seeElement('#rtmedia_playlist_name');
     $I->fillField('#rtmedia_playlist_name', 'My Playlist');
     $I->wait(2);
     $I->seeElement('#rtSelect0');
     $I->selectOption('select#rtSelect0', '40');
     $I->seeElement('#rtmedia_create_new_playlist');
     $I->click('#rtmedia_create_new_playlist');
     echo ".....Favlist Created!!!!.....";

    }
}

?>