<x-app-layout>
    @section('title', 'Test')
    <div class="bg-skin-contentbody-fill  rounded-lg shadow-sm xl:col-span-3 bg-co13">
        <!-- Card header -->
        <div class="bg-skin-contenthead-fill flex items-center justify-between px-4 py-2 -b bg-co12 ">
            <h5 class="font-semibold text-skin-titel">Monthly Expenses</h5>
            <!-- Dots button -->
            <button class="p-2 rounded-full">
                <svg class="w-6 h-6 text-contentbodytext" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </button>
        </div>
        <!-- Card content -->
        <div class="flex items-center p-4 space-x-4 text-skin-paragraph">
            <span class="text-3xl font-medium">45%</span>
            <span class="flex items-center px-2 space-x-2 text-sm text-green-800 bg-green-100 rounded">
                <span>
                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                        <path fill-rule="evenodd"
                            d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
                <span>39.2%</span>
            </span>
        </div>
        <!-- Chart -->
        <div class="relative min-w-0 p-4 h-80">
            <canvas id="updatingMonthlyChart"></canvas>
        </div>
    </div>

</x-app-layout>
