<?php 

    class helper{

        const ROOTF = 'C:\xampp\htdocs\provider';
        const BASE_URL = 'http://127.0.0.1/provider';

        public static function replaceSpecialCharacter($text){
            $regex = ['/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'];
            return preg_replace($regex,"",$text);
        }
        public static function replaceOneLetter($replace,$string){
            return preg_replace('/\s+/',$replace,$string);
        }
        public static function isLogin(){
            if(isset($_SESSION['isLogin'])){
                return true;
            }
            else{
                return false;
            }
        }
        public static function checkPostExist($arr){
            for ($i=0; $i < count($arr); $i++) { 
                if(isset($_POST[$arr[$i]])){
                    if(empty($_POST[$arr[$i]])){
                        return false;
                    }
                }
                else{
                    return false;
                }
            }
            return true;
        }
        public static function checkGetExist($arr){
            for ($i=0; $i < count($arr); $i++) { 
                if(isset($_GET[$arr[$i]])){
                    if(empty($_GET[$arr[$i]])){
                        return false;
                    }
                }
                else{
                    return false;
                }
            }
            return true;
        }
        public static function returnMessage($result,$successMess,$failMess,$success){
            if($result){
                echo "<script>alert('".$successMess."')</script>";
                header("location:".self::BASE_URL."$success");
            }
            else{
                echo "<script>alert('".$failMess."')</script>"; 
            }
        }
        public static function getCurrentURL(){
            $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                $validURL = str_replace("&", "&amp", $url);
                return $validURL;
        }
        public static function showStar($star){
            $star = floatval($star);
            $realStar = 5 - $star;
            if(round($realStar) - $realStar == 0){
                for ($i=0; $i < 5; $i++) { 
                    if($i < $star){
                        echo ' <span class="icon text-warning"><i class="fas fa-star"></i></span>';
                    }
                    else{
                        echo ' <span class="icon text-warning"><i class="far fa-star"></i></span>';
                    }
                }
            }
            else{
                for ($i=1; $i <= 5; $i++) { 
                    if($i < $star){
                        echo ' <span class="icon text-warning"><i class="fas fa-star"></i></span>';
                        if($i == floor($star)){
                            echo '<span class="icon text-warning">
                            <i class="fas fa-star-half-alt"></i>
                        </span>';
                        }
                    }
                    else{
                        echo ' <span class="icon text-warning"><i class="far fa-star"></i></span>';
                    }
                }
            }
            
        }
        public static function separateNumberFromText($text){
            return preg_replace('/[^0-9]/', '', $text);
        }
        public static function separateLetterFromText($text){
            return preg_replace('/[^a-zA-Z]/', '', $text);
        }
        public static function checkImageExist($data){
            if(empty($data)){
                echo "<img class='image rounded mw-100' src='https://www.yourrooms.com/onlineshop/store_00002/image/cache/data/h4-500x500.jpg' alt=''>";
                return true;
            }
            else{
                return false;
            }
        }
    }
?>