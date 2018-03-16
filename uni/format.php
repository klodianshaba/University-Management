<?php  
/**
*Format klas
*/
class Format{
    public function formatDate($date){
       return date('F, Y,g:i a', strtotime($date));
    }
    public function meshume($text, $limit = 380){
        $text = $text. " ";
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text.".....";
        return $text;
        
    }
     public function titulli($text, $limit = 45){
        $text = $text. " ";
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text."...";
        return $text;
        
    }
}


?>
 