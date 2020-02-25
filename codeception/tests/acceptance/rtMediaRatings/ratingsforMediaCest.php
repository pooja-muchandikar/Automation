<?php

use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class ratingsforMediaCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {

      $loginPage = new LoginPage( $I );
      $loginPage->loginAsAdmin();

      $I->wait(3);
      $I->moveMouseOver( ConstantsPage :: $mouseOver );
      $I->wait(2);
      $I->click( ConstantsPage :: $mediaMouseOver );
      $I->scrollTo( ConstantsPage :: $scrollContainer );
      $I->wait(3);

      //upload media
      $I->seeElement( ConstantsPage :: $uploadUI );
      $I->click( ConstantsPage :: $uploadUI );
      $I->wait(2);
      $I->seeElement( ConstantsPage :: $privacyElement );
      $I->selectOption('select.rtmedia-user-album-list', '1');
      echo "..........Album Selected..........";

      $I->seeElement( ConstantsPage :: $privacy );
      $I->selectOption('select#rtSelectPrivacy', '40');
      echo "..........Privacy Selected..........";
      
      $I->attachFile( ConstantsPage::$uploadFile, ConstantsPage:: $imageName );

      $I->seeElement( ConstantsPage :: $uploadTermsCheckbox );
      $I->click( ConstantsPage :: $uploadTermsCheckbox );
      $I->wait(2);

      $I->seeElement( ConstantsPage :: $startUpload );
      $I->click( ConstantsPage :: $startUpload );
      $I->wait(3);

      $I->seeElement( ConstantsPage :: $itemThumbnail );
      $I->click( ConstantsPage :: $itemThumbnail );
      $I->wait(3);

      //add ratings to the media
      $I->seeElement( ConstantsPage :: $ratingwidget );
      $I->click( ConstantsPage :: $addrating );
      $I->wait(3);
      echo ".....Rating added!!.....";
      $I->click( ConstantsPage :: $closelightbox );
      $I->wait(3);

    }

}

?>