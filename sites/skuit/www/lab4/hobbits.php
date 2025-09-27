<h1>🧙♂️ Подготовка хоббитов к путешествию</h1>
<?php
$allHobbits = ["Бильбус", "Елдос", "Мэллстрой", "Тамаев", "Вэнгелби", "Литвинчик", "СубаБратик", "Бустеренко"];    
$partySize = rand(2,5);
shuffle($allHobbits);
$party = array_slice($allHobbits, 0, $partySize);
$names = implode(", ", $party);
$partyCount = count($party);
?>
<div class ='block'>
    в поход отправятся <?= $partyCount ?> хоббитов: <?= $names ?><br>
</div>
<?php
$transports = ["ламба", "фэрары", "гэлик", "звездалет", "тушканчик", "матиз", "нет транспорта"];
$transportCount = count($transports);
$randomIndex = rand(0, $transportCount - 1);
$transport = $transports[$randomIndex];
?>
</div>
<div class='block'>
    <?php if ($transport == 'нет транспорта') { ?>
        К сожалению, транспорта нет. Хоббитам придётся идти пешком!
    <?php } else { ?>
        Хоббиты нашли транспорт: <?= $transport ?>
    <?php } ?>
</div>
<?php
$allSupplies = ["ашку", "мэмы", "литэнерджи", "чипсоны", "сыр-косичку", "квас", "светлое", "йегерместер", "мармлеады", "+вайб"];
$suppliesCount = rand(2, 6);
shuffle($allSupplies);
$supplies = array_slice($allSupplies, 0, $suppliesCount);
?>
<div class='block'>
    Собрали припасы:<br>
    <?php foreach ($supplies as $supply) {
        echo("- $supply <br>");
    } ?>
</div>
<?php
$sparkEvents = [
    "(hobbit) споткнулся и переломал себе ноги.",
    "(hobbit) взорвался на минном поле.",
    "(hobbit) подскользнулся на банановой кожурке (умер).",
    "(hobbit) побежал в пещеру леснеых шиншилл (его съели).",
    "(hobbit) забрался на дерево от медведя (
    не помогло)."
];
$delayDays = count($supplies);
$eventsCount = rand(1, 3);
shuffle($sparkEvents);
$events = array_slice($sparkEvents, 0, $eventsCount);
$delayDays += count($events);
foreach ($events as &$event) {
    $randomHobbitIndex = array_rand($party);
    $randomHobbit = $party[$randomHobbitIndex];
    $event = str_replace('(hobbit)', $randomHobbit, $event);
}
$orcsDays = 5;
?>
<div class='block'>
    Случайные события:<br>
    <?php foreach ($events as $event) {
        echo("- $event <br>");
    } ?>
</div>

<div class='block'>
    Общая задержка отряда: <?= $delayDays ?> дней
</div>
<div class='block'>
    <?php
    if ($delayDays < $orcsDays) {
        echo "✓ Хоббиты успели выйти в путь раньше орков!";
    } elseif ($delayDays == $orcsDays) {
        echo "✓ Хоббиты успели от орков в самый последний момент";
    } else {
        $lateDays = $delayDays - $orcsDays;
        echo "✗ Орки настигли хоббитов! Хоббиты слишком долго собирались и опоздали на $lateDays дней";
    }
    ?>
</div>