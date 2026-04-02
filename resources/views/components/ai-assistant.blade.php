<!-- Floating Button -->
<div id="ai-chat-btn" class="fixed bottom-6 right-6 z-50 flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-tr from-blue-600 to-cyan-500 shadow-[0_0_20px_rgba(34,211,238,0.5)] cursor-pointer hover:scale-110 hover:shadow-[0_0_30px_rgba(34,211,238,0.8)] transition-all duration-300">
    <i class="fas fa-robot text-white text-2xl animate-pulse"></i>
    <!-- Notification dot -->
    <span class="absolute top-0 right-0 w-3.5 h-3.5 bg-red-500 border-2 border-slate-900 rounded-full"></span>
</div>

<!-- Chat Window -->
<div id="ai-chat-window" class="fixed bottom-20 left-1/2 -translate-x-1/2 sm:translate-x-0 sm:left-auto sm:bottom-24 sm:right-6 w-[92vw] sm:w-96 h-[500px] max-h-[80vh] rounded-2xl overflow-hidden shadow-2xl z-50 transform scale-0 opacity-0 origin-bottom-right sm:origin-bottom-right transition-all duration-300 flex flex-col border border-blue-500/20 bg-white/90 dark:bg-slate-900/90 backdrop-blur-xl">
    
    <!-- Header -->
    <div class="bg-gradient-to-r from-blue-600 to-cyan-500 p-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center border border-white/30 text-white">
                <i class="fas fa-robot text-xl"></i>
            </div>
            <div>
                <h3 class="text-white font-bold text-lg leading-tight">Arctic Guide</h3>
                <p class="text-blue-100 text-xs">
                    <span class="lang-id">Asisten AI Cerdas</span>
                    <span class="lang-en">Smart AI Assistant</span>
                </p>
            </div>
        </div>
        <div class="flex items-center gap-1">
            <button id="ai-chat-clear" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-white/20 text-white/80 hover:text-white transition-colors" title="Clear Chat">
                <i class="fas fa-trash-alt text-sm"></i>
            </button>
            <button id="ai-chat-close" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-white/20 text-white/80 hover:text-white transition-colors" title="Close">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>
    </div>

    <!-- Chat Body -->
    <div id="ai-chat-messages" class="flex-1 overflow-y-auto p-4 flex flex-col gap-4 text-sm scroll-smooth relative">
        
        <!-- Welcome Message -->
        <div class="flex items-start gap-2">
            <div class="w-8 h-8 rounded-full bg-blue-500/20 flex-shrink-0 flex items-center justify-center text-blue-600 dark:text-blue-400">
                <i class="fas fa-robot text-sm"></i>
            </div>
            <div class="bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 p-3 rounded-2xl rounded-tl-sm max-w-[85%] leading-relaxed border border-slate-200 dark:border-slate-700">
                <span class="lang-id">Halo! Saya Arctic Guide 🧊 Mari menjelajahi fungsi sensor, sejarah eksplorasi, atau hewan Arktik. Ada yang bisa saya bantu?</span>
                <span class="lang-en">Hello! I am Arctic Guide 🧊 Let's explore sensor functions, Arctic history, or fauna. How can I help you today?</span>
            </div>
        </div>

    </div>

    <!-- Suggestions -->
    <div id="ai-chat-suggestions" class="px-4 pb-2 pt-1 flex gap-2 overflow-x-auto hide-scrollbar bg-white/50 dark:bg-slate-900/50 border-t border-slate-200/50 dark:border-slate-800/50">
        <button class="suggestion-chip whitespace-nowrap px-3 py-1.5 bg-blue-100 dark:bg-blue-900/40 text-blue-700 dark:text-blue-300 rounded-full text-xs hover:bg-blue-200 dark:hover:bg-blue-800/60 transition-colors border border-blue-200 dark:border-blue-800" type="button">
            <span class="lang-id">Kenapa Beruang Kutub putih?</span><span class="lang-en">Why are Polar Bears white?</span>
        </button>
        <button class="suggestion-chip whitespace-nowrap px-3 py-1.5 bg-blue-100 dark:bg-blue-900/40 text-blue-700 dark:text-blue-300 rounded-full text-xs hover:bg-blue-200 dark:hover:bg-blue-800/60 transition-colors border border-blue-200 dark:border-blue-800" type="button">
            <span class="lang-id">Ceritakan sejarah Arktik</span><span class="lang-en">Tell me Arctic history</span>
        </button>
        <button class="suggestion-chip whitespace-nowrap px-3 py-1.5 bg-cyan-100 dark:bg-cyan-900/40 text-cyan-700 dark:text-cyan-300 rounded-full text-xs hover:bg-cyan-200 dark:hover:bg-cyan-800/60 transition-colors border border-cyan-200 dark:border-cyan-800" type="button">
            <span class="lang-id">Apa itu Arctic Vision?</span><span class="lang-en">What is Arctic Vision?</span>
        </button>
    </div>

    <!-- Input Area -->
    <div class="p-3 border-t border-slate-200 dark:border-slate-800 bg-white/50 dark:bg-slate-900/50">
        <form id="ai-chat-form" class="relative flex items-center">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" id="ai-chat-input" placeholder="Tanya apa saja / Ask anything..." class="w-full bg-slate-100 dark:bg-slate-800 text-slate-800 dark:text-slate-200 border-none rounded-full pl-4 pr-12 py-3 focus:ring-2 focus:ring-blue-500 focus:outline-none placeholder-slate-400 dark:placeholder-slate-500 transition-shadow">
            <button type="submit" class="absolute right-2 w-9 h-9 flex items-center justify-center rounded-full bg-blue-600 text-white hover:bg-blue-700 hover:scale-105 transition-all text-sm">
                <i class="fas fa-paper-plane"></i>
            </button>
        </form>
        <p class="text-[10px] text-center text-slate-400 mt-2">
            <span class="lang-id">Gunakan dengan bijak! Obrolan dibatasi kuota secara sistematis.</span>
            <span class="lang-en">Use wisely! Daily chat quotas are systematically enforced.</span>
        </p>
    </div>
</div>

<style>
    /* Custom Scrollbar for Chat Box */
    #ai-chat-messages::-webkit-scrollbar,
    #ai-chat-suggestions::-webkit-scrollbar {
        height: 4px;
        width: 6px;
    }
    #ai-chat-messages::-webkit-scrollbar-track,
    #ai-chat-suggestions::-webkit-scrollbar-track {
        background: transparent;
    }
    #ai-chat-messages::-webkit-scrollbar-thumb,
    #ai-chat-suggestions::-webkit-scrollbar-thumb {
        background-color: rgba(148, 163, 184, 0.3);
        border-radius: 10px;
    }
    .chat-typing-dots span {
        animation: chatTyping 1.4s infinite both;
        height: 6px;
        width: 6px;
        background-color: currentColor;
        border-radius: 50%;
        display: inline-block;
        margin: 0 1px;
    }
    .chat-typing-dots span:nth-child(1) { animation-delay: -0.32s; }
    .chat-typing-dots span:nth-child(2) { animation-delay: -0.16s; }
    @keyframes chatTyping {
        0%, 80%, 100% { transform: scale(0); }
        40% { transform: scale(1); }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const btnOpen = document.getElementById('ai-chat-btn');
    const windowChat = document.getElementById('ai-chat-window');
    const btnClose = document.getElementById('ai-chat-close');
    const form = document.getElementById('ai-chat-form');
    const input = document.getElementById('ai-chat-input');
    const messagesBox = document.getElementById('ai-chat-messages');
    let isOpen = false;

    // Toggle Window Function
    function toggleChat() {
        isOpen = !isOpen;
        if (isOpen) {
            windowChat.classList.remove('scale-0', 'opacity-0');
            windowChat.classList.add('scale-100', 'opacity-100');
            // Remove notification dot when opened
            const dot = btnOpen.querySelector('span');
            if(dot) dot.remove();
            setTimeout(() => input.focus(), 300);
        } else {
            windowChat.classList.remove('scale-100', 'opacity-100');
            windowChat.classList.add('scale-0', 'opacity-0');
        }
    }

    btnOpen.addEventListener('click', toggleChat);
    btnClose.addEventListener('click', toggleChat);

    // Clear Chat
    document.getElementById('ai-chat-clear').addEventListener('click', () => {
        const welcomeMessage = messagesBox.firstElementChild;
        messagesBox.innerHTML = '';
        if(welcomeMessage) {
            messagesBox.appendChild(welcomeMessage);
        }
        document.getElementById('ai-chat-suggestions').style.display = 'flex';
    });

    // Suggestions
    document.querySelectorAll('.suggestion-chip').forEach(chip => {
        chip.addEventListener('click', () => {
            const activeLang = document.documentElement.lang === 'en' ? '.lang-en' : '.lang-id';
            input.value = chip.querySelector(activeLang).textContent;
            form.dispatchEvent(new Event('submit'));
            document.getElementById('ai-chat-suggestions').style.display = 'none';
        });
    });

    // Helpers to create message bubbles
    function addUserMessage(text) {
        const div = document.createElement('div');
        div.className = "flex items-start justify-end gap-2 shrink-0 animate-fade-in-up";
        div.innerHTML = `
            <div class="bg-blue-600 text-white p-3 rounded-2xl rounded-tr-sm max-w-[85%] leading-relaxed shadow-md">
                ${text}
            </div>
        `;
        messagesBox.appendChild(div);
        setTimeout(() => {
            messagesBox.scrollTo({ top: messagesBox.scrollHeight, behavior: 'smooth' });
        }, 50);
    }

    function addAiMessage(text, isHTML = false) {
        const div = document.createElement('div');
        div.className = "flex items-start gap-2 shrink-0 animate-fade-in-up";
        // Convert basic newline to <br> if not fully HTML
        let formattedText = isHTML ? text : text.replace(/\n/g, '<br>');
        div.innerHTML = `
            <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-500 to-cyan-400 flex-shrink-0 flex items-center justify-center text-white shadow-sm">
                <i class="fas fa-robot text-sm"></i>
            </div>
            <div class="bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-200 p-3 rounded-2xl rounded-tl-sm max-w-[85%] leading-relaxed border border-slate-200 dark:border-slate-700">
                ${formattedText}
            </div>
        `;
        messagesBox.appendChild(div);
        setTimeout(() => {
            messagesBox.scrollTo({ top: messagesBox.scrollHeight, behavior: 'smooth' });
        }, 50);
        return div; // Return so we can remove it if it was a loader
    }

    function showTyping() {
        const div = document.createElement('div');
        div.id = 'ai-typing-indicator';
        div.className = "flex items-start gap-2 shrink-0";
        div.innerHTML = `
            <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-500 to-cyan-400 flex-shrink-0 flex items-center justify-center text-white shadow-sm">
                <i class="fas fa-robot text-sm"></i>
            </div>
            <div class="bg-slate-100 dark:bg-slate-800 text-slate-700 p-4 rounded-2xl rounded-tl-sm chat-typing-dots">
                <span></span><span></span><span></span>
            </div>
        `;
        messagesBox.appendChild(div);
        setTimeout(() => {
            messagesBox.scrollTo({ top: messagesBox.scrollHeight, behavior: 'smooth' });
        }, 50);
        return div;
    }

    // Handle Submit
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        const msg = input.value.trim();
        if (!msg) return;

        // Display User Msg
        addUserMessage(msg);
        input.value = '';
        input.disabled = true;

        // Display Loading
        const typingIndicator = showTyping();

        try {
            const token = document.querySelector('input[name="_token"]').value;
            const currentLang = document.documentElement.lang || 'id';
            const res = await fetch('/ai/chat', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': token
                },
                body: JSON.stringify({ message: msg, lang: currentLang })
            });

            const data = await res.json();
            
            // Remove typing indicator
            typingIndicator.remove();

            if (res.ok) {
                addAiMessage(data.reply);
            } else {
                addAiMessage("Hmm.. " + (data.reply || "Gagal menghubungkan ke server AI."));
            }
        } catch (error) {
            typingIndicator.remove();
            addAiMessage("Maaf, jaringan ke kutub sedang terputus.");
        }

        input.disabled = false;
        input.focus();
    });

    // Add simple animation styles dynamically to document
    const style = document.createElement('style');
    style.innerHTML = `
        @keyframes fadeInUpChat {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fadeInUpChat 0.3s ease-out forwards;
        }
    `;
    document.head.appendChild(style);
});
</script>
