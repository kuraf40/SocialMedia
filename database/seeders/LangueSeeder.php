<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Langue;

class LangueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $langues = [
          ['code' => 'en', 'nom' => 'English', 'locale' => 'en-US', 'direction' => 'ltr'],
          ['code' => 'fr', 'nom' => 'Français', 'locale' => 'fr-FR', 'direction' => 'ltr'],
          ['code' => 'es', 'nom' => 'Español', 'locale' => 'es-ES', 'direction' => 'ltr'],
          ['code' => 'de', 'nom' => 'Deutsch', 'locale' => 'de-DE', 'direction' => 'ltr'],
          ['code' => 'ar', 'nom' => 'العربية', 'locale' => 'ar-AR', 'direction' => 'rtl'],
          ['code' => 'zh', 'nom' => '中文', 'locale' => 'zh-CN', 'direction' => 'ltr'],
          ['code' => 'ja', 'nom' => '日本語', 'locale' => 'ja-JP', 'direction' => 'ltr'],
          ['code' => 'ru', 'nom' => 'Русский', 'locale' => 'ru-RU', 'direction' => 'ltr'],
      ];

      foreach($langues as $langue){
        Langue::create($langue);
      }
    }
}
