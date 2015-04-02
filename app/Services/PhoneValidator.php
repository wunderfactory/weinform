<?php namespace App\Services;


use libphonenumber\NumberParseException;
use libphonenumber\PhoneNumberType;
use libphonenumber\PhoneNumberUtil;

class PhoneValidator
{
    /**
     * Validates a phone number field using libphonenumber.
     * @param $attribute
     * @param $value
     * @param $parameters
     * @param $validator
     * @return mixed
     */
	public function phone($attribute, $value, $parameters, $validator)
	{
		$data = $validator->getData();

        if(!$countries = $this->getCountries($parameters, $data, $attribute)){
            return false;
        }

		// Now try each country during validation.
		foreach ($countries as $country) {
			$phoneUtil = PhoneNumberUtil::getInstance();
			try {
				$phoneProto = $phoneUtil->parse($value, $country);
				if ($phoneUtil->isValidNumber($phoneProto)) {
					return $phoneProto;
				}
			}
			catch (NumberParseException $e) {}
		}

		return false;
	}

    public function mobilePhone($attribute, $value, $parameters, $validator)
    {
        if (!$phone = $this->phone($attribute, $value, $parameters, $validator)) return false;
        $phoneUtil = PhoneNumberUtil::getInstance();
        try {
            $type = $phoneUtil->getNumberType($phone);
            if ($type === PhoneNumberType::FIXED_LINE_OR_MOBILE || $type == PhoneNumberType::MOBILE) {
                return true;
            }
        }
        catch (NumberParseException $e) {}

        return false;
    }

    private function getCountries($parameters, $data, $attribute){
        if (!empty($parameters)) {
            $countries = $parameters;
        }
        elseif (isset($data[$attribute.'_country'])) {
            $countries = array($data[$attribute.'_country']);
        }
        else {
            return false;
        }

        // Filter out invalid countries.
        foreach ($countries as $key => $country) {
            if (!$this->phone_country($country)) {
                unset($countries[$key]);
            }
        }
        return $countries;
    }

    /**
     * Provides some arbitrary validation regarding the _country field to only allow
     * country codes libphonenumber can handle.
     * If using a package based on umpirsky/country-list, invalidate the option 'ZZ => Unknown or invalid region'.
     * @param $country
     * @return bool
     */
	public function phone_country($country)
	{
		return (strlen($country) === 2 && ctype_alpha($country) && ctype_upper($country) && $country != 'ZZ');
	}

}