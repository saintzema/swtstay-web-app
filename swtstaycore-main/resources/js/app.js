import './bootstrap';
import "flowbite";
import Chart from "chart.js/auto";
window.Chart = Chart;

document.addEventListener("livewire:navigated", () => {
    initFlowbite();
});
