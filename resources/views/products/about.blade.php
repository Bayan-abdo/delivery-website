@extends('layouts.app')

@section('content')
<style>
.row{

    margin-top: 5%;
    display: flex;
    justify-content :space-between;
}
.games{
    width: 80% ;
     margin : auto ;
     text-align : center ;
     padding-top : 50px ;
}
h1 {
    font-size: 36px ;
    font-weight: 600 ;
    color: #252E59;
 } 
 
</style>

<section class="games" id="about">
    <div class="row">
        <div id="about">  
            <br/> <br/> 
            <h1>من نحن ؟</h1>
    
            <p class="about">   مقهى ومطعم لاروكا من سلسلة المطاعم المشهورة تم افتتاح هذا الفرع في 2023 ليقدم لكم مختلف الأنواع من الأكل الإيطالي بما في ذلك الباستا والبيتزا  مع المشروبات المميزة بالإضافة إلى توفير خدمة طلب الطعام عبر الإنترنت من خلال التبويت قائمة الطعام وهذا مايميز مطعم لاروكا عن غيره من المطاعم .
        </p>
           
        </div>
        <div>
          <video src={{ url('images/1.mp4') }}  controls height="500" width="600" autoplay muted ></video>
    </div>
    </div>
    </section>

@endsection