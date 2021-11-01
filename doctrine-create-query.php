<?php       
       $users = $this->getDoctrine()->getRepository(Usuario::class)->createQueryBuilder('u')
            ->select('u.username')
            ->where('u.enabled = true')
            ->getQuery()
            ->getArrayResult();

        dd($users);

        $paises = $this->qi->getPaises();


        $campaign = $this->getDoctrine()->getRepository('App:Campaign')->findOneBy(array('visible'=>true));
        dd($campaign->getProductos());


        $colecciones = $this->getDoctrine()->getRepository('App:Coleccion')->createQueryBuilder('c')
        ->select('c', 'p')
        ->leftJoin('c.productos', 'p')
        ->where('c.visible = 1')
        ->getQuery()
        ->getArrayResult();

        dd($colecciones);
        $id = 1100;
        
        $producto = $this->getDoctrine()->getRepository('App:Producto')->find($id);
        dd($producto);

        $recomendados = $this->getDoctrine()->getRepository('App:Producto')->findOneBy(array('visible'=>true, 'recomendado' => true));
        dd($recomendados);

        $categoria = 26;

        $productos = $this->getDoctrine()->getRepository('App:Producto')->createQueryBuilder('i')
        ->select('i.precio','i.nombre','i.imagen','i.plu')
        
        ->leftJoin('i.categorias','c')
        ->andWhere('c.id = :cat')
        ->setParameter('cat',$categoria)
        ->getQuery()
        ->getArrayResult();

        dd($productos);

        // ***************************************

               // $users = $this->getDoctrine()->getRepository(Usuario::class)->createQueryBuilder('u')
        //     ->select('u.username')
        //     ->where('u.enabled = true')
        //     ->getQuery()
        //     ->getArrayResult();

        // dd($users);

        // $paises = $this->qi->getPaises();


        // $campaign = $this->getDoctrine()->getRepository('App:Campaign')->findOneBy(array('visible'=>true));
        // dd($campaign->getProductos());


        // $colecciones = $this->getDoctrine()->getRepository('App:Coleccion')->createQueryBuilder('c')
        // ->select('c', 'p')
        // ->leftJoin('c.productos', 'p')
        // ->where('c.visible = 1')
        // ->getQuery()
        // ->getArrayResult();

        // dd($colecciones);
        // $id = 1100;
        
        // $producto = $this->getDoctrine()->getRepository('App:Producto')->find($id);
        // dd($producto);

        // $recomendados = $this->getDoctrine()->getRepository('App:Producto')->findOneBy(array('visible'=>true, 'recomendado' => true));
        // dd($recomendados);

        $categoria = 26;

        // $productos = $this->getDoctrine()->getRepository('App:Producto')->createQueryBuilder('i')
        // ->select('i.precio','i.nombre','i.imagen','i.plu')
        
        // ->leftJoin('i.categorias','c')
        // ->andWhere('c.id = :cat')
        // ->setParameter('cat',$categoria)
        // ->getQuery()
        // ->getArrayResult();

        // dd($productos);

        // $this->em = $this->getDoctrine()->getManager();

        // $query = $this->getDoctrine()->getRepository('App:Producto')->createQueryBuilder('p')
        //     ->select('p.plu')
        //     ->leftJoin('p.padre','pa')
        //     ->leftJoin('p.inventarios','i')
        //     ->leftJoin('p.productos','v')
        //     ->leftJoin('v.inventarios','i_v')
        //     ->where('p.visible = true')
        //     ->andWhere(' i_v.cantidad > 0');

        // $plus = $query->getQuery()->getArrayResult();

        // // dd($plus);
        // $plus = array_column($plus,'plu');

        // $colores = $this->em->createQueryBuilder('')
        //     ->select('c.id','c.nombre','c.hexadecimal')
        //     ->from('App:Color','c')
        //     ->leftJoin('c.productos','p')
        //     ->leftJoin('p.padre','padre')
        //     ->where('p.plu in (:plus)')
        //     ->orWhere('padre.plu in (:plus)')
        //     ->setParameter('plus',$plus)
        //     ->groupBy('c.id')
        //     ->getQuery()
        //     ->getArrayResult();

        //     dd($colores);

        // $tallas = $this->em->createQueryBuilder('')
        //     ->select('t.id','t.nombre')
        //     ->from('App:Talla','t')
        //     ->leftJoin('t.productos','p')
        //     ->leftJoin('p.padre','padre')
        //     ->where('p.plu in (:plus)')
        //     ->orWhere('padre.plu in (:plus)')
        //     ->setParameter('plus',$plus)
        //     ->groupBy('t.id')
        //     ->getQuery()
        //     ->getArrayResult();

        //     dd($tallas);

        // $estampados = $this->em->createQueryBuilder('')
        //     ->select('e.id','e.nombre')
        //     ->from('App:Estampado','e')
        //     ->leftJoin('e.productos','p')
        //     ->leftJoin('p.padre','padre')
        //     ->where('p.plu in (:plus)')
        //     ->orWhere('padre.plu in (:plus)')
        //     ->setParameter('plus',$plus)
        //     ->groupBy('e.id')
        //     ->getQuery()
        //     ->getArrayResult();

        // dd($estampados);


        // $id = "enterizo-palma";

        // $producto = $this->qi->getProducto($id);

        // dd($producto);
?>