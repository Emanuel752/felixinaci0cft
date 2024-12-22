document.addEventListener("DOMContentLoaded", () => {
    const notifyButton = document.getElementById("notifyButton");
    const notification = document.getElementById("notification");
    const closeNotification = document.getElementById("closeNotification");

    // Exibir notificação
    notifyButton.addEventListener("click", () => {
        notification.classList.remove("hidden");
    });

    // Fechar notificação
    closeNotification.addEventListener("click", () => {
        notification.classList.add("hidden");
    });
});