<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serverx Inc - Panel Management</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    /* Global styles and background */
    body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
      min-height: 100vh;
      background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 50%, #16213e 100%);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    #particles-js {
      position: fixed;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      background-size: cover;
      background-position: 50% 50%;
      z-index: 1;
      pointer-events: none;
    }

    /* --- Title Styles --- */
    .page-title {
      position: relative;
      z-index: 2;
      color: #00d4ff; /* Bright blue for the title */
      font-size: 3.5rem; /* Large font size */
      font-weight: 700; /* Bold */
      margin-bottom: 50px; /* Space below the title */
      text-shadow: 0 0 20px rgba(0, 212, 255, 0.6); /* Subtle glow effect */
      letter-spacing: 2px; /* Slightly spaced letters */
      text-align: center;
      padding: 0 20px; /* Add some padding for smaller screens */
    }

    /* --- Box Styles --- */
    .box-container {
      position: relative;
      z-index: 2;
      display: flex;
      flex-direction: column;
      gap: 25px; /* Increased space between boxes */
      padding: 20px;
      max-width: 90%;
      width: 600px;
    }

    .main-box {
      background: rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(15px);
      border: 1px solid rgba(255, 255, 255, 0.15);
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
      color: #e0e0e0;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      display: flex; /* Enable flexbox for content inside the box */
      flex-direction: column; /* Stack content vertically */
      align-items: center; /* Center content horizontally */
    }

    .main-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
    }

    .main-box h2 {
      color: #00d4ff;
      margin-bottom: 15px;
      font-weight: 600;
      font-size: 1.8rem;
    }

    .main-box p {
      font-size: 1rem;
      line-height: 1.6;
      color: rgba(255, 255, 255, 0.8);
      margin-bottom: 25px; /* Space before the button */
      flex-grow: 1; /* Allows paragraph to take available space */
    }

    /* --- Button Styles --- */
    .btn-enter {
      display: inline-block; /* Make it behave like a block but respect content width */
      padding: 12px 30px;
      background: linear-gradient(45deg, #00d4ff, #8a2be2); /* Blue to Purple gradient */
      border: none;
      border-radius: 8px;
      color: white;
      font-weight: 600;
      font-size: 1.1rem;
      text-decoration: none; /* Remove underline from link */
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .btn-enter:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(0, 212, 255, 0.4); /* Glow effect on hover */
      background: linear-gradient(45deg, #8a2be2, #00d4ff); /* Reverse gradient on hover */
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .page-title {
        font-size: 2.5rem; /* Smaller title on smaller screens */
        margin-bottom: 30px;
      }
      .box-container {
        width: 95%;
        padding: 15px;
        gap: 20px;
      }
      .main-box {
        padding: 25px;
      }
      .main-box h2 {
        font-size: 1.5rem;
      }
      .main-box p {
        font-size: 0.9rem;
        margin-bottom: 20px;
      }
      .btn-enter {
        padding: 10px 25px;
        font-size: 1rem;
      }
    }

    @media (max-width: 480px) {
        .page-title {
            font-size: 2rem;
        }
    }
  </style>
</head>
<body>
  <div id="particles-js"></div>

  <h1 class="page-title">Serverx Panel ⚡</h1>

  <div class="box-container">
    <div class="main-box">
      <h2>Panel 1</h2>
      <p></p>
      <a href="https://bot-hosting.net/panel/" target="_blank" class="btn-enter">Enter</a>
    </div>

    <div class="main-box">
      <h2>Panel 2</h2>
      <p></p>
      <a href="https://bot-hosting.net/panel/" target="_blank" class="btn-enter">Enter</a>
    </div>

    <div class="main-box">
      <h2>Panel 3</h2>
      <p></p>
      <a href="https://bot-hosting.net/panel/" target="_blank" class="btn-enter">Enter</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script>
    particlesJS("particles-js", {
      "particles": {
        "number": {
          "value": 80,
          "density": {
            "enable": true,
            "value_area": 800
          }
        },
        "color": {
          "value": "#00d4ff"
        },
        "shape": {
          "type": "circle",
          "stroke": {
            "width": 0,
            "color": "#000000"
          }
        },
        "opacity": {
          "value": 0.5,
          "random": false,
          "anim": {
            "enable": false,
            "speed": 1,
            "opacity_min": 0.1,
            "sync": false
          }
        },
        "size": {
          "value": 3,
          "random": true,
          "anim": {
            "enable": false,
            "speed": 40,
            "size_min": 0.1,
            "sync": false
          }
        },
        "line_linked": {
          "enable": true,
          "distance": 150,
          "color": "#00d4ff",
          "opacity": 0.4,
          "width": 1
        },
        "move": {
          "enable": true,
          "speed": 6,
          "direction": "none",
          "random": false,
          "straight": false,
          "out_mode": "out",
          "bounce": false,
          "attract": {
            "enable": false,
            "rotateX": 600,
            "rotateY": 1200
          }
        }
      },
      "interactivity": {
        "detect_on": "canvas",
        "events": {
          "onhover": {
            "enable": true,
            "mode": "grab"
          },
          "onclick": {
            "enable": true,
            "mode": "push"
          },
          "resize": true
        },
        "modes": {
          "grab": {
            "distance": 140,
            "line_linked": {
              "opacity": 1
            }
          },
          "bubble": {
            "distance": 400,
            "size": 40,
            "duration": 2,
            "opacity": 8,
            "speed": 3
          },
          "repulse": {
            "distance": 200,
            "duration": 0.4
          },
          "push": {
            "particles_nb": 4
          },
          "remove": {
            "particles_nb": 2
          }
        }
      },
      "retina_detect": true
    });
  </script>
</body>
</html>
