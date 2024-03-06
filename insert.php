<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Form di registrazione</h1>
    <form action="/index.php" method="post">
        <div>
            <label for="cf">Codice Fiscale:</label>
            <input type="text" id="cf" name="cf" >
        </div>
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" >
        </div>
        <div>
            <label for="cognome">Cognome:</label>
            <input type="text" id="cognome" name="cognome" >
        </div>
        <div>
            <label for="telefono">Telefono:</label>
            <input type="tel" id="telefono" name="telefono" >
        </div>
        <div>
            <label for="indirizzo">Indirizzo:</label>
            <input type="text" id="indirizzo" name="indirizzo" >
        </div>
        <div>
            <label for="gender">Genere:</label>
            <select id="gender" name="gender">
                <option value="M">Maschio</option>
                <option value="F">Femmina</option>
            </select>
        </div>
        <div>
            <label for="professione">Professione:</label>
            <select id="professione" name="professione">
                <option value="studente">Studente</option>
                <option value="impiegato">Impiegato</option>
                <option value="libero professionista">Libero professionista</option>
                <option value="artigiano">Artigiano</option>
                <option value="medico">Medico</option>
                <option value="insegnante">Insegnante</option>
                <option value="altro">Altro</option>
            </select>
        </div>
        <button type="submit">Invia</button>
    </form>
</body>
</html>
