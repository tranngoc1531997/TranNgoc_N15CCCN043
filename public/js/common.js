$(document).ready(function(){
    // Hiển thị tên file upload
    $('#fileUpload').change(function() {
        var i = $(this).prev('label').clone();
        var file = $('#fileUpload')[0].files[0].name;
        $(this).prev('label').text(file);
      });
})