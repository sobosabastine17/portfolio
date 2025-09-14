<footer class="relative bg-[#0d0d0d] text-gray-400 py-12 px-6 text-center overflow-hidden">
    <!-- Subtle Lottie on left corner -->
    <div class="absolute left-4 bottom-4 w-40 z-0 opacity-10 pointer-events-none">
        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_3rwasyjy.json" background="transparent"
            speed="1" loop autoplay style="width: 100%; height: 100%"></lottie-player>
    </div>

    <!-- Main content -->
    <div class="relative z-10 max-w-xl mx-auto">
        <h2 class="text-xl font-semibold text-white mb-1">Sabastine Sobo</h2>
        <p class="text-sm text-gray-400 mb-4">Backend Dev, Aspiring DevOps</p>

        <!-- Social icons -->
        <div class="flex justify-center items-center gap-5 mb-6">
            <!-- Email -->
            <a href="mailto:sobosabastine17@yahoo.com" class="group">
                <div
                    class="w-10 h-10 rounded-full bg-[#7a00cc] flex items-center justify-center group-hover:scale-110 transition">
                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M2 4a2 2 0 012-2h16a2 2 0 012 2v16a2 2 0 01-2 2H4a2 2 0 01-2-2V4zm2 0v.01L12 13l8-8.99V4H4zm16 16V8l-8 8-8-8v12h16z" />
                    </svg>
                </div>
            </a>

            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/in/sabastine-sobo-3aa854223/" target="_blank" class="group">
                <div
                    class="w-10 h-10 rounded-full bg-[#7a00cc] flex items-center justify-center group-hover:scale-110 transition">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M4.98 3.5C3.34 3.5 2 4.84 2 6.5S3.34 9.5 4.98 9.5C6.62 9.5 7.96 8.16 7.96 6.5C7.96 4.84 6.62 3.5 4.98 3.5ZM2.4 21H7.6V10.3H2.4V21ZM10.5 10.3H15.2V11.9H15.3C15.8 10.9 17.1 9.8 18.9 9.8C22 9.8 22.4 11.9 22.4 15.1V21H17.2V15.6C17.2 14.1 17.2 12.2 15.2 12.2C13.1 12.2 12.8 13.9 12.8 15.5V21H10.5V10.3Z" />
                    </svg>
                </div>
            </a>

            <!-- GitHub -->
            <a href="https://github.com/sobosabastine17" target="_blank" class="group">
                <div
                    class="w-10 h-10 rounded-full bg-[#7a00cc] flex items-center justify-center group-hover:scale-110 transition">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 .5A12 12 0 0 0 .5 12a12 12 0 0 0 8.2 11.5c.6.1.8-.3.8-.6v-2.1c-3.3.7-4-1.6-4-1.6-.6-1.5-1.4-2-1.4-2-1.1-.8.1-.8.1-.8 1.2.1 1.8 1.3 1.8 1.3 1.1 1.9 2.9 1.3 3.6 1 .1-.8.4-1.3.7-1.6-2.7-.3-5.5-1.3-5.5-5.9 0-1.3.5-2.4 1.2-3.2-.1-.3-.5-1.5.1-3.1 0 0 1-.3 3.3 1.2a11.6 11.6 0 0 1 6 0c2.3-1.5 3.3-1.2 3.3-1.2.6 1.6.2 2.8.1 3.1.8.9 1.3 1.9 1.3 3.2 0 4.6-2.7 5.6-5.4 5.9.4.3.8 1 .8 2.1v3.1c0 .3.2.7.8.6A12 12 0 0 0 23.5 12 12 12 0 0 0 12 .5z" />
                    </svg>
                </div>
            </a>
        </div>

        <!-- Copyright -->
        <p class="text-xs text-gray-500">
            © <span id="year"></span> Sabastine Sobo • Built with
            <span class="text-[#7a00cc] font-medium">HTML</span> &
            <span class="text-[#7a00cc] font-medium">Tailwind CSS</span>
        </p>

        <script>
            // Set current year automatically
            document.getElementById("year").textContent = new Date().getFullYear();
        </script>
    </div>
</footer>