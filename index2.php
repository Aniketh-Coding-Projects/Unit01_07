<!-- index2.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Page</title>
    <!-- Include Material Design Lite CSS -->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Add your favicon -->
    <script>
        function alertButton1() {
            alert("Button 1 clicked!");
        }

        function alertButton2() {
            alert("Button 2 clicked!");
        }
    </script>
</head>
<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <main class="mdl-layout__content">
            <div class="page-content">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col">
                        <h3>Click a button</h3>
                        <!-- Button 1 -->
                        <button onclick="alertButton1()" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                            Button 1
                        </button>
                        <!-- Button 2 -->
                        <button onclick="alertButton2()" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
                            Button 2
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
