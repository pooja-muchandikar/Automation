<?php


use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class rtMediaAlbumPrivacyEditCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {

      echo "...Album Privacy...";

      $loginPage = new LoginPage( $I );
      $loginPage->loginAsAdmin();

      $I->moveMouseOver( ConstantsPage :: $mouseOver );
      $I->wait(2);
      $I->click( ConstantsPage :: $mediaMouseOver );
      $I->scrollTo( ConstantsPage :: $scrollActivity );
      $I->seeElement( ConstantsPage :: $navAlbum );
      $I->click( ConstantsPage :: $navAlbum );
      $I->seeElement( ConstantsPage :: $itemThumbnail );
      $I->click( ConstantsPage :: $itemThumbnail );
      $I->wait(2);

      $I->scrollTo( ConstantsPage :: $scrollAll );
      $I->seeElement( ConstantsPage :: $optionsList );
      $I->click( ConstantsPage :: $optionsList );
      $I->seeElement( ConstantsPage :: $editOption );
      $I->click( ConstantsPage :: $editOption );
      $I->wait(2);

      $I->scrollTo( ConstantsPage :: $scrollAll );
      $I->wait(2);
      $I->seeElement( ConstantsPage :: $privacySelect );
      $I->selectOption('select#rtmedia_select_album_privacy', '40');
      $I->seeElement( ConstantsPage :: $saveAlbum );
      $I->click( ConstantsPage :: $albumSubmit );
      $I->wait(2);

      echo ".....Album Privacy Updated Successfully....!!";

      $logout = new LogoutPage( $I );
      $logout->logout();
     

    }

}

?>