<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>¿Quieres ser mi novia?</title>
<style>
    #yesBtn {
        padding: 10px 20px;
        font-size: 16px;
        margin: 10px;
        cursor: pointer;
        background-color: #4CAF50; /* Verde */
        color: white;
        border: 2px solid #4CAF50;
        border-radius: 10px;
    }

    #noBtn {
        padding: 10px 20px;
        font-size: 16px;
        margin: 10px;
        cursor: pointer;
        background-color: #FF5733; /* Rojo */
        color: white;
        border: 2px solid #FFC0CB;
        border-radius: 10px;
    }

    #noBtn span {
        font-size: 18px;
        color: #FCF4F4;
    }
</style>
</head>
<body>
<div class="question-container">
    <p>¿Quieres ser mi novia?</p>
    <div class="btn-container">
        <button id="yesBtn" class="btn">Sí</button>
        <button id="noBtn" class="btn">No</button>
    </div>
</div>

<script>
    const yesBtn = document.getElementById('yesBtn');
    const noBtn = document.getElementById('noBtn');

    noBtn.addEventListener('mouseover', function() {
        yesBtn.style.transform = 'scale(1.1)';
        noBtn.innerHTML = 'Por favor, di que sí';
    });

    noBtn.addEventListener('mouseout', function() {
        yesBtn.style.transform = 'scale(1)';
        noBtn.innerHTML = 'No';
    });

    yesBtn.addEventListener('click', function() {
        alert('¡Genial! ¡Seremos una gran pareja!');
    });

    noBtn.addEventListener('click', function() {
        alert('¡Lo siento! ¡Quizás en otro momento!');
    });
</script>
</body>
</html>
