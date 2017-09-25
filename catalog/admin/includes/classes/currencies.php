<?php
/*
  $Id: currencies.php,v 1.3 2003/06/20 16:23:08 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

////
// Class to handle currencies
// TABLES: currencies
  class currencies {
    var $currencies;

// class constructor
    function currencies() {
      $this->currencies = array();
      $currencies_query = tep_db_query("select code, title, symbol_left, symbol_right, decimal_point, thousands_point, decimal_places, value from " . TABLE_CURRENCIES);
      while ($currencies = tep_db_fetch_array($currencies_query)) {
	    $this->currencies[$currencies['code']] = array('title' => $currencies['title'],
                                                       'symbol_left' => $currencies['symbol_left'],
                                                       'symbol_right' => $currencies['symbol_right'],
                                                       'decimal_point' => $currencies['decimal_point'],
                                                       'thousands_point' => $currencies['thousands_point'],
                                                       'decimal_places' => $currencies['decimal_places'],
                                                       'value' => $currencies['value']);
      }
    }

// class methods
    function format($number, $calculate_currency_value = true, $currency_type = DEFAULT_CURRENCY, $currency_value = '') {
      if ($calculate_currency_value) {
        $rate = ($currency_value) ? $currency_value : $this->currencies[$currency_type]['value'];
        $format_string = $this->currencies[$currency_type]['symbol_left'] . number_format($number * $rate, $this->currencies[$currency_type]['decimal_places'], $this->currencies[$currency_type]['decimal_point'], $this->currencies[$currency_type]['thousands_point']) . $this->currencies[$currency_type]['symbol_right'];
// if the selected currency is in the european euro-conversion and the default currency is euro,
// the currency will displayed in the national currency and euro currency
        if ( (DEFAULT_CURRENCY == 'EUR') && ($currency_type == 'DEM' || $currency_type == 'BEF' || $currency_type == 'LUF' || $currency_type == 'ESP' || $currency_type == 'FRF' || $currency_type == 'IEP' || $currency_type == 'ITL' || $currency_type == 'NLG' || $currency_type == 'ATS' || $currency_type == 'PTE' || $currency_type == 'FIM' || $currency_type == 'GRD') ) {
          $format_string .= ' <small>[' . $this->format($number, true, 'EUR') . ']</small>';
        }
      } else {
        $format_string = $this->currencies[$currency_type]['symbol_left'] . number_format($number, $this->currencies[$currency_type]['decimal_places'], $this->currencies[$currency_type]['decimal_point'], $this->currencies[$currency_type]['thousands_point']) . $this->currencies[$currency_type]['symbol_right'];
      }

      return $format_string;
    }

// QuickPay added start 
    function calculate($number, $calculate_currency_value = true, $currency_type = '', $currency_value = '', $currency_decimal_point = '', $currency_thousands_point = '@') {
      global $currency;

      if (empty($currency_type)) $currency_type = $currency;
      if (empty($currency_decimal_point)) $currency_decimal_point = $this->currencies[$currency_type]['decimal_point'];
      if ($currency_thousands_point == '@') $currency_thousands_point = $this->currencies[$currency_type]['thousands_point'];
      
      $number_display = $number; 
      if ($calculate_currency_value) {
          $rate = (tep_not_null($currency_value)) ? $currency_value : $this->currencies[$currency_type]['value'];
          $number_display = $number * $rate;
      }
      return number_format($number_display, $this->currencies[$currency_type]['decimal_places'], $currency_decimal_point, $currency_thousands_point); 
    }

    function get_number($number_string, $currency_type = '', $currency_decimal_point = '', $currency_thousands_point = '@') {
      global $currency;

      if (empty($currency_type)) $currency_type = $currency;
      if (empty($currency_decimal_point)) $currency_decimal_point = $this->currencies[$currency_type]['decimal_point'];
      if ($currency_thousands_point == '@') $currency_thousands_point = $this->currencies[$currency_type]['thousands_point'];
      
      $number = str_replace($currency_thousands_point, '', $number_string);     
      $number = str_replace($currency_decimal_point, '.', $number);     
      return (float)$number;
    }
// QuickPay added end

    function get_value($code) {
      return $this->currencies[$code]['value'];
    }

    function display_price($products_price, $products_tax, $quantity = 1, $currency_type = DEFAULT_CURRENCY) {
      return $this->format(tep_round(tep_add_tax($products_price, $products_tax), $this->currencies[$currency_type]['decimal_places']) * $quantity);
    }
  }
?>
