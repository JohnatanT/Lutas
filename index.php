<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Lutas</title>
    </head>
    <body>
        <?php
        require_once 'Lutador.php';
        require_once 'Luta.php';
        
        $l = array();
        
        $l1[0] = new Lutador("Pretty Boy","França",31,1.75,68.9,11,2,1);
        $li[1] = new Lutador("PutScript","Brasil",29,1.68,57.8,14,2,3);
        $li[2] = new Lutador("Snapshadow","EUA",35,1.65,80.9,12,2,1);
        $li[3] = new Lutador("Dead Code","Australia",28,1.93,81.6,13,0,2);
        $li[4] = new Lutador("Ufocobol","Brasil",37,1.70,119.3,5,4,3);
        $li[5] = new Lutador("Nerdaard","EUA",30,1.81,105.7,12,2,4);
        
        $uec01 = new Luta();
        $uec01->marcarLuta($l1[0],$l1[1]);
        $uec01->lutar();
        
        $l1[0]->status();
        $l1[1]->status();     
        
        ?>
    </body>
</html>
