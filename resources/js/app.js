import './bootstrap';
import 'preline';

import './bootstrap';
import '../../vendor/masmerise/livewire-toaster/resources/js'; // 👈

// other app stuff...
document.addEventListener("livewire:navigating", () => {
    HSStaticMethods.autoInit();
});

document.addEventListener("livewire:navigated", () => {
    HSStaticMethods.autoInit();
});