<?php
 namespace App\Utilities;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
 trait Grafiques{
 	//$inputs//
 	public static function generate($inputs){
 		//cnnexion a la base de donnée et recuperer les infos pour les transmettre au grafiques
 		$lava = new Lavacharts;
        //instancier et crée la structure du graphique
        $grid = \Lava::DataTable();
        $grid->addStringColumn('Mois')
             ->addNumberColumn('CA');
        // création des entete et leur niveau ici mettre les resultats des requetes
        $grid->addRow([$inputs['pays'],  rand(1,5)])
             ->addRow([$inputs['famille'],  rand(1,5)])
             ->addRow([$inputs['dateBegin'],  rand(1,5)]);
        //configurer notre chart en lui précisant qu’il doit utiliser la structure et les données de $grid. 
          \LAVA::ColumnChart('grid', $grid, [
            'title' => 'Top',
            'titleTextStyle' => [
                'color'    => '#eb6b2c',
                'fontSize' => 14
            ]
        ]);

        // graphique test pour voir les secteur de vente des articles
        $geo = new Lavacharts; // See note below for Laravel

        $popularity = \Lava::DataTable();
        //select les meilleurs ventes et metre le resultat de requete
        $popularity->addStringColumn('Country')
                   ->addNumberColumn('Popularity')
                   ->addRow(array($inputs['pays'], 1600))
                   ->addRow(array('Belgium', 700));

         \LAVA::GeoChart('Popularity', $popularity,[
            'colorAxis' =>'#eb6b2c',
            'width' => '80%',
            'height' => '80%',
            'size'=>'400',
            'keepAspectRatio'=> true
            
        ]);

        $pie = new Lavacharts; // See note below for Laravel

            $reasons = \LAVA::DataTable();

            $reasons->addStringColumn('Reasons')
                    ->addNumberColumn('Percent')
                    ->addRow(['Check Reviews', 5])
                    ->addRow(['Watch Trailers', 2])
                    ->addRow([$inputs['famille'], 4])
                    ->addRow([$inputs['pays'], 89]);

            \LAVA::PieChart('IMDB', $reasons, [
                'title'  => 'Reasons I visit IMDB',
                'is3D'   => true,
                'slices' => [
                    ['offset' => 0.2],
                    ['offset' => 0.25],
                    ['offset' => 0.3]
                ]
            ]);

        $courbe = new Lavacharts; // See note below for Laravel

        $population = \LAVA::DataTable();

        $population->addDateColumn('Year')
                   ->addNumberColumn('Number of People')
                   ->addRow(['2006', 623452])
                   ->addRow(['2007', 685034])
                   ->addRow(['2008', 716845])
                   ->addRow(['2009', 757254])
                   ->addRow(['2010', 778034])
                   ->addRow(['2011', 792353])
                   ->addRow(['2012', 839657])
                   ->addRow(['2013', 842367])
                   ->addRow(['2014', 873490]);

        \LAVA::AreaChart('Population', $population, [
            'title' => 'Population Growth',
            'legend' => [
                'position' => 'in'
            ]
        ]);
         return view('pages.articles');
 	}
 }