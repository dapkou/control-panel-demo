
//-------------------------------------------------------------
//screen
function setWindowHeight(){
    let windowHeight = window.innerHeight;
    document.body.style.height = windowHeight + "px";
    console.log(document.body.style.height);
}
window.addEventListener("resize",setWindowHeight, false);
//-------------------------------------------------------------
// menu
$('#menuList>.has-treeview>a').click(function() {
$(this).next().toggle();
// if there is any other element after a the  use
// $(this).parent().find('ul').toggle();
// also if you need any better effect then use
// slideToggle() or fadeToggle instead of toggle()
});

//-------------------------------------------------------------6.8ton

//主要開關及燃燒機開關
// const switchBtn = document.querySelectorAll(".switch");
// for(let i = 0; i < switchBtn.length; i++){
//   switchBtn[i].addEventListener('click', function(e){
//     if (switchBtn[i].innerHTML =='<i class="fas fa-power-off"></i> OFF') {
//       switchBtn[i].innerHTML = '<i class="fas fa-power-off"></i> ON';
//       switchBtn[i].classList.add('active');
//     }else{
//       switchBtn[i].innerHTML = '<i class="fas fa-power-off"></i> OFF';
//       switchBtn[i].classList.remove('active');
//     }
//   });
// }
//
// //fire and status change
// const smallFireBtn = document.getElementById('smallFireBtn');
// const bigFireBtn = document.getElementById('bigFireBtn');
// const burnH = document.getElementById('burnH');
// const burnL = document.getElementById('burnL');
// const fireHigh = document.getElementById('fireHigh');
// const fireLow = document.getElementById('fireLow');
//
// smallFireBtn.addEventListener('click', function(e){
//   burnL.classList.add('avtive');
//   burnH.classList.remove('avtive');
//   fireLow.classList.add('work');
//   fireHigh.classList.remove('work');
// });
// bigFireBtn.addEventListener('click', function(e){
//   burnH.classList.add('avtive');
//   burnL.classList.remove('avtive');
//   fireHigh.classList.add('work');
//   fireLow.classList.remove('work');
// });

// function changeFireLow(){
// 	lowFire.style.fill = "#FFA500";
//   statusLow.style.color = "#FFA500";
// 	highFire.style.fill = "#DADADA";
// 	statusHigh.style.color = "#DADADA";
//   burnL.style.borderBottom = "3px solid rgba(255, 165, 0, 0.5)";
//   burnH.style.border = 0;
// 	return false;
// }
// function changeFireHigh(){
// 	lowFire.style.fill = "#A1A1A1";
//   statusLow.style.color = "#DADADA";
// 	fireHigh.style.fill = "#FF5353";
//   statusHigh.style.color = "#FF5353";
//   burnH.style.borderBottom = "3px solid rgba(255, 83, 83, 0.5)";
//   burnL.style.border = 0;
// 	return false;
// }
//
// fireLow.addEventListener('click', changeFireLow);
// fireHigh.addEventListener('click', changeFireHigh);

//------------------------------------------------------------/6.8ton
// function openNav() {
//   document.getElementById("sidebar").style.width = "250px";
// }

// function closeNav() {
//   document.getElementById("sidebar").style.width = "0";
// }
function get_current_date(gettime){
	var year=new Date(gettime).getFullYear();//年
	if (year< 1900) year = year + 1900;
	var month = new Date(gettime).getMonth() + 1;//月
	if (month < 10) month = '0' + month;
	var day = new Date(gettime).getDate();//日
	if (day < 10) day = '0' + day;
	var hour = new Date(gettime).getHours();//小時
	if (hour < 10) hour = '0' + hour;
	var minute = new Date(gettime).getMinutes();//分鐘
	if (minute < 10) minute = '0' + minute;
	var second = new Date(gettime).getSeconds();//秒
	if (second < 10) second = '0' + second;
	var str=year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second;
	return str;
}
function get_current_date_minute(gettime){
	var year=new Date(gettime).getFullYear();//年
	if (year< 1900) year = year + 1900;
	var month = new Date(gettime).getMonth() + 1;//月
	if (month < 10) month = '0' + month;
	var day = new Date(gettime).getDate();//日
	if (day < 10) day = '0' + day;
	var hour = new Date(gettime).getHours();//小時
	if (hour < 10) hour = '0' + hour;
	var minute = new Date(gettime).getMinutes();//分鐘
	if (minute < 10) minute = '0' + minute;
	var second = new Date(gettime).getSeconds();//秒
	if (second < 10) second = '0' + second;
	var str=year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':00';
	return str;
}
function get_current_date_hour(gettime){
	var year=new Date(gettime).getFullYear();//年
	if (year< 1900) year = year + 1900;
	var month = new Date(gettime).getMonth() + 1;//月
	if (month < 10) month = '0' + month;
	var day = new Date(gettime).getDate();//日
	if (day < 10) day = '0' + day;
	var hour = new Date(gettime).getHours();//小時
	if (hour < 10) hour = '0' + hour;
	var minute = new Date(gettime).getMinutes();//分鐘
	if (minute < 10) minute = '0' + minute;
	var second = new Date(gettime).getSeconds();//秒
	if (second < 10) second = '0' + second;
	var str=year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':00';
	return str;
}
function get_current_date_day(gettime){
	var year=new Date(gettime).getFullYear();//年
	if (year< 1900) year = year + 1900;
	var month = new Date(gettime).getMonth() + 1;//月
	if (month < 10) month = '0' + month;
	var day = new Date(gettime).getDate();//日
	if (day < 10) day = '0' + day;
	var hour = new Date(gettime).getHours();//小時
	if (hour < 10) hour = '0' + hour;
	var minute = new Date(gettime).getMinutes();//分鐘
	if (minute < 10) minute = '0' + minute;
	var second = new Date(gettime).getSeconds();//秒
	if (second < 10) second = '0' + second;
	var str=year + '-' + month + '-' + day;
	return str;
}
