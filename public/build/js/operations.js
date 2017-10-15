$(document).ready(function($) {
	
	var form = $("#formNewOperation");


	form.children("div").steps({
	    headerTag: "h2",
	    bodyTag: "section",
	    transitionEffect: "slideLeft",
	    onStepChanging: function (event, currentIndex, newIndex)
	    {
	        //form.validate().settings.ignore = ":disabled,:hidden";
	        return true;//form.valid();
	    },
	    onFinishing: function (event, currentIndex)
	    {
	        //form.validate().settings.ignore = ":disabled";
	        return true;//form.valid();
	    },
	    onFinished: function (event, currentIndex)
	    {
	        alert("Submitted!");
	    }
	});
});