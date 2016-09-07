jQuery(document).ready(function ($) {

  $('#checkbox').change(function(){
    setInterval(function () {
        moveRight();
    }, 3000);
  });
  
	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	$('#slider').css({ width: slideWidth, height: slideHeight });
	
	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});

var imageBig = document.querySelector('.item-img-big');
var imageSmall1 = document.querySelector('.item-img-small1');
var imageSmall2 = document.querySelector('.item-img-small2');
var imageSmall3 = document.querySelector('.item-img-small3');

function imageClick1() {
  imageBig.src = imageSmall1.src;
};

function imageClick2() {
  imageBig.src = imageSmall2.src;
};

function imageClick3() {
  imageBig.src = imageSmall3.src;
};

imageSmall1.addEventListener('click', imageClick1);
imageSmall2.addEventListener('click', imageClick2);
imageSmall3.addEventListener('click', imageClick3);