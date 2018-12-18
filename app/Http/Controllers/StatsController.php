<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
class StatsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        return view('pages.articles');
    }

    public function create(Request $request)
    {
        $post = $_POST;
        $lava = new Lavacharts;
        //instancier et crée la structure du graphique
        $grid = \Lava::DataTable();
        $grid->addStringColumn('Mois')
             ->addNumberColumn('CA');
        // création des entete et leur niveau ici mettre les resultats des requetes
        $grid->addRow([$request->input('dates'),  rand(1,5)])
             ->addRow(['fév-2016',  rand(1,5)])
             ->addRow(['mar-2016',  rand(1,5)]);
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
                   ->addRow(array('Germany', 200))
                   ->addRow(array('United States', 300))
                   ->addRow(array('Brazil', 400))
                   ->addRow(array('Spain', 500))
                   ->addRow(array('France', 600))
                   ->addRow(array('Belgium', 700));

         \LAVA::GeoChart('Popularity', $popularity,[
            'colorAxis' =>'#eb6b2c',
            'width' => '10%',
            'height' => '10%',
            'size'=>'300',
            'keepAspectRatio'=> true
            
        ]);

        $pie = new Lavacharts; // See note below for Laravel

            $reasons = \LAVA::DataTable();

            $reasons->addStringColumn('Reasons')
                    ->addNumberColumn('Percent')
                    ->addRow(['Check Reviews', 5])
                    ->addRow(['Watch Trailers', 2])
                    ->addRow(['See Actors Other Work', 4])
                    ->addRow(['Settle Argument', 89]);

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

       return view('pages.articles',compact($lava));

    }

 
  
}
