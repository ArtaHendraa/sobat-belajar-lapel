<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat dengan Gemini AI</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
    /* Menambahkan animasi bounce untuk typing indicator */
    .animate-bounce {
        animation: bounce 1s infinite;
    }

    @keyframes bounce {

        0%,
        100% {
            transform: translateY(-25%);
            animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
        }

        50% {
            transform: translateY(0);
            animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
        }
    }
    </style>
</head>

<body class="bg-gray-100">

    <div class="flex flex-col h-screen bg-[#f5f7fb] w-full max-w-4xl mx-auto shadow-lg">

        <header class="p-4 border-b bg-white">
            <h1 class="text-xl font-bold text-gray-800">Chat AI Sederhana</h1>
        </header>

        <main class="flex-grow p-4 overflow-y-auto">
            <div id="chat-log" class="space-y-4">
                <div class="flex items-start gap-3 justify-start">
                    <img src="https://www.gstatic.com/lamda/images/gemini_sparkle_v002_d4735319ff6ac533a1a7.gif"
                        class="w-8 h-8 rounded-full" alt="AI">
                    <div class="bg-white p-3 rounded-lg rounded-tl-none shadow-sm max-w-lg">
                        <p class="text-md">Halo! Aku asisten AI-mu. Ada yang bisa dibantu hari ini?</p>
                    </div>
                </div>
            </div>
        </main>

        <footer class="w-full p-4 pb-8 bg-[#f5f7fb] border-t border-gray-200">
            <form id="chat-form" class="w-full">
                <div class="relative">
                    <input type="text" id="prompt-input" placeholder="Tanyakan sesuatu..."
                        class="w-full py-4 pl-6 pr-16 text-md bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400 shadow-md transition-shadow" />
                    <button type="submit" id="submit-button"
                        class="absolute right-3 top-1/2 -translate-y-1/2 w-10 h-10 bg-blue-500 hover:bg-blue-600 rounded-full flex items-center justify-center transition-colors disabled:bg-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                        </svg>
                    </button>
                </div>
            </form>
        </footer>
    </div>


    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const chatForm = document.getElementById('chat-form');
        const promptInput = document.getElementById('prompt-input');
        const chatLog = document.getElementById('chat-log');
        const submitButton = document.getElementById('submit-button');

        // Fungsi untuk menambahkan pesan ke log chat
        function appendMessage(message, sender) {
            const messageWrapper = document.createElement('div');
            const messageBubble = document.createElement('div');
            const messageText = document.createElement('p');

            // Ganti newline (\n) dengan tag <br> agar bisa tampil di HTML
            messageText.innerHTML = message.replace(/\n/g, '<br>');
            messageText.classList.add('text-md');

            if (sender === 'user') {
                // Bubble untuk User (di kanan)
                messageWrapper.classList.add('flex', 'items-start', 'gap-3', 'justify-end');
                messageBubble.classList.add('bg-blue-500', 'text-white', 'p-3', 'rounded-lg', 'rounded-br-none',
                    'shadow-sm', 'max-w-lg');
            } else { // sender === 'ai'
                // Bubble untuk AI (di kiri)
                const aiIcon = document.createElement('img');
                aiIcon.src =
                    'https://www.gstatic.com/lamda/images/gemini_sparkle_v002_d4735319ff6ac533a1a7.gif';
                aiIcon.classList.add('w-8', 'h-8', 'rounded-full');
                aiIcon.alt = 'AI';
                messageWrapper.appendChild(aiIcon);

                messageWrapper.classList.add('flex', 'items-start', 'gap-3', 'justify-start');
                messageBubble.classList.add('bg-white', 'p-3', 'rounded-lg', 'rounded-tl-none', 'shadow-sm',
                    'max-w-lg');
            }

            messageBubble.appendChild(messageText);
            messageWrapper.appendChild(messageBubble);
            chatLog.appendChild(messageWrapper);

            // Auto-scroll ke pesan terbaru
            chatLog.parentElement.scrollTop = chatLog.parentElement.scrollHeight;
        }

        // Fungsi untuk menampilkan indikator "mengetik"
        function showTypingIndicator() {
            const typingIndicatorHTML = `
                    <div id="typing-indicator" class="flex items-start gap-3 justify-start">
                        <img src="https://www.gstatic.com/lamda/images/gemini_sparkle_v002_d4735319ff6ac533a1a7.gif" class="w-8 h-8 rounded-full" alt="AI">
                        <div class="bg-white p-3 rounded-lg rounded-tl-none shadow-sm max-w-lg">
                            <div class="flex items-center justify-center space-x-1">
                                <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: -0.3s;"></div>
                                <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: -0.15s;"></div>
                                <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce"></div>
                            </div>
                        </div>
                    </div>
                `;
            chatLog.insertAdjacentHTML('beforeend', typingIndicatorHTML);
            chatLog.parentElement.scrollTop = chatLog.parentElement.scrollHeight;
        }

        function removeTypingIndicator() {
            const typingIndicator = document.getElementById('typing-indicator');
            if (typingIndicator) {
                typingIndicator.remove();
            }
        }

        // Event listener saat form di-submit
        chatForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            const prompt = promptInput.value.trim();
            if (prompt === '') return;

            appendMessage(prompt, 'user');
            promptInput.value = '';
            submitButton.disabled = true;
            showTypingIndicator();

            try {
                // Kirim prompt ke backend (route baru kita)
                const response = await fetch('{{ route("gemini.ask.direct") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                            .getAttribute('content')
                    },
                    body: JSON.stringify({
                        prompt: prompt
                    })
                });

                removeTypingIndicator();

                const data = await response.json();

                if (!response.ok) {
                    throw new Error(data.error || 'Terjadi kesalahan HTTP.');
                }

                appendMessage(data.reply, 'ai');

            } catch (error) {
                console.error('Error:', error);
                removeTypingIndicator();
                appendMessage('Waduh, ada yang salah nih. (' + error.message + ')', 'ai');
            } finally {
                submitButton.disabled = false;
                promptInput.focus();
            }
        });
    });
    </script>

</body>

</html>