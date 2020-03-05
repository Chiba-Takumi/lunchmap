<style>
    body {
      font-family: 'M PLUS Rounded 1c';
      background-image : url("{{ asset('/assets/images/top.jpg') }}");
      margin: 0px;
      padding: 0px;
      background-color: white;
      color: #000000;
      width: 100%;
    }

    hr {
      border-top: 1px dashed #8c8b8b;
      border-bottom: 1px dashed #fff;
        }

    a {
      text-decoration: none;
    }

    h1 {
        font-weight: bold;
    }
    h2 {
        font-weight: bold;
    }
    h3 {

    }
    h5 {
      font-size: 100%;
      font-size: 20px;
    }

    p {
      font-size: 100%;
      font-size: 15px;

    }

    span {
      padding: 1px 10px;
      margin: 1px 0;
      color: #474747;
      background: #acffa6;/*背景色*/
      border-left: double 7px #4ec4d3;/*左線*/
      border-right: double 7px #4ec4d3;/*右線*/
    }

    .lead {
      z-index: 9;
      background-color: rgba(232,254,255,0.7);
      color: #000;
      font-weight: bold;
      font-size: 22px;
      position: absolute;/*絶対配置*/
      margin: 0px 0px 0px 5px;
      padding: 0px 0px 0px 0px;
      border-radius: 10px 10px 10px 10px;
    }

    .starter-template {
      padding: 5px 10px 8px 10px;
      background-color: white;
    }

    .img_wrap{
      border: 1px solid #ddd;
      margin: 0 auto;
      overflow: hidden;
      cursor: pointer;
      border-radius: 20px 20px 0px 0px;
    }
    .img_wrap img{
      width: 100%;
      transition-duration: 0.5s;
    }
    .img_wrap:hover img{
      transform: scale(1.2);
      transition-duration: 0.5s;
    }

    .box29 {
        background: #dcefff;
        border-radius: 20px 20px 20px 20px;
    }
    .box29 .box-title {
        font-size: 1.2em;
        background: #5fb3f5;
        padding: 4px;
        text-align: center;
        color: #FFF;
        font-weight: bold;
        letter-spacing: 0.05em;
        border-radius: 0px 0px 20px 20px;
    }
    .box29 p {
        padding: 15px 20px;
        margin: 0;
    }

    /*
    .apps{
      margin: 0px 80% 0px 80%;
    }
    */


</style>

<style type="text/css">
#photo {
    width: 100%;
    margin: 51px 0px 0px 0px;
    padding: 50% 0px 0px 0px;
    text-align: left;
    overflow: hidden;
    position: relative;
}

#photo>img {
    width: 100%;
    top: 0;
    left: 0;
    position: absolute;
}
#nav1
{
    background-color:#000000; /*whichever you want*/
    opacity: 0.85;
    filter:(opacity=1000);
    color: white;
    font-weight: bold;
}
</style>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(function(){
    var setImg = '#photo';
    var fadeSpeed = 1600;
    var switchDelay = 5000;

$(setImg).children('img').css({opacity:'0'});
$(setImg + ' img:first').stop().animate({opacity:'1',zIndex:'20'},fadeSpeed);

setInterval(function(){
$(setImg + ' :first-child').animate({opacity:'0'},fadeSpeed).next('img').animate({opacity:'1'},fadeSpeed).end().appendTo(setImg);
},switchDelay);
});
</script>
