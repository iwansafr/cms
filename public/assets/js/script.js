$(document).ready(function () {
  function readURL(input, a) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        // if(e.total>500000 && isFileImage(input.files[0])){
        // 	var suc = $(a).siblings('input[type="file"]').val('');
        // alert('ukuran file tidak boleh lebih dari 500KB');
        // }else{
        // console.log(e);
        $(a).attr('src', e.target.result);
        // $('#filename').html(e.target.result);
        // }
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
  $(document).on('change', 'input[type="file"]', function () {
    // console.log($(this));
    var a = $(this).siblings('.image_place');
    readURL(this, a);
    if (this.files && this.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        // $('#filename').html(e.target.result);
      };
      reader.readAsDataURL(this.files[0]);
      // setInterval($('#btn_upload').trigger('click'),300);
    }
  });
  $(document).on('change', '.image_link', function () {
    // console.log($(this));
    var a = $(this).siblings('.image_place');
    a.attr('src',$(this).val());
  });
});