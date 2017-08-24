$(document).ready(function(){
	$(".personaField").hide();
	$("input[name='personaRadio']").change(function() {
        $('.personaField').hide();
        $('.personaField-'+$("input[name='personaRadio']:checked").val()).show();
    });

    $(".representadoField").hide();
	$("input[name='representadoRadio']").change(function() {
        $('.representadoField').hide();
        $('.representadoField-'+$("input[name='representadoRadio']:checked").val()).show();
    });

	$('#dashboard-tabs a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	});

	$('.chooseRadio').hide();

	$("input[name='chooseRadio']").change(function() {
        $('.chooseRadio').hide();
        $('.chooseRadio-'+$("input[name='chooseRadio']:checked").val()).show();
    });

	var show = getUrlParameter('show');
	$.each(show.split(','),function(i,e){
		console.log(e);
		$('#'+e).removeClass('hidden');
	});

});

function getUrlParameter(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) 
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) 
        {
            return sParameterName[1];
        }
    }
}   