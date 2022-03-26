<?php
namespace elibrary\view;
class view
{
    public static function make($view,$params=[]){
        $basecontent=self::getBaseContent();
        $viewcontent=self::getViewContent($view,$params);
        echo str_replace('{{content}}',$viewcontent,$basecontent);

    }
    public static function makeError($error){
        self::getViewContent($error,true);

    }
    protected static function getBaseContent(){
        ob_start();
        include base_path().'views/layouts/main.php';
        return ob_get_clean();

    }
    protected static function getViewContent($view,$isError=false,$params=[]){
        $path=$isError?view_path().'errors/':view_path();
        if(str_contains($view,'.')){
            $views=explode('.',$view);
            foreach ($views as $view) {
                if (is_dir($path . $view)) {
                    $path=$path .$view . '/';
                    # code...
                }
            }
            $view=$path . end($views) .'.php';
            
        }
        else{
            $view=$path . $view . '.php';
        }
        foreach ($params as $param => $value) {
            $$param=$value;
        }
        if ($isError) {
            include $view;
        }
        else{
            ob_start();
            include $view;
            return ob_get_clean();
        }

    }

}