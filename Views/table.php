<?php
function generateGames($steams)
{
    $fullTemplate = '';
    foreach ($steams as $game) {
        $template = "
        <tr>
        <td>{$game['appid']}</td>
        <td>{$game['name']}</td>
        <td>{$game['playtime_forever']}</td>
        <td>{$game['has_community_visible_stats']}</td>
        </tr>
        ";
        $fullTemplate .= $template;
    };
    return $fullTemplate;
}

?>

<table class="table table-striped table-hover table-dark">
    <thead>
        <tr>
            <th scope="col">appId</th>
            <th scope="col">Name</th>
            <th scope="col">PlayTime ForEver</th>
            <th scope="col">has_community_visible_stats</th>
        </tr>
    </thead>
    <tbody>
        <?php echo generateGames($steams) ?>
    </tbody>
</table>