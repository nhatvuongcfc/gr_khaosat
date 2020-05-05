
@extends('templates.admin')
@section('css')
<link rel="stylesheet" href="{{asset('css/profile.css')}}">
@endsection
@section('main')
<div class="profile row">
    <div class=" avatar" style="background-image: url({{asset('image/icon_thuong.jpg')}})">
        <i class="fa fa-upload fa-2x"></i>

        <div class="upload-avatar">
        <input type='file' onchange="readURL(this);"  class="input-file">
        </div>

    </div>

    <div class=" information col col-md-5 col-sm-5 col-xs-12">
        <h5 class="name">Nguyễn Văn A</h5>
        <p class="role">Admin</p>
        <ul class="list-information">
            <li class="item-information"><i class="fas fa-venus-mars"></i>
                Nam</li>
            <li class="item-information"><i class="fas fa-at"></i>

                abc@gmail.com</li>
            <li class="item-information"><i class="fas fa-home"></i>



                137 Đỗ Đăng Tuyển </li>
            <li class="item-information"><i class="fas fa-phone"></i>



                01225825 </li>
        </ul>
    </div>
</div>

@endsection

@section('js')
<script >
    $('.user-image').on('click',function(){
        $(".input-file").click();
});

function readURL(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();
    console.log(reader);
    reader.onload = function (e) {
        // $('.user-image')
        //     .attr('src', e.target.result);
        // e.target.result  
        console.log('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
}


}

</script>
@endsection
