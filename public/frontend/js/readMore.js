
document.addEventListener('DOMContentLoaded', function() {
    // Select all "Read More" links
    document.querySelectorAll('a[data-toggle="description"]').forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
            
            // Get the blog ID from the data attribute
            const blogId = this.getAttribute('data-blog-id');
            const description = document.getElementById('description-' + blogId);
            
            // Toggle the visibility of the description
            if (description.style.display === 'none') {
                description.style.display = 'block';
                this.textContent = 'Read Less'; // Change text to "Read Less"
            } else {
                description.style.display = 'none';
                this.textContent = 'Read More'; // Change text back to "Read More"
            }
        });
    });
});

