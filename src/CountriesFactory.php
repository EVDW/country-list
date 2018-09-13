<?php declare(strict_types=1);

namespace EVDW;

class CountriesFactory
{
    /**
     * Get a list of countries in a given locale
     *
     * @param string $locale
     *
     * @return array
     */
    public function getCountries(string $locale): array
    {
        if ($data = include __DIR__.'/data/'.strToLower($locale).'/country.php') {
            return $data;
        }

        return [];
    }

    /**
     * Get the ISO code of a country
     *
     * @param string $locale
     * @param string $countryName
     *
     * @return array
     */
    public function getIsoCode(string $locale, string $countryName): string
    {
        if ($data = include __DIR__.'/data/'.strToLower($locale).'/country.php') {
            $countries = array_flip($data);
            
            return array_key_exists(ucfirst($countryName), $countries) 
                ? $countries[ucfirst($countryName)] 
                : null
            ;
        }

        return null;
    }
}
