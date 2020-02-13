<?php

use Page\Login1 as LoginPage;
use Page\Logout as LogoutPage;
use Page\Constants as ConstantsPage;

class rtMediaPhotoTaggingCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {

      $loginPage = new LoginPage( $I );
      $loginPage->loginAsAdmin();

       $I->amOnPage( '/wp-admin/plugins.php?plugin_status=all' );

       $I->moveMouseOver('li#wp-admin-bar-my-account');
       $I->wait(2);

       $I->click('li#wp-admin-bar-my-account-media a');
       $I->scrollTo(['css' => '.rtmedia-container ']);
       $I->click('.rtmedia-item-thumbnail');
       
       $I->scrollTo('#rtm-media-options-list');
       $I->wait(2);   
       
       $I->seeElement('.button.button.item-button.bp-secondary-action.bp-media-tag-button.rtmedia-action-buttons');
       $I->click('.button.button.item-button.bp-secondary-action.bp-media-tag-button.rtmedia-action-buttons');
       
       $I->seeElement('#rtmedia-tag-form');
       $I->click('#rtmedia-tag-form');
       
       $I->seeElement('#bp-media-tag-input');
       $I->fillField('#bp-media-tag-input', 'user');
       $I->wait(2);
       $I->seeElement('#ui-id-4 > a > span');
       $I->click('#ui-id-4 > a > span');

       $I->wait(2);

       $I->seeElement('.button.button.item-button.bp-secondary-action.rtmedia-action-buttons.bp-media-tag-done-button');
       $I->click('.button.button.item-button.bp-secondary-action.rtmedia-action-buttons.bp-media-tag-done-button');
       $I->wait(2);

       $I->click('.rtmedia-container.rtmedia-single-container span.rtm-mfp-close');

       echo "..........Now check tagging feature in single media page........";

       $I->seeElement('.rtmedia-item-thumbnail');
       $I->openNewTab('.rtmedia-item-thumbnail');

       $I->amOnPage('/members/pooja/media/460/');

       $I->wait(2);

       $I->scrollTo('#rtmedia-tag-form');
       $I->seeElement('.button.button.item-button.bp-secondary-action.bp-media-tag-button.rtmedia-action-buttons');
       $I->click('.button.button.item-button.bp-secondary-action.bp-media-tag-button.rtmedia-action-buttons');

       $I->click('#rtmedia-media-460');
       $I->seeElement('#bp-media-tag-input');
       $I->fillField('#bp-media-tag-input', 'user');
       $I->wait(2);
       $I->seeElement('#ui-id-3 > a > span');
       $I->click('#ui-id-3 > a > span');
       $I->wait(2);

       $I->seeElement('.button.button.item-button.bp-secondary-action.rtmedia-action-buttons.bp-media-tag-done-button');
       $I->click('.button.button.item-button.bp-secondary-action.rtmedia-action-buttons.bp-media-tag-done-button');
       $I->wait(2);

       $I->closeTab();

       $logout = new LogoutPage( $I );
       $logout->logout();
    


    }
}

?>