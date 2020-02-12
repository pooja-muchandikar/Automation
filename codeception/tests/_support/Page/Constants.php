<?php
namespace Page;
class Constants {
	// Username and Password
	public static $userName = 'pooja.muchandikar';
	public static $password = '1100';

	// public static $userName = 'pujam1';
	// public static $password = '1100';
	
	 // Login Selectors
	 public static $wpUserNameField = 'input#user_login';
	 public static $wpPasswordField = 'input#user_pass';
	 public static $wpSubmitButton = 'input#wp-submit';

	 //Logout Selectors
	 public static $adminBarMenuSelector = '#wp-admin-bar-my-account';
	 public static $logoutLink = '#wp-admin-bar-user-actions #wp-admin-bar-logout a';

	 public static $saveSession = false;

	 public static $emailField = 'input#input_69_1';
	 public static $validateField ='input#gform_submit_button_69';
	 public static $textField = 'puja@rtcamp.com';
	 public static $textField1 = 'abc';

	 //Login for add-ons

	 public static $userName1 = 'pooja';
	 public static $password1 = '1100';

	 public static $wpUserNameField1 = 'input#user_login';
	 public static $wpPasswordField1 = 'input#user_pass';
	 public static $wpSubmitButton1 = 'input#wp-submit';
	 

	 public static $uploadTermsCheckbox = 'input[name="rtmedia_upload_terms_conditions"]';
	 public static $uploadMediaButton = '#rtmedia-upload-container .start-media-upload';
	 public static $startUpload = '.start-media-upload';
	 public static $saveSettingsButtonBottom = '.rtm-button-container.bottom .rtmedia-settings-submit';
	 public static $topSaveButton = '.rtm-button-container.top input.rtmedia-settings-submit';

	 public static $uploadUI = '#rtm_show_upload_ui';
	 public static $privacy = '#rtSelectPrivacy';
	 public static $uploadButton = '#rtMedia-upload-button';
	 public static $uploadFile = 'div.moxie-shim.moxie-shim-html5 input[type=file]';
	 public static $fileList = '#rtmedia_uploader_filelist';
	 public static $mediaUploadLink = '.rtm-media-options.rtm-media-search-enable>*:nth-last-child(2)';



	 //Dummy data
	 public static $audioName = 'dummydata/Music/mpthreetest.mp3';
	 public static $imageName = 'dummydata/Images/images.jpeg';
	 public static $videoName = 'dummydata/Video/test.mp4';


	 public static $uploadURL = 'rtmedia_url_upload_input';
	 public static $uploadFile2 = 'https://pluspng.com/img-png/sunset-png-hd-sunset-sun-holiday-nature-tree-isolated-scenic-960.png';
	 public static $uploadFile1= 'https://s4.aconvert.com/convert/p3r68-cdx67/af3al-i9sm6.jpg';
	 public static $uploadmusicFile = 'https://s21.aconvert.com/convert/p3r68-cdx67/ugvgh-162n1.mp3';
	 public static $uploadvideoFile = 'https://s17.aconvert.com/convert/p3r68-cdx67/o1u69-5sdl2.mp4';
	 
	 public static $rtMediaSettingsUrl = '/wp-admin/admin.php?page=rtmedia-settings';
	 public static $displaySettingsUrl = '/wp-admin/admin.php?page=rtmedia-settings#rtmedia-display';
	 public static $buddypressSettingsUrl = '/wp-admin/admin.php?page=rtmedia-settings#rtmedia-bp';
	 public static $typesSettingsUrl = '/wp-admin/admin.php?page=rtmedia-settings#rtmedia-types';
	 public static $mediaSizeSettingsUrl = '/wp-admin/admin.php?page=rtmedia-settings#rtmedia-sizes';
	 public static $privacySettingsUrl = '/wp-admin/admin.php?page=rtmedia-settings#rtmedia-privacy';
	 public static $customCssSettingsUrl = '/wp-admin/admin.php?page=rtmedia-settings#rtmedia-custom-css-settings';
	 public static $otherSettingsUrl = '/wp-admin/admin.php?page=rtmedia-settings#rtmedia-general';
	 public static $bpComponentsUrl = '/wp-admin/options-general.php?page=bp-components/';


	 public static $enablePlaylistCheckbox = 'input[name="rtmedia-options[general_enablePlaylist]"]';



	 
}
?>