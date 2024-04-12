<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="bekijk alle arrangementen die we hebben voor je vrienden en familie en alle aanbiedingen die we voor de week hebben">
    <meta name="author" content="A. Harding">
    <meta name="keywords" content="indian chillis, Indian Chillis, drinken, indiaanse eten, bar, arrangemenst, restaurant">
    <link rel="icon" href="../../img/chili-icon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <script src="../../lib/menu.js" defer></script>
    <title>Reviews - Indian Chillis</title>
</head>
<body>
<?php include '../header/header.php' ?>
<main>
<?php
$userName = array(
    array(
        'User' => '<section><h1 class="vac-h1">User1</h1>',
        'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi veniam laborum, ullam et voluptate suscipit amet explicabo quaerat mollitia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi veniam laborum, ullam et voluptate suscipit amet explicabo quaerat mollitia.</p></section>',
        'rating' => '<section class="rev-blok"><p>4/5</p></section>'
    ),
    array(
        'User' => "<section><h1 class='vac-h1'> User2</h1>",
        'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi veniam laborum, ullam et voluptate suscipit amet explicabo quaerat mollitia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi veniam laborum, ullam et voluptate suscipit amet explicabo quaerat mollitia.</p></section>',
        'rating' => '<section class="rev-blok"><p>5/5</p></section>'
    ),
    array(
        'User' => "<section><h1 class='vac-h1'> User3</h1>",
        'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi veniam laborum, ullam et voluptate suscipit amet explicabo quaerat mollitia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi veniam laborum, ullam et voluptate suscipit amet explicabo quaerat mollitia.</p></section>',
        'rating' => '<section class="rev-blok"><p>3/5</p></section>'
    )
);

echo '<section class="rev-col gap-20">';
foreach ($userName as $userInfo){
    echo '<section class="arr-blok rev-row">';
    foreach($userInfo as $info){
        echo $info;
    }
    echo '</section>';
}

echo '</section>';
?>


</main>
<?php include '../footer/footer.php' ?>

</body>
</html>