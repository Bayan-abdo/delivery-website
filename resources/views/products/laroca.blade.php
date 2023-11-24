
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport " content="with=device-width , initial-scale=1.0 ">
    <title>GAMING WEBSITE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?
family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<style>
* {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;

}


.header {
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4, 9, 30, 0.5), rgba(4, 9, 30, 0.7)), url('{{ url('images/8.jpg') }}');
    background-position: center;
    background-size: fixed;
    position: relative;
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
}

.nav-links ul li::after{
    content: '';
    width : 0%;
    height : 2px;
    background : #659ee0;
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
    font-size: 14px;
    color: #fff;
}

.hero-btn{
    display: inline-block ;
    text-decoration: none ;
    color: #fff ;
    border: 1px solid #fff ;
    padding: 12px 34px ;
    font-size: 13px ;
    background: transparent ;
    position: relative ;
    cursor : pointer;
}
.hero-btn:hover{
    border: 1px solid #659ee0;
    background: #659ee0;
    transition: 1s;
}
.GAMES {

    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 100px;
}    
h1 {
    font-size: 36px ;
    font-weight: 600 ;
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
    background: #fff3f3;
    border-radius : 10px;
    margin-bottom : 5%;
    padding: 20px 12px;
    box-sizing : border-box ;
}
h3{

    text-align: center;
    font-weight: 600;
    margin: 10px 0;
}
.GAMING-col:hover{
    box-shadow: 0 0 20px 0px rgba(0,0,0,0.2) ;
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
  bottom : 49%;
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
    margin-bottom : 40px ;
    padding : 0 ;
}

.footer{
   width : 100% ;
    text-align : center ;
    padding: 30px 0 ;
}

.footer h4{
   margin-bottom : 25px;
   margin-top : 20px;
    font-weight : 600;
}
</style>

<body>

    <section class="header">
        <nav>
            <div class="nav-links">
                <ul>
                    <li><a href="">تواصل</a></li>
                    <li><a href="">حول</a></li>
                    <li><a href="">قائمة الطعام</a></li>
                    <li><a href="">الرئيسية</a></li>
                </ul>
            </div>
        </nav>
        <div class="text-box">
            <h1> LaRoca Cafe</h1>
            <p> أفضل موقع لطلب الطعام <br> عبر الإنترنت
            </p>
            <a href="" class="hero-btn">قائمة الطعام</a>
        </div>
    </section>
    <!-- Comments are not displayed in the browser 

    <section class="GAMES">
        <h1>GAMES THAT WE OFFER</h1>
        <p>we have some of the best games in the world.</p>

        <div class="row">
            <div class="GAMING-col">
                <h3>ACTION GAMES</h3>
                <p>An action game is a video game genre that emphasizes physical challenges,
                     including hand–eye coordination and reaction-time. The genre includes a large variety of sub-genres,
                      such as fighting games, beat 'em ups, shooter games, and platform games.</p>
            </div>
         
            <div class="GAMING-col">
            <h3>FIFA</h3>
            <p>FIFA, also known as FIFA Football and set to be known as EA Sports FC from 2023,
                 is a series of association football video games developed and released annually by Electronic Arts under the EA Sports label. 
                 As of 2011, the FIFA franchise has been localised into 18 languages and available in 51 countries.
                  Listed in Guinness World Records as the best-selling sports video game franchise in the world,
                   the FIFA series has sold over 325 million copies as of 2021.</p>
            </div>
                   
                    <div class="GAMING-col">
                    <h3>GTA</h3>
                    <P>Grand Theft Auto (GTA) is a series of action-adventure games created by David Jones and Mike Dailly.
                         Later titles were developed under the oversight of brothers Dan and Sam Houser,
                          Leslie Benzies and Aaron Garbut. It is primarily developed by British development house Rockstar North (formerly DMA Design),
                           and published by its parent company, Rockstar Games. The name of the series references the term "grand theft auto",
                            used in the United States for motor vehicle theft. </P>
                    </div>
                   </div>
         
    </section>
    
    <section class="games">
    <h1>Our latest  games</h1>
    <p>Here is out latest games.</p>

    <div class="row">
         <div class="games-col">
              <img src = "images/COD1.jpg"> 
              <div class="layer">
              <h3>COD VANGUARD</h3>
         </div>
         </div>
         <div class="games-col">
            <img src = "images/fifa2.jpg"> 
            <div class="layer">
            <h3>FIFA 2022</h3>
       </div>
    </div>
    <div class="games-col">
        <img src = "images/gta.jpg"> 
        <div class="layer">
        <h3>GTA</h3>
   </div>
    </div>
    </div>
    </section>  
    
-->
<section class="reviews">
    <h1>تقييم الزبائن</h1>
    <p>آراء الزبائن حول موقعنا</p>


    <div class="row">
    <div class="reviews-col">
         <img src="images/m.jpg">
         <div>
              <p>
                "I had great experience using this website, it is easy to use and fun too."
              </p>
              <h3>Ahmed </h3>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
         </div>
    </div>
    <div class="reviews-col">
        <img src="images/ga.jpg" >
        <div>
             <p>
               "I had great experience using this website, it is easy to use and fun too."
             </p>
             <h3>MO </h3>         
             <i class="fa fa-star"></i>  
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-half-o"></i>
        </div>
   </div>
    </div>
</section>


<section class="cta">
    <h1>في حالة طلب مساعدة</h1>
    <a href=""class="hero-btn">تواصل معنا</a>

</section>

<section class="footer">
<h4>About Us</h4>
<p>
     Is an American video game and software developer and publisher based in Cary, 
     North Carolina. The company was founded by Tim Sweeney as Potomac Computer Systems in 1991,</br>
      originally located in his parents' house in Potomac.
</p>
<div class="icons">
<i class ="fa fa-facebook"></i>
<i class ="fa fa-twitter"></i>
<i class ="fa fa-instagram"></i>
<i class ="fa fa-linkedin"></i>
</div>
</section>


</body>

</html>