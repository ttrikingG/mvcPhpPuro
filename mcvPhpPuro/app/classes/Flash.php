<?php 

namespace app\classes;

class Flash
{
    public static function add($messages)
    {
        foreach($messages as $key => $message){
            if(!isset($_SESSION['flash'][$key])){
                $_SESSION['flash'][$key] = $message;
            }
        }
    }

    public function get($index)
    {
        if(isset($_SESSION['flash'][$index])){
            $messages = $_SESSION['flash'][$index];

            unset($_SESSION['flash'][$index]);

            return isset($messages) ? static::getMessage($messages) : '';
        }

        return '';
    }

    private static function getMessage($messages)
    {
        if(!is_array($messages)){
            return static::singleMessage($messages);
        }

        return static::multipleMessage($messages);
    }

    private static function singleMessage($message)
    {
        return '<span>'.$message.'</span>';
    }

    private static function multipleMessage($messages)
    {
        $list = '<ul>';
        foreach ($messages as $message) {
            $list .= '<li>' . $message . '</li>';
        }
        $list .= '</ul>';

        return $list;  // Retorna a string HTML em vez de ecoá-la
    }

}

