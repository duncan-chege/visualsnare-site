(function ($) {
    let currentPage = 1;

    function loadPosts(paged) {
        $.ajax({
            url: ajaxpagination.ajax_url,
            type: 'POST',
            data: {
                action: 'load_more_posts',
                paged: paged,
            },
            success: function (response) {
                // Parse the JSON response
                const { html, hasNext, hasPrev } = response;

                // Replace grid content with new posts
                $('.grid.web-dev').html(html);

                // Disable or enable buttons based on availability of posts
                if (hasNext) {
                    $('#next-button').prop('disabled', false);
                } else {
                    $('#next-button').prop('disabled', true);
                }

                if (hasPrev) {
                    $('#prev-button').prop('disabled', false);
                } else {
                    $('#prev-button').prop('disabled', true);
                }
            },
        });
    }

    // Handle Next Button
    $('#next-button').on('click', function () {
        currentPage++;
        loadPosts(currentPage);
    });

    // Handle Previous Button
    $('#prev-button').on('click', function () {
        if (currentPage > 1) {
            currentPage--;
            loadPosts(currentPage);
        }
    });

    // Initial Load
    loadPosts(currentPage);
})(jQuery);
