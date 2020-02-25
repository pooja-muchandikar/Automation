//Edit Media Privacy

$I->seeElement('.rtmedia-list-item-a');
$I->click('.rtmedia-list-item-a');

$I->scrollTo('#rtm-media-options-list');
$I->wait(2);
$I->click('.button.rtmedia-edit.rtmedia-action-buttons.button');
$I->wait(2);

$I->scrollTo('.rtmedia-container.rtmedia-single-container.rtmedia-media-edit');
$I->seeElement('#rtSelect0');
$I->selectOption('#rtSelect0', '40');
$I->click('input.button.rtm-button.rtm-button-save');
$I->wait(2);

echo ".....Media Privacy Edited successfully.....";