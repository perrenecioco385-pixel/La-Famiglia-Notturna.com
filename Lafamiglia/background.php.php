<?php


// Background data for each member
$backgrounds = [
    "crxzyruhl" => "Others know me as Crxzyruhl Zarikano, but in La Famiglia Notturna they call me Il Corvo—the Raven. I don’t speak unless it matters, I don’t move unless it’s necessary, but when I do… people remember. I am the shadow that circles overhead, the silence before the strike, the omen you can’t ignore. Loyalty is my blood, respect is my law, and betrayal? That’s the last sound you’ll ever hear beneath the beating of my wings.",
    "giovanni" => "My name is Giovanni Cafesino, but in La Famiglia Notturna they call me Il Drago—the Dragon. I am fire wrapped in flesh, patience bound in silence, and fury waiting beneath the surface. When I rise, I do not come with warning; I come with heat that leaves nothing but ash behind. Power is not given, it is taken, and respect is not asked for, it is earned in blood and fear. To the family, I am a shield and a sword, but to our enemies, I am the blaze that consumes their last breath. Remember the name Il Drago, because once the fire touches you… there is no escape.",
    "jynx" => "My name is Jynx Vlymirdye Laux Montague, but in La Famiglia Notturna they call me La Vipera—the Viper. I strike quick, I strike clean, and I strike where it hurts the most. My words are venom, my silence is poison, and my presence alone is a warning not to cross the family. Loyalty keeps my fangs hidden, but betrayal awakens the serpent in me, and when that happens… there’s no antidote. I am patience coiled in the dark, danger wrapped in elegance, and death delivered with precision. Remember La Vipera, for those who forget my bite never live long enough to regret it.",
    "aiyu" => "My name is Aiyu Kshmr, but in La Famiglia Notturna they call me Il Leone—the Lion. I am the roar that silences doubt, the strength that guards the pride, and the fury that tears apart anyone who threatens the family. I do not hunt for glory, I hunt for survival, and in this world, survival is won by those who rule with tooth and claw. My loyalty is unshakable, my patience dangerous, and my wrath unforgettable. Stand with me and you will know protection; stand against me and you will hear the roar of Il Leone before the silence of the grave.",
    "lyle" => "My name is Lyle Youseff Von-Trapp, but in La Famiglia Notturna they call me Il Silencio—the Silence. I do not need to raise my voice to be heard, because in my presence, words are unnecessary. I move without sound, I strike without warning, and when I’m finished, nothing remains but quiet. Fear does not scream—it whispers, it chills, it lingers—and that is the echo I leave behind. I am the stillness before the storm, the shadow that does not falter, the judgment that falls without mercy. Remember this: when Il Silencio comes for you, there will be no noise, no plea, no escape… only silence.",
    "beaul" => "My name is Beaul Zarikano, but in La Famiglia Notturna they call me La Volpe—the Fox. I am cunning dressed in loyalty, patience masked in charm, and strategy sharpened by survival. Where others charge with force, I move with precision, turning every weakness into my advantage. I speak when I must, I act when it matters, and when the trap closes, it is already too late to run. In the family, I am the mind in the shadows, the smile that hides the blade, the trickster who never plays fair. Remember La Volpe, for the fox always outsmarts the hunt—and by the time you see me, you’re already caught",
    "kyra" => "My name is Kyra Scott, but in La Famiglia Notturna they call me La Morte Nera—the Black Death. I am the shadow that spreads without mercy, the silence that follows the breath of the dying, and the curse whispered in the dark before the end. I do not chase my prey; I wait, I watch, and I bring them ruin when they least expect it. My loyalty to the family is carved in blood, my presence is the omen none survive, and my judgment is final. Remember the name La Morte Nera, for when you see me, it is not life that follows—it is the end.",
    "demi" => "My name is Demi Reiss Grey, but in La Famiglia Notturna they call me Il Giudice—the Judge. I am the hand that weighs loyalty, the voice that delivers verdicts, and the shadow that enforces the code. In my eyes, there is no mercy without respect and no pardon without sacrifice. I do not raise my blade in anger—I raise it in judgment, and when I strike, it is law that falls upon you. To the faithful, I am protection; to the traitor, I am the sentence. Remember the name Il Giudice, for when I speak, my word is final—and my judgment absolute."
    
];

$name = strtolower($_GET['name'] ?? '');
$info = $backgrounds[$name] ?? "Background not found.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Background - <?= ucfirst($name) ?> Sindicato Dell'Ombra</title>
  <style>
    body {
        font-family: Arial, sans-serif;
        background: url("images/La.jpg.jpeg") no-repeat center center fixed;
        background-size: cover;
        color: #fff;
        text-align: center;
        padding: 50px;
    }
    .container {
        background: rgba(0,0,0,0.7);
        padding: 30px;
        border-radius: 10px;
        max-width: 800px;
        margin: auto;
    }
    a {
        color: #ff0000ff;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1><?= ucfirst($name) ?> Omertà </h1>
    <p><?= $info ?></p>
    <a href="card.php">⬅ Back to Cards</a>
  </div>
</body>
</html>
