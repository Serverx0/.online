// Toggle icon navbar
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

if (menuIcon && navbar) {
    menuIcon.onclick = () => {
        menuIcon.classList.toggle('bx-x');
        navbar.classList.toggle('active');
    };
}

// Scroll sections
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        if (!sec) return;

        let top = window.scrollY;
        let offset = sec.offsetTop - 100;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if (top >= offset && top < offset + height && id) {
            // Active navbar links
            navLinks.forEach(links => {
                if (!links) return;
                links.classList.remove('active');
                const activeLink = document.querySelector('header nav a[href*=' + id + ']');
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            });
            // Active sections for animation on scroll
            sec.classList.add('show-animate');
        } else {
            sec.classList.remove('show-animate');
        }
    });

    // Sticky navbar
    let header = document.querySelector('header');
    if (header) {
        header.classList.toggle('sticky', window.scrollY > 100);
    }

    // Remove toggle icon and navbar when clicking navbar links (scroll)
    if (menuIcon && navbar) {
        menuIcon.classList.remove('bx-x');
        navbar.classList.remove('active');
    }

    // Animation footer on scroll
    let footer = document.querySelector('footer');
    if (footer) {
        footer.classList.toggle('show-animate', window.innerHeight + window.scrollY >= document.scrollingElement.scrollHeight);
    }
};

// Function to create rain effect
function createRain() {
    const rainContainer = document.createElement("div");
    rainContainer.classList.add("rain");
    document.body.appendChild(rainContainer);

    const numDrops = 100; // Adjust the number of raindrops

    for (let i = 0; i < numDrops; i++) {
        const raindrop = document.createElement("div");
        raindrop.classList.add("raindrop");

        // Apply a random delay and random positioning
        raindrop.style.left = `${Math.random() * 100}vw`;  // Random horizontal position
        raindrop.style.animationDuration = `${Math.random() * 2 + 1}s`; // Random speed for fall
        raindrop.style.setProperty("--i", i);  // Custom property to spread the drops out

        rainContainer.appendChild(raindrop);
    }
}

// Toggle search box
function toggleSearchBox() {
    let searchBox = document.getElementById("searchBox");
    searchBox.style.display = (searchBox.style.display === "none" || searchBox.style.display === "") ? "block" : "none";
}

// Search function
function searchData() {
    let input = document.getElementById("searchInput").value.toLowerCase();
    let headings = document.getElementsByClassName("result-item");

    // Hide all sections initially
    for (let i = 0; i < headings.length; i++) {
        headings[i].style.display = "none";
    }

    // Show matching results
    if (input !== "") {
        for (let i = 0; i < headings.length; i++) {
            let headingText = headings[i].textContent.toLowerCase();
            if (headingText.includes(input)) {
                headings[i].style.display = "block";
                // Scroll the matching section into view
                headings[i].scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    }
}

// Fetch count from server
async function fetchCount() {
    try {
        let response = await fetch('/count');
        let data = await response.json();
        const countElement = document.getElementById("count");
        if (countElement) {
            countElement.innerText = data.count;
        }
    } catch (error) {
        console.error("Error fetching count:", error);
    }
}

// Unified window.onload function
window.onload = function() {
    createRain();
    fetchCount();

    const welcomeMessage = document.getElementById('welcome-message');
    if (welcomeMessage) {
        const username = localStorage.getItem('username');
        welcomeMessage.textContent = username ? `Welcome, ${username}!` : 'Welcome, Guest!';
    }
};
function logout() {
    Swal.fire({
        title: 'Are you sure?',
        text: "Do you want to logout?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, logout!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "/logout"; // Proceed to logout
        }
    });
}