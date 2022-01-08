
<nav>
        <button class="nav-toggle">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="links">
            <li><a href="/">Home</a></li>
            <li><a href="welcome">Post</a></li>
        </ul>
    </nav>
    
    <script>
        const navtoggle = document.querySelector('.nav-toggle');
        const links = document.querySelector('.links');
        navtoggle.addEventListener('click', function () {
            if (links.classList.contains('navlinks')) {
                links.classList.remove('navlinks')
            } else {
                links.classList.add('navlinks')
            }
        })
    </script>
