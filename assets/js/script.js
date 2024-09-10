// sidebar
const body = document.querySelector('body');
const sidebar = document.querySelector('#sidebar');
const menuOpen = document.querySelector('#sidebarOpen');
const menuClose = document.querySelector('#sidebarClose');
const overlay = document.querySelector('.overlay');

menuOpen.addEventListener('click', function () {
  sidebar.style.width = "250px";
  body.classList.remove('side-hidden');
  overlay.classList.add('active');
});
menuClose.addEventListener('click', function () {
  sidebar.style.width = "0px";
  body.classList.add('side-hidden');
  overlay.classList.remove('active');
})
overlay.addEventListener('click', function (e) {
  // console.log(e.target);
  sidebar.style.width = "0px";
  body.classList.add('side-hidden');
  overlay.classList.remove('active');
})

//--------------------------------------------------------------
// Closing collapse by clicking outside
$(document).click(function (e) {
  if (!$(e.target).is('.panel-body')) {
    $('.collapse').collapse('hide');
  }
});