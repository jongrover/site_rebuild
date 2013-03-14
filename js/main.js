$(function(){

	//tabs
	$('#tabs div').hide();
	$('#tabs div:first').show();
	$('#tabs ul li:first').addClass('active');
	$('#tabs ul li a').click(function(){
		$('#tabs ul li').removeClass('active');
		$(this).parent().addClass('active');
		var currentTab = $(this).attr('href');
		$('#tabs div').hide();
		$(currentTab).show();
		return false;
	});

	var v = document.getElementsByTagName('video')[0],
		v2 = document.getElementsByTagName('video')[1],
		a = document.getElementsByTagName('audio')[0],
		a2 = document.getElementsByTagName('audio')[1];

	//stop media playback
	$('#tabs ul li a').click(function(){
		v.pause(); v2.pause();
		a.pause(); a2.pause();
	});

});