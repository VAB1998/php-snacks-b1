<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Import -->
    <link rel="stylesheet" href="css/style.css">

    <title>Snack 14.10</title>
</head>
<body>
    <!-- ------Snack 1------ -->
    <!--Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
    e come valore un array di post associati a quella data. 
    Stampare ogni data con i relativi post.
    Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->  
    <?php
        $posts = [
            '10/01/2019' => [
                [
                    'title' => 'Post 1',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 1'
                ],
                [
                    'title' => 'Post 2',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 2'
                ],
            ],
            '10/02/2019' => [
                [
                    'title' => 'Post 3',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 3'
                ]
            ],
            '15/05/2019' => [
                [
                    'title' => 'Post 4',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 4'
                ],
                [
                    'title' => 'Post 5',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 5'
                ],
                [
                    'title' => 'Post 6',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 6'
                ]
            ],
        ];
    ?>
    <section id="snack_1">

        <h3>Snack 1</h3>
    <?php foreach($posts as $date => $info){ ?>
        <h4>
            <?php
                echo $date;
            ?>
        </h4>
        <?php foreach($info as $value){ ?> 
            <p>
                <?php echo $value['title'].'--'.$value['author'].'--'.$value['text']; ?>
            </p>
        <?php } ?>  
    <?php } ?>
    </section>
    
    <!-- ------Snack 2------ -->
    <!-- Creare un array con 15 numeri casuali, 
    tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->
    <section id="snack_2">

        <h3>Snack 2</h3>
    <?php
        $numberarray = array();

        while( count($numberarray) < 15){
            $randomNumber = rand(0, 20);

            if(!in_array($randomNumber, $numberarray)){

                array_push($numberarray, $randomNumber);
            }
        }
        var_dump($numberarray);
    ?>
    </section>

    <!-- ------Snack 3------ -->
    <!-- Utilizzare questo array: https://pastebin.com/CkX3680A
    Stampiamo il nostro array mettendo gli insegnanti in un rettangolo 
    grigio e i PM in un rettangolo verde. -->
    <?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
    ?>        

    <section id="snack_3">
        <h3>Snack 3</h3>

        <div class="gray_box">
        <?php foreach($db['teachers'] as $person){ ?>
            <p>
                <?php echo $person['name'].' '.$person['lastname']; ?>
            </p>
                
            <?php } ?>
        </div>
        <div class="green_box">
            <?php foreach($db['pm'] as $person){ ?>
            <p>
                <?php echo $person['name'].' '.$person['lastname']; ?>
            </p>
            <?php } ?>
        </div>
    </section>

    <!-- ------Snack 4------ -->
    <!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
    Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
    <?php
        $alunni = [
            [
                nome => 'Pippo',
                cognome => 'Baudo',
                voti => [1, 2, 5, 7, 8]
            ],
            [
                nome => 'Nino',
                cognome => 'Bau',
                voti => [1, 5, 5, 7, 10]
            ]
        ]
    ?>
    <section id="snack_4">
    <h3>Snack 4</h3>

    <?php foreach($alunni as $alunno){ ?>
        <p>
            <?php echo $alunno[nome].' '.$alunno[cognome].' Media voti: '.array_sum($alunno[voti]) / count($alunno[voti]); ?>
        </p>
    <?php } ?>
    </section>
    

    <!-- Snack 5 -->
    <!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
    Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
    
    <?php
    $paragraph = "Taggiasche, ascolane, Giaraffa, consumate al naturale o in insalata. Stiamo parlando delle olive, drupe carnose con nocciolo, di cui esistono numerose tipologie e coltivata in tutte le regioni meridionali d’Italia, ma non solo. È forte la tradizione di olivicoltura anche in Liguria e in Toscana, caratteristica che fa dell’oliva uno dei simboli della tradizione culinaria italiana. Conosciamo, però, quali sono le caratteristiche nutrizionali delle olive e le proprietà? Per rispondere a questa domanda abbiamo intervistato la dottoressa Francesca Evangelisti, biologa nutrizionista.L’oliva è il frutto dell’olivo (Olea europea), pianta originaria del Caucaso, diffusa da millenni in tutto il Medio Oriente e nel bacino del Mediterraneo. Come anticipato, si tratta di una drupa carnosa con nocciolo, di forma ovoidale più o meno allungata, con buccia liscia, di colore dapprima verdastro e poi nero/violaceo a maturazione avvenuta.";
    
    $paragraphs = explode('.', $paragraph);
    ?>
    <section id="snack_5">
        <h3>Snack 5</h3>
    <?php foreach($paragraphs as $value){ 

        if(! empty($value)){ ?>
        <p>
            <?php echo trim($value) ?>
        </p>
    <?php }
    } ?>
    </section>
</body>
</html>