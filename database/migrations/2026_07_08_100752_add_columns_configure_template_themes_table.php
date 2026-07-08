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
        Schema::table('template_themes', function (Blueprint $table) {
            $table->string('primary_color', 10)->default('#10131C');
            $table->string('secondary_color', 10)->default('#FF7A1D');
            $table->string('accent_color')->default('#10513D80');
            $table->string('text_color', 10)->default('#565656');
            $table->string('path_image_logo_header')->nullable();
            $table->string('path_image_logo_footer')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('template_themes', function (Blueprint $table) {
            //
        });
    }
};
