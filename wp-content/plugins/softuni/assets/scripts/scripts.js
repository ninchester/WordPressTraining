jQuery(document).ready(function($) {
    $('.filter-portfolio-category').on('click', function(e){
        e.preventDefault();
        let filter_id = jQuery(this).attr('id')

        jQuery.ajax({
            type: 'post',
            dataType: 'json',
            url: my_ajax_object.ajax_url,
            data: {
                action:'filter_portfolio',
                filter_id: filter_id,
            },
            success: function(response){
                if (response.success) {
                    $('.portfolio-items').html(response.data.html);
                }
            }
        });
    });
});