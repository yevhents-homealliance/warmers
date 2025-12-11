const url = "https://script.google.com/macros/s/AKfycby3_sGjJYPjYrN7HxHCzfI5wYHQ1huo6If7RdTyCFCB5PX623HUak761R70dNhPCisU/exec";

document.getElementById("leadForm").addEventListener("submit", async function(e){
    e.preventDefault();

    let data = {
        name: this.name.value,
        phone: this.phone.value,
        subid: localStorage.getItem("subid") ?? ""
    };

    await fetch(url, {
        method: "POST",
        body: JSON.stringify(data),
    });

    alert("Заявка отправлена!");
});