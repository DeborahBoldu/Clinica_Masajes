<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use App\Models\Service;

return new class extends Migration {
    public function up(): void {
        Schema::table('services', function (Blueprint $table) {
            $table->string('slug')->unique()->after('name');
            $table->string('image_path')->nullable()->after('slug');
            $table->text('benefits')->nullable()->after('description');
            $table->text('contraindications')->nullable()->after('benefits');
            $table->longText('long_description')->nullable()->after('contraindications');
        });

        
        Service::query()->each(function($s){
            $s->slug = Str::slug($s->name).'-'.Str::random(5);
            $s->save();
        });
    }

    public function down(): void {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn(['slug','image_path','benefits','contraindications','long_description']);
        });
    }
};
