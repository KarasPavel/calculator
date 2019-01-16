jQuery(document).ready(function(){
    jQuery('.help_glass_items').on('click', function(){
        console.log("dwfsdff")
        jQuery('.help_glass_items').removeClass('help_glass_items-active');
        jQuery(this).addClass('help_glass_items-active');
    })
});
jQuery(document).ready(function(){
    jQuery('.button_forms_popup>a').on('click', function(){
        console.log("dwfsdff")
        jQuery('.button_forms_popup>a').removeClass('active_a-links');
        jQuery(this).addClass('active_a-links');
    })
});