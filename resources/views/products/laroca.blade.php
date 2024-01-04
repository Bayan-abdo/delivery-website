
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport " content="with=device-width , initial-scale=1.0 ">
    <title>LaRoca</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cairo:wght@200;300;400;500;700&family=Lato:wght@300;400;700&family=Libre+Baskerville:wght@400;700&family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<style>
* {
    margin: 0;
    padding: 0;
font-family: 'Cairo', sans-serif;

}


.header {
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4, 9, 30, 0.5), rgba(4, 9, 30, 0.7)), url('{{ url('images/8.jpg') }}');
    background-position: center;
    background-size: fixed;
    position: relative;
}
.about {
    padding-top: 5px;
    font-size: 27px ;
    line-height: 35px;
    color: #252E59;

}

nav{
    display: flex;
    padding: 1% 2% ;
    justify-content: space-between;
    align-items: center;
}

nav img {
    width: 150px;
}
.nav-links{
    flex: 5;
    text-align: right ;
}
.nav-links ul li{
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}
.nav-links ul li a{
    color: #fff ;
    text-decoration: none;
    font-size: 13px;
    font-weight:700px;
}

.nav-links ul li::after{
    content: '';
    width : 0%;
    height : 2px;
    background :  #252E59;
    display : block;
    margin : auto;
    transition: 0.5s;
}

.nav-links ul li:hover::after{
    width: 100% ;
}

.text-box{
    width: 90%;
    color: #fff ;
    position: absolute ;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
}

.text-box h1{
    font-size: 62px;
}
.text-box p{
    margin : 10px 0 40px;
    font-size: 20px;
    color: #fff;
     line-height: 25px;
}

.hero-btn{
    display: inline-block ;
    text-decoration: none ;
    color: #fff ;
    border: 1px solid #fff ;
    padding: 12px 34px ;
    font-size: 20px ;
    background: transparent ;
    position: relative ;
    cursor : pointer;
}
.hero-btn:hover{
    border: 1px solid #252E59;
    background: #252E59;
    transition: 1s;
}
.GAMES {

    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 100px;
}
.laroca{
    font-size: 36px ;
    font-weight: 600 ;
    color: white; 
}    
h1 {
    font-size: 36px ;
    font-weight: 600 ;
    color: #252E59;
 } 
 p{
 color : #777 ;
    font-size: 14px ;
    font-weight: 300 ;
    line-height: 22px ;
    padding:10px ;
 }
 
.row{

    margin-top: 5%;
    display: flex;
    justify-content :space-between;
}
.GAMING-col{
    flex-basis: 31% ;
    background: #252E59;
    border-radius : 10px;
    margin-bottom : 5%;
    padding: 20px 12px;
    box-sizing : border-box ;
}
.GAMING-col p{
   color : white;
}
h3{

    text-align: center;
    font-weight: 600;
    margin: 10px 0;
    color : white;
}
.GAMING-col:hover{
    box-shadow: 0 0 20px 0px rgba(40,0,0,0.6) ;
    transition: 0.5s;
}

.games{
    width: 80% ;
     margin : auto ;
     text-align : center ;
     padding-top : 50px ;
}
.games-col{
    flex-basis : 32%;
    border-radius : 10px;
    margin-bottom : 30px;
    position : relative;
    overflow : hidden ;
}
.games-col img{
    width:  100%;
    display: block;
}
.layer{
    background: transparent;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    transition: 0.5s;
}
.layer:hover{
    background: rgba(7, 40, 53, 0.7);

}

.layer h3{
  width: 100%;
   font-weight : 500 ;
   color: #fff ;
   font-size : 26px ;
   bottom: 0 ;
   left: 50% ;
   transform: translateX(-50% ) ;
   position : absolute;
   opacity : 0 ;
   transition : 0.5s;
}
.layer:hover h3{
  bottom : 40%;
  opacity : 1;
}

.newgames{
    width : 80%;
    margin: auto;
     text-align : center;
     padding-top : 100px;
}

.newgames-col{
    flex-basis : 31%;
    border-radius : 10px;
   margin-bottom : 5%;
    text-align: left;
}
.newgames-col img{
   width: 100% ;
    border-radius : 10px ;
}
.newgames-col p{
    padding : 0;
}
.newgames-col h3{
    margin-top : 16px;
    margin-bottom : 15px;
    text-align: left ;
}
.reviews{
    width : 80% ;
     margin : auto ;
     padding-top : 100px ;
     text-align : center ;
}

.reviews-col{
    flex-basis : 44%;
   border-radius : 10px;
   margin-bottom : 5%;
   text-align : left;
   background :  #1a35558f;
   padding : 25px;
   cursor : pointer;
   display : flex;
}
.reviews-col img{
   height : 40px ;
   margin-left : 5px ;
   margin-right : 30px ;
   border-radius : 50% ;
}

.reviews-col p{
    padding : 0;
 }
.reviews-col h3{
    margin-top:15px ;
    text-align : left ;
 }
 .reviews-col .fa{
    color: #f44336;
 }
.cta{
    margin : 100px auto ;
   width: 80% ;
    background-image : linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('{{ url('images/bg.png') }}');
    background-position : center;
    background-size : cover ;
    border-radius : 10px ;
    text-align : center ;
    padding : 100px 0 ;
}
.cta h1 {
    color : #fff ;
    margin-bottom : 20px ;
    padding : 0 ;
}

footer{
    padding: 1.5vw;
    background-color:#252E59;

}

footer h3{
    color: white;
    font-weight: 300;
    padding-bottom: 20px;
    text-align: center;
    padding-right: 15px;
}
.contact {

    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 50px;
    display: flex;
    padding-bottom: 100px;
    justify-content :space-between;
}

.info {
       font-size : 26px ;
}

.info h5 {
    color: #252E59;
}
.info p {
     color: black;
  font-weight: 460;
}
</style>

<body>

    <section class="header">
        <nav>
            <div class="nav-links">
                <ul>
                    <li><a href=#contact>تواصل</a></li>
                    <li><a href=#about>حول</a></li>
                    <li><a href="{{ url('/') }}">قائمة الطعام</a></li>
                    <li><a href="">الرئيسية</a></li>
                </ul>
            </div>
        </nav>
        <div class="text-box">
            <h1 class="laroca"> LaRoca Cafe</h1>
            <p> أفضل موقع لطلب الطعام <br> عبر الإنترنت
            </p>
            <a href="{{ url('/') }}" class="hero-btn">قائمة الطعام</a>
        </div>
    </section>
 
<section class="games" id="about">
    <div class="row">
        <div>  
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
    <section class="games">
    <h1>الأصناف التي نقدمها</h1>
    <p>هنا الأصناف التي يمكنك طلبها </p>

    <div class="row">
         <div class="games-col">
              <img src = {{ url('images/alfredo.jpg') }}> 
              <div class="layer">
              <h3>باستا</h3>
         </div>
         </div>
         <div class="games-col">
            <img src = {{ url('images/pizza.jpg') }}> 
            <div class="layer">
            <h3>بيتزا</h3>
       </div>
    </div>
    <div class="games-col">
        <img src = {{ url('images/milkshake.jpg') }}> 
        <div class="layer">
        <h3>عصائر و مشروبات</h3>
   </div>
    </div>
    
    </div>
    </section>  

    
    <section class="GAMES">
        <h1>تقييم الزبائن</h1>
        <p>آراء الزبائن حول موقعنا</p>


        <div class="row">
            <div class="GAMING-col">
                <h3>سارة</h3>
                <p>موقع مرن وجميل ساعدني كثيرًا في حجز الطعام من منزلي واختصار الوقت</p>
            </div>
         
            <div class="GAMING-col">
            <h3>نوران</h3>
            <p>تصميم مناسب وخدمة ممتازة معجبة بشدة بهذا الموقع وأنصح الجميع بالطلب منه ساعدني في إختيار طلباتي كم المنزل أو من مكان عملي</p>
            </div>
                   
                    <div class="GAMING-col">
                    <h3>أحمد</h3>
                    <P> اعتمدت هذا الموقع لطلب الطعام وفر عليّ كثير من الوقت والجهد أصبحت أذهب إلى المطعم لإستلام طلبيتي فورًا بدلاً من الإنتظار  </P>
                    </div>
                   </div>
         
    </section>


<section class="cta">
    <h1>في حالة طلب مساعدة</h1>
    <a href="#contact"class="hero-btn">تواصل معنا</a>

</section>

<section class="games" id="contact">
 <h1>تواصـل معنـا</h1>
 </section>
 
  <section class="contact">
     
<br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3350.458954979815!2d13.158373974389676!3d32.88603177840903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13a8ed44b653ca2d%3A0x3d99c2118eea8d88!2sLaRoca!5e0!3m2!1sen!2sly!4v1702656303260!5m2!1sen!2sly"
        width="650" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="info">
            <div>
            <div> 
                <i class ="fa fa-home"></i>
                <span>
                    <h5>ليبيا، طرابلس</h5>
                    <p>طريق الشط الليدو </p>
                </span>
            </div>
            <div> 
                <i class ="fa fa-phone"></i>
                <span>
                    <h5>+218 91 038 8833</h5>
                    <p></p>
                </span>
            </div>
            <div> 
                <i class ="fa fa-envelope-o"></i>
                <span>
                    <h5>LaRoca@gmail.com</h5>
                    <p>راسلنا لأي إستفسار</p>
                </span>
            </div>
                <div> 
                <span>
                    <h5>مواعيد العمل</h5>
                    <p>يوميًا ماعدا الجمعة من 9 صباحًا إلى 11 مساءً</p>
                </span>
            </div>
            </div>
    </section>

<footer>
<h3>إختيارك المناسب لطلب الطعام </h3>
</footer>


</body>

</html>