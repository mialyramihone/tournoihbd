function validateForm() {
    var squadname = document.getElementById("squadname").value;
    var player1 = document.getElementById("player1").value;
    var player2 = document.getElementById("player2").value;
    var player3 = document.getElementById("player3").value;
    var player4 = document.getElementById("player4").value;
    var adminEmail = document.getElementById("adminEmail").value;

    if (squadname === "" || player1 === "" || player2 === "" || player3 === "" || player4 === "" || adminEmail === "") {
        alert("Veuillez remplir tous les champs.");
    } else {
        sendFormData(squadname, player1, player2, player3, player4, adminEmail);
    }
}

function sendFormData(squadname, player1, player2, player3, player4, adminEmail) {
    fetch('process.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            squadname: squadname,
            player1: player1,
            player2: player2,
            player3: player3,
            player4: player4,
            adminEmail: adminEmail
        }),
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
    })
    .catch((error) => {
        console.error('Erreur:', error);
    });
}
