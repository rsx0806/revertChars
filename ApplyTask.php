<?
class MyTestCases extends TestCase
{
    function revertCharacters($text){
      if (empty($text))
        return NULL;
      $letters = str_split($text);
      $letters = array_reverse($letters);
      return implode($letters,"");
      // return strrev($text); - простой вариант
    }
   
    // Возможен и такой вариант, если использовать как можно меньше функций работающий со строками
    /*function reverseCharacters($text){
      $i=0;
      $length = 0;
      $tempChar = '';
      if (empty($text))
        return NULL;
      for($i = 0; $i < (strlen($text)/2); $i++)
      {
        $tempChar = $text[$i];
        $text[$i] = $text[$length - $i - 1];
        $text[$length - $i - 1] = $tempChar;
      }
      return $text;
    }*/
    
    public function testSampleTest() {
      $this->assertEquals("", revertCharacters(''));
      $this->assertEquals("321", revertCharacters('123'));
      $this->assertEquals("!dlroW olleH", revertCharacters('Hello World!'));
      $this->assertEquals("!dlroW_o  lleH", revertCharacters('Hell  o_World!'));
    }
}
?>
