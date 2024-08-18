
document.addEventListener('DOMContentLoaded', function() {
    let initialBlogs = document.getElementById('blog-container').innerHTML; // Store initial blogs
    const loadMoreBtn = document.getElementById('load-more');
    const resetBlogsBtn = document.getElementById('reset-blogs');

    loadMoreBtn.addEventListener('click', function(event) {
        event.preventDefault();
        
        let page = this.getAttribute('data-page');
        let button = this;
        
        // Fetch more blog posts using AJAX
        fetch('/your-route?page=' + page, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.html) {
                document.getElementById('blog-container').insertAdjacentHTML('beforeend', data.html);
                button.setAttribute('data-page', parseInt(page) + 1); // Update to next page number

                // Show reset button after loading more posts
                resetBlogsBtn.style.display = 'inline-block';
            } else {
                button.style.display = 'none'; // Hide button if no more posts
            }
        });
    });

    resetBlogsBtn.addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('blog-container').innerHTML = initialBlogs; // Reset to initial state
        loadMoreBtn.setAttribute('data-page', '2'); // Reset page to 2
        loadMoreBtn.style.display = 'inline-block'; // Show "Load More" button again
        this.style.display = 'none'; // Hide reset button
    });
});
