<?php ?>
<html>
<head> <title>Inregistrare</title>
</head>
<body>
<div>
    <div> <h2>Inregistrare</h2>
        <form action="save_user.php" method="post">
            <p><label>name:<br> <input name="name"size="30" type="text" value="">
                </label></p>
            <p><label>email:<br> <input name="email" size="30" type="text">
                </label></p>
            <p><label>storage: <br>
                    <form>
                        <select name="storage">
                            <option value="database">database</option>
                            <option value="file">file</option> </select>
            <p><input name="inregistrare" type="submit" value="inregistare">
            </p>
        </form>
        </form>
    </div>
</div>
</body>
</html>