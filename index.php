<?php
session_start();

// Reset the game
if (isset($_GET['reset'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}

// Start the game
if (!isset($_SESSION['step'])) {
    $_SESSION['step'] = 0;
    $_SESSION['birthday'] = 0;
}

// Process Yes/No answer
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST['answer'] == "yes") {
        $_SESSION['birthday'] += pow(2, $_SESSION['step']);
    }

    $_SESSION['step']++;
}

// Binary number cards
$cards = [];

for ($i = 0; $i < 5; $i++) {
    $numbers = [];

    for ($n = 1; $n <= 31; $n++) {
        if (($n & (1 << $i)) != 0) {
            $numbers[] = $n;
        }
    }

    $cards[] = $numbers;
}

$step = $_SESSION['step'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Birthday Predictor</title>

    <style>
        body {
            font-family: Arial;
            background: #eaf2ff;
            text-align: center;
            padding: 30px;
        }

        .container {
            background: white;
            padding: 25px;
            border-radius: 15px;
            max-width: 450px;
            margin: auto;
            box-shadow: 0 4px 12px #aaa;
        }

        h1 {
            color: #2457a6;
        }

        .numbers {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            margin: 25px 0;
        }

        .number {
            background: #dce8ff;
            padding: 12px;
            border-radius: 8px;
            font-size: 20px;
        }

        button, .restart {
            background: #2457a6;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            margin: 8px;
        }

        .result {
            color: green;
            font-size: 30px;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">

<h1>Birthday Predictor</h1>

<?php if ($step < 5): ?>

    <h2>Question <?php echo $step + 1; ?> of 5</h2>

    <p>
        Is your birthday present in this card?
    </p>

    <div class="numbers">

        <?php foreach ($cards[$step] as $number): ?>
            <div class="number">
                <?php echo $number; ?>
            </div>
        <?php endforeach; ?>

    </div>

    <form method="POST">

        <button type="submit" name="answer" value="yes">
            YES
        </button>

        <button type="submit" name="answer" value="no">
            NO
        </button>

    </form>

<?php else: ?>

    <h2>Your Birthday is:</h2>

    <p class="result">
        <?php echo $_SESSION['birthday']; ?>
    </p>

    <h3>Thank You!</h3>

    <a href="?reset=1" class="restart">
        Try Again
    </a>

<?php endif; ?>

</div>

</body>
</html>

Result.php