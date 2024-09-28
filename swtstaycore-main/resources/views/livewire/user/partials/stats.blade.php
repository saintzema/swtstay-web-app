<div>
    <div class="relative">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">Hotel Occupants</h2>
            <select id="dataRange" class="border rounded-md p-2">
                <option value="daily">Daily</option>
                <option value="weekly">Weekly</option>
                <option value="monthly" selected>Monthly</option>
                <option value="yearly">Yearly</option>
            </select>
        </div>
        <canvas id="occupantsChart" class="w-full h-32 mx-auto"></canvas>
    </div>

    <script>
        document.addEventListener('livewire:navigated', function() {
            const canvas = document.getElementById('occupantsChart');
            canvas.style.height = '350px'; // Set height to 192px

            const ctx = canvas.getContext('2d');

            // Create a gradient fill
            const gradient = ctx.createLinearGradient(0, 0, 0, 400);
            gradient.addColorStop(0, 'rgba(54, 162, 235, 0.4)'); // Blue at the top
            gradient.addColorStop(1, 'rgba(255, 255, 255, 0)'); // Transparent at the bottom

            const occupantsChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov',
                        'Dec'
                    ],
                    datasets: [{
                        label: 'Performance of booking over time',
                        data: [50, 45, 55, 65, 60, 75, 70, 85, 80, 90, 95, 67],
                        fill: true,
                        backgroundColor: gradient, // Apply the gradient fill
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 3,
                        tension: 0.4, // Smooth line
                        pointRadius: 1, // Hide the points by default
                        pointHoverRadius: 5, // Show points on hover
                        pointBackgroundColor: 'rgba(54, 162, 235, 1)', // Points color
                        pointBorderColor: 'rgba(54, 162, 235, 1)',
                        pointHoverBorderColor: 'rgba(0, 0, 0, 1)',
                        pointHoverBorderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100,
                            ticks: {
                                stepSize: 25,
                                callback: function(value) {
                                    return value + '%'; // Add % to y-axis labels
                                }
                            },
                            grid: {
                                display: false, // Remove y-axis grid lines
                            }
                        },
                        x: {
                            grid: {
                                display: false // Remove x-axis grid lines
                            }
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const percentage = context.raw + '%';
                                    const numberOfGuests = Math.round(context.raw * 40 /
                                    65); // Example calculation
                                    const date = '25/03/2024'; // Static date for example purposes
                                    return `${percentage}\nNo. of guests: ${numberOfGuests}\nDate: ${date}`;
                                }
                            }
                        }
                    }
                }
            });

            // Optional: Handle dropdown change to filter data
            document.getElementById('dataRange').addEventListener('change', function() {
                const range = this.value;
                // Add logic to update chart data based on selected range
            });
        });
    </script>
</div>
