/* Insert Jquery header calls into this document */

/* Inserts test HTML into the template - remove this once testing is complete. */
jQuery(document).ready(function ($) {
$('#load-test-html-data').load('temp/test-html.html', function() {
});
});
jQuery(document).ready(function ($) {
$('#load-test-html-menu-data').load('temp/test-html-menu.html', function() {
});
});

/* Remove &nbsp or other random <p> tags from posts */
jQuery(document).ready(function ($) {
$('p').each(function() {
 var $this = $(this);
 if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
     $this.remove(); }); 
});
