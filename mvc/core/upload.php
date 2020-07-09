<?php 
    class upload{
        public $rootfile;
        function __construct()
        {
            $this->rootfile = helper::ROOTF;
        }        
        public function Default(){
        }
        public function uploadOneImageHotel($file,$hotelName){
           if(isset($file)){
                $target_dir = $this->rootfile.'\public\uploads\hotel/';
                $target_file = $target_dir. basename($file['name']);
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                $maxFileSize = 500000;
                $allowType = ['png','jpg','jpeg'];
                if(!getimagesize($file['tmp_name'])){
                    return -1;
                }
                if($file['size'] > $maxFileSize){
                    return -1;
                }
                if(!in_array($imageFileType,$allowType)){
                    return -1;
                }
                $hotelName = helper::replaceOneLetter("-",$hotelName);
                $newName = strtotime("now")."-".$hotelName."-".$file['name'];
                move_uploaded_file($file['tmp_name'],$target_dir.$newName);
                return $newName;
           }
           else{
                return -1;
           }
        }
    }
?>