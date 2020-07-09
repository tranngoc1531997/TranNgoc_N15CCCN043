$(document).ready(function (){
    // Show quận huyện
        $("#city_name").change(function(){
           let provinceId =  $(this).find(":selected").val();
           $.ajax({
               url: "./?ctrl=ajax&act=GetOneDistrict",
               method : "POST",
               data : {'id':provinceId},
               dataType : "JSON",
               success: function(data){
                   $('#district_name').children().remove();
                   $('#ward_name').children().remove();
                   data.forEach(function(element,index){
                       $('#district_name').append("<option value='"+element.id+"'>"+element._prefix+" "+element._name+"</option>");
                   });
               },
               error(error){
                   console.log(eval(error));
               }
           })

        });
        // Show phường xã
        $("#district_name").change(function(){
            let districtId =  $(this).find(":selected").val();
            $.ajax({
                url: "./?ctrl=ajax&act=GetOneWard",
                method : "POST",
                data : {id:districtId},
                dataType : "JSON",
                success: function(data){
                    $('#ward_name').children().remove();
                    data.forEach(function(element,index){
                        $('#ward_name').append("<option value='"+element.id+"'>"+element._prefix+" "+element._name+"</option>");
                    });
                },
                error(error){
                    console.log(eval(error));
                }
            })
         });
         $("#uploadHotelAvatar").click(function (){
             $.ajax({
                 url: "./?ctrl=upload&act=uploadOneImageHotel",
                 method: "post",
                 type: "text",
                 data: {'id': 122222222},
                 success: function(data){
                     console.log(data);
                 }
             })
         });
        //  Thay đổi status khách sạn
        $(".changeHotelStatus").click(function(event){
            event.preventDefault();
            let confirm = prompt("Nhập YES để xác nhận xóa:");
            let id = $(this).attr('hid');
            if(confirm === "YES"){
                $.ajax({
                    url: "./?ctrl=hotel&act=changeStatus&param=hotel"+id,
                    method : "GET",
                    data : {},
                    dataType : "JSON",
                    success: function(data){
                        if(data){
                            alert("Xóa thành công");
                            
                        }
                        else{
                            alert("Xóa thất bại");
                        }
                        location.reload();
                    },
                    error(error){
                        console.log(eval(error));
                    }
                })
            }
            else{
                alert("Hủy bỏ yêu cầu");
            }
        });
         //  Thay đổi trạng thái phòng
         $(".changeRoomStatus").click(function(event){
            event.preventDefault();
            let confirm = prompt("Nhập YES để xác nhận xóa:");
            let id = $(this).attr('rid');
            if(confirm === "YES"){
                $.ajax({
                    url: "./?ctrl=hotel&act=changeStatus&param=room"+id,
                    method : "GET",
                    data : {},
                    dataType : "JSON",
                    success: function(data){
                        if(data){
                            alert("Xóa thành công");
                            
                        }
                        else{
                            alert("Xóa thất bại");
                        }
                        location.reload();
                    },
                    error(error){
                        console.log(eval(error));
                    }
                })
            }
            else{
                alert("Hủy bỏ yêu cầu");
            }
        });
         //  Thay đổi trạng thái phòng
         $(".changeRoomChildStatus").click(function(event){
            event.preventDefault();
            let confirm = prompt("Nhập YES để xác nhận xóa:");
            let id = $(this).attr('rcid');
            if(confirm === "YES"){
                $.ajax({
                    url: "./?ctrl=hotel&act=changeStatus&param=roomchild"+id,
                    method : "GET",
                    data : {},
                    dataType : "JSON",
                    success: function(data){
                        if(data){
                            alert("Xóa thành công");
                            
                        }
                        else{
                            alert("Xóa thất bại");
                        }
                        location.reload();
                    },
                    error(error){
                        console.log(eval(error));
                    }
                })
            }
            else{
                alert("Hủy bỏ yêu cầu");
            }
        });

        //lọc phòng + dịch vụ từ khách sạn
        var oldhotelarr=[];
        var oldroomarr=[];
        var oldidfacilieshotel=[];
        var oldidfaciliesroom=[];
        $("#ListHoteleditfacilities").change(function(){
            let hotelid =  $(this).find(":selected").val();
            var hotelarr= document.getElementsByName('fhotel');
            hotelarr.forEach(element => {
               element.checked=false;
            });
            $.ajax({
                url: "./?ctrl=ajax&act=GetOneHotel",
                method : "POST",
                data : {'id':hotelid},
                dataType : "JSON",
                success: function(data){
                    $('#ListRoomeditfacilities').children().remove();
                    $('#ListRoomeditfacilities').append("<option disabled selected>--Chọn phòng--</option>");
                    data.forEach(function(element,index){
                        $('#ListRoomeditfacilities').append("<option value='"+element.id+"'>"+element.name+"</option>");
                    });
                },
                error(error){
                    console.log(eval(error));
                }
            })
            $.ajax({
                url: "./?ctrl=ajax&act=GetFacilitiesHotel",
                method : "POST",
                data : {'id':hotelid},
                dataType : "JSON",
                success: function(data){
                    oldidfacilieshotel=data;
                   data.forEach(function(element,index){
                        hotelarr.forEach(hotelar => {
                            if(element.hotel_facilities_id == hotelar.value && element.status_id==1 ){
                                hotelar.checked=true;
                            }
                        });
                    });
                    var i=0;
                    var manghotelcu=document.getElementsByName('fhotel');
                    manghotelcu.forEach(hotelcu => {
                        if(hotelcu.checked){
                            oldhotelarr[i]='1';
                        }
                        else{
                            oldhotelarr[i]='0';
                        }
                        i++;
                     });
                },
                error(error){
                    console.log(eval(error));
                    var i=0;
                    var manghotelcu=document.getElementsByName('fhotel');
                    manghotelcu.forEach(hotelcu => {
                        if(hotelcu.checked){
                            oldhotelarr[i]='1';
                        }
                        else{
                            oldhotelarr[i]='0';
                        }
                        i++;
                     });
                }
            })
            var roomarr= document.getElementsByName('froom')
            roomarr.forEach(element => {
               element.checked=false;
            });
         });
         $("#ListRoomeditfacilities").change(function(){
            let hotelid =$('#ListHoteleditfacilities').find(":selected").val();
            let idroom =  $(this).find(":selected").val();
            var roomarr= document.getElementsByName('froom')
            roomarr.forEach(element => {
               element.checked=false;
            });
            $.ajax({
                url: "./?ctrl=ajax&act=GetFacilitiesRoom",
                method : "POST",
                data : {id:hotelid, idroom:idroom},
                dataType : "JSON",
                success: function(data){
                    oldidfaciliesroom=data;
                    data.forEach(function(element,index){
                        roomarr.forEach(roomar => {
                            if(element.hotel_facilities_id == roomar.value && element.status_id==1 ){
                                roomar.checked=true;
                            }
                        });
                    });
                    var i=0;
                    var mangroomcu=document.getElementsByName('froom');
                    mangroomcu.forEach(roomcu => {
                        if(roomcu.checked){
                            oldroomarr[i]='1';
                        }
                        else{
                            oldroomarr[i]='0';
                        }
                        i++;
                     });
                },
                error(error){
                    console.log(eval(error));
                    var i=0;
                    var mangroomcu=document.getElementsByName('froom');
                    mangroomcu.forEach(roomcu => {
                        if(roomcu.checked){
                            oldroomarr[i]='1';
                        }
                        else{
                            oldroomarr[i]='0';
                        }
                        i++;
                     });
                }
            })
         });
         //cập nhật dịch vụ hotel
         $("#submitfaciliteshotel").click(function(event){
            let hotelid =$('#ListHoteleditfacilities').find(":selected").val();
            newhotelarr=document.getElementsByName('fhotel');
            var arrayIdFacilitiesDelete=[];
            var arrayIdFacilitiesInsert=[];
            var arrayIdFacilitiesUpdate=[];
            var demArray1=0;
            var demArray2=0;
            var demArray3=0;
            var kt;
            for (let i = 0; i < newhotelarr.length; i++) {
                if(oldhotelarr[i]==0 && newhotelarr[i].checked){
                    kt=false;
                    oldidfacilieshotel.forEach(element => {
                        if(newhotelarr[i].value==element.hotel_facilities_id){
                            kt=true;
                        }
                    });
                    
                    if(kt){
                        arrayIdFacilitiesUpdate[demArray3]=newhotelarr[i].value;
                        demArray3++;
                    }else{
                        arrayIdFacilitiesInsert[demArray2]=newhotelarr[i].value;
                        demArray2++;
                    }
                }else if(oldhotelarr[i]==1 && !newhotelarr[i].checked){
                    arrayIdFacilitiesDelete[demArray1]=newhotelarr[i].value;
                    demArray1++;
                }
            }
            
            $.ajax({
                url: "./?ctrl=ajax&act=ChangeFacilitiesHotel",
                method : "POST",
                data : {idFacilitiesdelete: arrayIdFacilitiesDelete, idFacilitiesupdate: arrayIdFacilitiesUpdate, idFacilitiesinsert: arrayIdFacilitiesInsert ,idhotel: hotelid},
                dataType : "JSON",
                success: function(data){
                    if(data=='rong'){
                        alert('Dữ liệu rỗng');
                    }
                    else if(data){
                        alert('Cập nhật thành công!');
                    }else{
                        alert('Cập nhật thất bại!');
                    }
                },
                error(error){
                    console.log(eval(error));
                }
            })
            
            $.ajax({
                url: "./?ctrl=ajax&act=GetFacilitiesHotel",
                method : "POST",
                data : {'id':hotelid},
                dataType : "JSON",
                success: function(data){
                    oldhotelarr=[];
                    oldidfacilieshotel=data;
                    var i=0;
                    var manghotelcu=document.getElementsByName('fhotel');
                    manghotelcu.forEach(hotelcu => {
                        if(hotelcu.checked){
                            oldhotelarr[i]='1';
                        }
                        else{
                            oldhotelarr[i]='0';
                        }
                        i++;
                     });
                },
                error(error){
                    console.log(eval(error));
                    oldhotelarr=[];
                    var i=0;
                    var manghotelcu=document.getElementsByName('fhotel');
                    manghotelcu.forEach(hotelcu => {
                        if(hotelcu.checked){
                            oldhotelarr[i]='1';
                        }
                        else{
                            oldhotelarr[i]='0';
                        }
                        i++;
                     });
                }
            })
        });
        // Cập nhật dịch vụ phòng
        $("#submitfacilitesroom").click(function(event){
            let hotelid =$('#ListHoteleditfacilities').find(":selected").val();
            let roomid =$('#ListRoomeditfacilities').find(":selected").val();
            newroomarr=document.getElementsByName('froom');
            var arrayIdFacilitiesDelete=[];
            var arrayIdFacilitiesInsert=[];
            var arrayIdFacilitiesUpdate=[];
            var demArray1=0;
            var demArray2=0;
            var demArray3=0;
            var kt;
            for (let i = 0; i < newroomarr.length; i++) {
                if(oldroomarr[i]==0 && newroomarr[i].checked){
                    kt=false;
                    oldidfaciliesroom.forEach(element => {
                        if(newroomarr[i].value==element.hotel_facilities_id){
                            kt=true;
                        }
                    });
                    
                    if(kt){
                        arrayIdFacilitiesUpdate[demArray3]=newroomarr[i].value;
                        demArray3++;
                    }else{
                        arrayIdFacilitiesInsert[demArray2]=newroomarr[i].value;
                        demArray2++;
                    }
                }else if(oldroomarr[i]==1 && !newroomarr[i].checked){
                    arrayIdFacilitiesDelete[demArray1]=newroomarr[i].value;
                    demArray1++;
                }
            }
            $.ajax({
                url: "./?ctrl=ajax&act=ChangeFacilitiesRoom",
                method : "POST",
                data : {idFacilitiesdelete: arrayIdFacilitiesDelete, idFacilitiesupdate: arrayIdFacilitiesUpdate, idFacilitiesinsert: arrayIdFacilitiesInsert ,idhotel: hotelid, idroom:roomid},
                dataType : "JSON",
                success: function(data){
                    if(data=='rong'){
                        alert('Dữ liệu rỗng');
                    }
                    else if(data){
                        alert('Cập nhật thành công!');
                    }else{
                        alert('Cập nhật thất bại!');
                    }
                },
                error(error){
                    console.log(eval(error));
                }
            })

            $.ajax({
                url: "./?ctrl=ajax&act=GetFacilitiesRoom",
                method : "POST",
                data : {id: hotelid , idroom:roomid},
                dataType : "JSON",
                success: function(data){
                    oldroomarr=[];
                    oldidfaciliesroom=data;
                    var i=0;
                    var mangroomcu=document.getElementsByName('froom');
                    mangroomcu.forEach(roomcu => {
                        if(roomcu.checked){
                            oldroomarr[i]='1';
                        }
                        else{
                            oldroomarr[i]='0';
                        }
                        i++;
                     });
                },
                error(error){
                    console.log(eval(error));
                    oldroomarr=[];
                    var i=0;
                    var mangroomcu=document.getElementsByName('froom');
                    mangroomcu.forEach(roomcu => {
                        if(roomcu.checked){
                            oldroomarr[i]='1';
                        }
                        else{
                            oldroomarr[i]='0';
                        }
                        i++;
                     });
                }
            })
        });

        
});