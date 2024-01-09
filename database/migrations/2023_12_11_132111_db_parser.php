<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration

{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        schema::create('db_parser_modele', function( blueprint $page){


            $page->string('ID(Barcode)');
            $page->string('ID(Barcode_Type)');
            $page->string('chirurgie/interne(Barcode)');
            $page->string('chirurgie/interne(Barcode Type)');
            $page->string('Nouveau champ-03(Zonal OCR)');
            $page->string('Full Path');
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
