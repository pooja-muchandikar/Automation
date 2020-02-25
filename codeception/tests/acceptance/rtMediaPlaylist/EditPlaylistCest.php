<?php

use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class EditPlaylistCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {

      $loginPage = new LoginPage( $I );
      $loginPage->loginAsAdmin();

      $I->amOnPage('/members/pooja/media/playlist/');
      $I->wait(2);

      $I->scrollTo( ConstantsPage :: $scrollAll );
      $I->seeElement( ConstantsPage :: $itemThumbnail );
      $I->moveMouseOver( ConstantsPage :: $itemThumbnail );
      $I->seeElement( ConstantsPage :: $nopopup );
      $I->click( ConstantsPage :: $nopopup );
      $I->switchToNextTab();
      $I->wait(2);

      $I->scrollTo( ConstantsPage :: $editorScroll );
      $I->seeElement( ConstantsPage :: $mediaTitle );
      $I->fillField( ConstantsPage :: $mediaTitle, ConstantsPage :: $titleStr );
      $I->seeElement( ConstantsPage :: $playlistPrivacy );
      $I->selectOption('select#rtSelect0', '0');
      $I->seeElement( ConstantsPage :: $playlistDescription );
      $I->fillField( ConstantsPage :: $playlistDescription, ConstantsPage :: $descriptionStr );
      $I->seeElement( ConstantsPage :: $playlistSave );
      $I->click( ConstantsPage :: $playlistSave );
      $I->wait(2);

      echo ".....Playlist Updated Successfully!!!.....";



    }

}

?>