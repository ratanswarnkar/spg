<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Solartec - Renewable Energy Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Greator Noida, Uttar Pradesh</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+91 9555872224</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="/" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <img src="img/logo.png" alt="SPG STEAL Logo" style="height:64px; width:94px;">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
       <div class="navbar-nav ms-auto p-4 p-lg-0">

    <a href="{{ url('/') }}"
       class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">
        Home
    </a>

    <a href="{{ url('about') }}"
       class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">
        About
    </a>

    <a href="{{ url('services') }}"
       class="nav-item nav-link {{ request()->is('services*') ? 'active' : '' }}">
        Service
    </a>

    <a href="{{ url('projects') }}"
       class="nav-item nav-link {{ request()->is('projects*') ? 'active' : '' }}">
        Project
    </a>

    <a href="{{ url('contact') }}"
       class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">
        Contact
    </a>

</div>

        <a href="#" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block"><i></i></a>
    </div>
</nav>

    <!-- Navbar End -->
     <!-- 🌿 SPG Steel - Green & White Solar Chatbot (Left Side Version) -->
<style>
  /* Floating Chat Button */
  #chatbot-btn {
    position: fixed;
    bottom: 53px;
    left: 25px; /* ✅ Shifted to Left */
    background: transparent;
    border: none;
    border-radius: 50%;
    width: 70px;
    height: 70px;
    cursor: pointer;
    z-index: 9999;
  }

  #chatbot-btn img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    box-shadow: 0 0 15px rgba(50, 195, 108, 0.5);
    transition: transform 0.2s;
  }

  #chatbot-btn img:hover {
    transform: scale(1.1);
  }
#chat-window {
  background: #e9f6ee; /* light green background */
}
  /* Chat Window */
  #chat-window {
    
    position: fixed;
    bottom: 110px;
    left: 25px; /* ✅ Shifted to Left */
    width: 350px;
    max-height: 550px;
    background: #fff;
    border: 2px solid #32c36c;
    border-radius: 15px;
    display: none;
    flex-direction: column;
    box-shadow: 0 0 25px rgba(50, 195, 108, 0.2);
    overflow: hidden;
    z-index: 9999;
  }
/* Chat Header */
#chat-header {
  background: #1e8e3e; /* dark green */
  color: #fff;
  padding: 12px;
  text-align: center;
  font-weight: bold;
  position: relative;
}

/* Close Button */
#chat-close {
  position: absolute;
  right: 15px;
  top: 10px;
  cursor: pointer;
  font-size: 18px;
  color: #fff;
  transition: 0.3s;
}

#chat-close:hover {
  color: #ffdddd;
  transform: scale(1.2);
}

/* Chat Body */
#chat-body {
  background: #f4fff7; /* lighter green */
}

/* Bot Message */
.bot-msg {
  background: rgba(30, 142, 62, 0.15);
  color: #0c7a3e;
  border: 1px solid rgba(30, 142, 62, 0.3);
}

/* User Message */
.user-msg {
  background: linear-gradient(90deg, #1e8e3e, #32c36c);
  color: #fff;
}

  .bot-msg {
    background: rgba(50, 195, 108, 0.1);
    color: #0c7a3e;
    border: 1px solid rgba(50, 195, 108, 0.3);
    align-self: flex-start;
  }

  .user-msg {
    background: linear-gradient(90deg, #32c36c, #27a85c);
    color: #fff;
    align-self: flex-end;
    font-weight: 500;
  }

  .option-btn {
    display: inline-block;
    margin: 5px 3px;
    padding: 8px 12px;
    background-color: #32c36c;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 13px;
    transition: 0.3s;
  }

  .option-btn:hover {
    background-color: #27a85c;
  }

  /* SweetAlert Styling */
  .swal2-popup {
    background-color: #fff !important;
    border: 1px solid #32c36c;
    color: #333 !important;
    font-family: "Poppins", sans-serif;
  }

  .swal2-input {
    border: 1px solid #32c36c !important;
    background: #f9fff9 !important;
    color: #333 !important;
  }

  .swal2-confirm {
    background-color: #32c36c !important;
    color: #fff !important;
    border-radius: 5px !important;
  }
</style>

<!-- Chatbot Trigger Button -->
<button id="chatbot-btn">
  <video autoplay loop muted playsinline style="width:115%; height:150%; border-radius:50%; object-fit:unset;">
    <source src="img/hatboat.mp4" type="video/mp4">
  </video>
</button>

<!-- Chatbot Window -->
<div id="chat-window">
  <div id="chat-header">
  SPG Steel Assistant 🤖
  <span id="chat-close">✖</span>
</div>

  <div id="chat-body"></div>
</div>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  const chatBtn = document.getElementById("chatbot-btn");
  const chatWindow = document.getElementById("chat-window");
  const chatBody = document.getElementById("chat-body");

  let step = 0;
  let formData = {};

  const questions = [
    {
      text: "👋 Welcome to SPG Steel — over 11 years of excellence in solar mounting structures. How can we assist you today?",
      options: [
        "I want to Buy Solar Structure",
        "I want to Know About Services",
        "I want a Quotation",
        "Contact Sales Team"
      ]
    },
    {
      text: "Please select the type of structure you’re interested in:",
      options: [
        "Rooftop Mounting",
        "Ground Mounting",
        "Carport Structure",
        "Customized Design"
      ]
    },
    {
      text: "Where do you plan to install the structure?",
      options: [
        "Residential Building",
        "Commercial Project",
        "Industrial Roof",
        "Solar Farm / Open Land"
      ]
    },
    {
      text: "What’s your estimated project size (in kW)?",
      options: ["<50kW", "50–200kW", "200–500kW", ">500kW"]
    },
    {
      text: "Would you like us to include engineering design & drawings?",
      options: ["Yes, please", "No, only quotation needed"]
    },
    {
      text: "Do you need galvanising & welding services as part of fabrication?",
      options: ["Yes", "No", "Need More Info"]
    },
    {
      text: "Would you like to know about our manufacturing units?",
      options: ["Yes", "No"]
    },
    {
      text: "📞 Please choose how you’d like to connect with our expert team:",
      options: ["Request a Call Back", "Chat on WhatsApp", "Email Follow-up"]
    }
  ];

  function botMessage(text) {
    const msg = document.createElement("div");
    msg.className = "bot-msg";
    msg.textContent = text;
    chatBody.appendChild(msg);
    chatBody.scrollTop = chatBody.scrollHeight;
  }

  function addOptions(options) {
    options.forEach(opt => {
      const btn = document.createElement("div");
      btn.className = "option-btn";
      btn.textContent = opt;
      btn.onclick = () => handleUserResponse(opt);
      chatBody.appendChild(btn);
    });
    chatBody.scrollTop = chatBody.scrollHeight;
  }

  function handleUserResponse(response) {
    const msg = document.createElement("div");
    msg.className = "user-msg";
    msg.textContent = response;
    chatBody.appendChild(msg);
    formData[`q_${step + 1}`] = response;

    step++;
    chatBody.scrollTop = chatBody.scrollHeight;
    setTimeout(nextQuestion, 500);
  }

  function nextQuestion() {
    if (step < questions.length) {
      botMessage(questions[step].text);
      addOptions(questions[step].options);
    } else {
      botMessage("✅ Thank you! Our SPG Steel expert will contact you shortly about your solar project.");
      sendDataToFormspree();
      setTimeout(() => {
        Swal.fire("Thank You!", "Our representative will reach out to you soon.", "success");
        chatWindow.style.display = "none";
      }, 2000);
    }
  }
function startChat() {
  Swal.fire({
    title: "Let’s Get Started 🌞",
    html: `
      <form id="chatStartForm">
        <input name="name" class="swal2-input" placeholder="Your Name" required>
        <input name="phone" class="swal2-input" placeholder="Phone Number" required type="tel">
        <input name="email" class="swal2-input" placeholder="Email Address" required type="email">
      </form>
    `,
    showCloseButton: true,          // ✅ CLOSE (❌) BUTTON
    closeButtonHtml: '✖',           // Optional custom icon
    confirmButtonText: "Start Chat",
    confirmButtonColor: "#1e8e3e",  // Green button
    cancelButtonText: "Cancel",
    focusConfirm: false,
    preConfirm: () => {
      const name = document.querySelector("input[name=name]").value;
      const phone = document.querySelector("input[name=phone]").value;
      const email = document.querySelector("input[name=email]").value;

      if (!name || !phone || !email) {
        Swal.showValidationMessage("Please fill all fields");
        return false;
      }

      formData.name = name;
      formData.phone = phone;
      formData.email = email;
    }
  }).then((result) => {
    if (result.isConfirmed) {
      chatWindow.style.display = "flex";
      botMessage(`Hello ${formData.name}! 👋`);
      setTimeout(nextQuestion, 700);
    }
  });
}


  function sendDataToFormspree() {
    fetch("https://formspree.io/f/xdfgdsfn", { // ✅ Updated Formspree ID
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(formData)
    });
  }

  chatBtn.addEventListener("click", startChat);
</script>
<script>
  document.addEventListener("click", function (e) {
    if (e.target.id === "chat-close") {
      chatWindow.style.display = "none";
    }
  });
</script>

