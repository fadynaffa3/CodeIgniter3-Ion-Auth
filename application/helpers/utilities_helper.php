<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('t'))
{
  function t($word = '')
  {
    $word = trim($word);
    $translated = 'No Dictionary';
    $lang = lang();
    $CI = & get_instance();
    if(!empty($word) && strpos($word,' ') == False )
    {
      $CI->lang->load('dictionary', $lang);
      $translated = $CI->lang->line('language_key');
      if(!empty($translated))
        return $translated;
      else
      {
        $translated_array = explode("_", $word);
        foreach ($translated_array as $k => $v)
          if(strlen($v) > 1)
            $translated_array[$k] = ucfirst($v);
        $translated = implode(" ", $translated_array);
      }
    }
    return $translated;
  }
}
if ( ! function_exists('lang'))
{
  function lang()
  {
    $CI = & get_instance();
    $lang = $CI->session->userdata('lang');
    if (empty($lang)) $lang = 'english';
    return $lang;
  }
}
