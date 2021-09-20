<?
class MyTestCases extends TestCase
{
    function revertCharacters($text){
      $letters = str_split($text);
      $letters = array_reverse($letters);
      return implode($letters,"");
      // return strrev($text); - простой вариант
    }
    
    public function testSampleTest() {
      $this->assertEquals("321", revertCharacters('123'));
      $this->assertEquals("!dlroW olleH", revertCharacters('Hello World!'));
      $this->assertEquals("!dlroW_o  lleH", revertCharacters('Hell  o_World!'));
    }
}
?>
