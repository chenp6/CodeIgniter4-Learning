<html>
    <head>
        <title><?= esc($title)?></title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;

            }
        </style>
    </head>

    <body>
        <h1><?= esc($heading)?></h1>
        <h2>My Todo List</h2>
        <table>
            <thead>
                <tr>
                    <th>
                        Time Used
                    </th>
                    <th>
                        Step
                    </th>
                    <th>
                        <b>Description</b>
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $index = 0;
                foreach($todo_list as $name => $item): 
            ?>
                <tr>
                    <td><?= $name?></td>
                    <?php foreach($item as $item_td): ?>
                        <td><?= esc($item_td)?></td>
                    <?php endforeach ?>
                    <? $index++; ?>
                </tr>
            <?php endforeach ?>

            </tbody>
        </table>
    </body>
</html>