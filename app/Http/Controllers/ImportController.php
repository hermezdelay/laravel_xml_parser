<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImportController extends Controller
{

    public function affichage( Request $request)
    {
        $afficher = DB::table('db_parser_modeles')->get();
        $i=1;

        
        echo '  </br>
                </br>
                </br>
                <div class="d-grid gap-2 col-6 mx-auto">                    
                    <a href="../" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Revenir a la page d"accueil</a>
                </div>
                
                </br>
                </br>';


                        foreach ($afficher as $item) {

                            

                            echo "</br> <h4 style='align: center; margin-left: 15%; margin-right: 15%'> page ".$i++." " ;

                            $name = 'ID(Barcode)' ;
                            $value = $item->{'ID(Barcode)'} ;                            
                            
                            echo '  <div class="input-group mb-3" >
                                        <span class="input-group-text" id="basic-addon1">'.$name.'</span>
                                        <input type="text" class="form-control" placeholder="'.$value.'" value="'.$value.'" aria-describedby="basic-addon1">
                                        
                                        <input class="btn btn-primary" type="submit" value="Modifier">
                                        <a href="../" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Suprimer</a>
                                    
                                    </div> ';

                                    $name = 'ID(Barcode Type)' ;
                                    $value = $item->{'ID(Barcode Type)'} ;                            
                                    
                                    echo '  <div class="input-group mb-3" >
                                                <span class="input-group-text" id="basic-addon1">'.$name.'</span>
                                                <input type="text" class="form-control" placeholder="'.$value.'" value="'.$value.'" aria-describedby="basic-addon1">
                                                
                                                <input class="btn btn-primary" type="submit" value="Modifier">
                                                <a href="../" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Suprimer</a>
                                            
                                            </div> ';

                                            $name = 'chirurgie/interne(Barcode)' ;
                                            $value = $item->{'chirurgie/interne(Barcode)'} ;                            
                                                    
                                                    echo '  <div class="input-group mb-3" >
                                                                <span class="input-group-text" id="basic-addon1">'.$name.'</span>
                                                                <input type="text" class="form-control" placeholder="'.$value.'" value="'.$value.'" aria-describedby="basic-addon1">
                                                                
                                                                <input class="btn btn-primary" type="submit" value="Modifier">
                                                                <a href="../" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Suprimer</a>
                                                            
                                                            </div> ';
                                                            
                                    $name = 'chirurgie/interne(Barcode Type)' ;
                                    $value = $item->{'chirurgie/interne(Barcode Type)'} ;                            
                                            
                                            echo '  <div class="input-group mb-3" >
                                                        <span class="input-group-text" id="basic-addon1">'.$name.'</span>
                                                        <input type="text" class="form-control" placeholder="'.$value.'" value="'.$value.'" aria-describedby="basic-addon1">
                                                        
                                                        <input class="btn btn-primary" type="submit" value="Modifier">
                                                        <a href="../" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Suprimer</a>
                                                    
                                                    </div> ';      

                                                    $name = 'Nouveau champ-03(Zonal OCR)' ;
                                                    $value = $item->{'Nouveau champ-03(Zonal OCR)'} ;                            
                                                            
                                                            echo '  <div class="input-group mb-3" >
                                                                        <span class="input-group-text" id="basic-addon1">'.$name.'</span>
                                                                        <input type="text" class="form-control" placeholder="'.$value.'" value="'.$value.'" aria-describedby="basic-addon1">
                                                                        
                                                                        <input class="btn btn-primary" type="submit" value="Modifier">
                                                                        <a href="../" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Suprimer</a>
                                                                    
                                                                    </div> ';

                                    $name = 'Full Path' ;
                                    $value = $item->{'Full Path'} ;                            
                                            
                                            echo '  <div class="input-group mb-3" >
                                                        <span class="input-group-text" id="basic-addon1">'.$name.'</span>
                                                        <input type="text" class="form-control" placeholder="'.$value.'" value="'.$value.'" aria-describedby="basic-addon1">
                                                        
                                                        <input class="btn btn-primary" type="submit" value="Modifier">
                                                        <a href="../" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Suprimer</a>
                                                    
                                                    </div> ';
                          
                        }
                
                echo "</h4>" ;
                    //dd($champ2);
                    // Utilisez le modèle Eloquent pour insérer les données



                    return view('affichage');
            //dd($afficher->all());
    }


    // cette fonction à été généré automatiquement depuis CHATGPT
    public function importXml()
    {

        //$xmlContent = file_get_contents(chemin_XML);
        $xmlContent = file_get_contents('../resources/views/nesrine_xml.xml');

        // Parsez le XML
        $xml = simplexml_load_string($xmlContent);
        // Insérez les données dans la base de données
        $i=0;

        
        echo '  </br>
                </br>
                </br>
                <div class="d-grid gap-2 col-6 mx-auto">                    
                    <a href="../" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Revenir a la page d"accueil</a>
                </div>
                
                </br>
                </br>';


            foreach ($xml->page as $page) {

                $i++;
               $id_barecode  = 0;
               $id_barecode_type  = 0;
               $chirurgie_interne_barecode  = "";
               $chirurgie_interne_barecode_type  = "";
               $nouveau_champ_ocr  = "";
               $full_path  = "";

                echo "</br> <h4 style='align: center; margin-left: 15%; margin-right: 15%'> page ".$i." " ;

                        foreach ($page->item as $item) {

                            $name = (string)$item['name'] ;
                            $value = (string)$item['value'] ;                            
                            
                            echo '  <div class="input-group mb-3" >
                                        <span class="input-group-text" id="basic-addon1">'.$name.'</span>
                                        <input type="text" class="form-control" placeholder="'.$value.'" value="'.$value.'" aria-describedby="basic-addon1">
                                        
                                        <input class="btn btn-primary" type="submit" value="Modifier">
                                        <a href="../" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Suprimer</a>
                                    
                                    </div> ';
                            
                            if($name == 'ID(Barcode)') $id_barecode  = $value;
                            else if($name == 'ID(Barcode Type)') $id_barecode_type  = $value;
                            else if($name == 'chirurgie/interne(Barcode)') $chirurgie_interne_barecode  = $value;
                            else if($name == 'chirurgie/interne(Barcode Type)') $chirurgie_interne_barecode_type  = $value;
                            else if($name == 'Nouveau champ-03(Zonal OCR)') $nouveau_champ_ocr  = $value;
                            else if($name == 'Full Path') $full_path  = $value;                            
                        }
                
                echo "</h4>" ;
                    //dd($champ2);
                    // Utilisez le modèle Eloquent pour insérer les données

                    
                    $page_class = \App\Models\db_parser_modele::create([
                        'ID(Barcode)' => $id_barecode,
                        'ID(Barcode Type)' => $id_barecode_type,
                        'chirurgie/interne(Barcode)' => $chirurgie_interne_barecode,
                        'chirurgie/interne(Barcode Type)' => $chirurgie_interne_barecode_type,
                        'Nouveau champ-03(Zonal OCR)' => $nouveau_champ_ocr,
                        'Full Path' => $full_path
                    ]);
                    
                    //dd($page_class);
                    $page_class->save();

                    /*
                    $page_class = new \App\Models\db_parser_modele();
                    $page_class->id_barecode = $id_barecode;
                    $page_class->id_barecode_type = $id_barecode_type;
                    $page_class->chirurgie_interne_barecode = $chirurgie_interne_barecode;
                    $page_class->chirurgie_interne_barecode_type = $chirurgie_interne_barecode_type;
                    $page_class->nouveau_champ_ocr = $nouveau_champ_ocr;
                    $page_class->full_path = $full_path;
                    dd($page_class);
                    $page_class->save();
                    */



                    //$page_class = new \App\Models\db_parser_modele($id_barecode ,$id_barecode_type, $chirurgie_interne_barecode,$chirurgie_interne_barecode_type,$nouveau_champ_ocr,$full_path);
                   
                    //$page_class->save();


            }


        //return response()->json(['message' => 'Import réussi']);
        
        return view('base');


    }


    /*
    $xmlContent = file_get_contents('../resources/views/nesrine_xml.xml');
    $xml = new simpleXMLElement($xmlContent);

    foreach ($xml->page as $page) {
        
        foreach ($page->item as $item) {

                $champ1 = (string)$item;
                $champ2 = (string)$item->name;
                echo "</br> voici le: ".$champ1."de :".$champ2 ;

                
                $value = (string) $item->value[0];
                echo "</br> héhé le: ".$value;
                //dd($value);
        }
    }
    */

}
