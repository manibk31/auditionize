<?php
use Illuminate\Validation\Validator as IlluminateValidator;

class ValidatorExtended extends IlluminateValidator {

	private $_custom_messages = array(
		"youtube" => "The provided URL is not a valid youtube URL",
		
	);

	public function __construct( $translator, $data, $rules, $messages = array(), $customAttributes = array() ) {
		parent::__construct( $translator, $data, $rules, $messages, $customAttributes );

		$this->_set_custom_stuff();
	}

	/**
	 * Setup any customizations etc
	 *
	 * @return void
	 */
	protected function _set_custom_stuff() {
		//setup our custom error messages
		$this->setCustomMessages( $this->_custom_messages );
	}

	/**
	 * Allow only alphabets, spaces and dashes (hyphens and underscores)
	 *
	 * @param string $attribute
	 * @param mixed $value
	 * @return bool
	 */
	protected function validateYoutube( $attribute, $value ) {
		return (bool) preg_match( "/http(?:s?):\/\/(?:www\.)?youtu(?:be\.com\/watch\?v=|\.be\/)([\w\-\_]*)(&(amp;)?‌​[\w\?‌​=]*)?", $value );
	}

	/**
	 * Allow only alphabets, numbers, and spaces
	 *
	 * @param string $attribute
	 * @param mixed $value
	 * @return bool
	 */

}	//end of class


//EOF
