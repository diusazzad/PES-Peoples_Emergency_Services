<section class="bg-gray-100 px-4 py-8 sm:py-10 md:py-12 lg:py-16 xl:py-20 2xl:py-24">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-4xl font-bold text-center mb-8">Contact Us</h2>
        <form action="#" method="POST" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            @csrf
            <div>
                <label for="name" class="block text-lg font-semibold mb-2">Name</label>
                <input type="text" name="name" id="name"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                    required>
            </div>
            <div>
                <label for="email" class="block text-lg font-semibold mb-2">Email</label>
                <input type="email" name="email" id="email"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                    required>
            </div>
            <div class="sm:col-span-2">
                <label for="subject" class="block text-lg font-semibold mb-2">Subject</label>
                <input type="text" name="subject" id="subject"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                    required>
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="block text-lg font-semibold mb-2">Message</label>
                <textarea name="message" id="message"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                    rows="6" required></textarea>
            </div>
            <div class="sm:col-span-2">
                <button type="submit"
                    class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600">Send
                    Message</button>
            </div>
        </form>
    </div>
</section>
