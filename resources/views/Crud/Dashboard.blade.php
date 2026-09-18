<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 min-h-screen p-8 text-slate-800">
    
    <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
        
        <!-- Header Section with Title & Add Student Button -->
        <div class="px-6 py-4 border-b border-slate-100 bg-slate-50/50 flex justify-between items-center">
            <h3 class="text-xl font-bold text-slate-900">Student Data</h3>
            
            <a href="/student" class="inline-flex items-center gap-1.5 px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold rounded-lg shadow-sm transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Add Student
            </a>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-100/70 border-b border-slate-200 text-xs font-semibold uppercase tracking-wider text-slate-600">
                        <th class="py-3.5 px-6">Sr #</th>
                        <th class="py-3.5 px-6">Name</th>
                        <th class="py-3.5 px-6">Email</th>
                        <th class="py-3.5 px-6">Course</th>
                        <th class="py-3.5 px-6 text-center">Action</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-100 text-sm font-medium">
                    @foreach ($students as $student)
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="py-4 px-6 text-slate-500"> {{ $student->id }} </td>
                            <td class="py-4 px-6 text-slate-900 font-semibold"> {{ $student->name }} </td>
                            <td class="py-4 px-6 text-slate-600"> {{ $student->email }} </td>
                            <td class="py-4 px-6">
                                <span class="px-2.5 py-1 bg-indigo-50 text-indigo-700 rounded-md text-xs font-semibold border border-indigo-100">
                                    {{ $student->course }}
                                </span>
                            </td>
                            <td class="py-4 px-6 text-center space-x-2">
                                <a href="#" class="inline-flex items-center text-xs font-semibold text-amber-600 hover:text-amber-700 hover:underline">
                                    Update
                                </a>
                                <span class="text-slate-300">|</span>
                                <a href="#" class="inline-flex items-center text-xs font-semibold text-rose-600 hover:text-rose-700 hover:underline">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</body>

</html>