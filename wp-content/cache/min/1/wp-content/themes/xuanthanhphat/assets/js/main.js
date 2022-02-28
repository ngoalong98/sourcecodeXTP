function openNav(){document.getElementById("mySidenav").style.width="300px";document.getElementById("myCanvasNav").style.width="100%";document.getElementById("myCanvasNav").style.opacity="0.8";document.body.style.backgroundColor="rgba(0,0,0,0.4)"}
function closeOffcanvas(){document.getElementById("mySidenav").style.width="0%";document.body.style.backgroundColor="white";document.getElementById("myCanvasNav").style.width="0%";document.getElementById("myCanvasNav").style.opacity="0"}
function animateNumber(finalNumber,delay,startNumber=0,callback){let currentNumber=startNumber
const interval=window.setInterval(updateNumber,delay)
function updateNumber(){if(currentNumber>=finalNumber){clearInterval(interval)}else{currentNumber++
callback(currentNumber)}}}
window.homepagecheck=function(){var check=!1;if(document.location.pathname==="/"){check=!0}
return check}
if(window.homepagecheck()){document.addEventListener('DOMContentLoaded',function(){animateNumber(4000,10,0,function(number){const formattedNumber=number.toLocaleString();document.getElementById('data_start-1').innerText=formattedNumber})
animateNumber(98,10,0,function(number){const formattedNumber=number.toLocaleString();document.getElementById('data_start-2').innerText=formattedNumber})
animateNumber(1500,10,0,function(number){const formattedNumber=number.toLocaleString();document.getElementById('data_start-3').innerText=formattedNumber})})}
$(document).on('click','a[href^="#"]',function(event){event.preventDefault();var $anchor=$(this);if(this.hash!==""){var offset2=-200;$('html, body').animate({scrollTop:$($anchor.attr('href')).offset().top+offset2},1000)}});$(document).ready(function(){var wC=document.documentElement.scrollTop;if(wC>60){$('.navbar').addClass('fixed-top')}else{$('.navbar').removeClass('fixed-top')}
let view=0;$(window).scroll(function(){var scroll=Math.floor($(window).scrollTop());if(scroll>60){$('.navbar').addClass('fixed-top');$('.navbar-nav-pc>li>a').css({'height':'60px','line-height':'60px','transition':'height 1s'})
$('.navbar-search>a').css({'height':'60px','line-height':'60px','transition':'height 1s'})}else{$('.navbar').removeClass('fixed-top');$('.navbar-nav-pc>li>a').css({'height':'98px','line-height':'98px','transition':'height 1s'})
$('.navbar-search>a').css({'height':'98px','line-height':'98px','transition':'height 1s'})}
if(window.homepagecheck()){if($('#partner').offset().top>=$(window).scrollTop()){}else{if(view==0){animateNumber(95,10,40,function(number){const formattedNumber=number.toLocaleString()
document.getElementById('team-1').style.width=formattedNumber+'%'})
animateNumber(90,10,40,function(number){const formattedNumber=number.toLocaleString()
document.getElementById('team-2').style.width=formattedNumber+'%'})
animateNumber(99,10,40,function(number){const formattedNumber=number.toLocaleString()
document.getElementById('team-3').style.width=formattedNumber+'%'})}
view=1}}});$(".icon-search").on("click",function(){$(".form-search").css({"display":"flex"});$('.navbar-nav-pc').hide()});$(".icon-hide").on("click",function(){$(".form-search").css({"display":"none"});$('.navbar-nav-pc').show()})})