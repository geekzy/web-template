/* Insert Jquery header calls into this document */

/* Remove &nbsp or other random <p> tags from posts */
jQuery(document).ready(function ($) {
$('p').each(function() {
 var $this = $(this);
 if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
     $this.remove(); }); 
});
