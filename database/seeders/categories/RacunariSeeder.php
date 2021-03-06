<?php

namespace Database\Seeders\Categories;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RacunariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $racunari = [

            // ROOT CATEGORY
            ['name' => 'Računari', 'root' => 1],

            // Brand name category and children
            ['name' => 'Brand name računari', 'root' => 0],
            ['name' => 'Asus računari', 'root' => 0],
            ['name' => 'HP računari', 'root' => 0],
            ['name' => 'Dell računari', 'root' => 0],
            ['name' => 'Lenovo računari', 'root' => 0],
            ['name' => 'Apple računari', 'root' => 0],
            ['name' => 'MSG računari', 'root' => 0],
            ['name' => 'MSI računari', 'root' => 0],

            ['name' => 'Polovni računari', 'root' => 0],

            // Tastature i miševi
            ['name' => 'Tastature i miš kompleti', 'root' => 0],
            ['name' => 'Tastature', 'root' => 0],
            ['name' => 'Miševi', 'root' => 0],
            ['name' => 'Acme miševi', 'root' => 0],
            ['name' => 'Apple miševi', 'root' => 0],
            ['name' => 'BASIC XL miševi', 'root' => 0],
            ['name' => 'BORG miševi', 'root' => 0],
            ['name' => 'AULA miševi', 'root' => 0],
            ['name' => 'Canyon miševi', 'root' => 0],
            ['name' => 'DELL miševi', 'root' => 0],
            ['name' => 'Steelseries miševi', 'root' => 0],
            ['name' => 'Cooler Master miševi', 'root' => 0],
            ['name' => 'Genius miševi', 'root' => 0],
            ['name' => 'HP miševi', 'root' => 0],
            ['name' => 'Kingston miševi', 'root' => 0],
            ['name' => 'Konig miševi', 'root' => 0],
            ['name' => 'Lenovo miševi', 'root' => 0],
            ['name' => 'Logitech miševi', 'root' => 0],
            ['name' => 'Microsoft miševi', 'root' => 0],
            ['name' => 'MS miševi', 'root' => 0],
            ['name' => 'Razer miševi', 'root' => 0],
            ['name' => 'Marvo miševi', 'root' => 0],
            ['name' => 'Trust miševi', 'root' => 0],
            ['name' => 'Zowie miševi', 'root' => 0],
            ['name' => 'Redragon miševi', 'root' => 0],
            
            // Podloge za miš
            ['name' => 'Podloge za miš', 'root' => 0],
            ['name' => 'Asus podloge za miš', 'root' => 0],
            ['name' => 'Canyon podloge za miš', 'root' => 0],
            ['name' => 'Connect XL podloge za miš', 'root' => 0],
            ['name' => 'Marvo podloge za miš', 'root' => 0],
            ['name' => 'Kingston podloge za miš', 'root' => 0],
            ['name' => 'Acme podloge za miš', 'root' => 0],
            ['name' => 'MS podloge za miš', 'root' => 0],
            ['name' => 'Razer podloge za miš', 'root' => 0],
            ['name' => 'SAL podloge za miš', 'root' => 0],
            ['name' => 'Steelseries podloge za miš', 'root' => 0],
            ['name' => 'Trust podloge za miš', 'root' => 0],
            ['name' => 'Satechi podloge za miš', 'root' => 0],
            ['name' => 'Redragon podloge za miš', 'root' => 0],

            // Slušalice and children
            ['name' => 'Slušalice', 'root' => 0],

            // Komponente and children
            ['name' => 'Komponente', 'root' => 0],

            // Procesori and children
            ['name' => 'Procesori', 'root' => 0],
            ['name' => 'Intel procesori', 'root' => 0],
            ['name' => 'AMD procesori', 'root' => 0],

            // Maticne ploce and children
            ['name' => 'Matične ploce', 'root' => 0],
            ['name' => 'Asrock matične ploce', 'root' => 0],
            ['name' => 'Asus matične ploce', 'root' => 0],
            ['name' => 'Biostar matične ploce', 'root' => 0],
            ['name' => 'MSI matične ploce', 'root' => 0],
            ['name' => 'Gigabyte matične ploce', 'root' => 0],

            // RAM and children
            ['name' => 'RAM memorije', 'root' => 0],
            ['name' => 'Intenso RAM memorije', 'root' => 0],
            ['name' => 'Adata RAM memorije', 'root' => 0],
            ['name' => 'Apacer RAM memorije', 'root' => 0],
            ['name' => 'Axagon RAM memorije', 'root' => 0],
            ['name' => 'Goodram RAM memorije', 'root' => 0],
            ['name' => 'Gigabyte RAM memorije', 'root' => 0],
            ['name' => 'Kingston RAM memorije', 'root' => 0],
            ['name' => 'Lenovo RAM memorije', 'root' => 0],
            ['name' => 'Transcend RAM memorije', 'root' => 0],

            // Napojne jedinice and children
            ['name' => 'Napojne jedinice', 'root' => 0],
            ['name' => 'ANS napojne jedinice', 'root' => 0],
            ['name' => 'Cooler Master napojne jedinice', 'root' => 0],
            ['name' => 'Chieftech napojne jedinice', 'root' => 0],
            ['name' => 'Fortron napojne jedinice', 'root' => 0],
            ['name' => 'Gigabyte napojne jedinice', 'root' => 0],
            ['name' => 'Ezmax napojne jedinice', 'root' => 0],
            ['name' => 'Seasonic napojne jedinice', 'root' => 0],
            ['name' => 'MS napojne jedinice', 'root' => 0],
            ['name' => 'Thermaltake napojne jedinice', 'root' => 0],
            ['name' => 'LC power napojne jedinice', 'root' => 0],

            // Grafičke kartice and children 
            ['name' => 'Grafičke kartice', 'root' => 0],
            ['name' => 'Asus grafičke kartice', 'root' => 0],
            ['name' => 'Biostar grafičke kartice', 'root' => 0],
            ['name' => 'Gigabyte grafičke kartice', 'root' => 0],

            // Hard diskovi and children
            ['name' => 'Hard diskovi', 'root' => 0],
            ['name' => 'Lenovo hard diskovi', 'root' => 0],
            ['name' => 'Hitachi hard diskovi', 'root' => 0],
            ['name' => 'Samsung hard diskovi', 'root' => 0],
            ['name' => 'Toshiba hard diskovi', 'root' => 0],
            ['name' => 'Seagate hard diskovi', 'root' => 0],
            ['name' => 'Dell hard diskovi', 'root' => 0],
            ['name' => 'WD hard diskovi', 'root' => 0],
            ['name' => 'Transcend hard diskovi', 'root' => 0],

            // SSD diskovi and children
            ['name' => 'SSD diskovi', 'root' => 0],
            ['name' => 'Intenso SSD diskovi', 'root' => 0],
            ['name' => 'Adata SSD diskovi', 'root' => 0],
            ['name' => 'Apacer SSD diskovi', 'root' => 0],
            ['name' => 'Crucial SSD diskovi', 'root' => 0],
            ['name' => 'Gigabyte SSD diskovi', 'root' => 0],
            ['name' => 'Goodram SSD diskovi', 'root' => 0],
            ['name' => 'Kingston SSD diskovi', 'root' => 0],
            ['name' => 'WD SSD diskovi', 'root' => 0],
            ['name' => 'Team SSD diskovi', 'root' => 0],
            ['name' => 'Samsung SSD diskovi', 'root' => 0],
            ['name' => 'Transcend SSD diskovi', 'root' => 0],
            ['name' => 'Seagate SSD diskovi', 'root' => 0],
            ['name' => 'Lenovo SSD diskovi', 'root' => 0],

            // Kućista za pc and children
            ['name' => 'Kućišta za PC', 'root' => 0],
            ['name' => 'ANS kućišta za PC', 'root' => 0],
            ['name' => 'Asus kućišta za PC', 'root' => 0],
            ['name' => 'Chieftech  kućišta za PC', 'root' => 0],
            ['name' => 'Cooler Master kućišta za PC', 'root' => 0],
            ['name' => 'Corsair kućišta za PC', 'root' => 0],
            ['name' => 'Fortron kućišta za PC', 'root' => 0],
            ['name' => 'Gigabyte kućišta za PC', 'root' => 0],
            ['name' => 'LC power kućišta za PC', 'root' => 0],
            ['name' => 'Therbaltake kućišta za PC', 'root' => 0],
            ['name' => 'Sama kućišta za PC', 'root' => 0],
            ['name' => 'MS kućišta za PC', 'root' => 0],
            ['name' => 'Inner-tech kućišta za PC', 'root' => 0],

            // Hladnjaci i kuleri and children
            ['name' => 'Hladnjaci i kuleri', 'root' => 0],
            ['name' => 'Artic hladnjaci i kuleri', 'root' => 0],
            ['name' => 'Asus hladnjaci i kuleri', 'root' => 0],
            ['name' => 'Intel hladnjaci i kuleri', 'root' => 0],
            ['name' => 'UBIT hladnjaci i kuleri', 'root' => 0],
            ['name' => 'Cooler master hladnjaci i kuleri', 'root' => 0],
            ['name' => 'Fractal design hladnjaci i kuleri', 'root' => 0],
            ['name' => 'LC power hladnjaci i kuleri', 'root' => 0],
            ['name' => 'Legend hladnjaci i kuleri', 'root' => 0],
            ['name' => 'Marvo hladnjaci i kuleri', 'root' => 0],
            ['name' => 'Thermaltake hladnjaci i kuleri', 'root' => 0],

            ['name' => 'Zvučne kartice', 'root' => 0],

            // Eksterni hard diskovi and children
            ['name' => 'Eksterni hard diskovi', 'root' => 0],
            ['name' => 'Adata eksterni hard diskovi', 'root' => 0],
            ['name' => 'Apacer eksterni hard diskovi', 'root' => 0],
            ['name' => 'Samsung eksterni hard diskovi', 'root' => 0],
            ['name' => 'Seagate eksterni hard diskovi', 'root' => 0],
            ['name' => 'WD eksterni hard diskovi', 'root' => 0],
            ['name' => 'Toshiba eksterni hard diskovi', 'root' => 0],
            ['name' => 'Transcend eksterni hard diskovi', 'root' => 0],

            ['name' => 'Kućišta za hard diskove', 'root' => 0],

            // Monitori and children
            ['name' => 'Monitori', 'root' => 0],
            ['name' => 'Benq monitori', 'root' => 0],
            ['name' => 'DELL monitori', 'root' => 0],
            ['name' => 'HP monitori', 'root' => 0],
            ['name' => 'Samsung monitori', 'root' => 0],
            ['name' => 'Tesla monitori', 'root' => 0],
            ['name' => 'Acer monitori', 'root' => 0],
        ];

        DB::table('categories')->insert($racunari);
    }
}
