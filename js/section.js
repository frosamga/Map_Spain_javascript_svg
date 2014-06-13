	function sectionResize(){

		var altura= $(document.body).height();
		var mySection = $("#mySection");
		var centerSection = $("#centerSection");
		var portfolio = $("#portfolio");
		var header = $("#header");
		var footer = $("#footer");
		var res= altura - header.height() - footer.height() - 20;
		var padding =(res-portfolio.height())/2 ;

		mySection.css({minHeight:res});
		centerSection.css({paddingTop:padding})

		//alert(res + "-" + portfolio.height() + "-" + padding);
	}

	$(document).ready(function () {$(window).resize(sectionResize); $(window).load(sectionResize);});
	
