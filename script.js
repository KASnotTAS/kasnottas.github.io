const container = document.getElementById("cards-container");

items.forEach(item => {
    container.innerHTML += `
    <div class="col-md-3 mb-4">
        <div class="card h-100" onclick="openInfo(${item.id})" style="cursor:pointer; max-width: 300px; min-height: 400px;  margin-left: -110px;">
            <img src="${item.image}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">${item.title}</h5>
                <p class="card-text">${item.description.slice(0, 70)}...</p>
            </div>
        </div>
    </div>
    `;
});

function openInfo(id) {
    window.location.href = `info.html?id=${id}`;
}