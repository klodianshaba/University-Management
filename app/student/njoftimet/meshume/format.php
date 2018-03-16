<?php  
/**
*Format klas
*/
class Format{
    public function formatDate($date){
       return date('F J, Y,g:i a', strtotime($date));
    }
    public function meshume($text, $limit = 280){
        $text = $text. " ";
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text.".....";
        return $text;
        
    }
    public function meshum($text, $limit = 240){
        $text = $text. " ";
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text.".....";
        return $text;
        
    }
     public function titulli($text, $limit = 35){
        $text = $text. " ";
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text.".....";
        return $text;
        
    }
}


?>
 