<?php namespace Wundership;


use Webpatser\Countries\Countries;

class ExtendedCountries extends Countries {

	//

    public function getPhoneAttribute() {
        return $this->name.' (+'.$this->calling_code.')';
    }

}
