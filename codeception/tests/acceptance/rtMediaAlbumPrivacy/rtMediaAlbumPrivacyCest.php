<?php


use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class rtMediaAlbumPrivacyCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {

      echo "...Album Privacy...";

      $loginPage = new LoginPage( $I );
      $loginPage->loginAsAdmin();

      $I->moveMouseOver( ConstantsPage :: $mouseOver );
      $I->wait(2);
      $I->click( ConstantsPage :: $mediaMouseOver );
      $I->scrollTo( ConstantsPage :: $scrollContainer );
      $I->wait(2);

      $I->seeElement( ConstantsPage :: $optionsList );
      $I->click( ConstantsPage :: $optionsList );
      $I->seeElement( ConstantsPage :: $modalLink );
      $I->click( ConstantsPage :: $modalLink );

      $I->seeElement( ConstantsPage :: $albumName );
      $I->fillField( ConstantsPage :: $albumName, ConstantsPage :: $albumNameStr );

      $I->seeElement( ConstantsPage :: $albumDescription );
      $I->fillField( ConstantsPage :: $albumDescription, ConstantsPage :: $albumDescriptionStr );

      $I->seeElement( ConstantsPage :: $privacySelect );
      $I->selectOption('select#rtmedia_select_album_privacy', '60');

      $I->seeElement( ConstantsPage :: $createAlbum );
      $I->click( ConstantsPage :: $createAlbum );

      $I->click( ConstantsPage :: $popupClose );
      $I->wait(2);

      echo ".....Album Privacy Set.....";   
    


    }
}

?>