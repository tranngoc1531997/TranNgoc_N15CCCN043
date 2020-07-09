<?php 
    class ajax extends Controller{
        public $AjaxModel;
        function __construct()
        {
            $this->AjaxModel = $this->model('AjaxModel');
        }
        public function Default(){
        }
        public function GetOneDistrict(){
            if(helper::checkPostExist(['id'])){
                $result = $this->AjaxModel->GetOneDistrict($_POST['id']);
                if($result){
                   echo json_encode($result);
                }
                else{
                }
            }
            else{
            }
        }
        public function GetOneWard(){
            if(helper::checkPostExist(['id'])){
                $result = $this->AjaxModel->GetOneWard($_POST['id']);
                if($result){
                   echo json_encode($result);
                }
                else{
                }
            }
            else{
            }
        }

        public function GetOneHotel(){
            if(helper::checkPostExist(['id'])){
                $result = $this->AjaxModel->GetOneHotel($_POST['id']);
                if($result){
                   echo json_encode($result);
                }
                else{
                }
            }
            else{
            }
        }
        public function GetFacilitiesHotel(){
            if(helper::checkPostExist(['id'])){
                $result = $this->AjaxModel->getListfacilitieshotel($_POST['id']);
                if($result){
                   echo json_encode($result);
                }
                else{
                }
            }
            else{
            }
        }
        public function GetFacilitiesRoom(){
            if(helper::checkPostExist(['id','idroom'])){
                $result = $this->AjaxModel->getListfacilitiesroom($_POST['id'],$_POST['idroom']);
                if($result){
                   echo json_encode($result);
                }
                else{
                }
            }
            else{
            }
        }
        public function ChangeFacilitiesHotel(){
            if(helper::checkPostExist(['idhotel'])){
                $kt=true;
                if(isset($_POST['idFacilitiesdelete'])){
                    $sqlDelete='(';
                    foreach ($_POST['idFacilitiesdelete'] as $key => $value) {
                        $sqlDelete.='hotel_facilities_id='.$value.' or ';
                    }
                    $sqlDelete=substr($sqlDelete, 0, -4);
                    $sqlDelete.=') ';
                    $result = $this->AjaxModel->changestatusfacilitiesHotel($sqlDelete,$_POST['idhotel'],4); 
                    // Nếu như ko update được thì cho biến kt là false
                    if(!$result){
                        $kt=false;
                    }  
                }
                if(isset($_POST['idFacilitiesinsert'])){
                    $sqlInsert='';
                    foreach ($_POST['idFacilitiesinsert'] as $key => $value) {
                        $sqlInsert.='('.$_POST['idhotel'].','.$value.',1),';
                    }
                    $sqlInsert=substr($sqlInsert, 0, -1);
                    $result = $this->AjaxModel->changestatusfacilitiesHotel($sqlInsert,$_POST['idhotel'],0); 
                    if(!$result){
                        $kt=false;
                    }  
                }
                if(isset($_POST['idFacilitiesupdate'])){
                    $sqlUpdate='(';
                    foreach ($_POST['idFacilitiesupdate'] as $key => $value) {
                        $sqlUpdate.='hotel_facilities_id='.$value.' or ';
                    }
                    $sqlUpdate=substr($sqlUpdate, 0, -4);
                    $sqlUpdate.=') ';
                    $result = $this->AjaxModel->changestatusfacilitiesHotel($sqlUpdate,$_POST['idhotel'],1); 
                    if(!$result){
                        $kt=false;
                    }
                }
                
                echo json_encode($kt);
            }
            else{
            }
        }
        public function ChangeFacilitiesRoom(){
            if(helper::checkPostExist(['idhotel','idroom'])){
                $kt=true;
                if(isset($_POST['idFacilitiesdelete'])){
                    $sqlDelete='(';
                    foreach ($_POST['idFacilitiesdelete'] as $key => $value) {
                        $sqlDelete.='hotel_facilities_id='.$value.' or ';
                    }
                    $sqlDelete=substr($sqlDelete, 0, -4);
                    $sqlDelete.=') ';
                    $result = $this->AjaxModel->changestatusfacilitiesRoom($sqlDelete,$_POST['idhotel'],$_POST['idroom'],4); 
                    // Nếu như ko update được thì cho biến kt là false
                    if(!$result){
                        $kt=false;
                    }  
                }
                if(isset($_POST['idFacilitiesinsert'])){
                    $sqlInsert='';
                    foreach ($_POST['idFacilitiesinsert'] as $key => $value) {
                        $sqlInsert.='('.$_POST['idhotel'].','.$value.','.$_POST['idroom'].',1),';
                    }
                    $sqlInsert=substr($sqlInsert, 0, -1);
                    $result = $this->AjaxModel->changestatusfacilitiesRoom($sqlInsert,$_POST['idhotel'],$_POST['idroom'],0); 
                    if(!$result){
                        $kt=false;
                    }  
                }
                if(isset($_POST['idFacilitiesupdate'])){
                    $sqlUpdate='(';
                    foreach ($_POST['idFacilitiesupdate'] as $key => $value) {
                        $sqlUpdate.='hotel_facilities_id='.$value.' or ';
                    }
                    $sqlUpdate=substr($sqlUpdate, 0, -4);
                    $sqlUpdate.=') ';
                    $result = $this->AjaxModel->changestatusfacilitiesRoom($sqlUpdate,$_POST['idhotel'],$_POST['idroom'],1); 
                    if(!$result){
                        $kt=false;
                    }
                }
                
                echo json_encode($kt);
               
            }
            else{
                echo json_encode('rong');
            }
        }
    }

?>