<?php

namespace BurnBright\AnchorField;

use SilverStripe\Forms\DatalessField;

/**
 * Link Action is a field for creating html anchor tags.
 */
class AnchorField extends DatalessField{

	public function Type() {
		return "anchor";
	}

	public function Field($properties = array()) {
		$this->setAttribute('href', $this->value);

		return parent::Field();
	}

}
