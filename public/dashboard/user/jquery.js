$(document).ready(function() {
    $('.task-list-link').click(function(e) {
        e.preventDefault();
        // Make an AJAX request to fetch the Task List content
        $.ajax({
            url: $(this).attr('href'),
            success: function(response) {
                // Update the content of the main section
                $('#mainContent').html(response);
            },
            error: function() {
                // Handle error if the request fails
                console.log('Error fetching Task List');
            }
        });
    });
});
