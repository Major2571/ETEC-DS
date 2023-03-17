<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo e(url('css/style.css')); ?>">

        <title>Laboratorio</title>

    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="/"> Inicio </a></li>
                    <li><a href="/laboratorio"> Laboratorio </a></li>
                    <li><a href="/quemSomos"> Quem Somos </a></li>
                    <li><a href="/contato"> Contato </a></li>
                    <li><a href="/reclamacoes"> Reclamacoes </a></li>
                </ul>
            </nav>
        </header>

        <section class="tabela-laboratorios">
            <table>
                <tr>
                    <th>idLab</th>
                    <th>Laboratorio</th>
                </tr>
    
                <?php $__currentLoopData = $laboratorios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($lab->idLab); ?></td>
                        <td><?php echo e($lab->Laboratorio); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
            </table>
        </section>
        
    </body>
</html>
