<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up form</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 min-h-screen flex items-center justify-center p-4 text-slate-800">

    <div class="w-full max-w-md bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
        
        <!-- Header with Dashboard Button -->
        <div class="px-6 py-5 border-b border-slate-100 bg-slate-50/50 flex justify-between items-center">
            <h3 class="text-xl font-bold text-slate-900">Add New Student</h3>
            
            <a href="/student/Dashboard" class="inline-flex items-center gap-1 px-3 py-1.5 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold rounded-md border border-slate-200 transition-colors">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Dashboard
            </a>
        </div>

        <!-- Form Body -->
        <form action="{{ route('student.store') }}" method="POST" class="p-6 space-y-4">
            @csrf

            <!-- Name Field -->
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                    Full Name
                </label>
                <input type="text" name="name" placeholder="Enter your name" required
                    class="w-full px-3.5 py-2.5 text-sm bg-white border border-slate-200 rounded-lg focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition-all text-slate-800 placeholder-slate-400">
            </div>

            <!-- Course Field -->
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                    Course
                </label>
                <input type="text" name="course" placeholder="Enter your Course" required
                    class="w-full px-3.5 py-2.5 text-sm bg-white border border-slate-200 rounded-lg focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition-all text-slate-800 placeholder-slate-400">
            </div>

            <!-- Email Field -->
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                    Email Address
                </label>
                <input type="email" name="email" placeholder="Enter your email" required
                    class="w-full px-3.5 py-2.5 text-sm bg-white border border-slate-200 rounded-lg focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition-all text-slate-800 placeholder-slate-400">
            </div>

            <!-- Submit Button -->
            <div class="pt-2">
                <input type="submit" name="submit" value="Submit Student"
                    class="w-full py-2.5 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold text-sm rounded-lg shadow-sm cursor-pointer transition-colors focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            </div>
        </form>

    </div>

</body>

</html>