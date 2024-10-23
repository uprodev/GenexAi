jQuery(document).ready(function($) { 

	$(document).on('click', '#pricing_popup_submit', function(){
		$( "input[type='radio']:checked" ).each(function(index, element) {
			$('#current_' + element.getAttribute('name')).val(element.getAttribute('value'));
		});
	});

});


window.onload = () => {
     let buttons = document.getElementsByClassName("get_webinar_button");
     let titles = document.getElementsByClassName("get_webinar_title");
     let title = document.getElementById("set_webinar_title_5");
     let hiddenField = document.getElementById("current_webinar_5");
     if (buttons.length > 0) {
         for (let i = 0; i < buttons.length; i++) {
             buttons[i].onclick = function(){
              title.innerText = titles[i].innerText;
              hiddenField.value = titles[i].innerText;
          };
      }
  }
};