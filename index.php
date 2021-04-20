<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <?php

    //you need change bellow to you localhost path
    $caminho = "/laragon/www/";

    //and increment more extensions of files to the array if necessary
    $vetor = [".php",".css",".html",".js",".sql",".png"];

    $diretorio = dir($caminho);
    $ponto = null;
    $extensao = null;
    while($arquivo = $diretorio -> read()) {
        $ponto = $arquivo[0];
        for ($i = 0;  $i < sizeof($vetor); $i++) {
            $ext = $vetor[$i];
            $extensao = strpos($arquivo, $ext, 0);
            if ($extensao != false) {
                break;
            }
        }
        if ($ponto != '.' and $extensao == false) { ?>
            <a  class="content" href="<?= $arquivo ?>">
                <p class="caminho"><?= $arquivo ?></p>
            </a>
        <?php }
    }
    ?>
    </div>
</body>