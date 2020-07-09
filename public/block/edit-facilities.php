<div style="width:50%;padding:20px;border:1px solid #ccc;float:left">
    <div class="form-group">
        <label for="exampleFormControlSelect1">Khách sạn</label>
        <select class="form-control" id="ListHoteleditfacilities">
        <option disabled selected>--Chọn khách sạn--</option>
            <?php 
             foreach ($data['listhotel'] as $key => $value) {
                 echo '<option value="'.$value['hotel_id'].'">'.$value['hotel_name'].'</option>';
             }
            ?>
        </select>
    </div>
    
        <?php 
        $i=0;
            foreach ($data['fhotel'] as $key => $value) {
                echo '<div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="fhotel" id="fhotel'.$i.'" value="'.$value['id'].'">
                <label class="form-check-label" for="fhotel'.$i.'">'.$value['name'].'</label></div>';
                $i++;
            }
        ?>
        
    
    <hr>
    <button type="submit" id="submitfaciliteshotel" class="btn btn-primary">Submit</button>
</div>

<div style="width:50%;padding:20px;border:1px solid #ccc;float:left">
    <div class="form-group">
        <label for="exampleFormControlSelect1">Phòng</label>
        <select class="form-control" id="ListRoomeditfacilities">
        </select>
    </div>
        <?php 
            $i=0;
            foreach ($data['froom'] as $key => $value) {
                echo '<div class="form-check form-check-inline"><input class="form-check-input" name="froom" type="checkbox" id="froom'.$i.'" value="'.$value['id'].'">
                <label class="form-check-label" for="froom'.$i.'">'.$value['name'].'</label></div>';
                $i++;
                if($i % 4 == 0){
                    echo '<br>';
                }
            }
        ?>
    <hr>
    <button type="submit" id="submitfacilitesroom" class="btn btn-primary">Submit</button>
</div>
