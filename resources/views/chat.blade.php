<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with Gemini</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.js') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- CSS Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <style>
        <style>.hero {
            background-image: url('{{ asset('assets/bg.jpg') }}');
            /* Ganti dengan path gambar Anda */
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding-top: 100px;
            /* Menyesuaikan jarak vertikal */
            flex-direction: column;
        }

        .hero-overlay {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 30px;
            border-radius: 10px;
            max-width: 800px;
            width: 100%;
        }

        .btn-selengkapnya {
            margin-top: 50px;
            /* Menambahkan margin untuk menurunkan posisi tombol */
            background-color: transparent;
            /* Membuat background tombol transparan */
            color: white;
            /* Warna teks tombol */
            border: 2px solid white;
            /* Border putih agar tombol terlihat */
        }

        .btn-selengkapnya:hover {
            background-color: rgba(255, 255, 255, 0.2);
            /* Efek hover dengan sedikit transparansi */
            color: white;
        }

        .navbar-custom {
            background-color: #FC8F54;
        }

        body {
            background-color: #f0f2f5;
            font-family: 'Arial', sans-serif;
        }

        .chat-container {
            max-width: 800px;
            margin: auto;
        }

        #chat-box {
            height: 400px;
            overflow-y: auto;
            border-radius: 8px;
            padding: 20px;
            background: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            margin-top: 20px
        }

        .chat-bubble {
            border-radius: 12px;
            padding: 10px 15px;
            margin-bottom: 10px;
            max-width: 70%;
            display: inline-block;
            word-wrap: break-word;
        }

        .user-message {
            background-color: #007bff;
            color: #fff;
            float: right;
            clear: both;
            text-align: right;
        }

        .gemini-message {
            background-color: #f1f1f1;
            color: #333;
            float: left;
            clear: both;
            text-align: left;
        }

        .message-header {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .input-group {
            margin-top: 15px;
        }

        .btn-primary {
            border-radius: 50px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="padding-left: 15px;"><img src="assets/logo.jpg" alt="Logo"
                    style="height: 30px; width: 30px; border-radius: 50%; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); margin-right: 8px;">
                Wisata Desa Pampang </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/tentang') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/wisata') }}">Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/fasilitas') }}">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">
                            <i class="fas fa-user"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3 chat-container">
        <h3 class="text-center">Chat with Gemini</h3>
        <div id="chat-box"></div>
        <form id="chat-form">
            <div class="input-group">
                <input type="text" id="user-message" class="form-control" placeholder="Type your message here"
                    required>
                <button class="btn btn-primary" type="submit">Send</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        const chatBox = document.getElementById('chat-box');
        const chatForm = document.getElementById('chat-form');
        const userMessage = document.getElementById('user-message');

        chatForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const message = userMessage.value;
            if (!message.trim()) {
                alert("Please enter a message before sending.");
                return;
            }
            // Append user message to chat box
            chatBox.innerHTML += `<div class="chat-bubble user-message">${message}</div>`;
            userMessage.value = '';
            // Send message to the server
            try {
                const response = await axios.post('/chat/send', { message });
                // const botReply = response.data.reply || "Sorry, I didn't understand that.";
                chatBox.innerHTML += `<div class="chat-bubble gemini-message">${response.data.reply}</div>`;
                chatBox.scrollTop = chatBox.scrollHeight;
            } catch (error) {
                console.error("Error sending message:", error);
                chatBox.innerHTML +=
                    `<div class="chat-bubble gemini-message">Error: Unable to send message. Please try again later.</div>`;
                chatBox.scrollTop = chatBox.scrollHeight;
            }
        });
    </script>
</body>

</html>
